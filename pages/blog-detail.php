<?php
/**
 * Blog Detail Page
 * Full article with TOC, FAQ schema, internal linking
 * UI/UX: Editorial style — clean serif headlines, sticky TOC, smooth FAQ accordion
 */
$slug = clean($_GET['slug'] ?? '');

if (empty($slug)) {
    header('Location: ' . url('blog'));
    exit;
}

// Fetch post
$stmt = db()->prepare("SELECT bp.*, bc.name as category_name, bc.slug as category_slug,
                               au.full_name as author_name
                        FROM blog_posts bp 
                        LEFT JOIN blog_categories bc ON bp.category_id = bc.id
                        LEFT JOIN admin_users au ON bp.author_id = au.id
                        WHERE bp.slug = ? AND bp.status = 'published'");
$stmt->execute([$slug]);
$post = $stmt->fetch();

if (!$post) {
    http_response_code(404);
    $pageTitle = 'Post Not Found';
    include __DIR__ . '/404.php';
    exit;
}

// SEO
SEO::set('meta_title', $post['meta_title'] ?: $post['title'] . ' — ' . SITE_NAME);
SEO::set('meta_description', $post['meta_description'] ?: truncate(strip_tags($post['excerpt'] ?? $post['content']), 160));
SEO::set('meta_keywords', $post['meta_keywords'] ?? '');
SEO::set('og_image', $post['og_image'] ?: ($post['featured_image'] ? url($post['featured_image']) : ''));
SEO::set('canonical_url', $post['canonical_url'] ?: url('blog/' . $post['slug']));

// Schemas
$schemas = [];
$schemas[] = SEO::articleSchema($post);

// Get FAQs - combine blog_faqs JSON and service-level FAQs
$postFaqs = [];

// First, get blog-specific FAQs from JSON in post (if column exists)
if (isset($post['blog_faqs']) && !empty($post['blog_faqs'])) {
    $blogFaqsData = json_decode($post['blog_faqs'], true);
    if (is_array($blogFaqsData)) {
        $postFaqs = array_map(function($faq) {
            return [
                'question' => $faq['question'] ?? '',
                'answer' => $faq['answer'] ?? '',
                'is_active' => 1
            ];
        }, $blogFaqsData);
    }
}

// Also get service-level FAQs if any
$serviceFaqs = getFaqs('blog-' . $post['slug']);
if (!empty($serviceFaqs)) {
    $postFaqs = array_merge($postFaqs, $serviceFaqs);
}

// Create FAQ schema if FAQs exist
if (!empty($postFaqs)) {
    $schemas[] = SEO::faqSchema($postFaqs);
}

$schemas[] = SEO::breadcrumbSchema([
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'Blog', 'url' => url('blog')],
    ['name' => $post['title'], 'url' => url('blog/' . $post['slug'])]
]);

$content = $post['content'] ?? '';

// Decode multiple times in case the content was double/triple encoded
for ($i = 0; $i < 5; $i++) {
    $decoded = html_entity_decode($content, ENT_QUOTES | ENT_HTML5, 'UTF-8');

    if ($decoded === $content) {
        break;
    }

    $content = $decoded;
}

// Generate TOC from content
function generateTOC($content) {
    $toc = [];
    preg_match_all('/<h([23])[^>]*>(.*?)<\/h\1>/i', $content, $matches, PREG_SET_ORDER);
    foreach ($matches as $i => $match) {
        $toc[] = [
            'level' => $match[1],
            'text'  => strip_tags($match[2]),
            'id'    => 'section-' . ($i + 1),
        ];
    }
    return $toc;
}

function addHeadingIds($content) {
    $counter = 0;
    return preg_replace_callback('/<h([23])([^>]*)>(.*?)<\/h\1>/i', function($m) use (&$counter) {
        $counter++;
        return "<h{$m[1]} id=\"section-{$counter}\"{$m[2]}>{$m[3]}</h{$m[1]}>";
    }, $content);
}

$toc            = generateTOC($post['content'] ?? '');
$contentWithIds = addHeadingIds($post['content'] ?? '');

// Related posts
$relatedStmt = db()->prepare("SELECT bp.*, bc.name as category_name, bc.slug as category_slug 
                               FROM blog_posts bp 
                               LEFT JOIN blog_categories bc ON bp.category_id = bc.id 
                               WHERE bp.status = 'published' AND bp.id != ? AND bp.category_id = ?
                               ORDER BY bp.published_at DESC LIMIT 3");
$relatedStmt->execute([$post['id'], $post['category_id']]);
$relatedPosts = $relatedStmt->fetchAll();

if (count($relatedPosts) < 3) {
    $fillStmt = db()->prepare("SELECT bp.*, bc.name as category_name, bc.slug as category_slug 
                                FROM blog_posts bp 
                                LEFT JOIN blog_categories bc ON bp.category_id = bc.id 
                                WHERE bp.status = 'published' AND bp.id != ?
                                ORDER BY bp.published_at DESC LIMIT ?");
    $fillStmt->execute([$post['id'], 3 - count($relatedPosts)]);
    $relatedPosts = array_slice(array_merge($relatedPosts, $fillStmt->fetchAll()), 0, 3);
}

// Estimated read time
$wordCount = str_word_count(strip_tags($post['content'] ?? ''));
$readTime  = max(1, round($wordCount / 200)) . ' min read';

ob_start();
?>

<!-- ═══════════════════════════════════════════════════════
     INLINE STYLES  (scoped to .bd-* so nothing leaks out)
     ═══════════════════════════════════════════════════════ -->
<style>
/* ── Reset & tokens ─────────────────────────────────────── */
.bd-wrap *{box-sizing:border-box}
.bd-wrap{
  --bd-ink:        #111111;
  --bd-ink2:       #555555;
  --bd-ink3:       #999999;
  --bd-bg:         #ffffff;
  --bd-bg2:        #f7f7f5;
  --bd-bg3:        #eeede8;
  --bd-line:       #e8e8e4;
  --bd-accent:     #c0440a;
  --bd-accent-l:   #fff5f0;
  --bd-accent2:    #1e5fa8;
  --bd-tag-bg:     #eef3fc;
  --bd-tag-c:      #1a4f8a;
  --bd-r:          10px;
  --bd-r2:         14px;
  --bd-r3:         18px;
  font-family: 'DM Sans', system-ui, sans-serif;
  background: var(--bd-bg);
  color: var(--bd-ink);
}

/* ── Post header ─────────────────────────────────────────── */
.bd-header{
  background: #ffffff;
  padding: 44px 0 32px;
  border-bottom: 1px solid var(--bd-line);
}
.bd-header-inner{max-width:740px;margin:0 auto;padding:0 24px}

.bd-breadcrumb{
  display:flex;align-items:center;gap:6px;
  font-size:12px;color:var(--bd-ink3);margin-bottom:18px;flex-wrap:wrap;
}
.bd-breadcrumb a{color:var(--bd-ink3);text-decoration:none;transition:color .15s}
.bd-breadcrumb a:hover{color:var(--bd-ink)}

.bd-cat-badge{
  display:inline-block;
  background:var(--bd-tag-bg);color:var(--bd-tag-c);
  font-size:11px;font-weight:600;letter-spacing:.07em;text-transform:uppercase;
  padding:4px 11px;border-radius:20px;text-decoration:none;
  margin-bottom:16px;transition:background .15s;
}
.bd-cat-badge:hover{background:#ddeaf9}

.bd-title{
  font-family: 'Lora', Georgia, serif;
  font-size: clamp(24px, 4vw, 38px);
  font-weight: 600;
  line-height: 1.22;
  color: var(--bd-ink);
  letter-spacing: -.4px;
  margin-bottom: 16px;
}

.bd-excerpt{
  font-size:17px;color:var(--bd-ink2);line-height:1.75;margin-bottom:22px;
}

.bd-meta{display:flex;align-items:center;gap:14px;flex-wrap:wrap;font-size:13px;color:var(--bd-ink3)}
.bd-author-chip{display:flex;align-items:center;gap:9px}
.bd-avatar{
  width:32px;height:32px;border-radius:50%;
  background:var(--bd-accent);color:#fff;
  font-size:13px;font-weight:700;
  display:flex;align-items:center;justify-content:center;
  flex-shrink:0;
}
.bd-author-name{color:var(--bd-ink2);font-weight:500}
.bd-meta-sep{opacity:.35}
.bd-read-chip{
  background:var(--bd-bg2);padding:3px 9px;
  border-radius:5px;font-size:12px;color:var(--bd-ink3);
}

/* ── Featured image ──────────────────────────────────────── */
.bd-img-wrap{
  max-width:900px;margin:0 auto;padding:0 24px;
  margin-top:-1px;
}
.bd-featured-img{
  width:100%;border-radius:var(--bd-r3);
  display:block;object-fit:cover;
  box-shadow:0 2px 20px rgba(0,0,0,.07);
}

/* ── Content area ────────────────────────────────────────── */
.bd-content-wrap{
  max-width:1140px;margin:0 auto;
  padding:40px 24px 80px;
}
.bd-grid{
  display:grid;
  grid-template-columns:220px 1fr;
  gap:48px;
  align-items:start;
}

/* ── TOC Sidebar ─────────────────────────────────────────── */
.bd-sidebar{position:sticky;top:24px}

.bd-toc-box,
.bd-share-box{
  background:var(--bd-bg2);
  border:1px solid var(--bd-line);
  border-radius:var(--bd-r2);
  padding:18px 20px;
  margin-bottom:14px;
}

.bd-box-label{
  font-size:10px;font-weight:700;letter-spacing:.1em;
  text-transform:uppercase;color:var(--bd-ink3);
  margin-bottom:12px;
}

.bd-toc-list{list-style:none;padding:0;margin:0}
.bd-toc-item{margin-bottom:1px}
.bd-toc-item a{
  display:block;font-size:13px;color:var(--bd-ink2);
  text-decoration:none;padding:5px 0 5px 12px;
  border-left:2px solid transparent;
  line-height:1.45;
  transition:color .15s,border-color .15s;
}
.bd-toc-item a:hover,
.bd-toc-item a.bd-toc-active{color:var(--bd-accent);border-left-color:var(--bd-accent)}
.bd-toc-item.bd-sub a{padding-left:22px;font-size:12px;color:var(--bd-ink3)}
.bd-toc-item.bd-sub a:hover,
.bd-toc-item.bd-sub a.bd-toc-active{color:var(--bd-accent)}

.bd-share-btns{display:flex;gap:8px}
.bd-share-btn{
  width:34px;height:34px;border-radius:8px;
  background:var(--bd-bg);border:1px solid var(--bd-line);
  display:flex;align-items:center;justify-content:center;
  text-decoration:none;color:var(--bd-ink2);
  transition:border-color .15s,color .15s;
}
.bd-share-btn:hover{border-color:var(--bd-accent);color:var(--bd-accent)}
.bd-share-btn svg{width:15px;height:15px;fill:currentColor;display:block}

/* ── Prose ───────────────────────────────────────────────── */
.bd-prose{
  font-size:16px;
  line-height:1.85;
  color:#1f1f1f;
}
.bd-prose h2{
  font-family:'Lora',Georgia,serif;
  font-size:22px;font-weight:600;
  color:var(--bd-ink);margin:40px 0 14px;
  letter-spacing:-.2px;line-height:1.3;
  padding-top:4px;
}
.bd-prose h3{
  font-family:'Lora',Georgia,serif;
  font-size:18px;font-weight:600;
  color:var(--bd-ink);margin:28px 0 10px;
}
.bd-prose p{margin-bottom:20px}
.bd-prose strong{font-weight:600;color:var(--bd-ink)}
.bd-prose a{color:var(--bd-accent2);text-decoration:underline;text-decoration-thickness:1px}
.bd-prose a:hover{color:var(--bd-accent)}
.bd-prose ul,.bd-prose ol{margin:0 0 20px 22px}
.bd-prose li{margin-bottom:8px;line-height:1.75}
.bd-prose img{max-width:100%;border-radius:var(--bd-r2);margin:8px 0 4px}
.bd-prose table{width:100%;border-collapse:collapse;margin:20px 0 24px;font-size:14px}
.bd-prose table th{
  background:var(--bd-bg3);padding:10px 14px;text-align:left;
  font-weight:600;font-size:12px;letter-spacing:.04em;
  color:var(--bd-ink2);border-bottom:2px solid var(--bd-line);
}
.bd-prose table td{padding:10px 14px;border-bottom:1px solid var(--bd-line)}
.bd-prose table tr:last-child td{border-bottom:none}
.bd-prose table tr:hover td{background:var(--bd-bg2)}
.bd-prose blockquote{
  border-left:3px solid var(--bd-accent);
  background:var(--bd-accent-l);
  padding:14px 20px;
  border-radius:0 var(--bd-r) var(--bd-r) 0;
  margin:24px 0;font-style:italic;color:#5c3a28;
}
.bd-prose blockquote p{margin:0;color:inherit}
.bd-prose pre{
  background:var(--bd-bg3);border-radius:var(--bd-r);
  padding:16px 18px;overflow-x:auto;
  font-size:13.5px;line-height:1.6;margin-bottom:20px;
}
.bd-prose code{
  background:var(--bd-bg3);padding:2px 6px;
  border-radius:4px;font-size:13.5px;
}
.bd-prose pre code{background:none;padding:0}

/* ── FAQ accordion ───────────────────────────────────────── */
.bd-faq-section{
  margin-top:48px;padding-top:36px;
  border-top:1px solid var(--bd-line);
}
.bd-faq-heading{
  font-family:'Lora',Georgia,serif;
  font-size:22px;font-weight:600;color:var(--bd-ink);
  margin-bottom:20px;
}
.bd-faq-item{
  border:1px solid var(--bd-line);border-radius:var(--bd-r2);
  overflow:hidden;margin-bottom:8px;
  transition:border-color .2s;
}
.bd-faq-item.bd-open{border-color:var(--bd-bg3)}
.bd-faq-btn{
  width:100%;background:none;border:none;
  padding:16px 18px;text-align:left;cursor:pointer;
  display:flex;align-items:center;justify-content:space-between;gap:12px;
  font-family:inherit;transition:background .15s;
}
.bd-faq-btn:hover{background:var(--bd-bg2)}
.bd-faq-q{font-size:14.5px;font-weight:600;color:var(--bd-ink);line-height:1.45;flex:1}
.bd-faq-icon{
  width:22px;height:22px;min-width:22px;
  border-radius:50%;background:var(--bd-bg3);
  display:flex;align-items:center;justify-content:center;
  transition:transform .25s,background .15s;
}
.bd-faq-item.bd-open .bd-faq-icon{
  transform:rotate(180deg);
  background:var(--bd-accent-l);
}
.bd-faq-icon svg{width:10px;height:10px;stroke:var(--bd-ink3);fill:none;stroke-width:2.2;display:block}
.bd-faq-item.bd-open .bd-faq-icon svg{stroke:var(--bd-accent)}
.bd-faq-body{
  max-height:0;overflow:hidden;
  transition:max-height .35s cubic-bezier(.4,0,.2,1);
}
.bd-faq-item.bd-open .bd-faq-body{max-height:500px}
.bd-faq-answer{
  padding:4px 18px 18px;
  font-size:14px;color:var(--bd-ink2);line-height:1.75;
}

/* ── Author box ──────────────────────────────────────────── */
.bd-author-box{
  margin-top:44px;padding:22px 24px;
  background:var(--bd-bg2);border:1px solid var(--bd-line);
  border-radius:var(--bd-r2);
  display:flex;gap:18px;align-items:center;
}
.bd-author-big-av{
  width:52px;height:52px;min-width:52px;border-radius:50%;
  background:var(--bd-accent);color:#fff;
  font-size:19px;font-weight:700;font-family:'Lora',serif;
  display:flex;align-items:center;justify-content:center;
}
.bd-author-name-big{font-weight:600;font-size:15px;color:var(--bd-ink);margin-bottom:4px}
.bd-author-bio{font-size:13px;color:var(--bd-ink2);line-height:1.55}

/* ── Related posts ───────────────────────────────────────── */
.bd-related{
  background: #f7f7f5;
  border-top: 1px solid var(--bd-line);
  padding: 52px 24px 64px;
}
.bd-related-inner{max-width:1140px;margin:0 auto}
.bd-related-title{
  font-family:'Lora',Georgia,serif;
  font-size:21px;font-weight:600;color:var(--bd-ink);
  margin-bottom:24px;
}
.bd-related-grid{
  display:grid;
  grid-template-columns:repeat(auto-fill,minmax(260px,1fr));
  gap:20px;
}
.bd-rel-card{
  background:var(--bd-bg);border:1px solid var(--bd-line);
  border-radius:var(--bd-r2);overflow:hidden;
  text-decoration:none;
  transition:border-color .2s,transform .2s;
  display:block;
}
.bd-rel-card:hover{border-color:var(--bd-bg3);transform:translateY(-3px)}
.bd-rel-thumb{
  width:100%;height:160px;object-fit:cover;
  display:block;background:var(--bd-bg3);
}
.bd-rel-thumb-ph{
  width:100%;height:160px;background:var(--bd-bg3);
  display:flex;align-items:center;justify-content:center;
  font-size:28px;opacity:.25;
}
.bd-rel-body{padding:16px 18px 18px}
.bd-rel-cat{
  font-size:10px;font-weight:700;letter-spacing:.07em;
  text-transform:uppercase;color:var(--bd-tag-c);
  background:var(--bd-tag-bg);padding:3px 8px;
  border-radius:4px;display:inline-block;margin-bottom:10px;
}
.bd-rel-title{
  font-family:'Lora',Georgia,serif;
  font-size:15px;font-weight:600;line-height:1.4;
  color:var(--bd-ink);margin-bottom:10px;
}
.bd-rel-meta{font-size:12px;color:var(--bd-ink3);display:flex;gap:8px;align-items:center}

/* ── Responsive ──────────────────────────────────────────── */
@media(max-width:860px){
  .bd-grid{grid-template-columns:1fr}
  .bd-sidebar{display:none}
}
@media(max-width:540px){
  .bd-title{font-size:22px}
  .bd-excerpt{font-size:15px}
}
</style>

<!-- ── Google Fonts (Lora + DM Sans) ── -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">

<!-- ════════════════════════════════════════════════════════
     PAGE
     ════════════════════════════════════════════════════════ -->
<div class="bd-wrap">
<article>

  <!-- ── HEADER ───────────────────────────────────────────── -->
  <header class="bd-header">
    <div class="bd-header-inner">

      <!-- Breadcrumb -->
      <nav class="bd-breadcrumb" aria-label="Breadcrumb">
        <a href="<?= url('/') ?>">Home</a>
        <span>›</span>
        <a href="<?= url('blog') ?>">Blog</a>
        <?php if ($post['category_name']): ?>
          <span>›</span>
          <a href="<?= url('blog') ?>?category=<?= urlencode($post['category_slug']) ?>">
            <?= clean($post['category_name']) ?>
          </a>
        <?php endif; ?>
      </nav>

      <!-- Category badge -->
      <?php if ($post['category_name']): ?>
        <a href="<?= url('blog') ?>?category=<?= urlencode($post['category_slug']) ?>" class="bd-cat-badge">
          <?= clean($post['category_name']) ?>
        </a>
      <?php endif; ?>

      <!-- Title -->
      <h1 class="bd-title"><?= clean($post['title']) ?></h1>

      <!-- Excerpt -->
      <?php if ($post['excerpt']): ?>
        <p class="bd-excerpt"><?= clean($post['excerpt']) ?></p>
      <?php endif; ?>

      <!-- Meta row -->
      <div class="bd-meta">
        <div class="bd-author-chip">
          <div class="bd-avatar">
            <?= strtoupper(substr($post['author_name'] ?? 'A', 0, 1)) ?>
          </div>
          <span class="bd-author-name"><?= clean($post['author_name'] ?? SITE_NAME) ?></span>
        </div>
        <span class="bd-meta-sep">·</span>
        <time datetime="<?= htmlspecialchars($post['published_at'] ?? $post['created_at']) ?>">
          <?= formatDate($post['published_at'] ?? $post['created_at']) ?>
        </time>
        <span class="bd-meta-sep">·</span>
        <span class="bd-read-chip"><?= $readTime ?></span>
      </div>

    </div>
  </header>

  <!-- ── FEATURED IMAGE ──────────────────────────────────── -->
  <?php if ($post['featured_image']): ?>
    <div class="bd-img-wrap" style="margin-top:32px;margin-bottom:0">
      <img
        src="<?= url($post['featured_image']) ?>"
        alt="<?= clean($post['title']) ?>"
        class="bd-featured-img"
        width="900"
        loading="eager"
      >
    </div>
  <?php endif; ?>

  <!-- ── CONTENT GRID ─────────────────────────────────────── -->
  <div class="bd-content-wrap">
    <div class="bd-grid">

      <!-- ── SIDEBAR ──────────────────────────────────────── -->
      <?php if (!empty($toc)): ?>
      <aside class="bd-sidebar" aria-label="Table of Contents">

        <!-- TOC -->
        <div class="bd-toc-box">
          <div class="bd-box-label">Table of Contents</div>
          <ul class="bd-toc-list" id="bdTocList">
            <?php foreach ($toc as $item): ?>
              <li class="bd-toc-item <?= $item['level'] === '3' ? 'bd-sub' : '' ?>">
                <a href="#<?= $item['id'] ?>">
                  <?= clean($item['text']) ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <!-- Share -->
        <div class="bd-share-box">
          <div class="bd-box-label">Share</div>
          <div class="bd-share-btns">
            <!-- X / Twitter -->
            <a href="https://twitter.com/intent/tweet?url=<?= urlencode(url('blog/' . $post['slug'])) ?>&text=<?= urlencode($post['title']) ?>"
               target="_blank" rel="noopener noreferrer" class="bd-share-btn" aria-label="Share on X">
              <svg viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
            </a>
            <!-- LinkedIn -->
            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?= urlencode(url('blog/' . $post['slug'])) ?>"
               target="_blank" rel="noopener noreferrer" class="bd-share-btn" aria-label="Share on LinkedIn">
              <svg viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
            </a>
            <!-- WhatsApp -->
            <a href="https://wa.me/?text=<?= urlencode($post['title'] . ' ' . url('blog/' . $post['slug'])) ?>"
               target="_blank" rel="noopener noreferrer" class="bd-share-btn" aria-label="Share on WhatsApp">
              <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347zM12 2a10 10 0 0 0-8.593 15.112L2 22l5.032-1.379A10 10 0 1 0 12 2z"/></svg>
            </a>
          </div>
        </div>

      </aside>
      <?php endif; ?>

      <!-- ── MAIN CONTENT ──────────────────────────────────── -->
      <div>
        <!-- Article body -->
        <div class="bd-prose">
          <?= $contentWithIds ?>
        </div>

        <!-- FAQs -->
        <?php if (!empty($postFaqs)): ?>
          <div class="bd-faq-section">
            <h2 class="bd-faq-heading">Frequently Asked Questions</h2>
            <div id="bdFaqGroup">
              <?php foreach ($postFaqs as $i => $faq): ?>
                <div class="bd-faq-item" id="bdFaq<?= $i ?>">
                  <button
                    class="bd-faq-btn"
                    aria-expanded="false"
                    aria-controls="bdFaqBody<?= $i ?>"
                    onclick="bdToggleFaq(<?= $i ?>)"
                  >
                    <span class="bd-faq-q"><?= clean($faq['question']) ?></span>
                    <span class="bd-faq-icon">
                      <svg viewBox="0 0 12 12" aria-hidden="true">
                        <polyline points="1,3.5 6,8.5 11,3.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </span>
                  </button>
                  <div class="bd-faq-body" id="bdFaqBody<?= $i ?>" role="region">
                    <div class="bd-faq-answer"><?= clean($faq['answer']) ?></div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>

        <!-- Author box -->
        <div class="bd-author-box">
          <div class="bd-author-big-av">
            <?= strtoupper(substr($post['author_name'] ?? 'G', 0, 1)) ?>
          </div>
          <div>
            <div class="bd-author-name-big">
              <?= clean($post['author_name'] ?? SITE_NAME . ' Team') ?>
            </div>
            <div class="bd-author-bio">
              Shopify growth experts sharing actionable insights for D2C brands.
            </div>
          </div>
        </div>

      </div><!-- /main content -->
    </div><!-- /grid -->
  </div><!-- /content-wrap -->

  <!-- ── RELATED POSTS ─────────────────────────────────────── -->
  <?php if (!empty($relatedPosts)): ?>
    <section class="bd-related">
      <div class="bd-related-inner">
        <h2 class="bd-related-title">Related Articles</h2>
        <div class="bd-related-grid">
          <?php foreach ($relatedPosts as $related): ?>
            <a href="<?= url('blog/' . $related['slug']) ?>" class="bd-rel-card">
              <?php if (!empty($related['featured_image'])): ?>
                <img
                  src="<?= url($related['featured_image']) ?>"
                  alt="<?= clean($related['title']) ?>"
                  class="bd-rel-thumb"
                  loading="lazy"
                >
              <?php else: ?>
                <div class="bd-rel-thumb-ph" aria-hidden="true"><?= ak_icon('file-text', 22) ?></div>
              <?php endif; ?>
              <div class="bd-rel-body">
                <?php if (!empty($related['category_name'])): ?>
                  <span class="bd-rel-cat"><?= clean($related['category_name']) ?></span>
                <?php endif; ?>
                <div class="bd-rel-title"><?= clean($related['title']) ?></div>
                <div class="bd-rel-meta">
                  <time><?= formatDate($related['published_at'] ?? $related['created_at']) ?></time>
                </div>
              </div>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

</article>
</div><!-- /.bd-wrap -->


<!-- ════════════════════════════════════════════════════════
     SCRIPTS
     ════════════════════════════════════════════════════════ -->
<script>
(function () {
  /* ── FAQ accordion ─────────────────────────────────────── */
  window.bdToggleFaq = function(i) {
    var item = document.getElementById('bdFaq' + i);
    var btn  = item.querySelector('.bd-faq-btn');
    var isOpen = item.classList.contains('bd-open');

    // Close all
    document.querySelectorAll('.bd-faq-item.bd-open').forEach(function(el) {
      el.classList.remove('bd-open');
      el.querySelector('.bd-faq-btn').setAttribute('aria-expanded', 'false');
    });

    // Open clicked (if it was closed)
    if (!isOpen) {
      item.classList.add('bd-open');
      btn.setAttribute('aria-expanded', 'true');
    }
  };

  /* ── Smooth scroll for TOC links ───────────────────────── */
  document.querySelectorAll('#bdTocList a').forEach(function(a) {
    a.addEventListener('click', function(e) {
      var target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        window.scrollTo({ top: target.getBoundingClientRect().top + window.scrollY - 84, behavior: 'smooth' });
      }
    });
  });

  /* ── Active TOC highlight on scroll ────────────────────── */
  var tocLinks = document.querySelectorAll('#bdTocList a');
  if (tocLinks.length) {
    var headings = Array.from(tocLinks).map(function(a) {
      return document.querySelector(a.getAttribute('href'));
    }).filter(Boolean);

    function onScroll() {
      var scrollY = window.scrollY + 120;
      var active  = headings[0];
      headings.forEach(function(h) {
        if (h.offsetTop <= scrollY) active = h;
      });
      tocLinks.forEach(function(a) { a.classList.remove('bd-toc-active'); });
      if (active) {
        var link = document.querySelector('#bdTocList a[href="#' + active.id + '"]');
        if (link) link.classList.add('bd-toc-active');
      }
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }
})();
</script>

<?php
$pageContent = ob_get_clean();
include __DIR__ . '/../includes/components/layout.php';
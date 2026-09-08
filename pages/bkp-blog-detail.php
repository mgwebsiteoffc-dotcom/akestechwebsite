<?php
/**
 * Blog Detail Page
 * Full article with TOC, FAQ schema, internal linking
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

// Get FAQs for this blog post
$postFaqs = getFaqs('blog-' . $post['slug']);
if (!empty($postFaqs)) {
    $schemas[] = SEO::faqSchema($postFaqs);
}

$schemas[] = SEO::breadcrumbSchema([
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'Blog', 'url' => url('blog')],
    ['name' => $post['title'], 'url' => url('blog/' . $post['slug'])]
]);

// Generate Table of Contents from content
function generateTOC($content) {
    $toc = [];
    preg_match_all('/<h([23])[^>]*>(.*?)<\/h\1>/i', $content, $matches, PREG_SET_ORDER);
    foreach ($matches as $i => $match) {
        $level = $match[1];
        $text = strip_tags($match[2]);
        $id = 'section-' . ($i + 1);
        $toc[] = ['level' => $level, 'text' => $text, 'id' => $id];
    }
    return $toc;
}

// Add IDs to headings in content
function addHeadingIds($content) {
    $counter = 0;
    return preg_replace_callback('/<h([23])([^>]*)>(.*?)<\/h\1>/i', function($match) use (&$counter) {
        $counter++;
        $id = 'section-' . $counter;
        return "<h{$match[1]} id=\"{$id}\"{$match[2]}>{$match[3]}</h{$match[1]}>";
    }, $content);
}

$toc = generateTOC($post['content'] ?? '');
$contentWithIds = addHeadingIds($post['content'] ?? '');

// Related posts
$relatedStmt = db()->prepare("SELECT bp.*, bc.name as category_name, bc.slug as category_slug 
                               FROM blog_posts bp 
                               LEFT JOIN blog_categories bc ON bp.category_id = bc.id 
                               WHERE bp.status = 'published' AND bp.id != ? AND bp.category_id = ?
                               ORDER BY bp.published_at DESC LIMIT 3");
$relatedStmt->execute([$post['id'], $post['category_id']]);
$relatedPosts = $relatedStmt->fetchAll();

// If not enough related, fill with recent
if (count($relatedPosts) < 3) {
    $fillStmt = db()->prepare("SELECT bp.*, bc.name as category_name, bc.slug as category_slug 
                                FROM blog_posts bp 
                                LEFT JOIN blog_categories bc ON bp.category_id = bc.id 
                                WHERE bp.status = 'published' AND bp.id != ?
                                ORDER BY bp.published_at DESC LIMIT ?");
    $remaining = 3 - count($relatedPosts);
    $fillStmt->execute([$post['id'], $remaining]);
    $relatedPosts = array_merge($relatedPosts, $fillStmt->fetchAll());
    $relatedPosts = array_slice($relatedPosts, 0, 3);
}

ob_start();
?>

<!-- ARTICLE HEADER -->
<article>
    <header class="bg-gray-50 pt-12 pb-10 lg:pt-16 lg:pb-14">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 animate-on-scroll">
            <!-- Breadcrumb -->
            <nav class="flex items-center gap-2 text-sm text-gray-500 mb-6" aria-label="Breadcrumb">
                <a href="<?= url('/') ?>" class="hover:text-gray-700 transition-colors">Home</a>
                <span>›</span>
                <a href="<?= url('blog') ?>" class="hover:text-gray-700 transition-colors">Blog</a>
                <?php if ($post['category_name']): ?>
                <span>›</span>
                <a href="<?= url('blog') ?>?category=<?= $post['category_slug'] ?>" class="hover:text-gray-700 transition-colors"><?= clean($post['category_name']) ?></a>
                <?php endif; ?>
            </nav>

            <?php if ($post['category_name']): ?>
            <a href="<?= url('blog') ?>?category=<?= $post['category_slug'] ?>" class="text-xs font-semibold text-primary-600 uppercase tracking-wider hover:text-primary-700">
                <?= clean($post['category_name']) ?>
            </a>
            <?php endif; ?>

            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-gray-900 mt-2 mb-4 leading-tight">
                <?= clean($post['title']) ?>
            </h1>

            <?php if ($post['excerpt']): ?>
            <p class="text-lg text-gray-600 leading-relaxed mb-6"><?= clean($post['excerpt']) ?></p>
            <?php endif; ?>

            <div class="flex items-center gap-4 text-sm text-gray-500">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center">
                        <span class="text-xs font-bold text-primary-600"><?= strtoupper(substr($post['author_name'] ?? 'A', 0, 1)) ?></span>
                    </div>
                    <span class="font-medium text-gray-700"><?= clean($post['author_name'] ?? SITE_NAME) ?></span>
                </div>
                <span>·</span>
                <time datetime="<?= $post['published_at'] ?>"><?= formatDate($post['published_at'] ?? $post['created_at']) ?></time>
            </div>
        </div>
    </header>

    <!-- FEATURED IMAGE -->
    <?php if ($post['featured_image']): ?>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 -mt-2 mb-10">
        <img src="<?= upload($post['featured_image']) ?>" alt="<?= clean($post['title']) ?>" class="w-full rounded-2xl shadow-lg" loading="lazy">
    </div>
    <?php endif; ?>

    <!-- CONTENT AREA -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16 lg:pb-24">
        <div class="grid lg:grid-cols-12 gap-10">
            
            <!-- Sidebar: TOC -->
            <?php if (!empty($toc)): ?>
            <aside class="lg:col-span-3 order-2 lg:order-1">
                <div class="lg:sticky lg:top-24">
                    <nav class="bg-gray-50 rounded-xl p-5 border border-gray-100">
                        <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3">Table of Contents</h3>
                        <ul class="space-y-2">
                            <?php foreach ($toc as $item): ?>
                            <li>
                                <a href="#<?= $item['id'] ?>" class="text-sm text-gray-600 hover:text-primary-600 transition-colors block <?= $item['level'] === '3' ? 'pl-4' : '' ?>">
                                    <?= clean($item['text']) ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>

                    <!-- Share -->
                    <div class="mt-6 p-5 bg-gray-50 rounded-xl border border-gray-100">
                        <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3">Share</h3>
                        <div class="flex gap-3">
                            <a href="https://twitter.com/intent/tweet?url=<?= urlencode(url('blog/' . $post['slug'])) ?>&text=<?= urlencode($post['title']) ?>" target="_blank" rel="noopener" class="w-9 h-9 bg-white border border-gray-200 rounded-lg flex items-center justify-center text-gray-500 hover:text-primary-600 hover:border-primary-200 transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            </a>
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?= urlencode(url('blog/' . $post['slug'])) ?>" target="_blank" rel="noopener" class="w-9 h-9 bg-white border border-gray-200 rounded-lg flex items-center justify-center text-gray-500 hover:text-primary-600 hover:border-primary-200 transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </a>
                            <a href="https://wa.me/?text=<?= urlencode($post['title'] . ' ' . url('blog/' . $post['slug'])) ?>" target="_blank" rel="noopener" class="w-9 h-9 bg-white border border-gray-200 rounded-lg flex items-center justify-center text-gray-500 hover:text-green-600 hover:border-green-200 transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </aside>
            <?php endif; ?>

            <!-- Main Content -->
            <div class="<?= !empty($toc) ? 'lg:col-span-9' : 'lg:col-span-8 lg:col-start-3' ?> order-1 lg:order-2">
                <div class="prose max-w-none">
                    <?= $contentWithIds ?>
                </div>

                <!-- Post FAQs -->
                <?php if (!empty($postFaqs)): ?>
                <div class="mt-12 pt-8 border-t border-gray-200">
                    <h2 class="text-xl font-bold text-gray-900 mb-6">Frequently Asked Questions</h2>
                    <div class="space-y-3" data-faq-group>
                        <?php foreach ($postFaqs as $faq): ?>
                        <div class="border border-gray-200 rounded-xl overflow-hidden">
                            <button data-faq-toggle class="w-full flex items-center justify-between px-5 py-4 text-left hover:bg-gray-50 transition-colors">
                                <span class="text-sm font-semibold text-gray-900 pr-4"><?= clean($faq['question']) ?></span>
                                <svg data-faq-icon class="w-5 h-5 text-gray-400 flex-shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </button>
                            <div class="overflow-hidden transition-all duration-300" style="max-height: 0px;">
                                <div class="px-5 pb-4"><p class="text-sm text-gray-600 leading-relaxed"><?= clean($faq['answer']) ?></p></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Author Box -->
                <div class="mt-12 p-6 bg-gray-50 rounded-2xl border border-gray-100">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 bg-primary-100 rounded-full flex items-center justify-center">
                            <span class="text-lg font-bold text-primary-600"><?= strtoupper(substr($post['author_name'] ?? 'G', 0, 1)) ?></span>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-900"><?= clean($post['author_name'] ?? SITE_NAME . ' Team') ?></p>
                            <p class="text-sm text-gray-500">Shopify growth experts sharing actionable insights for D2C brands.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- RELATED POSTS -->
    <?php if (!empty($relatedPosts)): ?>
    <section class="bg-gray-50 py-16 border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-xl font-bold text-gray-900 mb-8">Related Articles</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <?php foreach ($relatedPosts as $related): ?>
                    <?php component('blog-card', ['post' => $related]); ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
</article>

<?php
$pageContent = ob_get_clean();
include __DIR__ . '/../includes/components/layout.php';
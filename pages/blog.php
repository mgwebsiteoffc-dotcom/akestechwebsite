<?php
/**
 * Blog Listing Page — AKESTECH design system
 * Pagination, category filtering, SQL and the newsletter form are unchanged.
 */
SEO::load('blog');

// Pagination
$page = max(1, intval($_GET['page'] ?? 1));
$perPage = 9;
$offset = ($page - 1) * $perPage;

// Category filter
$categorySlug = clean($_GET['category'] ?? '');
$categoryFilter = '';
$params = [];

if ($categorySlug) {
    $categoryFilter = "AND bc.slug = ?";
    $params[] = $categorySlug;
}

// Get total count
$countSql = "SELECT COUNT(*) FROM blog_posts bp 
             LEFT JOIN blog_categories bc ON bp.category_id = bc.id 
             WHERE bp.status = 'published' {$categoryFilter}";
$countStmt = db()->prepare($countSql);
$countStmt->execute($params);
$totalPosts = $countStmt->fetchColumn();
$totalPages = ceil($totalPosts / $perPage);

// Get posts
$sql = "SELECT bp.*, bc.name as category_name, bc.slug as category_slug,
               au.full_name as author_name
        FROM blog_posts bp 
        LEFT JOIN blog_categories bc ON bp.category_id = bc.id 
        LEFT JOIN admin_users au ON bp.author_id = au.id
        WHERE bp.status = 'published' {$categoryFilter}
        ORDER BY bp.is_featured DESC, bp.published_at DESC 
        LIMIT {$perPage} OFFSET {$offset}";
$stmt = db()->prepare($sql);
$stmt->execute($params);
$posts = $stmt->fetchAll();

// Get all categories
$categories = db()->query("SELECT bc.*, COUNT(bp.id) as post_count 
                           FROM blog_categories bc 
                           LEFT JOIN blog_posts bp ON bc.id = bp.category_id AND bp.status = 'published'
                           WHERE bc.is_active = 1 
                           GROUP BY bc.id 
                           ORDER BY bc.sort_order ASC")->fetchAll();

// Update SEO for filtered pages
if ($categorySlug) {
    $catName = '';
    foreach ($categories as $cat) {
        if ($cat['slug'] === $categorySlug) { $catName = $cat['name']; break; }
    }
    SEO::set('meta_title', $catName . ' — Blog | ' . SITE_NAME);
    SEO::set('canonical_url', url('blog?category=' . $categorySlug));
}

$schemas = [];
$schemas[] = SEO::breadcrumbSchema([
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'Blog', 'url' => url('blog')]
]);

$catQuery = $categorySlug ? '&category=' . urlencode($categorySlug) : '';

ob_start();
?>

<!-- ============================ PAGE HERO ============================ -->
<section class="ak-pagehero">
  <div class="ak-container">
    <div class="ak-pagehero__inner">
      <div class="ak-crumbs">
        <a href="<?= url('/') ?>">Home</a> <span>/</span> Blog
      </div>
      <div class="ak-eyebrow">Insights</div>
      <h1 class="ak-h1 ak-words" style="font-size:clamp(42px,5.6vw,80px)">Field notes on growth.</h1>
      <p class="ak-lead">
        Practical writing on AI automation, commerce, performance marketing,
        marketplace operations and building products — from the team doing the work.
      </p>
    </div>
  </div>
</section>

<section class="ak-section ak-section--tight" style="padding-top:0">
  <div class="ak-container">
    <figure class="ak-figure ak-reveal">
      <img src="<?= asset('images/hero-blog.jpg') ?>" alt="AKESTECH editorial desk" width="1408" height="768" loading="lazy">
    </figure>
  </div>
</section>

<!-- ============================ CATEGORY FILTER ============================ -->
<?php if (!empty($categories)): ?>
<section class="ak-section ak-section--flush">
  <div class="ak-container">
    <div class="ak-tags ak-reveal">
      <a class="ak-tag <?= $categorySlug === '' ? 'is-on' : '' ?>" href="<?= url('blog') ?>">All posts</a>
      <?php foreach ($categories as $cat): ?>
        <a class="ak-tag <?= $categorySlug === $cat['slug'] ? 'is-on' : '' ?>"
           href="<?= url('blog') ?>?category=<?= urlencode($cat['slug']) ?>">
          <?= clean($cat['name']) ?> <span class="ak-tag__n"><?= (int) $cat['post_count'] ?></span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ============================ POSTS ============================ -->
<section class="ak-section ak-section--tight">
  <div class="ak-container">
    <?php if (empty($posts)): ?>
      <div class="ak-empty ak-reveal">
        <?= ak_icon('file-text', 34) ?>
        <h2 class="ak-h3">No posts found</h2>
        <p>We publish new writing regularly. Check back soon, or browse everything we have published.</p>
        <a href="<?= url('blog') ?>" class="ak-btn ak-btn--dark" style="margin-top:22px">View all posts <?= ak_icon('arrow-up-right', 16) ?></a>
      </div>
    <?php else: ?>
      <div class="ak-grid3">
        <?php foreach ($posts as $post): ?>
          <?php component('blog-card', ['post' => $post]); ?>
        <?php endforeach; ?>
      </div>

      <!-- Pagination -->
      <?php if ($totalPages > 1): ?>
      <nav class="ak-pager ak-reveal" aria-label="Pagination">
        <?php if ($page > 1): ?>
          <a href="<?= url('blog') ?>?page=<?= $page - 1 ?><?= $catQuery ?>"><?= ak_icon('arrow-left', 15) ?> Previous</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
          <a href="<?= url('blog') ?>?page=<?= $i ?><?= $catQuery ?>"
             class="ak-pager__n <?= $i === $page ? 'is-on' : '' ?>"><?= $i ?></a>
        <?php endfor; ?>

        <?php if ($page < $totalPages): ?>
          <a href="<?= url('blog') ?>?page=<?= $page + 1 ?><?= $catQuery ?>">Next <?= ak_icon('arrow-right', 15) ?></a>
        <?php endif; ?>
      </nav>
      <?php endif; ?>
    <?php endif; ?>
  </div>
</section>

<!-- ============================ NEWSLETTER ============================ -->
<section class="ak-section ak-section--tight">
  <div class="ak-container">
    <div class="ak-newsletter ak-reveal">
      <div>
        <h2 class="ak-h3">Stay updated</h2>
        <p>Practical growth tactics and automation ideas. No fluff, unsubscribe any time.</p>
      </div>
      <form method="POST" action="" class="ak-newsletter__form">
        <input type="hidden" name="form_action" value="newsletter">
        <?= csrfField() ?>
        <input type="email" name="email" placeholder="Enter your email" required aria-label="Email address">
        <button type="submit">Subscribe</button>
      </form>
    </div>
  </div>
</section>

<?php
$pageContent = ob_get_clean();
include __DIR__ . '/../includes/components/layout.php';

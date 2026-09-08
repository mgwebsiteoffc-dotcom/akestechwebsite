<?php
/**
 * Blog Listing Page
 * Supports category filtering and pagination
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

ob_start();
?>

<!-- HERO -->
<section class="bg-gray-50 pt-12 pb-8 lg:pt-16 lg:pb-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl animate-on-scroll">
            <h1 class="text-3xl lg:text-4xl font-extrabold text-gray-900 mb-3">Blog</h1>
            <p class="text-lg text-gray-600">Expert insights on Shopify growth, WhatsApp marketing, performance advertising, and D2C strategies.</p>
        </div>
    </div>
</section>

<!-- CATEGORY FILTER -->
<section class="bg-gray-50 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap gap-2 animate-on-scroll">
            <a href="<?= url('blog') ?>" class="px-4 py-2 text-sm font-medium rounded-full transition-colors <?= !$categorySlug ? 'bg-primary-600 text-white' : 'bg-white text-gray-600 border border-gray-200 hover:border-gray-300' ?>">
                All Posts
            </a>
            <?php foreach ($categories as $cat): ?>
            <a href="<?= url('blog') ?>?category=<?= $cat['slug'] ?>" class="px-4 py-2 text-sm font-medium rounded-full transition-colors <?= $categorySlug === $cat['slug'] ? 'bg-primary-600 text-white' : 'bg-white text-gray-600 border border-gray-200 hover:border-gray-300' ?>">
                <?= clean($cat['name']) ?>
                <span class="ml-1 text-xs opacity-60">(<?= $cat['post_count'] ?>)</span>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- POSTS GRID -->
<section class="bg-gray-50 pb-16 lg:pb-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php if (empty($posts)): ?>
            <div class="text-center py-16">
                <span class="text-4xl block mb-4">📝</span>
                <h2 class="text-xl font-semibold text-gray-900 mb-2">No posts found</h2>
                <p class="text-gray-600 mb-6">We're working on new content. Check back soon!</p>
                <a href="<?= url('blog') ?>" class="text-sm font-medium text-primary-600 hover:text-primary-700">View all posts →</a>
            </div>
        <?php else: ?>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                <?php foreach ($posts as $post): ?>
                    <?php component('blog-card', ['post' => $post]); ?>
                <?php endforeach; ?>
            </div>

            <!-- Pagination -->
            <?php if ($totalPages > 1): ?>
            <nav class="flex justify-center mt-12 animate-on-scroll" aria-label="Pagination">
                <div class="flex items-center gap-2">
                    <?php if ($page > 1): ?>
                    <a href="<?= url('blog') ?>?page=<?= $page - 1 ?><?= $categorySlug ? '&category=' . $categorySlug : '' ?>" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                        ← Previous
                    </a>
                    <?php endif; ?>

                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <a href="<?= url('blog') ?>?page=<?= $i ?><?= $categorySlug ? '&category=' . $categorySlug : '' ?>" 
                       class="w-10 h-10 flex items-center justify-center text-sm font-medium rounded-lg transition-colors <?= $i === $page ? 'bg-primary-600 text-white' : 'text-gray-700 bg-white border border-gray-200 hover:bg-gray-50' ?>">
                        <?= $i ?>
                    </a>
                    <?php endfor; ?>

                    <?php if ($page < $totalPages): ?>
                    <a href="<?= url('blog') ?>?page=<?= $page + 1 ?><?= $categorySlug ? '&category=' . $categorySlug : '' ?>" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                        Next →
                    </a>
                    <?php endif; ?>
                </div>
            </nav>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</section>

<!-- NEWSLETTER -->
<section class="bg-white py-16 lg:py-20 border-t border-gray-100">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 text-center animate-on-scroll">
        <h2 class="text-2xl font-bold text-gray-900 mb-3">Stay Updated</h2>
        <p class="text-gray-600 mb-6">Get weekly Shopify growth tips, WhatsApp marketing strategies, and industry insights.</p>
        <form method="POST" action="" class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
            <input type="hidden" name="form_action" value="newsletter">
            <?= csrfField() ?>
            <input type="email" name="email" placeholder="Enter your email" required class="flex-1 px-4 py-3 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
            <button type="submit" class="px-6 py-3 text-sm font-semibold text-white bg-primary-600 rounded-xl hover:bg-primary-700 transition-colors">
                Subscribe
            </button>
        </form>
    </div>
</section>

<?php
$pageContent = ob_get_clean();
include __DIR__ . '/../includes/components/layout.php';
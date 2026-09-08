<?php
/**
 * Case Studies Listing with Industry Filter
 */
SEO::load('case-studies');

// Get unique industries
$industries = db()->query("SELECT DISTINCT industry FROM case_studies WHERE status = 'published' AND industry IS NOT NULL ORDER BY industry ASC")->fetchAll(PDO::FETCH_COLUMN);

// Filter
$industryFilter = clean($_GET['industry'] ?? '');
$params = [];
$where = "WHERE status = 'published'";
if ($industryFilter) {
    $where .= " AND industry = ?";
    $params[] = $industryFilter;
}

$stmt = db()->prepare("SELECT * FROM case_studies {$where} ORDER BY is_featured DESC, sort_order ASC, published_at DESC");
$stmt->execute($params);
$studies = $stmt->fetchAll();

$schemas = [];
$schemas[] = SEO::breadcrumbSchema([
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'Case Studies', 'url' => url('case-studies')]
]);

ob_start();
?>

<!-- HERO -->
<section class="bg-gray-50 pt-12 pb-8 lg:pt-16 lg:pb-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl animate-on-scroll">
            <h1 class="text-3xl lg:text-4xl font-extrabold text-gray-900 mb-3">Case Studies</h1>
            <p class="text-lg text-gray-600">Real results for real brands. See how we've helped Shopify stores and D2C brands achieve transformative growth.</p>
        </div>
    </div>
</section>

<!-- INDUSTRY FILTER -->
<section class="bg-gray-50 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap gap-2 animate-on-scroll">
            <a href="<?= url('case-studies') ?>" class="px-4 py-2 text-sm font-medium rounded-full transition-colors <?= !$industryFilter ? 'bg-primary-600 text-white' : 'bg-white text-gray-600 border border-gray-200 hover:border-gray-300' ?>">
                All Industries
            </a>
            <?php foreach ($industries as $ind): ?>
            <a href="<?= url('case-studies') ?>?industry=<?= urlencode($ind) ?>" class="px-4 py-2 text-sm font-medium rounded-full transition-colors <?= $industryFilter === $ind ? 'bg-primary-600 text-white' : 'bg-white text-gray-600 border border-gray-200 hover:border-gray-300' ?>">
                <?= clean($ind) ?>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- STUDIES GRID -->
<section class="bg-gray-50 pb-16 lg:pb-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php if (empty($studies)): ?>
            <div class="text-center py-16">
                <span class="text-4xl block mb-4"><?= ak_icon('bar-chart', 18) ?></span>
                <h2 class="text-xl font-semibold text-gray-900 mb-2">No case studies yet</h2>
                <p class="text-gray-600">We're documenting our success stories. Check back soon!</p>
            </div>
        <?php else: ?>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                <?php foreach ($studies as $study): ?>
                    <?php component('case-study-card', ['study' => $study]); ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php
component('cta-section', [
    'title' => 'Want Results Like These?',
    'description' => 'Book a free consultation and let us build a custom growth strategy for your brand.',
    'primaryBtn' => 'Book Free Consultation',
    'primaryLink' => url('contact'),
    'style' => 'dark'
]);

$pageContent = ob_get_clean();
include __DIR__ . '/../includes/components/layout.php';
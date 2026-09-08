<?php
/**
 * Case Study Detail Page
 */
$slug = clean($_GET['slug'] ?? '');

if (empty($slug)) {
    header('Location: ' . url('case-studies'));
    exit;
}

$stmt = db()->prepare("SELECT * FROM case_studies WHERE slug = ? AND status = 'published'");
$stmt->execute([$slug]);
$study = $stmt->fetch();

if (!$study) {
    http_response_code(404);
    include __DIR__ . '/404.php';
    exit;
}

$metrics = json_decode($study['metrics'] ?? '{}', true);

SEO::set('meta_title', $study['meta_title'] ?: $study['title'] . ' — Case Study | ' . SITE_NAME);
SEO::set('meta_description', $study['meta_description'] ?: truncate(strip_tags($study['excerpt'] ?? $study['problem']), 160));

$schemas = [];
$schemas[] = SEO::breadcrumbSchema([
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'Case Studies', 'url' => url('case-studies')],
    ['name' => $study['title'], 'url' => url('case-studies/' . $study['slug'])]
]);

ob_start();
?>

<!-- HEADER -->
<section class="bg-gray-50 pt-12 pb-10 lg:pt-16 lg:pb-14">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 animate-on-scroll">
        <nav class="flex items-center gap-2 text-sm text-gray-500 mb-6">
            <a href="<?= url('/') ?>" class="hover:text-gray-700">Home</a>
            <span>›</span>
            <a href="<?= url('case-studies') ?>" class="hover:text-gray-700">Case Studies</a>
            <span>›</span>
            <span class="text-gray-700"><?= clean($study['client_name'] ?? 'Client') ?></span>
        </nav>

        <?php if ($study['industry']): ?>
        <span class="text-xs font-semibold text-primary-600 uppercase tracking-wider bg-primary-100 px-3 py-1 rounded-full"><?= clean($study['industry']) ?></span>
        <?php endif; ?>

        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-gray-900 mt-3 mb-4 leading-tight">
            <?= clean($study['title']) ?>
        </h1>

        <?php if ($study['excerpt']): ?>
        <p class="text-lg text-gray-600 leading-relaxed"><?= clean($study['excerpt']) ?></p>
        <?php endif; ?>
    </div>
</section>

<!-- METRICS BAR -->
<?php if (!empty($metrics)): ?>
<section class="bg-white border-y border-gray-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-2 md:grid-cols-<?= min(count($metrics), 5) ?> gap-6">
            <?php foreach ($metrics as $key => $value): ?>
            <div class="text-center">
                <p class="text-2xl lg:text-3xl font-extrabold text-primary-600"><?= clean($value) ?></p>
                <p class="text-sm text-gray-500 mt-1 capitalize"><?= str_replace('_', ' ', $key) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- CONTENT -->
<section class="bg-white py-12 lg:py-16">
    <div class="ak-container">
        <?php if ($study['problem']): ?>
        <div class="ak-reveal">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-10 h-10 bg-red-100 rounded-xl flex items-center justify-center"><span class="text-lg"><?= ak_icon('target', 18) ?></span></div>
                <h2 class="ak-h3">The Challenge</h2>
            </div>
            <div class="ak-prose">
                <p class="text-gray-600 leading-relaxed"><?= nl2br(clean($study['problem'])) ?></p>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($study['strategy']): ?>
        <div class="ak-reveal">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center"><span class="text-lg"><?= ak_icon('lightbulb', 18) ?></span></div>
                <h2 class="ak-h3">Our Strategy</h2>
            </div>
            <div class="ak-prose">
                <p class="text-gray-600 leading-relaxed"><?= nl2br(clean($study['strategy'])) ?></p>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($study['execution']): ?>
        <div class="ak-reveal">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-10 h-10 bg-purple-100 rounded-xl flex items-center justify-center"><span class="text-lg"><?= ak_icon('zap', 18) ?></span></div>
                <h2 class="ak-h3">Execution</h2>
            </div>
            <div class="ak-prose">
                <p class="text-gray-600 leading-relaxed"><?= nl2br(clean($study['execution'])) ?></p>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($study['results']): ?>
        <div class="ak-reveal">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center"><span class="text-lg"><?= ak_icon('trending-up', 18) ?></span></div>
                <h2 class="ak-h3">Results</h2>
            </div>
            <div class="ak-prose">
                <p class="text-gray-600 leading-relaxed"><?= nl2br(clean($study['results'])) ?></p>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>

<?php
component('cta-section', [
    'title' => 'Want Similar Results?',
    'description' => 'Let us analyze your store and build a custom growth strategy for your brand.',
    'primaryBtn' => 'Book Free Consultation',
    'primaryLink' => url('contact'),
    'style' => 'dark'
]);

$pageContent = ob_get_clean();
include __DIR__ . '/../includes/components/layout.php';
<?php
/**
 * Case Studies Listing with Industry Filter — AKESTECH design system
 * Queries and the ?industry= filter are unchanged.
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

<!-- ============================ PAGE HERO ============================ -->
<section class="ak-pagehero">
  <div class="ak-container">
    <div class="ak-pagehero__inner">
      <div class="ak-crumbs">
        <a href="<?= url('/') ?>">Home</a> <span>/</span> Case Studies
      </div>
      <div class="ak-eyebrow">Proof</div>
      <h1 class="ak-h1 ak-words" style="font-size:clamp(42px,5.6vw,80px)">Results, not promises.</h1>
      <p class="ak-lead">
        Real work for real brands — the numbers we moved, the systems we built
        and the timelines we did it in.
      </p>
    </div>
  </div>
</section>

<section class="ak-section ak-section--tight" style="padding-top:0">
  <div class="ak-container">
    <figure class="ak-figure ak-reveal">
      <img src="<?= asset('images/hero-case-studies.jpg') ?>" alt="Growth charts representing client results" width="1408" height="768" loading="lazy">
    </figure>
  </div>
</section>

<!-- ============================ FILTER ============================ -->
<?php if (!empty($industries)): ?>
<section class="ak-section ak-section--flush">
  <div class="ak-container">
    <div class="ak-tags ak-reveal">
      <a class="ak-tag <?= $industryFilter === '' ? 'is-on' : '' ?>" href="<?= url('case-studies') ?>">All industries</a>
      <?php foreach ($industries as $ind): ?>
        <a class="ak-tag <?= $industryFilter === $ind ? 'is-on' : '' ?>"
           href="<?= url('case-studies') ?>?industry=<?= urlencode($ind) ?>"><?= clean($ind) ?></a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ============================ GRID ============================ -->
<section class="ak-section ak-section--tight">
  <div class="ak-container">
    <?php if (empty($studies)): ?>
      <div class="ak-empty ak-reveal">
        <?= ak_icon('bar-chart', 34) ?>
        <h2 class="ak-h3">No case studies here yet</h2>
        <p>We are documenting new work all the time. Check back soon, or ask us for a relevant example directly.</p>
        <a href="<?= url('contact') ?>" class="ak-btn ak-btn--dark" style="margin-top:22px">Ask for an example <?= ak_icon('arrow-up-right', 16) ?></a>
      </div>
    <?php else: ?>
      <div class="ak-grid3">
        <?php foreach ($studies as $study): ?>
          <?php component('case-study-card', ['study' => $study]); ?>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>

<?php
component('cta-section', [
    'title' => 'Want results like these?',
    'description' => 'Book a free consultation and let us build a custom growth plan for your business.',
    'primaryBtn' => 'Book free consultation',
    'primaryLink' => url('contact'),
    'style' => 'dark'
]);

$pageContent = ob_get_clean();
include __DIR__ . '/../includes/components/layout.php';

<?php
/**
 * Local service landing pages for Lucknow and Delhi NCR.
 *
 * IMPORTANT: the five original Lucknow slugs are generated with exactly the
 * same keys as before, so every existing URL keeps working unchanged:
 *   digital-marketing-company-in-lucknow
 *   shopify-development-company-in-lucknow
 *   performance-marketing-company-in-lucknow
 *   meta-ads-management-in-lucknow
 *   lead-generation-service-in-lucknow
 *
 * New slugs are additive only.
 */
if (!class_exists('SEO')) {
    require __DIR__ . '/../index.php';
    return;
}

// City + service templates now live in includes/local-pages.php so the router,
// the sitemap and the admin screen all read the same source (including any
// city or service type created in /admin/?page=local-pages).
require_once __DIR__ . '/../includes/local-pages.php';

// Route comes from index.php when included by the router; fall back to ?route=
// when this page is opened directly.
$route = (isset($route) && $route !== '') ? $route : (isset($_GET['route']) ? trim($_GET['route'], '/') : '');

/* ============================================================
   CITIES
   ============================================================ */
$cities = lp_cities();

/* ============================================================
   SERVICE DEFINITIONS  ({city}, {region}, {areas} placeholders)
   ============================================================ */
$serviceDefs = lp_services();

/* ============================================================
   BUILD THE PAGE MAP
   ============================================================ */
function ak_fill($value, $city, $region, $nearby) {
    if (is_array($value)) return array_map(function ($v) use ($city, $region, $nearby) { return ak_fill($v, $city, $region, $nearby); }, $value);
    return str_replace(['{city}', '{region}', '{nearby}'], [$city, $region, $nearby], $value);
}

$pages = [];
foreach ($cities as $cityKey => $c) {
    foreach ($serviceDefs as $svcKey => $def) {
        $slug = $svcKey . '-' . $c['slugbit'];
        $pages[$slug] = [
            'city'    => $c['city'],
            'region'  => $c['region'],
            'postal'  => $c['postal'],
            'areas'   => $c['areas'],
            'nearby'  => $c['nearby'],
            'keyword' => ak_fill($def['keyword'], $c['city'], $c['region'], $c['nearby']),
            'eyebrow' => ak_fill($def['eyebrow'], $c['city'], $c['region'], $c['nearby']),
            'h1'      => ak_fill($def['h1'], $c['city'], $c['region'], $c['nearby']),
            'intro'   => ak_fill($def['intro'], $c['city'], $c['region'], $c['nearby']),
            'answer'  => ak_fill($def['answer'], $c['city'], $c['region'], $c['nearby']),
            'serviceName' => ak_fill($def['serviceName'], $c['city'], $c['region'], $c['nearby']),
            'primaryCta'  => $def['cta'],
            'accent'  => $def['accent'],
            'metrics' => $def['metrics'],
            'process'  => ak_fill($def['process'] ?? [], $c['city'], $c['region'], $c['nearby']),
            'services' => ak_fill($def['services'], $c['city'], $c['region'], $c['nearby']),
            'faqs'    => ak_fill($def['faqs'], $c['city'], $c['region'], $c['nearby']),
            'related' => $def['related'],
        ];
    }
}

/* Legacy safety: preserve the original five Lucknow slugs exactly as generated above.
   (digital-marketing-company-in-lucknow, shopify-development-company-in-lucknow,
    performance-marketing-company-in-lucknow, meta-ads-management-in-lucknow,
    lead-generation-service-in-lucknow) */

$page = $pages[$route] ?? null;

if (!$page) {
    http_response_code(404);
    $pageTitle = 'Page Not Found';
    $metaDescription = 'The page you are looking for does not exist.';
    require_once __DIR__ . '/404.php';
    return;
}

/* ---------------- SEO / AEO ---------------- */
SEO::load($route);

$canonical = url($route);
$whatsappText = urlencode('Hi AKESTECH, I found you on the ' . $page['keyword'] . ' page and would like to discuss a project.');
$contactUrl = url('contact');

$schemas = [];
$schemas[] = SEO::breadcrumbSchema([
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'Locations', 'url' => url('digital-marketing-company-in-lucknow')],
    ['name' => $page['keyword'], 'url' => $canonical],
]);
$schemas[] = SEO::localBusinessSchema($page['city'], $page['region'], $page['postal'], $page['areas']);
$schemas[] = SEO::serviceSchema($page['serviceName'], $page['answer']);
$schemas[] = SEO::faqSchema($page['faqs']);

ob_start();
?>

<!-- ============ HERO ============ -->
<section class="ak-pagehero">
  <div class="ak-ai">
    <div class="ak-ai__grid"></div>
    <div class="ak-orb ak-orb--a"></div>
    <div class="ak-orb ak-orb--b"></div>
    <div class="ak-beam"></div>
  </div>

  <div class="ak-container ak-pagehero__inner">
    <nav class="ak-crumbs" aria-label="Breadcrumb">
      <a href="<?= url('/') ?>">Home</a> <span>/</span>
      <span>Locations</span> <span>/</span>
      <span><?= htmlspecialchars($page['city']) ?></span>
    </nav>

    <p class="ak-kicker"><?= htmlspecialchars($page['eyebrow']) ?></p>
    <h1 class="ak-words"><?= htmlspecialchars($page['h1']) ?></h1>
    <p><?= htmlspecialchars($page['intro']) ?></p>

    <div class="ak-btns">
      <a href="<?= $contactUrl ?>" class="ak-btn ak-btn--dark"><?= htmlspecialchars($page['primaryCta']) ?> <?= ak_icon('arrow-up-right', 16) ?></a>
      <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=<?= $whatsappText ?>" target="_blank" rel="noopener" class="ak-btn ak-btn--light">WhatsApp Us</a>
    </div>

    <div class="ak-metrics" style="margin-top:46px">
      <?php foreach ($page['metrics'] as $m): ?>
      <div class="ak-metric">
        <b><?= htmlspecialchars($m['value']) ?></b>
        <span><?= htmlspecialchars($m['label']) ?></span>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ AEO ANSWER ============ -->
<section class="ak-section ak-section--tight">
  <div class="ak-container">
    <div class="ak-answer ak-reveal">
      <b>Direct answer — what should you expect from <?= htmlspecialchars($page['keyword']) ?>?</b>
      <?= htmlspecialchars($page['answer']) ?>
    </div>
  </div>
</section>

<!-- ============ SERVICES ============ -->
<section class="ak-section" id="services">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">Services</div>
      <div>
        <h2 class="ak-h2"><?= htmlspecialchars($page['serviceName']) ?></h2>
        <p class="ak-lead">AEO-friendly, conversion-focused service content supported by practical execution, tracking and weekly improvement.</p>
      </div>
    </div>

    <div class="ak-grid3">
      <?php $i = 1; foreach ($page['services'] as $s): ?>
      <article class="ak-card ak-spot ak-reveal">
        <div class="ak-card__num"><?= str_pad((string)$i, 2, '0', STR_PAD_LEFT) ?></div>
        <div>
          <h3><?= htmlspecialchars($s['title']) ?></h3>
          <p><?= htmlspecialchars($s['copy']) ?></p>
        </div>
      </article>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ PROCESS ============ -->
<section class="ak-section" id="process">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">How we work</div>
      <div><h2 class="ak-h2">A clear process from audit to optimization.</h2></div>
    </div>
    <div class="ak-process">
      <?php
      $steps = !empty($page['process']) ? $page['process'] : [
        ['title' => 'Audit',    'copy' => 'We review your current website, campaigns, tracking, content and lead quality.'],
        ['title' => 'Plan',     'copy' => 'We define keywords, audience segments, offers, funnel pages, tracking and success metrics.'],
        ['title' => 'Build',    'copy' => 'We create pages, campaigns, creatives, forms, CRM flows and automation where required.'],
        ['title' => 'Launch',   'copy' => 'We launch in controlled stages so performance data stays clean and useful.'],
        ['title' => 'Optimize', 'copy' => 'We improve budgets, content, creatives, conversion rate and lead quality every week.'],
      ];
      $i = 1; foreach ($steps as $p): ?>
      <div class="ak-step ak-reveal">
        <span><?= str_pad((string)$i, 2, '0', STR_PAD_LEFT) ?></span>
        <h3><?= htmlspecialchars($p['title']) ?></h3>
        <p><?= htmlspecialchars($p['copy']) ?></p>
      </div>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ LOCAL COVERAGE ============ -->
<section class="ak-section ak-section--tight">
  <div class="ak-container">
    <div class="ak-cta ak-reveal">
      <div>
        <div class="ak-kicker" style="color:#999;margin-bottom:20px">Local coverage</div>
        <h2 class="ak-h2" style="font-size:clamp(30px,4vw,54px)">Serving <?= htmlspecialchars($page['city']) ?> businesses with India-ready execution.</h2>
      </div>
      <div>
        <p>We support businesses across <?= htmlspecialchars(implode(', ', $page['areas'])) ?> and nearby markets <?= htmlspecialchars($page['nearby']) ?>, while building campaigns that can scale nationally.</p>
        <div class="ak-btns" style="margin-top:0">
          <a href="<?= $contactUrl ?>" class="ak-btn ak-btn--onDark">Request Free Audit <?= ak_icon('arrow-up-right', 16) ?></a>
          <a href="tel:<?= SITE_PHONE ?>" class="ak-btn ak-btn--ghost">Call <?= SITE_PHONE ?></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ FAQ ============ -->
<section class="ak-section" id="faq" itemscope itemtype="https://schema.org/FAQPage">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">FAQ</div>
      <div><h2 class="ak-h2">People also ask about <?= htmlspecialchars($page['keyword']) ?>.</h2></div>
    </div>
    <div class="ak-rows ak-acc ak-reveal">
      <?php foreach ($page['faqs'] as $i => $faq): ?>
      <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <button class="ak-row" type="button" itemprop="name">
          <small><?= str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT) ?></small>
          <b><?= htmlspecialchars($faq['question']) ?></b>
          <span class="ak-plus">+</span>
        </button>
        <div class="ak-rowbody" itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
          <p itemprop="text"><?= nl2br(htmlspecialchars($faq['answer'])) ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ RELATED ============ -->
<section class="ak-section" id="related">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">Explore</div>
      <div><h2 class="ak-h2">Go deeper with AKESTECH.</h2></div>
    </div>
    <div class="ak-rows ak-reveal">
      <?php $i = 1; foreach ($page['related'] as $r): ?>
      <a class="ak-row" href="<?= url($r['url']) ?>">
        <small><?= str_pad((string)$i, 2, '0', STR_PAD_LEFT) ?></small>
        <b><?= htmlspecialchars($r['title']) ?></b>
        <span><?= ak_icon('arrow-up-right', 16) ?></span>
      </a>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>

<?php
$pageContent = ob_get_clean();
include __DIR__ . '/../includes/components/layout.php';

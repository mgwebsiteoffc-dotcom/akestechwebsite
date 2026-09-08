<?php
/**
 * 404 Page — AKESTECH design system
 */
SEO::set('meta_title', 'Page Not Found — ' . SITE_NAME);
SEO::set('meta_description', 'The page you are looking for does not exist.');
SEO::set('robots', 'noindex, nofollow');

$schemas = [];
$schemas[] = SEO::breadcrumbSchema([
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'Page not found', 'url' => url('404')],
]);

ob_start();
?>

<section class="ak-pagehero" style="border-bottom:0">
  <div class="ak-ai">
    <div class="ak-ai__grid"></div>
    <div class="ak-orb ak-orb--a"></div>
    <div class="ak-orb ak-orb--b"></div>
    <div class="ak-beam"></div>
  </div>

  <div class="ak-container ak-pagehero__inner">
    <p class="ak-kicker">Error 404</p>
    <h1 class="ak-h1 ak-words" style="font-size:clamp(64px,12vw,160px)">Lost signal.</h1>
    <p>This page does not exist — but the work does. Here is where most people go next.</p>

    <div class="ak-btns">
      <a href="<?= url('/') ?>" class="ak-btn ak-btn--dark">Back to home ↗</a>
      <a href="<?= url('contact') ?>" class="ak-btn ak-btn--light">Contact us</a>
    </div>
  </div>
</section>

<section class="ak-section ak-section--tight">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">Popular pages</div>
      <div><h2 class="ak-h2">Start here instead.</h2></div>
    </div>

    <div class="ak-rows ak-reveal">
      <a class="ak-row" href="<?= url('services/automation') ?>"><small>01</small><b>AI &amp; Automation</b><span>↗</span></a>
      <a class="ak-row" href="<?= url('services/technology') ?>"><small>02</small><b>Product Development</b><span>↗</span></a>
      <a class="ak-row" href="<?= url('services/performance-marketing') ?>"><small>03</small><b>Performance Marketing</b><span>↗</span></a>
      <a class="ak-row" href="<?= url('services/shopify-growth') ?>"><small>04</small><b>Shopify &amp; Commerce</b><span>↗</span></a>
      <a class="ak-row" href="<?= url('services/shopify-operations') ?>"><small>05</small><b>Marketplace Management</b><span>↗</span></a>
      <a class="ak-row" href="<?= url('services/ai-videos') ?>"><small>06</small><b>AI Videos</b><span>↗</span></a>
      <a class="ak-row" href="<?= url('case-studies') ?>"><small>07</small><b>Case Studies</b><span>↗</span></a>
      <a class="ak-row" href="<?= url('blog') ?>"><small>08</small><b>Blog</b><span>↗</span></a>
    </div>
  </div>
</section>

<?php
$pageContent = ob_get_clean();
include __DIR__ . '/../includes/components/layout.php';

<?php
/**
 * Navbar — AKESTECH design system
 * Every href below is an existing live slug (or a newly added one).
 * No existing URL was changed or removed.
 */

$route = isset($_GET['route']) ? trim($_GET['route'], '/') : '';

$services = [
    ['url' => url('services/shopify-growth'),         'title' => 'Shopify & Commerce',      'sub' => 'Store builds, CRO & Plus'],
    ['url' => url('services/automation'),             'title' => 'AI & Automation',         'sub' => 'AI agents & workflows'],
    ['url' => url('services/technology'),             'title' => 'Product Development',     'sub' => 'SaaS, AI products & apps'],
    ['url' => url('services/performance-marketing'),  'title' => 'Performance Marketing',   'sub' => 'Meta, Google & CRO'],
    ['url' => url('services/shopify-operations'),     'title' => 'Marketplace Management',  'sub' => 'Amazon, Flipkart & ops'],
    ['url' => url('services/ai-videos'),              'title' => 'AI Videos',               'sub' => 'Ad films, UGC & reels'],
];

$industries = [
    ['url' => url('industries/d2c-ecommerce'),              'title' => 'D2C & Ecommerce'],
    ['url' => url('industries/healthcare'),                 'title' => 'Healthcare'],
    ['url' => url('industries/education'),                  'title' => 'Education'],
    ['url' => url('industries/automotive'),                 'title' => 'Automotive'],
    ['url' => url('industries/food-and-beverage'),          'title' => 'Food & Beverage'],
    ['url' => url('industries/saas-and-startups'),          'title' => 'SaaS & Startups'],
    ['url' => url('industries/real-estate'),                'title' => 'Real Estate'],
    ['url' => url('industries/retail-and-consumer-brands'), 'title' => 'Retail & Consumer'],
];

?>
<style>
.ak-dd{position:relative}
.ak-dd > button{display:inline-flex;align-items:center;gap:5px;font-size:14px;color:#333;transition:color .2s}
.ak-dd > button:hover,.ak-dd.is-open > button{color:var(--ink)}
.ak-dd > button svg{transition:transform .25s}
.ak-dd:hover > button svg{transform:rotate(180deg)}
.ak-dd__panel{
  position:absolute;top:calc(100% + 14px);left:-14px;width:420px;background:#fff;
  border:1px solid var(--line);border-radius:18px;padding:10px;box-shadow:0 30px 60px -24px rgba(16,16,16,.35);
  display:grid;grid-template-columns:1fr;gap:2px;opacity:0;visibility:hidden;transform:translateY(8px);
  transition:.22s var(--ease);z-index:60;
}
.ak-dd--wide .ak-dd__panel{width:440px}
.ak-dd:hover .ak-dd__panel,.ak-dd.is-open .ak-dd__panel{opacity:1;visibility:visible;transform:none}
.ak-dd__panel a{display:flex;gap:12px;align-items:flex-start;padding:11px 12px;border-radius:12px;transition:.2s}
.ak-dd__panel a:hover{background:#f1f1ed}
.ak-dd__panel strong{display:block;font-size:14px;font-weight:600;color:var(--ink)}
.ak-dd__panel em{display:block;font-size:12px;font-style:normal;color:#888;line-height:1.45}
.ak-dd__panel .ak-dd__ico{width:32px;height:32px;border-radius:10px;background:#ecece7;display:flex;align-items:center;justify-content:center;font-size:13px;font-weight:800;color:var(--ink);flex:0 0 auto}
@media (max-width:900px){ .ak-dd{display:none} }
</style>

<div class="ak-container">
  <nav class="ak-nav">
    <a href="<?= url('/') ?>" class="ak-logo" aria-label="AKESTECH — home">
      <img src="<?= asset('images/akestech-logo-black.png') ?>" alt="AKESTECH">
    </a>

    <div class="ak-navlinks">
      <div class="ak-dd ak-dd--wide">
        <button type="button" aria-haspopup="true">Services
          <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
        </button>
        <div class="ak-dd__panel">
          <?php $i = 1; foreach ($services as $s): ?>
            <a href="<?= $s['url'] ?>">
              <span class="ak-dd__ico"><?= str_pad((string)$i, 2, '0', STR_PAD_LEFT) ?></span>
              <span><strong><?= htmlspecialchars($s['title']) ?></strong><em><?= htmlspecialchars($s['sub']) ?></em></span>
            </a>
          <?php $i++; endforeach; ?>
        </div>
      </div>

      <div class="ak-dd">
        <button type="button" aria-haspopup="true">Industries
          <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
        </button>
        <div class="ak-dd__panel">
          <?php foreach ($industries as $s): ?>
            <a href="<?= $s['url'] ?>"><strong><?= htmlspecialchars($s['title']) ?></strong></a>
          <?php endforeach; ?>
        </div>
      </div>

      <a href="<?= url('case-studies') ?>">Case Studies</a>
      <a href="<?= url('resources') ?>">Resources</a>
      <a href="<?= url('blog') ?>">Blog</a>
      <a href="<?= url('about') ?>">About</a>
    </div>

    <a href="<?= url('contact') ?>" class="ak-navcta">Start a project <?= ak_icon('arrow-right', 16) ?></a>

    <button class="ak-burger" id="akBurger" aria-label="Open menu" aria-expanded="false"><i></i></button>
  </nav>

  <div class="ak-mnav" id="akMnav">
    <p class="ak-mnav__group">Services</p>
    <?php foreach ($services as $s): ?>
      <a href="<?= $s['url'] ?>"><?= htmlspecialchars($s['title']) ?></a>
    <?php endforeach; ?>

    <p class="ak-mnav__group">Industries</p>
    <?php foreach ($industries as $s): ?>
      <a href="<?= $s['url'] ?>"><?= htmlspecialchars($s['title']) ?></a>
    <?php endforeach; ?>

    <p class="ak-mnav__group">Explore</p>
    <a href="<?= url('products/whatsapp-shopify') ?>">Whatify — WhatsApp Commerce</a>
    <a href="<?= url('products/lead365') ?>">Lead365 — Lead Automation</a>
    <a href="<?= url('case-studies') ?>">Case Studies</a>
    <a href="<?= url('resources') ?>">Resources</a>
    <a href="<?= url('blog') ?>">Blog</a>
    <a href="<?= url('about') ?>">About</a>
    <a href="<?= url('contact') ?>">Start a project <?= ak_icon('arrow-right', 16) ?></a>
  </div>
</div>

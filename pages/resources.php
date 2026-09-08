<?php
/**
 * Resources Page — AKESTECH design system
 *
 * Same slug, same resources, same schemas and the same three forms:
 *   form_action=resource_audit, newsletter, resource_download
 * The playbook modal keeps its id and hooks so the JS behaviour is unchanged.
 */
SEO::set('meta_title', 'Resources — Free Tools, Guides & Templates | ' . SITE_NAME);
SEO::set('meta_description', 'Free resources for commerce and D2C teams. Growth guides, calculators, templates, and tools to scale your brand.');

$playbookDownloadReady = !empty($_SESSION['playbook_download_ready']);
unset($_SESSION['playbook_download_ready']);

$schemas = [];
$schemas[] = SEO::breadcrumbSchema([
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'Resources', 'url' => url('resources')]
]);

// Resources FAQs for AEO Schema
$resourceFaqs = [
    [
        'question' => 'Are all resources really free?',
        'answer' => 'Yes! All our guides, templates, calculators, and tools are 100% free. We provide them to help commerce and D2C teams succeed. Some resources may require an email signup for delivery.'
    ],
    [
        'question' => 'Do I need a Shopify store to use these resources?',
        'answer' => 'Most resources are designed for Shopify stores, but many principles apply to any D2C brand. The calculators and templates are specifically built for Shopify integration.'
    ],
    [
        'question' => 'How often are new resources added?',
        'answer' => 'We add 2-3 new resources monthly based on what our community needs most. Subscribe to our newsletter to get notified when new guides and tools are released.'
    ],
    [
        'question' => 'Can I share these resources with my team?',
        'answer' => 'Absolutely! All resources are free to share with your team, customers, and network. We just ask that you credit Akestech as the source.'
    ]
];

$schemas[] = SEO::faqSchema($resourceFaqs);

$resources = [
    ['icon' => 'file-text',      'title' => 'Shopify Growth Playbook 2026', 'desc'  => 'Complete guide to scaling your store from ₹5L to ₹1Cr monthly revenue.',
     'img'  => 'resources/shopify-growth-playbook-2026.png', 'link' => 'resources/download-shopify-growth-playbook', 'cta' => 'Download playbook'],
    ['icon' => 'message-circle', 'title' => 'WhatsApp Message Templates',   'desc'  => '20+ proven templates for cart recovery, COD verification and customer engagement.',
     'img'  => 'resources/whatsapp-message-templates.png',  'link' => 'resources/whatsapp-message-templates',        'cta' => 'Get templates'],
    ['icon' => 'calculator',     'title' => 'ROAS Calculator',              'desc'  => 'Calculate target ROAS, break-even point and profitability for free.',
     'img'  => 'resources/roas-calculator.png',             'link' => 'resources/roas-calculator',                    'cta' => 'Open calculator'],
    ['icon' => 'clipboard',      'title' => 'Shopify Launch Checklist',     'desc'  => '50-point checklist so your store is ready to convert from day one.',
     'img'  => 'resources/shopify-launch-checklist.png',    'link' => 'resources/shopify-launch-checklist',           'cta' => 'Open checklist'],
    ['icon' => 'trending-up',    'title' => 'Meta Ads for D2C Brands',      'desc'  => 'Step-by-step guide to setting up profitable Meta ad campaigns for your store.',
     'img'  => 'resources/meta-ads-d2c-guide.png',          'link' => 'resources/meta-ads-d2c-guide',                 'cta' => 'Read guide'],
    ['icon' => 'zap',            'title' => 'Shopify Speed Analyzer',       'desc'  => 'Check your store speed score and get instant optimisation recommendations.',
     'img'  => 'resources/shopify-speed-analyzer.png',      'link' => 'resources/shopify-speed-analyzer',             'cta' => 'Analyse store'],
];

ob_start();
?>

<!-- ============================ PAGE HERO ============================ -->
<section class="ak-pagehero">
  <div class="ak-container">
    <div class="ak-pagehero__inner">
      <div class="ak-crumbs">
        <a href="<?= url('/') ?>">Home</a> <span>/</span> Resources
      </div>
      <div class="ak-eyebrow">Free tools</div>
      <h1 class="ak-h1 ak-words" style="font-size:clamp(42px,5.6vw,80px)">Resources that actually ship results.</h1>
      <p class="ak-lead">
        Guides, calculators, templates and tools we use with clients — free to use,
        no strings attached.
      </p>
    </div>
  </div>
</section>

<section class="ak-section ak-section--tight" style="padding-top:0">
  <div class="ak-container">
    <figure class="ak-figure ak-reveal">
      <img src="<?= asset('images/hero-resources.jpg') ?>" alt="AKESTECH resource library" width="1408" height="768" loading="lazy">
    </figure>
  </div>
</section>

<!-- ============================ GRID ============================ -->
<section class="ak-section ak-section--tight">
  <div class="ak-container">
    <div class="ak-grid3">
      <?php $i = 0; foreach ($resources as $r): $i++; ?>
        <article class="ak-tile ak-spot ak-reveal ak-d<?= ($i % 5) + 1 ?>">
          <div class="ak-tile__media">
            <img src="<?= asset($r['img']) ?>" alt="<?= htmlspecialchars($r['title']) ?>" width="1200" height="675" loading="lazy">
          </div>
          <div class="ak-tile__body">
            <span class="ak-tile__cat"><?= ak_icon($r['icon'], 15) ?> Free resource</span>
            <h3><?= htmlspecialchars($r['title']) ?></h3>
            <p><?= htmlspecialchars($r['desc']) ?></p>
            <a class="ak-tile__go" href="<?= url($r['link']) ?>" <?= $r['link'] === 'resources/download-shopify-growth-playbook' ? 'data-open-playbook type="button"' : '' ?>>
              <?= htmlspecialchars($r['cta']) ?> <?= ak_icon('arrow-up-right', 15) ?>
            </a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================ AUDIT CTA ============================ -->
<section class="ak-section ak-section--tight">
  <div class="ak-container">
    <div class="ak-cta ak-reveal">
      <div>
        <h2 class="ak-h2" style="font-size:clamp(30px,4vw,52px)">Need help implementing these?</h2>
      </div>
      <div>
        <p>Get a free growth audit and specific recommendations for your business.</p>
        <!-- form_action=resource_audit — handled by includes/form-handler.php -->
        <form method="POST" action="" class="ak-form" style="margin-top:20px">
          <input type="hidden" name="form_action" value="resource_audit">
          <?= csrfField() ?>
          <div class="ak-field">
            <label for="store_name">Store / business name *</label>
            <input type="text" id="store_name" name="store_name" placeholder="Your store name" required>
          </div>
          <div class="ak-field">
            <label for="audit-email">Work email *</label>
            <input type="email" id="audit-email" name="email" placeholder="you@company.com" required>
          </div>
          <div class="ak-field">
            <label for="audit-phone">WhatsApp number (optional)</label>
            <input type="tel" id="audit-phone" name="phone" placeholder="+91 98765 43210">
          </div>
          <button type="submit" class="ak-btn ak-btn--dark" style="width:100%;justify-content:center">Get free audit</button>
          <p class="ak-form__note">We'll send your personalised audit within 24 hours.</p>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- ============================ FAQ ============================ -->
<section class="ak-section" style="background:#efefec">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">FAQ</div>
      <div>
        <h2 class="ak-h2">Resources FAQ</h2>
        <p class="ak-lead">Common questions about our free tools and guides.</p>
      </div>
    </div>
    <div class="ak-rows ak-acc ak-reveal" itemscope itemtype="https://schema.org/FAQPage">
      <?php foreach ($resourceFaqs as $idx => $faq): ?>
        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <button class="ak-row" type="button" itemprop="name">
            <small><?= str_pad((string)($idx + 1), 2, '0', STR_PAD_LEFT) ?></small>
            <b><?= htmlspecialchars($faq['question']) ?></b>
            <span class="ak-plus">+</span>
          </button>
          <div class="ak-rowbody" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <div class="ak-rowbody__in">
              <p itemprop="text"><?= htmlspecialchars($faq['answer']) ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================ NEWSLETTER ============================ -->
<section class="ak-section ak-section--tight">
  <div class="ak-container">
    <div class="ak-newsletter ak-reveal">
      <div>
        <h2 class="ak-h3">Get new resources first</h2>
        <p>Subscribe and we'll send you new guides, templates and tools as soon as they're ready.</p>
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

<!-- ============================ PLAYBOOK MODAL ============================ -->
<!-- id and data-* hooks unchanged so the script below keeps working -->
<div id="playbook-modal" class="ak-modal hidden" role="dialog" aria-modal="true" aria-labelledby="playbook-modal-title">
  <button type="button" data-close-playbook class="ak-modal__backdrop" aria-label="Close download form"></button>
  <div class="ak-modal__wrap">
    <div class="ak-modal__card">
      <div class="ak-modal__head">
        <button type="button" data-close-playbook class="ak-modal__close" aria-label="Close"><?= ak_icon('x', 18) ?></button>
        <p class="ak-modal__kicker">Free 2026 playbook</p>
        <h2 id="playbook-modal-title">Get the Shopify Growth Playbook</h2>
        <p>Enter your details and the PDF download will begin immediately.</p>
      </div>
      <form method="POST" action="<?= url('resources') ?>" class="ak-modal__body">
        <input type="hidden" name="form_action" value="resource_download">
        <input type="hidden" name="message" value="Requested Shopify Growth Playbook 2026 PDF">
        <?= csrfField() ?>
        <input type="text" name="website_url_hp" value="" class="hidden" tabindex="-1" autocomplete="off" aria-hidden="true">
        <div class="ak-field">
          <label for="pb-name">Name</label>
          <input type="text" id="pb-name" name="name" required autocomplete="name" placeholder="Your full name">
        </div>
        <div class="ak-field">
          <label for="pb-email">Work email</label>
          <input type="email" id="pb-email" name="email" required autocomplete="email" placeholder="you@company.com">
        </div>
        <div class="ak-field">
          <label for="pb-phone">Phone / WhatsApp</label>
          <input type="tel" id="pb-phone" name="phone" required autocomplete="tel" placeholder="Your phone number">
        </div>
        <button type="submit" class="ak-btn ak-btn--dark" style="width:100%;justify-content:center;margin-top:6px">Submit &amp; download PDF</button>
        <p class="ak-form__note" style="text-align:center">By submitting, you agree that Akestech may contact you about growth services. We do not sell your information.</p>
      </form>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('playbook-modal');
    if (!modal) return;
    const openModal = function () {
        modal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
        setTimeout(function () { modal.querySelector('input[name="name"]').focus(); }, 50);
    };
    const closeModal = function () {
        modal.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    };
    document.querySelectorAll('[data-open-playbook]').forEach(function (button) {
        button.addEventListener('click', function (e) { e.preventDefault(); openModal(); });
    });
    document.querySelectorAll('[data-close-playbook]').forEach(function (button) { button.addEventListener('click', closeModal); });
    document.addEventListener('keydown', function (event) { if (event.key === 'Escape' && !modal.classList.contains('hidden')) closeModal(); });
    <?php if ($playbookDownloadReady): ?>
    window.setTimeout(function () { window.location.href = <?= json_encode(url('resources/download-shopify-growth-playbook')) ?>; }, 500);
    <?php elseif (($_POST['form_action'] ?? '') === 'resource_download'): ?>
    openModal();
    <?php endif; ?>
});
</script>

<?php
$pageContent = ob_get_clean();

// Render schemas
SEO::renderSchemas($schemas);

include __DIR__ . '/../includes/components/layout.php';

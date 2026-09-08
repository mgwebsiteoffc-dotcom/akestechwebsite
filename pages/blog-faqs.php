<?php
/**
 * Blog FAQ Archive — AKESTECH design system
 *
 * Same query, same AEO/FAQPage schema, same /blog/faqs slug.
 * FIXED: this page assigned $content, but layout.php renders $pageContent,
 * so the archive was rendering blank.
 */
SEO::load('blog-faqs');

// Get all FAQs
$stmt = db()->prepare("
    SELECT DISTINCT f.* 
    FROM faqs f 
    WHERE f.page_slug IN (
        'performance-marketing', 
        'shopify-growth', 
        'shopify-operations', 
        'automation',
        'technology'
    ) 
    AND f.is_active = 1 
    ORDER BY f.sort_order ASC, RAND()
");
$stmt->execute();
$allFaqs = $stmt->fetchAll();

// Generate AEO JSON structure for FAQs
$faqData = [];
foreach ($allFaqs as $faq) {
    $faqData[] = [
        'question' => $faq['question'],
        'answer'   => $faq['answer'],
        'category' => $faq['page_slug']
    ];
}

$schemas = [];
$schemas[] = SEO::faqSchema($allFaqs);
$schemas[] = SEO::breadcrumbSchema([
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'Blog', 'url' => url('blog')],
    ['name' => 'FAQ Archive', 'url' => url('blog/faqs')]
]);

$categories = [
    'performance-marketing' => ['name' => 'Performance Marketing',   'icon' => 'bar-chart',      'desc' => 'Meta Ads, Google Ads and paid acquisition strategy'],
    'shopify-growth'        => ['name' => 'Commerce Store Growth',   'icon' => 'shopping-bag',   'desc' => 'CRO, conversion optimisation and scaling'],
    'shopify-operations'    => ['name' => 'Operations & RTO',        'icon' => 'package',        'desc' => 'RTO reduction, fulfilment and logistics'],
    'automation'            => ['name' => 'WhatsApp Automation',     'icon' => 'message-circle', 'desc' => 'WhatsApp Business API, cart recovery and automation'],
    'technology'            => ['name' => 'Technology & Integration','icon' => 'settings',       'desc' => 'Tracking, integration and technical setup'],
];

$related = [
    ['icon' => 'bar-chart',      'title' => 'Performance Marketing', 'link' => 'blog?category=performance-marketing'],
    ['icon' => 'package',        'title' => 'Operations & RTO',      'link' => 'blog?category=shopify-operations'],
    ['icon' => 'message-circle', 'title' => 'WhatsApp Automation',   'link' => 'blog?category=automation'],
];

ob_start();
?>

<!-- ============================ HERO ============================ -->
<section class="ak-pagehero ak-pagehero--dark">
  <div class="ak-container">
    <div class="ak-pagehero__inner">
      <div class="ak-crumbs">
        <a href="<?= url('/') ?>">Home</a> <span>/</span> <a href="<?= url('blog') ?>">Blog</a> <span>/</span> FAQ
      </div>
      <div class="ak-eyebrow">Comprehensive FAQ guide</div>
      <h1 class="ak-h1 ak-words" style="font-size:clamp(38px,5vw,72px)">Everything you need to know about growth.</h1>
      <p class="ak-lead">
        Direct answers on performance marketing, store optimisation, WhatsApp automation,
        operations and technology — the questions we get asked most.
      </p>
      <div class="ak-btns">
        <a href="#faqs" class="ak-btn ak-btn--onDark">Browse FAQs <?= ak_icon('arrow-down', 16) ?></a>
        <a href="<?= url('contact') ?>" class="ak-btn ak-btn--ghost">Ask a question</a>
      </div>
    </div>
  </div>
</section>

<!-- ============================ FAQ BY CATEGORY ============================ -->
<section class="ak-section" id="faqs">
  <div class="ak-container">
    <?php
    $shown = 0;
    foreach ($categories as $slug => $category):
        $categoryFaqs = array_filter($allFaqs, fn($f) => $f['page_slug'] === $slug);
        if (empty($categoryFaqs)) continue;
        $shown++;
    ?>
      <div class="ak-faqgroup ak-reveal">
        <div class="ak-faqgroup__head">
          <?= ak_icon($category['icon'], 26) ?>
          <div>
            <h2 class="ak-h3"><?= htmlspecialchars($category['name']) ?></h2>
            <p><?= htmlspecialchars($category['desc']) ?></p>
          </div>
        </div>

        <div class="ak-rows ak-acc" itemscope itemtype="https://schema.org/FAQPage">
          <?php foreach ($categoryFaqs as $index => $faq): ?>
          <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <button class="ak-row" type="button" itemprop="name">
              <small><?= str_pad((string)($index + 1), 2, '0', STR_PAD_LEFT) ?></small>
              <b><?= htmlspecialchars($faq['question']) ?></b>
              <span class="ak-plus">+</span>
            </button>
            <div class="ak-rowbody" itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
              <div class="ak-rowbody__in">
                <p itemprop="text"><?= nl2br(htmlspecialchars($faq['answer'])) ?></p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>

    <?php if ($shown === 0): ?>
      <div class="ak-empty ak-reveal">
        <?= ak_icon('help-circle', 34) ?>
        <h2 class="ak-h3">No FAQs published yet</h2>
        <p>Add FAQs in the admin and they will appear here automatically.</p>
      </div>
    <?php endif; ?>

    <!-- RELATED -->
    <div class="ak-related ak-reveal">
      <h2 class="ak-h3">Want more in-depth answers?</h2>
      <p>Explore detailed posts with case studies, data and step-by-step guides.</p>
      <div class="ak-grid3" style="margin-top:24px">
        <?php foreach ($related as $r): ?>
          <a class="ak-card ak-spot" href="<?= url($r['link']) ?>">
            <div class="ak-card__num"><?= ak_icon($r['icon'], 20) ?></div>
            <div>
              <h3><?= htmlspecialchars($r['title']) ?></h3>
              <span class="ak-arrow"><?= ak_icon('arrow-up-right', 16) ?></span>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- CTA -->
    <div class="ak-related ak-reveal" style="text-align:center">
      <h2 class="ak-h3">Still have questions?</h2>
      <p>Schedule a free consultation and get answers specific to your business.</p>
      <div class="ak-btns" style="justify-content:center;margin-top:22px">
        <a href="<?= url('contact') ?>" class="ak-btn ak-btn--dark">Book free strategy call <?= ak_icon('arrow-up-right', 16) ?></a>
      </div>
    </div>
  </div>
</section>

<?php
// layout.php renders $pageContent — this page previously set $content and rendered blank
$pageContent = ob_get_clean();

// Set meta tags for SEO
SEO::set('meta_title', 'Shopify Growth FAQ | Performance Marketing, Operations & Automation - Akestech');
SEO::set('meta_description', 'Get answers to all your questions about Shopify growth, Meta & Google ads, WhatsApp automation, RTO reduction, and D2C marketing strategy.');
SEO::set('meta_keywords', 'shopify faq, shopify growth questions, whatsapp automation faq, performance marketing guide, d2c ecommerce faq');
SEO::set('og_title', 'Complete Shopify Growth FAQ Archive');
SEO::set('og_description', 'Answers to everything about Shopify agencies, performance marketing, WhatsApp automation, and operations.');

include __DIR__ . '/../includes/components/layout.php';

<?php
/**
 * Shared service / product page renderer — AKESTECH design system
 *
 * Each page keeps its own file and its own slug; it only supplies $sp data
 * and calls this partial. Nothing about routing or URLs changes.
 *
 * Required keys:
 *   slug          string  (SEO key, e.g. 'automation')
 *   route         string  (canonical route, e.g. 'services/automation')
 *   eyebrow       string
 *   h1            string
 *   intro         string
 *   answerLabel   string
 *   answer        string   (AEO direct answer block)
 *   deliverables  array of ['title' => ..., 'copy' => ...]
 *   stats         array of ['value' => ..., 'label' => ...]
 *   process       array of ['title' => ..., 'copy' => ...]
 *   faqSlug       string
 *   ctaTitle      string
 *   ctaCopy       string
 *   ctaBtn        string
 * Optional:
 *   related       array of ['title' => ..., 'copy' => ..., 'url' => ...]
 *   schemaName    string (Service schema name)
 */

$sp = $sp ?? [];
$route = $sp['route'] ?? '';

/* ---------- SEO / AEO ---------- */
SEO::load($sp['slug'] ?? $route);

$schemas = [];
$schemas[] = SEO::breadcrumbSchema([
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'Services', 'url' => url('services/automation')],
    ['name' => $sp['eyebrow'] ?? 'Service', 'url' => url($route)],
]);
$schemas[] = SEO::serviceSchema(
    $sp['schemaName'] ?? ($sp['eyebrow'] ?? 'Service'),
    $sp['intro'] ?? ''
);

/* Optional extra schema (e.g. SoftwareApplication on product pages) */
if (!empty($sp['extraSchemas']) && is_array($sp['extraSchemas'])) {
    foreach ($sp['extraSchemas'] as $extra) {
        if (!empty($extra)) $schemas[] = $extra;
    }
}

$faqs = function_exists('ak_faqs') ? ak_faqs($sp['faqSlug'] ?? ($sp['slug'] ?? ''), $sp['faqs'] ?? []) : ($sp['faqs'] ?? []);
if (!empty($faqs)) {
    $schemas[] = SEO::faqSchema($faqs);
}

$waText = urlencode('Hi AKESTECH, I want to know more about ' . ($sp['eyebrow'] ?? 'your services') . '.');
$contactUrl = url('contact');

ob_start();
?>

<!-- ============ PAGE HERO ============ -->
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
      <a href="<?= url('services/automation') ?>">Services</a> <span>/</span>
      <span><?= htmlspecialchars($sp['eyebrow'] ?? '') ?></span>
    </nav>

    <p class="ak-kicker"><?= htmlspecialchars($sp['eyebrow'] ?? '') ?></p>
    <h1 class="ak-words"><?= htmlspecialchars($sp['h1'] ?? '') ?></h1>
    <p><?= htmlspecialchars($sp['intro'] ?? '') ?></p>

    <div class="ak-btns">
      <a href="<?= $contactUrl ?>" class="ak-btn ak-btn--dark"><?= htmlspecialchars($sp['ctaBtn'] ?? 'Talk to us') ?> ↗</a>
      <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=<?= $waText ?>" target="_blank" rel="noopener" class="ak-btn ak-btn--light">WhatsApp us</a>
    </div>

    <?php if (!empty($sp['stats'])): ?>
    <div class="ak-metrics" style="margin-top:46px">
      <?php foreach ($sp['stats'] as $s): ?>
      <div class="ak-metric">
        <b><?= htmlspecialchars($s['value']) ?></b>
        <span><?= htmlspecialchars($s['label']) ?></span>
      </div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
</section>

<!-- ============ AEO DIRECT ANSWER ============ -->
<section class="ak-section ak-section--tight">
  <div class="ak-container">
    <div class="ak-answer ak-reveal">
      <b>Direct answer</b>
      <?= htmlspecialchars($sp['answer'] ?? '') ?>
    </div>
  </div>
</section>

<!-- ============ DELIVERABLES ============ -->
<?php if (!empty($sp['deliverables'])): ?>
<section class="ak-section" id="deliverables">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">What you get</div>
      <div><h2 class="ak-h2">Everything included, end to end.</h2></div>
    </div>

    <div class="ak-grid3">
      <?php $i = 1; foreach ($sp['deliverables'] as $d): ?>
      <article class="ak-card ak-spot ak-reveal">
        <div class="ak-card__num"><?= str_pad((string)$i, 2, '0', STR_PAD_LEFT) ?></div>
        <div>
          <h3><?= htmlspecialchars($d['title']) ?></h3>
          <p><?= htmlspecialchars($d['copy']) ?></p>
        </div>
      </article>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ============ PROCESS ============ -->
<?php if (!empty($sp['process'])): ?>
<section class="ak-section" id="process">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">How we work</div>
      <div><h2 class="ak-h2">From audit to compounding results.</h2></div>
    </div>
    <div class="ak-process">
      <?php $i = 1; foreach ($sp['process'] as $p): ?>
      <div class="ak-step ak-reveal">
        <span><?= str_pad((string)$i, 2, '0', STR_PAD_LEFT) ?></span>
        <h3><?= htmlspecialchars($p['title']) ?></h3>
        <p><?= htmlspecialchars($p['copy']) ?></p>
      </div>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ============ RELATED ============ -->
<?php if (!empty($sp['related'])): ?>
<section class="ak-section" id="related">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">Connected capabilities</div>
      <div><h2 class="ak-h2">Pairs well with.</h2></div>
    </div>
    <div class="ak-rows ak-reveal">
      <?php $i = 1; foreach ($sp['related'] as $r): ?>
      <a class="ak-row" href="<?= $r['url'] ?>">
        <small><?= str_pad((string)$i, 2, '0', STR_PAD_LEFT) ?></small>
        <b><?= htmlspecialchars($r['title']) ?><?= !empty($r['copy']) ? ' — <span style="font-weight:400;color:#777;font-size:15px">' . htmlspecialchars($r['copy']) . '</span>' : '' ?></b>
        <span>↗</span>
      </a>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ============ FAQ ============ -->
<?php if (!empty($faqs)): ?>
<section class="ak-section" id="faq" itemscope itemtype="https://schema.org/FAQPage">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">FAQ</div>
      <div><h2 class="ak-h2">Questions clients ask us.</h2></div>
    </div>
    <div class="ak-rows ak-acc ak-reveal">
      <?php foreach ($faqs as $i => $faq): ?>
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
<?php endif; ?>

<!-- ============ CTA ============ -->
<section class="ak-section ak-section--tight" id="cta">
  <div class="ak-container">
    <div class="ak-cta ak-reveal">
      <div><h2 class="ak-h2" style="font-size:clamp(30px,4vw,54px)"><?= htmlspecialchars($sp['ctaTitle'] ?? 'Let’s build it together.') ?></h2></div>
      <div>
        <p><?= htmlspecialchars($sp['ctaCopy'] ?? 'Talk to our team and get a clear plan within one business day.') ?></p>
        <div class="ak-btns" style="margin-top:0">
          <a href="<?= $contactUrl ?>" class="ak-btn ak-btn--onDark"><?= htmlspecialchars($sp['ctaBtn'] ?? 'Talk to us') ?> ↗</a>
          <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=<?= $waText ?>" target="_blank" rel="noopener" class="ak-btn ak-btn--ghost">WhatsApp us</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$pageContent = ob_get_clean();
include __DIR__ . '/layout.php';

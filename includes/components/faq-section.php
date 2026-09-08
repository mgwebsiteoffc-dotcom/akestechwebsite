<?php
/**
 * FAQ Section — AKESTECH design system
 * Keeps the same usage: component('faq-section', ['pageSlug' => '...'])
 * Still renders FAQPage microdata for AEO.
 */
$pageSlug = $pageSlug ?? null;
if (!$pageSlug) return;

$faqs = getFaqs($pageSlug);
if (empty($faqs)) return;
?>
<section class="ak-section" itemscope itemtype="https://schema.org/FAQPage">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">FAQ</div>
      <div>
        <h2 class="ak-h2" style="font-size:clamp(34px,4.6vw,60px)">Questions founders usually ask.</h2>
        <p class="ak-lead">Short, direct answers — the kind AI assistants and featured snippets can lift straight from this page.</p>
      </div>
    </div>

    <div class="ak-rows ak-reveal">
      <?php foreach ($faqs as $index => $faq):
        $q = is_array($faq) ? ($faq['question'] ?? '') : $faq;
        $a = is_array($faq) ? ($faq['answer'] ?? '') : '';
      ?>
      <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <button class="ak-row" type="button" itemprop="name">
          <small><?= str_pad((string)($index + 1), 2, '0', STR_PAD_LEFT) ?></small>
          <b><?= htmlspecialchars($q) ?></b>
          <span class="ak-plus">+</span>
        </button>
        <div class="ak-rowbody" itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
          <p itemprop="text"><?= nl2br(htmlspecialchars($a)) ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="ak-reveal" style="margin-top:34px">
      <p style="color:#777;font-size:16px">Didn't find what you're looking for?
        <a href="<?= url('contact') ?>" style="text-decoration:underline;color:var(--ink)">Talk to our team →</a>
      </p>
    </div>
  </div>
</section>

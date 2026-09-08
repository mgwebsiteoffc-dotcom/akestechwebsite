<?php
/**
 * CTA Section Component — AKESTECH design system
 * Same variables as before: $title, $description, $primaryBtn, $primaryLink,
 * $secondaryBtn, $secondaryLink, $style ('dark' | 'light')
 */
$style = $style ?? 'dark';
$primaryBtn = $primaryBtn ?? 'Get Started';
$primaryLink = $primaryLink ?? url('contact');
$secondaryBtn = $secondaryBtn ?? 'Talk on WhatsApp';
$secondaryLink = $secondaryLink ?? ('https://wa.me/' . WHATSAPP_NUMBER);
?>
<section class="ak-section ak-section--tight">
  <div class="ak-container">
    <div class="ak-cta ak-reveal">
      <div>
        <h2 class="ak-h2" style="font-size:clamp(32px,4.4vw,60px)"><?= $title ?></h2>
      </div>
      <div>
        <?php if (!empty($description)): ?><p><?= $description ?></p><?php endif; ?>
        <div class="ak-btns" style="margin-top:0">
          <a href="<?= $primaryLink ?>" class="ak-btn ak-btn--onDark"><?= $primaryBtn ?> <?= ak_icon('arrow-up-right', 16) ?></a>
          <a href="<?= $secondaryLink ?>" class="ak-btn ak-btn--ghost"><?= $secondaryBtn ?></a>
        </div>
      </div>
    </div>
  </div>
</section>

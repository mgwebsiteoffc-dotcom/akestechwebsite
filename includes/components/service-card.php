<?php
/**
 * Service Card Component — AKESTECH design system
 * Same variables: $title, $description, $icon, $link, $color
 */
$color = $color ?? 'primary';
$link  = $link ?? url('contact');
$icon  = $icon ?? 'arrow-up-right';
?>
<a href="<?= $link ?>" class="ak-card ak-spot ak-reveal">
  <div class="ak-card__num"><?= ak_icon($icon, 20) ?></div>
  <div>
    <h3><?= $title ?></h3>
    <p><?= $description ?></p>
    <span class="ak-arrow"><?= ak_icon('arrow-up-right', 16) ?></span>
  </div>
</a>

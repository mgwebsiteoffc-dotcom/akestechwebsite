<?php
/**
 * Service Card Component — AKESTECH design system
 * Same variables: $title, $description, $icon, $link, $color
 */
$color = $color ?? 'primary';
$link  = $link ?? url('contact');
$icon  = $icon ?? '→';
?>
<a href="<?= $link ?>" class="ak-card ak-spot ak-reveal">
  <div class="ak-card__num"><?= $icon ?></div>
  <div>
    <h3><?= $title ?></h3>
    <p><?= $description ?></p>
    <span class="ak-arrow">↗</span>
  </div>
</a>

<?php
/**
 * Case Study Card Component — AKESTECH design system
 * @var array $study
 */
$metrics = json_decode($study['metrics'] ?? '{}', true);
if (!is_array($metrics)) $metrics = [];
?>
<a href="<?= url('case-studies/' . $study['slug']) ?>" class="ak-tile ak-spot ak-reveal">
  <div class="ak-tile__media">
    <?php if (!empty($study['featured_image'])): ?>
      <img src="<?= $study['featured_image'] ?>" alt="<?= clean($study['title']) ?>" loading="lazy">
    <?php else: ?>
      <div class="ak-tile__ph"><?= ak_icon('bar-chart', 30) ?></div>
    <?php endif; ?>
    <?php if (!empty($study['industry'])): ?>
      <span class="ak-tile__tag"><?= clean($study['industry']) ?></span>
    <?php endif; ?>
  </div>
  <div class="ak-tile__body">
    <h3><?= clean($study['title']) ?></h3>
    <?php if (!empty($study['excerpt'])): ?>
      <p><?= clean($study['excerpt']) ?></p>
    <?php endif; ?>
    <?php if (!empty($metrics)): ?>
      <div class="ak-tile__meta">
        <?php foreach (array_slice($metrics, 0, 3) as $key => $value): ?>
          <div class="ak-tile__m">
            <span><?= clean(str_replace('_', ' ', (string) $key)) ?></span>
            <b><?= clean((string) $value) ?></b>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
    <span class="ak-tile__go">Read case study <?= ak_icon('arrow-up-right', 15) ?></span>
  </div>
</a>

<?php
/**
 * Blog Card Component — AKESTECH design system
 * @var array $post
 */
?>
<a href="<?= url('blog/' . $post['slug']) ?>" class="ak-tile ak-spot ak-reveal">
  <div class="ak-tile__media">
    <?php if (!empty($post['featured_image'])): ?>
      <img src="<?= $post['featured_image'] ?>" alt="<?= clean($post['title']) ?>" loading="lazy">
    <?php else: ?>
      <div class="ak-tile__ph"><?= ak_icon('file-text', 30) ?></div>
    <?php endif; ?>
  </div>
  <div class="ak-tile__body">
    <?php if (!empty($post['category_name'])): ?>
      <span class="ak-tile__cat"><?= clean($post['category_name']) ?></span>
    <?php endif; ?>
    <h3><?= clean($post['title']) ?></h3>
    <?php if (!empty($post['excerpt'])): ?>
      <p><?= clean($post['excerpt']) ?></p>
    <?php endif; ?>
    <div class="ak-tile__date">
      <time datetime="<?= clean($post['published_at'] ?? '') ?>"><?= formatDate($post['published_at'] ?? $post['created_at']) ?></time>
    </div>
  </div>
</a>

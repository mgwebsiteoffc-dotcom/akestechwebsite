<?php
/**
 * Blog Card Component
 * @var array $post
 */
?>
<a href="<?= url('blog/' . $post['slug']) ?>" class="group block bg-white border border-gray-100 rounded-2xl overflow-hidden hover:shadow-lg transition-all duration-300">
    <div class="aspect-[16/9] bg-gray-100 overflow-hidden">
        <?php if ($post['featured_image']): ?>
            <img src="<?= $post['featured_image'] ?>" alt="<?= clean($post['title']) ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
        <?php else: ?>
            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-50 to-gray-100">
                <span class="text-3xl">📝</span>
            </div>
        <?php endif; ?>
    </div>
    <div class="p-5">
        <?php if (!empty($post['category_name'])): ?>
            <span class="text-xs font-semibold text-primary-600 uppercase tracking-wider"><?= clean($post['category_name']) ?></span>
        <?php endif; ?>
        <h3 class="text-base font-semibold text-gray-900 mt-1.5 mb-2 group-hover:text-primary-600 transition-colors line-clamp-2"><?= clean($post['title']) ?></h3>
        <p class="text-sm text-gray-500 line-clamp-2 mb-3"><?= clean($post['excerpt'] ?? '') ?></p>
        <div class="flex items-center text-xs text-gray-400">
            <time datetime="<?= $post['published_at'] ?>"><?= formatDate($post['published_at'] ?? $post['created_at']) ?></time>
        </div>
    </div>
</a>
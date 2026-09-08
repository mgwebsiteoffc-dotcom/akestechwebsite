<?php
/**
 * Case Study Card Component
 * @var array $study
 */
$metrics = json_decode($study['metrics'] ?? '{}', true);
?>
<a href="<?= url('case-studies/' . $study['slug']) ?>" class="group block bg-white border border-gray-100 rounded-2xl overflow-hidden hover:shadow-lg transition-all duration-300">
    <!-- Image -->
    <div class="aspect-video bg-gray-100 relative overflow-hidden">
        <?php if ($study['featured_image']): ?>
            <img src="<?= ($study['featured_image']) ?>" alt="<?= clean($study['title']) ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
        <?php else: ?>
            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-primary-50 to-primary-100">
                <span class="text-4xl">📊</span>
            </div>
        <?php endif; ?>
        <?php if ($study['industry']): ?>
            <span class="absolute top-3 left-3 px-3 py-1 bg-white/90 backdrop-blur-sm rounded-full text-xs font-medium text-gray-700"><?= clean($study['industry']) ?></span>
        <?php endif; ?>
    </div>
    <!-- Content -->
    <div class="p-5 lg:p-6">
        <h3 class="text-base font-semibold text-gray-900 mb-2 group-hover:text-primary-600 transition-colors line-clamp-2"><?= clean($study['title']) ?></h3>
        <p class="text-sm text-gray-500 mb-4 line-clamp-2"><?= clean($study['excerpt'] ?? '') ?></p>
        <?php if (!empty($metrics)): ?>
        <div class="flex flex-wrap gap-3">
            <?php foreach (array_slice($metrics, 0, 3) as $key => $value): ?>
            <div class="px-3 py-1.5 bg-gray-50 rounded-lg">
                <p class="text-xs text-gray-500 capitalize"><?= str_replace('_', ' ', $key) ?></p>
                <p class="text-sm font-bold text-gray-900"><?= $value ?></p>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</a>
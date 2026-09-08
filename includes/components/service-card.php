<?php
/**
 * Service Card Component
 * @var string $title
 * @var string $description
 * @var string $icon
 * @var string $link
 * @var string $color (optional)
 */
$color = $color ?? 'primary';
$colorMap = [
    'primary' => 'bg-primary-50 text-primary-600',
    'green' => 'bg-green-50 text-green-600',
    'orange' => 'bg-orange-50 text-orange-600',
    'blue' => 'bg-blue-50 text-blue-600',
    'purple' => 'bg-purple-50 text-purple-600',
    'cyan' => 'bg-cyan-50 text-cyan-600',
];
$colorClass = $colorMap[$color] ?? $colorMap['primary'];
?>
<a href="<?= $link ?>" class="group block p-6 lg:p-8 bg-white border border-gray-100 rounded-2xl hover:border-gray-200 hover:shadow-lg transition-all duration-300">
    <div class="w-12 h-12 <?= $colorClass ?> rounded-xl flex items-center justify-center text-xl mb-5">
        <?= $icon ?>
    </div>
    <h3 class="text-lg font-semibold text-gray-900 mb-2 group-hover:text-primary-600 transition-colors"><?= $title ?></h3>
    <p class="text-sm text-gray-600 leading-relaxed mb-4"><?= $description ?></p>
    <span class="inline-flex items-center text-sm font-medium text-primary-600 group-hover:gap-2 transition-all">
        Learn more
        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
    </span>
</a>
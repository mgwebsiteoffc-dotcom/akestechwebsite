<?php
/**
 * CTA Section Component
 * @var string $title
 * @var string $description
 * @var string $primaryBtn (optional)
 * @var string $primaryLink (optional)
 * @var string $secondaryBtn (optional)
 * @var string $secondaryLink (optional)
 * @var string $style (optional) - 'dark' or 'light'
 */
$style = $style ?? 'dark';
$primaryBtn = $primaryBtn ?? 'Get Started';
$primaryLink = $primaryLink ?? url('contact');
$secondaryBtn = $secondaryBtn ?? 'Install App';
$secondaryLink = $secondaryLink ?? SHOPIFY_APP_URL;
$isDark = $style === 'dark';
?>
<section class="<?= $isDark ? 'bg-gray-950' : 'bg-primary-50' ?>">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24 text-center">
        <h2 class="text-2xl lg:text-4xl font-bold <?= $isDark ? 'text-white' : 'text-gray-900' ?> mb-4">
            <?= $title ?>
        </h2>
        <p class="text-base lg:text-lg <?= $isDark ? 'text-gray-400' : 'text-gray-600' ?> mb-8 max-w-2xl mx-auto">
            <?= $description ?>
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?= $primaryLink ?>" class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-white bg-primary-600 rounded-lg hover:bg-primary-700 transition-colors shadow-sm">
                <?= $primaryBtn ?>
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
            <a href="<?= $secondaryLink ?>" target="_blank" class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold <?= $isDark ? 'text-white border-gray-700 hover:bg-gray-800' : 'text-gray-700 border-gray-300 hover:bg-gray-50' ?> border rounded-lg transition-colors">
                <?= $secondaryBtn ?>
            </a>
        </div>
    </div>
</section>
<?php
/**
 * 404 Page
 */
SEO::set('meta_title', 'Page Not Found — ' . SITE_NAME);
SEO::set('meta_description', 'The page you are looking for does not exist.');
SEO::set('robots', 'noindex, nofollow');

ob_start();
?>

<section class="min-h-[70vh] flex items-center justify-center px-4">
    <div class="text-center max-w-lg">
        <p class="text-8xl font-bold text-gray-200 mb-4">404</p>
        <h1 class="text-2xl font-bold text-gray-900 mb-3">Page not found</h1>
        <p class="text-gray-600 mb-8">Sorry, we couldn't find the page you're looking for. It might have been moved or deleted.</p>
        <div class="flex gap-4 justify-center">
            <a href="<?= url('/') ?>" class="px-6 py-2.5 text-sm font-semibold text-white bg-primary-600 rounded-lg hover:bg-primary-700 transition-colors">Go Home</a>
            <a href="<?= url('contact') ?>" class="px-6 py-2.5 text-sm font-semibold text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">Contact Us</a>
        </div>
    </div>
</section>

<?php
$pageContent = ob_get_clean();
include __DIR__ . '/../includes/components/layout.php';
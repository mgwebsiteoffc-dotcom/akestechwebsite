<?php
/**
 * Resources Page
 */
SEO::set('meta_title', 'Resources — Free Tools, Guides & Templates | ' . SITE_NAME);
SEO::set('meta_description', 'Free resources for Shopify store owners. Growth guides, calculators, templates, and tools to scale your D2C brand.');

$schemas = [];
$schemas[] = SEO::breadcrumbSchema([
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'Resources', 'url' => url('resources')]
]);

ob_start();
?>

<!-- HERO -->
<section class="bg-gray-50 pt-12 pb-8 lg:pt-16 lg:pb-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl animate-on-scroll">
            <h1 class="text-3xl lg:text-4xl font-extrabold text-gray-900 mb-3">Resources</h1>
            <p class="text-lg text-gray-600">Free tools, guides, and templates to help you grow your Shopify store.</p>
        </div>
    </div>
</section>

<!-- RESOURCES GRID -->
<section class="bg-gray-50 pb-16 lg:pb-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            <!-- Resource 1 -->
            <div class="animate-on-scroll bg-white border border-gray-100 rounded-2xl overflow-hidden hover:shadow-lg transition-all group">
                <div class="aspect-video bg-gradient-to-br from-primary-50 to-primary-100 flex items-center justify-center">
                    <span class="text-4xl">📊</span>
                </div>
                <div class="p-6">
                    <span class="text-xs font-semibold text-primary-600 uppercase tracking-wider">Guide</span>
                    <h3 class="text-base font-semibold text-gray-900 mt-1.5 mb-2 group-hover:text-primary-600 transition-colors">Shopify Growth Playbook 2024</h3>
                    <p class="text-sm text-gray-600 mb-4">Complete guide to scaling your Shopify store from ₹5L to ₹1Cr monthly revenue.</p>
                    <a href="#" class="text-sm font-medium text-primary-600 hover:text-primary-700">Download Free →</a>
                </div>
            </div>

            <!-- Resource 2 -->
            <div class="animate-on-scroll bg-white border border-gray-100 rounded-2xl overflow-hidden hover:shadow-lg transition-all group">
                <div class="aspect-video bg-gradient-to-br from-green-50 to-green-100 flex items-center justify-center">
                    <span class="text-4xl">💬</span>
                </div>
                <div class="p-6">
                    <span class="text-xs font-semibold text-green-600 uppercase tracking-wider">Template</span>
                    <h3 class="text-base font-semibold text-gray-900 mt-1.5 mb-2 group-hover:text-primary-600 transition-colors">WhatsApp Message Templates</h3>
                    <p class="text-sm text-gray-600 mb-4">20+ proven WhatsApp templates for cart recovery, COD verification, and customer engagement.</p>
                    <a href="#" class="text-sm font-medium text-primary-600 hover:text-primary-700">Download Free →</a>
                </div>
            </div>

            <!-- Resource 3 -->
            <div class="animate-on-scroll bg-white border border-gray-100 rounded-2xl overflow-hidden hover:shadow-lg transition-all group">
                <div class="aspect-video bg-gradient-to-br from-orange-50 to-orange-100 flex items-center justify-center">
                    <span class="text-4xl">🧮</span>
                </div>
                <div class="p-6">
                    <span class="text-xs font-semibold text-orange-600 uppercase tracking-wider">Calculator</span>
                    <h3 class="text-base font-semibold text-gray-900 mt-1.5 mb-2 group-hover:text-primary-600 transition-colors">ROAS Calculator</h3>
                    <p class="text-sm text-gray-600 mb-4">Calculate your target ROAS, break-even point, and profitability with our free calculator.</p>
                    <a href="#" class="text-sm font-medium text-primary-600 hover:text-primary-700">Use Calculator →</a>
                </div>
            </div>

            <!-- Resource 4 -->
            <div class="animate-on-scroll bg-white border border-gray-100 rounded-2xl overflow-hidden hover:shadow-lg transition-all group">
                <div class="aspect-video bg-gradient-to-br from-purple-50 to-purple-100 flex items-center justify-center">
                    <span class="text-4xl">📋</span>
                </div>
                <div class="p-6">
                    <span class="text-xs font-semibold text-purple-600 uppercase tracking-wider">Checklist</span>
                    <h3 class="text-base font-semibold text-gray-900 mt-1.5 mb-2 group-hover:text-primary-600 transition-colors">Shopify Launch Checklist</h3>
                    <p class="text-sm text-gray-600 mb-4">50-point checklist to ensure your Shopify store is ready to convert from day one.</p>
                    <a href="#" class="text-sm font-medium text-primary-600 hover:text-primary-700">Download Free →</a>
                </div>
            </div>

            <!-- Resource 5 -->
            <div class="animate-on-scroll bg-white border border-gray-100 rounded-2xl overflow-hidden hover:shadow-lg transition-all group">
                <div class="aspect-video bg-gradient-to-br from-blue-50 to-blue-100 flex items-center justify-center">
                    <span class="text-4xl">📈</span>
                </div>
                <div class="p-6">
                    <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider">Guide</span>
                    <h3 class="text-base font-semibold text-gray-900 mt-1.5 mb-2 group-hover:text-primary-600 transition-colors">Meta Ads for D2C Brands</h3>
                    <p class="text-sm text-gray-600 mb-4">Step-by-step guide to setting up profitable Meta ad campaigns for your Shopify store.</p>
                    <a href="#" class="text-sm font-medium text-primary-600 hover:text-primary-700">Download Free →</a>
                </div>
            </div>

            <!-- Resource 6 -->
            <div class="animate-on-scroll bg-white border border-gray-100 rounded-2xl overflow-hidden hover:shadow-lg transition-all group">
                <div class="aspect-video bg-gradient-to-br from-cyan-50 to-cyan-100 flex items-center justify-center">
                    <span class="text-4xl">🔍</span>
                </div>
                <div class="p-6">
                    <span class="text-xs font-semibold text-cyan-600 uppercase tracking-wider">Tool</span>
                    <h3 class="text-base font-semibold text-gray-900 mt-1.5 mb-2 group-hover:text-primary-600 transition-colors">Shopify Speed Analyzer</h3>
                    <p class="text-sm text-gray-600 mb-4">Check your Shopify store speed score and get instant optimization recommendations.</p>
                    <a href="#" class="text-sm font-medium text-primary-600 hover:text-primary-700">Analyze Now →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- NEWSLETTER -->
<section class="bg-white py-16 border-t border-gray-100">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 text-center animate-on-scroll">
        <h2 class="text-2xl font-bold text-gray-900 mb-3">Get New Resources First</h2>
        <p class="text-gray-600 mb-6">Subscribe and we'll send you new guides, templates, and tools as soon as they're ready.</p>
        <form method="POST" action="" class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
            <input type="hidden" name="form_action" value="newsletter">
            <?= csrfField() ?>
            <input type="email" name="email" placeholder="Enter your email" required class="flex-1 px-4 py-3 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
            <button type="submit" class="px-6 py-3 text-sm font-semibold text-white bg-primary-600 rounded-xl hover:bg-primary-700 transition-colors">Subscribe</button>
        </form>
    </div>
</section>

<?php
$pageContent = ob_get_clean();
include __DIR__ . '/../includes/components/layout.php';
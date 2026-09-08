<?php
/**
 * Resources Page
 */
SEO::set('meta_title', 'Resources — Free Tools, Guides & Templates | ' . SITE_NAME);
SEO::set('meta_description', 'Free resources for Shopify store owners. Growth guides, calculators, templates, and tools to scale your D2C brand.');

$playbookDownloadReady = !empty($_SESSION['playbook_download_ready']);
unset($_SESSION['playbook_download_ready']);

$schemas = [];
$schemas[] = SEO::breadcrumbSchema([
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'Resources', 'url' => url('resources')]
]);

// Resources FAQs for AEO Schema
$resourceFaqs = [
    [
        'question' => 'Are all resources really free?',
        'answer' => 'Yes! All our guides, templates, calculators, and tools are 100% free. We provide them to help Shopify store owners succeed. Some resources may require an email signup for delivery.'
    ],
    [
        'question' => 'Do I need a Shopify store to use these resources?',
        'answer' => 'Most resources are designed for Shopify stores, but many principles apply to any D2C brand. The calculators and templates are specifically built for Shopify integration.'
    ],
    [
        'question' => 'How often are new resources added?',
        'answer' => 'We add 2-3 new resources monthly based on what our community needs most. Subscribe to our newsletter to get notified when new guides and tools are released.'
    ],
    [
        'question' => 'Can I share these resources with my team?',
        'answer' => 'Absolutely! All resources are free to share with your team, customers, and network. We just ask that you credit Akestech as the source.'
    ]
];

$schemas[] = SEO::faqSchema($resourceFaqs);

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
<!-- RESOURCES GRID -->
<section class="bg-gray-50 pb-16 lg:pb-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            <!-- Resource 1 -->
            <div class="animate-on-scroll bg-white border border-gray-100 rounded-2xl overflow-hidden hover:shadow-lg transition-all group">
                <div class="aspect-video bg-gray-100 overflow-hidden">
                    <img src="<?= asset('resources/shopify-growth-playbook-2026.png') ?>" alt="Shopify Growth Playbook 2026 cover" width="1200" height="675" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                </div>
                <div class="p-6">
                    <span class="text-xs font-semibold text-primary-600 uppercase tracking-wider">Guide</span>
                    <h3 class="text-base font-semibold text-gray-900 mt-1.5 mb-2 group-hover:text-primary-600 transition-colors">Shopify Growth Playbook 2026</h3>
                    <p class="text-sm text-gray-600 mb-4">Complete guide to scaling your Shopify store from ₹5L to ₹1Cr monthly revenue.</p>
                    <button type="button" data-open-playbook class="text-sm font-medium text-primary-600 hover:text-primary-700">Download Free →</button>
                </div>
            </div>

            <!-- Resource 2 -->
            <div class="animate-on-scroll bg-white border border-gray-100 rounded-2xl overflow-hidden hover:shadow-lg transition-all group">
                <div class="aspect-video bg-gray-100 overflow-hidden">
                    <img src="<?= asset('resources/whatsapp-message-templates.png') ?>" alt="WhatsApp Message Templates resource cover" width="1200" height="675" loading="lazy" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                </div>
                <div class="p-6">
                    <span class="text-xs font-semibold text-green-600 uppercase tracking-wider">Template</span>
                    <h3 class="text-base font-semibold text-gray-900 mt-1.5 mb-2 group-hover:text-primary-600 transition-colors">WhatsApp Message Templates</h3>
                    <p class="text-sm text-gray-600 mb-4">20+ proven WhatsApp templates for cart recovery, COD verification, and customer engagement.</p>
                    <a href="<?= url('resources/whatsapp-message-templates') ?>" class="text-sm font-medium text-primary-600 hover:text-primary-700">View More →</a>
                </div>
            </div>

            <!-- Resource 3 -->
            <div class="animate-on-scroll bg-white border border-gray-100 rounded-2xl overflow-hidden hover:shadow-lg transition-all group">
                <div class="aspect-video bg-gray-100 overflow-hidden">
                    <img src="<?= asset('resources/roas-calculator.png') ?>" alt="ROAS Calculator resource cover" width="1200" height="675" loading="lazy" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                </div>
                <div class="p-6">
                    <span class="text-xs font-semibold text-orange-600 uppercase tracking-wider">Calculator</span>
                    <h3 class="text-base font-semibold text-gray-900 mt-1.5 mb-2 group-hover:text-primary-600 transition-colors">ROAS Calculator</h3>
                    <p class="text-sm text-gray-600 mb-4">Calculate your target ROAS, break-even point, and profitability with our free calculator.</p>
                    <a href="<?= url('resources/roas-calculator') ?>" class="text-sm font-medium text-primary-600 hover:text-primary-700">Use Calculator →</a>
                </div>
            </div>

            <!-- Resource 4 -->
            <div class="animate-on-scroll bg-white border border-gray-100 rounded-2xl overflow-hidden hover:shadow-lg transition-all group">
                <div class="aspect-video bg-gray-100 overflow-hidden">
                    <img src="<?= asset('resources/shopify-launch-checklist.png') ?>" alt="Shopify Launch Checklist resource cover" width="1200" height="675" loading="lazy" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                </div>
                <div class="p-6">
                    <span class="text-xs font-semibold text-purple-600 uppercase tracking-wider">Checklist</span>
                    <h3 class="text-base font-semibold text-gray-900 mt-1.5 mb-2 group-hover:text-primary-600 transition-colors">Shopify Launch Checklist</h3>
                    <p class="text-sm text-gray-600 mb-4">50-point checklist to ensure your Shopify store is ready to convert from day one.</p>
                    <a href="<?= url('resources/shopify-launch-checklist') ?>" class="text-sm font-medium text-primary-600 hover:text-primary-700">View Checklist →</a>
                </div>
            </div>

            <!-- Resource 5 -->
            <div class="animate-on-scroll bg-white border border-gray-100 rounded-2xl overflow-hidden hover:shadow-lg transition-all group">
                <div class="aspect-video bg-gray-100 overflow-hidden">
                    <img src="<?= asset('resources/meta-ads-d2c-guide.png') ?>" alt="Meta Ads for D2C Brands guide cover" width="1200" height="675" loading="lazy" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                </div>
                <div class="p-6">
                    <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider">Guide</span>
                    <h3 class="text-base font-semibold text-gray-900 mt-1.5 mb-2 group-hover:text-primary-600 transition-colors">Meta Ads for D2C Brands</h3>
                    <p class="text-sm text-gray-600 mb-4">Step-by-step guide to setting up profitable Meta ad campaigns for your Shopify store.</p>
                    <a href="<?= url('resources/meta-ads-d2c-guide') ?>" class="text-sm font-medium text-primary-600 hover:text-primary-700">View Guide →</a>
                </div>
            </div>

            <!-- Resource 6 -->
            <div class="animate-on-scroll bg-white border border-gray-100 rounded-2xl overflow-hidden hover:shadow-lg transition-all group">
                <div class="aspect-video bg-gray-100 overflow-hidden">
                    <img src="<?= asset('resources/shopify-speed-analyzer.png') ?>" alt="Shopify Speed Analyzer tool cover" width="1200" height="675" loading="lazy" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                </div>
                <div class="p-6">
                    <span class="text-xs font-semibold text-cyan-600 uppercase tracking-wider">Tool</span>
                    <h3 class="text-base font-semibold text-gray-900 mt-1.5 mb-2 group-hover:text-primary-600 transition-colors">Shopify Speed Analyzer</h3>
                    <p class="text-sm text-gray-600 mb-4">Check your Shopify store speed score and get instant optimization recommendations.</p>
                    <a href="<?= url('resources/shopify-speed-analyzer') ?>" class="text-sm font-medium text-primary-600 hover:text-primary-700">Analyze Now →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA: Free Audit + Consultation -->
<section class="bg-gradient-to-br from-primary-600 to-primary-800 py-16 lg:py-20">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 text-center animate-on-scroll">
        <h2 class="text-3xl lg:text-4xl font-extrabold text-white mb-4">Need Help Implementing These?</h2>
        <p class="text-lg text-primary-100 mb-8">Get a free Shopify growth audit and personalized recommendations from our team.</p>
        <form method="POST" action="" class="bg-white rounded-2xl p-6 max-w-md mx-auto shadow-2xl">
            <input type="hidden" name="form_action" value="resource_audit">
            <?= csrfField() ?>
            <div class="space-y-4">
                <input type="text" name="store_name" placeholder="Your store name" required class="w-full px-4 py-3 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
                <input type="email" name="email" placeholder="Your email" required class="w-full px-4 py-3 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
                <input type="tel" name="phone" placeholder="WhatsApp number (optional)" class="w-full px-4 py-3 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
                <button type="submit" class="w-full px-6 py-3 text-sm font-semibold text-white bg-primary-600 rounded-lg hover:bg-primary-700 transition-colors">Get Free Audit</button>
            </div>
            <p class="text-xs text-gray-500 mt-4">We'll send your personalized audit within 24 hours</p>
        </form>
    </div>
</section>

<!-- FAQs -->
<section class="bg-gray-50 py-16 lg:py-24">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl lg:text-3xl font-extrabold text-gray-900 mb-2 text-center">Resources FAQ</h2>
        <p class="text-gray-600 text-center mb-12">Common questions about our free tools and guides</p>
        
        <div class="space-y-4" itemscope itemtype="https://schema.org/FAQPage">
            <?php foreach ($resourceFaqs as $idx => $faq): ?>
            <details class="bg-white border border-gray-200 rounded-xl overflow-hidden group" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="px-6 py-4 font-medium text-gray-900 cursor-pointer hover:bg-gray-50 flex items-center justify-between transition-colors" itemprop="name">
                    <?= clean($faq['question']) ?>
                    <svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                    </svg>
                </summary>
                <div class="px-6 py-4 border-t border-gray-100 bg-gray-50 text-gray-600 leading-relaxed" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text">
                        <?= clean($faq['answer']) ?>
                    </div>
                </div>
            </details>
            <?php endforeach; ?>
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

<!-- Shopify Growth Playbook lead form -->
<div id="playbook-modal" class="fixed inset-0 z-[210] hidden" role="dialog" aria-modal="true" aria-labelledby="playbook-modal-title">
    <button type="button" data-close-playbook class="absolute inset-0 w-full h-full bg-slate-950/65 backdrop-blur-sm cursor-default" aria-label="Close download form"></button>
    <div class="relative min-h-full flex items-center justify-center p-4 pointer-events-none">
        <div class="pointer-events-auto w-full max-w-lg bg-white rounded-2xl shadow-2xl overflow-hidden">
            <div class="bg-gradient-to-br from-primary-700 to-primary-900 p-6 sm:p-8 text-white relative">
                <button type="button" data-close-playbook class="absolute top-4 right-4 w-9 h-9 rounded-full bg-white/10 hover:bg-white/20 text-xl" aria-label="Close">&times;</button>
                <p class="text-xs font-bold uppercase tracking-[.18em] text-primary-200">Free 2026 playbook</p>
                <h2 id="playbook-modal-title" class="text-2xl sm:text-3xl font-extrabold mt-2">Get the Shopify Growth Playbook</h2>
                <p class="text-sm text-primary-100 mt-3 leading-relaxed">Enter your details and the PDF download will begin immediately.</p>
            </div>
            <form method="POST" action="<?= url('resources') ?>" class="p-6 sm:p-8">
                <input type="hidden" name="form_action" value="resource_download">
                <input type="hidden" name="message" value="Requested Shopify Growth Playbook 2026 PDF">
                <?= csrfField() ?>
                <input type="text" name="website_url_hp" value="" class="hidden" tabindex="-1" autocomplete="off" aria-hidden="true">
                <div class="space-y-4">
                    <label class="block"><span class="text-sm font-semibold text-gray-800">Name</span><input type="text" name="name" required autocomplete="name" placeholder="Your full name" class="mt-1.5 w-full px-4 py-3 text-sm border border-gray-200 rounded-xl outline-none focus:ring-2 focus:ring-primary-500"></label>
                    <label class="block"><span class="text-sm font-semibold text-gray-800">Work email</span><input type="email" name="email" required autocomplete="email" placeholder="you@company.com" class="mt-1.5 w-full px-4 py-3 text-sm border border-gray-200 rounded-xl outline-none focus:ring-2 focus:ring-primary-500"></label>
                    <label class="block"><span class="text-sm font-semibold text-gray-800">Phone / WhatsApp</span><input type="tel" name="phone" required autocomplete="tel" placeholder="Your phone number" class="mt-1.5 w-full px-4 py-3 text-sm border border-gray-200 rounded-xl outline-none focus:ring-2 focus:ring-primary-500"></label>
                    <button type="submit" class="w-full px-6 py-3.5 text-sm font-semibold text-white bg-primary-600 hover:bg-primary-700 rounded-xl transition-colors">Submit &amp; Download PDF</button>
                </div>
                <p class="text-xs text-gray-500 text-center mt-4">By submitting, you agree that Akestech may contact you about Shopify growth services. We do not sell your information.</p>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('playbook-modal');
    const openModal = function () {
        modal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
        setTimeout(function () { modal.querySelector('input[name="name"]').focus(); }, 50);
    };
    const closeModal = function () {
        modal.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    };
    document.querySelectorAll('[data-open-playbook]').forEach(function (button) { button.addEventListener('click', openModal); });
    document.querySelectorAll('[data-close-playbook]').forEach(function (button) { button.addEventListener('click', closeModal); });
    document.addEventListener('keydown', function (event) { if (event.key === 'Escape' && !modal.classList.contains('hidden')) closeModal(); });
    <?php if ($playbookDownloadReady): ?>
    window.setTimeout(function () { window.location.href = <?= json_encode(url('resources/download-shopify-growth-playbook')) ?>; }, 500);
    <?php elseif (($_POST['form_action'] ?? '') === 'resource_download'): ?>
    openModal();
    <?php endif; ?>
});
</script>

<?php
$pageContent = ob_get_clean();

// Render schemas
SEO::renderSchemas($schemas);

include __DIR__ . '/../includes/components/layout.php';

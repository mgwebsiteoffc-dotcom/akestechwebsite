<?php
/**
 * Service: Automation — WhatsApp, Email, Workflows
 */
SEO::load('automation');
$schemas = [];
$schemas[] = SEO::breadcrumbSchema([
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'Services', 'url' => url('services/automation')],
    ['name' => 'Automation', 'url' => url('services/automation')]
]);

ob_start();
?>

<!-- HERO -->
<section class="relative overflow-hidden bg-white">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#f0f0f0_1px,transparent_1px),linear-gradient(to_bottom,#f0f0f0_1px,transparent_1px)] bg-[size:4rem_4rem] opacity-30"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-16 lg:pt-28 lg:pb-24">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div class="animate-on-scroll">
                <span class="text-xs font-semibold text-purple-600 uppercase tracking-wider bg-purple-50 px-3 py-1.5 rounded-full">Automation Services</span>
                <h1 class="text-3xl lg:text-5xl font-extrabold text-gray-900 mt-5 mb-6 leading-tight">
                    Put Your Store on
                    <span class="text-purple-600">Autopilot</span>
                </h1>
                <p class="text-lg text-gray-500 leading-relaxed mb-8">
                    Every manual task in your business is costing you time, money, and sanity. We build intelligent automation systems — WhatsApp flows, email sequences, operational workflows — that save you 20+ hours/week and generate revenue while you sleep.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 mb-8">
                    <a href="<?= url('contact') ?>" class="inline-flex items-center justify-center px-7 py-3.5 text-sm font-semibold text-white bg-gray-900 rounded-xl hover:bg-gray-800 transition-all shadow-lg shadow-gray-900/20">Automate My Store →</a>
                    <a href="<?= url('products/whatsapp-shopify') ?>" class="inline-flex items-center justify-center px-7 py-3.5 text-sm font-semibold text-gray-700 border border-gray-200 rounded-xl hover:bg-gray-50 transition-all">See WhatsApp App</a>
                </div>
                <div class="flex flex-wrap gap-6">
                    <div><p class="text-2xl font-extrabold text-gray-900">20<span class="text-purple-600">+</span> hrs</p><p class="text-xs text-gray-500 mt-0.5">Saved Per Week</p></div>
                    <div class="w-px bg-gray-200"></div>
                    <div><p class="text-2xl font-extrabold text-gray-900">22<span class="text-purple-600">%</span></p><p class="text-xs text-gray-500 mt-0.5">Cart Recovery Rate</p></div>
                    <div class="w-px bg-gray-200"></div>
                    <div><p class="text-2xl font-extrabold text-gray-900">15M<span class="text-purple-600">+</span></p><p class="text-xs text-gray-500 mt-0.5">Messages Sent</p></div>
                </div>
            </div>

            <!-- Automation flow visual -->
            <div class="animate-on-scroll">
                <div class="space-y-3">
                    <?php
                    $flowSteps = [
                        ['trigger' => 'Cart Abandoned', 'action' => 'WhatsApp Recovery Sent', 'icon' => '🛒', 'arrow_color' => 'text-red-400', 'bg' => 'bg-red-50 border-red-100'],
                        ['trigger' => '30 min delay', 'action' => 'Smart timing applied', 'icon' => '⏰', 'arrow_color' => 'text-yellow-400', 'bg' => 'bg-yellow-50 border-yellow-100'],
                        ['trigger' => 'COD Order Placed', 'action' => 'Verification message sent', 'icon' => '✅', 'arrow_color' => 'text-blue-400', 'bg' => 'bg-blue-50 border-blue-100'],
                        ['trigger' => 'Order Shipped', 'action' => 'Tracking update via WhatsApp', 'icon' => '🚚', 'arrow_color' => 'text-green-400', 'bg' => 'bg-green-50 border-green-100'],
                        ['trigger' => 'Delivered', 'action' => 'Review request + cross-sell', 'icon' => '⭐', 'arrow_color' => 'text-purple-400', 'bg' => 'bg-purple-50 border-purple-100'],
                    ];
                    foreach ($flowSteps as $i => $step): ?>
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 <?= $step['bg'] ?> border rounded-lg flex items-center justify-center flex-shrink-0">
                            <span class="text-sm"><?= $step['icon'] ?></span>
                        </div>
                        <div class="flex-1 <?= $step['bg'] ?> border rounded-xl px-4 py-3">
                            <div class="flex items-center justify-between">
                                <p class="text-xs font-semibold text-gray-800"><?= $step['trigger'] ?></p>
                                <p class="text-xs text-gray-500">→ <?= $step['action'] ?></p>
                            </div>
                        </div>
                    </div>
                    <?php if ($i < count($flowSteps) - 1): ?>
                    <div class="flex justify-center"><svg class="w-4 h-4 <?= $step['arrow_color'] ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg></div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- SERVICES -->
<section class="bg-gray-50 py-16 lg:py-24" id="services">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 animate-on-scroll">
            <h2 class="text-2xl lg:text-4xl font-bold text-gray-900 mb-4">Automation Services We Build</h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $autoServices = [
                ['icon' => '💬', 'title' => 'WhatsApp Automation', 'desc' => 'Cart recovery, COD verification, order updates, broadcast campaigns, and chatbot — all via official WhatsApp Business API.', 'highlight' => 'Our proprietary app', 'color' => 'bg-green-50 text-green-600'],
                ['icon' => '📧', 'title' => 'Email Marketing Flows', 'desc' => 'Welcome series, abandoned cart, post-purchase, win-back, and VIP flows. Built on Klaviyo, Mailchimp, or your preferred ESP.', 'highlight' => 'Lifecycle automation', 'color' => 'bg-blue-50 text-blue-600'],
                ['icon' => '🔗', 'title' => 'Workflow Automation', 'desc' => 'Connect Shopify with your CRM, ERP, accounting, logistics, and customer support tools. If it has an API, we integrate it.', 'highlight' => 'Custom integrations', 'color' => 'bg-purple-50 text-purple-600'],
                ['icon' => '🏷️', 'title' => 'Order Processing', 'desc' => 'Auto-tagging, fraud detection, priority fulfillment, conditional routing, and multi-warehouse allocation rules.', 'highlight' => 'Smart order routing', 'color' => 'bg-orange-50 text-orange-600'],
                ['icon' => '📊', 'title' => 'Reporting Automation', 'desc' => 'Daily P&L, weekly performance summaries, inventory alerts, and custom KPI dashboards delivered to Slack, email, or sheets.', 'highlight' => 'Auto-generated reports', 'color' => 'bg-cyan-50 text-cyan-600'],
                ['icon' => '🤖', 'title' => 'AI-Powered Automation', 'desc' => 'Smart product recommendations, dynamic pricing triggers, demand prediction alerts, and AI chatbot for customer support.', 'highlight' => 'Coming soon', 'color' => 'bg-primary-50 text-primary-600'],
            ];
            foreach ($autoServices as $s): ?>
            <div class="animate-on-scroll bg-white border border-gray-100 rounded-2xl p-6 hover:shadow-lg hover:border-gray-200 transition-all">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 <?= $s['color'] ?> rounded-xl flex items-center justify-center"><span class="text-xl"><?= $s['icon'] ?></span></div>
                    <span class="text-[10px] font-semibold uppercase tracking-wider text-gray-400 bg-gray-50 px-2 py-1 rounded"><?= $s['highlight'] ?></span>
                </div>
                <h3 class="text-base font-semibold text-gray-900 mb-2"><?= $s['title'] ?></h3>
                <p class="text-sm text-gray-500 leading-relaxed"><?= $s['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- PRODUCT CALLOUT -->
<section class="bg-white py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-3xl border border-green-100 p-8 lg:p-12 animate-on-scroll">
            <div class="grid lg:grid-cols-2 gap-8 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-green-100 rounded-full mb-4">
                        <span class="text-xs font-semibold text-green-700 uppercase tracking-wider">Our Product</span>
                    </div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-4">WhatsApp Automation App for Shopify</h2>
                    <p class="text-gray-600 mb-6">Our automation services are powered by our proprietary WhatsApp app. Install it yourself for self-serve automation, or let our team set up advanced flows as part of your growth package.</p>
                    <div class="flex gap-3">
                        <a href="<?= SHOPIFY_APP_URL ?>" target="_blank" class="px-5 py-2.5 text-sm font-semibold text-white bg-green-600 rounded-xl hover:bg-green-700 transition-colors">Install Free App</a>
                        <a href="<?= url('products/whatsapp-shopify') ?>" class="px-5 py-2.5 text-sm font-semibold text-green-700 border border-green-200 rounded-xl hover:bg-green-50 transition-colors">Learn More</a>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white rounded-xl p-4 border border-green-100 text-center"><p class="text-2xl font-bold text-green-600">22%</p><p class="text-xs text-gray-500 mt-1">Cart Recovery</p></div>
                    <div class="bg-white rounded-xl p-4 border border-green-100 text-center"><p class="text-2xl font-bold text-green-600">40%</p><p class="text-xs text-gray-500 mt-1">RTO Reduction</p></div>
                    <div class="bg-white rounded-xl p-4 border border-green-100 text-center"><p class="text-2xl font-bold text-green-600">98%</p><p class="text-xs text-gray-500 mt-1">Open Rate</p></div>
                    <div class="bg-white rounded-xl p-4 border border-green-100 text-center"><p class="text-2xl font-bold text-green-600">5 min</p><p class="text-xs text-gray-500 mt-1">Setup Time</p></div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- CTA -->
<section class="bg-gray-950 py-16 lg:py-24">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center animate-on-scroll">
        <h2 class="text-3xl lg:text-4xl font-bold text-white mb-5">Save 20+ Hours Per Week with Smart Automation</h2>
        <p class="text-lg text-gray-400 mb-10">Let machines handle the repetitive work. Focus on what matters — building your brand.</p>
        <a href="<?= url('contact') ?>" class="inline-flex items-center justify-center px-8 py-4 text-sm font-semibold text-gray-900 bg-white rounded-xl hover:bg-gray-100 transition-all shadow-lg">Get Automation Assessment →</a>
    </div>
</section>

<!-- FAQs -->
<?php component('faq-section', ['pageSlug' => 'automation']); ?>

<?php
$pageContent = ob_get_clean();
include __DIR__ . '/../../includes/components/layout.php';
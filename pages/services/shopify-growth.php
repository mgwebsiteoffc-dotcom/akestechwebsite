<?php
/**
 * Service: Shopify Growth — CRO, Store Optimization, Revenue Growth
 */
SEO::load('shopify-growth');

$faqs = getFaqs('shopify-growth');
$schemas = [];
if (!empty($faqs)) $schemas[] = SEO::faqSchema($faqs);
$schemas[] = SEO::breadcrumbSchema([
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'Services', 'url' => url('services/shopify-growth')],
    ['name' => 'Shopify Growth', 'url' => url('services/shopify-growth')]
]);

ob_start();
?>

<!-- HERO -->
<section class="relative overflow-hidden bg-white">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#f0f0f0_1px,transparent_1px),linear-gradient(to_bottom,#f0f0f0_1px,transparent_1px)] bg-[size:4rem_4rem] opacity-30"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-16 lg:pt-28 lg:pb-24">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div class="animate-on-scroll">
                <span class="text-xs font-semibold text-primary-600 uppercase tracking-wider bg-primary-50 px-3 py-1.5 rounded-full">Shopify Growth Services</span>
                <h1 class="text-3xl lg:text-5xl font-extrabold text-gray-900 mt-5 mb-6 leading-tight">
                    Turn Your Shopify Store Into a
                    <span class="text-primary-600">Revenue Machine</span>
                </h1>
                <p class="text-lg text-gray-500 leading-relaxed mb-8">
                    Your Shopify store has untapped revenue hiding in plain sight — slow pages, poor mobile UX, weak product pages, and conversion leaks across the funnel. We find them, fix them, and build systems that compound growth month over month.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 mb-8">
                    <a href="<?= url('contact') ?>?type=audit" class="inline-flex items-center justify-center px-7 py-3.5 text-sm font-semibold text-white bg-gray-900 rounded-xl hover:bg-gray-800 transition-all shadow-lg shadow-gray-900/20">
                        Get Free Store Audit →
                    </a>
                    <a href="#services" class="inline-flex items-center justify-center px-7 py-3.5 text-sm font-semibold text-gray-700 border border-gray-200 rounded-xl hover:bg-gray-50 transition-all">
                        See What's Included
                    </a>
                </div>
                <!-- Metrics -->
                <div class="flex flex-wrap gap-6">
                    <div>
                        <p class="text-2xl font-extrabold text-gray-900">2-4X</p>
                        <p class="text-xs text-gray-500 mt-0.5">Conversion Rate Lift</p>
                    </div>
                    <div class="w-px bg-gray-200"></div>
                    <div>
                        <p class="text-2xl font-extrabold text-gray-900">200+</p>
                        <p class="text-xs text-gray-500 mt-0.5">Stores Optimized</p>
                    </div>
                    <div class="w-px bg-gray-200"></div>
                    <div>
                        <p class="text-2xl font-extrabold text-gray-900"><1.5s</p>
                        <p class="text-xs text-gray-500 mt-0.5">Target Load Time</p>
                    </div>
                </div>
            </div>

            <!-- Right: Visual -->
            <div class="animate-on-scroll">
                <div class="bg-gray-50 rounded-2xl border border-gray-200 p-6 lg:p-8">
                    <div class="text-center mb-6">
                        <p class="text-sm font-semibold text-gray-900 mb-1">Typical Results After 90 Days</p>
                        <p class="text-xs text-gray-500">Based on average across 200+ clients</p>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-1.5"><span class="text-sm text-gray-700">Conversion Rate</span><span class="text-sm font-bold text-green-600">+127%</span></div>
                            <div class="h-2 bg-gray-200 rounded-full"><div class="h-2 bg-green-500 rounded-full" style="width:78%"></div></div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1.5"><span class="text-sm text-gray-700">Page Speed Score</span><span class="text-sm font-bold text-green-600">+85pts</span></div>
                            <div class="h-2 bg-gray-200 rounded-full"><div class="h-2 bg-green-500 rounded-full" style="width:90%"></div></div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1.5"><span class="text-sm text-gray-700">Average Order Value</span><span class="text-sm font-bold text-green-600">+32%</span></div>
                            <div class="h-2 bg-gray-200 rounded-full"><div class="h-2 bg-green-500 rounded-full" style="width:55%"></div></div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1.5"><span class="text-sm text-gray-700">Revenue per Visitor</span><span class="text-sm font-bold text-green-600">+195%</span></div>
                            <div class="h-2 bg-gray-200 rounded-full"><div class="h-2 bg-green-500 rounded-full" style="width:82%"></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- PROBLEM / PAIN POINTS -->
<section class="bg-gray-950 py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center animate-on-scroll">
            <h2 class="text-2xl lg:text-3xl font-bold text-white mb-5">Most Shopify Stores Leave 40-60% Revenue on the Table</h2>
            <p class="text-gray-400 text-base lg:text-lg leading-relaxed mb-10">Here's what we typically find when we audit a store:</p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 animate-on-scroll">
            <?php
            $problems = [
                ['metric' => '78%', 'label' => 'Cart Abandonment Rate', 'fix' => 'We bring this below 60%'],
                ['metric' => '<2%', 'label' => 'Conversion Rate', 'fix' => 'We target 3-5%+ CR'],
                ['metric' => '4s+', 'label' => 'Page Load Time', 'fix' => 'We get it under 1.5s'],
                ['metric' => '0', 'label' => 'A/B Tests Running', 'fix' => 'We run 4-8 tests/month'],
            ];
            foreach ($problems as $p): ?>
            <div class="bg-white/5 border border-white/10 rounded-xl p-5 text-center">
                <p class="text-3xl font-extrabold text-red-400 mb-1"><?= $p['metric'] ?></p>
                <p class="text-sm text-gray-300 mb-3"><?= $p['label'] ?></p>
                <p class="text-xs text-green-400 font-medium">✓ <?= $p['fix'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- SERVICES BREAKDOWN -->
<section class="bg-white py-16 lg:py-24" id="services">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 lg:mb-16 animate-on-scroll">
            <span class="text-xs font-semibold text-primary-600 uppercase tracking-wider">What's Included</span>
            <h2 class="text-2xl lg:text-4xl font-bold text-gray-900 mt-3 mb-4">
                Complete Shopify Growth Stack
            </h2>
            <p class="text-gray-500">Everything you need to maximize revenue from your existing traffic and scale profitably.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-6 lg:gap-8">
            <?php
            $services = [
                [
                    'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>',
                    'title' => 'CRO Audit & Optimization',
                    'desc' => 'We analyze every step of your customer journey — from landing page to thank-you page. Heatmaps, session recordings, funnel analysis, and competitor benchmarking.',
                    'points' => ['Full-funnel conversion analysis', 'Heatmap & session recording review', 'Checkout flow optimization', 'Product page best practices'],
                    'color' => 'primary'
                ],
                [
                    'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>',
                    'title' => 'Custom Theme Development',
                    'desc' => 'High-performance Shopify themes built for conversions. Custom design, blazing-fast code, and mobile-first UX that makes buying effortless.',
                    'points' => ['Custom Shopify 2.0 themes', 'Section-based modular architecture', 'Performance-optimized code', 'Brand-consistent design system'],
                    'color' => 'purple'
                ],
                [
                    'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>',
                    'title' => 'Mobile-First Optimization',
                    'desc' => '70%+ of your traffic is mobile. We redesign the mobile experience for thumb-friendly navigation, fast loading, and frictionless checkout.',
                    'points' => ['Touch-optimized UI components', 'Mobile-specific checkout flow', 'Lazy loading & image optimization', 'Mobile speed score 90+'],
                    'color' => 'blue'
                ],
                [
                    'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>',
                    'title' => 'Analytics & Tracking Setup',
                    'desc' => 'You can\'t optimize what you can\'t measure. We set up proper GA4, Meta Pixel, server-side tracking, and attribution for accurate data.',
                    'points' => ['GA4 + Enhanced Ecommerce', 'Meta CAPI (server-side)', 'Custom dashboards & reports', 'UTM & attribution framework'],
                    'color' => 'green'
                ],
                [
                    'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>',
                    'title' => 'A/B Testing Program',
                    'desc' => 'Continuous experimentation on product pages, collection pages, checkout flows, and landing pages to systematically increase conversion rate.',
                    'points' => ['Hypothesis-driven test roadmap', '4-8 experiments per month', 'Statistical significance tracking', 'Winning variant implementation'],
                    'color' => 'orange'
                ],
                [
                    'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>',
                    'title' => 'Monthly Growth Roadmap',
                    'desc' => 'Every month, your dedicated growth strategist builds a prioritized roadmap with clear KPIs, timelines, and expected impact scores.',
                    'points' => ['ICE-scored opportunity backlog', 'Weekly execution sprints', 'Monthly strategy review', 'Quarterly business reviews'],
                    'color' => 'cyan'
                ],
            ];
            $sColorMap = [
                'primary' => 'bg-primary-50 text-primary-600',
                'purple' => 'bg-purple-50 text-purple-600',
                'blue' => 'bg-blue-50 text-blue-600',
                'green' => 'bg-green-50 text-green-600',
                'orange' => 'bg-orange-50 text-orange-600',
                'cyan' => 'bg-cyan-50 text-cyan-600',
            ];
            foreach ($services as $s): ?>
            <div class="animate-on-scroll bg-white border border-gray-100 rounded-2xl p-6 lg:p-8 hover:shadow-lg hover:border-gray-200 transition-all">
                <div class="w-12 h-12 <?= $sColorMap[$s['color']] ?> rounded-xl flex items-center justify-center mb-5">
                    <?= $s['icon'] ?>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2"><?= $s['title'] ?></h3>
                <p class="text-sm text-gray-500 leading-relaxed mb-4"><?= $s['desc'] ?></p>
                <ul class="space-y-2">
                    <?php foreach ($s['points'] as $pt): ?>
                    <li class="flex items-center gap-2 text-sm text-gray-600">
                        <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <?= $pt ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- PROCESS -->
<section class="bg-gray-50 py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 animate-on-scroll">
            <span class="text-xs font-semibold text-primary-600 uppercase tracking-wider">Our Process</span>
            <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mt-3 mb-4">From Audit to Scale in 90 Days</h2>
        </div>
        <div class="grid md:grid-cols-4 gap-6 animate-on-scroll">
            <?php
            $steps = [
                ['num' => '01', 'title' => 'Deep Audit', 'desc' => 'Full-funnel CRO analysis, speed audit, competitor review, and analytics health check. Delivered in 5 business days.', 'duration' => 'Week 1', 'color' => 'bg-primary-600'],
                ['num' => '02', 'title' => 'Strategy & Roadmap', 'desc' => 'Prioritized optimization plan with ICE scores, expected impact, and clear timelines for each initiative.', 'duration' => 'Week 2', 'color' => 'bg-blue-600'],
                ['num' => '03', 'title' => 'Execute & Test', 'desc' => 'Our team implements optimizations, launches A/B tests, and ships improvements in weekly sprints.', 'duration' => 'Week 3-8', 'color' => 'bg-purple-600'],
                ['num' => '04', 'title' => 'Scale & Compound', 'desc' => 'Double down on what works. New experiments, continuous optimization, and compounding results every month.', 'duration' => 'Month 3+', 'color' => 'bg-green-600'],
            ];
            foreach ($steps as $step): ?>
            <div class="bg-white border border-gray-100 rounded-2xl p-6 relative">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-10 h-10 <?= $step['color'] ?> rounded-xl flex items-center justify-center">
                        <span class="text-sm font-bold text-white"><?= $step['num'] ?></span>
                    </div>
                    <span class="text-xs font-medium text-gray-400"><?= $step['duration'] ?></span>
                </div>
                <h3 class="text-base font-semibold text-gray-900 mb-2"><?= $step['title'] ?></h3>
                <p class="text-sm text-gray-500 leading-relaxed"><?= $step['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- WHO IS THIS FOR -->
<section class="bg-white py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="animate-on-scroll">
                <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-6">Is This Right for You?</h2>
                <p class="text-gray-500 mb-6">Our Shopify growth services work best for:</p>
                <div class="space-y-4">
                    <?php
                    $fits = [
                        'Shopify stores doing ₹5L+/month wanting to break through plateaus',
                        'D2C brands with traffic but low conversion rates (under 2%)',
                        'Stores spending on ads but not converting visitors to buyers',
                        'Brands needing a professional store overhaul or relaunch',
                        'Companies wanting a dedicated growth team without hiring in-house',
                    ];
                    foreach ($fits as $f): ?>
                    <div class="flex gap-3 items-start">
                        <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <p class="text-sm text-gray-700"><?= $f ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="animate-on-scroll">
                <div class="bg-gray-50 rounded-2xl p-6 lg:p-8 border border-gray-100">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">What You Get</h3>
                    <div class="space-y-3">
                        <?php
                        $gets = [
                            ['label' => 'Dedicated Growth Strategist', 'detail' => 'Senior-level, not a junior exec'],
                            ['label' => 'Shopify Developer', 'detail' => 'For all technical implementations'],
                            ['label' => 'Weekly Optimization Sprints', 'detail' => '4-8 improvements shipped/month'],
                            ['label' => 'Monthly Strategy Reviews', 'detail' => 'Data-driven roadmap updates'],
                            ['label' => 'Live Reporting Dashboard', 'detail' => 'Real-time metrics access'],
                        ];
                        foreach ($gets as $g): ?>
                        <div class="flex items-center justify-between py-2 border-b border-gray-100 last:border-0">
                            <p class="text-sm font-medium text-gray-900"><?= $g['label'] ?></p>
                            <p class="text-xs text-gray-500"><?= $g['detail'] ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- FAQ -->
<?php if (!empty($faqs)): ?>
<section class="bg-gray-50 py-16 lg:py-24">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 animate-on-scroll">
            <h2 class="text-2xl lg:text-3xl font-bold text-gray-900">Frequently Asked Questions</h2>
        </div>
        <div class="space-y-3 animate-on-scroll" data-faq-group>
            <?php foreach ($faqs as $faq): ?>
            <div class="border border-gray-200 rounded-xl overflow-hidden bg-white">
                <button data-faq-toggle class="w-full flex items-center justify-between px-6 py-4 text-left hover:bg-gray-50 transition-colors">
                    <span class="text-sm font-semibold text-gray-900 pr-4"><?= clean($faq['question']) ?></span>
                    <svg data-faq-icon class="w-5 h-5 text-gray-400 flex-shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div class="overflow-hidden transition-all duration-300" style="max-height:0">
                    <div class="px-6 pb-4"><p class="text-sm text-gray-600 leading-relaxed"><?= clean($faq['answer']) ?></p></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>


<!-- CTA -->
<section class="bg-gray-950 py-16 lg:py-24">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center animate-on-scroll">
        <h2 class="text-3xl lg:text-4xl font-bold text-white mb-5">Ready to Unlock Your Store's Full Potential?</h2>
        <p class="text-lg text-gray-400 mb-10 max-w-2xl mx-auto">Get a free growth audit and discover exactly how much revenue you're leaving on the table.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?= url('contact') ?>?type=audit" class="inline-flex items-center justify-center px-8 py-4 text-sm font-semibold text-gray-900 bg-white rounded-xl hover:bg-gray-100 transition-all shadow-lg">
                Get Free Store Audit →
            </a>
            <a href="<?= url('case-studies') ?>" class="inline-flex items-center justify-center px-8 py-4 text-sm font-semibold text-white border border-gray-700 rounded-xl hover:bg-gray-800 transition-all">
                See Client Results
            </a>
        </div>
    </div>
</section>

<!-- FAQs -->
<?php component('faq-section', ['pageSlug' => 'shopify-growth']); ?>

<?php
$pageContent = ob_get_clean();
include __DIR__ . '/../../includes/components/layout.php';
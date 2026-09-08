<?php
/**
 * Service: Performance Marketing — Meta Ads, Google Ads, Full-Funnel
 */
SEO::load('performance-marketing');
$faqs = getFaqs('performance-marketing');
$schemas = [];
if (!empty($faqs)) $schemas[] = SEO::faqSchema($faqs);
$schemas[] = SEO::breadcrumbSchema([
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'Services', 'url' => url('services/performance-marketing')],
    ['name' => 'Performance Marketing', 'url' => url('services/performance-marketing')]
]);

ob_start();
?>

<!-- HERO -->
<section class="relative overflow-hidden bg-white">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#f0f0f0_1px,transparent_1px),linear-gradient(to_bottom,#f0f0f0_1px,transparent_1px)] bg-[size:4rem_4rem] opacity-30"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-16 lg:pt-28 lg:pb-24">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div class="animate-on-scroll">
                <span class="text-xs font-semibold text-orange-600 uppercase tracking-wider bg-orange-50 px-3 py-1.5 rounded-full">Performance Marketing</span>
                <h1 class="text-3xl lg:text-5xl font-extrabold text-gray-900 mt-5 mb-6 leading-tight">
                    Ads That Actually
                    <span class="text-orange-600">Make You Money</span>
                </h1>
                <p class="text-lg text-gray-500 leading-relaxed mb-8">
                    We've managed ₹50Cr+ in ad spend for 200+ Shopify stores. Our approach is simple: build the right structure, create winning ads, track everything properly, and optimize relentlessly for profit — not vanity metrics.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 mb-8">
                    <a href="<?= url('contact') ?>?type=audit" class="inline-flex items-center justify-center px-7 py-3.5 text-sm font-semibold text-white bg-gray-900 rounded-xl hover:bg-gray-800 transition-all shadow-lg shadow-gray-900/20">
                        Get Free Ad Account Audit →
                    </a>
                    <a href="#services" class="inline-flex items-center justify-center px-7 py-3.5 text-sm font-semibold text-gray-700 border border-gray-200 rounded-xl hover:bg-gray-50 transition-all">
                        Our Approach
                    </a>
                </div>
                <div class="flex flex-wrap gap-6">
                    <div><p class="text-2xl font-extrabold text-gray-900">₹50Cr<span class="text-orange-600">+</span></p><p class="text-xs text-gray-500 mt-0.5">Ad Spend Managed</p></div>
                    <div class="w-px bg-gray-200"></div>
                    <div><p class="text-2xl font-extrabold text-gray-900">3X<span class="text-orange-600">+</span></p><p class="text-xs text-gray-500 mt-0.5">Average ROAS</p></div>
                    <div class="w-px bg-gray-200"></div>
                    <div><p class="text-2xl font-extrabold text-gray-900">200<span class="text-orange-600">+</span></p><p class="text-xs text-gray-500 mt-0.5">Brands Scaled</p></div>
                </div>
            </div>
            <div class="animate-on-scroll">
                <div class="bg-gray-50 rounded-2xl border border-gray-200 p-6">
                    <!-- Ad platforms mock -->
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white rounded-xl border border-gray-100 p-4 text-center">
                            <span class="text-2xl block mb-2">📘</span>
                            <p class="text-sm font-semibold text-gray-900">Meta Ads</p>
                            <p class="text-xs text-gray-500 mt-1">Facebook & Instagram</p>
                            <p class="text-lg font-bold text-green-600 mt-2">3.2X ROAS</p>
                        </div>
                        <div class="bg-white rounded-xl border border-gray-100 p-4 text-center">
                            <span class="text-2xl block mb-2">🔍</span>
                            <p class="text-sm font-semibold text-gray-900">Google Ads</p>
                            <p class="text-xs text-gray-500 mt-1">Search & Shopping</p>
                            <p class="text-lg font-bold text-green-600 mt-2">4.1X ROAS</p>
                        </div>
                        <div class="bg-white rounded-xl border border-gray-100 p-4 text-center">
                            <span class="text-2xl block mb-2">🎬</span>
                            <p class="text-sm font-semibold text-gray-900">Creatives</p>
                            <p class="text-xs text-gray-500 mt-1">UGC, Static, Video</p>
                            <p class="text-lg font-bold text-green-600 mt-2">15+ /month</p>
                        </div>
                        <div class="bg-white rounded-xl border border-gray-100 p-4 text-center">
                            <span class="text-2xl block mb-2">📊</span>
                            <p class="text-sm font-semibold text-gray-900">Tracking</p>
                            <p class="text-xs text-gray-500 mt-1">Server-side + CAPI</p>
                            <p class="text-lg font-bold text-green-600 mt-2">99% Accuracy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- PROBLEM -->
<section class="bg-gray-950 py-16 lg:py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center animate-on-scroll">
        <h2 class="text-2xl lg:text-3xl font-bold text-white mb-5">Most D2C Brands Waste 40-60% of Their Ad Budget</h2>
        <p class="text-gray-400 text-base lg:text-lg leading-relaxed mb-10">Wrong audiences. Poor creatives. Broken tracking. No testing framework. We fix all of it.</p>
        <div class="grid sm:grid-cols-3 gap-6">
            <?php
            $painPoints = [
                ['icon' => '💸', 'title' => 'Wasted Spend', 'desc' => 'Broad targeting, no exclusions, overlapping audiences eating your budget.'],
                ['icon' => '📉', 'title' => 'Poor Attribution', 'desc' => 'iOS privacy changes broke your tracking. You\'re optimizing on wrong data.'],
                ['icon' => '😩', 'title' => 'Creative Fatigue', 'desc' => 'Same 3 ads running for months. Audience is tired. CPMs are climbing.'],
            ];
            foreach ($painPoints as $pp): ?>
            <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                <span class="text-3xl block mb-3"><?= $pp['icon'] ?></span>
                <h3 class="text-base font-semibold text-white mb-2"><?= $pp['title'] ?></h3>
                <p class="text-sm text-gray-400"><?= $pp['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- SERVICES -->
<section class="bg-white py-16 lg:py-24" id="services">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 animate-on-scroll">
            <span class="text-xs font-semibold text-orange-600 uppercase tracking-wider">Our Stack</span>
            <h2 class="text-2xl lg:text-4xl font-bold text-gray-900 mt-3 mb-4">Performance Marketing Services</h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            <?php
            $pmServices = [
                ['icon' => '📘', 'title' => 'Meta Ads Management', 'desc' => 'Full-funnel Facebook & Instagram campaigns. Prospecting, retargeting, and retention. Dynamic product ads, collection ads, and Advantage+ campaigns.', 'color' => 'bg-blue-50 text-blue-600'],
                ['icon' => '🔍', 'title' => 'Google Ads & Shopping', 'desc' => 'Google Shopping, Search, Performance Max, and YouTube campaigns. Product feed optimization and bid strategy management.', 'color' => 'bg-red-50 text-red-600'],
                ['icon' => '🎬', 'title' => 'Creative Strategy & Production', 'desc' => 'Data-driven creative briefs, UGC production coordination, static design, video editing, and iterative testing frameworks.', 'color' => 'bg-purple-50 text-purple-600'],
                ['icon' => '🔄', 'title' => 'Full-Funnel Retargeting', 'desc' => 'Multi-platform retargeting combining Meta, Google, and WhatsApp. Dynamic product retargeting with sequenced messaging.', 'color' => 'bg-orange-50 text-orange-600'],
                ['icon' => '📊', 'title' => 'Tracking & Attribution', 'desc' => 'Server-side tracking, Meta CAPI, Google Enhanced Conversions, UTM frameworks, and multi-touch attribution models.', 'color' => 'bg-cyan-50 text-cyan-600'],
                ['icon' => '📈', 'title' => 'Scaling Strategy', 'desc' => 'Systematic scaling from ₹1L to ₹50L+/month while maintaining ROAS targets. Budget allocation, channel mix, and margin optimization.', 'color' => 'bg-green-50 text-green-600'],
            ];
            foreach ($pmServices as $s): ?>
            <div class="animate-on-scroll bg-white border border-gray-100 rounded-2xl p-6 hover:shadow-lg hover:border-gray-200 transition-all">
                <div class="w-12 h-12 <?= $s['color'] ?> rounded-xl flex items-center justify-center mb-4">
                    <span class="text-xl"><?= $s['icon'] ?></span>
                </div>
                <h3 class="text-base font-semibold text-gray-900 mb-2"><?= $s['title'] ?></h3>
                <p class="text-sm text-gray-500 leading-relaxed"><?= $s['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- PROCESS -->
<section class="bg-gray-50 py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 animate-on-scroll">
            <span class="text-xs font-semibold text-orange-600 uppercase tracking-wider">Process</span>
            <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mt-3">Our 5-Phase Approach</h2>
        </div>
        <div class="grid md:grid-cols-5 gap-5 animate-on-scroll">
            <?php
            $phases = [
                ['num' => '01', 'title' => 'Audit', 'desc' => 'Complete ad account, tracking, and creative audit', 'color' => 'bg-orange-600'],
                ['num' => '02', 'title' => 'Strategy', 'desc' => 'Custom media plan with budgets, KPIs, and funnel design', 'color' => 'bg-blue-600'],
                ['num' => '03', 'title' => 'Build', 'desc' => 'Campaign setup, tracking, audiences, and creative production', 'color' => 'bg-purple-600'],
                ['num' => '04', 'title' => 'Optimize', 'desc' => 'Daily optimization, creative testing, bid management', 'color' => 'bg-green-600'],
                ['num' => '05', 'title' => 'Scale', 'desc' => 'Increase budgets, expand channels, compound results', 'color' => 'bg-primary-600'],
            ];
            foreach ($phases as $p): ?>
            <div class="bg-white border border-gray-100 rounded-2xl p-5 text-center">
                <div class="w-10 h-10 <?= $p['color'] ?> rounded-xl flex items-center justify-center mx-auto mb-3">
                    <span class="text-xs font-bold text-white"><?= $p['num'] ?></span>
                </div>
                <h3 class="text-sm font-semibold text-gray-900 mb-1"><?= $p['title'] ?></h3>
                <p class="text-xs text-gray-500 leading-relaxed"><?= $p['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- WHAT MAKES US DIFFERENT -->
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="animate-on-scroll">
                <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-6">Why Brands Choose Us Over Other Agencies</h2>
                <div class="space-y-5">
                    <?php
                    $diffs = [
                        ['title' => 'WhatsApp + Ads = Higher ROAS', 'desc' => 'We combine ad campaigns with WhatsApp cart recovery and retargeting — recovering revenue that other agencies lose.'],
                        ['title' => 'Store CRO Built In', 'desc' => 'We don\'t just drive traffic. We optimize your store to convert that traffic. Other agencies blame "the landing page" — we fix it.'],
                        ['title' => 'Senior Specialists Only', 'desc' => 'No junior executives learning on your account. Your campaigns are managed by specialists with ₹10Cr+ in managed spend each.'],
                        ['title' => 'Profit, Not Revenue', 'desc' => 'We optimize for contribution margin and blended ROAS, not just per-campaign metrics. Your bottom line is what matters.'],
                    ];
                    foreach ($diffs as $d): ?>
                    <div class="flex gap-4 items-start">
                        <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-900"><?= $d['title'] ?></p>
                            <p class="text-sm text-gray-500 mt-0.5"><?= $d['desc'] ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="animate-on-scroll">
                <div class="bg-orange-50 rounded-2xl p-6 lg:p-8 border border-orange-100">
                    <h3 class="text-lg font-semibold text-gray-900 mb-5">Your Dedicated Team</h3>
                    <div class="space-y-4">
                        <?php
                        $teamRoles = [
                            ['role' => 'Performance Strategist', 'desc' => 'Owns your media plan and KPIs'],
                            ['role' => 'Meta Ads Specialist', 'desc' => 'Daily optimization of FB/IG campaigns'],
                            ['role' => 'Google Ads Specialist', 'desc' => 'Search, Shopping, and PMax management'],
                            ['role' => 'Creative Strategist', 'desc' => 'Ad creative briefs, testing roadmap'],
                            ['role' => 'Analytics Engineer', 'desc' => 'Tracking, attribution, and reporting'],
                        ];
                        foreach ($teamRoles as $r): ?>
                        <div class="flex items-center justify-between py-2 border-b border-orange-100 last:border-0">
                            <p class="text-sm font-medium text-gray-900"><?= $r['role'] ?></p>
                            <p class="text-xs text-gray-500"><?= $r['desc'] ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- CTA -->
<section class="bg-gray-950 py-16 lg:py-24">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center animate-on-scroll">
        <h2 class="text-3xl lg:text-4xl font-bold text-white mb-5">Stop Burning Ad Budget. Start Scaling Profitably.</h2>
        <p class="text-lg text-gray-400 mb-10 max-w-2xl mx-auto">Get a free ad account audit and discover how much revenue you're leaving on the table.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?= url('contact') ?>?type=audit" class="inline-flex items-center justify-center px-8 py-4 text-sm font-semibold text-gray-900 bg-white rounded-xl hover:bg-gray-100 transition-all shadow-lg">Get Free Ad Account Audit →</a>
            <a href="<?= url('case-studies') ?>" class="inline-flex items-center justify-center px-8 py-4 text-sm font-semibold text-white border border-gray-700 rounded-xl hover:bg-gray-800 transition-all">See ROAS Results</a>
        </div>
    </div>
</section>
<!-- FAQs -->
<?php component('faq-section', ['pageSlug' => 'performance-marketing']); ?>
<?php
$pageContent = ob_get_clean();
include __DIR__ . '/../../includes/components/layout.php';
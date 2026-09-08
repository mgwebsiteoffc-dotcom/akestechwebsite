<?php
/**
 * About Page — Agency-First, Team & Mission Focus
 * Positions GrowthScale as a Shopify growth agency with proprietary technology
 */
SEO::load('about');

$faqs = getFaqs('about');
$schemas = [];
if (!empty($faqs)) {
    $schemas[] = SEO::faqSchema($faqs);
}
$schemas[] = SEO::breadcrumbSchema([
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'About', 'url' => url('about')]
]);

ob_start();
?>

<!-- ============================================
     SECTION 1: HERO
     ============================================ -->
<section class="relative overflow-hidden bg-white">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#f0f0f0_1px,transparent_1px),linear-gradient(to_bottom,#f0f0f0_1px,transparent_1px)] bg-[size:4rem_4rem] opacity-30"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-16 lg:pt-28 lg:pb-24">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <!-- Left Content -->
            <div class="animate-on-scroll">
                <span class="text-xs font-semibold text-primary-600 uppercase tracking-wider bg-primary-50 px-3 py-1.5 rounded-full">About <?= SITE_NAME ?></span>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-gray-900 leading-tight mt-5 mb-6">
                    We're the Growth Team Your Shopify Store Deserves
                </h1>
                <p class="text-lg text-gray-500 leading-relaxed mb-6">
                    <?= SITE_NAME ?> is a Shopify-focused growth agency that combines expert services with proprietary technology. We help D2C brands scale from ₹5L to ₹1Cr+ monthly revenue — profitably.
                </p>
                <p class="text-base text-gray-500 leading-relaxed">
                    Unlike traditional agencies, we don't just run your ads and send reports. We embed ourselves in your business — optimizing your store, streamlining operations, automating workflows, and building the systems that make sustainable growth inevitable.
                </p>
            </div>

            <!-- Right: Image / Visual -->
            <div class="animate-on-scroll">
                <div class="relative">
                   
                    <div class="bg-gray-100 rounded-2xl aspect-[4/3] flex items-center justify-center border border-gray-200">
  <img src="<?= asset('resources/best-shopify-agency-in-india.png') ?>" alt=" best-shopify-agency-in-india" width="1200" height="675" loading="lazy" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
         
                    </div>
                    <!-- Floating stat cards -->
                    <div class="absolute -bottom-5 -left-5 bg-white border border-gray-100 shadow-xl rounded-xl px-5 py-4">
                        <p class="text-xs text-gray-500">Founded</p>
                        <p class="text-xl font-bold text-gray-900">2019</p>
                    </div>
                    <div class="absolute -top-5 -right-5 bg-white border border-gray-100 shadow-xl rounded-xl px-5 py-4">
                        <p class="text-xs text-gray-500">Team</p>
                        <p class="text-xl font-bold text-gray-900">20+</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================
     SECTION 2: METRICS BAR
     ============================================ -->
<section class="bg-gray-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-14">
        <div class="grid grid-cols-2 lg:grid-cols-5 gap-8 lg:gap-10">
            <div class="text-center animate-on-scroll">
                <p class="text-3xl lg:text-4xl font-extrabold text-white">100<span class="text-primary-400">+</span></p>
                <p class="text-sm text-gray-400 mt-1.5">Shopify Stores Scaled</p>
            </div>
            <div class="text-center animate-on-scroll">
                <p class="text-3xl lg:text-4xl font-extrabold text-white">₹50Cr<span class="text-primary-400">+</span></p>
                <p class="text-sm text-gray-400 mt-1.5">Ad Spend Managed</p>
            </div>
            <div class="text-center animate-on-scroll">
                <p class="text-3xl lg:text-4xl font-extrabold text-white">3X<span class="text-primary-400">+</span></p>
                <p class="text-sm text-gray-400 mt-1.5">Average ROAS</p>
            </div>
            <div class="text-center animate-on-scroll">
                <p class="text-3xl lg:text-4xl font-extrabold text-white">15M<span class="text-primary-400">+</span></p>
                <p class="text-sm text-gray-400 mt-1.5">WhatsApp Messages Sent</p>
            </div>
            <div class="text-center animate-on-scroll col-span-2 lg:col-span-1">
                <p class="text-3xl lg:text-4xl font-extrabold text-white">30<span class="text-primary-400">+</span></p>
                <p class="text-sm text-gray-400 mt-1.5">Growth Experts</p>
            </div>
        </div>
    </div>
</section>


<!-- ============================================
     SECTION 3: OUR STORY
     ============================================ -->
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto animate-on-scroll">
            <span class="text-xs font-semibold text-primary-600 uppercase tracking-wider">Our Story</span>
            <h2 class="text-2xl lg:text-4xl font-bold text-gray-900 mt-3 mb-8">
                Born from a Simple Frustration
            </h2>

            <div class="space-y-6 text-gray-600 leading-relaxed">
                <p class="text-lg">
                    In 2021, we were running a D2C brand on Shopify ourselves. We hired three different agencies — one for ads, one for the store, one for operations. None of them talked to each other. Our ROAS was 1.2X, our RTO was 38%, and we were losing money every month.
                </p>

                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 my-8">
                    <p class="text-base font-medium text-gray-900 italic">
                        "We realized the biggest problem wasn't any single channel — it was that nobody was looking at the whole picture. Ads, store, operations, and retention were all disconnected silos."
                    </p>
                    <p class="text-sm text-gray-500 mt-3">— Founding Team, <?= SITE_NAME ?></p>
                </div>

                <p>
                    So we built what we wished existed: a single growth partner that handles everything — from Meta Ads to store optimization, from operations management to customer engagement. One team, one strategy, one goal: <strong class="text-gray-900">profitable growth.</strong>
                </p>

                <p>
                    Along the way, we noticed that Indian D2C brands had a massive cart abandonment problem and COD return rates were killing margins. Email wasn't cutting it — but WhatsApp had 98% open rates. So we built our own WhatsApp automation platform specifically for Shopify.
                </p>

                <p>
                    Today, <?= SITE_NAME ?> is two things: a <strong class="text-gray-900">full-service Shopify growth agency</strong> trusted by 200+ brands, and a <strong class="text-gray-900">SaaS product company</strong> with a WhatsApp automation app used by thousands of stores. Our unique advantage? We use our own technology to deliver better results for our clients.
                </p>
            </div>
        </div>
    </div>
</section>


<!-- ============================================
     SECTION 4: WHAT MAKES US DIFFERENT
     ============================================ -->
<section class="bg-gray-50 py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 lg:mb-16 animate-on-scroll">
            <span class="text-xs font-semibold text-primary-600 uppercase tracking-wider">Our Edge</span>
            <h2 class="text-2xl lg:text-4xl font-bold text-gray-900 mt-3 mb-4">
                What Makes Us Different
            </h2>
            <p class="text-gray-500 text-base lg:text-lg">
                Most agencies offer one piece of the puzzle. We own the entire board.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12">
            <!-- Left: Traditional Agency vs Us -->
            <div class="animate-on-scroll">
                <div class="bg-white rounded-2xl border border-red-100 p-6 lg:p-8 h-full">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 bg-red-100 rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">Typical Agencies</h3>
                    </div>
                    <div class="space-y-4">
                        <?php
                        $typical = [
                            'Only manage ads — ignore store, operations, retention',
                            'Junior account executives running your campaigns',
                            'Same cookie-cutter strategy for every brand',
                            'Report vanity metrics — impressions, clicks, reach',
                            'Locked into long-term contracts',
                            'No proprietary technology — use off-the-shelf tools',
                            'Slow execution — weeks for simple changes',
                        ];
                        foreach ($typical as $item): ?>
                        <div class="flex gap-3 items-start">
                            <svg class="w-4 h-4 text-red-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                            <p class="text-sm text-gray-600"><?= $item ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Right: Us -->
            <div class="animate-on-scroll">
                <div class="bg-white rounded-2xl border-2 border-green-200 p-6 lg:p-8 h-full shadow-lg shadow-green-50">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900"><?= SITE_NAME ?></h3>
                    </div>
                    <div class="space-y-4">
                        <?php
                        $ours = [
                            'Full-stack: ads, store, operations, automation, tech — all connected',
                            'Senior specialists on every account — strategist, ad expert, developer',
                            'Custom strategy built on your data, margins, and unit economics',
                            'Report what matters — ROAS, contribution margin, net profit',
                            'Month-to-month. Results keep you, not contracts',
                            'Proprietary WhatsApp automation gives clients an unfair advantage',
                            'Ship weekly. Audit in 3 days, strategy in 2, live in 7',
                        ];
                        foreach ($ours as $item): ?>
                        <div class="flex gap-3 items-start">
                            <svg class="w-4 h-4 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <p class="text-sm text-gray-700 font-medium"><?= $item ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================
     SECTION 5: OUR TWO ENGINES
     ============================================ -->
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 animate-on-scroll">
            <span class="text-xs font-semibold text-primary-600 uppercase tracking-wider">Our Model</span>
            <h2 class="text-2xl lg:text-4xl font-bold text-gray-900 mt-3 mb-4">
                Agency + Technology = Unfair Advantage
            </h2>
            <p class="text-gray-500 text-base lg:text-lg">
                We're not just an agency. We're not just a SaaS company. We're both — and that's what makes us dangerous.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 lg:gap-10">
            <!-- Engine 1: Agency -->
            <div class="animate-on-scroll">
                <div class="bg-gradient-to-br from-primary-50 to-indigo-50 border border-primary-100 rounded-2xl p-6 lg:p-8 h-full">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-14 h-14 bg-primary-100 rounded-2xl flex items-center justify-center">
                            <svg class="w-7 h-7 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Growth Agency</h3>
                            <p class="text-sm text-primary-600 font-medium">Expert Services</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600 leading-relaxed mb-5">
                        A dedicated team of Shopify specialists managing your brand's entire growth engine — from customer acquisition to retention.
                    </p>
                    <div class="space-y-3 mb-6">
                        <?php
                        $agencyServices = [
                            'Performance Marketing (Meta, Google, ₹50Cr+ managed)',
                            'Shopify Store Optimization & CRO',
                            'Operations & Fulfillment Management',
                            'Creative Strategy & Production',
                            'Technology & Custom Development',
                            'Growth Strategy & Consulting',
                        ];
                        foreach ($agencyServices as $s): ?>
                        <div class="flex items-center gap-2 text-sm text-gray-700">
                            <svg class="w-4 h-4 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            <?= $s ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <a href="<?= url('services/shopify-growth') ?>" class="inline-flex items-center text-sm font-semibold text-primary-600 hover:text-primary-700 transition-colors">
                        Explore our services →
                    </a>
                </div>
            </div>

            <!-- Engine 2: SaaS -->
            <div class="animate-on-scroll">
                <div class="bg-gradient-to-br from-green-50 to-emerald-50 border border-green-100 rounded-2xl p-6 lg:p-8 h-full">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-14 h-14 bg-green-100 rounded-2xl flex items-center justify-center">
                            <svg class="w-7 h-7 text-green-600" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.5.5 0 00.611.611l4.458-1.495A11.96 11.96 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.347 0-4.535-.67-6.396-1.826l-.446-.267-3.14 1.053 1.053-3.14-.267-.446A9.96 9.96 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">SaaS Product</h3>
                            <p class="text-sm text-green-600 font-medium">WhatsApp Automation for Shopify</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600 leading-relaxed mb-5">
                        Our proprietary Shopify app that automates WhatsApp commerce — used by our agency clients and thousands of independent stores.
                    </p>
                    <div class="space-y-3 mb-6">
                        <?php
                        $productFeatures = [
                            'Abandoned Cart Recovery (22% average recovery)',
                            'COD Order Verification (40% RTO reduction)',
                            'Automated Order Notifications',
                            'Broadcast Campaigns & Segmentation',
                            'AI-Powered Chatbot',
                            '5-Minute Setup, No Code Required',
                        ];
                        foreach ($productFeatures as $f): ?>
                        <div class="flex items-center gap-2 text-sm text-gray-700">
                            <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            <?= $f ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <a href="<?= url('products/whatsapp-shopify') ?>" class="inline-flex items-center text-sm font-semibold text-green-700 hover:text-green-800 transition-colors">
                        Explore our product →
                    </a>
                </div>
            </div>
        </div>

        <!-- How they connect -->
        <div class="mt-10 bg-gray-50 rounded-2xl border border-gray-100 p-6 lg:p-8 text-center animate-on-scroll">
            <div class="max-w-2xl mx-auto">
                <div class="flex items-center justify-center gap-4 mb-4">
                    <div class="w-10 h-10 bg-primary-100 rounded-xl flex items-center justify-center">
                        <span class="text-sm font-bold text-primary-600">A</span>
                    </div>
                    <svg class="w-6 h-6 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center">
                        <span class="text-sm font-bold text-green-600">S</span>
                    </div>
                    <svg class="w-6 h-6 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    <div class="w-10 h-10 bg-orange-100 rounded-xl flex items-center justify-center">
                        <span class="text-sm font-bold text-orange-600">🚀</span>
                    </div>
                </div>
                <p class="text-sm text-gray-600">
                    <strong class="text-gray-900">The magic happens when both work together.</strong> Our agency clients get the WhatsApp automation built into their strategy — recovering carts, verifying COD, and engaging customers — while our ad campaigns drive new traffic. The result? Compounding growth that standalone agencies simply can't deliver.
                </p>
            </div>
        </div>
    </div>
</section>


<!-- ============================================
     SECTION 6: OUR VALUES
     ============================================ -->
<section class="bg-gray-50 py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 animate-on-scroll">
            <span class="text-xs font-semibold text-primary-600 uppercase tracking-wider">How We Work</span>
            <h2 class="text-2xl lg:text-4xl font-bold text-gray-900 mt-3 mb-4">
                Our Operating Principles
            </h2>
            <p class="text-gray-500 text-base lg:text-lg">
                These aren't values on a wall. These are how we make decisions every single day.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            <?php
            $values = [
                [
                    'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>',
                    'title' => 'Data Kills Debate',
                    'desc' => 'Every decision starts with data. We test, measure, and let numbers guide strategy — not opinions, not hunches, not "best practices" from 2019.',
                    'color' => 'primary'
                ],
                [
                    'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
                    'title' => 'Profit Over Revenue',
                    'desc' => 'Top-line growth means nothing if unit economics don\'t work. We optimize for contribution margin and net profit — always.',
                    'color' => 'green'
                ],
                [
                    'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>',
                    'title' => 'Speed Is a Feature',
                    'desc' => 'In D2C, the fast eat the slow. We audit in 3 days, strategize in 2, ship in 7. No 60-page decks, no 6-week onboarding.',
                    'color' => 'orange'
                ],
                [
                    'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>',
                    'title' => 'Radical Transparency',
                    'desc' => 'No black boxes. You see every metric, every decision, every rupee. Live dashboards, weekly calls, full access to everything.',
                    'color' => 'blue'
                ],
                [
                    'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>',
                    'title' => 'Build, Don\'t Rent',
                    'desc' => 'We build our own tools and technology instead of depending on third-party solutions. This gives our clients capabilities no one else has.',
                    'color' => 'purple'
                ],
                [
                    'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>',
                    'title' => 'Skin in the Game',
                    'desc' => 'We succeed when you succeed. Our team cares about your brand as if it were our own — because your growth is our reputation.',
                    'color' => 'red'
                ],
            ];
            $valueColors = [
                'primary' => 'bg-primary-50 text-primary-600',
                'green' => 'bg-green-50 text-green-600',
                'orange' => 'bg-orange-50 text-orange-600',
                'blue' => 'bg-blue-50 text-blue-600',
                'purple' => 'bg-purple-50 text-purple-600',
                'red' => 'bg-red-50 text-red-600',
            ];
            foreach ($values as $v): ?>
            <div class="animate-on-scroll bg-white border border-gray-100 rounded-2xl p-6 lg:p-8 hover:shadow-lg transition-all">
                <div class="w-12 h-12 <?= $valueColors[$v['color']] ?> rounded-xl flex items-center justify-center mb-5">
                    <?= $v['icon'] ?>
                </div>
                <h3 class="text-base font-semibold text-gray-900 mb-2"><?= $v['title'] ?></h3>
                <p class="text-sm text-gray-500 leading-relaxed"><?= $v['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- ============================================
     SECTION 7: OUR TEAM EXPERTISE
     ============================================ -->
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 animate-on-scroll">
            <span class="text-xs font-semibold text-primary-600 uppercase tracking-wider">Our Team</span>
            <h2 class="text-2xl lg:text-4xl font-bold text-gray-900 mt-3 mb-4">
                Specialists, Not Generalists
            </h2>
            <p class="text-gray-500 text-base lg:text-lg">
                Every client gets a dedicated team of senior specialists — not a single "account manager" juggling 20 accounts.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php
            $team = [
                [
                    'role' => 'Growth Strategist',
                    'desc' => 'Owns your growth roadmap. Sets KPIs, allocates budgets, and ensures all channels work together.',
                    'icon' => '🎯',
                    'bg' => 'bg-primary-50'
                ],
                [
                    'role' => 'Performance Marketer',
                    'desc' => 'Manages your Meta & Google campaigns. Builds audiences, tests creatives, and optimizes for ROAS daily.',
                    'icon' => '📈',
                    'bg' => 'bg-orange-50'
                ],
                [
                    'role' => 'Shopify Developer',
                    'desc' => 'Handles store optimizations, custom development, speed improvements, and technical implementations.',
                    'icon' => '💻',
                    'bg' => 'bg-blue-50'
                ],
                [
                    'role' => 'Ops & Automation Specialist',
                    'desc' => 'Streamlines your operations, sets up WhatsApp automation, and builds workflows that save you 20+ hours/week.',
                    'icon' => '⚙️',
                    'bg' => 'bg-green-50'
                ],
            ];
            foreach ($team as $t): ?>
            <div class="animate-on-scroll text-center p-6 bg-white border border-gray-100 rounded-2xl hover:shadow-lg transition-all">
                <div class="w-16 h-16 <?= $t['bg'] ?> rounded-2xl flex items-center justify-center mx-auto mb-5">
                    <span class="text-2xl"><?= $t['icon'] ?></span>
                </div>
                <h3 class="text-base font-semibold text-gray-900 mb-2"><?= $t['role'] ?></h3>
                <p class="text-sm text-gray-500 leading-relaxed"><?= $t['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-10 animate-on-scroll">
            <div class="inline-flex items-center gap-3 bg-gray-50 rounded-xl px-6 py-4 border border-gray-100">
                <div class="flex -space-x-2">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                    <div class="w-8 h-8 bg-gray-200 rounded-full border-2 border-white flex items-center justify-center text-xs font-bold text-gray-500">
                        <?= chr(65 + $i) ?>
                    </div>
                    <?php endfor; ?>
                </div>
                <p class="text-sm text-gray-600">
                    <strong class="text-gray-900">30+ specialists</strong> across marketing, design, development, and operations.
                </p>
            </div>
        </div>
    </div>
</section>


<!-- ============================================
     SECTION 8: INDUSTRIES WE SERVE
     ============================================ -->
<section class="bg-gray-50 py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 animate-on-scroll">
            <span class="text-xs font-semibold text-primary-600 uppercase tracking-wider">Industries</span>
            <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mt-3 mb-4">
                D2C Categories We've Scaled
            </h2>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 animate-on-scroll">
            <?php
            $industries = [
                ['icon' => '👗', 'name' => 'Fashion & Apparel'],
                ['icon' => '💄', 'name' => 'Beauty & Skincare'],
                ['icon' => '💪', 'name' => 'Health & Wellness'],
                ['icon' => '📱', 'name' => 'Electronics'],
                ['icon' => '🏠', 'name' => 'Home & Living'],
                ['icon' => '🍕', 'name' => 'Food & Beverage'],
            ];
            foreach ($industries as $ind): ?>
            <div class="bg-white border border-gray-100 rounded-xl p-4 text-center hover:shadow-md hover:border-gray-200 transition-all">
                <span class="text-2xl block mb-2"><?= $ind['icon'] ?></span>
                <p class="text-xs font-medium text-gray-700"><?= $ind['name'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- ============================================
     SECTION 9: TIMELINE / MILESTONES
     ============================================ -->
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 animate-on-scroll">
            <span class="text-xs font-semibold text-primary-600 uppercase tracking-wider">Our Journey</span>
            <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mt-3">Key Milestones</h2>
        </div>

        <div class="relative animate-on-scroll">
            <!-- Timeline line -->
            <div class="absolute left-6 top-0 bottom-0 w-px bg-gray-200"></div>

            <div class="space-y-10">
                <?php
                $milestones = [
                    ['year' => '2021', 'title' => 'Founded', 'desc' => 'Started as a D2C brand ourselves. Discovered the gap between agencies, tools, and actual growth.', 'color' => 'primary'],
                    ['year' => '2022', 'title' => 'Agency Launch', 'desc' => 'Launched growth services for Shopify stores. Crossed 50 clients in the first year. Hit ₹10Cr managed ad spend.', 'color' => 'blue'],
                    ['year' => '2023', 'title' => 'WhatsApp App Launch', 'desc' => 'Built and launched our proprietary WhatsApp automation app on Shopify App Store. 1000+ installs in 6 months.', 'color' => 'green'],
                    ['year' => '2024', 'title' => 'Scaling Up', 'desc' => '200+ active clients. ₹50Cr+ ad spend managed. Team grew to 30+ specialists. Became a full-stack Shopify growth platform.', 'color' => 'orange'],
                    ['year' => 'Next', 'title' => 'What\'s Coming', 'desc' => 'AI-powered growth intelligence, expanded product suite, and deeper Shopify ecosystem integrations. The best is ahead.', 'color' => 'purple'],
                ];
                $mColorMap = [
                    'primary' => 'bg-primary-600',
                    'blue' => 'bg-blue-600',
                    'green' => 'bg-green-600',
                    'orange' => 'bg-orange-600',
                    'purple' => 'bg-purple-600',
                ];
                foreach ($milestones as $m): ?>
                <div class="relative flex gap-6 items-start pl-2">
                    <div class="w-9 h-9 <?= $mColorMap[$m['color']] ?> rounded-full flex items-center justify-center flex-shrink-0 z-10 border-4 border-white shadow-sm">
                        <span class="w-2.5 h-2.5 bg-white rounded-full"></span>
                    </div>
                    <div class="pb-2">
                        <span class="text-xs font-bold text-gray-400 uppercase tracking-wider"><?= $m['year'] ?></span>
                        <h3 class="text-base font-semibold text-gray-900 mt-0.5 mb-1"><?= $m['title'] ?></h3>
                        <p class="text-sm text-gray-500 leading-relaxed"><?= $m['desc'] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>


<!-- ============================================
     SECTION 10: BRANDS / SOCIAL PROOF
     ============================================ -->
<?php
$industries = [
    'oi-logo.png',
    'barsana-logo.png',
    'sanjeevni-logo.png',
    'hov-logo.png',
    'la-americana-logo.png',
    'share-chat-logo.png',
    'midorii-logo.png'
];
?>

<section class="bg-white py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="text-center">
            <p class="text-sm font-semibold text-gray-500 uppercase tracking-[0.25em] mb-14">
                Working With Brands Across
            </p>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-7 gap-10 lg:gap-14 items-center justify-items-center">

                <?php foreach ($industries as $ind): ?>

                    <div class="flex items-center justify-center">
                        <img 
                            src="../assets/images/<?= $ind ?>" 
                            alt="Brand Logo"
                            class="h-20 md:h-24 lg:h-28 w-auto object-contain hover:scale-105 transition duration-300"
                        >
                    </div>

                <?php endforeach; ?>

            </div>
        </div>

    </div>
</section>


<!-- ============================================
     SECTION 11: JOIN US / CAREERS TEASER
     ============================================ -->
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-gray-900 to-gray-950 rounded-3xl p-8 lg:p-12 animate-on-scroll">
            <div class="grid lg:grid-cols-2 gap-8 items-center">
                <div>
                    <span class="text-xs font-semibold text-primary-400 uppercase tracking-wider">Careers</span>
                    <h2 class="text-2xl lg:text-3xl font-bold text-white mt-3 mb-4">
                        Join the Team Building the Future of Shopify Growth
                    </h2>
                    <p class="text-gray-400 leading-relaxed mb-6">
                        We're always looking for talented marketers, developers, designers, and operators who are passionate about D2C and e-commerce. Remote-friendly, fast-paced, and high-impact work.
                    </p>
                    <div class="flex flex-wrap gap-3 mb-6">
                        <span class="px-3 py-1.5 bg-white/10 text-white text-xs font-medium rounded-full border border-white/10">Remote-Friendly</span>
                        <span class="px-3 py-1.5 bg-white/10 text-white text-xs font-medium rounded-full border border-white/10">Fast Growth</span>
                        <span class="px-3 py-1.5 bg-white/10 text-white text-xs font-medium rounded-full border border-white/10">Impact-Driven</span>
                        <span class="px-3 py-1.5 bg-white/10 text-white text-xs font-medium rounded-full border border-white/10">Ownership Culture</span>
                    </div>
                    <a href="mailto:<?= SITE_EMAIL ?>?subject=Career Inquiry" class="inline-flex items-center px-6 py-3 text-sm font-semibold text-gray-900 bg-white rounded-xl hover:bg-gray-100 transition-colors">
                        View Open Positions →
                    </a>
                </div>
                <div class="hidden lg:flex items-center justify-center">
                    <div class="text-center">
                        <span class="text-6xl block mb-3">🙌</span>
                        <p class="text-gray-500 text-sm">We're growing fast.<br>Come build with us.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================
     SECTION 12: FINAL CTA
     ============================================ -->
<section class="bg-gray-950 py-16 lg:py-24">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center animate-on-scroll">
        <h2 class="text-3xl lg:text-5xl font-bold text-white mb-5 leading-tight">
            Let's Grow Your Shopify Store Together
        </h2>
        <p class="text-lg text-gray-400 mb-10 max-w-2xl mx-auto">
            Whether you need performance marketing, store optimization, operations management, or all of the above — we're ready to be the growth partner your brand deserves.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?= url('contact') ?>?type=audit" class="inline-flex items-center justify-center px-8 py-4 text-sm font-semibold text-gray-900 bg-white rounded-xl hover:bg-gray-100 transition-all shadow-lg">
                Get a Free Growth Audit
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
            <a href="<?= url('case-studies') ?>" class="inline-flex items-center justify-center px-8 py-4 text-sm font-semibold text-white border border-gray-700 rounded-xl hover:bg-gray-800 transition-all">
                See Our Case Studies
            </a>
        </div>
    </div>
</section>

<?php
$pageContent = ob_get_clean();
include __DIR__ . '/../includes/components/layout.php';
<?php
/**
 * Homepage — Agency-First, Shopify Growth Focus
 * Target: Shopify store owners looking for growth, operations, marketing, development
 */
SEO::load('home');

$featuredCaseStudies = getFeaturedCaseStudies(3);
$featuredPosts = getFeaturedPosts(3);
$faqs = getFaqs('home');

$schemas = [];
if (!empty($faqs)) {
    $schemas[] = SEO::faqSchema($faqs);
}

ob_start();
?>
<style>
    .scroll-track {
    width: max-content;
    animation: marquee 25s linear infinite;
}

.scroll-track:hover {
    animation-play-state: paused;
}

@keyframes marquee {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%);
    }
}
</style>

<!-- ============================================
     SECTION 1: HERO — Agency Positioning
     ============================================ -->
<section class="relative overflow-hidden bg-white">
    <!-- Subtle grid background -->
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#f0f0f0_1px,transparent_1px),linear-gradient(to_bottom,#f0f0f0_1px,transparent_1px)] bg-[size:4rem_4rem] opacity-40"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-20 lg:pt-18 lg:pb-18">
        <div class="max-w-4xl mx-auto text-center animate-on-scroll">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-gray-100 rounded-full mb-8">
                <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                <span class="text-xs font-semibold text-gray-600 uppercase tracking-wider">Trusted by 200+ Shopify Brands</span>
            </div>

            <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-extrabold text-gray-900 leading-[1.1] mb-6 tracking-tight">
                We Help Shopify Stores
                <span class="block text-primary-600">Grow Profitably</span>
            </h1>

            <p class="text-lg lg:text-xl text-gray-500 leading-relaxed mb-10 max-w-2xl mx-auto">
                Performance marketing, store optimization, operations management, and WhatsApp automation — everything your D2C brand needs to scale from ₹5L to ₹1Cr+ monthly revenue.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                <a href="<?= url('contact') ?>?type=audit" class="inline-flex items-center justify-center px-8 py-4 text-sm font-semibold text-white bg-gray-900 rounded-xl hover:bg-gray-800 transition-all shadow-lg shadow-gray-900/20 hover:shadow-xl">
                    Get a Free Growth Audit
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
                <a href="<?= url('case-studies') ?>" class="inline-flex items-center justify-center px-8 py-4 text-sm font-semibold text-gray-700 bg-white border border-gray-200 rounded-xl hover:bg-gray-50 hover:border-gray-300 transition-all">
                    See Our Results
                </a>
            </div>

            <!-- Client logos / social proof -->
            <!--<div class="flex flex-col items-center gap-4">-->
            <!--    <p class="text-xs font-medium text-gray-400 uppercase tracking-widest">Working with brands across</p>-->
            <!--    <div class="flex flex-wrap items-center justify-center gap-6 lg:gap-10">-->
             <?php 
              //$industries = ['oi-logo.png', 'barsana-logo.png', 'sanjeevni-logo.png', 'hov-logo.png', 'la-americana-logo.png', 'share-chat-logo.png', 'midorii-logo.png'];
              //foreach ($industries as $ind): ?>
                    <!--<img src="../assets/images/<?php //$ind ?>" width="150px">-->
                 <?php //endforeach; ?>
            <!--    </div>-->
            <!--</div>-->
            
                 <!-- Client logos / social proof -->
            
            <div class="flex flex-col items-center gap-6 py-8 overflow-hidden">
    
    <p class="text-xs font-medium text-gray-400 uppercase tracking-widest">
        Working with brands across
    </p>

    <div class="w-full overflow-hidden relative">

        <!-- Gradient fade (left/right for premium look) -->
        <div class="absolute left-0 top-0 h-full w-16 bg-gradient-to-r from-white to-transparent z-10"></div>
        <div class="absolute right-0 top-0 h-full w-16 bg-gradient-to-l from-white to-transparent z-10"></div>

        <!-- Scroll Track -->
        <div class="scroll-track flex items-center gap-10">

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

            // Duplicate for infinite effect
            $loopItems = array_merge($industries, $industries);
            
            foreach ($loopItems as $ind): ?>
                <img src="../assets/images/<?= $ind ?>" 
                     class="h-20 md:h-24 lg:h-28 object-contain flex-shrink-0">
            <?php endforeach; ?>

        </div>
    </div>

</div>
        </div>
    </div>
</section>


<!-- ============================================
     SECTION 2: TRUST METRICS BAR
     ============================================ -->
<section class="bg-gray-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-14">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
            <div class="text-center animate-on-scroll">
                <p class="text-3xl lg:text-5xl font-extrabold text-white">₹50Cr<span class="text-primary-400">+</span></p>
                <p class="text-sm text-gray-400 mt-2">Ad Spend Managed</p>
            </div>
            <div class="text-center animate-on-scroll">
                <p class="text-3xl lg:text-5xl font-extrabold text-white">200<span class="text-primary-400">+</span></p>
                <p class="text-sm text-gray-400 mt-2">Shopify Stores Scaled</p>
            </div>
            <div class="text-center animate-on-scroll">
                <p class="text-3xl lg:text-5xl font-extrabold text-white">3X<span class="text-primary-400">+</span></p>
                <p class="text-sm text-gray-400 mt-2">Average ROAS Delivered</p>
            </div>
            <div class="text-center animate-on-scroll">
                <p class="text-3xl lg:text-5xl font-extrabold text-white">40<span class="text-primary-400">%</span></p>
                <p class="text-sm text-gray-400 mt-2">Avg. RTO Reduction</p>
            </div>
        </div>
    </div>
</section>


<!-- ============================================
     SECTION 3: THE PROBLEM — WHY STORES STRUGGLE
     ============================================ -->
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <!-- Left: Problems -->
            <div class="animate-on-scroll">
                <span class="text-xs font-semibold text-red-600 uppercase tracking-wider bg-red-50 px-3 py-1 rounded-full">The Problem</span>
                <h2 class="text-2xl lg:text-4xl font-bold text-gray-900 mt-4 mb-8">
                    Why Most Shopify Stores Get Stuck
                </h2>

                <div class="space-y-5">
                    <div class="flex gap-4 items-start p-4 bg-red-50/50 rounded-xl border border-red-100/50">
                        <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-900">Burning money on ads with poor ROAS</p>
                            <p class="text-sm text-gray-500 mt-0.5">Running campaigns without proper structure, tracking, or creative strategy leads to wasted spend.</p>
                        </div>
                    </div>

                    <div class="flex gap-4 items-start p-4 bg-red-50/50 rounded-xl border border-red-100/50">
                        <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-900">High cart abandonment and RTO killing margins</p>
                            <p class="text-sm text-gray-500 mt-0.5">78% carts are abandoned. 30-40% COD orders are returned. Your margins disappear before you realize.</p>
                        </div>
                    </div>

                    <div class="flex gap-4 items-start p-4 bg-red-50/50 rounded-xl border border-red-100/50">
                        <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-900">Store isn't optimized for conversions</p>
                            <p class="text-sm text-gray-500 mt-0.5">Slow pages, poor mobile UX, weak product pages, and no proper analytics mean you're leaking revenue everywhere.</p>
                        </div>
                    </div>

                    <div class="flex gap-4 items-start p-4 bg-red-50/50 rounded-xl border border-red-100/50">
                        <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-900">Operations chaos eating your time</p>
                            <p class="text-sm text-gray-500 mt-0.5">Manually managing inventory, orders, shipping, and returns instead of focusing on growth strategy.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: What changes -->
            <div class="animate-on-scroll">
                <div class="bg-gray-950 rounded-2xl p-8 lg:p-10 text-white">
                    <span class="text-xs font-semibold text-green-400 uppercase tracking-wider">With <?= SITE_NAME ?></span>
                    <h3 class="text-xl lg:text-2xl font-bold mt-3 mb-8">Everything Changes.</h3>

                    <div class="space-y-6">
                        <div class="flex gap-4 items-start">
                            <div class="w-8 h-8 bg-green-500/20 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-white">3X+ ROAS on your ad spend</p>
                                <p class="text-sm text-gray-400 mt-0.5">Structured campaigns, proper tracking, winning creatives.</p>
                            </div>
                        </div>

                        <div class="flex gap-4 items-start">
                            <div class="w-8 h-8 bg-green-500/20 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-white">22% abandoned carts recovered via WhatsApp</p>
                                <p class="text-sm text-gray-400 mt-0.5">Automated recovery + COD verification = more revenue, less RTO.</p>
                            </div>
                        </div>

                        <div class="flex gap-4 items-start">
                            <div class="w-8 h-8 bg-green-500/20 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-white">2X conversion rate improvement</p>
                                <p class="text-sm text-gray-400 mt-0.5">CRO-optimized store, fast loading, mobile-first UX.</p>
                            </div>
                        </div>

                        <div class="flex gap-4 items-start">
                            <div class="w-8 h-8 bg-green-500/20 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-white">Streamlined ops that run on autopilot</p>
                                <p class="text-sm text-gray-400 mt-0.5">Automated workflows, efficient fulfillment, real-time dashboards.</p>
                            </div>
                        </div>
                    </div>

                    <a href="<?= url('contact') ?>?type=audit" class="inline-flex items-center mt-8 text-sm font-semibold text-green-400 hover:text-green-300 transition-colors">
                        See what's possible for your store →
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================
     SECTION 4: SERVICES — What We Do
     ============================================ -->
<section class="bg-gray-50 py-16 lg:py-24" id="services">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 lg:mb-16 animate-on-scroll">
            <span class="text-xs font-semibold text-primary-600 uppercase tracking-wider">What We Do</span>
            <h2 class="text-2xl lg:text-4xl font-bold text-gray-900 mt-3 mb-4">
                Full-Stack Growth Services for Shopify
            </h2>
            <p class="text-gray-500 text-base lg:text-lg">
                We don't just run your ads. We optimize every layer of your business — from storefront to shipping dock.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            <!-- Service 1: Performance Marketing -->
            <div class="animate-on-scroll group">
                <a href="<?= url('services/performance-marketing') ?>" class="block p-6 lg:p-8 bg-white border border-gray-100 rounded-2xl hover:border-gray-200 hover:shadow-xl transition-all duration-300 h-full">
                    <div class="w-14 h-14 bg-orange-50 rounded-2xl flex items-center justify-center mb-5 group-hover:bg-orange-100 transition-colors">
                        <svg class="w-7 h-7 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2 group-hover:text-primary-600 transition-colors">Performance Marketing</h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-4">Meta Ads, Google Ads, and full-funnel campaigns built for ROAS. ₹50Cr+ managed with 3X+ average returns.</p>
                    <ul class="space-y-1.5 text-sm text-gray-500 mb-5">
                        <li class="flex items-center gap-2"><span class="w-1 h-1 bg-gray-300 rounded-full"></span>Meta & Google Ads Management</li>
                        <li class="flex items-center gap-2"><span class="w-1 h-1 bg-gray-300 rounded-full"></span>Creative Strategy & Testing</li>
                        <li class="flex items-center gap-2"><span class="w-1 h-1 bg-gray-300 rounded-full"></span>Tracking & Attribution Setup</li>
                    </ul>
                    <span class="inline-flex items-center text-sm font-medium text-primary-600">
                        Learn more <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </span>
                </a>
            </div>

            <!-- Service 2: Shopify Growth / CRO -->
            <div class="animate-on-scroll group">
                <a href="<?= url('services/shopify-growth') ?>" class="block p-6 lg:p-8 bg-white border border-gray-100 rounded-2xl hover:border-gray-200 hover:shadow-xl transition-all duration-300 h-full">
                    <div class="w-14 h-14 bg-primary-50 rounded-2xl flex items-center justify-center mb-5 group-hover:bg-primary-100 transition-colors">
                        <svg class="w-7 h-7 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2 group-hover:text-primary-600 transition-colors">Shopify Store Growth</h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-4">Store optimization, CRO, theme development, and conversion-focused UX design that turns visitors into buyers.</p>
                    <ul class="space-y-1.5 text-sm text-gray-500 mb-5">
                        <li class="flex items-center gap-2"><span class="w-1 h-1 bg-gray-300 rounded-full"></span>CRO Audit & A/B Testing</li>
                        <li class="flex items-center gap-2"><span class="w-1 h-1 bg-gray-300 rounded-full"></span>Custom Theme Development</li>
                        <li class="flex items-center gap-2"><span class="w-1 h-1 bg-gray-300 rounded-full"></span>Mobile-First Optimization</li>
                    </ul>
                    <span class="inline-flex items-center text-sm font-medium text-primary-600">
                        Learn more <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </span>
                </a>
            </div>

            <!-- Service 3: Store Operations -->
            <div class="animate-on-scroll group">
                <a href="<?= url('services/shopify-operations') ?>" class="block p-6 lg:p-8 bg-white border border-gray-100 rounded-2xl hover:border-gray-200 hover:shadow-xl transition-all duration-300 h-full">
                    <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center mb-5 group-hover:bg-blue-100 transition-colors">
                        <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2 group-hover:text-primary-600 transition-colors">Store Operations</h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-4">Inventory, fulfillment, returns, COD management — we systemize your backend so it runs like clockwork.</p>
                    <ul class="space-y-1.5 text-sm text-gray-500 mb-5">
                        <li class="flex items-center gap-2"><span class="w-1 h-1 bg-gray-300 rounded-full"></span>Inventory & Order Management</li>
                        <li class="flex items-center gap-2"><span class="w-1 h-1 bg-gray-300 rounded-full"></span>Shipping & Fulfillment Ops</li>
                        <li class="flex items-center gap-2"><span class="w-1 h-1 bg-gray-300 rounded-full"></span>RTO & Returns Reduction</li>
                    </ul>
                    <span class="inline-flex items-center text-sm font-medium text-primary-600">
                        Learn more <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </span>
                </a>
            </div>

            <!-- Service 4: Automation -->
            <div class="animate-on-scroll group">
                <a href="<?= url('services/automation') ?>" class="block p-6 lg:p-8 bg-white border border-gray-100 rounded-2xl hover:border-gray-200 hover:shadow-xl transition-all duration-300 h-full">
                    <div class="w-14 h-14 bg-purple-50 rounded-2xl flex items-center justify-center mb-5 group-hover:bg-purple-100 transition-colors">
                        <svg class="w-7 h-7 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2 group-hover:text-primary-600 transition-colors">Automation & WhatsApp</h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-4">WhatsApp automation, email flows, workflow automation — save 20+ hours/week with intelligent systems.</p>
                    <ul class="space-y-1.5 text-sm text-gray-500 mb-5">
                        <li class="flex items-center gap-2"><span class="w-1 h-1 bg-gray-300 rounded-full"></span>WhatsApp Cart Recovery & COD</li>
                        <li class="flex items-center gap-2"><span class="w-1 h-1 bg-gray-300 rounded-full"></span>Email Marketing Automation</li>
                        <li class="flex items-center gap-2"><span class="w-1 h-1 bg-gray-300 rounded-full"></span>Custom Workflow Integrations</li>
                    </ul>
                    <span class="inline-flex items-center text-sm font-medium text-primary-600">
                        Learn more <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </span>
                </a>
            </div>

            <!-- Service 5: Technology Development -->
            <div class="animate-on-scroll group">
                <a href="<?= url('services/technology') ?>" class="block p-6 lg:p-8 bg-white border border-gray-100 rounded-2xl hover:border-gray-200 hover:shadow-xl transition-all duration-300 h-full">
                    <div class="w-14 h-14 bg-cyan-50 rounded-2xl flex items-center justify-center mb-5 group-hover:bg-cyan-100 transition-colors">
                        <svg class="w-7 h-7 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2 group-hover:text-primary-600 transition-colors">Technology Development</h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-4">Custom Shopify development, web apps, mobile apps, and AI solutions built to give you a competitive edge.</p>
                    <ul class="space-y-1.5 text-sm text-gray-500 mb-5">
                        <li class="flex items-center gap-2"><span class="w-1 h-1 bg-gray-300 rounded-full"></span>Shopify Custom Development</li>
                        <li class="flex items-center gap-2"><span class="w-1 h-1 bg-gray-300 rounded-full"></span>Web & Mobile Apps</li>
                        <li class="flex items-center gap-2"><span class="w-1 h-1 bg-gray-300 rounded-full"></span>AI-Powered Solutions</li>
                    </ul>
                    <span class="inline-flex items-center text-sm font-medium text-primary-600">
                        Learn more <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </span>
                </a>
            </div>

            <!-- CTA Card -->
            <div class="animate-on-scroll group">
                <div class="p-6 lg:p-8 bg-gradient-to-br from-primary-600 to-primary-700 rounded-2xl flex flex-col justify-center h-full text-white">
                    <div class="w-14 h-14 bg-white/15 rounded-2xl flex items-center justify-center mb-5">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Not sure where to start?</h3>
                    <p class="text-sm text-primary-100 mb-5">Get a free growth audit and we'll tell you exactly where your biggest opportunities are.</p>
                    <a href="<?= url('contact') ?>?type=audit" class="inline-flex items-center justify-center px-5 py-2.5 text-sm font-semibold bg-white text-primary-700 rounded-lg hover:bg-primary-50 transition-colors">
                        Get Free Audit →
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================
     SECTION 5: WHY CHOOSE US
     ============================================ -->
<section class="bg-white py-16 lg:py-24" id="why-us">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 lg:mb-16 animate-on-scroll">
            <span class="text-xs font-semibold text-primary-600 uppercase tracking-wider">Why <?= SITE_NAME ?></span>
            <h2 class="text-2xl lg:text-4xl font-bold text-gray-900 mt-3 mb-4">
                We're Not Just Another Agency
            </h2>
            <p class="text-gray-500 text-base lg:text-lg">
                We combine proprietary technology with deep Shopify expertise to deliver results others can't.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-10">
            <?php
            $reasons = [
                [
                    'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/></svg>',
                    'title' => 'Proprietary Technology',
                    'desc' => 'Our WhatsApp automation app gives your store superpowers no other agency can offer — cart recovery, COD verification, automated customer engagement.'
                ],
                [
                    'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/></svg>',
                    'title' => 'Shopify-Only Focus',
                    'desc' => 'We don\'t spread thin across platforms. 100% Shopify focus means we know every trick, app, and optimization that works.'
                ],
                [
                    'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
                    'title' => 'Profit-Focused, Not Vanity',
                    'desc' => 'We optimize for contribution margin and net profit, not just top-line revenue. Your unit economics always come first.'
                ],
                [
                    'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>',
                    'title' => 'Speed of Execution',
                    'desc' => 'No 60-slide strategy decks. We audit in 3 days, strategize in 2, and launch in 7. Your first results come in weeks, not months.'
                ],
                [
                    'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>',
                    'title' => 'Full Transparency',
                    'desc' => 'You see every metric, every rupee spent, every decision made. Weekly reports, live dashboards, no black boxes ever.'
                ],
                [
                    'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>',
                    'title' => 'Dedicated Growth Team',
                    'desc' => 'You get a dedicated team — not a junior executive. Growth strategist, ad specialist, developer, and project manager.'
                ],
            ];
            foreach ($reasons as $r): ?>
            <div class="animate-on-scroll flex gap-4 items-start">
                <div class="w-12 h-12 bg-primary-50 rounded-xl flex items-center justify-center flex-shrink-0 text-primary-600">
                    <?= $r['icon'] ?>
                </div>
                <div>
                    <h3 class="text-base font-semibold text-gray-900 mb-1.5"><?= $r['title'] ?></h3>
                    <p class="text-sm text-gray-500 leading-relaxed"><?= $r['desc'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- ============================================
     SECTION 6: OUR PROCESS
     ============================================ -->
<section class="bg-gray-50 py-16 lg:py-24" id="process">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 lg:mb-16 animate-on-scroll">
            <span class="text-xs font-semibold text-primary-600 uppercase tracking-wider">Our Process</span>
            <h2 class="text-2xl lg:text-4xl font-bold text-gray-900 mt-3 mb-4">
                How We Scale Your Store
            </h2>
            <p class="text-gray-500 text-base lg:text-lg">
                A proven, repeatable framework that takes you from "stuck" to "scaling" in 90 days.
            </p>
        </div>

        <div class="grid lg:grid-cols-5 gap-6">
            <?php
            $steps = [
                [
                    'num' => '01',
                    'title' => 'Deep Audit',
                    'desc' => 'We analyze your store, ads, analytics, operations, and competitors. Every conversion leak is identified.',
                    'duration' => 'Week 1',
                    'color' => 'primary'
                ],
                [
                    'num' => '02',
                    'title' => 'Growth Strategy',
                    'desc' => 'Custom roadmap with clear priorities, KPIs, budget allocation, and a 90-day execution plan.',
                    'duration' => 'Week 2',
                    'color' => 'blue'
                ],
                [
                    'num' => '03',
                    'title' => 'Foundation Fix',
                    'desc' => 'Tracking setup, store optimizations, automation implementation, and campaign structure.',
                    'duration' => 'Week 2-3',
                    'color' => 'purple'
                ],
                [
                    'num' => '04',
                    'title' => 'Launch & Optimize',
                    'desc' => 'Campaigns go live. Daily optimization, A/B testing, and creative iterations begin.',
                    'duration' => 'Week 3-4',
                    'color' => 'orange'
                ],
                [
                    'num' => '05',
                    'title' => 'Scale & Compound',
                    'desc' => 'Double down on what works. Scale budgets, expand channels, and compound growth month over month.',
                    'duration' => 'Month 2+',
                    'color' => 'green'
                ],
            ];
            $colorMap = [
                'primary' => ['bg' => 'bg-primary-100', 'text' => 'text-primary-600', 'badge' => 'bg-primary-600'],
                'blue'    => ['bg' => 'bg-blue-100', 'text' => 'text-blue-600', 'badge' => 'bg-blue-600'],
                'purple'  => ['bg' => 'bg-purple-100', 'text' => 'text-purple-600', 'badge' => 'bg-purple-600'],
                'orange'  => ['bg' => 'bg-orange-100', 'text' => 'text-orange-600', 'badge' => 'bg-orange-600'],
                'green'   => ['bg' => 'bg-green-100', 'text' => 'text-green-600', 'badge' => 'bg-green-600'],
            ];
            foreach ($steps as $step):
                $c = $colorMap[$step['color']];
            ?>
            <div class="animate-on-scroll bg-white border border-gray-100 rounded-2xl p-6 relative">
                <!-- Step number -->
                <div class="flex items-center justify-between mb-4">
                    <div class="w-10 h-10 <?= $c['bg'] ?> rounded-xl flex items-center justify-center">
                        <span class="text-sm font-bold <?= $c['text'] ?>"><?= $step['num'] ?></span>
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


<!-- ============================================
     SECTION 7: CASE STUDIES / RESULTS
     ============================================ -->
<?php if (!empty($featuredCaseStudies)): ?>
<section class="bg-white py-16 lg:py-24" id="results">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between mb-12 animate-on-scroll">
            <div>
                <span class="text-xs font-semibold text-primary-600 uppercase tracking-wider">Results</span>
                <h2 class="text-2xl lg:text-4xl font-bold text-gray-900 mt-3">
                    Real Results. Real Brands.
                </h2>
                <p class="text-gray-500 mt-2">Don't take our word for it — see the numbers.</p>
            </div>
            <a href="<?= url('case-studies') ?>" class="text-sm font-medium text-primary-600 hover:text-primary-700 mt-4 sm:mt-0 transition-colors">
                View all case studies →
            </a>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            <?php foreach ($featuredCaseStudies as $study): ?>
                <?php component('case-study-card', ['study' => $study]); ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>


<!-- ============================================
     SECTION 8: TESTIMONIALS
     ============================================ -->
<section class="bg-gray-50 py-16 lg:py-24" id="testimonials">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 animate-on-scroll">
            <span class="text-xs font-semibold text-primary-600 uppercase tracking-wider">Testimonials</span>
            <h2 class="text-2xl lg:text-4xl font-bold text-gray-900 mt-3 mb-4">
                What Our Clients Say
            </h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $testimonials = [
                [
                    'quote' => 'GrowthScale transformed our ad performance. We went from 1.2X to 3.8X ROAS in just 60 days. Their team truly understands D2C.',
                    'name' => 'Ankit Sharma',
                    'role' => 'Founder, Fashion D2C Brand',
                    'metric' => '3.8X ROAS',
                    'initials' => 'AS'
                ],
                [
                    'quote' => 'The WhatsApp automation alone recovered ₹4L in the first month. Combined with their performance marketing, we scaled from ₹15L to ₹45L monthly.',
                    'name' => 'Priya Mehta',
                    'role' => 'Co-founder, Beauty Brand',
                    'metric' => '3X Revenue',
                    'initials' => 'PM'
                ],
                [
                    'quote' => 'Finally an agency that understands operations. They reduced our RTO by 35% and set up automations that save us 25 hours every week.',
                    'name' => 'Rahul Verma',
                    'role' => 'CEO, Health & Wellness Store',
                    'metric' => '35% RTO Reduction',
                    'initials' => 'RV'
                ],
            ];
            foreach ($testimonials as $t): ?>
            <div class="animate-on-scroll bg-white border border-gray-100 rounded-2xl p-6 lg:p-8 flex flex-col">
                <!-- Stars -->
                <div class="flex gap-1 mb-4">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <?php endfor; ?>
                </div>

                <blockquote class="text-sm text-gray-700 leading-relaxed flex-1 mb-6">
                    "<?= $t['quote'] ?>"
                </blockquote>

                <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center">
                            <span class="text-xs font-bold text-primary-600"><?= $t['initials'] ?></span>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-900"><?= $t['name'] ?></p>
                            <p class="text-xs text-gray-500"><?= $t['role'] ?></p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-bold text-primary-600"><?= $t['metric'] ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- ============================================
     SECTION 9: PRODUCT HIGHLIGHT (Secondary)
     ============================================ -->
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-3xl border border-green-100 overflow-hidden">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 p-8 lg:p-12 items-center">
                <!-- Left: Content -->
                <div class="animate-on-scroll">
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-green-100 rounded-full mb-5">
                        <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>
                        <span class="text-xs font-semibold text-green-700 uppercase tracking-wider">Our Product</span>
                    </div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-4">
                        WhatsApp Automation App for Shopify
                    </h2>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Built by us, used by our clients. Our Shopify app automates cart recovery, COD verification, order notifications, and broadcast campaigns — generating extra revenue on autopilot.
                    </p>
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="bg-white rounded-xl p-4 border border-green-100">
                            <p class="text-2xl font-bold text-green-600">22%</p>
                            <p class="text-xs text-gray-500 mt-1">Cart Recovery Rate</p>
                        </div>
                        <div class="bg-white rounded-xl p-4 border border-green-100">
                            <p class="text-2xl font-bold text-green-600">40%</p>
                            <p class="text-xs text-gray-500 mt-1">RTO Reduction</p>
                        </div>
                        <div class="bg-white rounded-xl p-4 border border-green-100">
                            <p class="text-2xl font-bold text-green-600">98%</p>
                            <p class="text-xs text-gray-500 mt-1">Message Open Rate</p>
                        </div>
                        <div class="bg-white rounded-xl p-4 border border-green-100">
                            <p class="text-2xl font-bold text-green-600">5 min</p>
                            <p class="text-xs text-gray-500 mt-1">Setup Time</p>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="<?= SHOPIFY_APP_URL ?>" target="_blank" class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-white bg-green-600 rounded-xl hover:bg-green-700 transition-colors shadow-sm">
                            Install Free on Shopify
                        </a>
                        <a href="<?= url('products/whatsapp-shopify') ?>" class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-green-700 border border-green-200 rounded-xl hover:bg-green-50 transition-colors">
                            Learn More
                        </a>
                    </div>
                </div>

                <!-- Right: Visual -->
                <div class="animate-on-scroll">
                    <div class="bg-white rounded-2xl border border-gray-200 shadow-xl p-5 max-w-sm mx-auto lg:ml-auto">
                        <!-- Mini WhatsApp chat mockup -->
                        <div class="flex items-center gap-3 pb-4 border-b border-gray-100 mb-4">
                            <div class="w-9 h-9 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-900">Your Store</p>
                                <p class="text-[10px] text-green-600">Automated</p>
                            </div>
                        </div>

                        <div class="space-y-3">
                            <div class="flex justify-start">
                                <div class="bg-gray-100 rounded-2xl rounded-tl-sm px-3.5 py-2.5 max-w-[85%]">
                                    <p class="text-xs text-gray-800">Hey! 👋 You left items worth ₹2,499 in your cart. Complete your purchase before they sell out!</p>
                                    <p class="text-[10px] text-gray-400 mt-1">10:30 AM</p>
                                </div>
                            </div>

                            <div class="flex justify-start">
                                <div class="bg-gray-100 rounded-2xl rounded-tl-sm px-3.5 py-2.5 max-w-[85%]">
                                    <div class="flex items-center gap-2 mb-2">
                                        <div class="w-10 h-10 bg-gray-200 rounded-lg flex-shrink-0"></div>
                                        <div>
                                            <p class="text-xs font-medium text-gray-900">Classic Tee</p>
                                            <p class="text-xs text-primary-600 font-semibold">₹1,299</p>
                                        </div>
                                    </div>
                                    <div class="bg-green-500 text-white text-xs font-semibold py-1.5 rounded-lg text-center">Buy Now →</div>
                                </div>
                            </div>

                            <div class="flex justify-end">
                                <div class="bg-primary-600 rounded-2xl rounded-tr-sm px-3.5 py-2.5 max-w-[75%]">
                                    <p class="text-xs text-white">Ordering now! 🛒</p>
                                    <p class="text-[10px] text-primary-200 mt-1">10:32 AM ✓✓</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 pt-3 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-[10px] text-gray-400">Powered by <?= SITE_NAME ?></span>
                            <span class="text-[10px] font-semibold text-green-600">₹2,499 Recovered ✓</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================
     SECTION 10: WHO WE WORK WITH
     ============================================ -->
<section class="bg-gray-50 py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 animate-on-scroll">
            <span class="text-xs font-semibold text-primary-600 uppercase tracking-wider">Ideal Clients</span>
            <h2 class="text-2xl lg:text-4xl font-bold text-gray-900 mt-3 mb-4">
                We Work Best With
            </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-6 lg:gap-8">
            <div class="animate-on-scroll bg-white border border-gray-100 rounded-2xl p-6 lg:p-8 text-center hover:shadow-lg transition-all">
                <div class="w-16 h-16 bg-primary-50 rounded-2xl flex items-center justify-center mx-auto mb-5">
                    <span class="text-2xl">🚀</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Growing Shopify Stores</h3>
                <p class="text-sm text-gray-500 leading-relaxed mb-3">Doing ₹5L–₹1Cr/month and ready to break through to the next level with professional marketing and ops.</p>
                <p class="text-xs font-medium text-primary-600">₹5L – ₹1Cr monthly revenue</p>
            </div>

            <div class="animate-on-scroll bg-white border border-gray-100 rounded-2xl p-6 lg:p-8 text-center hover:shadow-lg transition-all">
                <div class="w-16 h-16 bg-orange-50 rounded-2xl flex items-center justify-center mx-auto mb-5">
                    <span class="text-2xl">🏢</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">D2C Brands</h3>
                <p class="text-sm text-gray-500 leading-relaxed mb-3">Direct-to-consumer brands in fashion, beauty, health, electronics, home, and food looking for a full-stack growth partner.</p>
                <p class="text-xs font-medium text-orange-600">All D2C categories</p>
            </div>

            <div class="animate-on-scroll bg-white border border-gray-100 rounded-2xl p-6 lg:p-8 text-center hover:shadow-lg transition-all">
                <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-5">
                    <span class="text-2xl">🤝</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Agencies & Teams</h3>
                <p class="text-sm text-gray-500 leading-relaxed mb-3">Agencies and in-house teams looking for our WhatsApp automation technology or white-label growth services.</p>
                <p class="text-xs font-medium text-blue-600">White-label available</p>
            </div>
        </div>
    </div>
</section>


<!-- ============================================
     SECTION 11: LEAD MAGNET — FREE AUDIT
     ============================================ -->
<section class="bg-gray-950 py-16 lg:py-24">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center animate-on-scroll">
            <div>
                <span class="text-xs font-semibold text-primary-400 uppercase tracking-wider">Free Offer</span>
                <h2 class="text-2xl lg:text-4xl font-bold text-white mt-3 mb-5">
                    Get a Free Shopify Growth Audit
                </h2>
                <p class="text-gray-400 leading-relaxed mb-6">
                    Our team will analyze your store's performance, ad accounts, and operations — then deliver a custom growth roadmap with specific, actionable recommendations.
                </p>
                <div class="space-y-3">
                    <?php
                    $auditIncludes = [
                        'Store speed & UX analysis',
                        'Conversion rate optimization opportunities',
                        'Ad account audit & ROAS improvement plan',
                        'WhatsApp automation revenue potential',
                        'Operations efficiency assessment',
                        'Custom 90-day growth roadmap',
                    ];
                    foreach ($auditIncludes as $item): ?>
                    <div class="flex items-center gap-3 text-sm text-gray-300">
                        <svg class="w-4 h-4 text-green-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <?= $item ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div>
                <form method="POST" action="" class="bg-white rounded-2xl p-6 lg:p-8 shadow-2xl">
                    <input type="hidden" name="form_action" value="audit">
                    <?= csrfField() ?>
                    <input type="text" name="website_url_hp" class="hidden" tabindex="-1" autocomplete="off">

                    <h3 class="text-lg font-semibold text-gray-900 mb-5">Claim Your Free Audit</h3>

                    <div class="space-y-4">
                        <div>
                            <input type="text" name="name" placeholder="Your Name *" required
                                   class="w-full px-4 py-3 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        </div>
                        <div>
                            <input type="email" name="email" placeholder="Work Email *" required
                                   class="w-full px-4 py-3 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        </div>
                        <div>
                            <input type="tel" name="phone" placeholder="Phone Number *" required
                                   class="w-full px-4 py-3 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        </div>
                        <div>
                            <input type="url" name="website" placeholder="Shopify Store URL"
                                   class="w-full px-4 py-3 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        </div>
                        <div>
                            <select name="monthly_revenue" class="w-full px-4 py-3 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent bg-white text-gray-500">
                                <option value="">Monthly Revenue (Optional)</option>
                                <option value="Under ₹5L">Under ₹5L</option>
                                <option value="₹5L - ₹20L">₹5L - ₹20L</option>
                                <option value="₹20L - ₹50L">₹20L - ₹50L</option>
                                <option value="₹50L - ₹1Cr">₹50L - ₹1Cr</option>
                                <option value="₹1Cr+">₹1Cr+</option>
                            </select>
                        </div>
                        <button type="submit" class="w-full px-6 py-3.5 text-sm font-semibold text-white bg-gray-900 rounded-xl hover:bg-gray-800 transition-colors">
                            Get My Free Growth Audit →
                        </button>
                    </div>
                    <p class="text-xs text-gray-400 mt-3 text-center">Free. No spam. We respond within 24 hours.</p>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- ============================================
     SECTION 12: BLOG PREVIEW
     ============================================ -->
<?php if (!empty($featuredPosts)): ?>
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between mb-12 animate-on-scroll">
            <div>
                <span class="text-xs font-semibold text-primary-600 uppercase tracking-wider">From Our Blog</span>
                <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mt-3">
                    Insights & Strategies
                </h2>
            </div>
            <a href="<?= url('blog') ?>" class="text-sm font-medium text-primary-600 hover:text-primary-700 mt-4 sm:mt-0">
                Read all articles →
            </a>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            <?php foreach ($featuredPosts as $post): ?>
                <?php component('blog-card', ['post' => $post]); ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>


<!-- ============================================
     SECTION 13: FINAL CTA
     ============================================ -->
<section class="bg-gray-950 py-16 lg:py-24">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center animate-on-scroll">
        <h2 class="text-3xl lg:text-5xl font-bold text-white mb-5 leading-tight">
            Ready to Unlock Your<br>Store's Full Potential?
        </h2>
        <p class="text-lg text-gray-400 mb-10 max-w-2xl mx-auto">
            Join 200+ Shopify brands that trust <?= SITE_NAME ?> to manage their growth. Let's start with a conversation.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?= url('contact') ?>?type=audit" class="inline-flex items-center justify-center px-8 py-4 text-sm font-semibold text-gray-900 bg-white rounded-xl hover:bg-gray-100 transition-all shadow-lg">
                Book a Free Strategy Call
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
            <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=Hi%2C%20I%20want%20to%20discuss%20growing%20my%20Shopify%20store" target="_blank" class="inline-flex items-center justify-center px-8 py-4 text-sm font-semibold text-white border border-gray-700 rounded-xl hover:bg-gray-800 transition-all">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>
                WhatsApp Us
            </a>
        </div>
    </div>
</section>

<?php
$pageContent = ob_get_clean();
include __DIR__ . '/../includes/components/layout.php';
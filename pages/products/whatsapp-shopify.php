<?php
/**
 * Product Page: WhatsApp Automation for Shopify
 */
SEO::load('whatsapp-shopify');

$faqs = getFaqs('whatsapp-shopify');

$schemas = [];
$schemas[] = SEO::softwareSchema();
if (!empty($faqs)) {
    $schemas[] = SEO::faqSchema($faqs);
}
$schemas[] = SEO::breadcrumbSchema([
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'Products', 'url' => url('products/whatsapp-shopify')],
    ['name' => 'WhatsApp Automation', 'url' => url('products/whatsapp-shopify')]
]);

ob_start();
?>

<!-- HERO -->
<section class="bg-gradient-to-b from-green-50/50 to-white pt-16 pb-20 lg:pt-24 lg:pb-32">
    <div class="ak-container">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div class="ak-reveal">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-green-100 rounded-full mb-6">
                    <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                    <span class="text-xs font-semibold text-green-700 uppercase tracking-wider">Shopify App</span>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-gray-900 leading-tight mb-6">
                    WhatsApp Automation for 
                    <span class="text-green-600">Shopify Stores</span>
                </h1>
                <p class="text-lg text-gray-600 leading-relaxed mb-8 max-w-xl">
                    Recover abandoned carts, verify COD orders, send order updates, and run broadcast campaigns — all through WhatsApp Business API.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 mb-6">
                    <a href="<?= SHOPIFY_APP_URL ?>" target="_blank" class="inline-flex items-center justify-center px-6 py-3.5 text-sm font-semibold text-white bg-green-600 rounded-xl hover:bg-green-700 transition-all shadow-lg shadow-green-600/25">
                        Install Free on Shopify
                    </a>
                    <a href="#features" class="inline-flex items-center justify-center px-6 py-3.5 text-sm font-semibold text-gray-700 border border-gray-200 rounded-xl hover:bg-gray-50 transition-all">
                        See Features <?= ak_icon('arrow-down', 16) ?>
                    </a>
                </div>
                <div class="flex items-center gap-6 text-sm text-gray-500">
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        4.8/5 Rating
                    </span>
                    <span>150+ Reviews</span>
                    <span>Free Plan Available</span>
                </div>
            </div>
            <div class="ak-reveal">
                <div class="bg-gray-100 rounded-2xl aspect-video flex items-center justify-center border border-gray-200">
                    <div class="text-center p-8">
                        <span class="text-5xl block mb-3"><?= ak_icon('smartphone', 18) ?></span>
                        <p class="text-sm text-gray-500">App Screenshot Placeholder</p>
                        <p class="text-xs text-gray-400 mt-1">Dashboard Preview</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FEATURES LIST -->
<section class="ak-section" id="features">
    <div class="ak-container">
        <div class="text-center max-w-3xl mx-auto mb-12 lg:mb-16 animate-on-scroll">
            <h2 class="text-2xl lg:text-4xl font-bold text-gray-900 mb-4">
                Everything You Need to Sell on WhatsApp
            </h2>
            <p class="text-gray-600 text-base lg:text-lg">
                A complete WhatsApp commerce toolkit designed specifically for Shopify store owners.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
            <!-- Feature 1: Cart Recovery -->
            <div class="ak-card ak-spot ak-reveal">
                <div class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                    <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z"/></svg>
                </div>
                <div>
                    <h3 class="ak-h3">Abandoned Cart Recovery</h3>
                    <p class="text-sm text-gray-600 leading-relaxed mb-3">Automatically detect abandoned carts and send personalized WhatsApp messages with product images, prices, and one-click checkout links.</p>
                    <ul class="space-y-1.5 text-sm text-gray-500">
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Multi-step recovery sequences</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Dynamic discount codes</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 15-25% average recovery rate</li>
                    </ul>
                </div>
            </div>

            <!-- Feature 2: COD Confirmation -->
            <div class="ak-card ak-spot ak-reveal">
                <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                    <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <div>
                    <h3 class="ak-h3">COD Order Verification</h3>
                    <p class="text-sm text-gray-600 leading-relaxed mb-3">Verify Cash on Delivery orders via WhatsApp before shipping. Customers confirm with a simple reply, reducing fake orders significantly.</p>
                    <ul class="space-y-1.5 text-sm text-gray-500">
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Reduce RTO by up to 40%</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Auto-cancel unverified orders</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Save on shipping costs</li>
                    </ul>
                </div>
            </div>

            <!-- Feature 3: Order Notifications -->
            <div class="ak-card ak-spot ak-reveal">
                <div class="w-14 h-14 bg-purple-100 rounded-xl flex items-center justify-center flex-shrink-0">
                    <svg class="w-7 h-7 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
                </div>
                <div>
                    <h3 class="ak-h3">Order Notifications</h3>
                    <p class="text-sm text-gray-600 leading-relaxed mb-3">Keep customers informed at every stage — order confirmation, shipping updates, out-for-delivery, and delivered notifications via WhatsApp.</p>
                    <ul class="space-y-1.5 text-sm text-gray-500">
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 98% open rate on WhatsApp</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Tracking link included</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Reduce support tickets</li>
                    </ul>
                </div>
            </div>

            <!-- Feature 4: Broadcast -->
            <div class="ak-card ak-spot ak-reveal">
                <div class="w-14 h-14 bg-orange-100 rounded-xl flex items-center justify-center flex-shrink-0">
                    <svg class="w-7 h-7 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>
                </div>
                <div>
                    <h3 class="ak-h3">Broadcast Messaging</h3>
                    <p class="text-sm text-gray-600 leading-relaxed mb-3">Send targeted campaigns to customer segments. Perfect for new product launches, flash sales, festive offers, and win-back campaigns.</p>
                    <ul class="space-y-1.5 text-sm text-gray-500">
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Customer segmentation</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Rich media templates</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Campaign analytics</li>
                    </ul>
                </div>
            </div>

            <!-- Feature 5: Chatbot -->
            <div class="animate-on-scroll flex gap-5 p-6 bg-white border border-gray-100 rounded-2xl hover:shadow-md transition-all md:col-span-2 lg:col-span-1">
                <div class="w-14 h-14 bg-cyan-100 rounded-xl flex items-center justify-center flex-shrink-0">
                    <svg class="w-7 h-7 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/></svg>
                </div>
                <div>
                    <h3 class="ak-h3">AI Chatbot</h3>
                    <p class="text-sm text-gray-600 leading-relaxed mb-3">Automated chatbot handles common queries, provides product info, processes returns, and escalates complex issues to your team.</p>
                    <ul class="space-y-1.5 text-sm text-gray-500">
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 24/7 automated support</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Smart product recommendations</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Seamless human handoff</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SCREENSHOTS SECTION -->
<section class="ak-section">
    <div class="ak-container">
        <div class="text-center mb-12 animate-on-scroll">
            <h2 class="ak-h3">See It in Action</h2>
            <p class="text-gray-600">A quick look at the dashboard and WhatsApp flows.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-6 animate-on-scroll">
            <div class="ak-card ak-card--flat">
                <div class="aspect-video bg-gray-100 flex items-center justify-center"><span class="text-3xl"><?= ak_icon('bar-chart', 18) ?></span></div>
                <div class="p-4"><p class="text-sm font-medium text-gray-900">Analytics Dashboard</p></div>
            </div>
            <div class="ak-card ak-card--flat">
                <div class="aspect-video bg-gray-100 flex items-center justify-center"><span class="text-3xl"><?= ak_icon('refresh', 18) ?></span></div>
                <div class="p-4"><p class="text-sm font-medium text-gray-900">Automation Flow Builder</p></div>
            </div>
            <div class="ak-card ak-card--flat">
                <div class="aspect-video bg-gray-100 flex items-center justify-center"><span class="text-3xl"><?= ak_icon('message-circle', 18) ?></span></div>
                <div class="p-4"><p class="text-sm font-medium text-gray-900">Chat Interface</p></div>
            </div>
        </div>
    </div>
</section>

<!-- USE CASES -->
<section class="ak-section">
    <div class="ak-container">
        <div class="text-center max-w-3xl mx-auto mb-12 animate-on-scroll">
            <h2 class="ak-h3">Built for Every Shopify Use Case</h2>
            <p class="text-gray-600">Whether you sell fashion, beauty, electronics, or food — our automation works for you.</p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 animate-on-scroll">
            <?php
            $useCases = [
                ['icon' => 'shirt', 'title' => 'Fashion & Apparel', 'desc' => 'Size guides, style recommendations, and collection launches.'],
                ['icon' => 'sparkle', 'title' => 'Beauty & Skincare', 'desc' => 'Routine reminders, reorder prompts, and ingredient queries.'],
                ['icon' => 'utensils', 'title' => 'Food & Beverages', 'desc' => 'Order tracking, repeat orders, and freshness notifications.'],
                ['icon' => 'smartphone', 'title' => 'Electronics', 'desc' => 'Warranty info, setup guides, and accessory recommendations.'],
            ];
            foreach ($useCases as $uc): ?>
            <div class="p-6 bg-gray-50 rounded-2xl text-center hover:bg-gray-100 transition-colors">
                <?= ak_icon($uc['icon'], 28) ?>
                <h3 class="text-base font-semibold text-gray-900 mb-1"><?= $uc['title'] ?></h3>
                <p class="text-sm text-gray-600"><?= $uc['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- PRICING -->
<section class="ak-section" id="pricing">
    <div class="ak-container">
        <div class="text-center max-w-3xl mx-auto mb-12 animate-on-scroll">
            <h2 class="ak-h3">Simple, Transparent Pricing</h2>
            <p class="text-gray-600">Start free. Scale as you grow. No hidden charges.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6 lg:gap-8 max-w-5xl mx-auto">
            <!-- Free -->
            <div class="animate-on-scroll bg-white border border-gray-200 rounded-2xl p-6 lg:p-8">
                <p class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-2">Starter</p>
                <div class="flex items-baseline gap-1 mb-1">
                    <span class="text-4xl font-extrabold text-gray-900">Free</span>
                </div>
                <p class="text-sm text-gray-500 mb-6">For stores getting started</p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center gap-2 text-sm text-gray-700"><svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 100 messages/month</li>
                    <li class="flex items-center gap-2 text-sm text-gray-700"><svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Cart recovery</li>
                    <li class="flex items-center gap-2 text-sm text-gray-700"><svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Order notifications</li>
                    <li class="flex items-center gap-2 text-sm text-gray-400"><svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg> COD verification</li>
                    <li class="flex items-center gap-2 text-sm text-gray-400"><svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg> Broadcast campaigns</li>
                </ul>
                <a href="<?= SHOPIFY_APP_URL ?>" target="_blank" class="block text-center px-6 py-3 text-sm font-semibold text-primary-600 border border-primary-200 rounded-xl hover:bg-primary-50 transition-colors">Start Free</a>
            </div>

            <!-- Growth (Popular) -->
            <div class="animate-on-scroll bg-white border-2 border-primary-600 rounded-2xl p-6 lg:p-8 relative shadow-xl shadow-primary-100">
                <span class="absolute -top-3 left-1/2 -translate-x-1/2 px-3 py-1 bg-primary-600 text-white text-xs font-semibold rounded-full">Most Popular</span>
                <p class="text-sm font-semibold text-primary-600 uppercase tracking-wider mb-2">Growth</p>
                <div class="flex items-baseline gap-1 mb-1">
                    <span class="text-4xl font-extrabold text-gray-900">₹2,499</span>
                    <span class="text-sm text-gray-500">/month</span>
                </div>
                <p class="text-sm text-gray-500 mb-6">For growing D2C brands</p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center gap-2 text-sm text-gray-700"><svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 5,000 messages/month</li>
                    <li class="flex items-center gap-2 text-sm text-gray-700"><svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Cart recovery + sequences</li>
                    <li class="flex items-center gap-2 text-sm text-gray-700"><svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> COD verification</li>
                    <li class="flex items-center gap-2 text-sm text-gray-700"><svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Broadcast campaigns</li>
                    <li class="flex items-center gap-2 text-sm text-gray-700"><svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Analytics dashboard</li>
                </ul>
                <a href="<?= SHOPIFY_APP_URL ?>" target="_blank" class="block text-center px-6 py-3 text-sm font-semibold text-white bg-primary-600 rounded-xl hover:bg-primary-700 transition-colors shadow-sm">Get Started</a>
            </div>

            <!-- Enterprise -->
            <div class="animate-on-scroll bg-white border border-gray-200 rounded-2xl p-6 lg:p-8">
                <p class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-2">Enterprise</p>
                <div class="flex items-baseline gap-1 mb-1">
                    <span class="text-4xl font-extrabold text-gray-900">Custom</span>
                </div>
                <p class="text-sm text-gray-500 mb-6">For high-volume stores</p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center gap-2 text-sm text-gray-700"><svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Unlimited messages</li>
                    <li class="flex items-center gap-2 text-sm text-gray-700"><svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Everything in Growth</li>
                    <li class="flex items-center gap-2 text-sm text-gray-700"><svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> AI chatbot</li>
                    <li class="flex items-center gap-2 text-sm text-gray-700"><svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Custom integrations</li>
                    <li class="flex items-center gap-2 text-sm text-gray-700"><svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Dedicated account manager</li>
                </ul>
                <a href="<?= url('contact') ?>" class="block text-center px-6 py-3 text-sm font-semibold text-primary-600 border border-primary-200 rounded-xl hover:bg-primary-50 transition-colors">Contact Sales</a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ WITH SCHEMA -->
<?php if (!empty($faqs)): ?>
<section class="ak-section" id="faq">
    <div class="ak-container ak-narrow">
        <div class="text-center mb-12 animate-on-scroll">
            <h2 class="ak-h3">Frequently Asked Questions</h2>
            <p class="text-gray-600">Quick answers to common questions about our WhatsApp automation app.</p>
        </div>

        <div class="space-y-3 animate-on-scroll" data-faq-group>
            <?php foreach ($faqs as $i => $faq): ?>
            <div class="border border-gray-200 rounded-xl overflow-hidden">
                <button data-faq-toggle class="w-full flex items-center justify-between px-6 py-4 text-left hover:bg-gray-50 transition-colors">
                    <span class="text-sm font-semibold text-gray-900 pr-4"><?= clean($faq['question']) ?></span>
                    <svg data-faq-icon class="w-5 h-5 text-gray-400 flex-shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div class="overflow-hidden transition-all duration-300" style="max-height: 0px;">
                    <div class="px-6 pb-4">
                        <p class="text-sm text-gray-600 leading-relaxed"><?= clean($faq['answer']) ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- SUPPORT -->
<section class="bg-gray-50 py-16 lg:py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center animate-on-scroll">
        <h2 class="ak-h3">Need Help?</h2>
        <p class="text-gray-600 mb-8 max-w-2xl mx-auto">Our support team is available to help you set up and optimize your WhatsApp automation. We typically respond within 2 hours.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="mailto:<?= SITE_EMAIL ?>" class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-gray-700 border border-gray-300 rounded-xl hover:bg-white transition-colors">
                <?= ak_icon('mail', 18) ?> Email Support
            </a>
            <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>" target="_blank" class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-white bg-green-600 rounded-xl hover:bg-green-700 transition-colors">
                <?= ak_icon('message-circle', 18) ?> Chat on WhatsApp
            </a>
        </div>
    </div>
</section>

<!-- FINAL CTA -->
<?php
component('cta-section', [
    'title' => 'Start Recovering Revenue Today',
    'description' => 'Install our Shopify app in under 5 minutes and start recovering abandoned carts via WhatsApp.',
    'primaryBtn' => 'Install Free App',
    'primaryLink' => SHOPIFY_APP_URL,
    'secondaryBtn' => 'Book a Demo',
    'secondaryLink' => url('contact'),
    'style' => 'dark'
]);
?>

<?php
$pageContent = ob_get_clean();
include __DIR__ . '/../../includes/components/layout.php';
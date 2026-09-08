<?php
/**
 * Real Estate Marketing Agency Landing Page
 */
if (!class_exists('SEO')) {
    $_GET['route'] = 'real-estate-marketing-agency';
    require __DIR__ . '/../index.php';
    return;
}

SEO::load('real-estate-marketing-agency');
SEO::set('meta_title', 'Real Estate Digital Marketing Agency in India | Lead Generation | Akestech');
SEO::set('meta_description', 'Generate qualified real estate leads, site visits, and bookings with Akestech. Meta Ads, Google Ads, landing pages, CRM, WhatsApp automation, and performance reporting for builders and developers.');

$schemas = [];
$schemas[] = SEO::breadcrumbSchema([
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'Real Estate Marketing Agency', 'url' => url('real-estate-marketing-agency')]
]);

if (!defined('SITE_PHONE')) {
    define('SITE_PHONE', '+' . WHATSAPP_NUMBER);
}

$phoneNumber = SITE_PHONE;
$whatsappText = rawurlencode('Hi Akestech, I want to generate more qualified leads for my real estate project.');
$captchaA = random_int(2, 9);
$captchaB = random_int(2, 9);
$_SESSION['lead_captcha_answer'] = (string) ($captchaA + $captchaB);

$proofMetrics = [
    ['value' => '100+', 'label' => 'Campaigns managed'],
    ['value' => '40%', 'label' => 'Average CPL reduction'],
    ['value' => '3X', 'label' => 'Site visit lift'],
    ['value' => 'Under 30s', 'label' => 'Lead response automation'],
];

$painPoints = [
    ['title' => 'Leads are cheap but not serious', 'copy' => 'Your sales team wastes time on low-intent enquiries instead of buyers who can actually visit and book.'],
    ['title' => 'Follow-ups happen too late', 'copy' => 'Real estate leads cool down fast. Delayed calls and manual WhatsApp replies silently kill site visits.'],
    ['title' => 'Campaigns run without clean tracking', 'copy' => 'No proper funnel view, CRM sync, or lead quality feedback means budgets scale in the wrong direction.'],
];

$services = [
    ['title' => 'Meta Ads', 'items' => ['Lead forms and landing page campaigns', 'Audience testing by location and budget', 'Retargeting for project recall']],
    ['title' => 'Google Ads', 'items' => ['Search campaigns for buyer intent', 'Call and location campaigns', 'Performance Max with clean tracking']],
    ['title' => 'Landing Pages', 'items' => ['Project-specific conversion pages', 'Fast mobile-first layouts', 'Trust, amenities, location and CTA flow']],
    ['title' => 'CRM and Routing', 'items' => ['Lead capture and assignment', 'Stage-wise sales pipeline', 'Quality feedback loop for campaigns']],
    ['title' => 'WhatsApp Automation', 'items' => ['Instant brochure and price-sheet replies', 'Site visit reminders', 'Lead qualification flows']],
    ['title' => 'Reporting', 'items' => ['CPL, qualified CPL and visit ratio', 'Channel-wise performance view', 'Weekly action plan']],
];

$process = [
    ['step' => '01', 'title' => 'Audit', 'copy' => 'We review campaigns, landing pages, CRM process, and current lead quality.'],
    ['step' => '02', 'title' => 'Build', 'copy' => 'We set up tracking, funnels, creatives, forms, CRM fields, and WhatsApp flows.'],
    ['step' => '03', 'title' => 'Launch', 'copy' => 'We run controlled tests across Meta and Google with clear qualified-lead goals.'],
    ['step' => '04', 'title' => 'Optimize', 'copy' => 'We shift spend to audiences, creatives, and channels that produce site visits.'],
    ['step' => '05', 'title' => 'Scale', 'copy' => 'We scale budgets only after the lead-to-visit system is stable.'],
];

$faqs = [
    ['q' => 'Do you work only with real estate builders?', 'a' => 'We work best with builders, developers, channel partners, and real estate teams that need qualified leads, site visits, and booking-focused campaigns.'],
    ['q' => 'What budget should we start with?', 'a' => 'Most projects should start with a test budget of Rs. 1L to Rs. 3L per month, depending on city, ticket size, and inventory.'],
    ['q' => 'Can you manage CRM and WhatsApp follow-up?', 'a' => 'Yes. We can integrate or build the CRM flow, route leads to sales teams, and automate WhatsApp qualification and reminders.'],
    ['q' => 'How soon can leads start?', 'a' => 'Campaigns can start quickly after setup. Meaningful optimization usually needs two to four weeks of data.'],
];

ob_start();
?>

<section class="relative overflow-hidden bg-white">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#f1f5f9_1px,transparent_1px),linear-gradient(to_bottom,#f1f5f9_1px,transparent_1px)] bg-[size:4rem_4rem] opacity-70"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
        <div class="grid lg:grid-cols-[1.08fr_0.92fr] gap-10 lg:gap-14 items-center">
            <div class="animate-on-scroll">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-gray-100 rounded-full mb-6">
                    <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                    <span class="text-xs font-semibold text-gray-600 uppercase tracking-wider">For builders and real estate sales teams</span>
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-gray-950 leading-[1.06] tracking-tight">
                    Turn real estate ad spend into qualified site visits
                </h1>
                <p class="mt-6 text-lg text-gray-600 leading-relaxed max-w-2xl">
                    Akestech builds the complete lead engine for property projects: Meta Ads, Google Ads, high-converting landing pages, CRM routing, WhatsApp automation, and performance reporting focused on bookings.
                </p>

                <div class="mt-8 flex flex-col sm:flex-row gap-3">
                    <a href="#lead-form" class="inline-flex items-center justify-center px-7 py-3.5 text-sm font-semibold text-white bg-gray-950 rounded-xl hover:bg-gray-800 transition-all shadow-lg shadow-gray-900/20">
                        Get Free Growth Plan
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                    <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=<?= $whatsappText ?>" target="_blank" class="inline-flex items-center justify-center px-7 py-3.5 text-sm font-semibold text-gray-800 bg-white border border-gray-200 rounded-xl hover:bg-gray-50 transition-all">
                        WhatsApp Us
                    </a>
                </div>

                <div class="mt-9 grid grid-cols-2 sm:grid-cols-4 gap-5">
                    <?php foreach ($proofMetrics as $metric): ?>
                    <div>
                        <p class="text-2xl font-extrabold text-gray-950"><?= $metric['value'] ?></p>
                        <p class="text-xs text-gray-500 mt-1"><?= $metric['label'] ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="animate-on-scroll" id="lead-form">
                <form method="POST" action="" class="bg-white border border-gray-200 rounded-2xl shadow-2xl shadow-gray-900/10 p-5 sm:p-6 lg:p-7">
                    <input type="hidden" name="form_action" value="audit">
                    <input type="hidden" name="source" value="real-estate-landing">
                    <input type="hidden" name="captcha_required" value="1">
                    <?= csrfField() ?>
                    <input type="text" name="website_url_hp" class="hidden" tabindex="-1" autocomplete="off">

                    <div class="mb-5">
                        <p class="text-xs font-semibold text-primary-600 uppercase tracking-wider">Free strategy review</p>
                        <h2 class="text-xl font-bold text-gray-950 mt-2">Get a 30-minute lead generation plan</h2>
                        <p class="text-sm text-gray-500 mt-2">Tell us about your project. We will reply with campaign, landing page, and automation recommendations.</p>
                    </div>

                    <div class="space-y-3">
                        <div class="grid sm:grid-cols-2 gap-3">
                            <input type="text" name="name" placeholder="Name *" required class="w-full px-4 py-3 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                            <input type="tel" name="phone" placeholder="Mobile number *" required class="w-full px-4 py-3 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        </div>
                        <input type="email" name="email" placeholder="Work email *" required class="w-full px-4 py-3 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        <div class="grid sm:grid-cols-2 gap-3">
                            <input type="text" name="company" placeholder="Company / project" class="w-full px-4 py-3 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                            <input type="text" name="website" placeholder="Project website / brochure URL" class="w-full px-4 py-3 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        </div>
                        <select name="monthly_revenue" class="w-full px-4 py-3 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent bg-white text-gray-500">
                            <option value="">Monthly marketing budget</option>
                            <option value="Under Rs. 1L">Under Rs. 1L</option>
                            <option value="Rs. 1L - Rs. 3L">Rs. 1L - Rs. 3L</option>
                            <option value="Rs. 3L - Rs. 10L">Rs. 3L - Rs. 10L</option>
                            <option value="Rs. 10L+">Rs. 10L+</option>
                        </select>
                        <textarea name="message" rows="3" placeholder="Project details, city, inventory, target CPL..." class="w-full px-4 py-3 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent"></textarea>
                        <div class="grid sm:grid-cols-[auto_1fr] gap-3 items-center bg-gray-50 border border-gray-200 rounded-xl p-3">
                            <label for="lead-captcha" class="text-sm font-semibold text-gray-800 whitespace-nowrap">
                                <?= $captchaA ?> + <?= $captchaB ?> =
                            </label>
                            <input id="lead-captcha" type="number" name="captcha_answer" inputmode="numeric" placeholder="Answer *" required class="w-full px-4 py-3 text-sm border border-gray-200 rounded-xl bg-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        </div>
                        <button type="submit" class="w-full px-6 py-3.5 text-sm font-semibold text-white bg-gray-950 rounded-xl hover:bg-gray-800 transition-colors">
                            Book Free Strategy Review
                        </button>
                    </div>
                    <p class="text-xs text-gray-400 mt-3 text-center">No spam. Real recommendations from a performance team.</p>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-9">
        <div class="grid md:grid-cols-[0.9fr_1.1fr] gap-8 items-center">
            <div>
                <p class="text-xs font-semibold text-primary-400 uppercase tracking-wider">The real problem</p>
                <h2 class="text-2xl lg:text-3xl font-bold text-white mt-3">More leads do not matter if they never become visits.</h2>
            </div>
            <div class="grid sm:grid-cols-3 gap-4">
                <?php foreach ($painPoints as $point): ?>
                <div class="border border-white/10 bg-white/5 rounded-xl p-4">
                    <h3 class="text-sm font-semibold text-white"><?= $point['title'] ?></h3>
                    <p class="text-xs text-gray-400 leading-relaxed mt-2"><?= $point['copy'] ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-14 lg:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div class="animate-on-scroll">
                <p class="text-xs font-semibold text-primary-600 uppercase tracking-wider">Our system</p>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-950 mt-3">One funnel from click to booking conversation</h2>
                <p class="text-gray-600 leading-relaxed mt-4">
                    We connect acquisition, landing page conversion, instant follow-up, CRM visibility, and sales feedback. That gives your team fewer junk leads and more serious prospects.
                </p>
                <div class="mt-7 grid sm:grid-cols-2 gap-3">
                    <?php
                    $outcomes = ['Buyer-intent campaign structure', 'Mobile-first project landing page', 'Instant WhatsApp response', 'CRM assignment and tracking', 'Creative testing calendar', 'Weekly quality reporting'];
                    foreach ($outcomes as $outcome): ?>
                    <div class="flex items-center gap-3 text-sm text-gray-700">
                        <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-3.5 h-3.5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                        </span>
                        <?= $outcome ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="animate-on-scroll">
                <div class="bg-gray-50 border border-gray-200 rounded-2xl p-4 lg:p-5">
                    <img src="<?= asset('images/hero-real-estate-dashboard.svg') ?>" alt="Real estate marketing dashboard" class="w-full rounded-xl border border-gray-200 bg-white">
                    <div class="grid grid-cols-3 gap-3 mt-3">
                        <div class="bg-white rounded-xl border border-gray-100 p-3">
                            <p class="text-lg font-bold text-gray-950">62%</p>
                            <p class="text-[11px] text-gray-500 mt-1">Qualified</p>
                        </div>
                        <div class="bg-white rounded-xl border border-gray-100 p-3">
                            <p class="text-lg font-bold text-gray-950">18%</p>
                            <p class="text-[11px] text-gray-500 mt-1">Visit ratio</p>
                        </div>
                        <div class="bg-white rounded-xl border border-gray-100 p-3">
                            <p class="text-lg font-bold text-gray-950">4.2X</p>
                            <p class="text-[11px] text-gray-500 mt-1">Remarketing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-50 py-14 lg:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-10 animate-on-scroll">
            <p class="text-xs font-semibold text-primary-600 uppercase tracking-wider">What we manage</p>
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-950 mt-3">A compact growth stack for property sales</h2>
            <p class="text-gray-600 mt-4">Everything is built around one business goal: better lead quality and more site visits.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-6">
            <?php foreach ($services as $service): ?>
            <div class="animate-on-scroll bg-white border border-gray-100 rounded-2xl p-6 hover:border-gray-200 hover:shadow-lg transition-all">
                <h3 class="text-base font-semibold text-gray-950"><?= $service['title'] ?></h3>
                <ul class="mt-4 space-y-2.5">
                    <?php foreach ($service['items'] as $item): ?>
                    <li class="flex gap-2.5 text-sm text-gray-600">
                        <span class="mt-2 w-1.5 h-1.5 bg-primary-500 rounded-full flex-shrink-0"></span>
                        <span><?= $item ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="bg-white py-14 lg:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-10 animate-on-scroll">
            <p class="text-xs font-semibold text-primary-600 uppercase tracking-wider">Execution plan</p>
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-950 mt-3">From audit to scale in five steps</h2>
        </div>
        <div class="grid md:grid-cols-5 gap-4">
            <?php foreach ($process as $item): ?>
            <div class="animate-on-scroll bg-gray-50 border border-gray-100 rounded-2xl p-5">
                <span class="inline-flex w-10 h-10 items-center justify-center bg-gray-950 text-white rounded-xl text-xs font-bold"><?= $item['step'] ?></span>
                <h3 class="text-sm font-semibold text-gray-950 mt-4"><?= $item['title'] ?></h3>
                <p class="text-xs text-gray-500 leading-relaxed mt-2"><?= $item['copy'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="bg-gray-950 py-14 lg:py-20">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center animate-on-scroll">
        <p class="text-xs font-semibold text-primary-400 uppercase tracking-wider">Free growth review</p>
        <h2 class="text-3xl lg:text-5xl font-bold text-white mt-4 leading-tight">Know what is blocking your site visits before spending more on ads.</h2>
        <p class="text-gray-400 mt-5 max-w-2xl mx-auto">We will review your current funnel and show where leads are leaking: targeting, creative, landing page, CRM, or follow-up.</p>
        <div class="mt-8 flex flex-col sm:flex-row gap-3 justify-center">
            <a href="#lead-form" class="inline-flex items-center justify-center px-8 py-4 text-sm font-semibold text-gray-950 bg-white rounded-xl hover:bg-gray-100 transition-all">
                Request Free Review
            </a>
            <a href="tel:<?= $phoneNumber ?>" class="inline-flex items-center justify-center px-8 py-4 text-sm font-semibold text-white border border-white/20 rounded-xl hover:bg-white/10 transition-all">
                Call <?= $phoneNumber ?>
            </a>
        </div>
    </div>
</section>

<section class="bg-white py-14 lg:py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10 animate-on-scroll">
            <p class="text-xs font-semibold text-primary-600 uppercase tracking-wider">FAQ</p>
            <h2 class="text-3xl font-bold text-gray-950 mt-3">Questions real estate teams ask us</h2>
        </div>
        <div class="space-y-4">
            <?php foreach ($faqs as $faq): ?>
            <div class="animate-on-scroll border border-gray-200 rounded-2xl p-5">
                <h3 class="text-base font-semibold text-gray-950"><?= $faq['q'] ?></h3>
                <p class="text-sm text-gray-600 leading-relaxed mt-2"><?= $faq['a'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
$pageContent = ob_get_clean();
include __DIR__ . '/../includes/components/layout.php';

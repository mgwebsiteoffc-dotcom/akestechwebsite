<?php
/**
 * Local keyword service landing pages for Lucknow SEO/AEO.
 */
if (!class_exists('SEO')) {
    require __DIR__ . '/../index.php';
    return;
}

$route = isset($_GET['route']) ? trim($_GET['route'], '/') : '';

$pages = [
    'digital-marketing-company-in-lucknow' => [
        'eyebrow' => 'Digital marketing company in Lucknow',
        'keyword' => 'Digital Marketing Company in Lucknow',
        'title' => 'Digital Marketing Company in Lucknow | SEO, Ads, Leads | Akestech',
        'description' => 'Akestech is a digital marketing company in Lucknow for SEO, Meta Ads, Google Ads, Shopify growth, lead generation, landing pages, CRO, and automation.',
        'h1' => 'Digital Marketing Company in Lucknow for Measurable Growth',
        'intro' => 'Akestech helps Lucknow businesses turn digital marketing into qualified enquiries, online sales, and repeatable growth. We plan, build, track, and optimize campaigns across SEO, paid ads, landing pages, Shopify, WhatsApp, and CRM.',
        'answer' => 'A good digital marketing company in Lucknow should combine local market understanding with clear tracking, strong creatives, SEO content, paid ads, landing pages, and lead follow-up systems. Akestech provides that complete growth stack for local businesses, service brands, D2C companies, and B2B teams.',
        'serviceName' => 'Digital Marketing Services in Lucknow',
        'primaryCta' => 'Get Free Marketing Audit',
        'accent' => 'primary',
        'metrics' => [
            ['value' => '360', 'label' => 'Growth stack'],
            ['value' => 'SEO + Ads', 'label' => 'Acquisition channels'],
            ['value' => 'CRM', 'label' => 'Lead visibility'],
            ['value' => 'Weekly', 'label' => 'Optimization rhythm'],
        ],
        'services' => [
            ['title' => 'SEO and AEO Content', 'copy' => 'Keyword-led landing pages, service pages, FAQs, internal linking, schema, and answer-first content built for search and AI results.'],
            ['title' => 'Meta and Google Ads', 'copy' => 'Full-funnel paid campaigns for awareness, leads, sales, remarketing, and conversion tracking.'],
            ['title' => 'Landing Pages and CRO', 'copy' => 'Fast mobile-first pages with clear offers, trust signals, local proof, and enquiry-focused forms.'],
            ['title' => 'Lead Management', 'copy' => 'CRM routing, WhatsApp follow-up, source tracking, and quality feedback loops for sales teams.'],
            ['title' => 'Shopify and Ecommerce', 'copy' => 'Store optimization, product-page improvements, cart recovery, and performance marketing for online stores.'],
            ['title' => 'Reporting and Strategy', 'copy' => 'Weekly action reports focused on cost per lead, conversion rate, revenue, and campaign quality.'],
        ],
        'faqs' => [
            ['question' => 'Which is the best digital marketing company in Lucknow?', 'answer' => 'The best choice depends on your goal. If you need measurable leads, ecommerce sales, SEO content, ads, landing pages, and automation in one place, Akestech is built for that growth-focused requirement.'],
            ['question' => 'What services does a digital marketing agency in Lucknow provide?', 'answer' => 'Core services include SEO, AEO content, Meta Ads, Google Ads, landing pages, website optimization, lead generation, Shopify growth, CRM setup, and WhatsApp automation.'],
            ['question' => 'How much does digital marketing cost in Lucknow?', 'answer' => 'Costs depend on scope, ad budget, competition, and content volume. Most serious growth retainers start after an audit of your goals, current website, tracking, and funnel.'],
            ['question' => 'Can digital marketing generate local leads in Lucknow?', 'answer' => 'Yes. Local SEO pages, Google Business Profile optimization, location-based ads, landing pages, and fast follow-up can generate qualified enquiries from Lucknow and nearby areas.'],
        ],
    ],
    'shopify-development-company-in-lucknow' => [
        'eyebrow' => 'Shopify development company in Lucknow',
        'keyword' => 'Shopify Development Company in Lucknow',
        'title' => 'Shopify Development Company in Lucknow | Akestech',
        'description' => 'Hire a Shopify development company in Lucknow for Shopify store setup, theme customization, speed optimization, app integrations, tracking, and CRO.',
        'h1' => 'Shopify Development Company in Lucknow for Stores That Sell',
        'intro' => 'Akestech builds and improves Shopify stores for brands that need speed, clean UX, conversion-focused product pages, reliable tracking, and room to scale with ads and automation.',
        'answer' => 'A Shopify development company in Lucknow should do more than install a theme. Akestech handles Shopify setup, theme customization, CRO, speed optimization, tracking, app integrations, migration, and growth support so your store is ready for real campaigns.',
        'serviceName' => 'Shopify Development Services in Lucknow',
        'primaryCta' => 'Discuss Shopify Project',
        'accent' => 'green',
        'metrics' => [
            ['value' => 'Shopify', 'label' => 'Core platform'],
            ['value' => 'CRO', 'label' => 'Conversion focus'],
            ['value' => 'Speed', 'label' => 'Performance first'],
            ['value' => 'Ads-ready', 'label' => 'Tracking setup'],
        ],
        'services' => [
            ['title' => 'Shopify Store Setup', 'copy' => 'New Shopify stores with theme setup, collections, navigation, pages, payment basics, shipping settings, and launch support.'],
            ['title' => 'Theme Customization', 'copy' => 'Custom sections, product page layouts, cart improvements, homepage blocks, and brand-consistent UI changes.'],
            ['title' => 'Speed Optimization', 'copy' => 'Image cleanup, script review, theme performance improvements, app audit, and mobile load-time fixes.'],
            ['title' => 'App and API Integration', 'copy' => 'Integrations for WhatsApp, CRM, reviews, logistics, analytics, payment tools, and marketing automation.'],
            ['title' => 'Tracking Setup', 'copy' => 'Meta Pixel, Google Ads tags, GA4, events, conversion tracking, UTMs, and campaign-ready reporting.'],
            ['title' => 'CRO Improvements', 'copy' => 'Trust signals, product-page flow, checkout support, offer structure, cart recovery, and AOV improvements.'],
        ],
        'faqs' => [
            ['question' => 'Do you build Shopify stores in Lucknow?', 'answer' => 'Yes. Akestech provides Shopify store setup, theme customization, app integrations, speed optimization, tracking, and growth support for businesses in Lucknow and across India.'],
            ['question' => 'How long does Shopify development take?', 'answer' => 'A basic Shopify store can often launch in two to four weeks. Custom theme work, migration, integrations, and advanced CRO can take longer depending on scope.'],
            ['question' => 'Can you improve an existing Shopify store?', 'answer' => 'Yes. We audit speed, UX, product pages, tracking, apps, checkout flow, and conversion issues, then prioritize fixes that can improve sales.'],
            ['question' => 'Do you also manage Shopify marketing?', 'answer' => 'Yes. We can support Meta Ads, Google Ads, SEO, WhatsApp automation, cart recovery, and CRO after development.'],
        ],
    ],
    'performance-marketing-company-in-lucknow' => [
        'eyebrow' => 'Performance marketing company in Lucknow',
        'keyword' => 'Performance Marketing Company in Lucknow',
        'title' => 'Performance Marketing Company in Lucknow | Meta & Google Ads',
        'description' => 'Akestech is a performance marketing company in Lucknow managing Meta Ads, Google Ads, landing pages, tracking, CRO, and revenue-focused optimization.',
        'h1' => 'Performance Marketing Company in Lucknow for Profitable Campaigns',
        'intro' => 'Akestech manages paid growth with clear targets: better leads, better ROAS, cleaner tracking, stronger creatives, and landing pages that turn traffic into enquiries and sales.',
        'answer' => 'Performance marketing in Lucknow works best when campaigns, creatives, landing pages, analytics, and follow-up are managed together. Akestech builds this complete system across Meta Ads, Google Ads, tracking, reporting, and CRO.',
        'serviceName' => 'Performance Marketing Services in Lucknow',
        'primaryCta' => 'Get Ad Account Audit',
        'accent' => 'orange',
        'metrics' => [
            ['value' => 'Meta', 'label' => 'Facebook and Instagram'],
            ['value' => 'Google', 'label' => 'Search and PMax'],
            ['value' => 'CRO', 'label' => 'Landing page focus'],
            ['value' => 'ROAS', 'label' => 'Profit lens'],
        ],
        'services' => [
            ['title' => 'Meta Ads Management', 'copy' => 'Campaign structure, creative testing, audience strategy, retargeting, lead ads, sales campaigns, and daily optimization.'],
            ['title' => 'Google Ads Management', 'copy' => 'Search, Performance Max, Shopping, YouTube, call campaigns, conversion tracking, and keyword-led optimization.'],
            ['title' => 'Creative Testing', 'copy' => 'Ad angles, hooks, static creatives, video briefs, UGC direction, and performance-based iteration.'],
            ['title' => 'Landing Page Optimization', 'copy' => 'Dedicated campaign pages with persuasive copy, proof, forms, speed, and mobile-first conversion flow.'],
            ['title' => 'Tracking and Analytics', 'copy' => 'Pixel setup, conversion events, GA4, UTMs, Meta CAPI support, and reporting that connects spend to outcomes.'],
            ['title' => 'Scaling Strategy', 'copy' => 'Budget scaling, funnel diagnosis, offer testing, remarketing, and weekly action plans.'],
        ],
        'faqs' => [
            ['question' => 'What does a performance marketing company do?', 'answer' => 'It manages paid campaigns with measurable goals such as leads, sales, ROAS, cost per lead, conversion rate, and revenue instead of focusing only on impressions or reach.'],
            ['question' => 'Which platforms do you manage?', 'answer' => 'Akestech manages Meta Ads, Google Ads, Shopping, Performance Max, remarketing, landing pages, tracking, and reporting.'],
            ['question' => 'Do you work with local Lucknow businesses?', 'answer' => 'Yes. We work with local service businesses, real estate teams, education brands, ecommerce stores, and B2B companies in Lucknow and across India.'],
            ['question' => 'How soon can paid ads generate results?', 'answer' => 'Traffic and leads can start quickly after launch, but stable optimization usually needs two to four weeks of data, creative tests, and lead quality feedback.'],
        ],
    ],
    'meta-ads-management-in-lucknow' => [
        'eyebrow' => 'Meta ads management in Lucknow',
        'keyword' => 'Meta Ads Management in Lucknow',
        'title' => 'Meta Ads Management in Lucknow | Facebook & Instagram Ads',
        'description' => 'Get Meta Ads management in Lucknow for Facebook Ads, Instagram Ads, lead campaigns, ecommerce sales, retargeting, creatives, tracking, and reporting.',
        'h1' => 'Meta Ads Management in Lucknow for Leads and Sales',
        'intro' => 'Akestech manages Facebook and Instagram campaigns for Lucknow businesses that need better lead quality, ecommerce sales, retargeting, creative testing, and conversion tracking.',
        'answer' => 'Meta Ads management in Lucknow includes campaign planning, audience testing, ad creative, lead forms, landing pages, pixel setup, retargeting, optimization, and weekly reporting. Akestech manages the full system so ad spend is tied to business outcomes.',
        'serviceName' => 'Meta Ads Management Services in Lucknow',
        'primaryCta' => 'Audit My Meta Ads',
        'accent' => 'blue',
        'metrics' => [
            ['value' => 'FB + IG', 'label' => 'Meta channels'],
            ['value' => 'Leads', 'label' => 'Enquiry campaigns'],
            ['value' => 'Sales', 'label' => 'Ecommerce campaigns'],
            ['value' => 'Pixel', 'label' => 'Tracking setup'],
        ],
        'services' => [
            ['title' => 'Campaign Strategy', 'copy' => 'Lead generation, sales, awareness, remarketing, and funnel planning based on your offer and audience.'],
            ['title' => 'Audience Testing', 'copy' => 'Location, interest, lookalike, custom audience, broad targeting, and retargeting tests.'],
            ['title' => 'Creative Direction', 'copy' => 'Hooks, offers, captions, static creatives, videos, reels, UGC briefs, and fatigue monitoring.'],
            ['title' => 'Lead Forms and Landing Pages', 'copy' => 'Instant forms or landing pages depending on lead quality, ticket size, and sales process.'],
            ['title' => 'Pixel and CAPI Support', 'copy' => 'Meta Pixel events, conversion tracking, domain checks, UTMs, and server-side tracking support where needed.'],
            ['title' => 'Optimization and Reporting', 'copy' => 'Budget allocation, campaign cleanup, cost per lead review, quality feedback, and weekly next actions.'],
        ],
        'faqs' => [
            ['question' => 'Do Facebook Ads work for Lucknow businesses?', 'answer' => 'Yes, when the offer, targeting, creative, landing page, and follow-up are aligned. Meta Ads can work well for local services, real estate, ecommerce, education, and events.'],
            ['question' => 'What budget is needed for Meta Ads in Lucknow?', 'answer' => 'The right budget depends on your industry and goal. A practical test budget should allow enough leads or purchases for learning, optimization, and creative testing.'],
            ['question' => 'Do you create ad creatives too?', 'answer' => 'Yes. We help with creative angles, copy, static designs, video briefs, UGC direction, and test planning.'],
            ['question' => 'Can you improve my existing Meta campaigns?', 'answer' => 'Yes. We can audit your account structure, targeting, creatives, pixel events, landing pages, lead quality, and reporting before rebuilding or optimizing campaigns.'],
        ],
    ],
    'lead-generation-service-in-lucknow' => [
        'eyebrow' => 'Lead generation service in Lucknow',
        'keyword' => 'Lead Generation Service in Lucknow',
        'title' => 'Lead Generation Service in Lucknow | Qualified Leads | Akestech',
        'description' => 'Akestech provides lead generation service in Lucknow with Meta Ads, Google Ads, landing pages, CRM, WhatsApp automation, qualification, and reporting.',
        'h1' => 'Lead Generation Service in Lucknow for Qualified Enquiries',
        'intro' => 'Akestech builds lead generation funnels for Lucknow businesses that need more serious enquiries, faster follow-up, cleaner CRM data, and better cost per qualified lead.',
        'answer' => 'A lead generation service in Lucknow should not stop at form fills. Akestech combines ads, landing pages, tracking, CRM routing, WhatsApp follow-up, and lead quality feedback so your sales team gets enquiries it can actually work on.',
        'serviceName' => 'Lead Generation Services in Lucknow',
        'primaryCta' => 'Plan My Lead Funnel',
        'accent' => 'rose',
        'metrics' => [
            ['value' => 'Meta', 'label' => 'Lead campaigns'],
            ['value' => 'Google', 'label' => 'Intent capture'],
            ['value' => 'CRM', 'label' => 'Lead routing'],
            ['value' => 'WhatsApp', 'label' => 'Fast follow-up'],
        ],
        'services' => [
            ['title' => 'Lead Strategy', 'copy' => 'Audience definition, offer planning, location targeting, funnel mapping, and qualification criteria.'],
            ['title' => 'Paid Lead Campaigns', 'copy' => 'Meta lead ads, Google search campaigns, call campaigns, landing page campaigns, and remarketing.'],
            ['title' => 'Landing Page Builds', 'copy' => 'Conversion pages with clear service copy, proof, local relevance, FAQs, forms, and mobile speed.'],
            ['title' => 'CRM and Lead Routing', 'copy' => 'Source capture, lead assignment, sales status fields, reminders, and quality reporting.'],
            ['title' => 'WhatsApp Follow-Up', 'copy' => 'Instant acknowledgement, qualification questions, brochure sharing, reminders, and sales handoff.'],
            ['title' => 'Qualified Lead Reporting', 'copy' => 'Weekly review of CPL, qualified CPL, lead source, sales feedback, and next optimization actions.'],
        ],
        'faqs' => [
            ['question' => 'What is lead generation?', 'answer' => 'Lead generation is the process of attracting potential customers and capturing their contact details through ads, search, landing pages, forms, calls, WhatsApp, or other channels.'],
            ['question' => 'Can you generate qualified leads in Lucknow?', 'answer' => 'Yes. We use local targeting, offer testing, landing pages, form filters, CRM routing, and follow-up automation to improve lead quality.'],
            ['question' => 'Which industries can use lead generation?', 'answer' => 'Lead generation works for real estate, education, healthcare, local services, B2B services, ecommerce, finance, events, and high-ticket consultation businesses.'],
            ['question' => 'How do you reduce junk leads?', 'answer' => 'We improve targeting, add qualifying questions, use better landing page copy, track source quality, connect CRM feedback, and optimize campaigns based on qualified leads instead of raw leads.'],
        ],
    ],
];

if (!isset($pages[$route])) {
    http_response_code(404);
    require __DIR__ . '/404.php';
    return;
}

$page = $pages[$route];
$canonical = url($route);
$contactUrl = url('contact') . '?type=audit&service=' . rawurlencode($page['keyword']);
$whatsappText = rawurlencode('Hi Akestech, I want help with ' . $page['keyword'] . '.');

SEO::set('meta_title', $page['title']);
SEO::set('meta_description', $page['description']);
SEO::set('meta_keywords', strtolower($page['keyword']) . ', ' . strtolower($page['serviceName']) . ', digital marketing agency Lucknow, Akestech');
SEO::set('og_title', $page['title']);
SEO::set('og_description', $page['description']);
SEO::set('canonical_url', $canonical);

$faqForSchema = array_map(function ($faq) {
    return ['question' => $faq['question'], 'answer' => $faq['answer']];
}, $page['faqs']);

$webPageSchema = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'WebPage',
    'name' => $page['keyword'],
    'url' => $canonical,
    'description' => $page['description'],
    'inLanguage' => 'en-IN',
    'about' => [
        '@type' => 'Service',
        'name' => $page['serviceName'],
    ],
    'isPartOf' => [
        '@type' => 'WebSite',
        'name' => SITE_NAME,
        'url' => SITE_URL,
    ],
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

$schemas = [
    $webPageSchema,
    SEO::localBusinessSchema(),
    SEO::serviceSchema($page['serviceName'], $page['description']),
    SEO::faqSchema($faqForSchema),
    SEO::breadcrumbSchema([
        ['name' => 'Home', 'url' => url('/')],
        ['name' => $page['keyword'], 'url' => $canonical],
    ]),
];

$accentClasses = [
    'primary' => ['text' => 'text-primary-600', 'bg' => 'bg-primary-50', 'solid' => 'bg-primary-600', 'border' => 'border-primary-100'],
    'green' => ['text' => 'text-green-600', 'bg' => 'bg-green-50', 'solid' => 'bg-green-600', 'border' => 'border-green-100'],
    'orange' => ['text' => 'text-orange-600', 'bg' => 'bg-orange-50', 'solid' => 'bg-orange-600', 'border' => 'border-orange-100'],
    'blue' => ['text' => 'text-blue-600', 'bg' => 'bg-blue-50', 'solid' => 'bg-blue-600', 'border' => 'border-blue-100'],
    'rose' => ['text' => 'text-rose-600', 'bg' => 'bg-rose-50', 'solid' => 'bg-rose-600', 'border' => 'border-rose-100'],
];
$accent = $accentClasses[$page['accent']] ?? $accentClasses['primary'];

$process = [
    ['step' => '01', 'title' => 'Audit', 'copy' => 'We review your current website, campaigns, tracking, content, and lead quality.'],
    ['step' => '02', 'title' => 'Plan', 'copy' => 'We define keywords, audience segments, offers, funnel pages, tracking, and success metrics.'],
    ['step' => '03', 'title' => 'Build', 'copy' => 'We create pages, campaigns, creatives, forms, CRM flows, and automation where required.'],
    ['step' => '04', 'title' => 'Launch', 'copy' => 'We launch in controlled stages so performance data stays clean and useful.'],
    ['step' => '05', 'title' => 'Optimize', 'copy' => 'We improve budgets, content, creatives, conversion rate, and lead quality every week.'],
];

ob_start();
?>

<section class="relative overflow-hidden bg-white">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#f1f5f9_1px,transparent_1px),linear-gradient(to_bottom,#f1f5f9_1px,transparent_1px)] bg-[size:4rem_4rem] opacity-70"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-20">
        <div class="grid lg:grid-cols-[1.08fr_0.92fr] gap-10 lg:gap-14 items-center">
            <div class="animate-on-scroll">
                <span class="inline-flex px-3 py-1.5 rounded-full <?= $accent['bg'] ?> <?= $accent['text'] ?> text-xs font-semibold uppercase tracking-wider"><?= htmlspecialchars($page['eyebrow']) ?></span>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-gray-950 mt-6 leading-[1.06]"><?= htmlspecialchars($page['h1']) ?></h1>
                <p class="mt-6 text-lg text-gray-600 leading-relaxed max-w-2xl"><?= htmlspecialchars($page['intro']) ?></p>
                <div class="mt-8 flex flex-col sm:flex-row gap-3">
                    <a href="<?= $contactUrl ?>" class="inline-flex items-center justify-center px-7 py-3.5 text-sm font-semibold text-white bg-gray-950 rounded-xl hover:bg-gray-800 transition-all shadow-lg shadow-gray-900/20">
                        <?= htmlspecialchars($page['primaryCta']) ?>
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                    <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=<?= $whatsappText ?>" target="_blank" class="inline-flex items-center justify-center px-7 py-3.5 text-sm font-semibold text-gray-800 bg-white border border-gray-200 rounded-xl hover:bg-gray-50 transition-all">
                        WhatsApp Us
                    </a>
                </div>
            </div>

            <div class="animate-on-scroll">
                <div class="bg-gray-950 rounded-2xl p-6 lg:p-7 shadow-2xl shadow-gray-900/10">
                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Direct answer</p>
                    <h2 class="text-2xl font-bold text-white mt-3">What should you expect from <?= htmlspecialchars($page['keyword']) ?>?</h2>
                    <p class="text-sm text-gray-300 leading-relaxed mt-4"><?= htmlspecialchars($page['answer']) ?></p>
                    <div class="grid grid-cols-2 gap-3 mt-6">
                        <?php foreach ($page['metrics'] as $metric): ?>
                        <div class="bg-white/5 border border-white/10 rounded-xl p-4">
                            <p class="text-lg font-extrabold text-white"><?= htmlspecialchars($metric['value']) ?></p>
                            <p class="text-xs text-gray-400 mt-1"><?= htmlspecialchars($metric['label']) ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-50 py-14 lg:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-10 animate-on-scroll">
            <p class="text-xs font-semibold <?= $accent['text'] ?> uppercase tracking-wider">Services</p>
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-950 mt-3"><?= htmlspecialchars($page['serviceName']) ?></h2>
            <p class="text-gray-600 mt-4">AEO-friendly, conversion-focused service content supported by practical execution, tracking, and weekly improvement.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-6">
            <?php foreach ($page['services'] as $service): ?>
            <div class="animate-on-scroll bg-white border border-gray-100 rounded-2xl p-6 hover:border-gray-200 hover:shadow-lg transition-all">
                <div class="w-10 h-10 <?= $accent['bg'] ?> <?= $accent['text'] ?> rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>
                <h3 class="text-base font-semibold text-gray-950"><?= htmlspecialchars($service['title']) ?></h3>
                <p class="text-sm text-gray-600 leading-relaxed mt-2"><?= htmlspecialchars($service['copy']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="bg-white py-14 lg:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-10 animate-on-scroll">
            <p class="text-xs font-semibold <?= $accent['text'] ?> uppercase tracking-wider">How we work</p>
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-950 mt-3">A clear process from audit to optimization</h2>
        </div>
        <div class="grid md:grid-cols-5 gap-4">
            <?php foreach ($process as $item): ?>
            <div class="animate-on-scroll bg-gray-50 border border-gray-100 rounded-2xl p-5">
                <span class="inline-flex w-10 h-10 items-center justify-center <?= $accent['solid'] ?> text-white rounded-xl text-xs font-bold"><?= $item['step'] ?></span>
                <h3 class="text-sm font-semibold text-gray-950 mt-4"><?= htmlspecialchars($item['title']) ?></h3>
                <p class="text-xs text-gray-500 leading-relaxed mt-2"><?= htmlspecialchars($item['copy']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="bg-gray-950 py-14 lg:py-20">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center animate-on-scroll">
        <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Local SEO coverage</p>
        <h2 class="text-3xl lg:text-5xl font-bold text-white mt-4 leading-tight">Serving Lucknow businesses with India-ready digital execution.</h2>
        <p class="text-gray-400 mt-5 max-w-2xl mx-auto">We support businesses across Gomti Nagar, Hazratganj, Aliganj, Indira Nagar, Mahanagar, Vibhuti Khand, and nearby Lucknow markets, while building campaigns that can scale across Uttar Pradesh and India.</p>
        <div class="mt-8 flex flex-col sm:flex-row gap-3 justify-center">
            <a href="<?= $contactUrl ?>" class="inline-flex items-center justify-center px-8 py-4 text-sm font-semibold text-gray-950 bg-white rounded-xl hover:bg-gray-100 transition-all">
                Request Free Audit
            </a>
            <a href="tel:<?= SITE_PHONE ?>" class="inline-flex items-center justify-center px-8 py-4 text-sm font-semibold text-white border border-white/20 rounded-xl hover:bg-white/10 transition-all">
                Call <?= SITE_PHONE ?>
            </a>
        </div>
    </div>
</section>

<section class="bg-white py-14 lg:py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10 animate-on-scroll">
            <p class="text-xs font-semibold <?= $accent['text'] ?> uppercase tracking-wider">FAQ</p>
            <h2 class="text-3xl font-bold text-gray-950 mt-3">People also ask about <?= htmlspecialchars($page['keyword']) ?></h2>
        </div>
        <div class="space-y-4">
            <?php foreach ($page['faqs'] as $index => $faq): ?>
            <details class="animate-on-scroll group border border-gray-200 rounded-2xl p-5 hover:border-gray-300 transition-all">
                <summary class="flex cursor-pointer items-start justify-between gap-4">
                    <span class="text-base font-semibold text-gray-950"><?= ($index + 1) ?>. <?= htmlspecialchars($faq['question']) ?></span>
                    <span class="<?= $accent['text'] ?> group-open:rotate-180 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </summary>
                <p class="text-sm text-gray-600 leading-relaxed mt-4"><?= htmlspecialchars($faq['answer']) ?></p>
            </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
$pageContent = ob_get_clean();
include __DIR__ . '/../includes/components/layout.php';

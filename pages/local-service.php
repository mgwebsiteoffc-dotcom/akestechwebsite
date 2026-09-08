<?php
/**
 * Local service landing pages for Lucknow and Delhi NCR.
 *
 * IMPORTANT: the five original Lucknow slugs are generated with exactly the
 * same keys as before, so every existing URL keeps working unchanged:
 *   digital-marketing-company-in-lucknow
 *   shopify-development-company-in-lucknow
 *   performance-marketing-company-in-lucknow
 *   meta-ads-management-in-lucknow
 *   lead-generation-service-in-lucknow
 *
 * New slugs are additive only.
 */
if (!class_exists('SEO')) {
    require __DIR__ . '/../index.php';
    return;
}

$route = isset($_GET['route']) ? trim($_GET['route'], '/') : '';

/* ============================================================
   CITIES
   ============================================================ */
$cities = [
    'lucknow' => [
        'city'     => 'Lucknow',
        'region'   => 'Uttar Pradesh',
        'postal'   => '226001',
        'slugbit'  => 'in-lucknow',
        'areas'    => ['Gomti Nagar', 'Hazratganj', 'Aliganj', 'Indira Nagar', 'Mahanagar', 'Vibhuti Khand'],
        'nearby'   => 'across Uttar Pradesh',
    ],
    'delhi-ncr' => [
        'city'     => 'Delhi NCR',
        'region'   => 'Delhi NCR',
        'postal'   => '110001',
        'slugbit'  => 'in-delhi-ncr',
        'areas'    => ['Connaught Place', 'Noida', 'Gurugram', 'Dwarka', 'Saket', 'Ghaziabad', 'Faridabad'],
        'nearby'   => 'across Delhi NCR and North India',
    ],
];

/* ============================================================
   SERVICE DEFINITIONS  ({city}, {region}, {areas} placeholders)
   ============================================================ */
$serviceDefs = [

    'digital-marketing-company' => [
        'eyebrow' => 'Digital marketing company in {city}',
        'keyword' => 'Digital Marketing Company in {city}',
        'h1' => 'Digital Marketing Company in {city} for Measurable Growth',
        'intro' => 'AKESTECH helps {city} businesses turn digital marketing into qualified enquiries, online sales and repeatable growth. We plan, build, track and optimize campaigns across SEO, paid ads, landing pages, Shopify, WhatsApp and CRM.',
        'answer' => 'A good digital marketing company in {city} should combine local market understanding with clear tracking, strong creatives, SEO and AEO content, paid ads, landing pages and lead follow-up systems. AKESTECH provides that complete growth stack for local businesses, service brands, D2C companies and B2B teams.',
        'serviceName' => 'Digital Marketing Services in {city}',
        'cta' => 'Get Free Marketing Audit',
        'accent' => 'SEO + Ads',
        'metrics' => [
            ['value' => '360', 'label' => 'Growth stack'],
            ['value' => 'SEO + Ads', 'label' => 'Acquisition channels'],
            ['value' => 'CRM', 'label' => 'Lead visibility'],
            ['value' => 'Weekly', 'label' => 'Optimization rhythm'],
        ],
        'services' => [
            ['title' => 'SEO and AEO Content', 'copy' => 'Keyword-led landing pages, service pages, FAQs, internal linking, schema and answer-first content built for search and AI results.'],
            ['title' => 'Meta and Google Ads', 'copy' => 'Full-funnel paid campaigns for awareness, leads, sales, remarketing and conversion tracking.'],
            ['title' => 'Landing Pages and CRO', 'copy' => 'Fast mobile-first pages with clear offers, trust signals, local proof and enquiry-focused forms.'],
            ['title' => 'Lead Management', 'copy' => 'CRM routing, WhatsApp follow-up, source tracking and quality feedback loops for sales teams.'],
            ['title' => 'Shopify and Ecommerce', 'copy' => 'Store optimization, product-page improvements, cart recovery and performance marketing for online stores.'],
            ['title' => 'Reporting and Strategy', 'copy' => 'Weekly action reports focused on cost per lead, conversion rate, revenue and campaign quality.'],
        ],
        'faqs' => [
            ['question' => 'Which is the best digital marketing company in {city}?', 'answer' => 'The best choice depends on your goal. If you need measurable leads, ecommerce sales, SEO content, ads, landing pages and automation in one place, AKESTECH is built for that growth-focused requirement.'],
            ['question' => 'What services does a digital marketing agency in {city} provide?', 'answer' => 'Core services include SEO, AEO content, Meta Ads, Google Ads, landing pages, website optimization, lead generation, Shopify growth, CRM setup and WhatsApp automation.'],
            ['question' => 'How much does digital marketing cost in {city}?', 'answer' => 'Costs depend on scope, ad budget, competition and content volume. Most serious growth retainers start after an audit of your goals, current website, tracking and funnel.'],
            ['question' => 'Can digital marketing generate local leads in {city}?', 'answer' => 'Yes. Local SEO pages, Google Business Profile optimization, location-based ads, landing pages and fast follow-up generate qualified enquiries from {city} and nearby areas {nearby}.'],
        ],
        'related' => [
            ['title' => 'Performance Marketing', 'url' => 'services/performance-marketing'],
            ['title' => 'AI & Automation', 'url' => 'services/automation'],
            ['title' => 'Shopify & Commerce', 'url' => 'services/shopify-growth'],
            ['title' => 'Product Development', 'url' => 'services/technology'],
        ],
    ],

    'shopify-development-company' => [
        'eyebrow' => 'Shopify development company in {city}',
        'keyword' => 'Shopify Development Company in {city}',
        'h1' => 'Shopify Development Company in {city} for Stores That Sell',
        'intro' => 'AKESTECH builds and improves Shopify stores for brands that need speed, clean UX, conversion-focused product pages, reliable tracking and room to scale with ads and automation.',
        'answer' => 'A Shopify development company in {city} should do more than install a theme. AKESTECH handles Shopify setup, theme customization, CRO, speed optimization, tracking, app integrations, migration and growth support so your store is ready for real campaigns.',
        'serviceName' => 'Shopify Development Services in {city}',
        'cta' => 'Discuss Shopify Project',
        'accent' => 'Shopify',
        'metrics' => [
            ['value' => 'Shopify', 'label' => 'Core platform'],
            ['value' => 'CRO', 'label' => 'Conversion focus'],
            ['value' => 'Speed', 'label' => 'Performance first'],
            ['value' => 'Ads-ready', 'label' => 'Tracking setup'],
        ],
        'services' => [
            ['title' => 'Shopify Store Setup', 'copy' => 'New Shopify stores with theme setup, collections, navigation, pages, payment basics, shipping settings and launch support.'],
            ['title' => 'Theme Customization', 'copy' => 'Custom sections, product page layouts, cart improvements, homepage blocks and brand-consistent UI changes.'],
            ['title' => 'Speed Optimization', 'copy' => 'Image cleanup, script review, theme performance improvements, app audit and mobile load-time fixes.'],
            ['title' => 'App and API Integration', 'copy' => 'Integrations for WhatsApp, CRM, reviews, logistics, analytics, payment tools and marketing automation.'],
            ['title' => 'Tracking Setup', 'copy' => 'Meta Pixel, Google Ads tags, GA4, events, conversion tracking, UTMs and campaign-ready reporting.'],
            ['title' => 'CRO Improvements', 'copy' => 'Trust signals, product-page flow, checkout support, offer structure, cart recovery and AOV improvements.'],
        ],
        'faqs' => [
            ['question' => 'Do you build Shopify stores in {city}?', 'answer' => 'Yes. We build and optimize Shopify stores for {city} brands and support them with ads, automation and marketplace operations after launch.'],
            ['question' => 'Can you customize an existing Shopify theme?', 'answer' => 'Yes. We work inside your current theme to add custom sections, improve product pages, fix speed issues and remove conversion friction.'],
            ['question' => 'How long does a Shopify project take?', 'answer' => 'A new store typically takes three to five weeks. Theme customization and CRO improvements are usually delivered in two to four week cycles.'],
            ['question' => 'Can you set up tracking before we run ads?', 'answer' => 'Yes. Pixel, GA4, events and conversion tracking are part of every build so your first campaign produces usable data.'],
        ],
        'related' => [
            ['title' => 'Shopify & Commerce', 'url' => 'services/shopify-growth'],
            ['title' => 'Performance Marketing', 'url' => 'services/performance-marketing'],
            ['title' => 'Marketplace Management', 'url' => 'services/shopify-operations'],
            ['title' => 'AI & Automation', 'url' => 'services/automation'],
        ],
    ],

    'performance-marketing-company' => [
        'eyebrow' => 'Performance marketing company in {city}',
        'keyword' => 'Performance Marketing Company in {city}',
        'h1' => 'Performance Marketing Company in {city} Built for ROAS',
        'intro' => 'AKESTECH runs Meta and Google campaigns for {city} businesses that care about profit, not impressions. Structure, creative, tracking, landing pages and CRO work as one acquisition system.',
        'answer' => 'A performance marketing company in {city} should be measured on cost per acquisition and ROAS, not clicks. AKESTECH manages Meta Ads and Google Ads end to end — creative testing, landing pages, tracking and attribution, retargeting and retention — and reports weekly against your revenue targets.',
        'serviceName' => 'Performance Marketing Services in {city}',
        'cta' => 'Get Free Ad Account Audit',
        'accent' => 'ROAS',
        'metrics' => [
            ['value' => '₹50Cr+', 'label' => 'Ad spend managed'],
            ['value' => '3X+', 'label' => 'Average ROAS'],
            ['value' => 'Weekly', 'label' => 'Creative testing'],
            ['value' => 'Full', 'label' => 'Funnel tracking'],
        ],
        'services' => [
            ['title' => 'Meta Ads Management', 'copy' => 'Facebook and Instagram campaigns structured for profitable scale with clean audience and creative testing.'],
            ['title' => 'Google Ads Management', 'copy' => 'Search, Performance Max, Shopping and YouTube campaigns managed against contribution margin.'],
            ['title' => 'Creative Strategy', 'copy' => 'High-volume creative production including AI video, tested on a weekly cadence against live results.'],
            ['title' => 'Landing Pages and Funnels', 'copy' => 'Mobile-first pages with clear offers, proof and enquiry paths built to convert paid traffic.'],
            ['title' => 'Tracking and Attribution', 'copy' => 'GA4, pixels, server-side events, UTMs and dashboards you can trust for budget decisions.'],
            ['title' => 'Retention and Retargeting', 'copy' => 'Lifecycle campaigns across ads, email and WhatsApp that lift repeat purchase and lifetime value.'],
        ],
        'faqs' => [
            ['question' => 'How much ad budget do we need in {city}?', 'answer' => 'It depends on category and competition. We recommend a budget after auditing your margins, current funnel and target cost per acquisition.'],
            ['question' => 'How fast can campaigns show results?', 'answer' => 'Early signal arrives within two weeks. Stable, scalable performance usually takes 60 to 90 days of structured testing.'],
            ['question' => 'Do you create the ad creatives?', 'answer' => 'Yes. Creative strategy, production and AI video are handled in-house and tested continuously against performance data.'],
            ['question' => 'Will we own the ad accounts and data?', 'answer' => 'Yes. Accounts, pixels and historical data always remain in your ownership.'],
        ],
        'related' => [
            ['title' => 'Performance Marketing', 'url' => 'services/performance-marketing'],
            ['title' => 'AI Videos', 'url' => 'services/ai-videos'],
            ['title' => 'Shopify & Commerce', 'url' => 'services/shopify-growth'],
            ['title' => 'Case Studies', 'url' => 'case-studies'],
        ],
    ],

    'meta-ads-management' => [
        'eyebrow' => 'Meta Ads management in {city}',
        'keyword' => 'Meta Ads Management in {city}',
        'h1' => 'Meta Ads Management in {city} That Scales Profitably',
        'intro' => 'Facebook and Instagram campaigns for {city} brands — structured, creative-led and optimized weekly against real revenue instead of vanity metrics.',
        'answer' => 'Meta Ads management in {city} should cover account structure, audience strategy, creative testing, conversion tracking and budget optimization. AKESTECH runs all of it, pairing our AI video studio with structured testing so your account always has fresh angles to scale.',
        'serviceName' => 'Meta Ads Management Services in {city}',
        'cta' => 'Get Meta Ads Audit',
        'accent' => 'Meta',
        'metrics' => [
            ['value' => 'Meta', 'label' => 'Ads + Instagram'],
            ['value' => 'Weekly', 'label' => 'Creative testing'],
            ['value' => 'CAPI', 'label' => 'Server-side tracking'],
            ['value' => 'ROAS', 'label' => 'Primary metric'],
        ],
        'services' => [
            ['title' => 'Account Structure', 'copy' => 'Campaign and ad set architecture designed for clean data and controlled scaling.'],
            ['title' => 'Audience Strategy', 'copy' => 'Broad, interest, lookalike and retention audiences tested and consolidated around what converts.'],
            ['title' => 'Creative Production', 'copy' => 'Static, video and AI UGC produced in volume and tested on hooks, formats and offers.'],
            ['title' => 'Conversion Tracking', 'copy' => 'Pixel, Conversions API and event setup so optimization has accurate signal.'],
            ['title' => 'Budget Optimization', 'copy' => 'Daily and weekly budget moves driven by marginal ROAS, not guesses.'],
            ['title' => 'Reporting', 'copy' => 'Clear weekly reporting on spend, ROAS, CAC and the next action being taken.'],
        ],
        'faqs' => [
            ['question' => 'Do you manage Instagram ads too?', 'answer' => 'Yes. Instagram is managed inside the same Meta account structure with placement-specific creative.'],
            ['question' => 'How often do you change creatives?', 'answer' => 'We test new creatives weekly and refresh winning angles before performance declines.'],
            ['question' => 'Can you fix a broken pixel or tracking setup?', 'answer' => 'Yes. Tracking audits and Conversions API setup are standard before any scaling work begins.'],
            ['question' => 'What results should we expect in {city}?', 'answer' => 'Results depend on offer, margin and competition. We set targets after an audit instead of promising a fixed ROAS.'],
        ],
        'related' => [
            ['title' => 'Performance Marketing', 'url' => 'services/performance-marketing'],
            ['title' => 'AI Videos', 'url' => 'services/ai-videos'],
            ['title' => 'Shopify & Commerce', 'url' => 'services/shopify-growth'],
            ['title' => 'AI & Automation', 'url' => 'services/automation'],
        ],
    ],

    'lead-generation-service' => [
        'eyebrow' => 'Lead generation services in {city}',
        'keyword' => 'Lead Generation Services in {city}',
        'h1' => 'Lead Generation Services in {city} for Qualified Enquiries',
        'intro' => 'AKESTECH builds lead systems for {city} businesses — local SEO, paid campaigns, landing pages, instant follow-up and CRM routing that turns enquiries into conversations.',
        'answer' => 'Lead generation in {city} works when acquisition, response speed and qualification are connected. AKESTECH combines local SEO and AEO pages, Meta and Google campaigns, conversion-focused landing pages, Lead365 routing and WhatsApp automation so every enquiry is captured, scored and followed up within minutes.',
        'serviceName' => 'Lead Generation Services in {city}',
        'cta' => 'Get Lead Generation Plan',
        'accent' => 'Leads',
        'metrics' => [
            ['value' => '< 5 min', 'label' => 'Speed to first response'],
            ['value' => '100%', 'label' => 'Enquiries tracked'],
            ['value' => 'Auto', 'label' => 'Follow-up sequences'],
            ['value' => 'CPQL', 'label' => 'Reporting focus'],
        ],
        'services' => [
            ['title' => 'Local SEO and AEO Pages', 'copy' => 'Location and service pages with schema and answer-first content built to be cited by search and AI assistants.'],
            ['title' => 'Paid Lead Campaigns', 'copy' => 'Meta and Google campaigns structured around cost per qualified lead rather than raw form fills.'],
            ['title' => 'Landing Pages and Forms', 'copy' => 'Fast pages with clear offers, trust signals and short forms that reduce drop-off.'],
            ['title' => 'Lead Routing and CRM', 'copy' => 'Lead365 captures, deduplicates, scores and routes every enquiry to the right person automatically.'],
            ['title' => 'WhatsApp and SMS Follow-up', 'copy' => 'Instant automated response and nurture sequences until a salesperson picks up the conversation.'],
            ['title' => 'Attribution Reporting', 'copy' => 'Cost per lead and cost per qualified lead by campaign, channel and keyword.'],
        ],
        'faqs' => [
            ['question' => 'How do you improve lead quality in {city}?', 'answer' => 'Better targeting, qualifying questions on forms, lead scoring and fast follow-up. We report on qualified leads, not raw volume.'],
            ['question' => 'Can you integrate with our CRM?', 'answer' => 'Yes. Lead365 integrates with most CRMs, or becomes the single system your team works inside.'],
            ['question' => 'How quickly will leads start coming?', 'answer' => 'Paid campaigns can generate enquiries within days of launch. SEO and AEO pages typically compound over eight to twelve weeks.'],
            ['question' => 'Do you work with B2B and service businesses?', 'answer' => 'Yes — real estate, healthcare, education, automotive, professional services and manufacturing companies across {city}.'],
        ],
        'related' => [
            ['title' => 'Lead365 — Lead Management', 'url' => 'products/lead365'],
            ['title' => 'AI & Automation', 'url' => 'services/automation'],
            ['title' => 'Performance Marketing', 'url' => 'services/performance-marketing'],
            ['title' => 'Product Development', 'url' => 'services/technology'],
        ],
    ],

    'ai-automation-company' => [
        'eyebrow' => 'AI automation company in {city}',
        'keyword' => 'AI Automation Company in {city}',
        'h1' => 'AI Automation Company in {city} for Real Business Workflows',
        'intro' => 'AKESTECH designs and builds AI agents, WhatsApp automation, CRM intelligence and workflow automation for {city} businesses that want less manual work and more output.',
        'answer' => 'An AI automation company in {city} should identify repetitive, high-volume work and replace it with reliable systems. AKESTECH builds AI sales and support agents, WhatsApp and email journeys, CRM and ERP integrations, and automated reporting — then maintains and improves them after launch.',
        'serviceName' => 'AI Automation Services in {city}',
        'cta' => 'Get Automation Assessment',
        'accent' => 'AI',
        'metrics' => [
            ['value' => '20+', 'label' => 'Hours saved weekly'],
            ['value' => '24/7', 'label' => 'Agents working'],
            ['value' => '30', 'label' => 'Days to first system'],
            ['value' => 'ROI', 'label' => 'Ranked opportunity map'],
        ],
        'services' => [
            ['title' => 'AI Sales Agents', 'copy' => 'Qualify enquiries, answer questions and move prospects toward purchase across web, WhatsApp and email.'],
            ['title' => 'WhatsApp Automation', 'copy' => 'Conversational journeys for enquiries, orders, COD confirmation, shipping updates and reviews.'],
            ['title' => 'CRM Intelligence', 'copy' => 'Connect lead sources, teams and customer data so the next action is automatic and visible.'],
            ['title' => 'Workflow Automation', 'copy' => 'n8n, Make and custom integrations that remove manual handoffs between your tools.'],
            ['title' => 'Operations Automation', 'copy' => 'Order routing, status updates, exception handling and reconciliation without manual effort.'],
            ['title' => 'Automated Reporting', 'copy' => 'Dashboards and summaries that arrive on schedule instead of being assembled by hand.'],
        ],
        'faqs' => [
            ['question' => 'What can AI automation actually do for a {city} business?', 'answer' => 'It can answer enquiries instantly, qualify and route leads, recover abandoned carts, confirm COD orders, update customers on delivery and produce reports — all without a person starting the task.'],
            ['question' => 'How long does an automation project take?', 'answer' => 'The first system is usually live within 30 days, following an audit that ranks every opportunity by hours saved and revenue impact.'],
            ['question' => 'Will automation replace our team?', 'answer' => 'No. It removes repetitive work so your team can focus on judgement, relationships and growth. Human handover paths are built in.'],
            ['question' => 'Can you integrate with the software we already use?', 'answer' => 'Yes. We integrate with CRMs, ERPs, Shopify, WhatsApp Business API, payment gateways and analytics tools, and build custom connectors when needed.'],
        ],
        'related' => [
            ['title' => 'AI & Automation', 'url' => 'services/automation'],
            ['title' => 'Product Development', 'url' => 'services/technology'],
            ['title' => 'Lead365 — Lead Management', 'url' => 'products/lead365'],
            ['title' => 'Whatify — WhatsApp Commerce', 'url' => 'products/whatsapp-shopify'],
        ],
    ],

    'ecommerce-consultant' => [
        'eyebrow' => 'Ecommerce consultant in {city}',
        'keyword' => 'Ecommerce Consultant in {city}',
        'h1' => 'Ecommerce Consultant in {city} for Profitable Online Growth',
        'intro' => 'AKESTECH advises {city} brands on store strategy, CRO, platform selection, unit economics and marketplace growth — and then builds what the strategy recommends.',
        'answer' => 'An ecommerce consultant in {city} should turn an audit into a ranked, executable plan. AKESTECH reviews your store, funnel, tracking, catalogue and unit economics, then builds the roadmap and can execute it: Shopify development, CRO, performance marketing, marketplace management and AI automation.',
        'serviceName' => 'Ecommerce Consulting Services in {city}',
        'cta' => 'Book Ecommerce Consultation',
        'accent' => 'Strategy',
        'metrics' => [
            ['value' => 'Audit', 'label' => 'First 7 days'],
            ['value' => 'Roadmap', 'label' => 'Ranked by revenue impact'],
            ['value' => 'CRO', 'label' => 'Conversion focus'],
            ['value' => 'Build', 'label' => 'Strategy executed too'],
        ],
        'services' => [
            ['title' => 'Store and Funnel Audit', 'copy' => 'Scored review of UX, speed, merchandising, checkout, tracking and conversion leaks.'],
            ['title' => 'CRO Roadmap', 'copy' => 'Prioritised experiments on product pages, offers, cart and checkout with expected impact.'],
            ['title' => 'Platform and Stack Selection', 'copy' => 'Honest recommendation on Shopify, marketplace mix, apps and integrations for your stage.'],
            ['title' => 'Unit Economics', 'copy' => 'Contribution margin, pricing, shipping and discount analysis that shows where profit leaks.'],
            ['title' => 'Marketplace Strategy', 'copy' => 'Where to list, how to price and how to protect margin across Amazon, Flipkart and D2C.'],
            ['title' => 'Execution Support', 'copy' => 'The same team builds and runs the roadmap if you want it delivered rather than just documented.'],
        ],
        'faqs' => [
            ['question' => 'What does an ecommerce consultant do?', 'answer' => 'An ecommerce consultant audits your store and funnel, identifies where revenue and margin are leaking, and produces a prioritised roadmap across CRO, platform, marketing and operations. AKESTECH can also execute that roadmap.'],
            ['question' => 'Do you only advise, or do you build too?', 'answer' => 'Both. Many clients start with an audit and continue with our team building, marketing and operating the recommendations.'],
            ['question' => 'Is Shopify the right platform for us?', 'answer' => 'For most D2C brands, yes. We assess catalogue complexity, integrations and total cost before recommending Shopify, Shopify Plus or a marketplace-first approach.'],
            ['question' => 'How long does a consultation take?', 'answer' => 'A focused audit and roadmap is typically delivered within seven days of kickoff.'],
        ],
        'related' => [
            ['title' => 'Shopify & Commerce', 'url' => 'services/shopify-growth'],
            ['title' => 'Marketplace Management', 'url' => 'services/shopify-operations'],
            ['title' => 'Performance Marketing', 'url' => 'services/performance-marketing'],
            ['title' => 'AI & Automation', 'url' => 'services/automation'],
        ],
    ],
];

/* ============================================================
   BUILD THE PAGE MAP
   ============================================================ */
function ak_fill($value, $city, $region, $nearby) {
    if (is_array($value)) return array_map(function ($v) use ($city, $region, $nearby) { return ak_fill($v, $city, $region, $nearby); }, $value);
    return str_replace(['{city}', '{region}', '{nearby}'], [$city, $region, $nearby], $value);
}

$pages = [];
foreach ($cities as $cityKey => $c) {
    foreach ($serviceDefs as $svcKey => $def) {
        $slug = $svcKey . '-' . $c['slugbit'];
        $pages[$slug] = [
            'city'    => $c['city'],
            'region'  => $c['region'],
            'postal'  => $c['postal'],
            'areas'   => $c['areas'],
            'nearby'  => $c['nearby'],
            'keyword' => ak_fill($def['keyword'], $c['city'], $c['region'], $c['nearby']),
            'eyebrow' => ak_fill($def['eyebrow'], $c['city'], $c['region'], $c['nearby']),
            'h1'      => ak_fill($def['h1'], $c['city'], $c['region'], $c['nearby']),
            'intro'   => ak_fill($def['intro'], $c['city'], $c['region'], $c['nearby']),
            'answer'  => ak_fill($def['answer'], $c['city'], $c['region'], $c['nearby']),
            'serviceName' => ak_fill($def['serviceName'], $c['city'], $c['region'], $c['nearby']),
            'primaryCta'  => $def['cta'],
            'accent'  => $def['accent'],
            'metrics' => $def['metrics'],
            'services' => ak_fill($def['services'], $c['city'], $c['region'], $c['nearby']),
            'faqs'    => ak_fill($def['faqs'], $c['city'], $c['region'], $c['nearby']),
            'related' => $def['related'],
        ];
    }
}

/* Legacy safety: preserve the original five Lucknow slugs exactly as generated above.
   (digital-marketing-company-in-lucknow, shopify-development-company-in-lucknow,
    performance-marketing-company-in-lucknow, meta-ads-management-in-lucknow,
    lead-generation-service-in-lucknow) */

$page = $pages[$route] ?? null;

if (!$page) {
    http_response_code(404);
    $pageTitle = 'Page Not Found';
    $metaDescription = 'The page you are looking for does not exist.';
    require_once __DIR__ . '/404.php';
    return;
}

/* ---------------- SEO / AEO ---------------- */
SEO::load($route);

$canonical = url($route);
$whatsappText = urlencode('Hi AKESTECH, I found you on the ' . $page['keyword'] . ' page and would like to discuss a project.');
$contactUrl = url('contact');

$schemas = [];
$schemas[] = SEO::breadcrumbSchema([
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'Locations', 'url' => url('digital-marketing-company-in-lucknow')],
    ['name' => $page['keyword'], 'url' => $canonical],
]);
$schemas[] = SEO::localBusinessSchema($page['city'], $page['region'], $page['postal'], $page['areas']);
$schemas[] = SEO::serviceSchema($page['serviceName'], $page['answer']);
$schemas[] = SEO::faqSchema($page['faqs']);

ob_start();
?>

<!-- ============ HERO ============ -->
<section class="ak-pagehero">
  <div class="ak-ai">
    <div class="ak-ai__grid"></div>
    <div class="ak-orb ak-orb--a"></div>
    <div class="ak-orb ak-orb--b"></div>
    <div class="ak-beam"></div>
  </div>

  <div class="ak-container ak-pagehero__inner">
    <nav class="ak-crumbs" aria-label="Breadcrumb">
      <a href="<?= url('/') ?>">Home</a> <span>/</span>
      <span>Locations</span> <span>/</span>
      <span><?= htmlspecialchars($page['city']) ?></span>
    </nav>

    <p class="ak-kicker"><?= htmlspecialchars($page['eyebrow']) ?></p>
    <h1 class="ak-words"><?= htmlspecialchars($page['h1']) ?></h1>
    <p><?= htmlspecialchars($page['intro']) ?></p>

    <div class="ak-btns">
      <a href="<?= $contactUrl ?>" class="ak-btn ak-btn--dark"><?= htmlspecialchars($page['primaryCta']) ?> ↗</a>
      <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=<?= $whatsappText ?>" target="_blank" rel="noopener" class="ak-btn ak-btn--light">WhatsApp Us</a>
    </div>

    <div class="ak-metrics" style="margin-top:46px">
      <?php foreach ($page['metrics'] as $m): ?>
      <div class="ak-metric">
        <b><?= htmlspecialchars($m['value']) ?></b>
        <span><?= htmlspecialchars($m['label']) ?></span>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ AEO ANSWER ============ -->
<section class="ak-section ak-section--tight">
  <div class="ak-container">
    <div class="ak-answer ak-reveal">
      <b>Direct answer — what should you expect from <?= htmlspecialchars($page['keyword']) ?>?</b>
      <?= htmlspecialchars($page['answer']) ?>
    </div>
  </div>
</section>

<!-- ============ SERVICES ============ -->
<section class="ak-section" id="services">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">Services</div>
      <div>
        <h2 class="ak-h2"><?= htmlspecialchars($page['serviceName']) ?></h2>
        <p class="ak-lead">AEO-friendly, conversion-focused service content supported by practical execution, tracking and weekly improvement.</p>
      </div>
    </div>

    <div class="ak-grid3">
      <?php $i = 1; foreach ($page['services'] as $s): ?>
      <article class="ak-card ak-spot ak-reveal">
        <div class="ak-card__num"><?= str_pad((string)$i, 2, '0', STR_PAD_LEFT) ?></div>
        <div>
          <h3><?= htmlspecialchars($s['title']) ?></h3>
          <p><?= htmlspecialchars($s['copy']) ?></p>
        </div>
      </article>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ PROCESS ============ -->
<section class="ak-section" id="process">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">How we work</div>
      <div><h2 class="ak-h2">A clear process from audit to optimization.</h2></div>
    </div>
    <div class="ak-process">
      <div class="ak-step ak-reveal"><span>01</span><h3>Audit</h3><p>We review your current website, campaigns, tracking, content and lead quality.</p></div>
      <div class="ak-step ak-reveal"><span>02</span><h3>Plan</h3><p>We define keywords, audience segments, offers, funnel pages, tracking and success metrics.</p></div>
      <div class="ak-step ak-reveal"><span>03</span><h3>Build</h3><p>We create pages, campaigns, creatives, forms, CRM flows and automation where required.</p></div>
      <div class="ak-step ak-reveal"><span>04</span><h3>Launch</h3><p>We launch in controlled stages so performance data stays clean and useful.</p></div>
      <div class="ak-step ak-reveal"><span>05</span><h3>Optimize</h3><p>We improve budgets, content, creatives, conversion rate and lead quality every week.</p></div>
    </div>
  </div>
</section>

<!-- ============ LOCAL COVERAGE ============ -->
<section class="ak-section ak-section--tight">
  <div class="ak-container">
    <div class="ak-cta ak-reveal">
      <div>
        <div class="ak-kicker" style="color:#999;margin-bottom:20px">Local coverage</div>
        <h2 class="ak-h2" style="font-size:clamp(30px,4vw,54px)">Serving <?= htmlspecialchars($page['city']) ?> businesses with India-ready execution.</h2>
      </div>
      <div>
        <p>We support businesses across <?= htmlspecialchars(implode(', ', $page['areas'])) ?> and nearby markets <?= htmlspecialchars($page['nearby']) ?>, while building campaigns that can scale nationally.</p>
        <div class="ak-btns" style="margin-top:0">
          <a href="<?= $contactUrl ?>" class="ak-btn ak-btn--onDark">Request Free Audit ↗</a>
          <a href="tel:<?= SITE_PHONE ?>" class="ak-btn ak-btn--ghost">Call <?= SITE_PHONE ?></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ FAQ ============ -->
<section class="ak-section" id="faq" itemscope itemtype="https://schema.org/FAQPage">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">FAQ</div>
      <div><h2 class="ak-h2">People also ask about <?= htmlspecialchars($page['keyword']) ?>.</h2></div>
    </div>
    <div class="ak-rows ak-acc ak-reveal">
      <?php foreach ($page['faqs'] as $i => $faq): ?>
      <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <button class="ak-row" type="button" itemprop="name">
          <small><?= str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT) ?></small>
          <b><?= htmlspecialchars($faq['question']) ?></b>
          <span class="ak-plus">+</span>
        </button>
        <div class="ak-rowbody" itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
          <p itemprop="text"><?= nl2br(htmlspecialchars($faq['answer'])) ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ RELATED ============ -->
<section class="ak-section" id="related">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">Explore</div>
      <div><h2 class="ak-h2">Go deeper with AKESTECH.</h2></div>
    </div>
    <div class="ak-rows ak-reveal">
      <?php $i = 1; foreach ($page['related'] as $r): ?>
      <a class="ak-row" href="<?= url($r['url']) ?>">
        <small><?= str_pad((string)$i, 2, '0', STR_PAD_LEFT) ?></small>
        <b><?= htmlspecialchars($r['title']) ?></b>
        <span>↗</span>
      </a>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>

<?php
$pageContent = ob_get_clean();
include __DIR__ . '/../includes/components/layout.php';

<?php
/**
 * Industry landing pages.
 * Rendered for every /industries/{slug} route added in index.php.
 * New slugs only — no existing URL was changed.
 */
if (!class_exists('SEO')) {
    require __DIR__ . '/../index.php';
    return;
}

$route = isset($_GET['route']) ? trim($_GET['route'], '/') : '';

$process = [
    ['title' => 'Understand', 'copy' => 'We learn your market, buyer journey, margins and constraints before proposing anything.'],
    ['title' => 'Build', 'copy' => 'Commerce infrastructure, products, integrations and AI systems built for your workflows.'],
    ['title' => 'Launch', 'copy' => 'Acquisition goes live with tracking, creative and conversion-focused experiences in place.'],
    ['title' => 'Automate', 'copy' => 'Repetitive sales, support and operations work is handed to AI agents and workflows.'],
    ['title' => 'Scale', 'copy' => 'We measure, experiment and improve the whole system every single week.'],
];

$pages = [

    /* ============================================================ */
    'industries/d2c-ecommerce' => [
        'eyebrow' => 'D2C & Ecommerce',
        'h1' => 'Ecommerce growth for brands that sell direct.',
        'intro' => 'Shopify stores, marketplace operations, retention automation and performance marketing — run as one system for D2C brands from first sale to ₹5Cr a month.',
        'answer' => 'D2C and ecommerce brands need four things working together: a store that converts, marketplaces that are managed, traffic that is profitable, and retention that compounds. AKESTECH provides all four under one team, with AI automation handling cart recovery, COD confirmation, support and reporting in between.',
        'stats' => [['value' => '3.8X', 'label' => 'Typical ROAS'], ['value' => '₹4.1L', 'label' => 'Monthly revenue recovered'], ['value' => '40%', 'label' => 'RTO reduction'], ['value' => '200+', 'label' => 'Brands scaled']],
        'challenges' => [
            ['title' => 'Rising acquisition costs', 'copy' => 'Ad costs climb while creative goes stale. We rebuild the funnel and feed it with AI-generated creative at volume.'],
            ['title' => 'Cart abandonment', 'copy' => 'Most carts never convert. AI agents recover them over WhatsApp, email and SMS within minutes.'],
            ['title' => 'RTO and returns', 'copy' => 'COD fraud and failed deliveries destroy margin. Verification, prepaid nudges and fulfilment SLAs cut RTO by up to 40%.'],
            ['title' => 'Weak repeat purchase', 'copy' => 'One-time buyers keep CAC high. Lifecycle automation lifts repeat purchase and lifetime value.'],
        ],
        'services' => [
            ['title' => 'Shopify & Commerce', 'url' => url('services/shopify-growth')],
            ['title' => 'Performance Marketing', 'url' => url('services/performance-marketing')],
            ['title' => 'AI & Automation', 'url' => url('services/automation')],
            ['title' => 'Marketplace Management', 'url' => url('services/shopify-operations')],
            ['title' => 'AI Videos', 'url' => url('services/ai-videos')],
            ['title' => 'Product Development', 'url' => url('services/technology')],
        ],
        'faqs' => [
            ['question' => 'Do you work with early-stage D2C brands?', 'answer' => 'Yes. We work with brands from pre-launch through ₹5Cr+ monthly revenue, adjusting scope to what actually matters at each stage.'],
            ['question' => 'Which platforms do you support?', 'answer' => 'Primarily Shopify and Shopify Plus, plus Amazon, Flipkart and other Indian marketplaces, with integrations into your CRM, ERP, payments and logistics tools.'],
            ['question' => 'How quickly can we see results?', 'answer' => 'Audit and roadmap within seven days, first automation and campaign changes live inside 30 days, with compounding revenue impact typically between day 60 and day 90.'],
            ['question' => 'Can you work with our existing team?', 'answer' => 'Yes. We frequently plug into in-house marketing, ops or tech teams and take ownership of specific outcomes rather than everything at once.'],
        ],
    ],

    /* ============================================================ */
    'industries/healthcare' => [
        'eyebrow' => 'Healthcare & Wellness',
        'h1' => 'Growth systems for healthcare and wellness brands.',
        'intro' => 'Patient enquiries, appointment journeys, follow-ups and compliant funnels — automated end to end so your team spends time on care, not admin.',
        'answer' => 'Healthcare growth depends on trust, speed and follow-up. AKESTECH builds compliant, mobile-first patient acquisition funnels, connects enquiry sources into one system, automates appointment reminders and follow-ups over WhatsApp and email, and reports on cost per qualified enquiry rather than raw leads.',
        'stats' => [['value' => '24/7', 'label' => 'Enquiry response'], ['value' => '< 5 min', 'label' => 'Speed to first reply'], ['value' => '100%', 'label' => 'Enquiries tracked'], ['value' => '1', 'label' => 'Source of truth']],
        'challenges' => [
            ['title' => 'Missed enquiries', 'copy' => 'Calls go unanswered after hours. AI agents respond instantly across web, WhatsApp and email.'],
            ['title' => 'No-shows', 'copy' => 'Automated reminders, confirmations and rescheduling reduce costly appointment no-shows.'],
            ['title' => 'Fragmented data', 'copy' => 'Enquiries scatter across channels. Lead365 consolidates every source into one pipeline with attribution.'],
            ['title' => 'Compliance concerns', 'copy' => 'Messaging and data handling are designed with consent, audit trails and platform rules built in.'],
        ],
        'services' => [
            ['title' => 'AI & Automation', 'url' => url('services/automation')],
            ['title' => 'Lead365 — Lead Management', 'url' => url('products/lead365')],
            ['title' => 'Performance Marketing', 'url' => url('services/performance-marketing')],
            ['title' => 'Product Development', 'url' => url('services/technology')],
            ['title' => 'Whatify — WhatsApp Engagement', 'url' => url('products/whatsapp-shopify')],
        ],
        'faqs' => [
            ['question' => 'Can automation handle patient enquiries safely?', 'answer' => 'Yes. AI agents are scoped to answer FAQs, collect structured information and route to a human for anything clinical, with consent and audit trails recorded.'],
            ['question' => 'Do you work with clinics, diagnostics and wellness brands?', 'answer' => 'Yes — single-location clinics, multi-city chains, diagnostic networks, telehealth and D2C wellness brands.'],
            ['question' => 'Can you integrate with our existing software?', 'answer' => 'We integrate with most CRMs, practice management systems, EMRs and WhatsApp Business API providers, or build the connector if one does not exist.'],
            ['question' => 'How do you measure success?', 'answer' => 'Cost per qualified enquiry, booking rate, show rate and lifetime value — reported on one dashboard your team can access daily.'],
        ],
    ],

    /* ============================================================ */
    'industries/education' => [
        'eyebrow' => 'Education',
        'h1' => 'Admission growth and counsellor automation.',
        'intro' => 'Higher enquiry volume is easy. Qualified admissions are the job — we build the funnel, the automation and the reporting that separate the two.',
        'answer' => 'Education growth needs qualified enquiries, fast counsellor follow-up and visible attribution across campaigns. AKESTECH builds admission funnels and landing pages, runs paid media, routes every enquiry into Lead365 with automatic counsellor assignment, and automates WhatsApp, email and SMS nurture until a human takes over.',
        'stats' => [['value' => '1', 'label' => 'View of every enquiry'], ['value' => '< 5 min', 'label' => 'Counsellor response time'], ['value' => '100%', 'label' => 'Source attribution'], ['value' => '24/7', 'label' => 'Automated nurture']],
        'challenges' => [
            ['title' => 'Unqualified enquiry volume', 'copy' => 'More leads is not more admissions. Scoring and qualification filter noise before it reaches counsellors.'],
            ['title' => 'Slow follow-up', 'copy' => 'Enquiries go cold in hours. Automated first response happens in seconds, not the next morning.'],
            ['title' => 'Seasonal spikes', 'copy' => 'Admission season overwhelms teams. Automation absorbs the surge without extra headcount.'],
            ['title' => 'Unclear channel ROI', 'copy' => 'Cost per admission is invisible. Attribution connects spend to enrolled students, not just form fills.'],
        ],
        'services' => [
            ['title' => 'Lead365 — Admission CRM', 'url' => url('products/lead365')],
            ['title' => 'Performance Marketing', 'url' => url('services/performance-marketing')],
            ['title' => 'AI & Automation', 'url' => url('services/automation')],
            ['title' => 'Product Development', 'url' => url('services/technology')],
            ['title' => 'AI Videos', 'url' => url('services/ai-videos')],
        ],
        'faqs' => [
            ['question' => 'Do you work with schools, colleges and edtech?', 'answer' => 'Yes — K-12 schools, higher education, coaching institutes, skill academies and online course businesses.'],
            ['question' => 'Can counsellors keep working in their own tools?', 'answer' => 'Yes. Lead365 can sync to your existing CRM or become the single system, depending on what your team prefers.'],
            ['question' => 'How do you improve admission conversion?', 'answer' => 'Faster response, structured qualification, automated nurture and clear attribution — measured against enrolled students rather than raw leads.'],
            ['question' => 'Can you handle admission season volume?', 'answer' => 'Yes. Automation and routing are designed for peak load, so counsellors see a prioritised queue instead of an unmanageable inbox.'],
        ],
    ],

    /* ============================================================ */
    'industries/automotive' => [
        'eyebrow' => 'Automotive',
        'h1' => 'Dealer growth and lead automation for automotive.',
        'intro' => 'Test-drive bookings, service reminders and dealer lead routing — automated across every channel so no enquiry stalls on the showroom floor.',
        'answer' => 'Automotive buyers enquire across marketplaces, websites, social and walk-ins, then go cold if nobody responds fast. AKESTECH consolidates dealer enquiries into one system, automates instant WhatsApp and SMS response, books test drives and service slots, and runs performance marketing measured on bookings rather than leads.',
        'stats' => [['value' => '< 5 min', 'label' => 'First response time'], ['value' => '100%', 'label' => 'Enquiries captured'], ['value' => 'Auto', 'label' => 'Test-drive booking'], ['value' => '1', 'label' => 'Dealer dashboard']],
        'challenges' => [
            ['title' => 'Slow dealer response', 'copy' => 'Enquiries sit in inboxes. Instant automated response keeps buyers engaged until sales picks up.'],
            ['title' => 'Scattered lead sources', 'copy' => 'OEM portals, marketplaces and own channels do not talk. Everything routes into one pipeline.'],
            ['title' => 'Low test-drive conversion', 'copy' => 'Interest does not become bookings. Automated slot booking and reminders lift show-up rates.'],
            ['title' => 'Service retention', 'copy' => 'Customers drift after sale. Automated service reminders bring them back on schedule.'],
        ],
        'services' => [
            ['title' => 'Lead365 — Dealer Lead Management', 'url' => url('products/lead365')],
            ['title' => 'AI & Automation', 'url' => url('services/automation')],
            ['title' => 'Performance Marketing', 'url' => url('services/performance-marketing')],
            ['title' => 'Product Development', 'url' => url('services/technology')],
            ['title' => 'AI Videos', 'url' => url('services/ai-videos')],
        ],
        'faqs' => [
            ['question' => 'Do you work with OEMs, dealers and EV brands?', 'answer' => 'Yes — manufacturer campaigns, dealer networks, EV startups and automotive aftermarket and accessory brands.'],
            ['question' => 'Can you integrate with our DMS or CRM?', 'answer' => 'We integrate with most dealer management systems and CRMs, and build custom connectors where a standard one does not exist.'],
            ['question' => 'How is success measured?', 'answer' => 'Cost per test drive, booking show-up rate and cost per sale — not just cost per enquiry.'],
            ['question' => 'Can you run regional language campaigns?', 'answer' => 'Yes. AI video and WhatsApp journeys can be produced in multiple Indian languages.'],
        ],
    ],

    /* ============================================================ */
    'industries/food-and-beverage' => [
        'eyebrow' => 'Food & Beverage',
        'h1' => 'Online growth for food and beverage brands.',
        'intro' => 'From online ordering and marketplace listings to retention automation and AI content — built for the speed food businesses actually operate at.',
        'answer' => 'Food and beverage brands win on repeat purchase, speed and visibility. AKESTECH builds and optimises direct ordering experiences, manages marketplace and delivery listings, runs performance marketing, automates re-order and subscription journeys, and produces AI video content at the volume this category needs.',
        'stats' => [['value' => 'Repeat', 'label' => 'Revenue focus'], ['value' => 'AI', 'label' => 'Content at volume'], ['value' => 'Multi', 'label' => 'Marketplace ready'], ['value' => 'Fast', 'label' => 'Speed-optimised builds']],
        'challenges' => [
            ['title' => 'Low repeat purchase', 'copy' => 'One-time orders cap growth. Automated re-order, subscription and win-back journeys lift frequency.'],
            ['title' => 'Marketplace dependency', 'copy' => 'Margin disappears into commissions. We build direct channels alongside marketplace presence.'],
            ['title' => 'Content demands', 'copy' => 'Food content is constant and visual. AI video produces reels and product films at catalogue scale.'],
            ['title' => 'Operational complexity', 'copy' => 'Inventory, shelf life and delivery SLAs add friction. Automation keeps orders and stock in sync.'],
        ],
        'services' => [
            ['title' => 'Shopify & Commerce', 'url' => url('services/shopify-growth')],
            ['title' => 'Marketplace Management', 'url' => url('services/shopify-operations')],
            ['title' => 'AI & Automation', 'url' => url('services/automation')],
            ['title' => 'Performance Marketing', 'url' => url('services/performance-marketing')],
            ['title' => 'AI Videos', 'url' => url('services/ai-videos')],
        ],
        'faqs' => [
            ['question' => 'Do you work with restaurants, cloud kitchens and packaged food?', 'answer' => 'Yes — QSR and restaurant groups, cloud kitchens, packaged food and beverage D2C brands, and café chains.'],
            ['question' => 'Can you help reduce dependence on delivery aggregators?', 'answer' => 'Yes. We build and grow direct ordering on Shopify while keeping marketplace and aggregator presence optimised in parallel.'],
            ['question' => 'How do you increase repeat orders?', 'answer' => 'Lifecycle automation across WhatsApp, email and SMS — re-order reminders, subscriptions, bundles and win-back campaigns.'],
            ['question' => 'Can you produce food video content with AI?', 'answer' => 'Yes. Our AI video studio generates product films, reels and ad creatives quickly and cost-effectively, including regional languages.'],
        ],
    ],

    /* ============================================================ */
    'industries/saas-and-startups' => [
        'eyebrow' => 'SaaS & Startups',
        'h1' => 'Build the product. Then build the pipeline.',
        'intro' => 'MVP, AI features, integrations and go-to-market — delivered by one team so you are not managing four vendors and a handover document.',
        'answer' => 'Startups need shipped software and a repeatable acquisition motion at the same time. AKESTECH builds SaaS platforms, AI and LLM products, web and mobile apps and integrations, then runs performance marketing, landing pages, analytics and lifecycle automation against the product we shipped.',
        'stats' => [['value' => 'MVP', 'label' => 'To production'], ['value' => 'AI', 'label' => 'Native features'], ['value' => 'APIs', 'label' => 'Integrated'], ['value' => 'CAC', 'label' => 'Measured properly']],
        'challenges' => [
            ['title' => 'Slow shipping', 'copy' => 'Roadmaps slip between vendors. One in-house team builds, launches and iterates in short cycles.'],
            ['title' => 'No clear ICP', 'copy' => 'Messaging misses. We test positioning, offers and channels against real acquisition data.'],
            ['title' => 'Weak activation', 'copy' => 'Sign-ups do not convert. Onboarding journeys and in-product automation drive activation.'],
            ['title' => 'Unreliable analytics', 'copy' => 'You cannot improve what you cannot see. Clean event tracking and dashboards come first.'],
        ],
        'services' => [
            ['title' => 'Product Development', 'url' => url('services/technology')],
            ['title' => 'AI & Automation', 'url' => url('services/automation')],
            ['title' => 'Performance Marketing', 'url' => url('services/performance-marketing')],
            ['title' => 'Lead365 — Lead Management', 'url' => url('products/lead365')],
            ['title' => 'AI Videos', 'url' => url('services/ai-videos')],
        ],
        'faqs' => [
            ['question' => 'Can you build an MVP quickly?', 'answer' => 'Yes. We scope a focused first release and ship in short increments, with something demonstrable every two weeks.'],
            ['question' => 'Do you build AI features into existing products?', 'answer' => 'Yes — LLM features, retrieval over your own data, agents and workflow automation inside products you already run.'],
            ['question' => 'Can you also run our growth?', 'answer' => 'Yes. Performance marketing, landing pages, analytics and lifecycle automation are handled by the same team that built the product.'],
            ['question' => 'Who owns the code?', 'answer' => 'You do. Everything we build is handed over with documentation and repository access.'],
        ],
    ],

    /* ============================================================ */
    'industries/real-estate' => [
        'eyebrow' => 'Real Estate',
        'h1' => 'Site visits, not just enquiry volume.',
        'intro' => 'Project funnels, qualification and WhatsApp follow-up that turn ad spend into booked site visits and site visits into bookings.',
        'answer' => 'Real estate marketing fails when every enquiry is treated the same. AKESTECH builds project-specific landing pages, runs Meta and Google campaigns, qualifies and scores every enquiry in Lead365, automates WhatsApp and call follow-up, and reports on cost per site visit and cost per booking instead of cost per lead.',
        'stats' => [['value' => 'CPL → CPV', 'label' => 'Reporting that matters'], ['value' => '< 5 min', 'label' => 'Speed to first contact'], ['value' => '100%', 'label' => 'Enquiries tracked'], ['value' => 'Auto', 'label' => 'Site-visit reminders']],
        'challenges' => [
            ['title' => 'Unqualified enquiries', 'copy' => 'Sales teams waste hours. Automated scoring and qualification filter before handover.'],
            ['title' => 'Slow first response', 'copy' => 'Buyers enquire everywhere at once. Instant WhatsApp response keeps you in the running.'],
            ['title' => 'No-shows on site visits', 'copy' => 'Confirmed visits do not happen. Automated reminders and rescheduling lift show-up rates.'],
            ['title' => 'Long sales cycles', 'copy' => 'Deals take months. Structured nurture keeps prospects warm without manual effort.'],
        ],
        'services' => [
            ['title' => 'Performance Marketing', 'url' => url('services/performance-marketing')],
            ['title' => 'Lead365 — Lead Management', 'url' => url('products/lead365')],
            ['title' => 'AI & Automation', 'url' => url('services/automation')],
            ['title' => 'AI Videos', 'url' => url('services/ai-videos')],
            ['title' => 'Real Estate Marketing', 'url' => url('real-estate-marketing-agency')],
        ],
        'faqs' => [
            ['question' => 'Do you work with developers, brokers and proptech?', 'answer' => 'Yes — residential and commercial developers, brokerages, channel partner networks and proptech platforms.'],
            ['question' => 'How do you improve site-visit conversion?', 'answer' => 'Faster qualification, instant response, automated reminders and clear reporting on cost per visit rather than cost per lead.'],
            ['question' => 'Can you handle multiple projects at once?', 'answer' => 'Yes. Each project gets its own funnel, campaign structure and reporting, consolidated into one dashboard for leadership.'],
            ['question' => 'Do you provide project video and creative?', 'answer' => 'Yes. Our AI video studio produces walkthrough-style films, reels and regional-language creatives at scale.'],
        ],
    ],

    /* ============================================================ */
    'industries/retail-and-consumer-brands' => [
        'eyebrow' => 'Retail & Consumer Brands',
        'h1' => 'Omnichannel growth for retail and consumer brands.',
        'intro' => 'Connect stores, ecommerce and marketplaces into one operation — with the automation and creative to keep every channel moving.',
        'answer' => 'Retail and consumer brands sell across physical stores, their own website and marketplaces, often with disconnected data. AKESTECH unifies commerce and marketplace operations, builds direct-to-consumer channels, automates retention and support, and runs performance marketing and AI creative measured on contribution margin.',
        'stats' => [['value' => 'Omni', 'label' => 'Channel operations'], ['value' => '1', 'label' => 'View of inventory'], ['value' => 'AI', 'label' => 'Creative at scale'], ['value' => 'Margin', 'label' => 'First reporting']],
        'challenges' => [
            ['title' => 'Channel conflict', 'copy' => 'Marketplaces and D2C compete. Unified reporting and pricing logic protect margin across channels.'],
            ['title' => 'Disconnected inventory', 'copy' => 'Overselling and stockouts hurt trust. Inventory sync keeps every channel accurate.'],
            ['title' => 'Weak retention', 'copy' => 'Retail relationships do not carry online. Lifecycle automation rebuilds them across WhatsApp and email.'],
            ['title' => 'Creative bottlenecks', 'copy' => 'Campaigns need constant new assets. AI video removes the production bottleneck.'],
        ],
        'services' => [
            ['title' => 'Marketplace Management', 'url' => url('services/shopify-operations')],
            ['title' => 'Shopify & Commerce', 'url' => url('services/shopify-growth')],
            ['title' => 'Performance Marketing', 'url' => url('services/performance-marketing')],
            ['title' => 'AI & Automation', 'url' => url('services/automation')],
            ['title' => 'AI Videos', 'url' => url('services/ai-videos')],
        ],
        'faqs' => [
            ['question' => 'Do you work with both retail chains and consumer product brands?', 'answer' => 'Yes — multi-store retailers, franchise networks, FMCG and consumer packaged goods brands.'],
            ['question' => 'Can you unify our marketplace and D2C operations?', 'answer' => 'Yes. One view of inventory, orders, returns and margin across marketplaces and your own store is the core of our operations work.'],
            ['question' => 'How do you handle reporting?', 'answer' => 'Contribution margin by channel and campaign, reported on a dashboard rather than in spreadsheets.'],
            ['question' => 'Can you produce creative for many SKUs?', 'answer' => 'Yes. AI video and creative generation scales across large catalogues far faster than traditional production.'],
        ],
    ],
];

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
$whatsappText = urlencode('Hi AKESTECH, I want to discuss ' . $page['eyebrow'] . '.');
$contactUrl = url('contact');

$schemas = [];
$schemas[] = SEO::breadcrumbSchema([
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'Industries', 'url' => url('industries/d2c-ecommerce')],
    ['name' => $page['eyebrow'], 'url' => $canonical],
]);
$schemas[] = SEO::serviceSchema($page['eyebrow'] . ' growth services', $page['answer']);
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
      <span>Industries</span> <span>/</span>
      <span><?= htmlspecialchars($page['eyebrow']) ?></span>
    </nav>

    <p class="ak-kicker"><?= htmlspecialchars($page['eyebrow']) ?></p>
    <h1 class="ak-words"><?= htmlspecialchars($page['h1']) ?></h1>
    <p><?= htmlspecialchars($page['intro']) ?></p>

    <div class="ak-btns">
      <a href="<?= $contactUrl ?>" class="ak-btn ak-btn--dark">Talk to our team ↗</a>
      <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=<?= $whatsappText ?>" target="_blank" rel="noopener" class="ak-btn ak-btn--light">WhatsApp us</a>
    </div>

    <div class="ak-metrics" style="margin-top:46px">
      <?php foreach ($page['stats'] as $s): ?>
      <div class="ak-metric">
        <b><?= htmlspecialchars($s['value']) ?></b>
        <span><?= htmlspecialchars($s['label']) ?></span>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ AEO ANSWER ============ -->
<section class="ak-section ak-section--tight">
  <div class="ak-container">
    <div class="ak-answer ak-reveal">
      <b>Direct answer</b>
      <?= htmlspecialchars($page['answer']) ?>
    </div>
  </div>
</section>

<!-- ============ CHALLENGES ============ -->
<section class="ak-section" id="challenges">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">What we solve</div>
      <div><h2 class="ak-h2">The problems that actually hold you back.</h2></div>
    </div>
    <div class="ak-grid4">
      <?php $i = 1; foreach ($page['challenges'] as $c): ?>
      <article class="ak-card ak-spot ak-reveal">
        <div class="ak-card__num"><?= str_pad((string)$i, 2, '0', STR_PAD_LEFT) ?></div>
        <div>
          <h3><?= htmlspecialchars($c['title']) ?></h3>
          <p><?= htmlspecialchars($c['copy']) ?></p>
        </div>
      </article>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ SERVICES ============ -->
<section class="ak-section" id="services">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">How we help</div>
      <div><h2 class="ak-h2">Capabilities we deploy for you.</h2></div>
    </div>
    <div class="ak-rows ak-reveal">
      <?php $i = 1; foreach ($page['services'] as $s): ?>
      <a class="ak-row" href="<?= $s['url'] ?>">
        <small><?= str_pad((string)$i, 2, '0', STR_PAD_LEFT) ?></small>
        <b><?= htmlspecialchars($s['title']) ?></b>
        <span>↗</span>
      </a>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ PROCESS ============ -->
<section class="ak-section" id="process">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">How we work</div>
      <div><h2 class="ak-h2">One connected system, end to end.</h2></div>
    </div>
    <div class="ak-process">
      <?php $i = 1; foreach ($process as $p): ?>
      <div class="ak-step ak-reveal">
        <span><?= str_pad((string)$i, 2, '0', STR_PAD_LEFT) ?></span>
        <h3><?= htmlspecialchars($p['title']) ?></h3>
        <p><?= htmlspecialchars($p['copy']) ?></p>
      </div>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ FAQ ============ -->
<section class="ak-section" id="faq" itemscope itemtype="https://schema.org/FAQPage">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">FAQ</div>
      <div><h2 class="ak-h2">Questions about <?= htmlspecialchars($page['eyebrow']) ?>.</h2></div>
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

<!-- ============ CTA ============ -->
<section class="ak-section ak-section--tight">
  <div class="ak-container">
    <div class="ak-cta ak-reveal">
      <div>
        <div class="ak-kicker" style="color:#999;margin-bottom:20px">Next step</div>
        <h2 class="ak-h2" style="font-size:clamp(30px,4vw,54px)">Let's build your <?= htmlspecialchars(strtolower($page['eyebrow'])) ?> growth system.</h2>
      </div>
      <div>
        <p>Tell us where you are today. We'll come back within one business day with the three biggest opportunities we can see.</p>
        <div class="ak-btns" style="margin-top:0">
          <a href="<?= $contactUrl ?>" class="ak-btn ak-btn--onDark">Start a conversation ↗</a>
          <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=<?= $whatsappText ?>" target="_blank" rel="noopener" class="ak-btn ak-btn--ghost">WhatsApp us</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$pageContent = ob_get_clean();
include __DIR__ . '/../includes/components/layout.php';

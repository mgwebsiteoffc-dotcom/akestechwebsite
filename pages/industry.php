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
            ['question' => 'What does an ecommerce growth agency do?', 'answer' => 'An ecommerce growth agency plans and runs the whole revenue system around an online brand: store and conversion rate optimisation, marketplace and D2C operations, performance marketing, retention and lifecycle automation, and the tracking and reporting that ties it together. AKESTECH covers all of it, so strategy, build, acquisition and operations sit with one team instead of four vendors.'],
            ['question' => 'How do you reduce return-to-origin (RTO) rates?', 'answer' => 'RTO is fixed at three points: before the order, with clearer product pages and size or fit guidance; at confirmation, with automated COD verification by WhatsApp or IVR; and after dispatch, with proactive shipping updates. Most brands see RTO fall by roughly 40% within eight to twelve weeks of implementing all three.'],
            ['question' => 'Do you manage marketplaces as well as our own website?', 'answer' => 'Yes. We run Amazon, Flipkart, Myntra and Nykaa alongside your own store, keeping catalogue, pricing, inventory and advertising consistent across all of them. That lets you grow marketplace volume without losing margin or control of the direct customer relationship.'],
            ['question' => 'What is a good ROAS for a D2C brand in India?', 'answer' => 'Most profitable D2C brands in India operate between 3X and 4X blended ROAS, though the right number depends on gross margin, repeat rate and cash cycle. We report contribution margin and repeat purchase alongside ROAS, because a 5X campaign that only ever acquires one-time buyers is usually worse than a 3X campaign that builds repeat customers.'],
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
            ['question' => 'Is patient data handled in a compliant way?', 'answer' => 'Yes. We apply role-based access, encryption in transit and at rest, audit logs and minimal data collection to every healthcare build, and we sign NDAs and data processing terms before work starts. Automations are designed to collect only the fields a care team genuinely needs, and sensitive records stay inside your systems rather than third-party tools.'],
            ['question' => 'Can you reduce appointment no-shows?', 'answer' => 'Yes. Automated confirmations, reminders and reschedule links go out across WhatsApp, SMS and email as the appointment approaches, and a human handover path catches anyone who replies. Clinics typically see no-shows fall by 25% to 40% once reminders and easy rescheduling are in place.'],
            ['question' => 'Do you run paid ads for healthcare within platform policies?', 'answer' => 'Yes. Healthcare is a restricted category on Meta and Google, so we build campaigns around permitted objectives such as awareness, appointment enquiries and educational content, avoiding prohibited claims and personal-health targeting. Every creative is reviewed against platform policy before it goes live.'],
            ['question' => 'How long does a healthcare growth engagement take to show results?', 'answer' => 'Paid campaigns usually produce measurable enquiry movement within three to four weeks. Automation and CRM work tends to land in the first 30 to 60 days, and organic search and AEO content compounds over three to six months. We report leading indicators weekly so progress is visible before the compounding arrives.'],
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
            ['question' => 'What is admission funnel automation?', 'answer' => 'Admission funnel automation routes every enquiry from ads, website forms, WhatsApp and phone into one system, scores and assigns it to a counsellor, and runs automated nurture sequences until the student applies or enrols. Nothing is lost to a spreadsheet or an unread inbox, and counsellors work a prioritised queue instead of a raw lead list.'],
            ['question' => 'How do you track which channel produced an enrolled student?', 'answer' => 'We connect every enquiry to its source with UTM parameters, call tracking and CRM attribution, then carry that source through to application and enrolment. That lets you judge channels on cost per enrolled student rather than cost per lead, which usually changes where the next budget goes.'],
            ['question' => 'Can you run campaigns in regional languages for Tier 2 and Tier 3 cities?', 'answer' => 'Yes. We produce ad creatives, landing pages and WhatsApp journeys in Hindi and other regional languages, and localise the offer and proof points rather than just translating the words. Regional language creative consistently outperforms English-only creative for non-metro admission campaigns.'],
            ['question' => 'Can you build a student portal or learning dashboard?', 'answer' => 'Yes. Our product team builds student and counsellor portals, application tracking, payment and document collection, and reporting dashboards for academic and admissions teams. These can run standalone or integrate with the ERP or LMS you already use.'],
        ],
    ],

    /* ============================================================ */
    'industries/automotive' => [
        'eyebrow' => 'Automotive',
        'h1' => 'Dealer growth and lead automation for automotive.',
        'intro' => 'Test-drive bookings, service reminders and dealer lead routing — automated across every channel so no enquiry stalls on the showroom floor.',
        'answer' => 'Automotive buyers enquire across marketplaces, websites, social and walk-ins, then go cold if nobody responds fast. AKESTECH consolidates dealer enquiries into one system, automates instant WhatsApp and SMS response, books test drives and service slots, and runs performance marketing measured on bookings rather than leads.',
        'stats' => [['value' => '< 5 min', 'label' => 'First response time'], ['value' => '100%', 'label' => 'Enquiries captured'], ['value' => '2.5X', 'label' => 'Test-drive show-up rate'], ['value' => '1', 'label' => 'Dealer dashboard']],
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
            ['question' => 'What is dealer lead management?', 'answer' => 'Dealer lead management consolidates enquiries from OEM portals, marketplaces, your website, social and walk-ins into a single pipeline, then automates instant response, assignment to the right salesperson, test-drive booking and follow-up. It removes the gap between an enquiry arriving and somebody acting on it, which is where most automotive leads are lost.'],
            ['question' => 'Can you automate test-drive and service reminders?', 'answer' => 'Yes. Buyers get automated WhatsApp and SMS confirmations, calendar invites and reminders before a test drive, and owners get service reminders based on time, mileage or the last workshop visit. Automated reminders typically lift show-up rates substantially and bring lapsed service customers back on schedule.'],
            ['question' => 'How do you reduce test-drive no-shows?', 'answer' => 'Confirmation immediately after booking, a reminder 24 hours before, a shorter reminder on the day, and a one-tap reschedule link for anyone who cannot make it. Rescheduling is the important part: a cancelled slot that converts into a new booking is far better than a silent no-show.'],
            ['question' => 'How quickly can dealer automation go live?', 'answer' => 'A single rooftop can usually be live within two to three weeks, covering instant response, routing and test-drive reminders. A full dealer network rollout with integrations to your DMS or CRM typically takes six to ten weeks depending on how many systems need connecting.'],
        ],
    ],

    /* ============================================================ */
    'industries/food-and-beverage' => [
        'eyebrow' => 'Food & Beverage',
        'h1' => 'Online growth for food and beverage brands.',
        'intro' => 'From online ordering and marketplace listings to retention automation and AI content — built for the speed food businesses actually operate at.',
        'answer' => 'Food and beverage brands win on repeat purchase, speed and visibility. AKESTECH builds and optimises direct ordering experiences, manages marketplace and delivery listings, runs performance marketing, automates re-order and subscription journeys, and produces AI video content at the volume this category needs.',
        'stats' => [['value' => '35%', 'label' => 'Repeat purchase lift'], ['value' => '50+', 'label' => 'Content pieces monthly'], ['value' => '6+', 'label' => 'Marketplaces managed'], ['value' => '< 2s', 'label' => 'Store load time']],
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
            ['question' => 'Can you build a direct online ordering website?', 'answer' => 'Yes. We build fast mobile-first ordering experiences with menu management, modifiers, delivery and pickup logic, payment gateways and integrated tracking, so you own the customer relationship and the first-party data alongside your aggregator presence. Most brands run direct ordering in parallel with marketplaces rather than replacing them.'],
            ['question' => 'Do you manage Swiggy, Zomato and Blinkit listings?', 'answer' => 'Yes. We handle listing setup, menu and photography optimisation, item-level profitability, advertising within each platform, and reconciliation against your own channel. The goal is to grow aggregator contribution without letting commissions quietly erase the margin on every order.'],
            ['question' => 'How do you handle multi-city operations?', 'answer' => 'Central catalogue and pricing control with city-level overrides for availability, delivery zones, pricing and local promotions, plus consolidated reporting across every location. That keeps a brand operating consistently while still allowing each city to respond to its own demand patterns.'],
            ['question' => 'Can you set up subscription or re-order journeys?', 'answer' => 'Yes. We build re-order reminders timed to consumption cycles, subscription and replenishment flows, and win-back sequences for lapsed customers, delivered over WhatsApp, SMS and email. For consumable categories this is usually the single largest driver of lifetime value.'],
        ],
    ],

    /* ============================================================ */
    'industries/saas-and-startups' => [
        'eyebrow' => 'SaaS & Startups',
        'h1' => 'Build the product. Then build the pipeline.',
        'intro' => 'MVP, AI features, integrations and go-to-market — delivered by one team so you are not managing four vendors and a handover document.',
        'answer' => 'Startups need shipped software and a repeatable acquisition motion at the same time. AKESTECH builds SaaS platforms, AI and LLM products, web and mobile apps and integrations, then runs performance marketing, landing pages, analytics and lifecycle automation against the product we shipped.',
        'stats' => [['value' => '90', 'label' => 'Days to production MVP'], ['value' => '40%', 'label' => 'Faster feature delivery'], ['value' => '100+', 'label' => 'Integrations shipped'], ['value' => '30%', 'label' => 'Lower blended CAC']],
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
            ['question' => 'What is an AI-native product?', 'answer' => 'An AI-native product treats models as part of the core architecture rather than a feature added later: retrieval over your own data, agents that complete multi-step tasks, evaluation and guardrails in the development loop, and human review paths for anything consequential. We design and ship these end to end, from prototype to production.'],
            ['question' => 'How do you price and structure product development work?', 'answer' => 'Engagements normally run as a fixed-scope MVP or a monthly product team, depending on how settled the requirements are. A fixed-scope MVP suits founders who need to validate quickly; a monthly team suits companies past product-market fit who are shipping continuously. We confirm the structure and scope in writing before any work starts.'],
            ['question' => 'Can you integrate billing, authentication and analytics into our product?', 'answer' => 'Yes. We implement subscription billing and metering, single sign-on and role-based access, product analytics and event tracking, and the admin tooling your team needs to operate the product without engineering help for routine tasks.'],
            ['question' => 'Do you help with technical handover to an in-house team?', 'answer' => 'Yes. Every engagement includes documented architecture, runbooks, code walkthroughs and, where useful, support during hiring. The aim is that your own team can own and extend the product confidently rather than staying dependent on us.'],
        ],
    ],

    /* ============================================================ */
    'industries/real-estate' => [
        'eyebrow' => 'Real Estate',
        'h1' => 'Site visits, not just enquiry volume.',
        'intro' => 'Project funnels, qualification and WhatsApp follow-up that turn ad spend into booked site visits and site visits into bookings.',
        'answer' => 'Real estate marketing fails when every enquiry is treated the same. AKESTECH builds project-specific landing pages, runs Meta and Google campaigns, qualifies and scores every enquiry in Lead365, automates WhatsApp and call follow-up, and reports on cost per site visit and cost per booking instead of cost per lead.',
        'stats' => [['value' => '2.4X', 'label' => 'More qualified site visits'], ['value' => '< 5 min', 'label' => 'Speed to first contact'], ['value' => '100%', 'label' => 'Enquiries tracked'], ['value' => '40%', 'label' => 'Fewer site-visit no-shows']],
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
            ['question' => 'What cost per site visit should we expect?', 'answer' => 'It varies widely by city, ticket size and project stage, so we set a target range during the audit based on your market rather than quoting a generic figure. What matters more is reporting cost per qualified site visit and cost per booking instead of cost per lead, because cheap leads that never visit are the most common way real estate budgets get wasted.'],
            ['question' => 'Can you integrate with our CRM and channel partner portal?', 'answer' => 'Yes. We integrate with most real estate CRMs and channel partner systems, pass lead source and qualification data through to booking, and build custom connectors where a standard integration does not exist. Channel partners get the visibility they need without the developer losing control of the funnel.'],
            ['question' => 'How do you reduce site-visit no-shows?', 'answer' => 'Instant confirmation, a reminder the day before and on the morning of the visit, directions and a contact number for the salesperson, plus a one-tap reschedule option. Because a site visit costs your team real time, rescheduling a visit is far better than losing it.'],
            ['question' => 'Do you run WhatsApp nurture for real estate buyers?', 'answer' => 'Yes. Real estate decisions run long, so we build automated nurture journeys that keep buyers engaged between the first enquiry and the site visit with project details, floor plans, financing information and timely prompts to book. Every journey includes a handover to a human when a buyer replies.'],
        ],
    ],

    /* ============================================================ */
    'industries/retail-and-consumer-brands' => [
        'eyebrow' => 'Retail & Consumer Brands',
        'h1' => 'Omnichannel growth for retail and consumer brands.',
        'intro' => 'Connect stores, ecommerce and marketplaces into one operation — with the automation and creative to keep every channel moving.',
        'answer' => 'Retail and consumer brands sell across physical stores, their own website and marketplaces, often with disconnected data. AKESTECH unifies commerce and marketplace operations, builds direct-to-consumer channels, automates retention and support, and runs performance marketing and AI creative measured on contribution margin.',
        'stats' => [['value' => '6+', 'label' => 'Channels unified'], ['value' => '1', 'label' => 'View of inventory'], ['value' => '100+', 'label' => 'Creatives every month'], ['value' => '12%', 'label' => 'Average margin gain']],
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
            ['question' => 'Can you unify inventory across stores and online?', 'answer' => 'Yes. We connect POS, ERP, marketplace and D2C inventory into one stock view with sensible safety buffers per channel, so overselling stops and online visibility reflects what is actually available. This is usually the highest-value operational fix for retail brands selling across more than two channels.'],
            ['question' => 'Do you manage Amazon and Flipkart for retail brands?', 'answer' => 'Yes. We handle catalogue and listing quality, advertising, pricing and promotion calendars, Buy Box and seller metrics, and reconciliation. Marketplace management is run alongside your D2C channel so the two grow together instead of competing.'],
            ['question' => 'How long does an omnichannel setup take?', 'answer' => 'Audit and roadmap land in the first two weeks, integration and catalogue work typically takes four to eight weeks, and marketing and reporting layer on top over the following month. Most retail brands see the operational benefits well before the full reporting and automation layer is finished.'],
            ['question' => 'Can you build a retailer or distributor portal?', 'answer' => 'Yes. We build B2B ordering portals with account-specific pricing, credit limits, reorder from history, scheme and promotion logic, and dashboards for your sales team. Distributor portals usually pay for themselves by removing manual order-taking from the field team.'],
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
      <a href="<?= $contactUrl ?>" class="ak-btn ak-btn--dark">Talk to our team <?= ak_icon('arrow-up-right', 16) ?></a>
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
        <span><?= ak_icon('arrow-up-right', 16) ?></span>
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
          <a href="<?= $contactUrl ?>" class="ak-btn ak-btn--onDark">Start a conversation <?= ak_icon('arrow-up-right', 16) ?></a>
          <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=<?= $whatsappText ?>" target="_blank" rel="noopener" class="ak-btn ak-btn--ghost">WhatsApp us</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$pageContent = ob_get_clean();
include __DIR__ . '/../includes/components/layout.php';

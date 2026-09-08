<?php
/**
 * Local (city x service) landing pages.
 *
 * The city and service templates below were moved here verbatim from
 * pages/local-service.php so that both the front-end router and the admin
 * screen share one source of truth. The admin can add cities and service types
 * through /admin/?page=local-pages; those live in data/local-pages.json and are
 * merged on top of the built-ins. Nothing here removes an existing slug.
 */

if (!function_exists('lp_builtin_cities')) {
    function lp_builtin_cities() {
        return [

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
    }
}

if (!function_exists('lp_builtin_services')) {
    function lp_builtin_services() {
        return [


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
            ['value' => '6+', 'label' => 'Acquisition channels'],
            ['value' => '100%', 'label' => 'Enquiries tracked in CRM'],
            ['value' => '52', 'label' => 'Optimisation cycles a year'],
        ],
        'process' => [
            ['title' => 'Audit', 'copy' => 'We review your website, campaigns, tracking, content, competitors and the actual quality of the enquiries you receive today.'],
            ['title' => 'Local search plan', 'copy' => 'We map the searches your buyers really use and plan pages, FAQs and schema around them.'],
            ['title' => 'Build', 'copy' => 'Landing pages, tracking, forms, CRM flows and creative are built and tested before any spend increases.'],
            ['title' => 'Launch', 'copy' => 'SEO, AEO content, paid campaigns and follow-up automation go live in controlled stages.'],
            ['title' => 'Optimise', 'copy' => 'Weekly improvements to budget, content, creative, conversion rate and lead quality.'],
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
            ['question' => 'How do you handle local SEO for {city} businesses?', 'answer' => 'We optimise your Google Business Profile, build location and service pages that match how people in {city} actually search, manage citations and reviews, and add local business and FAQ schema so you appear in map results and AI answers. Local SEO is usually the cheapest long-term source of enquiries for a {city} business because the intent is already high.'],
            ['question' => 'Can you help us rank for near me searches in {city}?', 'answer' => 'Yes. Near me rankings depend on a complete and accurate Google Business Profile, consistent name, address and phone details across the web, genuine reviews, location-relevant content and mobile page speed. We fix all of those together rather than treating them as separate jobs, and report on map pack and local pack visibility monthly.'],
            ['question' => 'What reporting will we actually receive?', 'answer' => 'A monthly report that shows enquiries and revenue by channel, cost per lead and cost per qualified lead, what was tested and what changed, and what happens next. We also give you a live dashboard if you prefer to check numbers during the month. Platform dashboards are reconciled against your own CRM or order data so the figures are real.'],
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
            ['value' => '150+', 'label' => 'Stores built and scaled'],
            ['value' => '32%', 'label' => 'Average conversion lift'],
            ['value' => '< 2s', 'label' => 'Target store load time'],
            ['value' => '100%', 'label' => 'Tracking setup included'],
        ],
        'process' => [
            ['title' => 'Discovery', 'copy' => 'We map your catalogue, operations, integrations and the commercial outcomes the store has to deliver.'],
            ['title' => 'Design and build', 'copy' => 'Theme, product templates, cart and checkout built mobile-first and tested against your real catalogue.'],
            ['title' => 'Integrations', 'copy' => 'Payments, shipping, ERP, CRM and marketing tools connected and tested end to end before launch.'],
            ['title' => 'Launch', 'copy' => 'Redirects, tracking, QA and speed checks completed before traffic is switched over.'],
            ['title' => 'Optimise', 'copy' => 'Conversion testing, performance monitoring and new features shipped every month.'],
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
            ['question' => 'Do you work with {city} brands already on another platform?', 'answer' => 'Yes. We migrate stores from WooCommerce, Magento, Wix and custom builds to Shopify, carrying across products, variants, customers and order history, with redirect mapping planned before launch so existing search rankings are preserved. Migration is one of the most common projects we run for {city} brands.'],
            ['question' => 'Can you integrate Indian payment and shipping providers?', 'answer' => 'Yes. We set up Razorpay, PayU, Cashfree, Paytm and UPI, along with Shiprocket, Delhivery, Bluedart and other shipping and fulfilment partners, plus COD rules and RTO reduction flows. These integrations are configured and tested end to end before launch rather than left for the first real order.'],
            ['question' => 'Do you provide support after the store goes live?', 'answer' => 'Yes. Support ranges from a fixed post-launch warranty period to an ongoing monthly retainer covering improvements, new features, conversion testing and speed monitoring. Most {city} brands keep us on a monthly basis once the store is live because the optimisation work is where the returns compound.'],
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
            ['value' => '50+', 'label' => 'Creatives tested monthly'],
            ['value' => '100%', 'label' => 'Funnel tracked end to end'],
        ],
        'process' => [
            ['title' => 'Account and funnel audit', 'copy' => 'We review historical performance, tracking accuracy, creative, landing pages and unit economics.'],
            ['title' => 'Tracking rebuild', 'copy' => 'Server-side events, consent mode and CRM reconciliation put in place so decisions rest on accurate data.'],
            ['title' => 'Campaign launch', 'copy' => 'Meta, Google and marketplace campaigns structured by funnel stage with a defined creative testing plan.'],
            ['title' => 'Creative iteration', 'copy' => 'New variations produced and tested weekly, with budget moving towards proven winners.'],
            ['title' => 'Scale on profit', 'copy' => 'Spend scaled against contribution margin and payback period, not platform-reported ROAS alone.'],
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
            ['question' => 'Can you run campaigns targeted only to {city}?', 'answer' => 'Yes. We geo-target by city, pin code and radius, and layer interests, intent signals and remarketing audiences on top. For {city} businesses with a defined service area this usually improves cost per lead substantially, because budget stops being spent on locations you cannot serve.'],
            ['question' => 'What industries do you run ads for in {city}?', 'answer' => 'Real estate, education and coaching, healthcare and clinics, D2C and retail, automotive dealerships, and B2B and professional services. The mechanics differ by industry, but the discipline is the same: verified tracking, structured creative testing, and reporting on cost per qualified outcome rather than clicks.'],
            ['question' => 'Do you work with businesses outside {city}?', 'answer' => 'Yes. We work with clients across India and internationally, and the same tracking, creative and reporting systems apply regardless of location. The {city} specific advantage is local market understanding and geo-targeting, which matters most when your customers are concentrated in one region.'],
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
            ['value' => '3.5X', 'label' => 'Average ROAS on Meta'],
            ['value' => '50+', 'label' => 'Creatives tested monthly'],
            ['value' => '95%', 'label' => 'Server-side signal match'],
            ['value' => '30%', 'label' => 'Lower cost per purchase'],
        ],
        'process' => [
            ['title' => 'Signal audit', 'copy' => 'We check the pixel, Conversions API, event quality, audiences and catalogue health before touching budget.'],
            ['title' => 'Account restructure', 'copy' => 'Campaigns rebuilt around funnel stage, creative testing and clean measurement.'],
            ['title' => 'Creative production', 'copy' => 'Variations produced at volume, including AI video, so testing never stalls for want of assets.'],
            ['title' => 'Launch and learn', 'copy' => 'Controlled launch with clear budgets and a defined testing window per concept.'],
            ['title' => 'Scale and maintain', 'copy' => 'Winning ads scaled, creative refreshed before fatigue sets in, and reporting tied to real revenue.'],
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
            ['question' => 'Can you target ads to specific areas within {city}?', 'answer' => 'Yes. We target by pin code, radius around a location, or specific neighbourhoods, and exclude areas you cannot serve. For {city} businesses with a physical location or a defined delivery zone this is often the single biggest improvement in cost per lead, because it removes wasted impressions entirely.'],
            ['question' => 'Do you run lead ads as well as catalogue sales ads?', 'answer' => 'Yes. We run lead forms for enquiry-driven businesses, catalogue and Advantage+ sales campaigns for ecommerce, and retargeting for both. Lead ads are connected directly to your CRM or Lead365 so enquiries are followed up automatically rather than sitting in a spreadsheet.'],
            ['question' => 'Can you work with creative we already have?', 'answer' => 'Yes. We can run and optimise against your existing creative, or produce new variations with AI video and design alongside it. Most clients end up with a mix: your brand assets as the base, and a steady flow of new variations for testing so performance does not decay.'],
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
            ['value' => '3X', 'label' => 'More enquiries converted'],
            ['value' => '40%', 'label' => 'Lower cost per qualified lead'],
        ],
        'process' => [
            ['title' => 'Qualification workshop', 'copy' => 'We agree exactly what a qualified lead means for your business before any campaign starts.'],
            ['title' => 'Offer and funnel build', 'copy' => 'Landing pages, lead magnets and forms built around that definition and your buyer\'s real questions.'],
            ['title' => 'Tracking and CRM setup', 'copy' => 'Every enquiry captured, scored by source and routed automatically to the right person.'],
            ['title' => 'Instant response automation', 'copy' => 'WhatsApp, SMS and email sequences that respond in seconds and nurture until the lead is qualified.'],
            ['title' => 'Optimise for cost per sale', 'copy' => 'Reporting moves beyond cost per lead to cost per qualified lead and cost per customer.'],
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
            ['question' => 'What counts as a qualified lead?', 'answer' => 'A qualified lead matches your buying criteria: the right location, budget or company size, a genuine need, and a real intent to buy. We agree that definition with you before campaigns launch and score leads against it, so your sales team receives enquiries worth calling rather than raw form fills.'],
            ['question' => 'Can leads be contacted automatically?', 'answer' => 'Yes. Every enquiry triggers an instant WhatsApp and SMS response, is routed to the right person, and enters an automated follow-up sequence until someone replies or the lead is qualified. Speed to lead is the largest single driver of conversion, and automation makes the first response happen in seconds rather than hours.'],
            ['question' => 'Do you work with high-ticket and B2B businesses?', 'answer' => 'Yes. Longer B2B and high-ticket cycles need nurture rather than instant closing, so we build multi-step journeys combining ads, content, landing pages, CRM tracking and automated follow-up. Reporting focuses on cost per qualified lead and cost per sale, not cost per click.'],
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
            ['value' => '100+', 'label' => 'Processes automated'],
        ],
        'process' => [
            ['title' => 'Process audit', 'copy' => 'We map every manual, repetitive process in the business and rank it by hours saved and revenue impact.'],
            ['title' => 'Opportunity map', 'copy' => 'You receive a ranked build order with expected impact, effort and dependencies, in a document you own.'],
            ['title' => 'Design and build', 'copy' => 'Agents, conversation flows, integrations and dashboards built against your live stack.'],
            ['title' => 'Staged launch', 'copy' => 'Rollout in stages with guardrails, fallbacks and human handover paths for anything sensitive.'],
            ['title' => 'Tune and support', 'copy' => 'Monthly optimisation of prompts, flows and triggers based on how people actually use them.'],
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
            ['question' => 'What does an AI automation audit include?', 'answer' => 'A full map of every manual process in your business, ranked by hours saved and revenue impact, followed by a recommended build order, the tools and integrations required, and a realistic timeline. You receive the audit as a document you own, whether or not you go on to build with us.'],
            ['question' => 'Can automation handle customers in Hindi or other regional languages?', 'answer' => 'Yes. AI agents and WhatsApp journeys can be built to understand and reply in Hindi and other regional languages, which matters considerably for {city} businesses serving customers who prefer not to interact in English. Language handling is configured during design rather than added afterwards.'],
            ['question' => 'Do you provide support after automation is live?', 'answer' => 'Yes. Automations need tuning as real conversations and edge cases appear, so we offer monthly support covering prompt and flow optimisation, new integrations, monitoring and reporting. Most clients keep support on because the value of an automation improves steadily once it is being tuned against real usage.'],
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
            ['value' => '7', 'label' => 'Days to full audit'],
            ['value' => '90', 'label' => 'Day growth roadmap'],
            ['value' => '32%', 'label' => 'Average conversion lift'],
            ['value' => '25+', 'label' => 'Hours saved every week'],
        ],
        'process' => [
            ['title' => 'Business and data review', 'copy' => 'We analyse your catalogue, margins, channel mix, funnel data and the constraints your operations impose.'],
            ['title' => 'Opportunity roadmap', 'copy' => 'Every recommendation ranked by expected revenue impact, effort and dependency, in writing.'],
            ['title' => 'Priority fixes', 'copy' => 'The highest-impact changes to store, tracking, pricing and funnel are implemented first.'],
            ['title' => 'Channel and retention build', 'copy' => 'Marketplace, D2C, lifecycle and automation systems built out around the agreed roadmap.'],
            ['title' => 'Measure and iterate', 'copy' => 'Monthly reporting against the roadmap, with the plan revised as real numbers come in.'],
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
            ['question' => 'Do you work with businesses that are not on Shopify?', 'answer' => 'Yes. We advise across Shopify, WooCommerce, Magento, custom builds and marketplace-first operations. The recommendation is based on your catalogue, operations and team rather than on a preferred platform, and if Shopify is not the right answer we will say so.'],
            ['question' => 'Can you help us decide between D2C and marketplaces?', 'answer' => 'Yes. Marketplaces give volume and trust quickly but take commission and control; D2C gives margin and customer ownership but requires acquisition. Most brands end up running both with a clear split, and we model the economics of each before recommending where to put effort and budget.'],
            ['question' => 'How do you measure whether the consulting worked?', 'answer' => 'The audit ends with a written roadmap where every recommendation has an expected impact, an effort estimate and an owner, and we track delivery against that roadmap monthly. Success is measured in conversion rate, order value, repeat purchase, margin and operational hours saved, not in the number of recommendations produced.'],
        ],
        'related' => [
            ['title' => 'Shopify & Commerce', 'url' => 'services/shopify-growth'],
            ['title' => 'Marketplace Management', 'url' => 'services/shopify-operations'],
            ['title' => 'Performance Marketing', 'url' => 'services/performance-marketing'],
            ['title' => 'AI & Automation', 'url' => 'services/automation'],
        ],
    ],

        ];
    }
}

/* ------------------------------------------------------------------ */
/* Admin-created extras (data/local-pages.json)                        */
/* ------------------------------------------------------------------ */

if (!function_exists('lp_data_dir')) {
    function lp_data_dir() { return __DIR__ . '/../data'; }
    function lp_data_file() { return lp_data_dir() . '/local-pages.json'; }
}

if (!function_exists('lp_read')) {
    /** Read the admin store. Always returns a well-formed array. */
    function lp_read() {
        $file = lp_data_file();
        $default = ['cities' => [], 'services' => [], 'disabled' => []];
        if (!is_file($file)) return $default;
        $raw = @file_get_contents($file);
        if ($raw === false || $raw === '') return $default;
        $data = json_decode($raw, true);
        if (!is_array($data)) return $default;
        return array_merge($default, $data);
    }
}

if (!function_exists('lp_write')) {
    function lp_write($data) {
        $dir = lp_data_dir();
        if (!is_dir($dir)) @mkdir($dir, 0775, true);
        $json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        return @file_put_contents(lp_data_file(), $json, LOCK_EX) !== false;
    }
}

if (!function_exists('lp_cities')) {
    /** Built-in cities + cities created in the admin. */
    function lp_cities() {
        $cities = lp_builtin_cities();
        foreach ((array) (lp_read()['cities'] ?? []) as $key => $c) {
            if (is_array($c) && !empty($c['city'])) $cities[$key] = $c;
        }
        return $cities;
    }
}

if (!function_exists('lp_services')) {
    /** Built-in service templates + templates created in the admin. */
    function lp_services() {
        $svcs = lp_builtin_services();
        foreach ((array) (lp_read()['services'] ?? []) as $key => $def) {
            if (is_array($def) && !empty($def['h1'])) $svcs[$key] = $def;
        }
        return $svcs;
    }
}

if (!function_exists('lp_disabled')) {
    function lp_disabled() { return (array) (lp_read()['disabled'] ?? []); }
}

if (!function_exists('lp_slugs')) {
    /**
     * Every local page slug: {service}-{city slugbit}, minus any the admin
     * switched off. Used by the router and the sitemap.
     */
    function lp_slugs() {
        static $out = null;
        if ($out !== null) return $out;

        $disabled = array_flip(lp_disabled());
        $out = [];
        foreach (lp_cities() as $c) {
            if (empty($c['slugbit'])) continue;
            foreach (lp_services() as $key => $def) {
                $slug = $key . '-' . $c['slugbit'];
                if (isset($disabled[$slug])) continue;
                $out[$slug] = $c['city'];
            }
        }
        return $out;
    }
}

if (!function_exists('lp_slugify')) {
    function lp_slugify($value) {
        $value = strtolower(trim((string) $value));
        $value = preg_replace('/[^a-z0-9]+/', '-', $value);
        return trim($value, '-');
    }
}

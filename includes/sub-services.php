<?php
/**
 * Sub-service pages — the specific capabilities listed under each main service.
 *
 * Three groups of six:
 *   Shopify              (parent: services/shopify-growth)
 *   Performance Marketing(parent: services/performance-marketing)
 *   Marketplace          (parent: services/shopify-operations)
 *
 * Every entry supplies the same shape the shared renderer
 * (includes/components/service-page.php) expects, so each page inherits the
 * ak-* layout, the AEO direct-answer block, the process timeline and the
 * JSON-LD graph (BreadcrumbList + Service + HowTo + FAQPage) automatically.
 *
 * Slugs here are ADDITIVE ONLY — no existing route is renamed or removed.
 */

if (!function_exists('ak_sub_services')) {
    function ak_sub_services() {
        return [

/* ============================================================
   GROUP 1 — SHOPIFY   (parent: services/shopify-growth)
   ============================================================ */

'services/shopify-store-setup' => [
    'slug'  => 'shopify-store-setup',
    'route' => 'services/shopify-store-setup',
    'parentName'  => 'Shopify & Commerce',
    'parentRoute' => 'services/shopify-growth',
    'eyebrow' => 'Shopify Store Setup',
    'h1' => 'Shopify store setup that launches ready to sell.',
    'intro' => 'Complete Shopify store setup for new and growing brands: theme configuration, catalogue and collections, payments and shipping, apps, tracking and launch QA — so your store opens able to take real orders on day one.',
    'answerLabel' => 'What does Shopify store setup include?',
    'answer' => 'Shopify store setup covers everything needed to take a store from an empty account to a live, sellable website: theme selection and configuration, product catalogue and collection structure, payment gateway and shipping setup, tax and legal pages, essential apps, analytics and conversion tracking, domain and email configuration, and pre-launch quality assurance across devices. AKESTECH handles the entire sequence and hands over a store that can take real orders, report accurate numbers and be scaled from the first week.',
    'schemaName' => 'Shopify Store Setup Services',
    'stats' => [
        ['value' => '21', 'label' => 'Days to typical launch'],
        ['value' => '150+', 'label' => 'Stores launched'],
        ['value' => '100%', 'label' => 'Tracking verified pre-launch'],
        ['value' => '6', 'label' => 'QA checklists cleared'],
    ],
    'deliverables' => [
        ['title' => 'Theme Setup and Configuration', 'copy' => 'Theme installed and configured to your brand: typography, colour, homepage layout, navigation and mobile experience, with no demo content left behind.'],
        ['title' => 'Catalogue and Collections', 'copy' => 'Products, variants, pricing, collections, tags and metafields structured so filtering, search and merchandising work properly from day one.'],
        ['title' => 'Payments and Checkout', 'copy' => 'Razorpay, PayU, Stripe, PayPal, UPI and COD configured, with test transactions run end to end before the store goes live.'],
        ['title' => 'Shipping and Tax', 'copy' => 'Shipping zones, rates, delivery SLAs and GST configuration matched to how your business actually fulfils orders.'],
        ['title' => 'Apps and Integrations', 'copy' => 'Reviews, search, WhatsApp, email and analytics apps selected, installed and configured without bloating store speed.'],
        ['title' => 'Tracking and Launch QA', 'copy' => 'GA4, Meta pixel, Conversions API and Search Console verified, plus a full device, browser and checkout QA pass.'],
    ],
    'process' => [
        ['title' => 'Discovery', 'copy' => 'We map your catalogue, fulfilment model, markets and the outcomes the store has to deliver before touching a theme.'],
        ['title' => 'Structure', 'copy' => 'Navigation, collections, product templates and page hierarchy planned around how your buyers actually shop.'],
        ['title' => 'Build', 'copy' => 'Theme configured, catalogue loaded, payments, shipping and apps installed and tested against real products.'],
        ['title' => 'Verify', 'copy' => 'Tracking, checkout, email notifications, mobile experience and page speed checked against a written QA checklist.'],
        ['title' => 'Launch', 'copy' => 'Domain, DNS and redirects switched over, with monitoring in place for the first orders and any launch-day issues.'],
    ],

    'sections' => [
        [
            'kicker' => 'Scope',
            'h2' => 'What a complete setup actually covers',
            'paras' => [
                'A store that can take real orders needs more than a theme and a logo. Payments must settle correctly, shipping must quote the right price to the right pin code, taxes must apply per state, emails must fire on every order event, and analytics must record each step truthfully. Miss any one of these and the store looks finished while quietly losing money.',
                'Our setup scope covers the full commercial stack: storefront design and configuration, catalogue architecture, checkout and payments, shipping and tax, essential apps, measurement, and legal and policy pages. Every item is checked against a written launch checklist and proven with test transactions before the store goes live.',
            ],
            'bullets' => [
                ['title' => 'Theme and storefront', 'copy' => 'Configured to your brand with clean navigation, homepage sections and a mobile-first experience.'],
                ['title' => 'Catalogue architecture', 'copy' => 'Products, variants, collections, tags and metafields structured for search and filtering.'],
                ['title' => 'Checkout and payments', 'copy' => 'Razorpay, UPI, cards, netbanking, wallets and COD, each tested end to end.'],
                ['title' => 'Shipping, tax and policy', 'copy' => 'Zones, rates, GST rules, returns and shipping policies matched to your operation.'],
                ['title' => 'Measurement and apps', 'copy' => 'GA4, pixels and Search Console plus reviews, search and WhatsApp apps without bloat.'],
            ],
        ],
        [
            'kicker' => 'Fit',
            'h2' => 'Who store setup is built for',
            'paras' => [
                'Most of our launches fall into three situations: a new brand starting on Shopify, an offline business moving online for the first time, and an existing seller whose current store was never set up properly and needs a clean rebuild. Each gets the same launch discipline with a different emphasis.',
            ],
            'bullets' => [
                ['title' => 'New D2C brands', 'copy' => 'Launch with correct structure from day one instead of rebuilding after six painful months.'],
                ['title' => 'Offline businesses', 'copy' => 'Catalogue, pricing, COD and shipping translated carefully from physical retail to online.'],
                ['title' => 'Marketplace sellers', 'copy' => 'Your first owned channel, with inventory and pricing kept consistent with Amazon and Flipkart.'],
                ['title' => 'Messy rebuilds', 'copy' => 'Stores held together with apps and workarounds, rebuilt cleanly on a solid foundation.'],
            ],
        ],
        [
            'kicker' => 'Launch QA',
            'h2' => 'The launch mistakes we prevent',
            'paras' => [
                'Failed launches almost always come from the same short list of oversights. We run every store through a written QA pass covering storefront, checkout, operations and measurement, because fixing these after launch costs multiples of getting them right first.',
            ],
            'bullets' => [
                ['title' => 'Unverified tracking', 'copy' => 'Pixels and GA4 installed but never tested, making the first month of data useless.'],
                ['title' => 'Shipping misconfiguration', 'copy' => 'Wrong rates or missing zones that either overcharge customers or erase margin.'],
                ['title' => 'App bloat', 'copy' => 'Fifteen apps doing the job of five, slowing every page and breaking on every update.'],
                ['title' => 'Missing legal pages', 'copy' => 'No returns, shipping or privacy policy, which kills trust and ad account approvals.'],
                ['title' => 'Untested checkout', 'copy' => 'Payment failures, email gaps and mobile bugs discovered by the first real customer.'],
            ],
        ],
    ],
    'faqSlug' => 'shopify-store-setup',
    'faqs' => [
        ['question' => 'How long does it take to set up a Shopify store?', 'answer' => 'A straightforward store with a configured theme and an existing catalogue typically launches in two to three weeks. Larger catalogues, custom sections or integrations with an ERP or fulfilment partner extend that to four to six weeks. The timeline is confirmed in writing before work starts, and the main variable is almost always how quickly product data and brand assets arrive.'],
        ['question' => 'Do you set up payments, shipping and taxes?', 'answer' => 'Yes. We configure Indian payment gateways such as Razorpay, PayU, Cashfree and Paytm alongside international options, set up shipping zones and rates, and configure GST and tax settings. Test transactions are run in both live and test modes so the checkout is proven before real customers reach it.'],
        ['question' => 'Can you load products from a spreadsheet we already have?', 'answer' => 'Yes. We work from your existing product data in Excel, Google Sheets, CSV or an export from another platform, and we clean and structure it first: variants, SKUs, images, pricing, inventory and collections. Cleaning the catalogue before import is what prevents filtering and search problems later.'],
        ['question' => 'Will the store work properly on mobile?', 'answer' => 'Yes. Most Indian ecommerce traffic is mobile, so every store is built and tested mobile-first. We check navigation, product images, add-to-cart behaviour, checkout and page speed on real devices rather than only in a desktop browser preview.'],
        ['question' => 'Is tracking set up before the store launches?', 'answer' => 'Yes. GA4, Google Search Console, the Meta pixel and the Conversions API are installed and verified before launch, and we run test purchases to confirm events fire correctly. Launching without verified tracking is the most common and most avoidable mistake in ecommerce, because it makes the first month of data unusable.'],
        ['question' => 'Can you set up a store for a business that currently sells offline?', 'answer' => 'Yes. A large share of the stores we launch are for manufacturers, retailers and distributors moving online for the first time. That usually means extra care on catalogue structure, pricing, shipping and payment options such as COD, which behaves very differently online than it does in a physical store.'],
        ['question' => 'What do you need from us to get started?', 'answer' => 'Brand assets such as logo, fonts and colour palette; product data including images, descriptions, pricing and SKUs; your shipping and return policies; and access to any existing tools you want connected. We provide a structured checklist at kickoff so nothing blocks the build halfway through.'],
        ['question' => 'Do you provide support after the store goes live?', 'answer' => 'Yes. Every launch includes a post-launch warranty window to fix anything that surfaces, and most brands move onto a monthly retainer covering improvements, new features, conversion testing and speed monitoring once the store is trading.'],
    ],
    'ctaTitle' => 'Launch a Shopify store that is ready to sell.',
    'ctaCopy' => 'Get a free store setup scope with a confirmed timeline and a fixed quote before you commit.',
    'ctaBtn' => 'Get Store Setup Scope',
    'related' => [
        ['title' => 'Custom Theme Development', 'copy' => 'When a configured theme is not enough', 'url' => url('services/custom-theme-development')],
        ['title' => 'Shopify Migration & Integrations', 'copy' => 'Moving an existing store to Shopify', 'url' => url('services/migration-integrations')],
        ['title' => 'CRO & Store Optimization', 'copy' => 'Improve conversion after launch', 'url' => url('services/cro-store-optimization')],
        ['title' => 'Performance Marketing', 'copy' => 'Drive qualified traffic to the new store', 'url' => url('services/performance-marketing')],
    ],
],

'services/custom-theme-development' => [
    'slug'  => 'custom-theme-development',
    'route' => 'services/custom-theme-development',
    'parentName'  => 'Shopify & Commerce',
    'parentRoute' => 'services/shopify-growth',
    'eyebrow' => 'Custom Theme Development',
    'h1' => 'Custom Shopify themes built around how your buyers shop.',
    'intro' => 'Bespoke Shopify theme design and development using Online Store 2.0 — sections, metafields and Liquid built for your catalogue, your merchandising and your conversion goals rather than a template you have to work around.',
    'answerLabel' => 'What is custom Shopify theme development?',
    'answer' => 'Custom Shopify theme development is the design and build of a theme specifically for one brand, rather than configuring a marketplace template. It covers UX and interface design, Online Store 2.0 sections and blocks, metafield-driven content, Liquid templates, custom product and collection layouts, speed optimisation and accessibility. AKESTECH designs and builds the whole theme, then hands over one your team can edit without a developer for day-to-day changes.',
    'schemaName' => 'Custom Shopify Theme Development',
    'stats' => [
        ['value' => '6 wk', 'label' => 'Typical design-to-launch'],
        ['value' => '90+', 'label' => 'Lighthouse score target'],
        ['value' => '100%', 'label' => 'Sections editable by your team'],
        ['value' => '0', 'label' => 'Page-builder apps required'],
    ],
    'deliverables' => [
        ['title' => 'UX and Interface Design', 'copy' => 'Homepage, collection, product, cart and page designs built around your catalogue and buyer journey rather than a generic template layout.'],
        ['title' => 'Online Store 2.0 Sections', 'copy' => 'Reusable, configurable sections and blocks so your team can build and reorder pages without touching code.'],
        ['title' => 'Metafield Architecture', 'copy' => 'Structured content for size guides, ingredients, specifications and FAQs, editable per product from the Shopify admin.'],
        ['title' => 'Custom Product Templates', 'copy' => 'Distinct templates for bundles, subscriptions, pre-orders and high-value products that need a different buying flow.'],
        ['title' => 'Performance Engineering', 'copy' => 'Lean Liquid, deferred scripts, optimised images and fonts, and no page-builder bloat slowing the store down.'],
        ['title' => 'Accessibility and QA', 'copy' => 'Keyboard navigation, contrast, form labels and screen-reader testing, plus cross-browser and device verification.'],
    ],
    'process' => [
        ['title' => 'Research', 'copy' => 'We review your catalogue, analytics, competitors and current drop-off points to decide what the theme has to solve.'],
        ['title' => 'Design', 'copy' => 'Wireframes then high-fidelity designs for the key templates, reviewed on desktop and mobile before any build begins.'],
        ['title' => 'Build', 'copy' => 'Theme developed in Liquid with Online Store 2.0 sections, metafields and structured content your team can edit.'],
        ['title' => 'Optimise', 'copy' => 'Performance, accessibility and SEO checks run against a written checklist, with Core Web Vitals measured on mobile.'],
        ['title' => 'Handover', 'copy' => 'Editor training, documentation and a support window so your team can run the theme confidently without us.'],
    ],

    'sections' => [
        [
            'kicker' => 'Design',
            'h2' => 'Designed from your buyers, not a template',
            'paras' => [
                'Template layouts force every catalogue into the same homepage, the same product page and the same cart. That works until your buyers need something the template never considered: shade finders, bundles, subscriptions, B2B pricing or high-consideration content. Custom design starts from your catalogue and your funnel data instead.',
            ],
            'bullets' => [
                ['title' => 'UX research first', 'copy' => 'Analytics, session review and competitor teardown decide what each template must solve.'],
                ['title' => 'Conversion-led layouts', 'copy' => 'Product, collection and cart templates structured around buying objections.'],
                ['title' => 'Mobile-first design', 'copy' => 'Layouts, imagery and tap targets designed for phones before desktop.'],
                ['title' => 'Brand fidelity', 'copy' => 'Typography, colour and motion matched to your identity, not a theme demo.'],
            ],
        ],
        [
            'kicker' => 'Architecture',
            'h2' => 'Built on Online Store 2.0, built to last',
            'paras' => [
                'Every theme we ship uses Shopify\'s current architecture: JSON templates, reusable sections and blocks, and metafields for structured content. Your marketing team edits pages from the theme editor, and developers extend the theme cleanly instead of fighting page-builder output.',
            ],
            'bullets' => [
                ['title' => 'Reusable sections', 'copy' => 'Configure and reorder content without touching code or hiring a developer.'],
                ['title' => 'Metafield content', 'copy' => 'Size guides, ingredients, specs and FAQs editable per product from the admin.'],
                ['title' => 'Lean Liquid', 'copy' => 'No page-builder apps, no legacy script bloat, no render-blocking surprises.'],
                ['title' => 'Speed budget', 'copy' => 'Performance targets agreed up front and verified on real mobile devices.'],
            ],
        ],
        [
            'kicker' => 'Decision',
            'h2' => 'When custom beats a premium theme',
            'paras' => [
                'A premium theme configured well is the right answer for most young stores. Custom development earns its cost in specific situations — and we will tell you honestly when a premium theme is enough, because selling an unnecessary rebuild helps nobody.',
            ],
            'bullets' => [
                ['title' => 'Template fights', 'copy' => 'You keep paying developers to force a theme into shapes it was never built for.'],
                ['title' => 'Speed ceiling', 'copy' => 'App and theme bloat keeps Core Web Vitals red no matter what gets patched.'],
                ['title' => 'Unique merchandising', 'copy' => 'Bundles, subscriptions or configurators need templates that do not exist.'],
                ['title' => 'Scale economics', 'copy' => 'At volume, a faster, higher-converting theme pays for itself within months.'],
            ],
        ],
    ],
    'faqSlug' => 'custom-theme-development',
    'faqs' => [
        ['question' => 'Should we buy a theme or build a custom one?', 'answer' => 'A premium theme configured well is the right choice for most brands under roughly ₹1 crore in annual revenue, because it is faster and cheaper. Custom development earns its cost when your catalogue has unusual merchandising needs, when you need page speed and Core Web Vitals under tight control, or when you keep fighting a template to do something it was not designed for.'],
        ['question' => 'How long does a custom Shopify theme take?', 'answer' => 'Design and build typically runs five to seven weeks depending on how many distinct templates are needed and how quickly design feedback comes back. We work in two-week increments with something reviewable at the end of each, so you are never waiting until the end to see progress.'],
        ['question' => 'Will we be able to edit the theme ourselves?', 'answer' => 'Yes. Every theme is built with Online Store 2.0 sections and blocks, so your team can add, reorder and reconfigure content from the theme editor without a developer. Metafields make structured product content editable from the standard Shopify admin as well.'],
        ['question' => 'What is Online Store 2.0 and why does it matter?', 'answer' => 'Online Store 2.0 is Shopify\'s current theme architecture, which allows sections on every page and native metafield support. It matters because it removes the dependency on page-builder apps, which are a common cause of slow stores, and it lets your marketing team build landing pages without asking a developer.'],
        ['question' => 'Will a custom theme be fast?', 'answer' => 'Yes, and speed is a primary design constraint rather than an afterthought. We target a Lighthouse performance score in the nineties on mobile with Core Web Vitals in the green, which we achieve through lean Liquid, deferred third-party scripts, properly sized images and no page-builder bloat.'],
        ['question' => 'Can you build on our existing theme instead?', 'answer' => 'Yes. If your theme is structurally sound we can extend it with custom sections and templates rather than rebuilding from scratch, which is usually faster and cheaper. We will tell you honestly when a rebuild is the better call, and when it is not worth the cost.'],
        ['question' => 'Do the designs work on mobile?', 'answer' => 'Mobile is designed first, not adapted afterwards. Since most Indian ecommerce traffic arrives on a phone, mobile layouts, tap targets, image sizing, cart behaviour and checkout flow are all designed and tested before the desktop view is finalised.'],
        ['question' => 'Who owns the theme code?', 'answer' => 'You do. The theme, all custom code and all design files are yours, delivered through your own Shopify account and repository. There is no licensing arrangement or ongoing dependency that prevents you working with another developer later.'],
    ],
    'ctaTitle' => 'Build a theme your team can actually run.',
    'ctaCopy' => 'Get a free theme audit and a fixed scope for design and development.',
    'ctaBtn' => 'Get Theme Scope',
    'related' => [
        ['title' => 'Shopify Store Setup', 'copy' => 'Full store launch, not just the theme', 'url' => url('services/shopify-store-setup')],
        ['title' => 'Custom Shopify Development', 'copy' => 'Apps, integrations and custom features', 'url' => url('services/custom-shopify-development')],
        ['title' => 'Shopify Plus', 'copy' => 'Enterprise builds and checkout extensibility', 'url' => url('services/shopify-plus')],
        ['title' => 'CRO & Store Optimization', 'copy' => 'Test and improve what converts', 'url' => url('services/cro-store-optimization')],
    ],
],

'services/custom-shopify-development' => [
    'slug'  => 'custom-shopify-development',
    'route' => 'services/custom-shopify-development',
    'parentName'  => 'Shopify & Commerce',
    'parentRoute' => 'services/shopify-growth',
    'eyebrow' => 'Custom Shopify Development',
    'h1' => 'Custom Shopify apps, features and integrations.',
    'intro' => 'Custom Shopify development for the things no app store listing does properly: bespoke apps, checkout and cart extensions, ERP and CRM integrations, subscription and bundle logic, and middleware connecting Shopify to the rest of your business.',
    'answerLabel' => 'What is custom Shopify development?',
    'answer' => 'Custom Shopify development is the engineering work beyond theme and configuration: building private or public Shopify apps, extending cart and checkout, integrating ERP, CRM, WMS and fulfilment systems, and writing the middleware that keeps inventory, orders and customer data in sync. AKESTECH scopes, builds, documents and maintains that work, so your store can do exactly what your operation requires rather than only what off-the-shelf apps allow.',
    'schemaName' => 'Custom Shopify Development Services',
    'stats' => [
        ['value' => '100+', 'label' => 'Integrations shipped'],
        ['value' => '4 wk', 'label' => 'Typical first release'],
        ['value' => '99.9%', 'label' => 'Uptime on managed integrations'],
        ['value' => '24/7', 'label' => 'Monitoring on live systems'],
    ],
    'deliverables' => [
        ['title' => 'Custom Shopify Apps', 'copy' => 'Private or public apps built on the Shopify Admin and Storefront APIs, using Polaris for a native-feeling admin experience.'],
        ['title' => 'Cart and Checkout Extensions', 'copy' => 'Checkout UI extensions, cart transforms and Shopify Functions for custom discounts, bundles, gifting and delivery logic.'],
        ['title' => 'ERP and CRM Integration', 'copy' => 'Two-way sync of orders, inventory, customers and pricing between Shopify and your ERP, CRM or accounting system.'],
        ['title' => 'Subscription and Bundle Logic', 'copy' => 'Subscription flows, build-your-own bundles, tiered pricing and volume discounts built to match how you actually sell.'],
        ['title' => 'Middleware and Automation', 'copy' => 'Server-side services and queues that move data reliably between Shopify and third-party systems with retry and alerting.'],
        ['title' => 'Documentation and Support', 'copy' => 'Architecture notes, runbooks and ongoing maintenance so the systems keep working as your business changes.'],
    ],
    'process' => [
        ['title' => 'Scope', 'copy' => 'We map the requirement against Shopify APIs and your existing systems, and confirm what is genuinely possible and what it costs.'],
        ['title' => 'Architecture', 'copy' => 'Data model, API boundaries, authentication, error handling and failure modes designed before implementation starts.'],
        ['title' => 'Build', 'copy' => 'Development in short cycles against a staging store, with each release tested against real catalogue and order data.'],
        ['title' => 'Harden', 'copy' => 'Load testing, error monitoring, retry logic and alerting put in place so failures surface immediately rather than silently.'],
        ['title' => 'Maintain', 'copy' => 'Ongoing support covering API version upgrades, monitoring, fixes and new features as your requirements evolve.'],
    ],

    'sections' => [
        [
            'kicker' => 'Apps and extensions',
            'h2' => 'Functionality the app store cannot give you',
            'paras' => [
                'Shopify\'s app ecosystem covers the generic cases well. It breaks down on business-specific logic: custom pricing rules, unusual bundles, trade and B2B flows, internal approvals, or data that must move between Shopify and systems the app authors never heard of. That is where custom engineering starts.',
            ],
            'bullets' => [
                ['title' => 'Private Shopify apps', 'copy' => 'Built on Admin and Storefront APIs, scoped to minimum permissions, hosted on your infrastructure.'],
                ['title' => 'Checkout UI extensions', 'copy' => 'Upsells, custom fields, delivery options and payment rules inside checkout.'],
                ['title' => 'Shopify Functions', 'copy' => 'Server-side discounts, bundles and shipping logic running natively in Shopify.'],
                ['title' => 'Cart transforms', 'copy' => 'Bundle, gift and merge logic applied before the customer reaches checkout.'],
            ],
        ],
        [
            'kicker' => 'Integrations',
            'h2' => 'Shopify connected to the rest of your business',
            'paras' => [
                'A store disconnected from operations creates manual work and silent errors: inventory copied by hand, orders retyped into the ERP, dispatch updates that never reach the customer. We build the integrations and middleware that keep every system telling the same truth.',
            ],
            'bullets' => [
                ['title' => 'ERP and accounting', 'copy' => 'Two-way sync of orders, inventory, customers and pricing with retry and reconciliation.'],
                ['title' => 'CRM and marketing', 'copy' => 'Customer, order and consent data flowing to sales and lifecycle tools automatically.'],
                ['title' => 'WMS and fulfilment', 'copy' => 'Shipments, tracking and stock levels synced without spreadsheet handoffs.'],
                ['title' => 'Custom middleware', 'copy' => 'Queued, logged and monitored services where no off-the-shelf connector exists.'],
            ],
        ],
        [
            'kicker' => 'Reliability',
            'h2' => 'Engineered to keep running, not just to launch',
            'paras' => [
                'The difference between a script and a system is what happens when something fails. Every integration we ship includes error handling, retries, monitoring and alerting — plus a maintenance path for Shopify\'s API version upgrades, which silently break unmaintained integrations every year.',
            ],
            'bullets' => [
                ['title' => 'Failure handling', 'copy' => 'Retries, dead-letter queues and alerts instead of silent data loss.'],
                ['title' => 'API version tracking', 'copy' => 'Upgrades tested ahead of Shopify\'s deprecation deadlines.'],
                ['title' => 'Staging-first releases', 'copy' => 'Every change proven against real catalogue and order data before production.'],
                ['title' => 'Docs and handover', 'copy' => 'Architecture notes and runbooks your team or any future agency can follow.'],
            ],
        ],
    ],
    'faqSlug' => 'custom-shopify-development',
    'faqs' => [
        ['question' => 'When do we need custom development instead of an app?', 'answer' => 'Custom development is worth it when no existing app handles your requirement, when you are paying for several apps that overlap, when per-transaction app fees are eating your margin at scale, or when you need Shopify to talk to an internal system with no off-the-shelf connector. If a good app exists, we will recommend it instead.'],
        ['question' => 'Can you build a private Shopify app for our store?', 'answer' => 'Yes. Private apps are built against the Shopify Admin API using OAuth, hosted on infrastructure you control, and scoped to the minimum permissions required. They are the standard way to add functionality that is specific to one business without publishing to the app store.'],
        ['question' => 'Can you customise the Shopify checkout?', 'answer' => 'Checkout customisation depends on your plan. Shopify Plus unlocks checkout.liquid and Checkout UI Extensions; other plans can use Shopify Functions and cart transforms for discounts, bundles and delivery logic. We advise what is achievable on your current plan before you pay to upgrade.'],
        ['question' => 'Can you integrate Shopify with our ERP or CRM?', 'answer' => 'Yes. We build two-way integrations covering orders, inventory, customers, pricing and fulfilment status, with queueing, retry logic and reconciliation reporting. Where a standard connector exists we evaluate it first and build custom only when the integration is business-critical or unusual.'],
        ['question' => 'How long does a custom development project take?', 'answer' => 'A focused integration or a single custom feature typically ships in three to five weeks. Multi-system builds or custom apps with an admin interface run eight to twelve weeks. We deliver in two-week increments so you see working software early rather than waiting for a single large release.'],
        ['question' => 'What happens when Shopify changes its API?', 'answer' => 'Shopify deprecates API versions on a published schedule. Under a maintenance agreement we track upcoming versions, update integrations ahead of each deadline and test against the new version before switching. Without monitoring, this is the most common cause of integrations quietly breaking months after launch.'],
        ['question' => 'Do you build Shopify Hydrogen or headless storefronts?', 'answer' => 'Yes, when the use case justifies it. Headless makes sense for content-heavy brands, complex configurators or very high-traffic stores, but it adds real operational cost and removes some app compatibility. We recommend it only when the benefits clearly outweigh running a standard Liquid storefront.'],
        ['question' => 'Who owns the code and intellectual property?', 'answer' => 'You own all custom code, repositories and intellectual property from day one. We provide documentation and handover support so your own team or another agency can maintain the work if you prefer.'],
    ],
    'ctaTitle' => 'Build what the app store cannot.',
    'ctaCopy' => 'Get a free technical scope with architecture, effort and a fixed quote.',
    'ctaBtn' => 'Get Development Scope',
    'related' => [
        ['title' => 'Custom Theme Development', 'copy' => 'Design and front-end build', 'url' => url('services/custom-theme-development')],
        ['title' => 'Shopify Migration & Integrations', 'copy' => 'Platform migration and system connections', 'url' => url('services/migration-integrations')],
        ['title' => 'Shopify Plus', 'copy' => 'Enterprise and checkout extensibility', 'url' => url('services/shopify-plus')],
        ['title' => 'Product Development', 'copy' => 'Products and platforms beyond Shopify', 'url' => url('services/technology')],
    ],
],

'services/shopify-plus' => [
    'slug'  => 'shopify-plus',
    'route' => 'services/shopify-plus',
    'parentName'  => 'Shopify & Commerce',
    'parentRoute' => 'services/shopify-growth',
    'eyebrow' => 'Shopify Plus',
    'h1' => 'Shopify Plus for brands scaling past the standard plan.',
    'intro' => 'Shopify Plus migration, build and optimisation for high-volume brands: checkout extensibility, Shopify Functions, automation with Flow, multi-store and international setup, and the launch support needed to move without losing revenue.',
    'answerLabel' => 'What is Shopify Plus and who is it for?',
    'answer' => 'Shopify Plus is Shopify\'s enterprise plan, built for high-volume and fast-growing brands. It adds checkout customisation through Checkout UI Extensions, Shopify Functions for custom discount and delivery logic, higher API rate limits, Shopify Flow automation, multiple stores and markets from one organisation, and dedicated support. AKESTECH plans and executes Plus migrations, builds the customisations the plan unlocks, and manages the launch so revenue is not disrupted during the move.',
    'schemaName' => 'Shopify Plus Development Services',
    'stats' => [
        ['value' => '₹1Cr+', 'label' => 'Revenue where Plus pays off'],
        ['value' => '10X', 'label' => 'Higher API rate limits'],
        ['value' => '9', 'label' => 'Expansion stores included'],
        ['value' => '0', 'label' => 'Revenue lost during migration'],
    ],
    'deliverables' => [
        ['title' => 'Plus Migration', 'copy' => 'Plan upgrade, theme and app compatibility review, and a staged migration with redirects and tracking preserved.'],
        ['title' => 'Checkout Extensibility', 'copy' => 'Checkout UI Extensions for upsells, custom fields, delivery options, trust messaging and payment method rules.'],
        ['title' => 'Shopify Functions', 'copy' => 'Server-side discount, bundle, shipping and payment customisation that runs natively inside Shopify.'],
        ['title' => 'Flow Automation', 'copy' => 'Automated tagging, fraud review, inventory alerts, VIP segmentation and order routing without manual work.'],
        ['title' => 'Markets and Multi-Store', 'copy' => 'International pricing, currencies, domains, duties and regional catalogue rules from one organisation.'],
        ['title' => 'B2B and Wholesale', 'copy' => 'Company profiles, price lists, payment terms, net terms and a wholesale portal on the same platform as D2C.'],
    ],
    'process' => [
        ['title' => 'Assess', 'copy' => 'We model whether Plus pays for itself at your volume, and confirm which features you actually need versus what your current plan already covers.'],
        ['title' => 'Plan', 'copy' => 'Migration plan covering theme compatibility, app replacements, redirect mapping, tracking continuity and a rollback position.'],
        ['title' => 'Build', 'copy' => 'Checkout extensions, Functions, Flow automation and market configuration built and tested on a staging store.'],
        ['title' => 'Migrate', 'copy' => 'Staged cutover with redirects, tracking verification and live order monitoring during the switch.'],
        ['title' => 'Optimise', 'copy' => 'Post-launch tuning of checkout conversion, automation rules and market performance against pre-migration baselines.'],
    ],

    'sections' => [
        [
            'kicker' => 'Economics',
            'h2' => 'Knowing whether Plus pays for itself',
            'paras' => [
                'Plus is the right move for some brands and an expensive mistake for others. The honest test is arithmetic: checkout conversion gains, B2B capability, app fees replaced and automation hours saved, weighed against the plan cost. We model this with you before recommending anything.',
            ],
            'bullets' => [
                ['title' => 'Volume threshold', 'copy' => 'Usually pays off above roughly ₹1 crore annual revenue, sometimes earlier.'],
                ['title' => 'Capability test', 'copy' => 'Checkout customisation, B2B, Markets or API capacity you genuinely cannot get below Plus.'],
                ['title' => 'App-fee audit', 'copy' => 'Plus features often replace paid apps, offsetting a large share of the plan cost.'],
                ['title' => 'Honest no', 'copy' => 'If the maths does not work, we say so and tell you what to do instead.'],
            ],
        ],
        [
            'kicker' => 'Checkout',
            'h2' => 'Checkout extensibility and Functions',
            'paras' => [
                'The single biggest reason brands move to Plus is the checkout. Checkout UI Extensions and Shopify Functions turn it from a fixed page into a conversion surface: targeted upsells, delivery logic, payment rules and B2B terms, all running fast and upgrade-safe.',
            ],
            'bullets' => [
                ['title' => 'Checkout UI extensions', 'copy' => 'Custom content and logic placed natively inside checkout steps.'],
                ['title' => 'Discount functions', 'copy' => 'Volume tiers, bundles and loyalty pricing applied server-side.'],
                ['title' => 'Delivery customisation', 'copy' => 'Pickup options, date selection and shipping rules per customer or cart.'],
                ['title' => 'Payment customisation', 'copy' => 'Method visibility and renaming by market, value or customer tag.'],
            ],
        ],
        [
            'kicker' => 'Scale',
            'h2' => 'Markets, B2B and multi-store from one organisation',
            'paras' => [
                'Plus earns its keep after migration through expansion: new countries without new stores, wholesale without a second platform, and automation that removes the operational headcount growth normally requires.',
            ],
            'bullets' => [
                ['title' => 'Shopify Markets', 'copy' => 'Local currencies, pricing, duties and domains managed centrally.'],
                ['title' => 'B2B wholesale', 'copy' => 'Company profiles, price lists, payment terms and self-service ordering.'],
                ['title' => 'Expansion stores', 'copy' => 'Up to nine additional stores for markets or models needing separation.'],
                ['title' => 'Flow automation', 'copy' => 'Fraud review, VIP handling, inventory alerts and order routing on autopilot.'],
            ],
        ],
    ],
    'faqSlug' => 'shopify-plus',
    'faqs' => [
        ['question' => 'When is Shopify Plus worth the cost?', 'answer' => 'Plus generally starts paying for itself somewhere above ₹1 crore in annual revenue, or earlier if you need checkout customisation, B2B wholesale, multiple markets or API capacity that lower plans cannot provide. The clearest signal is when you are paying more in app fees, lost conversion and manual work than the plan would cost.'],
        ['question' => 'Can you migrate us to Shopify Plus without losing sales?', 'answer' => 'Yes. Migrations are staged: theme and app compatibility is resolved first, the new store is built and tested in parallel, and the cutover happens with redirect mapping, tracking verification and live monitoring. We schedule the switch for your lowest-traffic window and keep a rollback position ready.'],
        ['question' => 'What can be customised in the Shopify Plus checkout?', 'answer' => 'Through Checkout UI Extensions you can add upsells and cross-sells, custom fields, delivery and pickup options, trust badges, gift messaging and payment method rules. Shopify Functions handle server-side logic for discounts, bundles and shipping. Legacy checkout.liquid is being retired, so new builds use the extensions architecture.'],
        ['question' => 'Do you set up B2B and wholesale on Shopify Plus?', 'answer' => 'Yes. We configure company profiles, customer-specific price lists, payment terms, net terms, quantity rules and a self-service wholesale portal. Running B2B and D2C from one platform removes the duplicate inventory and reconciliation work that separate systems create.'],
        ['question' => 'Can we run multiple countries from one Shopify Plus store?', 'answer' => 'Yes. Shopify Markets handles local currencies, local pricing, duties and taxes, translated content and regional domains from a single store. Where a market needs a genuinely separate catalogue or legal entity, expansion stores can be run from the same organisation instead.'],
        ['question' => 'How long does a Shopify Plus migration take?', 'answer' => 'Most migrations run six to ten weeks depending on how much customisation is involved and how many integrations need rework. A straightforward plan upgrade with a compatible theme can be faster; a rebuild with checkout extensions, B2B and multiple markets sits at the longer end.'],
        ['question' => 'Will our apps keep working on Plus?', 'answer' => 'Almost all do, and some become unnecessary because Plus includes functionality you were paying apps for. We audit every installed app before migration, flag any that conflict or are now redundant, and replace or remove them as part of the project rather than discovering problems after cutover.'],
        ['question' => 'Do you provide ongoing support after a Plus migration?', 'answer' => 'Yes. Plus stores usually carry more custom code and automation, so ongoing support matters more than on a standard plan. We offer monthly retainers covering monitoring, API version upgrades, checkout conversion testing and new feature development.'],
    ],
    'ctaTitle' => 'Move to Shopify Plus without losing revenue.',
    'ctaCopy' => 'Get a free Plus readiness assessment with a migration plan and honest advice on timing.',
    'ctaBtn' => 'Get Plus Assessment',
    'related' => [
        ['title' => 'Shopify Migration & Integrations', 'copy' => 'Replatforming and system connections', 'url' => url('services/migration-integrations')],
        ['title' => 'Custom Shopify Development', 'copy' => 'Apps, Functions and integrations', 'url' => url('services/custom-shopify-development')],
        ['title' => 'CRO & Experimentation', 'copy' => 'Lift checkout and funnel conversion', 'url' => url('services/cro-experimentation')],
        ['title' => 'Marketplace Management', 'copy' => 'Run marketplaces alongside Plus', 'url' => url('services/shopify-operations')],
    ],
],

'services/migration-integrations' => [
    'slug'  => 'migration-integrations',
    'route' => 'services/migration-integrations',
    'parentName'  => 'Shopify & Commerce',
    'parentRoute' => 'services/shopify-growth',
    'eyebrow' => 'Migration & Integrations',
    'h1' => 'Move to Shopify without losing rankings, data or orders.',
    'intro' => 'Replatforming to Shopify from WooCommerce, Magento, Wix, BigCommerce or a custom build — with redirect mapping, catalogue and customer migration, Order history preserved, integrations rebuilt and SEO continuity planned before launch rather than patched after.',
    'answerLabel' => 'What does a Shopify migration involve?',
    'answer' => 'A Shopify migration moves products, variants, customers, order history and content from an existing platform to Shopify while preserving search rankings and revenue. It covers a full URL audit with 301 redirect mapping, catalogue and customer data migration, theme rebuild or adaptation, payment and shipping reconfiguration, integration rebuild, tracking continuity and staged launch with monitoring. AKESTECH plans the SEO work before the build, because fixing rankings after a broken migration is far harder than protecting them during one.',
    'schemaName' => 'Shopify Migration and Integration Services',
    'stats' => [
        ['value' => '150+', 'label' => 'Stores migrated'],
        ['value' => '100%', 'label' => 'URLs mapped to 301 redirects'],
        ['value' => '0', 'label' => 'Order history lost'],
        ['value' => '8 wk', 'label' => 'Typical migration timeline'],
    ],
    'deliverables' => [
        ['title' => 'URL and Redirect Mapping', 'copy' => 'Full crawl of the existing site with every indexed URL mapped to its new Shopify equivalent via 301 redirects.'],
        ['title' => 'Catalogue Migration', 'copy' => 'Products, variants, images, pricing, inventory, metafields and SEO fields migrated, cleaned and restructured for Shopify.'],
        ['title' => 'Customer and Order History', 'copy' => 'Customer accounts, addresses and historical orders migrated so service and reporting continuity is maintained.'],
        ['title' => 'Theme Rebuild or Adaptation', 'copy' => 'Existing design rebuilt natively on Shopify, or a new theme built if the old structure does not translate well.'],
        ['title' => 'Integration Rebuild', 'copy' => 'ERP, CRM, fulfilment, payment and marketing integrations rebuilt and tested against live data before cutover.'],
        ['title' => 'SEO and Tracking Continuity', 'copy' => 'Metadata, structured data, sitemap, Search Console and analytics verified before and after launch, with rankings monitored.'],
    ],
    'process' => [
        ['title' => 'Audit', 'copy' => 'We crawl the existing site, export all data, catalogue every integration and record baseline rankings and analytics.'],
        ['title' => 'Map', 'copy' => 'Every URL is mapped to a destination, and the data model is mapped from the old platform schema to Shopify.'],
        ['title' => 'Migrate', 'copy' => 'Data migrated to a staging store, validated row by row, with theme and integrations rebuilt and tested.'],
        ['title' => 'Verify', 'copy' => 'Redirects, tracking, metadata, checkout and email flows tested against a written pre-launch checklist.'],
        ['title' => 'Cutover', 'copy' => 'DNS switched during a low-traffic window, with live monitoring of orders, errors, rankings and analytics for the following days.'],
    ],

    'sections' => [
        [
            'kicker' => 'Data',
            'h2' => 'Everything that moves with you',
            'paras' => [
                'A migration is a data project wearing a design project\'s clothes. Products, variants, customers, orders, content, reviews and redirects all have to land correctly — and messy source data must be cleaned first, because migration multiplies whatever errors already exist.',
            ],
            'bullets' => [
                ['title' => 'Catalogue migration', 'copy' => 'Products, variants, images, pricing, inventory and SEO fields, cleaned first.'],
                ['title' => 'Customers and orders', 'copy' => 'Accounts, addresses and history preserved for service continuity.'],
                ['title' => 'Content and blogs', 'copy' => 'Pages and articles moved with formatting and internal links intact.'],
                ['title' => 'Reviews and loyalty', 'copy' => 'Ratings and points carried over so social proof survives the move.'],
            ],
        ],
        [
            'kicker' => 'SEO',
            'h2' => 'Rankings protected by plan, not luck',
            'paras' => [
                'Most migration SEO damage comes from three causes: URLs that change without redirects, metadata left behind, and tracking that breaks silently. We treat all three as core migration scope with pre- and post-launch verification, plus six weeks of monitoring.',
            ],
            'bullets' => [
                ['title' => 'Full URL mapping', 'copy' => 'Every indexed URL crawled and mapped to its closest Shopify equivalent.'],
                ['title' => '301 redirect discipline', 'copy' => 'Real redirects to relevant pages, never mass redirects to the homepage.'],
                ['title' => 'Metadata continuity', 'copy' => 'Titles, descriptions, structured data and sitemaps verified before and after.'],
                ['title' => 'Search Console watch', 'copy' => 'Coverage, crawl errors and ranking shifts monitored for six weeks.'],
            ],
        ],
        [
            'kicker' => 'Stack',
            'h2' => 'Your integrations, rebuilt and tested',
            'paras' => [
                'Every connection the old store relied on — ERP, CRM, fulfilment, payments, marketing — needs a Shopify-native replacement or a rebuilt integration. We inventory the full stack during audit and test each integration against live data before cutover.',
            ],
            'bullets' => [
                ['title' => 'Integration inventory', 'copy' => 'Every connector catalogued with its data flows and failure modes.'],
                ['title' => 'Native-first rebuild', 'copy' => 'Shopify equivalents adopted where they are genuinely better.'],
                ['title' => 'Custom where needed', 'copy' => 'Middleware and private apps for systems with no standard connector.'],
                ['title' => 'Pre-cutover testing', 'copy' => 'Real orders run through every integration on a staging store.'],
            ],
        ],
    ],
    'faqSlug' => 'migration-integrations',
    'faqs' => [
        ['question' => 'Which platforms can you migrate from?', 'answer' => 'WooCommerce, Magento, BigCommerce, Wix, Squarespace, OpenCart, PrestaShop and custom-built stores, as well as older Shopify stores needing a rebuild. The approach differs by platform mainly in how much data can be exported cleanly, which we confirm during the audit.'],
        ['question' => 'Will we lose our Google rankings?', 'answer' => 'Some ranking fluctuation is normal after any replatform, but a properly planned migration protects most of it. The critical work is mapping every indexed URL to its closest equivalent with a 301 redirect, preserving metadata and structured data, and monitoring Search Console closely for the first six weeks. We plan this before the build rather than reacting afterwards.'],
        ['question' => 'Can you migrate our order history and customer accounts?', 'answer' => 'Yes. Historical orders, customer records and addresses can be migrated so your team keeps full service history and reporting continuity. Customer passwords cannot be moved for security reasons, so customers reset them once via an automated email, which we write and schedule as part of the launch.'],
        ['question' => 'How long does a migration take?', 'answer' => 'Most migrations run six to ten weeks. A small catalogue with a compatible design sits at the shorter end; large catalogues, heavy customisation or many integrations push towards the longer end. The biggest variable is usually how quickly product data can be cleaned and confirmed.'],
        ['question' => 'What happens to our existing integrations?', 'answer' => 'Every integration is inventoried during the audit and either rebuilt, replaced with a Shopify-native equivalent, or retired if it is no longer needed. Integrations are tested against real data on a staging store before cutover, so nothing is discovered broken on launch day.'],
        ['question' => 'Can you migrate without any downtime?', 'answer' => 'We minimise downtime rather than promise zero, because DNS propagation always takes some time. The new store is built and fully tested in parallel, then the switch happens during your lowest-traffic window with monitoring in place. For most stores the practical interruption is a few minutes.'],
        ['question' => 'How do you handle products that no longer exist?', 'answer' => 'Discontinued products are redirected to the closest relevant category or a similar product rather than to the homepage, which preserves as much link equity and user intent as possible. Products removed with no sensible equivalent are allowed to 404 deliberately rather than being mass-redirected, which Google treats as a soft-404 problem.'],
        ['question' => 'Do you monitor rankings after launch?', 'answer' => 'Yes. We monitor rankings, Search Console coverage, crawl errors, analytics and conversion for at least six weeks after launch, and fix redirect chains, missing pages and tracking gaps as they surface. This post-launch window is where most migration damage is either caught or missed.'],
    ],
    'ctaTitle' => 'Replatform without losing what you have built.',
    'ctaCopy' => 'Get a free migration audit with redirect mapping, effort and a fixed timeline.',
    'ctaBtn' => 'Get Migration Plan',
    'related' => [
        ['title' => 'Shopify Store Setup', 'copy' => 'Launching fresh rather than migrating', 'url' => url('services/shopify-store-setup')],
        ['title' => 'Custom Shopify Development', 'copy' => 'Rebuild integrations on Shopify', 'url' => url('services/custom-shopify-development')],
        ['title' => 'Shopify Plus', 'copy' => 'Enterprise replatforming', 'url' => url('services/shopify-plus')],
        ['title' => 'Tracking & Attribution', 'copy' => 'Keep measurement intact through the move', 'url' => url('services/tracking-attribution')],
    ],
],

'services/cro-store-optimization' => [
    'slug'  => 'cro-store-optimization',
    'route' => 'services/cro-store-optimization',
    'parentName'  => 'Shopify & Commerce',
    'parentRoute' => 'services/shopify-growth',
    'eyebrow' => 'CRO & Store Optimization',
    'h1' => 'Turn existing store traffic into more orders.',
    'intro' => 'Conversion rate optimisation for Shopify stores: funnel and analytics diagnosis, heatmaps and session review, structured A/B testing, checkout and cart improvements, page speed work and merchandising changes — prioritised by expected revenue impact.',
    'answerLabel' => 'What is Shopify conversion rate optimisation?',
    'answer' => 'Shopify conversion rate optimisation is the ongoing process of increasing the percentage of visitors who buy, without increasing traffic spend. It combines funnel and analytics analysis, session recordings and heatmaps, structured A/B testing of product pages, cart and checkout, page speed improvements, merchandising and trust-signal changes, and prioritisation by expected revenue impact. AKESTECH runs CRO as a continuous monthly programme with a testing roadmap, not a one-off audit.',
    'schemaName' => 'Shopify Conversion Rate Optimisation Services',
    'stats' => [
        ['value' => '32%', 'label' => 'Average conversion lift'],
        ['value' => '4', 'label' => 'Tests shipped per month'],
        ['value' => '90+', 'label' => 'Lighthouse score target'],
        ['value' => '< 2s', 'label' => 'Largest contentful paint target'],
    ],
    'deliverables' => [
        ['title' => 'Funnel Diagnosis', 'copy' => 'Analytics, heatmaps and session recordings reviewed to find exactly where and why buyers drop off.'],
        ['title' => 'Testing Roadmap', 'copy' => 'Every hypothesis ranked by expected revenue impact, confidence and effort, so testing effort goes to the highest-value changes first.'],
        ['title' => 'A/B Test Programme', 'copy' => 'Structured experiments on product pages, cart, checkout, offers and pricing presentation, run to statistical significance.'],
        ['title' => 'Checkout Optimisation', 'copy' => 'Checkout field reduction, express payment options, trust signals, shipping clarity and error handling improvements.'],
        ['title' => 'Speed Optimisation', 'copy' => 'Core Web Vitals work on images, scripts, fonts and app bloat, measured on real mobile devices.'],
        ['title' => 'Merchandising and Trust', 'copy' => 'Reviews, urgency, social proof, returns clarity, size guidance and product page structure that answer objections before they arise.'],
    ],
    'process' => [
        ['title' => 'Measure', 'copy' => 'We establish a clean baseline: funnel drop-off by device and step, page speed, and current conversion and AOV figures.'],
        ['title' => 'Diagnose', 'copy' => 'Session recordings, heatmaps, analytics and checkout data are reviewed to locate the specific causes of drop-off.'],
        ['title' => 'Prioritise', 'copy' => 'Findings become a ranked testing roadmap ordered by expected revenue impact rather than how easy a change is.'],
        ['title' => 'Test', 'copy' => 'Experiments are designed, implemented and run to statistical significance, with losing variants recorded as learning.'],
        ['title' => 'Compound', 'copy' => 'Winners are shipped permanently, and the next round of tests builds on what the data revealed.'],
    ],

    'sections' => [
        [
            'kicker' => 'Diagnosis',
            'h2' => 'Finding where your store leaks revenue',
            'paras' => [
                'Conversion problems hide in specific places: the collection page nobody scrolls, the size selector that confuses, the shipping surprise at checkout, the trust gap on high-value products. We locate them with data — funnels, heatmaps and session recordings — before changing anything.',
            ],
            'bullets' => [
                ['title' => 'Funnel analytics', 'copy' => 'Drop-off measured by device, step and traffic source to find the real leaks.'],
                ['title' => 'Session review', 'copy' => 'Watching real shoppers struggle beats guessing from dashboards.'],
                ['title' => 'Checkout forensics', 'copy' => 'Field-level analysis of where carts turn into exits.'],
                ['title' => 'Baseline discipline', 'copy' => 'Clean before-and-after numbers so improvements are provable, not claimed.'],
            ],
        ],
        [
            'kicker' => 'Testing',
            'h2' => 'A testing program, not random changes',
            'paras' => [
                'One-off tweaks based on opinion produce one-off results. A ranked testing roadmap — every hypothesis scored on impact, confidence and effort — compounds month after month, and the results library means lessons survive team changes.',
            ],
            'bullets' => [
                ['title' => 'Ranked roadmap', 'copy' => 'Testing effort aimed at the highest expected revenue first.'],
                ['title' => 'Statistical rigor', 'copy' => 'Sample sizes calculated before launch, no early calls on partial data.'],
                ['title' => 'Offer tests', 'copy' => 'Bundles, thresholds and guarantees, which move revenue more than button colors.'],
                ['title' => 'Documented learning', 'copy' => 'Winners shipped permanently, losers recorded so they stay dead.'],
            ],
        ],
        [
            'kicker' => 'Foundations',
            'h2' => 'Speed and trust: the multipliers',
            'paras' => [
                'Testing cannot save a store that loads in six seconds or looks untrustworthy at checkout. Speed optimization and trust architecture run alongside experiments, because they multiply the return of every test that follows.',
            ],
            'bullets' => [
                ['title' => 'Core Web Vitals', 'copy' => 'Image, script and app-bloat work measured on real mobile devices.'],
                ['title' => 'Checkout trust', 'copy' => 'Express payments, shipping clarity, guarantees and error handling.'],
                ['title' => 'Merchandising', 'copy' => 'Reviews, urgency, social proof and sizing placed where objections form.'],
                ['title' => 'AOV mechanics', 'copy' => 'Bundles, thresholds and post-purchase offers lifting order value per test.'],
            ],
        ],
    ],
    'faqSlug' => 'cro-store-optimization',
    'faqs' => [
        ['question' => 'How much can conversion rate realistically improve?', 'answer' => 'Most stores see a 20% to 40% relative improvement over six to twelve months of sustained testing, though it depends heavily on how much optimisation has already been done. A store that has never been tested has more obvious wins available than one already running a mature programme.'],
        ['question' => 'How is this different from the CRO & Experimentation service?', 'answer' => 'This service is specific to Shopify stores and covers store-side conversion: product pages, cart, checkout, merchandising and platform speed. CRO & Experimentation covers the full marketing funnel including landing pages, lead forms and ad-to-page experience across every channel, not just the store itself.'],
        ['question' => 'Do you run actual A/B tests or just make changes?', 'answer' => 'We run structured A/B tests to statistical significance wherever traffic allows, and we record losing tests as well as winners. Where a store\'s traffic is too low for reliable testing, we say so and use sequential high-confidence improvements plus qualitative research instead of reporting meaningless results.'],
        ['question' => 'What if our traffic is too low for A/B testing?', 'answer' => 'Below roughly a few thousand monthly sessions per variant, most A/B tests cannot reach significance in a reasonable time. In that case we prioritise high-confidence best-practice fixes, use session recordings and user testing to find obvious friction, and test bigger changes that produce larger effects rather than subtle ones.'],
        ['question' => 'How does page speed affect conversion?', 'answer' => 'Materially, particularly on mobile. Stores loading in under two seconds convert substantially better than those taking five or more, and the effect compounds with ad spend because slower pages waste the traffic you have already paid for. Speed work is usually among the highest-return items on a CRO roadmap.'],
        ['question' => 'How long before we see results?', 'answer' => 'Quick wins such as checkout friction, trust signals and shipping clarity often produce movement within the first month. Compound gains from a structured testing programme build over three to six months as winners accumulate and each round of tests is informed by the last.'],
        ['question' => 'Do you need access to our store and analytics?', 'answer' => 'Yes. We need admin access to the store or a development store, plus access to analytics and ideally heatmap and session recording tools. Everything is handled under NDA, and access can be scoped and revoked at any point.'],
        ['question' => 'Will CRO changes break our tracking or theme?', 'answer' => 'No. Changes are implemented on a development store or via theme versioning, tested before release, and documented. We never test directly on your live theme, and every change can be reverted if it underperforms.'],
    ],
    'ctaTitle' => 'Stop paying for traffic that does not convert.',
    'ctaCopy' => 'Get a free funnel teardown with your top drop-off points and the highest-value fixes.',
    'ctaBtn' => 'Get Funnel Teardown',
    'related' => [
        ['title' => 'CRO & Experimentation', 'copy' => 'Test the whole funnel, not just the store', 'url' => url('services/cro-experimentation')],
        ['title' => 'Custom Theme Development', 'copy' => 'Rebuild pages that cannot be fixed with tests', 'url' => url('services/custom-theme-development')],
        ['title' => 'Landing Pages & Funnels', 'copy' => 'Improve the path before the store', 'url' => url('services/landing-pages-funnels')],
        ['title' => 'Performance Marketing', 'copy' => 'Feed the store better traffic', 'url' => url('services/performance-marketing')],
    ],
],

/* ============================================================
   GROUP 2 — PERFORMANCE MARKETING  (parent: services/performance-marketing)
   ============================================================ */

'services/meta-google-ads' => [
    'slug'  => 'meta-google-ads',
    'route' => 'services/meta-google-ads',
    'parentName'  => 'Performance Marketing',
    'parentRoute' => 'services/performance-marketing',
    'eyebrow' => 'Meta & Google Ads',
    'h1' => 'Meta and Google ads managed as one profitable funnel.',
    'intro' => 'Full-funnel paid media management across Meta, Google Search, Shopping, YouTube and Display — structured by intent stage, with verified server-side tracking, disciplined creative testing and reporting measured on contribution margin rather than platform ROAS.',
    'answerLabel' => 'What does Meta and Google ads management include?',
    'answer' => 'Meta and Google ads management covers account structure and campaign architecture, keyword and audience research, ad creative briefing and testing, bidding and budget management, landing page alignment, server-side conversion tracking, and reporting tied to real revenue. AKESTECH runs both platforms as one funnel so they stop competing for the same conversion, and reports contribution margin alongside ROAS so you can see what the numbers are actually worth.',
    'schemaName' => 'Meta and Google Ads Management Services',
    'stats' => [
        ['value' => '₹50Cr+', 'label' => 'Ad spend managed'],
        ['value' => '3X+', 'label' => 'Average blended ROAS'],
        ['value' => '50+', 'label' => 'Creatives tested monthly'],
        ['value' => '95%', 'label' => 'Server-side signal match'],
    ],
    'deliverables' => [
        ['title' => 'Account Architecture', 'copy' => 'Campaigns structured by funnel stage and intent, with clean naming, budget controls and no internal competition between campaigns.'],
        ['title' => 'Keyword and Audience Research', 'copy' => 'Search term mining, competitor gap analysis, audience segmentation and negative keyword discipline that stops wasted spend.'],
        ['title' => 'Creative Testing System', 'copy' => 'A steady pipeline of new hooks, formats and variations, tested on a schedule rather than refreshed when performance collapses.'],
        ['title' => 'Bidding and Budget Control', 'copy' => 'Bid strategy, budget pacing and scaling rules tied to contribution margin and payback period, reviewed weekly.'],
        ['title' => 'Landing Page Alignment', 'copy' => 'Ad-to-page message match, page speed and conversion paths reviewed so paid traffic lands somewhere that can convert.'],
        ['title' => 'Server-Side Tracking', 'copy' => 'Conversions API, Google server-side tagging and CRM reconciliation so decisions rest on verified data, not modelled guesses.'],
    ],
    'process' => [
        ['title' => 'Audit', 'copy' => 'We review historical performance, account structure, tracking accuracy, creative, landing pages and unit economics.'],
        ['title' => 'Fix Tracking', 'copy' => 'Server-side events, consent mode and CRM reconciliation implemented before budget decisions are made on the numbers.'],
        ['title' => 'Restructure', 'copy' => 'Campaigns rebuilt around funnel stage with clean measurement, sensible budgets and a defined learning phase.'],
        ['title' => 'Test', 'copy' => 'Creative and audience variations shipped and evaluated weekly, with budget moving deliberately towards proven winners.'],
        ['title' => 'Scale', 'copy' => 'Spend increased against contribution margin and payback, with guardrails that pull back if efficiency degrades.'],
    ],

    'sections' => [
        [
            'kicker' => 'Structure',
            'h2' => 'One funnel across both platforms',
            'paras' => [
                'Meta and Google usually get managed as separate budgets competing for the same conversion, which double-counts results and misallocates spend. We architect them as one funnel: demand creation on Meta and YouTube, demand capture on Search and Shopping, with clean measurement between them.',
            ],
            'bullets' => [
                ['title' => 'Funnel-stage builds', 'copy' => 'Prospecting, consideration and conversion separated with distinct KPIs.'],
                ['title' => 'Intent-matched spend', 'copy' => 'Search captures existing demand; social creates it where none exists.'],
                ['title' => 'Budget guardrails', 'copy' => 'Scaling rules tied to payback and margin, not platform suggestions.'],
                ['title' => 'No double counting', 'copy' => 'Deduped reporting so a sale is credited once, truthfully.'],
            ],
        ],
        [
            'kicker' => 'Creative',
            'h2' => 'Creative volume is the algorithm now',
            'paras' => [
                'On modern Meta, targeting is broad and creative does the targeting. Accounts stall when creative refreshes quarterly; they scale when new hooks ship weekly. Our in-house production pipeline keeps testing velocity high without agency-style production costs.',
            ],
            'bullets' => [
                ['title' => 'Weekly concepts', 'copy' => 'New hooks and angles shipped on schedule, not when performance collapses.'],
                ['title' => 'AI-accelerated volume', 'copy' => 'AI UGC and editing multiply output per concept at lower cost.'],
                ['title' => 'Hook-first scripts', 'copy' => 'The first three seconds written deliberately for sound-off mobile.'],
                ['title' => 'Fatigue monitoring', 'copy' => 'Frequency and CTR decay tracked so winners rotate before they die.'],
            ],
        ],
        [
            'kicker' => 'Measurement',
            'h2' => 'Decisions on margin, not platform ROAS',
            'paras' => [
                'Platform-reported ROAS flatters whoever reports it. We reconcile against your orders and CRM, report contribution margin after fees, shipping and returns, and feed verified conversions back so bidding optimizes toward profit.',
            ],
            'bullets' => [
                ['title' => 'Server-side signal', 'copy' => 'Conversions API and server tagging surviving iOS and ad blockers.'],
                ['title' => 'CRM reconciliation', 'copy' => 'Platform claims checked against real revenue every month.'],
                ['title' => 'Margin reporting', 'copy' => 'ROAS shown alongside what the sale was actually worth.'],
                ['title' => 'Offline imports', 'copy' => 'Qualified revenue fed back so algorithms learn from profit, not form fills.'],
            ],
        ],
    ],
    'faqSlug' => 'meta-google-ads',
    'faqs' => [
        ['question' => 'How much ad budget do we need to start?', 'answer' => 'Most brands need ₹1 lakh to ₹3 lakh per month per platform to generate enough conversion data for meaningful optimisation. Below that, platforms struggle to exit the learning phase and results stay unstable. If your budget is smaller, we usually recommend concentrating it on one platform rather than splitting it thinly across several.'],
        ['question' => 'How quickly will we see results?', 'answer' => 'Initial data appears within days and directional signal within two weeks, but reliable optimisation needs four to eight weeks. Accounts that are restructured rather than started fresh often improve sooner, because historical data shortens the learning period.'],
        ['question' => 'Which is better for us, Meta or Google?', 'answer' => 'It depends on whether demand already exists for what you sell. Google captures existing intent and works well for products people actively search for, while Meta creates demand and suits products with visual or emotional appeal. Most established brands need both, weighted by where their marginal return is highest.'],
        ['question' => 'Do we keep ownership of our ad accounts and data?', 'answer' => 'Yes, always. Accounts are created and owned by your business, and you keep full access to campaigns, audiences, creative and historical data. We work inside your accounts rather than renting you access to ours, so nothing is lost if you change agency.'],
        ['question' => 'How do you report on performance?', 'answer' => 'Monthly reporting covers spend, revenue, ROAS, contribution margin, cost per acquisition and what was tested and learned, reconciled against your own order or CRM data. Platform-reported numbers are shown separately from verified ones, because the two often disagree significantly.'],
        ['question' => 'Do you produce the ad creatives?', 'answer' => 'Yes. Creative is produced in-house, including AI-generated video and static variations, and volume is the point: most accounts perform better with a steady flow of new angles than with occasional polished campaigns.'],
        ['question' => 'Can you fix a broken pixel or tracking setup?', 'answer' => 'Yes, and this is often the first thing we do. We implement server-side tracking through the Meta Conversions API and Google server-side tagging, fix duplicate or missing events, configure consent mode and reconcile platform data against your actual orders.'],
        ['question' => 'What is a good ROAS to target?', 'answer' => 'It depends entirely on your gross margin, repeat purchase rate and cash cycle. A 2X ROAS can be profitable with strong repeat rates and healthy margin, while 6X can still lose money on a one-time-purchase product with thin margins and high returns. We set a target from your unit economics rather than a generic benchmark.'],
    ],
    'ctaTitle' => 'Make paid media accountable to profit.',
    'ctaCopy' => 'Get a free account audit with wasted spend identified and a clear growth plan.',
    'ctaBtn' => 'Get Ads Audit',
    'related' => [
        ['title' => 'Creative & AI UGC Strategy', 'copy' => 'Feed the account better creative', 'url' => url('services/creative-ai-ugc-strategy')],
        ['title' => 'Tracking & Attribution', 'copy' => 'Fix the data behind the decisions', 'url' => url('services/tracking-attribution')],
        ['title' => 'Landing Pages & Funnels', 'copy' => 'Improve where the traffic lands', 'url' => url('services/landing-pages-funnels')],
        ['title' => 'Retargeting & Retention', 'copy' => 'Monetise the audience you already have', 'url' => url('services/retargeting-retention')],
    ],
],

'services/creative-ai-ugc-strategy' => [
    'slug'  => 'creative-ai-ugc-strategy',
    'route' => 'services/creative-ai-ugc-strategy',
    'parentName'  => 'Performance Marketing',
    'parentRoute' => 'services/performance-marketing',
    'eyebrow' => 'Creative & AI UGC Strategy',
    'h1' => 'Creative volume that keeps paid media performing.',
    'intro' => 'Ad creative strategy and production at testing velocity: hooks, scripts, AI-generated UGC and video, static variations and multilingual versions — produced on a schedule so accounts never stall for want of something new to test.',
    'answerLabel' => 'What is creative and AI UGC strategy?',
    'answer' => 'Creative and AI UGC strategy is the systematic production and testing of advertising creative. It covers audience and message research, hook and script development, AI-generated user-generated content and video, static and motion variations, localisation, and a testing framework that connects creative performance back to business outcomes. AKESTECH produces creative as an ongoing operating system rather than a campaign deliverable, because creative is now the primary performance lever on Meta and TikTok.',
    'schemaName' => 'Creative and AI UGC Strategy Services',
    'stats' => [
        ['value' => '10X', 'label' => 'More variations per concept'],
        ['value' => '80%', 'label' => 'Lower production cost'],
        ['value' => '50+', 'label' => 'Assets shipped monthly'],
        ['value' => '8+', 'label' => 'Languages supported'],
    ],
    'deliverables' => [
        ['title' => 'Message and Hook Research', 'copy' => 'Review comments, reviews, competitor creative and sales calls to find the angles that actually move your buyer.'],
        ['title' => 'Script and Concept Development', 'copy' => 'Written hooks, scripts and concepts built for the first three seconds, where most mobile attention is won or lost.'],
        ['title' => 'AI UGC and Video Production', 'copy' => 'Generated presenters, voiceover, b-roll and editing that hold a consistent brand look without a shoot day.'],
        ['title' => 'Static and Motion Variations', 'copy' => 'Every concept cut into the formats, aspect ratios and lengths each placement needs.'],
        ['title' => 'Localisation', 'copy' => 'Scripts and voiceover adapted into Hindi and other regional languages, localised rather than literally translated.'],
        ['title' => 'Creative Testing Framework', 'copy' => 'Naming, hypothesis tracking and a results library so winning angles are identified and repeated deliberately.'],
    ],
    'process' => [
        ['title' => 'Research', 'copy' => 'We mine reviews, comments, competitor ads and sales conversations to identify the angles worth testing.'],
        ['title' => 'Concept', 'copy' => 'Hooks and scripts written for specific awareness stages, with the first three seconds treated as the whole job.'],
        ['title' => 'Produce', 'copy' => 'Concepts turned into AI UGC, video and static variations, graded to your brand guidelines.'],
        ['title' => 'Test', 'copy' => 'Creative shipped into the account on a schedule, with performance tracked by hook, format and message.'],
        ['title' => 'Iterate', 'copy' => 'Winning angles scaled into new variations; losers diagnosed and fed into the next round of concepts.'],
    ],

    'sections' => [
        [
            'kicker' => 'System',
            'h2' => 'Creative as an operating system',
            'paras' => [
                'Campaign thinking produces a few polished assets and then silence. Systems thinking produces a pipeline: research surfaces angles, scripts turn angles into concepts, production turns concepts into variants, and testing turns results into the next brief. We install the whole loop.',
            ],
            'bullets' => [
                ['title' => 'Angle mining', 'copy' => 'Reviews, comments, competitors and sales calls feeding the concept backlog.'],
                ['title' => 'Concept briefs', 'copy' => 'Hooks, scripts and formats specified before production starts.'],
                ['title' => 'Production sprints', 'copy' => 'Batches shipped weekly with consistent brand grading.'],
                ['title' => 'Feedback loop', 'copy' => 'Results flowing back into research instead of dying in a dashboard.'],
            ],
        ],
        [
            'kicker' => 'Production',
            'h2' => 'AI UGC and video at testing velocity',
            'paras' => [
                'AI production removes the two constraints that cap creative volume: shoot days and cost per asset. Generated presenters, voiceover and editing hold a consistent brand look while producing the variations each placement and language needs.',
            ],
            'bullets' => [
                ['title' => 'AI presenters', 'copy' => 'Consistent on-brand faces without scheduling, studios or retakes.'],
                ['title' => 'Native voiceover', 'copy' => 'Hindi and regional delivery that sounds natural, not translated.'],
                ['title' => 'Format coverage', 'copy' => 'Every concept cut to each placement\'s aspect ratio and length.'],
                ['title' => 'Brand kit discipline', 'copy' => 'Colors, type and tone locked before volume scales.'],
            ],
        ],
        [
            'kicker' => 'Testing',
            'h2' => 'Knowing what worked and why',
            'paras' => [
                'Volume without analysis is just noise. Structured naming, hypothesis tracking and a results library connect each asset\'s performance to its hook, format and message — so winning patterns repeat deliberately instead of by accident.',
            ],
            'bullets' => [
                ['title' => 'Structured naming', 'copy' => 'Hook, format, message and language encoded in every filename.'],
                ['title' => 'Weekly reads', 'copy' => 'Performance reviewed by angle, not just by ad, to spot patterns.'],
                ['title' => 'Results library', 'copy' => 'Winners and losers documented with the why, not just the what.'],
                ['title' => 'Iteration sprints', 'copy' => 'Winning angles scaled into variants; losers diagnosed, not repeated.'],
            ],
        ],
    ],
    'faqSlug' => 'creative-ai-ugc-strategy',
    'faqs' => [
        ['question' => 'What is AI UGC and does it actually work?', 'answer' => 'AI UGC is advertising content that mimics the look and feel of customer-generated video, produced with AI presenters, voiceover and editing rather than a shoot. It works because the format itself performs well on Meta and TikTok, and because it removes the cost and delay that normally limit how much creative you can test. It is a volume tool, not a replacement for genuine customer stories where you already have them.'],
        ['question' => 'Will AI-generated creative look like our brand?', 'answer' => 'Yes. We work from your brand guidelines, colours, typography, tone and product imagery, and we build a reusable brand kit so every asset is consistent. The first batch is reviewed and refined before production scales, so the look is locked before volume matters.'],
        ['question' => 'How much creative do we actually need?', 'answer' => 'Enough to test continuously. Most accounts perform better with several new concepts each month and multiple variations of each, rather than one polished campaign every quarter. Creative fatigue is the most common reason performance decays, and volume is the only real counter to it.'],
        ['question' => 'Can you produce creative in regional languages?', 'answer' => 'Yes. Scripts are adapted rather than literally translated, and voiceover is produced natively so delivery sounds natural. Regional-language creative consistently outperforms English-only creative for non-metro audiences in India.'],
        ['question' => 'Do we need to supply footage or attend a shoot?', 'answer' => 'Usually not. Most work is generated from your brand assets, product images and an approved script, so there is no studio day or crew. If you have existing footage or real customer content, we incorporate and grade generated material to match it.'],
        ['question' => 'How do you know which creative is working?', 'answer' => 'Every asset carries structured naming so performance can be cut by hook, format, message and language. We review results weekly against a creative results library, which means winning angles get deliberately repeated instead of being rediscovered by accident.'],
        ['question' => 'How is this different from your AI Videos service?', 'answer' => 'AI Videos covers brand and product film production across your whole marketing: explainers, product films, social content and campaign assets. This service is specifically about paid media performance: high-volume creative built and iterated to improve ad account results.'],
        ['question' => 'How fast can you turn creative around?', 'answer' => 'Standard turnaround is 48 hours from approved script, with larger batches scheduled in advance. Speed matters because a winning angle can decay within weeks, so the ability to produce follow-ups quickly is often worth more than any single asset.'],
    ],
    'ctaTitle' => 'Never let an account stall for want of creative.',
    'ctaCopy' => 'Get a free creative audit with your top angles and a production plan.',
    'ctaBtn' => 'Get Creative Plan',
    'related' => [
        ['title' => 'Meta & Google Ads', 'copy' => 'Where the creative runs', 'url' => url('services/meta-google-ads')],
        ['title' => 'AI Videos', 'copy' => 'Brand and product film production', 'url' => url('services/ai-videos')],
        ['title' => 'Landing Pages & Funnels', 'copy' => 'Match the page to the promise', 'url' => url('services/landing-pages-funnels')],
        ['title' => 'Retargeting & Retention', 'copy' => 'Reuse creative across the lifecycle', 'url' => url('services/retargeting-retention')],
    ],
],

'services/landing-pages-funnels' => [
    'slug'  => 'landing-pages-funnels',
    'route' => 'services/landing-pages-funnels',
    'parentName'  => 'Performance Marketing',
    'parentRoute' => 'services/performance-marketing',
    'eyebrow' => 'Landing Pages & Funnels',
    'h1' => 'Landing pages built to convert the traffic you pay for.',
    'intro' => 'High-converting landing pages and funnels for paid traffic and lead generation: message-match pages, multi-step forms, quiz and calculator funnels, lead magnets and thank-you flows — fast, mobile-first and tested.',
    'answerLabel' => 'What is landing page and funnel design?',
    'answer' => 'Landing page and funnel design is the creation of dedicated pages and multi-step journeys that convert a specific audience into a specific action, rather than sending paid traffic to a homepage. It covers message match with the ad, page structure and copywriting, mobile-first design, form and lead capture optimisation, lead magnets and quizzes, thank-you and nurture flows, and ongoing conversion testing. AKESTECH designs, builds and tests these as part of the acquisition system, not as standalone marketing collateral.',
    'schemaName' => 'Landing Page and Funnel Design Services',
    'stats' => [
        ['value' => '32%', 'label' => 'Average conversion lift'],
        ['value' => '< 2s', 'label' => 'Page load target'],
        ['value' => '6', 'label' => 'Page variations per campaign'],
        ['value' => '100%', 'label' => 'Mobile-first builds'],
    ],
    'deliverables' => [
        ['title' => 'Message-Match Pages', 'copy' => 'Each ad group or audience gets a page whose headline, offer and proof continue exactly what the ad promised.'],
        ['title' => 'Conversion Copywriting', 'copy' => 'Copy structured around the buyer\'s objections, with the value proposition, proof and risk reversal placed where decisions are made.'],
        ['title' => 'Mobile-First Design', 'copy' => 'Layouts, tap targets, forms and page weight designed for a phone, because that is where most paid traffic arrives.'],
        ['title' => 'Forms and Lead Capture', 'copy' => 'Multi-step forms, progressive profiling and friction reduction that lift completion without hurting lead quality.'],
        ['title' => 'Quiz and Calculator Funnels', 'copy' => 'Interactive funnels that qualify visitors and deliver a personalised recommendation, which convert well for considered purchases.'],
        ['title' => 'Thank-You and Nurture Flows', 'copy' => 'Post-conversion pages, automated confirmations and follow-up sequences so a captured lead is contacted immediately.'],
    ],
    'process' => [
        ['title' => 'Research', 'copy' => 'We review the ads, audience and offer, plus reviews and sales calls, to understand what the visitor needs to believe to convert.'],
        ['title' => 'Structure', 'copy' => 'Page hierarchy and copy outline agreed before design, so the argument comes first and the visual supports it.'],
        ['title' => 'Design and Build', 'copy' => 'Mobile-first pages built fast and light, connected to your CRM, email and WhatsApp follow-up from the start.'],
        ['title' => 'Test', 'copy' => 'Headlines, offers, forms and layout tested systematically, with results recorded against a hypothesis.'],
        ['title' => 'Scale', 'copy' => 'Winning structures reused across campaigns, audiences and languages so improvements compound.'],
    ],

    'sections' => [
        [
            'kicker' => 'Message match',
            'h2' => 'Continuing the promise the ad made',
            'paras' => [
                'Every click carries an expectation set by the ad. When the page headline, offer and proof continue that exact promise, visitors convert; when it opens with generic brand statements, they bounce. We build one page per promise, not one page per business.',
            ],
            'bullets' => [
                ['title' => 'One promise per page', 'copy' => 'Headline, hero and CTA echoing the ad group that sent the traffic.'],
                ['title' => 'Objection-led copy', 'copy' => 'Value, proof and risk reversal placed where decisions actually happen.'],
                ['title' => 'Proof density', 'copy' => 'Reviews, numbers and guarantees visible without scrolling for them.'],
                ['title' => 'Single action', 'copy' => 'One conversion goal per page, repeated, never competing with navigation.'],
            ],
        ],
        [
            'kicker' => 'Funnels',
            'h2' => 'Beyond single pages: funnels that qualify',
            'paras' => [
                'Considered purchases rarely convert on first touch. Multi-step forms, quizzes and calculators turn curiosity into qualified intent — capturing the lead while personalizing the recommendation, which lifts both conversion and sales-team efficiency.',
            ],
            'bullets' => [
                ['title' => 'Multi-step forms', 'copy' => 'Long asks split into easy steps that lift completion rates.'],
                ['title' => 'Quiz funnels', 'copy' => 'Guided recommendations that qualify visitors while engaging them.'],
                ['title' => 'Calculators', 'copy' => 'ROI, dosage or pricing tools that make value tangible before the pitch.'],
                ['title' => 'Nurture capture', 'copy' => 'Partial completions and retargeting hooks built into every step.'],
            ],
        ],
        [
            'kicker' => 'Plumbing',
            'h2' => 'Speed, tracking and follow-up built in',
            'paras' => [
                'A beautiful page that loads slowly, tracks nothing and emails nobody is a liability. Every build ships with performance budgets, full event tracking and instant CRM, email and WhatsApp follow-up — because speed of follow-up decides lead outcomes more than page polish.',
            ],
            'bullets' => [
                ['title' => 'Sub-2s loads', 'copy' => 'Lean builds hitting largest-contentful-paint targets on mobile.'],
                ['title' => 'Full event tracking', 'copy' => 'Scroll, click, form and conversion events wired to GA4 and pixels.'],
                ['title' => 'Instant routing', 'copy' => 'Leads in your CRM, inbox and WhatsApp within seconds, not hours.'],
                ['title' => 'Source attribution', 'copy' => 'UTMs carried through so every lead credits its campaign.'],
            ],
        ],
    ],
    'faqSlug' => 'landing-pages-funnels',
    'faqs' => [
        ['question' => 'Why not just send paid traffic to our homepage?', 'answer' => 'A homepage serves many audiences and asks visitors to choose, which dilutes intent. A dedicated landing page continues the specific promise someone clicked on and asks for one action, which typically converts several times better. The exception is branded search, where a homepage is often the right destination.'],
        ['question' => 'How long does a landing page take to build?', 'answer' => 'A single well-scoped page usually takes one to two weeks including copy, design, build and tracking setup. Multi-step funnels, quizzes or calculator builds take three to five weeks depending on logic complexity and integrations.'],
        ['question' => 'Will the pages be fast on mobile?', 'answer' => 'Yes, speed is a design constraint rather than a cleanup task. We target under two seconds to largest contentful paint on mobile, which is achieved with lean code, compressed images, minimal scripts and no heavy page-builder dependency.'],
        ['question' => 'Can you integrate pages with our CRM?', 'answer' => 'Yes. Every form connects to your CRM, email platform and WhatsApp follow-up, with source tracking so you can attribute leads properly. For businesses without a CRM we can implement Lead365, our own lead management platform.'],
        ['question' => 'Do you write the copy?', 'answer' => 'Yes. Copywriting is included, based on research into your reviews, competitor positioning and sales conversations. We do not ask you to supply finished copy, though we do ask for input on claims, pricing and anything legally sensitive.'],
        ['question' => 'How do you test landing pages?', 'answer' => 'We test the highest-impact elements first: headline and offer, then page structure, then form friction, then proof elements. Tests run to statistical significance where traffic allows, and results are recorded so the same lesson does not need relearning.'],
        ['question' => 'Can you build pages in regional languages?', 'answer' => 'Yes. Copy is adapted rather than literally translated, and layout is checked for text expansion and font rendering. Regional-language pages frequently outperform English equivalents for non-metro audiences.'],
        ['question' => 'Do we own the pages?', 'answer' => 'Yes. Pages, copy, design files and tracking setup are yours, built in your own systems wherever possible so you are not locked into a proprietary page builder or dependent on us to make changes.'],
    ],
    'ctaTitle' => 'Stop sending paid traffic to a homepage.',
    'ctaCopy' => 'Get a free landing page review with your biggest conversion gaps.',
    'ctaBtn' => 'Get Page Review',
    'related' => [
        ['title' => 'Meta & Google Ads', 'copy' => 'The traffic these pages convert', 'url' => url('services/meta-google-ads')],
        ['title' => 'CRO & Experimentation', 'copy' => 'Run a structured testing programme', 'url' => url('services/cro-experimentation')],
        ['title' => 'Tracking & Attribution', 'copy' => 'Measure which page produced the lead', 'url' => url('services/tracking-attribution')],
        ['title' => 'Lead365', 'copy' => 'Capture and route every enquiry', 'url' => url('products/lead365')],
    ],
],

'services/tracking-attribution' => [
    'slug'  => 'tracking-attribution',
    'route' => 'services/tracking-attribution',
    'parentName'  => 'Performance Marketing',
    'parentRoute' => 'services/performance-marketing',
    'eyebrow' => 'Tracking & Attribution',
    'h1' => 'Know which channel actually produced the sale.',
    'intro' => 'Server-side conversion tracking, consent-mode configuration, GA4 and CRM reconciliation, call and WhatsApp tracking, and attribution modelling — so budget decisions rest on verified data instead of platform-reported guesses.',
    'answerLabel' => 'What is tracking and attribution?',
    'answer' => 'Tracking and attribution is the infrastructure that tells you which marketing activity produced which outcome. It covers server-side conversion APIs, consent management, GA4 and event architecture, UTM and offline conversion import, call and WhatsApp tracking, multi-touch attribution modelling, and reconciliation of platform data against your own orders and CRM. AKESTECH builds this before scaling spend, because every optimisation decision is only as good as the data underneath it.',
    'schemaName' => 'Marketing Tracking and Attribution Services',
    'stats' => [
        ['value' => '95%', 'label' => 'Server-side signal match'],
        ['value' => '100%', 'label' => 'Events verified pre-launch'],
        ['value' => '1', 'label' => 'Source of truth for revenue'],
        ['value' => '30%', 'label' => 'Typical reporting discrepancy found'],
    ],
    'deliverables' => [
        ['title' => 'Server-Side Conversion APIs', 'copy' => 'Meta Conversions API and Google server-side tagging implemented so signals survive browser and iOS restrictions.'],
        ['title' => 'Consent Management', 'copy' => 'Consent Mode v2 and a compliant banner configured so tracking respects user choice and stays legally sound.'],
        ['title' => 'GA4 and Event Architecture', 'copy' => 'A documented measurement plan with clean event naming, parameters and conversions that match real business outcomes.'],
        ['title' => 'Offline Conversion Import', 'copy' => 'CRM and order data fed back into ad platforms so bidding optimises towards qualified revenue, not just form fills.'],
        ['title' => 'Call and WhatsApp Tracking', 'copy' => 'Dynamic number insertion and WhatsApp attribution, so phone and chat conversions are credited to the right campaign.'],
        ['title' => 'Attribution and Reconciliation', 'copy' => 'Multi-touch modelling plus a monthly reconciliation of platform-reported revenue against your actual orders.'],
    ],
    'process' => [
        ['title' => 'Audit', 'copy' => 'We inventory every tag, event, pixel and data flow, and quantify exactly how far platform numbers sit from reality.'],
        ['title' => 'Plan', 'copy' => 'A written measurement plan defines events, parameters, conversions and the single source of truth for revenue.'],
        ['title' => 'Implement', 'copy' => 'Server-side tagging, consent mode, GA4 and CRM integrations built and tested with real transactions.'],
        ['title' => 'Verify', 'copy' => 'Every event tested end to end, discrepancies investigated, and platform data reconciled against your own records.'],
        ['title' => 'Maintain', 'copy' => 'Monitoring, alerting and periodic re-verification so tracking does not silently break as sites and platforms change.'],
    ],

    'sections' => [
        [
            'kicker' => 'Foundation',
            'h2' => 'Server-side tracking that survives privacy changes',
            'paras' => [
                'Browser pixels degrade a little more every year: ad blockers, ITP, iOS prompts and cookie deletion each take their cut. Server-side collection restores the signal — events sent from your infrastructure, enriched with first-party data, under your control.',
            ],
            'bullets' => [
                ['title' => 'Conversions API', 'copy' => 'Meta events delivered server-side with high match quality.'],
                ['title' => 'Server GTM', 'copy' => 'Google tags consolidated into a container you own and govern.'],
                ['title' => 'Event architecture', 'copy' => 'A documented measurement plan with clean, consistent naming.'],
                ['title' => 'Consent Mode v2', 'copy' => 'Lawful, model-friendly tracking that respects user choice.'],
            ],
        ],
        [
            'kicker' => 'Coverage',
            'h2' => 'Capturing the conversions pixels miss',
            'paras' => [
                'For many Indian businesses the majority of conversions happen off-website: phone calls, WhatsApp chats, showroom visits and delayed CRM closures. Leaving these untracked hands budget decisions to whichever channel shouts loudest in the dashboard.',
            ],
            'bullets' => [
                ['title' => 'Call tracking', 'copy' => 'Dynamic numbers attributing calls to campaign, source and keyword.'],
                ['title' => 'WhatsApp attribution', 'copy' => 'Tracked links and CRM logging tying chats to their origin.'],
                ['title' => 'Offline imports', 'copy' => 'Closed revenue fed back so bidding learns from customers, not clicks.'],
                ['title' => 'Cross-device joins', 'copy' => 'First-party IDs stitching journeys across sessions and devices.'],
            ],
        ],
        [
            'kicker' => 'Truth',
            'h2' => 'One source of revenue truth',
            'paras' => [
                'Every platform claims overlapping credit, so adding dashboard numbers together invents revenue that never happened. We establish a single reconciled source of truth and report platform numbers against it — ending the monthly argument about which channel works.',
            ],
            'bullets' => [
                ['title' => 'Monthly reconciliation', 'copy' => 'Platform claims checked line by line against orders and CRM.'],
                ['title' => 'Multi-model views', 'copy' => 'Last-click, data-driven and survey-based reads side by side.'],
                ['title' => 'Incrementality tests', 'copy' => 'Holdouts and geo tests separating created demand from claimed demand.'],
                ['title' => 'Decision dashboards', 'copy' => 'One view the whole leadership team can finally trust.'],
            ],
        ],
    ],
    'faqSlug' => 'tracking-attribution',
    'faqs' => [
        ['question' => 'Why do our ad platform numbers not match our sales data?', 'answer' => 'Because platforms use modelled and view-through attribution with their own lookback windows, and they count conversions they cannot verify. A 20% to 40% gap between platform-reported revenue and your actual orders is normal. The fix is server-side tracking, CRM reconciliation and reporting from a single source of truth rather than trusting any single dashboard.'],
        ['question' => 'What is server-side tracking and do we need it?', 'answer' => 'Server-side tracking sends conversion events from your server to the ad platform rather than from the visitor\'s browser, which makes them far more reliable against ad blockers, browser restrictions and iOS privacy changes. If you advertise on Meta or Google at meaningful scale, you need it to feed the algorithms accurate signal.'],
        ['question' => 'What is Consent Mode and is it required?', 'answer' => 'Consent Mode communicates a visitor\'s cookie choices to Google so tags adjust behaviour instead of simply firing or not firing. For anyone serving users in Europe it is effectively required, and Google\'s modelling depends on it. We implement Consent Mode v2 alongside a compliant banner.'],
        ['question' => 'Can you track phone calls and WhatsApp enquiries?', 'answer' => 'Yes. Dynamic number insertion attributes calls to the campaign, source and keyword that produced them, and WhatsApp conversations can be tied to source with tracked links and CRM logging. For service businesses these channels are often the majority of conversions, so leaving them untracked badly distorts decisions.'],
        ['question' => 'What attribution model should we use?', 'answer' => 'There is no universally correct model, which is why we report several: last click for platform comparison, position or data-driven for budget allocation, and post-purchase surveys for genuine incrementality. The practical answer is consistency plus regular reconciliation against real revenue.'],
        ['question' => 'How often should tracking be re-checked?', 'answer' => 'Quarterly at minimum, and immediately after any site redesign, checkout change, platform migration or consent update. Tracking breaks quietly and often, so monitoring and periodic re-verification catch problems that would otherwise distort months of decisions.'],
        ['question' => 'Will this slow our website down?', 'answer' => 'It usually improves speed. Consolidating tags into a server-side container and removing redundant pixels reduces the number of third-party scripts loading in a visitor\'s browser, which is one of the more effective performance improvements available.'],
        ['question' => 'Can you work with our existing analytics setup?', 'answer' => 'Yes. We audit what exists, keep what works, fix what is broken and add what is missing. Replacing a working setup is rarely necessary, and we will tell you when it is not.'],
    ],
    'ctaTitle' => 'Make budget decisions on data you can trust.',
    'ctaCopy' => 'Get a free tracking audit showing exactly how far your reported numbers sit from reality.',
    'ctaBtn' => 'Get Tracking Audit',
    'related' => [
        ['title' => 'Meta & Google Ads', 'copy' => 'Campaigns that depend on this data', 'url' => url('services/meta-google-ads')],
        ['title' => 'CRO & Experimentation', 'copy' => 'Test against trustworthy numbers', 'url' => url('services/cro-experimentation')],
        ['title' => 'Lead365', 'copy' => 'CRM attribution for every enquiry', 'url' => url('products/lead365')],
        ['title' => 'Product Development', 'copy' => 'Custom tracking and data infrastructure', 'url' => url('services/technology')],
    ],
],

'services/retargeting-retention' => [
    'slug'  => 'retargeting-retention',
    'route' => 'services/retargeting-retention',
    'parentName'  => 'Performance Marketing',
    'parentRoute' => 'services/performance-marketing',
    'eyebrow' => 'Retargeting & Retention',
    'h1' => 'Earn more from the customers you already have.',
    'intro' => 'Retargeting and lifecycle retention systems: segmented remarketing, abandoned cart and browse recovery, email and WhatsApp lifecycle flows, win-back campaigns, loyalty and subscription journeys — measured on repeat rate and lifetime value.',
    'answerLabel' => 'What is retargeting and retention marketing?',
    'answer' => 'Retargeting and retention marketing is the work of converting people who already know you, and then keeping them buying. It covers segmented remarketing audiences, abandoned cart and browse abandonment recovery, lifecycle email and WhatsApp flows, post-purchase sequences, win-back campaigns, loyalty and referral programmes, and subscription journeys. AKESTECH builds and runs these systems and reports on repeat purchase rate, retention and lifetime value, because acquiring a second order is usually far cheaper than acquiring a first customer.',
    'schemaName' => 'Retargeting and Retention Marketing Services',
    'stats' => [
        ['value' => '35%', 'label' => 'Typical repeat purchase lift'],
        ['value' => '25%', 'label' => 'Revenue from lifecycle flows'],
        ['value' => '3X', 'label' => 'Retargeting conversion vs cold'],
        ['value' => '60 days', 'label' => 'Standard win-back window'],
    ],
    'deliverables' => [
        ['title' => 'Segmented Remarketing', 'copy' => 'Audiences built on real behaviour: viewed product, added to cart, checkout started, purchased, lapsed — each with its own message.'],
        ['title' => 'Cart and Browse Recovery', 'copy' => 'Automated WhatsApp, email and SMS sequences that recover abandoned carts and product views with a reason to return.'],
        ['title' => 'Lifecycle Email and WhatsApp', 'copy' => 'Welcome, post-purchase, delivery, review request and replenishment flows triggered by behaviour rather than blasted on a schedule.'],
        ['title' => 'Win-Back Campaigns', 'copy' => 'Reactivation journeys for lapsed buyers, timed to their previous purchase cycle rather than an arbitrary interval.'],
        ['title' => 'Loyalty and Referral', 'copy' => 'Points, tiers and referral mechanics that make a second and third purchase the natural default.'],
        ['title' => 'Subscription Journeys', 'copy' => 'Replenishment and subscription flows for consumable products, with dunning and pause options that reduce churn.'],
    ],
    'process' => [
        ['title' => 'Segment', 'copy' => 'We analyse purchase frequency, order value and lapse patterns to define the audiences and lifecycle stages worth building for.'],
        ['title' => 'Design', 'copy' => 'Journeys mapped for each stage, with the message, channel, timing and offer defined before anything is built.'],
        ['title' => 'Build', 'copy' => 'Flows, audiences, templates and automations built and connected to your store, CRM and messaging platforms.'],
        ['title' => 'Launch', 'copy' => 'Sequences go live in stages with deliverability, rendering and frequency checks before volume is increased.'],
        ['title' => 'Optimise', 'copy' => 'Monthly review of repeat rate, revenue per recipient, churn and unsubscribe rates, with flows refined accordingly.'],
    ],

    'sections' => [
        [
            'kicker' => 'Retargeting',
            'h2' => 'Retargeting that respects attention',
            'paras' => [
                'Lazy retargeting follows everyone with the same ad until they buy or block you. Disciplined retargeting segments by behavior, sequences the message and caps the frequency — converting intent that already exists without burning the brand.',
            ],
            'bullets' => [
                ['title' => 'Behavioral segments', 'copy' => 'Viewed, carted, checkout-started and lapsed, each messaged differently.'],
                ['title' => 'Sequential creative', 'copy' => 'Stories that progress instead of one ad repeated to exhaustion.'],
                ['title' => 'Frequency discipline', 'copy' => 'Caps and decay windows that protect attention and budget.'],
                ['title' => 'Smart suppression', 'copy' => 'Buyers excluded from prospecting; recent converters left alone.'],
            ],
        ],
        [
            'kicker' => 'Lifecycle',
            'h2' => 'Lifecycle flows that print repeat revenue',
            'paras' => [
                'For established brands, lifecycle email and WhatsApp should drive a fifth or more of total revenue — automatically. Welcome, post-purchase, replenishment and win-back flows trigger on behavior, arriving when the customer is most ready to act.',
            ],
            'bullets' => [
                ['title' => 'Welcome series', 'copy' => 'First-purchase conversion for new subscribers and followers.'],
                ['title' => 'Post-purchase', 'copy' => 'Delivery, usage, review and cross-sell timed to the product cycle.'],
                ['title' => 'Cart and browse recovery', 'copy' => 'WhatsApp-first sequences recovering abandoned intent fast.'],
                ['title' => 'Win-back journeys', 'copy' => 'Reactivation timed to lapse patterns, not arbitrary blasts.'],
            ],
        ],
        [
            'kicker' => 'Loyalty',
            'h2' => 'Making the third purchase the default',
            'paras' => [
                'Retention compounds: each repeat purchase raises lifetime value, which raises allowable acquisition cost, which unlocks growth that single-purchase economics cannot fund. Loyalty mechanics, referrals and subscriptions turn one-time buyers into a base.',
            ],
            'bullets' => [
                ['title' => 'Points and tiers', 'copy' => 'Progress mechanics that reward the next purchase, not just the last.'],
                ['title' => 'Referral loops', 'copy' => 'Customer-get-customer offers tracked to real attributed revenue.'],
                ['title' => 'Subscriptions', 'copy' => 'Replenishment and membership flows with churn-saving pause options.'],
                ['title' => 'Cohort tracking', 'copy' => 'Retention measured by cohort so improvements are real, not seasonal.'],
            ],
        ],
    ],
    'faqSlug' => 'retargeting-retention',
    'faqs' => [
        ['question' => 'What is the difference between retargeting and retention?', 'answer' => 'Retargeting converts people who have not bought yet but have shown intent, usually through paid ads on Meta and Google. Retention keeps existing customers buying through owned channels like email, WhatsApp and SMS. Both matter, but retention usually produces the better return because the audience has already demonstrated trust.'],
        ['question' => 'How much revenue should come from retention?', 'answer' => 'For most ecommerce brands, 25% to 40% of revenue should come from repeat customers once the business is established, and lifecycle email and WhatsApp alone typically drive 20% to 30% of total revenue. If nearly all your revenue is first purchases, retention is almost certainly your largest untapped opportunity.'],
        ['question' => 'Which channels do you use for retention?', 'answer' => 'Email, WhatsApp and SMS, chosen by what the message needs and where your customers actually respond. WhatsApp has very high open rates in India and suits time-sensitive messages like cart recovery and delivery updates, while email suits richer content like replenishment and educational sequences.'],
        ['question' => 'How do you avoid annoying customers with retargeting?', 'answer' => 'Frequency caps, sensible exclusion windows, sequential creative rather than the same ad repeatedly, and suppression of people who have already purchased. We also exclude recent purchasers from prospecting-style ads, which is both less annoying and cheaper.'],
        ['question' => 'Can you recover abandoned carts on WhatsApp?', 'answer' => 'Yes, and it usually outperforms email for this purpose in India. Recovery sequences run through the WhatsApp Business API with approved templates, typically a reminder followed by an incentive if the first message does not convert, with a clear opt-out path.'],
        ['question' => 'How do you measure retention success?', 'answer' => 'Repeat purchase rate, time to second order, customer lifetime value, revenue per recipient, churn rate and retention by cohort. Revenue attributed to flows is reported separately from total revenue, so you can see what the lifecycle programme itself is producing.'],
        ['question' => 'Do you handle email deliverability?', 'answer' => 'Yes. We configure SPF, DKIM and DMARC, manage sending domain warm-up, maintain list hygiene and monitor bounce and complaint rates. Deliverability is what determines whether a lifecycle programme reaches anyone at all, so it is handled as core infrastructure rather than an afterthought.'],
        ['question' => 'How long before retention work pays back?', 'answer' => 'Abandoned cart and welcome flows typically produce measurable revenue within the first month because they capture demand that already exists. Broader improvements in repeat rate and lifetime value build over three to six months as cohorts mature and flows are refined.'],
    ],
    'ctaTitle' => 'Your next order is cheaper than your last one.',
    'ctaCopy' => 'Get a free retention audit with your repeat rate and the highest-value flows to build first.',
    'ctaBtn' => 'Get Retention Audit',
    'related' => [
        ['title' => 'Meta & Google Ads', 'copy' => 'Retargeting audiences and campaigns', 'url' => url('services/meta-google-ads')],
        ['title' => 'Creative & AI UGC Strategy', 'copy' => 'Creative for retargeting segments', 'url' => url('services/creative-ai-ugc-strategy')],
        ['title' => 'AI & Automation', 'copy' => 'Lifecycle and workflow automation', 'url' => url('services/automation')],
        ['title' => 'Shopify CRO', 'copy' => 'Improve the store those flows point to', 'url' => url('services/cro-store-optimization')],
    ],
],

'services/cro-experimentation' => [
    'slug'  => 'cro-experimentation',
    'route' => 'services/cro-experimentation',
    'parentName'  => 'Performance Marketing',
    'parentRoute' => 'services/performance-marketing',
    'eyebrow' => 'CRO & Experimentation',
    'h1' => 'A testing programme that compounds every month.',
    'intro' => 'Full-funnel conversion rate optimisation and structured experimentation: hypothesis backlog, A/B and multivariate testing, landing page and form experiments, offer and pricing tests, and a results library that turns wins into repeatable patterns.',
    'answerLabel' => 'What is CRO and experimentation?',
    'answer' => 'CRO and experimentation is the disciplined practice of improving conversion through structured testing rather than opinion. It covers a prioritised hypothesis backlog, A/B and multivariate testing across landing pages, forms, offers and checkout, statistical analysis, qualitative research through session recordings and surveys, and a results library that records both winners and losers. AKESTECH runs this as a monthly programme, so improvements compound instead of being rediscovered each quarter.',
    'schemaName' => 'Conversion Rate Optimisation and Experimentation Services',
    'stats' => [
        ['value' => '32%', 'label' => 'Average conversion lift'],
        ['value' => '48', 'label' => 'Tests run per year'],
        ['value' => '95%', 'label' => 'Tests run to significance'],
        ['value' => '100%', 'label' => 'Results recorded, wins and losses'],
    ],
    'deliverables' => [
        ['title' => 'Hypothesis Backlog', 'copy' => 'Every idea ranked by expected impact, confidence and effort, so testing effort goes where the return is highest.'],
        ['title' => 'A/B and Multivariate Testing', 'copy' => 'Experiments designed, implemented and analysed properly, with sample size calculated before launch rather than after.'],
        ['title' => 'Qualitative Research', 'copy' => 'Session recordings, heatmaps, surveys and user testing that explain why behaviour happens, not just that it did.'],
        ['title' => 'Offer and Pricing Tests', 'copy' => 'Structured experiments on bundles, thresholds, guarantees and price presentation, which usually move revenue more than layout.'],
        ['title' => 'Form and Checkout Experiments', 'copy' => 'Friction reduction, field ordering, payment options and trust signals tested where the money is actually lost.'],
        ['title' => 'Results Library', 'copy' => 'A documented record of every test, its hypothesis and its outcome, so learning accumulates instead of resetting with each new hire.'],
    ],
    'process' => [
        ['title' => 'Baseline', 'copy' => 'We establish clean conversion, funnel and revenue baselines and confirm the tracking can support reliable testing.'],
        ['title' => 'Research', 'copy' => 'Quantitative and qualitative research identifies where value leaks and generates a ranked set of hypotheses.'],
        ['title' => 'Prioritise', 'copy' => 'Ideas scored on impact, confidence and effort, and sequenced into a roadmap that balances quick wins with larger bets.'],
        ['title' => 'Experiment', 'copy' => 'Tests built, QA\'d and run to statistical significance, with no peeking and no early calls on partial data.'],
        ['title' => 'Compound', 'copy' => 'Winners shipped permanently, losers documented, and the next round designed around what the data revealed.'],
    ],

    'sections' => [
        [
            'kicker' => 'Research',
            'h2' => 'Research before random testing',
            'paras' => [
                'Testing random ideas produces random learning. Our programs start with quantitative and qualitative research — funnels, heatmaps, recordings, surveys and support tickets — so the backlog aims at proven problems rather than opinions about button colors.',
            ],
            'bullets' => [
                ['title' => 'Quant first', 'copy' => 'Funnels and segments revealing where value actually leaks.'],
                ['title' => 'Qual for why', 'copy' => 'Recordings, heatmaps and surveys explaining the behavior behind numbers.'],
                ['title' => 'Voice of customer', 'copy' => 'Reviews and tickets supplying the exact language buyers use.'],
                ['title' => 'ICE scoring', 'copy' => 'Impact, confidence and effort ranking every hypothesis objectively.'],
            ],
        ],
        [
            'kicker' => 'Rigor',
            'h2' => 'Statistics taken seriously',
            'paras' => [
                'Most testing programs quietly lie to themselves: peeking at results early, stopping at the first green number, ignoring sample size. We calculate power before launch, commit to durations and report confidence honestly — because a false win shipped permanently costs more than any single test.',
            ],
            'bullets' => [
                ['title' => 'Pre-set sample sizes', 'copy' => 'Power calculations before launch, not rationalization after.'],
                ['title' => 'Fixed durations', 'copy' => 'Full business cycles covered; no peeking, no early calls.'],
                ['title' => 'Segmented reads', 'copy' => 'Device, source and new-vs-returning checked before shipping.'],
                ['title' => 'Guardrail metrics', 'copy' => 'Refunds, AOV and margin watched so conversion wins stay profitable.'],
            ],
        ],
        [
            'kicker' => 'Compounding',
            'h2' => 'Learning that accumulates',
            'paras' => [
                'A test\'s value is not just its lift — it is the reusable insight about your buyers. The results library turns scattered experiments into institutional knowledge: every future page, offer and campaign starts from evidence instead of a blank page.',
            ],
            'bullets' => [
                ['title' => 'Results library', 'copy' => 'Every test, hypothesis and outcome documented and searchable.'],
                ['title' => 'Pattern extraction', 'copy' => 'Repeated wins distilled into design and messaging principles.'],
                ['title' => 'Rollout discipline', 'copy' => 'Winners shipped everywhere they apply, not left on one page.'],
                ['title' => 'Roadmap evolution', 'copy' => 'Each quarter\'s tests chosen from last quarter\'s learnings.'],
            ],
        ],
    ],
    'faqSlug' => 'cro-experimentation',
    'faqs' => [
        ['question' => 'How is this different from Shopify CRO?', 'answer' => 'Shopify CRO focuses on the store itself: product pages, cart, checkout, merchandising and platform speed. This service covers the entire acquisition funnel including landing pages, lead forms, offer and pricing tests, and ad-to-page experience across every channel. Many clients run both, with Shopify CRO owning the store and this programme owning everything upstream of it.'],
        ['question' => 'How much traffic do we need to run tests?', 'answer' => 'Reliable A/B testing generally needs a few thousand sessions per variant, depending on your baseline conversion rate and the size of effect you are trying to detect. Below that, tests take too long to reach significance, so we shift to higher-confidence sequential improvements and qualitative research instead of reporting unreliable results.'],
        ['question' => 'How long does a test take?', 'answer' => 'Most tests run two to four weeks, depending on traffic and effect size. We calculate required sample size before launch and commit to the duration, because ending a test early when it looks good is the most common way programmes produce false positives that quietly cost money later.'],
        ['question' => 'What if a test loses?', 'answer' => 'A losing test is a successful test, because it removes a hypothesis permanently and usually reveals something about your buyers. We document losses in the results library alongside winners, so the same idea does not get rebuilt and retested in twelve months.'],
        ['question' => 'What do you test first?', 'answer' => 'The highest-impact, highest-confidence items, which are usually offer, message match and friction rather than button colours. Layout and micro-copy matter far less than whether the offer is compelling and whether the page answers the objection that is actually stopping the purchase.'],
        ['question' => 'Can you test pricing?', 'answer' => 'Yes, though carefully. We test price presentation, bundling, thresholds, anchoring and payment terms rather than simply raising or lowering prices, and we monitor contribution margin and refund rates alongside conversion so a conversion win does not become a profit loss.'],
        ['question' => 'Do you need developer access?', 'answer' => 'For most tests, no. We can run experiments through tag-based tools without touching your codebase. Larger structural tests or checkout changes need development support, which we can provide or coordinate with your own developers.'],
        ['question' => 'How do you report on a testing programme?', 'answer' => 'Monthly reporting covers tests run, results, statistical confidence, revenue impact of shipped winners and what is queued next. We report business outcomes rather than test counts, because a programme that ran forty tests and shipped nothing useful is not a success.'],
    ],
    'ctaTitle' => 'Replace opinions with evidence.',
    'ctaCopy' => 'Get a free experimentation roadmap with your highest-value tests ranked.',
    'ctaBtn' => 'Get Testing Roadmap',
    'related' => [
        ['title' => 'Shopify CRO', 'copy' => 'Store-side conversion optimisation', 'url' => url('services/cro-store-optimization')],
        ['title' => 'Landing Pages & Funnels', 'copy' => 'Build the pages being tested', 'url' => url('services/landing-pages-funnels')],
        ['title' => 'Tracking & Attribution', 'copy' => 'Trustworthy measurement behind every test', 'url' => url('services/tracking-attribution')],
        ['title' => 'Meta & Google Ads', 'copy' => 'Scale what the tests validate', 'url' => url('services/meta-google-ads')],
    ],
],

/* ============================================================
   GROUP 3 — MARKETPLACE  (parent: services/shopify-operations)
   ============================================================ */

'services/amazon-account-management' => [
    'slug'  => 'amazon-account-management',
    'route' => 'services/amazon-account-management',
    'parentName'  => 'Marketplace Management',
    'parentRoute' => 'services/shopify-operations',
    'eyebrow' => 'Amazon Account Management',
    'h1' => 'Amazon managed as a profitable sales channel.',
    'intro' => 'End-to-end Amazon seller account management: catalogue and listing quality, advertising, Buy Box and pricing, inventory planning, account health and compliance, and reporting reconciled against your other channels.',
    'answerLabel' => 'What does Amazon account management include?',
    'answer' => 'Amazon account management covers the full operation of a seller account: listing creation and optimisation, A+ content and brand store, advertising across sponsored products, brands and display, keyword and competitor research, Buy Box monitoring and pricing, inventory and restock planning, account health and policy compliance, review and rating management, and performance reporting. AKESTECH manages all of it and reconciles Amazon results against your D2C and other marketplace channels, so you can see true contribution rather than isolated dashboards.',
    'schemaName' => 'Amazon Account Management Services',
    'stats' => [
        ['value' => '6+', 'label' => 'Marketplaces managed'],
        ['value' => '98%', 'label' => 'Catalogue accuracy'],
        ['value' => '3.5X', 'label' => 'Typical advertising ROAS'],
        ['value' => '24/7', 'label' => 'Account health monitoring'],
    ],
    'deliverables' => [
        ['title' => 'Listing Creation and Optimisation', 'copy' => 'Titles, bullets, descriptions, backend keywords and images written for Amazon search and for conversion.'],
        ['title' => 'A+ Content and Brand Store', 'copy' => 'Enhanced brand content, comparison charts and a branded storefront that lift conversion on high-intent traffic.'],
        ['title' => 'Advertising Management', 'copy' => 'Sponsored products, brands and display campaigns managed against target ACOS rather than impressions.'],
        ['title' => 'Buy Box and Pricing', 'copy' => 'Continuous Buy Box monitoring, competitive repricing and margin protection so volume does not come at a loss.'],
        ['title' => 'Inventory Planning', 'copy' => 'Restock forecasting, FBA inbound planning and storage fee management to avoid stockouts and long-term storage penalties.'],
        ['title' => 'Account Health and Compliance', 'copy' => 'Policy monitoring, performance metric tracking, suppression fixes and appeals handled before they become suspensions.'],
    ],
    'process' => [
        ['title' => 'Audit', 'copy' => 'We review catalogue quality, advertising structure, Buy Box performance, account health and true profitability per SKU.'],
        ['title' => 'Fix Fundamentals', 'copy' => 'Listings, images, variations and backend data corrected, because advertising amplifies whatever catalogue quality already exists.'],
        ['title' => 'Build Advertising', 'copy' => 'Campaigns structured by intent and margin, with clear ACOS targets per product group rather than one blended number.'],
        ['title' => 'Operate', 'copy' => 'Daily management of pricing, inventory, health metrics and campaigns, with issues escalated the day they appear.'],
        ['title' => 'Report and Scale', 'copy' => 'Monthly reporting reconciled across channels, with budget and catalogue decisions driven by contribution margin.'],
    ],

    'sections' => [
        [
            'kicker' => 'Catalogue',
            'h2' => 'Listings that rank and convert',
            'paras' => [
                'Amazon rewards listings that turn searches into sales: keyword relevance gets the impression, and conversion velocity earns the rank. We build both — discoverable, complete, persuasive listings — before spending on advertising, because ads amplify whatever catalogue quality already exists.',
            ],
            'bullets' => [
                ['title' => 'Keyword architecture', 'copy' => 'Titles, bullets and backend terms mapped from real search data.'],
                ['title' => 'A+ content', 'copy' => 'Enhanced modules answering objections for high-consideration products.'],
                ['title' => 'Brand Store', 'copy' => 'A storefront that converts brand searchers instead of leaking them.'],
                ['title' => 'Variation discipline', 'copy' => 'Parent-child structures sharing reviews and ranking together.'],
            ],
        ],
        [
            'kicker' => 'Advertising',
            'h2' => 'Advertising held to margin, not vanity',
            'paras' => [
                'Amazon PPC prints money when each product group carries its own ACOS target derived from real margin — and quietly loses it under one blended target. We structure, target and bid per group, then reconcile against organic so incrementality stays visible.',
            ],
            'bullets' => [
                ['title' => 'Group-level ACOS', 'copy' => 'Break-even targets per product group from true unit economics.'],
                ['title' => 'Full-funnel campaigns', 'copy' => 'Sponsored Products, Brands and Display matched to intent stage.'],
                ['title' => 'Search-term mining', 'copy' => 'Harvesting converters, negating waste, week after week.'],
                ['title' => 'Buy Box defense', 'copy' => 'Pricing and fulfilment monitored so ads never point at lost boxes.'],
            ],
        ],
        [
            'kicker' => 'Operations',
            'h2' => 'Health, stock and compliance on autopilot',
            'paras' => [
                'Suspensions, suppressions and stockouts each erase rank that took months to build. Daily operational discipline — health metrics, inventory planning and compliance documentation — is the unglamorous work that keeps the growth compounding.',
            ],
            'bullets' => [
                ['title' => 'Health monitoring', 'copy' => 'Performance metrics watched daily; issues fixed before suspension.'],
                ['title' => 'FBA planning', 'copy' => 'Forecasting and inbound timed to avoid stockouts and storage penalties.'],
                ['title' => 'Compliance files', 'copy' => 'Certifications and documentation ready before Amazon asks.'],
                ['title' => 'Review management', 'copy' => 'Ratings protected through product and service fixes, not tricks.'],
            ],
        ],
    ],
    'faqSlug' => 'amazon-account-management',
    'faqs' => [
        ['question' => 'Which Amazon marketplaces do you manage?', 'answer' => 'We manage Amazon India, the US, UK, UAE, Singapore and other active marketplaces, along with Flipkart, Myntra, Nykaa, Ajio and Meesho. Management covers onboarding, catalogue, advertising, pricing, promotions and account health on each.'],
        ['question' => 'How do you improve Amazon sales?', 'answer' => 'Amazon performance rests on four things working together: listing quality that ranks and converts, advertising that puts products in front of high-intent searchers, Buy Box eligibility maintained through pricing and fulfilment performance, and enough stock to avoid losing rank during a stockout. We fix these in that order, because advertising on a poorly optimised listing mostly accelerates wasted spend.'],
        ['question' => 'What ACOS should we target?', 'answer' => 'Target ACOS comes from your margin, not an industry benchmark. We calculate the break-even ACOS for each product group and set targets below it, then manage towards contribution margin after Amazon fees, fulfilment costs and returns. Low-margin products need tighter ACOS than high-margin ones, so a single blended target is usually wrong.'],
        ['question' => 'Can you help if our account has been suspended or listings suppressed?', 'answer' => 'Yes. We diagnose the root cause, prepare the plan of action, submit the appeal and put the process fixes in place that prevent recurrence. Suppressions are usually caused by catalogue data problems, missing compliance documentation or policy violations, all of which are fixable with the right evidence.'],
        ['question' => 'Do you handle FBA and inventory planning?', 'answer' => 'Yes. We forecast demand, plan FBA inbound shipments, manage replenishment to avoid stockouts and monitor storage utilisation to limit long-term storage fees. Stockouts are especially damaging on Amazon because rank recovery after going out of stock is slow and expensive.'],
        ['question' => 'How do you report on Amazon performance?', 'answer' => 'Monthly reporting covers sales, advertising spend and ACOS, organic versus paid split, Buy Box percentage, account health metrics, returns and contribution margin by SKU. Amazon numbers are reconciled against your other channels so total business performance is visible rather than fragmented across dashboards.'],
        ['question' => 'Can you manage Amazon alongside our own website?', 'answer' => 'Yes, and it works better than treating them separately. We keep catalogue, pricing and inventory consistent, avoid the two channels competing on the same keywords, and report combined performance so you can see which channel genuinely produces better customers.'],
        ['question' => 'How long until Amazon results improve?', 'answer' => 'Listing and catalogue fixes produce movement within four to six weeks as Amazon re-indexes and conversion improves. Advertising efficiency typically improves over two to three months of structured campaign optimisation, and organic rank builds over three to six months as sales velocity compounds.'],
    ],
    'ctaTitle' => 'Make Amazon a channel you can actually read.',
    'ctaCopy' => 'Get a free Amazon audit with catalogue gaps, wasted ad spend and ACOS targets per SKU.',
    'ctaBtn' => 'Get Amazon Audit',
    'related' => [
        ['title' => 'Flipkart & Marketplace Ads', 'copy' => 'Advertising across every marketplace', 'url' => url('services/flipkart-marketplace-ads')],
        ['title' => 'Listing SEO & Catalogue', 'copy' => 'The catalogue work behind the ads', 'url' => url('services/listing-seo-catalogue')],
        ['title' => 'Inventory & Fulfilment', 'copy' => 'Stock planning and FBA operations', 'url' => url('services/inventory-fulfilment')],
        ['title' => 'Marketplace Management', 'copy' => 'The full marketplace operation', 'url' => url('services/shopify-operations')],
    ],
],

'services/flipkart-marketplace-ads' => [
    'slug'  => 'flipkart-marketplace-ads',
    'route' => 'services/flipkart-marketplace-ads',
    'parentName'  => 'Marketplace Management',
    'parentRoute' => 'services/shopify-operations',
    'eyebrow' => 'Flipkart & Marketplace Ads',
    'h1' => 'Marketplace advertising that stays inside your margin.',
    'intro' => 'Paid advertising across Flipkart, Amazon, Myntra, Nykaa, Ajio and Meesho — campaign structure, keyword and product targeting, bid and budget control, and reporting against target ACOS and contribution margin.',
    'answerLabel' => 'What is marketplace advertising management?',
    'answer' => 'Marketplace advertising management is the planning, execution and optimisation of paid placements inside marketplaces rather than on external platforms. It covers sponsored product and brand campaigns, keyword and product-attribute targeting, bid and budget control, placement and dayparting adjustments, promotional calendar alignment, and reporting against target ACOS. AKESTECH runs marketplace advertising alongside your D2C campaigns so the same sale is not counted twice and budget moves to whichever channel produces better contribution.',
    'schemaName' => 'Flipkart and Marketplace Advertising Services',
    'stats' => [
        ['value' => '6+', 'label' => 'Marketplaces managed'],
        ['value' => '3.2X', 'label' => 'Average marketplace ROAS'],
        ['value' => '30%', 'label' => 'Typical wasted spend removed'],
        ['value' => '100%', 'label' => 'Campaigns tracked to margin'],
    ],
    'deliverables' => [
        ['title' => 'Campaign Architecture', 'copy' => 'Campaigns structured by product, intent and margin so budget control and reporting are meaningful rather than blended.'],
        ['title' => 'Keyword and Product Targeting', 'copy' => 'Search term mining, competitor and category targeting, and negative keyword discipline that removes irrelevant spend.'],
        ['title' => 'Bid and Budget Control', 'copy' => 'Bidding managed against target ACOS per product group, with scaling rules tied to contribution margin.'],
        ['title' => 'Placement Optimisation', 'copy' => 'Placement multipliers, dayparting and device adjustments based on where each product group actually converts.'],
        ['title' => 'Campaign and Promo Calendar', 'copy' => 'Advertising aligned to Big Billion Days, Great Indian Festival and category sale events, with budgets planned in advance.'],
        ['title' => 'Cross-Channel Reporting', 'copy' => 'Marketplace advertising reported alongside Meta, Google and D2C so incremental performance is visible, not double counted.'],
    ],
    'process' => [
        ['title' => 'Audit', 'copy' => 'We review existing campaigns, search term reports, placement data and the true profitability of current spend.'],
        ['title' => 'Restructure', 'copy' => 'Campaigns rebuilt by product group and intent, with negatives applied and targets set per group from your margins.'],
        ['title' => 'Optimise', 'copy' => 'Bids, budgets, placements and targeting refined weekly against ACOS and contribution margin rather than impressions.'],
        ['title' => 'Scale Events', 'copy' => 'Sale-event budgets, creative and inventory prepared in advance so peak demand is captured rather than missed.'],
        ['title' => 'Reconcile', 'copy' => 'Monthly cross-channel reporting that shows incremental contribution and prevents the same sale being credited twice.'],
    ],

    'sections' => [
        [
            'kicker' => 'Architecture',
            'h2' => 'Campaign structure per marketplace',
            'paras' => [
                'Each marketplace runs its own auction with its own campaign types, placements and quirks — copying one structure everywhere wastes money everywhere. We build per-platform architecture organized by product group and intent, with negatives and budgets controlled at the right level.',
            ],
            'bullets' => [
                ['title' => 'Platform-native builds', 'copy' => 'Flipkart, Amazon, Myntra and others structured to their own mechanics.'],
                ['title' => 'Intent separation', 'copy' => 'Brand, category and competitor terms budgeted independently.'],
                ['title' => 'Placement control', 'copy' => 'Multipliers and dayparting tuned to where each group converts.'],
                ['title' => 'Negative discipline', 'copy' => 'Irrelevant and cannibalizing queries removed continuously.'],
            ],
        ],
        [
            'kicker' => 'Events',
            'h2' => 'The sale-event playbook',
            'paras' => [
                'Big Billion Days and the Great Indian Festival can make a quarter — for sellers who prepare. Inventory committed early, listings and pricing finalized, campaigns and deal submissions ready weeks ahead. Late preparation means selling out on day one and watching competitors take the rank gains.',
            ],
            'bullets' => [
                ['title' => '6-week countdown', 'copy' => 'Inventory, listings, pricing and budgets locked before the event.'],
                ['title' => 'Deal strategy', 'copy' => 'Coupons, bank offers and lightning deals modeled for margin first.'],
                ['title' => 'Event budgets', 'copy' => 'Aggressive but capped spend with hourly monitoring during peak.'],
                ['title' => 'Rank capture', 'copy' => 'Post-event plans converting sale velocity into lasting organic rank.'],
            ],
        ],
        [
            'kicker' => 'Incrementality',
            'h2' => 'Proving the ads earned their keep',
            'paras' => [
                'Marketplace ads easily take credit for sales the brand would have made anyway — especially on brand terms. We measure incrementality against organic baselines and reconcile with D2C, so budget flows to demand created rather than demand taxed.',
            ],
            'bullets' => [
                ['title' => 'Baseline tracking', 'copy' => 'Organic sales baselined so paid lift is measured, not assumed.'],
                ['title' => 'Holdout tests', 'copy' => 'Geo and product holdouts isolating true causal impact.'],
                ['title' => 'Cross-channel dedupe', 'copy' => 'The same sale never counted in two dashboards twice.'],
                ['title' => 'Margin reporting', 'copy' => 'ACOS reported alongside contribution after fees and returns.'],
            ],
        ],
    ],
    'faqSlug' => 'flipkart-marketplace-ads',
    'faqs' => [
        ['question' => 'Which marketplaces do you run advertising on?', 'answer' => 'Amazon, Flipkart, Myntra, Nykaa, Ajio and Meesho, plus quick-commerce platforms where the category fits. Each has its own campaign types and bidding mechanics, so campaigns are structured per platform rather than copied across.'],
        ['question' => 'How is marketplace advertising different from Meta or Google?', 'answer' => 'Marketplace ads target people already browsing with purchase intent, so conversion rates are usually higher and the audience is smaller. Creative matters less than product data, price competitiveness, rating and delivery speed. That means catalogue quality and Buy Box eligibility are prerequisites for advertising working at all.'],
        ['question' => 'What ACOS should we target on Flipkart?', 'answer' => 'Target ACOS derives from your margin after commission, fulfilment, payment and return costs. We calculate break-even ACOS per product group and set targets below it. A single blended ACOS target across a catalogue with varied margins usually hides both losses and opportunities.'],
        ['question' => 'How do you prepare for Big Billion Days and sale events?', 'answer' => 'Planning starts four to six weeks ahead: inventory committed to FBA or Flipkart Smart Fulfilment, listings and pricing finalised, campaigns and budgets built, and creative and deal submissions completed. Brands that prepare late usually sell out early and lose the rank gains the event would have produced.'],
        ['question' => 'Can you stop our marketplace and D2C ads competing?', 'answer' => 'Yes. We coordinate budgets, monitor whether marketplace sales are genuinely incremental or simply shifting D2C purchases, and report blended customer acquisition across channels. Where a marketplace sale is displacing a higher-margin direct sale, we adjust rather than celebrating a channel number that hides a total-business loss.'],
        ['question' => 'How much should we spend on marketplace ads?', 'answer' => 'Enough to defend your category position and capture branded and high-intent search, then scale against measured incrementality. We usually start by protecting high-converting existing terms, then expand into competitor and category targeting once efficiency is proven.'],
        ['question' => 'Do you manage deals, coupons and promotions?', 'answer' => 'Yes. Deals, coupons, bank offers and lightning deals are planned alongside advertising, because conversion during sale events depends on the offer as much as the placement. We model the margin impact before committing to a discount.'],
        ['question' => 'How do you measure whether marketplace ads are incremental?', 'answer' => 'We compare organic baseline sales against total sales during campaign periods, run geo or product-level holdouts where practical, and reconcile marketplace revenue against D2C performance. This distinguishes advertising that creates new demand from advertising that simply taxes sales you would have made anyway.'],
    ],
    'ctaTitle' => 'Stop guessing at marketplace ad returns.',
    'ctaCopy' => 'Get a free marketplace ads audit with wasted spend and ACOS targets per product group.',
    'ctaBtn' => 'Get Ads Audit',
    'related' => [
        ['title' => 'Amazon Account Management', 'copy' => 'Full Amazon channel operation', 'url' => url('services/amazon-account-management')],
        ['title' => 'Listing SEO & Catalogue', 'copy' => 'Catalogue quality behind the ads', 'url' => url('services/listing-seo-catalogue')],
        ['title' => 'Meta & Google Ads', 'copy' => 'Coordinate with off-marketplace spend', 'url' => url('services/meta-google-ads')],
        ['title' => 'Inventory & Fulfilment', 'copy' => 'Stock availability during peak', 'url' => url('services/inventory-fulfilment')],
    ],
],

'services/listing-seo-catalogue' => [
    'slug'  => 'listing-seo-catalogue',
    'route' => 'services/listing-seo-catalogue',
    'parentName'  => 'Marketplace Management',
    'parentRoute' => 'services/shopify-operations',
    'eyebrow' => 'Listing SEO & Catalogue',
    'h1' => 'Catalogue quality is the cheapest growth you have.',
    'intro' => 'Marketplace listing and catalogue optimisation: keyword research, titles and bullets, backend search terms, images and A+ content, variation structure, attribute completeness and compliance — the foundation every marketplace ad depends on.',
    'answerLabel' => 'What is listing SEO and catalogue management?',
    'answer' => 'Listing SEO and catalogue management is the work of making products discoverable and persuasive inside marketplaces. It covers keyword research specific to each platform, optimised titles, bullets and descriptions, backend search terms, image sets and A+ content, correct parent-child variation structures, complete and accurate attributes, category and compliance requirements, and ongoing maintenance as listings get suppressed or changed. AKESTECH treats catalogue quality as prerequisite work, because advertising on a poorly built listing mostly accelerates wasted spend.',
    'schemaName' => 'Marketplace Listing SEO and Catalogue Services',
    'stats' => [
        ['value' => '98%', 'label' => 'Attribute completeness'],
        ['value' => '40%', 'label' => 'Typical organic traffic lift'],
        ['value' => '6+', 'label' => 'Marketplaces supported'],
        ['value' => '0', 'label' => 'Suppressed listings left unresolved'],
    ],
    'deliverables' => [
        ['title' => 'Keyword Research', 'copy' => 'Platform-specific keyword research using real search term data rather than generic keyword tools.'],
        ['title' => 'Title and Bullet Optimisation', 'copy' => 'Titles and bullets written to rank in marketplace search and to convert once a shopper arrives.'],
        ['title' => 'Backend Search Terms', 'copy' => 'Hidden keywords, attributes and fields completed, which is where much of marketplace discoverability is decided.'],
        ['title' => 'Images and A+ Content', 'copy' => 'Image sets that meet platform standards and enhanced content that answers objections before a shopper scrolls away.'],
        ['title' => 'Variation Structure', 'copy' => 'Parent-child variations built correctly so sizes, colours and packs share reviews and rank together.'],
        ['title' => 'Compliance and Maintenance', 'copy' => 'Category requirements, safety and compliance documentation, plus monitoring and fixing of suppressed or degraded listings.'],
    ],
    'process' => [
        ['title' => 'Catalogue Audit', 'copy' => 'We score every listing on completeness, keyword coverage, image quality, variation structure and suppression status.'],
        ['title' => 'Keyword Mapping', 'copy' => 'Primary and secondary keywords mapped to each product using real search term and competitor data.'],
        ['title' => 'Rewrite and Rebuild', 'copy' => 'Titles, bullets, descriptions, backend terms, variations and attributes rebuilt to platform standards.'],
        ['title' => 'Creative', 'copy' => 'Image sets and A+ content produced to platform specification and brand guidelines.'],
        ['title' => 'Maintain', 'copy' => 'Ongoing monitoring for suppression, buy-box loss, review decay and keyword shifts, with fixes applied continuously.'],
    ],

    'sections' => [
        [
            'kicker' => 'Foundation',
            'h2' => 'Keywords and attributes: the hidden ranking layer',
            'paras' => [
                'Shoppers see titles and images; algorithms weigh the invisible layer harder — backend search terms, complete attributes, correct categorization. Most catalogues fail here quietly. We rebuild this foundation from real search-term data, not generic keyword tools.',
            ],
            'bullets' => [
                ['title' => 'Platform keyword research', 'copy' => 'Real search terms per marketplace, not Google guesses.'],
                ['title' => 'Backend completion', 'copy' => 'Hidden fields filled, where much discoverability is decided.'],
                ['title' => 'Attribute accuracy', 'copy' => 'Complete, correct specs that filters and search both reward.'],
                ['title' => 'Category precision', 'copy' => 'Right nodes and browse paths so products surface where buyers look.'],
            ],
        ],
        [
            'kicker' => 'Content',
            'h2' => 'Content that converts the click',
            'paras' => [
                'Ranking earns the impression; content earns the order. Image sets, A+ modules and variation pages must answer every objection — size, quality, compatibility, authenticity — before the shopper scrolls to a competitor with better answers.',
            ],
            'bullets' => [
                ['title' => 'Compliant image sets', 'copy' => 'Platform-spec visuals with infographics that sell the details.'],
                ['title' => 'A+ and brand content', 'copy' => 'Comparison charts and story modules for considered buys.'],
                ['title' => 'Variation pages', 'copy' => 'Clean size, color and pack selection sharing pooled reviews.'],
                ['title' => 'Localized copy', 'copy' => 'Hindi and regional content where it lifts comprehension and trust.'],
            ],
        ],
        [
            'kicker' => 'Maintenance',
            'h2' => 'Rescue, compliance and upkeep',
            'paras' => [
                'Catalogues decay: listings suppress, attributes degrade, competitors hijack, policies change. Ongoing monitoring catches each failure in days rather than quarters — and suppression rescue follows a proven diagnostic path instead of hopeful appeal spam.',
            ],
            'bullets' => [
                ['title' => 'Suppression diagnosis', 'copy' => 'Root causes read from platform diagnostics, then fixed properly.'],
                ['title' => 'Appeal handling', 'copy' => 'Evidence-backed reinstatement requests with process fixes attached.'],
                ['title' => 'Hijack monitoring', 'copy' => 'Unauthorized sellers and content changes flagged fast.'],
                ['title' => 'Continuous hygiene', 'copy' => 'Regular re-audits keeping the catalogue at full score.'],
            ],
        ],
    ],
    'faqSlug' => 'listing-seo-catalogue',
    'faqs' => [
        ['question' => 'Why does catalogue quality matter so much?', 'answer' => 'Marketplace search decides which products are visible, and advertising cannot overcome a listing that ranks poorly or converts badly. Complete attributes, correct categorisation and strong images improve organic rank, conversion rate and advertising efficiency simultaneously. It is usually the highest-return and lowest-cost work available on any marketplace account.'],
        ['question' => 'How is marketplace SEO different from Google SEO?', 'answer' => 'Marketplace search optimises for a buying algorithm that weights sales velocity, conversion rate, price competitiveness, stock availability and rating alongside keyword relevance. Google weights content, links and intent. That means marketplace SEO is inseparable from pricing, inventory and review management rather than being purely a content exercise.'],
        ['question' => 'Can you fix suppressed or deactivated listings?', 'answer' => 'Yes. Suppression usually stems from missing attributes, image violations, missing compliance documentation, duplicate ASINs or policy issues. We diagnose the specific cause from the platform\'s own diagnostics, correct the underlying data and submit the reinstatement request.'],
        ['question' => 'Do you create the images and A+ content?', 'answer' => 'Yes. Image sets, infographics, lifestyle photography direction and A+ or enhanced brand content are produced to each platform\'s exact specifications, and aligned with your brand guidelines so listings look consistent across marketplaces.'],
        ['question' => 'How long does catalogue optimisation take to show results?', 'answer' => 'Conversion rate improvements often appear within two to three weeks as listings update. Organic rank improvements take four to eight weeks as marketplaces re-index and sales velocity responds. Large catalogues are rolled out in priority order, starting with the highest-revenue and highest-potential products.'],
        ['question' => 'Do you handle variation and parent-child issues?', 'answer' => 'Yes. Incorrect variation structure splits reviews across listings, confuses shoppers and suppresses performance. We audit and rebuild variation relationships so variants share reviews, rank together and present cleanly to buyers.'],
        ['question' => 'Can you manage a catalogue with thousands of SKUs?', 'answer' => 'Yes. Large catalogues are handled with bulk uploads, templated optimisation rules and programme management, prioritised by revenue and opportunity. We typically start with the top 20% of SKUs producing most of the revenue, then work down the tail.'],
        ['question' => 'Will you work with our existing product data?', 'answer' => 'Yes. We work from your existing ERP, PIM, spreadsheet or marketplace export, clean and structure it first, then push it back through bulk feeds. Cleaning the source data matters more than the upload itself, because errors propagate across every marketplace at once.'],
    ],
    'ctaTitle' => 'Fix the foundation before spending more on ads.',
    'ctaCopy' => 'Get a free catalogue audit with completeness scores and the highest-value listings to fix first.',
    'ctaBtn' => 'Get Catalogue Audit',
    'related' => [
        ['title' => 'Amazon Account Management', 'copy' => 'Full Amazon channel operation', 'url' => url('services/amazon-account-management')],
        ['title' => 'Flipkart & Marketplace Ads', 'copy' => 'Advertising that depends on this work', 'url' => url('services/flipkart-marketplace-ads')],
        ['title' => 'Inventory & Fulfilment', 'copy' => 'Keep optimised listings in stock', 'url' => url('services/inventory-fulfilment')],
        ['title' => 'Ops Automation', 'copy' => 'Automate catalogue updates at scale', 'url' => url('services/ops-automation')],
    ],
],

'services/inventory-fulfilment' => [
    'slug'  => 'inventory-fulfilment',
    'route' => 'services/inventory-fulfilment',
    'parentName'  => 'Marketplace Management',
    'parentRoute' => 'services/shopify-operations',
    'eyebrow' => 'Inventory & Fulfilment',
    'h1' => 'Sell what you have, where you have it.',
    'intro' => 'Unified inventory and fulfilment operations across marketplaces, D2C and retail: single stock view with per-channel buffers, demand forecasting, FBA and 3PL coordination, order routing and reconciliation.',
    'answerLabel' => 'What is inventory and fulfilment management?',
    'answer' => 'Inventory and fulfilment management keeps stock accurate and moving across every channel you sell on. It covers unifying inventory between POS, ERP, marketplaces and your own store, setting per-channel safety buffers, demand forecasting and purchase planning, FBA and 3PL coordination, order routing and split shipments, expiry and batch control where relevant, and reconciliation of stock and orders across systems. AKESTECH builds and operates this so overselling stops, stockouts reduce and working capital is not tied up in the wrong SKUs.',
    'schemaName' => 'Inventory and Fulfilment Management Services',
    'stats' => [
        ['value' => '1', 'label' => 'Unified view of stock'],
        ['value' => '70%', 'label' => 'Fewer stockouts'],
        ['value' => '0', 'label' => 'Oversold orders'],
        ['value' => '99%', 'label' => 'Inventory accuracy'],
    ],
    'deliverables' => [
        ['title' => 'Unified Inventory', 'copy' => 'POS, ERP, marketplace and D2C stock connected into one view with per-channel safety buffers.'],
        ['title' => 'Demand Forecasting', 'copy' => 'Forecasting by SKU, channel and season so purchase orders are placed on evidence rather than instinct.'],
        ['title' => 'FBA and 3PL Coordination', 'copy' => 'Inbound planning, shipment creation, reconciliation and storage fee management across fulfilment partners.'],
        ['title' => 'Order Routing', 'copy' => 'Rules that route each order to the best fulfilment location by cost, proximity and SLA commitment.'],
        ['title' => 'Batch and Expiry Control', 'copy' => 'Batch tracking, expiry management and FIFO rotation for food, pharma and cosmetic categories.'],
        ['title' => 'Reconciliation', 'copy' => 'Regular reconciliation of stock and orders across every system, with variances investigated and corrected.'],
    ],
    'process' => [
        ['title' => 'Map', 'copy' => 'We document every stock location, sales channel, fulfilment partner and current data flow between them.'],
        ['title' => 'Unify', 'copy' => 'Inventory connected into a single source of truth with synchronisation frequency and safety buffers per channel.'],
        ['title' => 'Forecast', 'copy' => 'Demand models built from historical sales, seasonality and lead times to drive purchase and replenishment planning.'],
        ['title' => 'Operate', 'copy' => 'Daily management of inbound, routing, stockouts and variances, with alerting on anything that breaks.'],
        ['title' => 'Improve', 'copy' => 'Monthly review of stockouts, ageing inventory, fill rate and working capital to tighten the operation.'],
    ],

    'sections' => [
        [
            'kicker' => 'Architecture',
            'h2' => 'One stock truth across every channel',
            'paras' => [
                'Overselling happens when each channel holds its own stock number and updates lag behind reality. We centralize inventory into one source of truth with per-channel buffers and defined sync cadence — so the last unit can never be sold twice.',
            ],
            'bullets' => [
                ['title' => 'Centralized stock', 'copy' => 'POS, ERP, marketplaces and D2C reading one ledger.'],
                ['title' => 'Safety buffers', 'copy' => 'Per-channel reserves sized to velocity and sync frequency.'],
                ['title' => 'Event-driven sync', 'copy' => 'Updates pushed on sale and receipt, not nightly batches.'],
                ['title' => 'Variance alerts', 'copy' => 'Mismatches flagged in hours, investigated the same day.'],
            ],
        ],
        [
            'kicker' => 'Planning',
            'h2' => 'Forecasting that prevents stockouts',
            'paras' => [
                'Stockouts cost twice: the lost sale today and the lost rank tomorrow, especially on Amazon. Demand models built per SKU, channel and season — with supplier lead times baked in — turn reordering from guesswork into a scheduled operation.',
            ],
            'bullets' => [
                ['title' => 'SKU-level forecasts', 'copy' => 'Velocity, seasonality and events modeled per product and channel.'],
                ['title' => 'Reorder automation', 'copy' => 'Purchase triggers firing on evidence, not on empty shelves.'],
                ['title' => 'Event planning', 'copy' => 'Festival and sale inventory committed weeks ahead with buffers.'],
                ['title' => 'Ageing reports', 'copy' => 'Slow movers flagged early for promotion before they become dead stock.'],
            ],
        ],
        [
            'kicker' => 'Fulfilment',
            'h2' => 'Routing and warehousing that hit SLAs',
            'paras' => [
                'Where an order ships from decides its cost, its speed and whether the promise gets kept. Smart routing across warehouses, FBA and 3PL partners balances all three — while batch and expiry control protects regulated categories.',
            ],
            'bullets' => [
                ['title' => 'Smart order routing', 'copy' => 'Cheapest compliant location by proximity, cost and SLA.'],
                ['title' => 'FBA and 3PL management', 'copy' => 'Inbound planning, reconciliation and storage-fee control.'],
                ['title' => 'Multi-warehouse ops', 'copy' => 'Distributed stock enabling faster delivery promises.'],
                ['title' => 'Batch and expiry', 'copy' => 'FIFO rotation and tracking for food, pharma and cosmetics.'],
            ],
        ],
    ],
    'faqSlug' => 'inventory-fulfilment',
    'faqs' => [
        ['question' => 'How do you stop overselling across channels?', 'answer' => 'Overselling happens when each channel holds its own stock number and updates lag. We centralise inventory into one source of truth, push updates to every channel on a defined cadence or on event, and apply safety buffers so a channel never sells stock another channel has already committed.'],
        ['question' => 'What is a safety buffer and why do we need one?', 'answer' => 'A safety buffer is stock deliberately held back from a channel to absorb synchronisation delays and simultaneous orders. Without one, the last unit of a product can be sold twice in the seconds before stock updates propagate. The right buffer size depends on your order velocity and sync frequency.'],
        ['question' => 'Can you work with our existing ERP or accounting system?', 'answer' => 'Yes. We integrate with most ERPs, accounting platforms and WMS systems, and build custom connectors where a standard integration does not exist. Where a business has no system in place, we help select and implement one rather than building around spreadsheets.'],
        ['question' => 'How do you reduce stockouts?', 'answer' => 'Stockouts are prevented by forecasting demand per SKU and channel, accounting for supplier lead times, triggering reorder points automatically and planning marketplace inbound well ahead of sale events. We also monitor sell-through velocity so fast movers are identified before they run dry rather than after.'],
        ['question' => 'Do you manage FBA inbound shipments?', 'answer' => 'Yes. We plan what to send, create inbound shipments, coordinate with your warehouse or 3PL, reconcile received quantities against what was shipped, and monitor storage utilisation to limit long-term storage fees.'],
        ['question' => 'How do you handle expired or slow-moving stock?', 'answer' => 'Ageing reports flag slow movers early so discounting, bundling or marketplace promotion can clear them before they become write-offs. For expirable goods we implement batch tracking and FIFO rotation so stock nearing expiry is sold first.'],
        ['question' => 'Can you support multi-warehouse operations?', 'answer' => 'Yes. Orders are routed by proximity, cost and delivery SLA, inventory is tracked per location, and inter-warehouse transfers are managed. This is what allows a brand to promise faster delivery without holding all stock in one central location.'],
        ['question' => 'How much inventory accuracy should we expect?', 'answer' => 'With proper integration, cycle counting and reconciliation, 99% accuracy is realistic. Most businesses operating on manual spreadsheets run considerably lower, which is why stockouts and overselling feel random when they are actually systematic.'],
    ],
    'ctaTitle' => 'Stop losing sales to stock you actually have.',
    'ctaCopy' => 'Get a free inventory audit with stockout cost, overselling risk and unification plan.',
    'ctaBtn' => 'Get Inventory Audit',
    'related' => [
        ['title' => 'Ops Automation', 'copy' => 'Automate the stock and order workflows', 'url' => url('services/ops-automation')],
        ['title' => 'Listing SEO & Catalogue', 'copy' => 'Keep listings live and in stock', 'url' => url('services/listing-seo-catalogue')],
        ['title' => 'RTO & Returns Control', 'copy' => 'Reduce returns eroding stock', 'url' => url('services/rto-returns-control')],
        ['title' => 'Custom Shopify Development', 'copy' => 'ERP and WMS integrations', 'url' => url('services/custom-shopify-development')],
    ],
],

'services/rto-returns-control' => [
    'slug'  => 'rto-returns-control',
    'route' => 'services/rto-returns-control',
    'parentName' => 'Marketplace Management',
    'parentRoute' => 'services/shopify-operations',
    'eyebrow' => 'RTO & Returns Control',
    'h1' => 'Stop paying for orders that come back.',
    'intro' => 'Return-to-origin and returns reduction for Indian ecommerce: COD verification, address validation, pre-dispatch confirmation, delivery exception management, returns analysis and prevention — typically cutting RTO by around 40%.',
    'answerLabel' => 'What is RTO and how do you reduce it?',
    'answer' => 'RTO, or return to origin, is when a shipped order comes back undelivered, and it costs the merchant both forward and reverse shipping plus packaging and handling. Reducing it requires work at three points: before the order, through address validation and clearer product information; at confirmation, through automated COD verification by WhatsApp or IVR; and after dispatch, through proactive delivery updates and exception management. AKESTECH implements all three plus ongoing analysis, and most brands see RTO fall by roughly 40% within eight to twelve weeks.',
    'schemaName' => 'RTO and Returns Reduction Services',
    'stats' => [
        ['value' => '40%', 'label' => 'Average RTO reduction'],
        ['value' => '30s', 'label' => 'Automated COD confirmation'],
        ['value' => '3', 'label' => 'Verification points per order'],
        ['value' => '8 wk', 'label' => 'Typical time to impact'],
    ],
    'deliverables' => [
        ['title' => 'Address Validation', 'copy' => 'Pin code, locality and phone validation at checkout, with correction prompts before an order is placed.'],
        ['title' => 'COD Verification', 'copy' => 'Automated WhatsApp or IVR confirmation of every cash-on-delivery order before it is packed and shipped.'],
        ['title' => 'Risk Scoring', 'copy' => 'Orders scored on address quality, order history, value and location so high-risk orders get extra verification or prepayment.'],
        ['title' => 'Delivery Exception Management', 'copy' => 'Failed-attempt alerts and proactive customer contact that convert potential RTOs into successful deliveries.'],
        ['title' => 'Returns Analysis', 'copy' => 'Returns broken down by reason, product, size and customer, so root causes are fixed rather than absorbed.'],
        ['title' => 'Policy and Expectation Setting', 'copy' => 'Clear product pages, size guidance and delivery expectations that prevent mismatch returns before they happen.'],
    ],
    'process' => [
        ['title' => 'Measure', 'copy' => 'We establish your true RTO and return rates by product, payment method, region and courier, including the full cost per return.'],
        ['title' => 'Diagnose', 'copy' => 'Returns data, failed delivery reports and customer feedback are analysed to find the actual causes rather than the assumed ones.'],
        ['title' => 'Implement', 'copy' => 'Address validation, COD confirmation, risk scoring and exception workflows built into your order flow.'],
        ['title' => 'Monitor', 'copy' => 'Daily tracking of RTO, confirmation rates and courier performance, with issues escalated as they appear.'],
        ['title' => 'Refine', 'copy' => 'Monthly refinement of rules and thresholds as volume grows and new failure patterns emerge.'],
    ],

    'sections' => [
        [
            'kicker' => 'Prevention',
            'h2' => 'Stopping bad shipments before dispatch',
            'paras' => [
                'The cheapest return is the one never shipped. Address validation, COD confirmation and risk scoring filter undeliverable and fraudulent orders at the gate — cutting RTO at its source instead of chasing couriers afterwards.',
            ],
            'bullets' => [
                ['title' => 'Address validation', 'copy' => 'Pin code, locality and phone checks with correction prompts.'],
                ['title' => 'COD confirmation', 'copy' => 'One-tap WhatsApp or IVR verification within seconds of order.'],
                ['title' => 'Risk scoring', 'copy' => 'Value, history, location and pattern signals routing risky orders to prepay.'],
                ['title' => 'Fake-order filters', 'copy' => 'Repeat offenders and impossible addresses blocked automatically.'],
            ],
        ],
        [
            'kicker' => 'Recovery',
            'h2' => 'Recovering deliveries in transit',
            'paras' => [
                'A failed delivery attempt is not yet a return — it is a short window where proactive contact converts an RTO into a delivered order. Exception monitoring with same-day customer outreach recovers a large share of would-be returns.',
            ],
            'bullets' => [
                ['title' => 'NDR workflows', 'copy' => 'Same-day WhatsApp and calling on every non-delivery report.'],
                ['title' => 'Address correction', 'copy' => 'Customer-confirmed fixes pushed to the courier before re-attempt.'],
                ['title' => 'Courier switching', 'copy' => 'Underperforming lanes re-routed by region and performance data.'],
                ['title' => 'Delivery promises', 'copy' => 'Proactive updates reducing refusals from uninformed customers.'],
            ],
        ],
        [
            'kicker' => 'Root causes',
            'h2' => 'Fixing why products come back',
            'paras' => [
                'Delivered-order returns point at the product page, the product or the packaging — size confusion, expectation mismatch, quality gaps or transit damage. Breaking returns down by reason and SKU turns a cost center into a prioritized fix list.',
            ],
            'bullets' => [
                ['title' => 'Reason analytics', 'copy' => 'Returns sliced by cause, product, size and customer cohort.'],
                ['title' => 'Page fixes', 'copy' => 'Photography, descriptions and size guides corrected where mismatch rules.'],
                ['title' => 'Quality loops', 'copy' => 'Defect patterns fed back to sourcing and QC with evidence.'],
                ['title' => 'Packaging upgrades', 'copy' => 'Damage-rate data justifying exactly where protection pays.'],
            ],
        ],
    ],
    'faqSlug' => 'rto-returns-control',
    'faqs' => [
        ['question' => 'What is a good RTO rate in India?', 'answer' => 'It varies by category and payment mix, but many COD-heavy businesses run between 15% and 30%, which is far higher than it needs to be. Well-managed operations typically bring this into single digits. The first step is measuring it properly, because most merchants significantly underestimate their true rate and its cost.'],
        ['question' => 'How much does RTO actually cost?', 'answer' => 'More than the shipping fee. Each returned order carries forward shipping, reverse shipping, packaging, payment gateway fees, handling labour and the opportunity cost of stock being unavailable while in transit. For a low-value order, an RTO can easily exceed the entire order value.'],
        ['question' => 'Does confirming COD orders reduce sales?', 'answer' => 'Conversion can dip slightly on unverified orders, but net profitability almost always improves because the confirmed orders that ship are far more likely to complete. We measure both confirmation rate and cancellation rate so you can see the trade-off rather than guessing at it.'],
        ['question' => 'How do you verify COD orders without annoying customers?', 'answer' => 'With a single-tap WhatsApp or IVR confirmation sent within seconds of order placement, written clearly and requiring one action. Speed and simplicity matter: verification that takes more than a few seconds or requires typing causes unnecessary cancellations.'],
        ['question' => 'Can you reduce returns of delivered orders too?', 'answer' => 'Yes. Returns of delivered orders usually stem from size or fit problems, expectation mismatch, quality issues or damage in transit. We analyse return reasons by product and fix the root cause, which often means better product photography, accurate descriptions, size charts and packaging changes.'],
        ['question' => 'How do you handle fake or fraudulent orders?', 'answer' => 'Risk scoring flags suspicious patterns such as repeated addresses, unusual order values, new accounts with high-value COD orders and known problem pin codes. High-risk orders are routed to prepayment or additional verification rather than being shipped on trust.'],
        ['question' => 'Can you work with our existing courier partners?', 'answer' => 'Yes. We integrate with Shiprocket, Delhivery, Bluedart and most other logistics providers, and we analyse performance by courier and region so underperforming lanes can be re-routed rather than tolerated.'],
        ['question' => 'How quickly will we see RTO reduction?', 'answer' => 'COD verification and address validation produce measurable improvement within two to four weeks. Deeper reductions from returns analysis, product content fixes and courier optimisation build over eight to twelve weeks as patterns emerge and corrections take effect.'],
    ],
    'ctaTitle' => 'Recover the margin RTO is quietly taking.',
    'ctaCopy' => 'Get a free RTO audit with your true return cost and the highest-value fixes.',
    'ctaBtn' => 'Get RTO Audit',
    'related' => [
        ['title' => 'Ops Automation', 'copy' => 'Automate verification and exception flows', 'url' => url('services/ops-automation')],
        ['title' => 'Inventory & Fulfilment', 'copy' => 'Stock and dispatch operations', 'url' => url('services/inventory-fulfilment')],
        ['title' => 'AI & Automation', 'copy' => 'WhatsApp and IVR automation', 'url' => url('services/automation')],
        ['title' => 'Marketplace Management', 'copy' => 'Returns across marketplace channels', 'url' => url('services/shopify-operations')],
    ],
],

'services/ops-automation' => [
    'slug'  => 'ops-automation',
    'route' => 'services/ops-automation',
    'parentName' => 'Marketplace Management',
    'parentRoute' => 'services/shopify-operations',
    'eyebrow' => 'Ops Automation',
    'h1' => 'Remove the manual work between your systems.',
    'intro' => 'Operations automation for commerce businesses: order and inventory workflows, catalogue synchronisation, reconciliation, reporting and exception handling — built so your team stops copying data between tools.',
    'answerLabel' => 'What is operations automation?',
    'answer' => 'Operations automation replaces manual work between the systems a commerce business runs on. It covers order routing and status sync, inventory synchronisation across channels, catalogue and pricing updates, reconciliation of payments, orders and stock, automated reporting and dashboards, exception alerting, and integrations between ERP, WMS, CRM, marketplaces and the store. AKESTECH designs, builds and maintains these workflows, typically removing 20 or more hours of manual work per week from an operations team.',
    'schemaName' => 'Commerce Operations Automation Services',
    'stats' => [
        ['value' => '25 hrs', 'label' => 'Saved every week'],
        ['value' => '100+', 'label' => 'Processes automated'],
        ['value' => '99%', 'label' => 'Reduction in manual data entry'],
        ['value' => '24/7', 'label' => 'Monitoring and alerting'],
    ],
    'deliverables' => [
        ['title' => 'Process Audit', 'copy' => 'Every manual workflow mapped and ranked by hours saved and error cost, so automation effort goes where it pays.'],
        ['title' => 'Workflow Automation', 'copy' => 'Order routing, status updates, tagging, invoicing and fulfilment triggers run automatically across systems.'],
        ['title' => 'Data Synchronisation', 'copy' => 'Inventory, pricing, catalogue and customer data kept consistent across every channel and system.'],
        ['title' => 'Reconciliation', 'copy' => 'Automated matching of orders, payments, settlements, fees and stock, with variances flagged rather than silently absorbed.'],
        ['title' => 'Reporting and Dashboards', 'copy' => 'Scheduled reports and live dashboards that replace manual spreadsheet compilation every morning.'],
        ['title' => 'Exception Alerting', 'copy' => 'Failures, delays and anomalies detected and escalated immediately instead of being discovered at month end.'],
    ],
    'process' => [
        ['title' => 'Audit', 'copy' => 'We map every manual process, quantify the hours and error rates, and rank them by impact.'],
        ['title' => 'Design', 'copy' => 'Target workflows designed with triggers, data flow, failure handling and human escalation paths defined up front.'],
        ['title' => 'Build', 'copy' => 'Automations built with proper error handling, retry logic, logging and monitoring rather than fragile scripts.'],
        ['title' => 'Roll Out', 'copy' => 'Deployed in stages with parallel running, so the old manual process remains available until the new one is proven.'],
        ['title' => 'Maintain', 'copy' => 'Ongoing monitoring, fixes and extensions as your systems, volumes and requirements change.'],
    ],

    'sections' => [
        [
            'kicker' => 'Priorities',
            'h2' => 'Automating what pays first',
            'paras' => [
                'Not every manual task deserves automation; some are cheaper done by hand. The process audit maps every workflow and ranks it by hours consumed, error cost and customer impact — so the build order follows return, starting where payback is fastest.',
            ],
            'bullets' => [
                ['title' => 'Workflow inventory', 'copy' => 'Every manual process mapped with its real time cost.'],
                ['title' => 'Impact ranking', 'copy' => 'Hours, errors and SLA risk scored into one build order.'],
                ['title' => 'Quick wins first', 'copy' => 'High-volume, rule-based flows delivering value in weeks.'],
                ['title' => 'Honest exclusions', 'copy' => 'Low-value tasks left manual, with the reasoning documented.'],
            ],
        ],
        [
            'kicker' => 'Engineering',
            'h2' => 'Workflows built like systems',
            'paras' => [
                'Fragile scripts fail silently and get abandoned. Production workflows carry triggers, data validation, retries, logging, monitoring and human escalation paths — the engineering that lets automation run unattended without becoming a liability.',
            ],
            'bullets' => [
                ['title' => 'Defined triggers', 'copy' => 'Events, schedules and webhooks firing flows deterministically.'],
                ['title' => 'Validation and retries', 'copy' => 'Bad data quarantined, transient failures retried, nothing lost silently.'],
                ['title' => 'Monitoring', 'copy' => 'Every flow watched with alerts firing in minutes, not month-end.'],
                ['title' => 'Escalation paths', 'copy' => 'Humans looped in exactly where judgment is required.'],
            ],
        ],
        [
            'kicker' => 'Ownership',
            'h2' => 'Rollout your team trusts',
            'paras' => [
                'Automation fails socially more often than technically: teams bypass systems they do not trust. Parallel runs, documentation and training build confidence — and ongoing maintenance keeps every workflow current as tools, volumes and processes change.',
            ],
            'bullets' => [
                ['title' => 'Parallel running', 'copy' => 'Old and new processes side by side until the new one proves out.'],
                ['title' => 'SOPs and runbooks', 'copy' => 'Every workflow documented for the people who operate it daily.'],
                ['title' => 'Team training', 'copy' => 'Operators taught to monitor, handle exceptions and request changes.'],
                ['title' => 'Continuous upkeep', 'copy' => 'Monitoring, fixes and extensions as systems and scale evolve.'],
            ],
        ],
    ],
    'faqSlug' => 'ops-automation',
    'faqs' => [
        ['question' => 'What should we automate first?', 'answer' => 'Whatever is high volume, rule-based and currently causing visible delay or errors. For most commerce businesses that is inventory synchronisation, order routing, status updates, reconciliation and daily reporting. We start with an audit that ranks every manual process by hours saved and error cost, then build from the top.'],
        ['question' => 'How many hours can automation realistically save?', 'answer' => 'Most operations teams recover 15 to 25 hours a week, though the larger benefit is usually error reduction. A single prevented oversell, missed reconciliation or delayed exception alert can be worth more than the saved hours in a given month.'],
        ['question' => 'Which tools do you use for automation?', 'answer' => 'We use n8n and Make for workflow automation, native platform APIs wherever available, and custom services where scale or reliability demands it. The choice depends on volume, criticality and how much error handling the process needs, not on a preferred tool.'],
        ['question' => 'What happens when an automation fails?', 'answer' => 'Every automation is built with retry logic, logging, monitoring and alerting, so failures surface in minutes rather than at month end. Critical workflows include a human escalation path and, during rollout, the old manual process stays available until the automation is proven stable.'],
        ['question' => 'Can you integrate tools that do not have a native connector?', 'answer' => 'Yes. Where no off-the-shelf connector exists we build custom integrations against REST APIs, or use webhooks, file-based exchange or database-level integration as appropriate. Our product team handles this in-house rather than treating it as out of scope.'],
        ['question' => 'Is this different from your AI & Automation service?', 'answer' => 'Yes. AI & Automation focuses on customer-facing and revenue-generating automation: AI agents, lead qualification, WhatsApp journeys and sales workflows. Ops Automation focuses on back-office operational work: order flows, inventory sync, reconciliation and reporting. Many clients run both.'],
        ['question' => 'How long does an automation project take?', 'answer' => 'A focused workflow can be live in two to three weeks. A broader programme covering inventory, orders, reconciliation and reporting typically runs eight to twelve weeks, delivered in stages so value arrives early rather than at the end.'],
        ['question' => 'Do we need to change our existing systems?', 'answer' => 'Usually not. Automation connects the tools you already use rather than replacing them. We only recommend changing a system when it genuinely cannot support the process, and we will say so explicitly rather than bundling a migration into an automation project.'],
    ],
    'ctaTitle' => 'Give your operations team their week back.',
    'ctaCopy' => 'Get a free process audit with hours saved, error cost and a ranked build order.',
    'ctaBtn' => 'Get Process Audit',
    'related' => [
        ['title' => 'AI & Automation', 'copy' => 'Customer-facing and revenue automation', 'url' => url('services/automation')],
        ['title' => 'Inventory & Fulfilment', 'copy' => 'The operations being automated', 'url' => url('services/inventory-fulfilment')],
        ['title' => 'RTO & Returns Control', 'copy' => 'Automate verification and exception flows', 'url' => url('services/rto-returns-control')],
        ['title' => 'Custom Shopify Development', 'copy' => 'Custom integrations and middleware', 'url' => url('services/custom-shopify-development')],
    ],
],

        ];
    }
}

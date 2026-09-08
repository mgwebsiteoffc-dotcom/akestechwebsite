<?php
/**
 * Service: Marketplace Management — slug /services/shopify-operations (UNCHANGED)
 */
$sp = [
    'slug'  => 'shopify-operations',
    'route' => 'services/shopify-operations',
    'eyebrow' => 'Marketplace Management',
    'h1' => 'Your backend should run like clockwork.',
    'intro' => 'Operations chaos kills D2C brands silently. High RTO, manual order processing, stockouts and shipping delays eat your margins before you even notice. We systemise, automate and optimise every operational layer of your store and marketplaces.',
    'answerLabel' => 'What is marketplace management?',
    'answer' => 'Marketplace management is the day-to-day running of your Amazon, Flipkart and D2C operations: listing creation and SEO, catalogue hygiene, marketplace ads, inventory and fulfilment control, returns and RTO reduction, and reporting. AKESTECH runs all of it as one system so inventory, margin and customer data stay consistent everywhere you sell.',
    'schemaName' => 'Marketplace Management Services',
    'stats' => [
        ['value' => '40%', 'label' => 'Average RTO reduction'],
        ['value' => '25 hrs', 'label' => 'Saved every week'],
        ['value' => '6+', 'label' => 'Marketplaces managed'],
        ['value' => '98%', 'label' => 'Catalogue accuracy'],
    ],
    'deliverables' => [
        ['title' => 'Amazon Account Management', 'copy' => 'Account health, listings, A+ content, ads and performance monitoring handled end to end.', 'url' => url('services/amazon-account-management')],
        ['title' => 'Flipkart & Marketplace Ads', 'copy' => 'Sponsored product and brand campaigns managed against contribution margin, not just ACOS.', 'url' => url('services/flipkart-marketplace-ads')],
        ['title' => 'Listing SEO & Catalogue', 'copy' => 'Keyword-led titles, bullets, backend terms and image sets that rank and convert.', 'url' => url('services/listing-seo-catalogue')],
        ['title' => 'Inventory & Fulfilment', 'copy' => 'Demand planning, stock sync and shipping SLAs so you stop overselling and stocking out.', 'url' => url('services/inventory-fulfilment')],
        ['title' => 'RTO & Returns Control', 'copy' => 'Address verification, prepaid nudges, confirmation calls and return analytics.', 'url' => url('services/rto-returns-control')],
        ['title' => 'Ops Automation', 'copy' => 'Order routing, status updates, exception handling and reconciliation without manual work.', 'url' => url('services/ops-automation')],
    ],
    'process' => [
        ['title' => 'Map', 'copy' => 'We document your current order, inventory and return flows end to end.'],
        ['title' => 'Fix', 'copy' => 'The highest-cost leaks — RTO, stockouts, manual processing — get addressed first.'],
        ['title' => 'Systemise', 'copy' => 'SOPs, dashboards and automation replace tribal knowledge and spreadsheets.'],
        ['title' => 'Run', 'copy' => 'Our team operates the process daily against agreed SLAs.'],
        ['title' => 'Improve', 'copy' => 'Monthly reviews on cost per order, RTO rate, fill rate and dispatch time.'],
    ],
    'faqSlug' => 'shopify-operations',
    'faqs' => [
        ['question' => 'What is marketplace management?', 'answer' => 'Marketplace management is the day-to-day running of your Amazon, Flipkart and D2C operations: listing creation and SEO, catalogue hygiene, marketplace ads, inventory and fulfilment control, returns and RTO reduction, and reporting. AKESTECH runs it as one system.'],
        ['question' => 'How do you reduce RTO?', 'answer' => 'Address verification, prepaid nudges, COD confirmation calls, delivery exception handling and return analytics. Most brands see RTO fall by around 40 percent.'],
        ['question' => 'Can you manage Amazon and Flipkart alongside our own store?', 'answer' => 'Yes. One view of inventory, orders, returns and margin across marketplaces and your own store is the core of our operations work.'],
        ['question' => 'How is marketplace performance reported?', 'answer' => 'Contribution margin by channel and campaign, reported on a dashboard rather than in spreadsheets - including ad spend, fees, shipping and returns.'],
        ['question' => 'Do you automate operational work?', 'answer' => 'Yes. Order routing, status updates, exception handling, reconciliation and reporting are automated so your team is not doing manual data entry.'],
        ['question' => 'Which marketplaces do you manage?', 'answer' => 'Amazon, Flipkart, Myntra, Nykaa, Ajio and Meesho, along with quick-commerce platforms where they fit the category. We manage onboarding, catalogue, advertising, pricing, promotions and account health, and reconcile marketplace performance against your own store so you can see true contribution.'],
        ['question' => 'Do you handle catalogue and listing optimisation?', 'answer' => 'Yes. That covers titles, bullets and descriptions written for marketplace search and for conversion, image and A+ content standards, variation and parent-child structure, attribute completeness and backend keywords. Catalogue quality is usually the cheapest available improvement in marketplace performance.'],
        ['question' => 'Can you manage marketplace advertising?', 'answer' => 'Yes. We run sponsored products, brands and display campaigns, manage bids and budgets against target ACOS rather than impressions, and report marketplace advertising alongside your other channels so the same revenue is not counted twice in different dashboards.'],
    ],
    'ctaTitle' => 'Stop losing margin to operational chaos.',
    'ctaCopy' => 'Get an operations review and see exactly where your money is leaking.',
    'ctaBtn' => 'Get Operations Review',
    'related' => [
        ['title' => 'Shopify & Commerce', 'copy' => 'The storefront your customers see', 'url' => url('services/shopify-growth')],
        ['title' => 'AI & Automation', 'copy' => 'Automate order and support ops', 'url' => url('services/automation')],
        ['title' => 'Performance Marketing', 'copy' => 'Drive demand to every channel', 'url' => url('services/performance-marketing')],
        ['title' => 'Product Development', 'copy' => 'Custom operations tooling', 'url' => url('services/technology')],
    ],
];

require __DIR__ . '/../../includes/components/service-page.php';

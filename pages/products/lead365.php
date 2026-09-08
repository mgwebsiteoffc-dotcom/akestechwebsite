<?php
/**
 * Product: Lead365 — NEW page, new slug /products/lead365
 * The existing /products/whatsapp-shopify slug is untouched.
 */

$sp = [
    'slug'  => 'products/lead365',
    'route' => 'products/lead365',
    'eyebrow' => 'AKESTECH Product / 01',
    'h1' => 'Lead365 — every lead, tracked and followed up.',
    'intro' => 'Lead management and automation infrastructure connecting channels, teams and customer journeys. Every enquiry from your website, ads, marketplaces and WhatsApp lands in one system with automatic routing, follow-up and reporting.',
    'answerLabel' => 'What is Lead365?',
    'answer' => 'Lead365 is AKESTECH\'s lead management and automation platform. It captures enquiries from every source, deduplicates and scores them, routes each lead to the right person or team, triggers WhatsApp, email and SMS follow-up sequences, and reports on source, speed-to-lead and conversion — so no enquiry is lost and no salesperson has to chase a spreadsheet.',
    'schemaName' => 'Lead365 — Lead Management Platform',
    'stats' => [
        ['value' => '365', 'label' => 'Days a year, always on'],
        ['value' => '1', 'label' => 'View of every lead'],
        ['value' => '< 5 min', 'label' => 'Speed to first response'],
        ['value' => '0', 'label' => 'Leads lost to spreadsheets'],
    ],
    'deliverables' => [
        ['title' => 'Universal Lead Capture', 'copy' => 'Forms, landing pages, ad platforms, marketplaces, WhatsApp and phone enquiries in one inbox.'],
        ['title' => 'Smart Routing', 'copy' => 'Route by source, geography, product, value or team availability — automatically.'],
        ['title' => 'Automated Follow-up', 'copy' => 'WhatsApp, email and SMS sequences that run until a human picks the conversation up.'],
        ['title' => 'Pipeline & Stages', 'copy' => 'Custom stages, reminders and SLA alerts so deals do not sit still.'],
        ['title' => 'Source Attribution', 'copy' => 'Cost per lead and cost per acquisition by campaign, channel and keyword.'],
        ['title' => 'Integrations', 'copy' => 'Connects to your CRM, ERP, WhatsApp Business API, ad accounts and analytics.'],
    ],
    'process' => [
        ['title' => 'Connect', 'copy' => 'We plug every lead source into Lead365 and reconcile historical data.'],
        ['title' => 'Configure', 'copy' => 'Stages, routing rules, SLAs and follow-up sequences set up for your sales motion.'],
        ['title' => 'Automate', 'copy' => 'Follow-ups, reminders and escalations start running without manual effort.'],
        ['title' => 'Train', 'copy' => 'Your team gets a working system and the training to use it properly.'],
        ['title' => 'Optimise', 'copy' => 'Monthly review of response times, drop-offs and channel performance.'],
    ],
    'faqSlug' => 'lead365',
    'faqs' => [
        ['question' => 'What is Lead365?', 'answer' => 'Lead365 is AKESTECH\'s lead management and automation platform. It captures enquiries from every source, deduplicates and scores them, routes each lead to the right person or team, triggers WhatsApp, email and SMS follow-up sequences, and reports on source, speed-to-lead and conversion.'],
        ['question' => 'Can Lead365 integrate with our existing CRM?', 'answer' => 'Yes. Lead365 integrates with most CRMs and can also become the single system your team works inside, depending on what you prefer.'],
        ['question' => 'How fast can we get started?', 'answer' => 'Most teams are live within two weeks: source connection, routing rules, follow-up sequences and team training included.'],
        ['question' => 'Does it work for B2B and B2C?', 'answer' => 'Yes. Lead365 is used by real estate, healthcare, education, automotive, professional services and ecommerce teams with different pipelines and SLAs.'],
        ['question' => 'How is pricing structured?', 'answer' => 'Pricing depends on lead volume, number of users and integrations required. Book a demo and we will scope it against your actual enquiry flow.'],
    ],
    'ctaTitle' => 'Stop losing leads to a spreadsheet.',
    'ctaCopy' => 'Book a Lead365 walkthrough and see it running against your own enquiry flow.',
    'ctaBtn' => 'Book a Lead365 Demo',
    'extraSchemas' => [
        json_encode([
            "@context" => "https://schema.org",
            "@type" => "SoftwareApplication",
            "name" => "Lead365",
            "applicationCategory" => "BusinessApplication",
            "applicationSubCategory" => "Lead Management & Automation",
            "operatingSystem" => "Web",
            "description" => "Lead management and automation infrastructure connecting channels, teams and customer journeys with routing, follow-up and attribution.",
            "url" => url('products/lead365'),
            "provider" => [
                "@type" => "Organization",
                "name" => SITE_NAME,
                "url" => SITE_URL,
            ],
            "offers" => [
                "@type" => "Offer",
                "priceCurrency" => "INR",
                "description" => "Custom pricing based on lead volume and integrations",
            ],
        ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT),
    ],
    'related' => [
        ['title' => 'Whatify — WhatsApp Commerce', 'copy' => 'Our WhatsApp engagement product', 'url' => url('products/whatsapp-shopify')],
        ['title' => 'AI & Automation', 'copy' => 'The automation work behind it', 'url' => url('services/automation')],
        ['title' => 'Performance Marketing', 'copy' => 'Feed it better quality leads', 'url' => url('services/performance-marketing')],
        ['title' => 'Product Development', 'copy' => 'Custom integrations and features', 'url' => url('services/technology')],
    ],
];

require __DIR__ . '/../../includes/components/service-page.php';

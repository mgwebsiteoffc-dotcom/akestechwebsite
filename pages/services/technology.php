<?php
/**
 * Service: Product Development — slug /services/technology (UNCHANGED)
 */
$sp = [
    'slug'  => 'technology',
    'route' => 'services/technology',
    'eyebrow' => 'Product Development',
    'h1' => 'We build the tech that powers growth.',
    'intro' => 'From custom Shopify development to full-stack web apps, mobile applications and AI-powered solutions — we build technology products that give your business an unfair competitive advantage.',
    'answerLabel' => 'What does a product development company do?',
    'answer' => 'A product development company takes an idea to a working, maintained product: discovery and architecture, design, engineering, integrations, QA, launch and iteration. AKESTECH builds SaaS platforms, AI and LLM products, web and mobile apps, Shopify apps and the API integrations that connect them to your CRM, payments, WhatsApp and existing business systems.',
    'schemaName' => 'Product Development Services',
    'stats' => [
        ['value' => 'SaaS', 'label' => 'Platforms and dashboards'],
        ['value' => 'AI', 'label' => 'LLM products and agents'],
        ['value' => 'Web + Mobile', 'label' => 'Customer-facing apps'],
        ['value' => 'APIs', 'label' => 'Integrations that stick'],
    ],
    'deliverables' => [
        ['title' => 'SaaS Architecture', 'copy' => 'Multi-tenant architecture, dashboards, subscriptions, roles, billing and admin tooling.'],
        ['title' => 'AI Products', 'copy' => 'LLM applications, retrieval over your own data, agents and knowledge systems built for production.'],
        ['title' => 'Web Applications', 'copy' => 'Customer portals, internal tools and operational dashboards designed for daily real use.'],
        ['title' => 'Mobile Applications', 'copy' => 'iOS and Android apps that connect to the same backend as your web and commerce stack.'],
        ['title' => 'Shopify Apps', 'copy' => 'Public and private apps built, submitted to the Shopify App Store and maintained long term.'],
        ['title' => 'Integrations', 'copy' => 'APIs, payments, CRM, WhatsApp, ERP and Shopify connected into one reliable data flow.'],
    ],
    'process' => [
        ['title' => 'Discover', 'copy' => 'We define the problem, users, scope and technical constraints before anything is built.'],
        ['title' => 'Architect', 'copy' => 'Data model, stack, integrations and delivery plan agreed up front — no surprise rewrites.'],
        ['title' => 'Build', 'copy' => 'Two-week increments with something demonstrable at the end of every cycle.'],
        ['title' => 'Launch', 'copy' => 'Deployment, monitoring, analytics and handover documentation included.'],
        ['title' => 'Evolve', 'copy' => 'Ongoing development, maintenance and feature releases as the product grows.'],
    ],
    'faqSlug' => 'technology',
    'faqs' => [
        ['question' => 'What does a product development company actually do?', 'answer' => 'It takes an idea to a working, maintained product: discovery, architecture, design, engineering, integrations, QA, launch and iteration. AKESTECH builds SaaS platforms, AI and LLM products, web and mobile apps, Shopify apps and the integrations that connect them to your business systems.'],
        ['question' => 'How long does it take to build an MVP?', 'answer' => 'A focused MVP typically takes six to twelve weeks depending on scope and integrations, delivered in two-week increments with something demonstrable at the end of every cycle.'],
        ['question' => 'Who owns the code and IP?', 'answer' => 'You do. All source code, repositories, documentation and infrastructure credentials are handed over to you at launch.'],
        ['question' => 'Can you add AI features to a product we already have?', 'answer' => 'Yes. We build LLM features, retrieval over your own data, agents and workflow automation inside existing products without requiring a rewrite.'],
        ['question' => 'Do you provide maintenance after launch?', 'answer' => 'Yes. We offer ongoing maintenance, monitoring, feature releases and on-call support so the product keeps improving after it ships.'],
    ],
    'ctaTitle' => 'Have an idea? Let’s turn it into a working product.',
    'ctaCopy' => 'Book a technical scoping call and get an architecture outline and estimate within a week.',
    'ctaBtn' => 'Start a Project',
    'related' => [
        ['title' => 'AI & Automation', 'copy' => 'Put AI inside the product', 'url' => url('services/automation')],
        ['title' => 'Shopify & Commerce', 'copy' => 'Commerce infrastructure and apps', 'url' => url('services/shopify-growth')],
        ['title' => 'Performance Marketing', 'copy' => 'Take the product to market', 'url' => url('services/performance-marketing')],
        ['title' => 'Lead365 — Lead Automation', 'copy' => 'A product we built ourselves', 'url' => url('products/lead365')],
    ],
];

require __DIR__ . '/../../includes/components/service-page.php';

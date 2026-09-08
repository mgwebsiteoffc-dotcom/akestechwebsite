<?php
/**
 * Service: AI & Automation — slug /services/automation (UNCHANGED)
 */
$sp = [
    'slug'  => 'automation',
    'heroImage' => 'hero-ai-commerce.jpg',
    'heroImageAlt' => 'AI-driven commerce automation dashboard built by AKESTECH',
    'route' => 'services/automation',
    'eyebrow' => 'AI & Automation',
    'h1' => 'Put your business on autopilot.',
    'intro' => 'Every manual task in your business is costing you time, money, and sanity. We build intelligent automation systems — AI agents, WhatsApp flows, email sequences, operational workflows — that save you 20+ hours a week and generate revenue while you sleep.',
    'answerLabel' => 'What is AI automation?',
    'answer' => 'AI automation means giving repetitive, high-volume work to software that never sleeps: AI agents that qualify leads and answer questions, WhatsApp and email journeys that recover carts and confirm COD orders, and workflows that move data between your CRM, store, payments and reporting without a human copying and pasting. AKESTECH designs, builds and maintains those systems end to end.',
    'schemaName' => 'AI Automation Services',
    'stats' => [
        ['value' => '20+', 'label' => 'Hours saved per week'],
        ['value' => '24/7', 'label' => 'AI agents working'],
        ['value' => '₹4.1L', 'label' => 'Avg. monthly revenue recovered'],
        ['value' => '30', 'label' => 'Days to first system live'],
    ],
    'deliverables' => [
        ['title' => 'AI Sales Agents', 'copy' => 'Qualify enquiries, answer questions and move prospects toward purchase across web, WhatsApp and email.'],
        ['title' => 'WhatsApp Automation', 'copy' => 'Conversational journeys for enquiries, abandoned carts, COD confirmation, shipping updates and reviews.'],
        ['title' => 'Email & Retention Flows', 'copy' => 'Lifecycle sequences, win-back campaigns and segmentation that run on behavioural triggers.'],
        ['title' => 'CRM Intelligence', 'copy' => 'Connect lead sources, teams and customer data so the next action is always automatic and visible.'],
        ['title' => 'Workflow Automation', 'copy' => 'n8n, Make and custom integrations that remove manual handoffs between your tools.'],
        ['title' => 'Reporting That Writes Itself', 'copy' => 'Automated dashboards and summaries so you see performance without building a single report.'],
    ],
    'process' => [
        ['title' => 'Audit', 'copy' => 'We map every manual process in your business and rank it by hours saved and revenue impact.'],
        ['title' => 'Design', 'copy' => 'We design the agent behaviour, conversation flows, triggers and data model before writing code.'],
        ['title' => 'Build', 'copy' => 'Our engineers ship the agents, integrations and dashboards against your live stack.'],
        ['title' => 'Launch', 'copy' => 'We roll out in stages with guardrails, fallbacks and human handover paths.'],
        ['title' => 'Optimise', 'copy' => 'Weekly tuning of prompts, flows and triggers based on real conversations and conversion data.'],
    ],
    'faqSlug' => 'automation',
    'faqs' => [
        ['question' => 'What is AI automation and how does it help a business?', 'answer' => 'AI automation gives repetitive, high-volume work to software that never sleeps: AI agents that qualify leads and answer questions, WhatsApp and email journeys that recover carts and confirm COD orders, and workflows that move data between your CRM, store, payments and reporting. AKESTECH designs, builds and maintains those systems end to end.'],
        ['question' => 'How long does an automation project take?', 'answer' => 'The first system is usually live within 30 days. We start with an audit that ranks every manual process by hours saved and revenue impact, then build the highest-value automations first.'],
        ['question' => 'Which tools do you integrate with?', 'answer' => 'Shopify, WhatsApp Business API, most CRMs and ERPs, payment gateways, email platforms, Google Sheets, n8n, Make and custom REST APIs. If a connector does not exist, our engineering team builds it.'],
        ['question' => 'Will automation replace our team?', 'answer' => 'No. It removes repetitive work so your team can focus on judgement, relationships and growth. Every automation we ship includes a human handover path for anything sensitive or unusual.'],
        ['question' => 'How do you measure whether automation is working?', 'answer' => 'We report hours saved, response times, recovery or conversion lift and cost per outcome each month, so the value of the automation is visible rather than assumed.'],
        ['question' => 'What is an AI agent?', 'answer' => 'An AI agent is software that can complete a multi-step task on its own: understand a request, decide what to do, call the right tools or systems, and report back. In practice that means an agent that qualifies an inbound lead, answers common questions, checks a CRM, books a meeting and hands over to a human when the conversation needs judgement.'],
        ['question' => 'Do you build WhatsApp automation?', 'answer' => 'Yes. We build WhatsApp Business API journeys for enquiries, abandoned cart recovery, COD confirmation, shipping updates, review requests and re-engagement, with template approval, consent handling and human handover built in. WhatsApp is usually the highest-responding channel for Indian businesses.'],
        ['question' => 'Which processes should we automate first?', 'answer' => 'The ones that are high volume, rule-based and currently causing visible delay or error: lead response, follow-up sequences, order and status notifications, data entry between systems, and routine reporting. We start with an audit that ranks every manual process by hours saved and revenue impact, then build the top of that list first.'],
    ],
    'ctaTitle' => 'Save 20+ hours a week with smart automation.',
    'ctaCopy' => 'Get a free automation assessment and see exactly which processes to hand over first.',
    'ctaBtn' => 'Get Automation Assessment',
    'related' => [
        ['title' => 'Product Development', 'copy' => 'Custom AI products and integrations', 'url' => url('services/technology')],
        ['title' => 'Performance Marketing', 'copy' => 'Feed the system with qualified traffic', 'url' => url('services/performance-marketing')],
        ['title' => 'Marketplace Management', 'copy' => 'Automate catalogue and order ops', 'url' => url('services/shopify-operations')],
        ['title' => 'Whatify — WhatsApp Commerce', 'copy' => 'Our own WhatsApp automation product', 'url' => url('products/whatsapp-shopify')],
    ],
];

require __DIR__ . '/../../includes/components/service-page.php';

<?php
/**
 * Service: Performance Marketing — slug /services/performance-marketing (UNCHANGED)
 */
$sp = [
    'slug'  => 'performance-marketing',
    'route' => 'services/performance-marketing',
    'eyebrow' => 'Performance Marketing',
    'h1' => 'Ads that actually make you money.',
    'intro' => 'We have managed ₹50Cr+ in ad spend for 200+ brands. Our approach is simple: build the right structure, create winning ads, track everything properly, and optimize relentlessly for profit — not vanity metrics.',
    'answerLabel' => 'What is performance marketing?',
    'answer' => 'Performance marketing is paid acquisition measured against a business outcome — revenue, qualified leads or ROAS — rather than impressions or clicks. AKESTECH runs Meta Ads and Google Ads end to end, produces the creative and AI video to test, builds the landing pages and funnels, sets up tracking and attribution, and improves conversion rate and retention so the same budget compounds over time.',
    'schemaName' => 'Performance Marketing Services',
    'stats' => [
        ['value' => '₹50Cr+', 'label' => 'Ad spend managed'],
        ['value' => '3X+', 'label' => 'Average ROAS'],
        ['value' => '200+', 'label' => 'Brands scaled'],
        ['value' => '50+', 'label' => 'Creatives tested monthly'],
    ],
    'deliverables' => [
        ['title' => 'Meta & Google Ads', 'copy' => 'Account structure, audience strategy, bidding and budget management built for profitable scale.'],
        ['title' => 'Creative & AI UGC', 'copy' => 'High-volume creative testing and AI video production so winning angles never go stale.'],
        ['title' => 'Landing Pages & Funnels', 'copy' => 'Fast, mobile-first pages with clear offers, proof and enquiry paths that convert.'],
        ['title' => 'Tracking & Attribution', 'copy' => 'GA4, pixels, server-side events, UTMs and clean reporting you can actually trust.'],
        ['title' => 'Retargeting & Retention', 'copy' => 'Lifecycle campaigns across ads, email and WhatsApp that lift repeat purchase rate.'],
        ['title' => 'CRO & Experimentation', 'copy' => 'Continuous A/B testing on offers, pages and checkout to improve conversion every month.'],
    ],
    'process' => [
        ['title' => 'Audit', 'copy' => 'We review accounts, tracking, creative, offers and unit economics before touching budget.'],
        ['title' => 'Structure', 'copy' => 'Campaign architecture, measurement plan and creative roadmap agreed before launch.'],
        ['title' => 'Launch', 'copy' => 'Controlled rollout so early data is clean and decisions are based on signal.'],
        ['title' => 'Test', 'copy' => 'Weekly creative, audience and landing page tests with a clear hypothesis behind each one.'],
        ['title' => 'Scale', 'copy' => 'Budget follows what works; what does not gets killed fast and documented.'],
    ],
    'faqSlug' => 'performance-marketing',
    'faqs' => [
        ['question' => 'What is performance marketing?', 'answer' => 'Performance marketing is paid acquisition measured against a business outcome - revenue, qualified leads or ROAS - rather than impressions or clicks. AKESTECH runs Meta Ads and Google Ads end to end with creative, landing pages, tracking, CRO and retention included.'],
        ['question' => 'How much ad budget do we need?', 'answer' => 'It depends on category, competition and margin. We recommend a budget only after auditing your funnel, unit economics and target cost per acquisition.'],
        ['question' => 'How quickly will we see results?', 'answer' => 'Early signal arrives within two weeks of launch. Stable, scalable performance usually takes 60 to 90 days of structured creative, audience and landing page testing.'],
        ['question' => 'Do you produce the ad creatives?', 'answer' => 'Yes. Creative strategy, production and AI video are handled in-house and tested weekly against live performance data so winning angles never go stale.'],
        ['question' => 'Do we keep ownership of our ad accounts and data?', 'answer' => 'Yes. Ad accounts, pixels, audiences and all historical data always remain in your ownership.'],
        ['question' => 'What is a good ROAS?', 'answer' => 'It depends entirely on gross margin, repeat purchase and cash cycle. A 2X ROAS can be profitable for a brand with strong repeat rates and healthy margin, while 6X can still lose money on a one-time-purchase product with thin margins and high return rates. We report contribution margin alongside ROAS so you can see what the number is actually worth.'],
        ['question' => 'Do you run Meta, Google and marketplace ads?', 'answer' => 'Yes. We plan and run Meta, Google Search, Shopping and YouTube, plus Amazon, Flipkart and other marketplace advertising, as one funnel rather than separate budgets. That prevents channels competing for the same conversion and lets budget move to whatever is genuinely producing incremental revenue.'],
        ['question' => 'How do you track conversions after cookie and iOS changes?', 'answer' => 'We implement server-side tracking through the Meta Conversions API and Google\'s server-side tagging, alongside first-party data capture and consent-mode configuration, then reconcile platform numbers against your own order and CRM data. Modelled and platform-reported conversions are reported separately from verified ones so decisions are made on accurate figures.'],
    ],
    'ctaTitle' => 'Stop burning ad budget. Start scaling profitably.',
    'ctaCopy' => 'Get a free ad account audit and discover how much revenue you are leaving on the table.',
    'ctaBtn' => 'Get Free Ad Account Audit',
    'related' => [
        ['title' => 'AI Videos', 'copy' => 'Feed the account with fresh creative', 'url' => url('services/ai-videos')],
        ['title' => 'Shopify & Commerce', 'copy' => 'Fix the funnel the traffic lands on', 'url' => url('services/shopify-growth')],
        ['title' => 'AI & Automation', 'copy' => 'Automate follow-up and retention', 'url' => url('services/automation')],
        ['title' => 'Case Studies', 'copy' => 'See the numbers we have delivered', 'url' => url('case-studies')],
    ],
];

require __DIR__ . '/../../includes/components/service-page.php';

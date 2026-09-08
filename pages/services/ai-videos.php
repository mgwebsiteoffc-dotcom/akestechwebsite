<?php
/**
 * Service: AI Videos — NEW page, new slug /services/ai-videos
 * Nothing existing was renamed to create this route.
 */
$sp = [
    'slug'  => 'services/ai-videos',
    'route' => 'services/ai-videos',
    'eyebrow' => 'AI Videos',
    'h1' => 'Ship 50 creatives before lunch.',
    'intro' => 'Traditional shoots are slow and expensive, so creative goes stale and performance drops. Our AI video studio produces ad films, UGC-style content and product reels in days instead of weeks — at a fraction of the cost.',
    'answerLabel' => 'What is AI video production?',
    'answer' => 'AI video production uses generative models to create advertising films, avatar-led UGC, product reels and multi-language voiceovers without a crew, studio or location. AKESTECH pairs that output with your media accounts so creative volume, testing cadence and cost per acquisition improve together instead of separately.',
    'schemaName' => 'AI Video Production',
    'stats' => [
        ['value' => '10X', 'label' => 'More creative variations'],
        ['value' => '80%', 'label' => 'Lower production cost'],
        ['value' => '48 hrs', 'label' => 'Standard turnaround'],
        ['value' => '8+', 'label' => 'Languages supported'],
    ],
    'deliverables' => [
        ['title' => 'AI Ad Films', 'copy' => '30–60 second performance films built for Meta, YouTube and marketplace placements.'],
        ['title' => 'AI UGC Creators', 'copy' => 'Avatar-led, testimonial-style content that feels native to the feed.'],
        ['title' => 'Product Reels', 'copy' => 'Catalogue-scale video for every SKU, variant and marketplace listing.'],
        ['title' => 'Multi-language Voiceovers', 'copy' => 'Dubbing and voice cloning so one creative works across every market you sell in.'],
        ['title' => 'Creative Testing Loops', 'copy' => 'Structured hook, body and CTA testing connected to live ad account results.'],
        ['title' => 'Brand Consistency', 'copy' => 'Locked visual system so AI output always looks like your brand, not generic AI.'],
    ],
    'process' => [
        ['title' => 'Brief', 'copy' => 'Audience, offer, angle and platform define what we generate and why.'],
        ['title' => 'Generate', 'copy' => 'We produce a first batch of variations across hooks, formats and lengths.'],
        ['title' => 'Ship', 'copy' => 'Edited, branded, captioned and formatted for every placement you run.'],
        ['title' => 'Test', 'copy' => 'Creative goes live in structured tests with clean naming and tracking.'],
        ['title' => 'Scale', 'copy' => 'Winners get scaled and fed back into the next generation round.'],
    ],
    'faqSlug' => 'ai-videos',
    'faqs' => [
        ['question' => 'What is AI video production?', 'answer' => 'AI video production uses generative models to create advertising films, avatar-led UGC, product reels and multi-language voiceovers without a crew, studio or location. AKESTECH pairs that output with your media accounts so creative volume, testing cadence and cost per acquisition improve together.'],
        ['question' => 'How fast is turnaround?', 'answer' => 'Standard deliverables are turned around in 48 hours. Larger creative batches for a full campaign typically take one to two weeks.'],
        ['question' => 'Will AI video look like our brand?', 'answer' => 'Yes. We lock a visual system - colours, type, framing, tone of voice - so generated output consistently looks like your brand rather than generic AI content.'],
        ['question' => 'Can you produce video in regional languages?', 'answer' => 'Yes. We produce voiceovers, dubbing and captions in multiple Indian languages so one creative works across every market you sell in.'],
        ['question' => 'How much cheaper is it than a traditional shoot?', 'answer' => 'Typically 60 to 80 percent lower for equivalent volume, because there is no crew, studio, location or post-production overhead - and you can test far more variations.'],
        ['question' => 'What kinds of videos can you produce with AI?', 'answer' => 'Product films, performance ad creatives in many aspect ratios and variations, explainers and onboarding films, social reels and shorts, testimonial and case study films, and localised versions of the same asset in multiple languages. If a format can be scripted, it can usually be produced, versioned and localised far faster than a traditional shoot allows.'],
        ['question' => 'Do we need to provide footage or a studio?', 'answer' => 'Usually not. Most work is generated from your brand guidelines, product images and a script, so no studio, crew or shoot day is required. If you already have footage you want to use, we can incorporate it and grade the generated material to match.'],
        ['question' => 'Can AI video be used for performance ads?', 'answer' => 'Yes, and it is one of the strongest use cases. Because variations are cheap, you can test far more hooks, scripts, openings and formats than a shoot budget would allow, then put spend behind whatever the data selects. We typically ship dozens of variations per concept rather than one polished cut.'],
    ],
    'ctaTitle' => 'Never let your creative go stale again.',
    'ctaCopy' => 'Request an AI video demo and get three sample creatives for your brand.',
    'ctaBtn' => 'Request AI Video Demo',
    'related' => [
        ['title' => 'Performance Marketing', 'copy' => 'Run the creative against real budget', 'url' => url('services/performance-marketing')],
        ['title' => 'Shopify & Commerce', 'copy' => 'Product video for every PDP', 'url' => url('services/shopify-growth')],
        ['title' => 'Marketplace Management', 'copy' => 'Listing video at catalogue scale', 'url' => url('services/shopify-operations')],
        ['title' => 'Product Development', 'copy' => 'Build your own AI content tooling', 'url' => url('services/technology')],
    ],
];

require __DIR__ . '/../../includes/components/service-page.php';

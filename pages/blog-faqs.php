<?php
/**
 * Blog FAQ Archive
 * Displays frequently asked questions from all blog categories with AEO JSON
 */
SEO::load('blog-faqs');

// Get all FAQs
$stmt = db()->prepare("
    SELECT DISTINCT f.* 
    FROM faqs f 
    WHERE f.page_slug IN (
        'performance-marketing', 
        'shopify-growth', 
        'shopify-operations', 
        'automation',
        'technology'
    ) 
    AND f.is_active = 1 
    ORDER BY f.sort_order ASC, RAND()
");
$stmt->execute();
$allFaqs = $stmt->fetchAll();

// Generate AEO JSON structure for FAQs
$faqData = [];
foreach ($allFaqs as $faq) {
    $faqData[] = [
        'question' => $faq['question'],
        'answer' => $faq['answer'],
        'category' => $faq['page_slug']
    ];
}

$schemas = [];
$schemas[] = SEO::faqSchema($allFaqs);
$schemas[] = SEO::breadcrumbSchema([
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'Blog', 'url' => url('blog')],
    ['name' => 'FAQ Archive', 'url' => url('blog/faqs')]
]);

ob_start();
?>

<main class="bg-white">
    <!-- HERO -->
    <section class="relative overflow-hidden bg-gradient-to-b from-gray-900 via-gray-950 to-black py-16 lg:py-20">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#f0f0f0_1px,transparent_1px),linear-gradient(to_bottom,#f0f0f0_1px,transparent_1px)] bg-[size:4rem_4rem] opacity-5"></div>
        
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center animate-on-scroll">
            <span class="text-xs font-semibold text-blue-400 uppercase tracking-wider bg-blue-500/10 px-3 py-1.5 rounded-full inline-block mb-6">Comprehensive FAQ Guide</span>
            
            <h1 class="text-3xl lg:text-5xl font-extrabold text-white mb-4 leading-tight">
                Everything You Need to Know About Shopify Growth
            </h1>
            
            <p class="text-lg text-gray-300 mb-8 max-w-2xl mx-auto">
                Answers to the most commonly asked questions about performance marketing, store optimization, WhatsApp automation, operations, and technology for D2C brands on Shopify.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#faqs" class="inline-flex items-center justify-center px-7 py-3.5 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors">
                    Browse FAQs <?= ak_icon('arrow-down', 16) ?>
                </a>
                <a href="<?= url('contact') ?>" class="inline-flex items-center justify-center px-7 py-3.5 border border-gray-600 text-white font-semibold rounded-lg hover:bg-gray-800/50 transition-colors">
                    Ask a Question
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ GRID BY CATEGORY -->
    <section id="faqs" class="py-16 lg:py-20">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <?php
            $categories = [
                'performance-marketing' => [
                    'name' => 'Performance Marketing',
                    'icon' => 'bar-chart',
                    'desc' => 'Meta Ads, Google Ads, and paid marketing strategies'
                ],
                'shopify-growth' => [
                    'name' => 'Shopify Store Growth',
                    'icon' => 'shopping-bag',
                    'desc' => 'CRO, conversion optimization, and store scaling'
                ],
                'shopify-operations' => [
                    'name' => 'Operations & RTO',
                    'icon' => 'package',
                    'desc' => 'RTO reduction, fulfillment, and logistics'
                ],
                'automation' => [
                    'name' => 'WhatsApp Automation',
                    'icon' => 'message-circle',
                    'desc' => 'WhatsApp Business API, cart recovery, and automation'
                ],
                'technology' => [
                    'name' => 'Technology & Integration',
                    'icon' => 'settings',
                    'desc' => 'Tracking, integration, and technical setup'
                ]
            ];

            foreach ($categories as $slug => $category):
                $categoryFaqs = array_filter($allFaqs, fn($f) => $f['page_slug'] === $slug);
                if (empty($categoryFaqs)) continue;
            ?>
            
            <div class="mb-16 animate-on-scroll">
                <div class="flex items-center gap-3 mb-8 pb-4 border-b border-gray-200">
                    <?= ak_icon($category['icon'], 28) ?>
                    <div>
                        <h2 class="text-2xl font-extrabold text-gray-900"><?= $category['name'] ?></h2>
                        <p class="text-sm text-gray-500 mt-1"><?= $category['desc'] ?></p>
                    </div>
                </div>

                <div class="space-y-4" itemscope itemtype="https://schema.org/FAQPage">
                    <?php foreach ($categoryFaqs as $index => $faq): ?>
                    <details class="group border border-gray-200 rounded-xl p-5 hover:border-blue-300 hover:bg-blue-50 transition-all open:bg-blue-50 open:border-blue-300 open:shadow-sm">
                        <summary class="flex cursor-pointer items-start justify-between font-semibold text-gray-900 hover:text-blue-600 transition-colors">
                            <span class="text-base lg:text-lg flex items-start gap-3 flex-1">
                                <span class="text-blue-600 font-bold flex-shrink-0 text-sm">Q.</span>
                                <span><?= htmlspecialchars($faq['question']) ?></span>
                            </span>
                            <span class="ml-4 flex-shrink-0 text-blue-600 group-open:text-blue-700 transition-transform">
                                <svg class="h-5 w-5 group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                                </svg>
                            </span>
                        </summary>

                        <div class="mt-4 ml-8 text-gray-600 leading-relaxed prose prose-sm max-w-none" itemprop="mainEntity" itemscope itemtype="https://schema.org/Question">
                            <meta itemprop="name" content="<?= htmlspecialchars($faq['question']) ?>">
                            <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
                                <div itemprop="text">
                                    <strong>A.</strong> <?= nl2br(htmlspecialchars($faq['answer'])) ?>
                                </div>
                            </div>
                        </div>
                    </details>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>

            <!-- RELATED RESOURCES -->
            <div class="mt-20 p-8 bg-gradient-to-r from-blue-50 to-indigo-50 border border-blue-200 rounded-2xl animate-on-scroll">
                <h3 class="text-2xl font-extrabold text-gray-900 mb-4">Want More In-Depth Answers?</h3>
                <p class="text-gray-600 mb-6">Explore our detailed blog posts with case studies, data, and step-by-step guides.</p>
                <div class="grid sm:grid-cols-3 gap-4">
                    <a href="<?= url('blog?category=performance-marketing') ?>" class="inline-flex items-center px-5 py-3 bg-white border border-gray-300 rounded-lg font-semibold text-gray-900 hover:border-blue-600 hover:text-blue-600 transition-colors">
                        <?= ak_icon('bar-chart', 18) ?> Performance Marketing
                    </a>
                    <a href="<?= url('blog?category=shopify-operations') ?>" class="inline-flex items-center px-5 py-3 bg-white border border-gray-300 rounded-lg font-semibold text-gray-900 hover:border-blue-600 hover:text-blue-600 transition-colors">
                        <?= ak_icon('package', 18) ?> Operations & RTO
                    </a>
                    <a href="<?= url('blog?category=automation') ?>" class="inline-flex items-center px-5 py-3 bg-white border border-gray-300 rounded-lg font-semibold text-gray-900 hover:border-blue-600 hover:text-blue-600 transition-colors">
                        <?= ak_icon('message-circle', 18) ?> WhatsApp Automation
                    </a>
                </div>
            </div>

            <!-- CTA SECTION -->
            <div class="mt-20 text-center animate-on-scroll">
                <h3 class="text-2xl font-extrabold text-gray-900 mb-4">Still Have Questions?</h3>
                <p class="text-gray-600 mb-8">Schedule a free consultation with our Shopify growth experts.</p>
                <a href="<?= url('contact') ?>" class="inline-flex items-center px-8 py-4 bg-gray-900 text-white font-semibold rounded-lg hover:bg-gray-800 transition-colors shadow-lg hover:shadow-xl">
                    Book Free Strategy Call <?= ak_icon('arrow-right', 16) ?>
                </a>
            </div>
        </div>
    </section>
</main>

<?php
$content = ob_get_clean();

// Set meta tags for SEO
SEO::set('meta_title', 'Shopify Growth FAQ | Performance Marketing, Operations & Automation - Akestech');
SEO::set('meta_description', 'Get answers to all your questions about Shopify growth, Meta & Google ads, WhatsApp automation, RTO reduction, and D2C marketing strategy.');
SEO::set('meta_keywords', 'shopify faq, shopify growth questions, whatsapp automation faq, performance marketing guide, d2c ecommerce faq');
SEO::set('og_title', 'Complete Shopify Growth FAQ Archive');
SEO::set('og_description', 'Answers to everything about Shopify agencies, performance marketing, WhatsApp automation, and operations.');

include 'includes/components/layout.php';
?>
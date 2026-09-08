<?php
/**
 * FAQ Section Component
 * Displays FAQs with rich formatting for AEO and featured snippets
 * 
 * Usage: component('faq-section', ['pageSlug' => 'performance-marketing'])
 */

$pageSlug = $pageSlug ?? null;
if (!$pageSlug) return;

$faqs = getFaqs($pageSlug);
if (empty($faqs)) return;
?>

<section class="bg-gradient-to-b from-gray-50 to-white py-16 lg:py-20 border-t border-gray-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 animate-on-scroll">
            <h2 class="text-2xl lg:text-3xl font-extrabold text-gray-900 mb-4">Frequently Asked Questions</h2>
            <p class="text-gray-600 text-base max-w-2xl mx-auto">Get answers to common questions about our services, pricing, and process.</p>
        </div>

        <div class="space-y-4 animate-on-scroll" itemscope itemtype="https://schema.org/FAQPage">
            <?php foreach ($faqs as $index => $faq): ?>
            <details class="group border border-gray-200 rounded-lg p-5 hover:border-primary-300 hover:bg-blue-50 transition-all open:bg-primary-50 open:border-primary-300">
                <summary class="flex cursor-pointer items-start justify-between font-medium text-gray-900 hover:text-primary-600 transition-colors">
                    <span class="text-base lg:text-lg flex items-start gap-3">
                        <span class="text-primary-600 font-bold flex-shrink-0 mt-0.5"><?= $index + 1 ?></span>
                        <span class="flex-1"><?= htmlspecialchars($faq['question']) ?></span>
                    </span>
                    <span class="ml-4 flex-shrink-0 text-primary-600 group-open:text-primary-700">
                        <svg class="h-5 w-5 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                        </svg>
                    </span>
                </summary>

                <div class="mt-4 ml-8 text-gray-600 text-sm lg:text-base leading-relaxed" itemprop="mainEntity" itemscope itemtype="https://schema.org/Question">
                    <meta itemprop="name" content="<?= htmlspecialchars($faq['question']) ?>">
                    <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
                        <div itemprop="text" class="prose prose-sm max-w-none">
                            <?= nl2br(htmlspecialchars($faq['answer'])) ?>
                        </div>
                    </div>
                </div>
            </details>
            <?php endforeach; ?>
        </div>

        <div class="mt-12 p-6 bg-blue-50 border border-blue-200 rounded-lg animate-on-scroll">
            <h3 class="text-lg font-semibold text-gray-900 mb-2">Didn't find what you're looking for?</h3>
            <p class="text-gray-600 mb-4">Our team is here to help. Get in touch with us for personalized answers to your questions.</p>
            <a href="<?= url('contact') ?>" class="inline-flex items-center px-5 py-2.5 bg-primary-600 text-white font-semibold rounded-lg hover:bg-primary-700 transition-colors">
                Contact Us →
            </a>
        </div>
    </div>
</section>

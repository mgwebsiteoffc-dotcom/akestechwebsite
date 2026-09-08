<?php
/**
 * Entry Popup — Shows after delay for first-time visitors
 * Lead magnet: Free Shopify Growth Audit
 */
?>
<div id="entry-popup" class="fixed inset-0 z-[100] hidden">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" id="entry-popup-overlay"></div>

    <!-- Modal -->
    <div class="absolute inset-0 flex items-center justify-center p-4">
        <div class="relative bg-white rounded-2xl shadow-2xl max-w-lg w-full overflow-hidden animate-popup-in" id="entry-popup-modal">

            <!-- Close Button -->
            <button id="entry-popup-close" class="absolute top-4 right-4 z-10 w-8 h-8 bg-gray-100 hover:bg-gray-200 rounded-full flex items-center justify-center transition-colors" aria-label="Close">
                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>

            <!-- Top Visual Bar -->
            <div class="bg-gray-950 px-6 py-5">
                <div class="flex items-center gap-3">
                    <div class="flex -space-x-2">
                        <div class="w-8 h-8 rounded-full bg-primary-500 border-2 border-gray-950 flex items-center justify-center text-xs font-bold text-white">A</div>
                        <div class="w-8 h-8 rounded-full bg-green-500 border-2 border-gray-950 flex items-center justify-center text-xs font-bold text-white">R</div>
                        <div class="w-8 h-8 rounded-full bg-orange-500 border-2 border-gray-950 flex items-center justify-center text-xs font-bold text-white">S</div>
                    </div>
                    <div>
                        <p class="text-white text-sm font-semibold">200+ brands scaled</p>
                        <p class="text-gray-400 text-[11px]">Join them with a free growth audit</p>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="px-6 py-6">
                <h2 class="text-xl font-bold text-gray-900 mb-2">
                    Get a Free Shopify Growth Audit
                </h2>
                <p class="text-sm text-gray-500 mb-5 leading-relaxed">
                    Our team will analyze your store's speed, conversion rate, ad performance, and operations — then deliver a custom growth roadmap. Completely free.
                </p>

                <!-- Quick stats -->
                <div class="grid grid-cols-3 gap-3 mb-6">
                    <div class="bg-gray-50 rounded-xl p-3 text-center">
                        <p class="text-lg font-bold text-gray-900">3X</p>
                        <p class="text-[10px] text-gray-500">Avg ROAS</p>
                    </div>
                    <div class="bg-gray-50 rounded-xl p-3 text-center">
                        <p class="text-lg font-bold text-gray-900">22%</p>
                        <p class="text-[10px] text-gray-500">Cart Recovery</p>
                    </div>
                    <div class="bg-gray-50 rounded-xl p-3 text-center">
                        <p class="text-lg font-bold text-gray-900">48hr</p>
                        <p class="text-[10px] text-gray-500">Delivery</p>
                    </div>
                </div>

                <!-- Form -->
                <form method="POST" action="" id="entry-popup-form">
                    <input type="hidden" name="form_action" value="audit">
                    <?= csrfField() ?>
                    <input type="text" name="website_url_hp" class="hidden" tabindex="-1" autocomplete="off">

                    <div class="space-y-3">
                        <input type="text" name="name" placeholder="Your Name *" required
                               class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent">
                        <div class="grid grid-cols-2 gap-3">
                            <input type="email" name="email" placeholder="Email *" required
                                   class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent">
                            <input type="tel" name="phone" placeholder="Phone *" required
                                   class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent">
                        </div>
                        <input type="url" name="website" placeholder="Shopify Store URL (optional)"
                               class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent">
                        <button type="submit" class="w-full px-6 py-3 text-sm font-semibold text-white bg-gray-900 rounded-xl hover:bg-gray-800 transition-colors">
                            Get My Free Audit <?= ak_icon('arrow-right', 16) ?>
                        </button>
                    </div>
                </form>

                <p class="text-[11px] text-gray-400 mt-3 text-center">Free. No spam. We respond within 24 hours.</p>
            </div>
        </div>
    </div>
</div>
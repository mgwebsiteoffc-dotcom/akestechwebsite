<?php
/**
 * Exit Intent Popup — Shows when user moves mouse to leave
 * Offer: Discount / Special offer to stay
 */
?>
<div id="exit-popup" class="fixed inset-0 z-[100] hidden">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" id="exit-popup-overlay"></div>

    <!-- Modal -->
    <div class="absolute inset-0 flex items-center justify-center p-4">
        <div class="relative bg-white rounded-2xl shadow-2xl max-w-md w-full overflow-hidden animate-popup-in" id="exit-popup-modal">

            <!-- Close Button -->
            <button id="exit-popup-close" class="absolute top-4 right-4 z-10 w-8 h-8 bg-white/80 hover:bg-gray-100 rounded-full flex items-center justify-center transition-colors" aria-label="Close">
                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>

            <!-- Top Visual -->
            <div class="bg-gradient-to-br from-primary-600 to-primary-700 px-6 py-8 text-center">
                <span class="text-4xl block mb-3">⏳</span>
                <h2 class="text-2xl font-bold text-white mb-2">Wait! Before You Go...</h2>
                <p class="text-primary-100 text-sm">Don't miss out on growing your Shopify store</p>
            </div>

            <!-- Content -->
            <div class="px-6 py-6">
                <div class="bg-gray-50 rounded-xl p-4 border border-gray-100 mb-5">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <span class="text-xl"><?= ak_icon('gift', 18) ?></span>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-gray-900">Free Shopify Growth Checklist</p>
                            <p class="text-xs text-gray-500 mt-0.5">50-point checklist to double your conversion rate</p>
                        </div>
                    </div>
                </div>

                <div class="space-y-3 mb-5">
                    <div class="flex items-center gap-2 text-sm text-gray-700">
                        <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Store speed optimization checklist
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-700">
                        <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Product page conversion tips
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-700">
                        <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Ad campaign structure template
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-700">
                        <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        WhatsApp automation setup guide
                    </div>
                </div>

                <!-- Form -->
                <form method="POST" action="" id="exit-popup-form">
                    <input type="hidden" name="form_action" value="audit">
                    <?= csrfField() ?>
                    <input type="text" name="website_url_hp" class="hidden" tabindex="-1" autocomplete="off">

                    <div class="space-y-3">
                        <input type="text" name="name" placeholder="Your Name" required
                               class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent">
                        <input type="email" name="email" placeholder="Email Address" required
                               class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent">
                        <input type="tel" name="phone" placeholder="Phone Number" required
                               class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent">
                        <button type="submit" class="w-full px-6 py-3 text-sm font-semibold text-white bg-gray-900 rounded-xl hover:bg-gray-800 transition-colors">
                            Send Me the Checklist + Free Audit <?= ak_icon('arrow-right', 16) ?>
                        </button>
                    </div>
                </form>
                
                <a class="px-5 py-2.5 text-sm font-semibold text-gray-900 bg-white rounded-xl hover:bg-gray-100 transition-colors flex-shrink-0" href="https://www.linkedin.com/build-relation/newsletter-follow?entityUrn=7463124527053606912" target="_blank">Subscribe on LinkedIn</a>

                <button id="exit-popup-dismiss" class="w-full mt-3 text-xs text-gray-400 hover:text-gray-600 transition-colors py-2 text-center">
                    No thanks, I don't want to grow my store
                </button>
                
                
            </div>
        </div>
    </div>
</div>
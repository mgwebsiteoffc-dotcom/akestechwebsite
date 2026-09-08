<?php
/**
 * Contact Page — Redesigned with agency-first tone
 */
SEO::load('contact');
$formType = clean($_GET['type'] ?? 'contact');
$schemas = [];
$schemas[] = SEO::breadcrumbSchema([
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'Contact', 'url' => url('contact')]
]);

ob_start();
?>

<!-- HERO -->
<section class="relative overflow-hidden bg-white">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#f0f0f0_1px,transparent_1px),linear_gradient(to_bottom,#f0f0f0_1px,transparent_1px)] bg-[size:4rem_4rem] opacity-30"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-8 lg:pt-20 lg:pb-12">
        <div class="max-w-3xl animate-on-scroll">
            <h1 class="text-3xl lg:text-5xl font-extrabold text-gray-900 mb-4">
                <?= $formType === 'audit' ? 'Get Your Free Growth Audit' : "Let's Grow Your Store Together" ?>
            </h1>
            <p class="text-lg text-gray-500 leading-relaxed">
                <?= $formType === 'audit'
                    ? 'Tell us about your Shopify store and we\'ll deliver a detailed growth audit with actionable recommendations — completely free, no strings attached.'
                    : 'Whether you need performance marketing, store optimization, operations management, or our WhatsApp automation — we\'re here to help.' ?>
            </p>
        </div>
    </div>
</section>

<!-- FORM + INFO -->
<section class="bg-white pb-16 lg:pb-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-5 gap-12 lg:gap-16">

            <!-- FORM (3 cols) -->
            <div class="lg:col-span-3 animate-on-scroll">
                <div class="flex gap-2 mb-8 border-b border-gray-200">
                    <a href="<?= url('contact') ?>" class="px-4 py-3 text-sm font-medium border-b-2 transition-colors <?= $formType !== 'audit' ? 'border-gray-900 text-gray-900' : 'border-transparent text-gray-500 hover:text-gray-700' ?>">Contact Us</a>
                    <a href="<?= url('contact') ?>?type=audit" class="px-4 py-3 text-sm font-medium border-b-2 transition-colors <?= $formType === 'audit' ? 'border-gray-900 text-gray-900' : 'border-transparent text-gray-500 hover:text-gray-700' ?>">Free Growth Audit</a>
                </div>

                <form method="POST" action="" class="space-y-5">
                    <input type="hidden" name="form_action" value="<?= $formType === 'audit' ? 'audit' : 'contact' ?>">
                    <?= csrfField() ?>
                    <input type="text" name="website_url_hp" class="hidden" tabindex="-1" autocomplete="off">

                    <div class="grid sm:grid-cols-2 gap-5">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1.5">Full Name <span class="text-red-500">*</span></label>
                            <input type="text" id="name" name="name" required placeholder="John Doe" class="w-full px-4 py-3 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">Work Email <span class="text-red-500">*</span></label>
                            <input type="email" id="email" name="email" required placeholder="john@brand.com" class="w-full px-4 py-3 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent">
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-5">
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1.5">Phone <span class="text-red-500">*</span></label>
                            <input type="tel" id="phone" name="phone" required placeholder="+91 98765 43210" class="w-full px-4 py-3 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent">
                        </div>
                        <div>
                            <label for="company" class="block text-sm font-medium text-gray-700 mb-1.5">Brand / Company</label>
                            <input type="text" id="company" name="company" placeholder="Brand Name" class="w-full px-4 py-3 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent">
                        </div>
                    </div>

                    <?php if ($formType === 'audit'): ?>
                    <div class="grid sm:grid-cols-2 gap-5">
                        <div>
                            <label for="website" class="block text-sm font-medium text-gray-700 mb-1.5">Shopify Store URL</label>
                            <input type="url" id="website" name="website" placeholder="https://yourstore.com" class="w-full px-4 py-3 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent">
                        </div>
                        <div>
                            <label for="monthly_revenue" class="block text-sm font-medium text-gray-700 mb-1.5">Monthly Revenue</label>
                            <select id="monthly_revenue" name="monthly_revenue" class="w-full px-4 py-3 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent bg-white">
                                <option value="">Select range</option>
                                <option value="Under ₹5L">Under ₹5L</option>
                                <option value="₹5L - ₹20L">₹5L - ₹20L</option>
                                <option value="₹20L - ₹50L">₹20L - ₹50L</option>
                                <option value="₹50L - ₹1Cr">₹50L - ₹1Cr</option>
                                <option value="₹1Cr+">₹1Cr+</option>
                            </select>
                        </div>
                    </div>
                    <?php endif; ?>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1.5"><?= $formType === 'audit' ? 'What are your biggest growth challenges?' : 'How can we help?' ?></label>
                        <textarea id="message" name="message" rows="4" placeholder="<?= $formType === 'audit' ? 'Tell us about your current challenges, goals, and what services interest you...' : 'Tell us about your project or question...' ?>" class="w-full px-4 py-3 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent resize-none"></textarea>
                    </div>

                    <button type="submit" class="w-full sm:w-auto px-8 py-3.5 text-sm font-semibold text-white bg-gray-900 rounded-xl hover:bg-gray-800 transition-colors shadow-lg shadow-gray-900/20">
                        <?= $formType === 'audit' ? 'Get My Free Audit' : 'Send Message' ?> <?= ak_icon('arrow-right', 16) ?>
                    </button>
                    <p class="text-xs text-gray-400 mt-2">By submitting, you agree to our <a href="<?= url('privacy-policy') ?>" class="text-primary-600 hover:underline">Privacy Policy</a>.</p>
                </form>
            </div>

            <!-- SIDEBAR (2 cols) -->
            <div class="lg:col-span-2 animate-on-scroll">
                <div class="space-y-6">
                    <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                        <h3 class="text-sm font-semibold text-gray-900 mb-4">Get in Touch</h3>
                        <div class="space-y-4">
                            <a href="mailto:<?= SITE_EMAIL ?>" class="flex gap-3 items-center text-sm text-gray-600 hover:text-gray-900 transition-colors">
                                <div class="w-10 h-10 bg-white border border-gray-200 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                </div>
                                <?= SITE_EMAIL ?>
                            </a>
                            <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>" target="_blank" class="flex gap-3 items-center text-sm text-gray-600 hover:text-green-600 transition-colors">
                                <div class="w-10 h-10 bg-white border border-gray-200 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.875 1.213 3.074c.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>
                                </div>
                                Chat on WhatsApp
                            </a>
                            <div class="flex gap-3 items-center text-sm text-gray-600">
                                <div class="w-10 h-10 bg-white border border-gray-200 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                </div>
                                Response within 24 hours
                            </div>
                        </div>
                    </div>

                    <?php if ($formType === 'audit'): ?>
                    <div class="bg-gray-950 rounded-2xl p-6 text-white">
                        <h3 class="text-sm font-semibold mb-4">Your Free Audit Includes</h3>
                        <div class="space-y-3">
                            <?php
                            $auditItems = ['Store speed & UX analysis', 'Conversion rate breakdown', 'Ad account review', 'WhatsApp revenue potential', 'Operations efficiency score', 'Custom 90-day roadmap'];
                            foreach ($auditItems as $item): ?>
                            <div class="flex items-center gap-2 text-sm text-gray-300">
                                <svg class="w-4 h-4 text-green-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                <?= $item ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <p class="text-xs text-gray-500 mt-4">Delivered within 3 business days. Zero obligation.</p>
                    </div>
                    <?php else: ?>
                    <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                        <h3 class="text-sm font-semibold text-gray-900 mb-4">Common Questions</h3>
                        <div class="space-y-4">
                            <div>
                                <p class="text-sm font-medium text-gray-800">What's your minimum engagement?</p>
                                <p class="text-sm text-gray-500 mt-1">Our services work best for stores doing ₹5L+/month. Our WhatsApp app works for all sizes.</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-800">Do you lock into contracts?</p>
                                <p class="text-sm text-gray-500 mt-1">No. Month-to-month. Results keep you, not contracts.</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-800">How quickly can we start?</p>
                                <p class="text-sm text-gray-500 mt-1">We can start within 1 week of signing. Audit in 3 days, live in 7.</p>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$pageContent = ob_get_clean();
include __DIR__ . '/../includes/components/layout.php';
<?php
/**
 * Data Deletion Policy
 * Required for Shopify app compliance and WhatsApp Business API
 */
SEO::set('meta_title', 'Data Deletion Policy — ' . SITE_NAME);
SEO::set('meta_description', 'How to request data deletion from ' . SITE_NAME . '. Auto-deletion on app uninstall. Full compliance with data protection regulations.');

ob_start();
?>

<section class="bg-white py-12 lg:py-20">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="animate-on-scroll">
            <h1 class="text-3xl lg:text-4xl font-extrabold text-gray-900 mb-2">Data Deletion Policy</h1>
            <p class="text-sm text-gray-500 mb-8">Last updated: <?= date('F d, Y') ?></p>

            <div class="prose max-w-none">
                <p><?= SITE_NAME ?> is committed to protecting your data and privacy. This policy explains how your data is deleted when you uninstall our app or request data removal.</p>

                <h2>1. Automatic Data Deletion on Uninstall</h2>
                <p>When you uninstall the <?= SITE_NAME ?> app from your Shopify store:</p>
                <ul>
                    <li><strong>Immediate:</strong> API access to your Shopify store is revoked</li>
                    <li><strong>Within 24 hours:</strong> Active automation workflows are stopped</li>
                    <li><strong>Within 7 days:</strong> All stored customer data, order data, and message logs are permanently deleted from our servers</li>
                </ul>

                <div class="bg-blue-50 border border-blue-100 rounded-xl p-5 my-6 not-prose">
                    <div class="flex gap-3">
                        <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <div>
                            <p class="text-sm font-semibold text-blue-900">Automatic Process</p>
                            <p class="text-sm text-blue-700 mt-1">Data deletion on uninstall is fully automatic. No manual request is needed.</p>
                        </div>
                    </div>
                </div>

                <h2>2. What Data Is Deleted</h2>
                <p>The following data is permanently deleted:</p>
                <ul>
                    <li>Customer names, emails, and phone numbers</li>
                    <li>Order and cart data</li>
                    <li>WhatsApp message logs and conversation history</li>
                    <li>Automation workflow configurations</li>
                    <li>Analytics and reporting data</li>
                    <li>Broadcast campaign data and templates</li>
                </ul>

                <h2>3. What Data May Be Retained</h2>
                <p>We may retain certain data for legal and business purposes:</p>
                <ul>
                    <li><strong>Billing records:</strong> Transaction history for accounting (retained for 7 years as required by law)</li>
                    <li><strong>Aggregated analytics:</strong> Non-identifiable usage statistics</li>
                    <li><strong>Support tickets:</strong> Communication history for 90 days</li>
                </ul>

                <h2>4. Manual Data Deletion Request</h2>
                <p>You can request manual data deletion at any time by:</p>

                <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 my-6 not-prose">
                    <h3 class="text-base font-semibold text-gray-900 mb-3">How to Request Data Deletion</h3>
                    <ol class="space-y-3">
                        <li class="flex gap-3">
                            <span class="w-6 h-6 bg-primary-100 text-primary-600 rounded-full flex items-center justify-center text-xs font-bold flex-shrink-0">1</span>
                            <span class="text-sm text-gray-700">Send an email to <a href="mailto:<?= SITE_EMAIL ?>" class="text-primary-600 font-medium"><?= SITE_EMAIL ?></a> with the subject line "Data Deletion Request"</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="w-6 h-6 bg-primary-100 text-primary-600 rounded-full flex items-center justify-center text-xs font-bold flex-shrink-0">2</span>
                            <span class="text-sm text-gray-700">Include your Shopify store URL and registered email address</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="w-6 h-6 bg-primary-100 text-primary-600 rounded-full flex items-center justify-center text-xs font-bold flex-shrink-0">3</span>
                            <span class="text-sm text-gray-700">We will confirm receipt within 24 hours</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="w-6 h-6 bg-primary-100 text-primary-600 rounded-full flex items-center justify-center text-xs font-bold flex-shrink-0">4</span>
                            <span class="text-sm text-gray-700">Data deletion will be completed within <strong>7 business days</strong></span>
                        </li>
                        <li class="flex gap-3">
                            <span class="w-6 h-6 bg-primary-100 text-primary-600 rounded-full flex items-center justify-center text-xs font-bold flex-shrink-0">5</span>
                            <span class="text-sm text-gray-700">You will receive a confirmation email once deletion is complete</span>
                        </li>
                    </ol>
                </div>

                <h2>5. Data Deletion Timeline</h2>
                <table class="w-full text-sm border-collapse my-6">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="text-left p-3 border border-gray-200 font-semibold">Data Type</th>
                            <th class="text-left p-3 border border-gray-200 font-semibold">Deletion Timeline</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td class="p-3 border border-gray-200">Customer data (names, phones, emails)</td><td class="p-3 border border-gray-200">7 days</td></tr>
                        <tr class="bg-gray-50"><td class="p-3 border border-gray-200">Order & cart data</td><td class="p-3 border border-gray-200">7 days</td></tr>
                        <tr><td class="p-3 border border-gray-200">WhatsApp message logs</td><td class="p-3 border border-gray-200">7 days</td></tr>
                        <tr class="bg-gray-50"><td class="p-3 border border-gray-200">Automation configurations</td><td class="p-3 border border-gray-200">7 days</td></tr>
                        <tr><td class="p-3 border border-gray-200">Billing records</td><td class="p-3 border border-gray-200">Retained for legal compliance</td></tr>
                    </tbody>
                </table>

                <h2>6. Third-Party Data</h2>
                <p>When we delete your data from our systems, please note:</p>
                <ul>
                    <li>Messages already delivered to customers via WhatsApp remain on their devices</li>
                    <li>Data stored by Shopify is governed by Shopify's privacy policy</li>
                    <li>Backup copies may persist for up to 30 days in our backup systems before automatic purge</li>
                </ul>

                <h2>7. Contact</h2>
                <p>For data deletion requests or questions about this policy:</p>
                <ul>
                    <li>Email: <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a></li>
                    <li>WhatsApp: <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>">Chat with us</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php
$pageContent = ob_get_clean();
include __DIR__ . '/../includes/components/layout.php';
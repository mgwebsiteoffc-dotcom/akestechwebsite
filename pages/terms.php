<?php
/**
 * Terms of Service
 */
SEO::set('meta_title', 'Terms of Service — ' . SITE_NAME);
SEO::set('meta_description', 'Terms and conditions for using ' . SITE_NAME . ' services and Shopify WhatsApp automation app.');

ob_start();
?>

<section class="bg-white py-12 lg:py-20">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="animate-on-scroll">
            <h1 class="text-3xl lg:text-4xl font-extrabold text-gray-900 mb-2">Terms of Service</h1>
            <p class="text-sm text-gray-500 mb-8">Last updated: <?= date('F d, Y') ?></p>

            <div class="prose max-w-none">
                <p>These Terms of Service ("Terms") govern your use of <?= SITE_NAME ?>'s website, services, and Shopify applications. By using our services, you agree to these Terms.</p>

                <h2>1. Services</h2>
                <p><?= SITE_NAME ?> provides:</p>
                <ul>
                    <li>WhatsApp automation application for Shopify stores</li>
                    <li>Shopify growth consulting and optimization services</li>
                    <li>Performance marketing management</li>
                    <li>Technology development services</li>
                </ul>

                <h2>2. Account & App Installation</h2>
                <ul>
                    <li>You must have an active Shopify store to use our app</li>
                    <li>You are responsible for maintaining the security of your account</li>
                    <li>You must provide accurate and complete information</li>
                    <li>One Shopify store per app installation</li>
                </ul>

                <h2>3. WhatsApp Messaging Rules</h2>
                <p>When using our WhatsApp automation features:</p>
                <ul>
                    <li>You must comply with WhatsApp Business Policy and Commerce Policy</li>
                    <li>You must not send spam or unsolicited messages</li>
                    <li>You must honor customer opt-out requests immediately</li>
                    <li>Message templates must be approved before use</li>
                    <li>You are responsible for the content of your messages</li>
                </ul>

                <h2>4. Acceptable Use</h2>
                <p>You agree not to:</p>
                <ul>
                    <li>Use our services for illegal purposes</li>
                    <li>Violate any applicable laws or regulations</li>
                    <li>Send deceptive or misleading messages</li>
                    <li>Attempt to reverse-engineer our technology</li>
                    <li>Resell or redistribute our services without authorization</li>
                </ul>

                <h2>5. Pricing & Payments</h2>
                <ul>
                    <li>App pricing is as displayed on our pricing page and Shopify App Store</li>
                    <li>Billing is handled through Shopify's billing system</li>
                    <li>Service fees are as agreed in your service contract</li>
                    <li>We reserve the right to modify pricing with 30 days notice</li>
                </ul>

                <h2>6. Intellectual Property</h2>
                <p>All content, code, and technology on our platform is owned by <?= SITE_NAME ?>. You are granted a limited, non-exclusive license to use our app for its intended purpose.</p>

                <h2>7. Limitation of Liability</h2>
                <p><?= SITE_NAME ?> is not liable for:</p>
                <ul>
                    <li>WhatsApp API downtime or delivery failures</li>
                    <li>Shopify platform outages</li>
                    <li>Lost revenue or profits from service interruptions</li>
                    <li>Third-party service failures</li>
                </ul>
                <p>Our total liability shall not exceed the fees paid by you in the 12 months preceding the claim.</p>

                <h2>8. Termination</h2>
                <ul>
                    <li>You may uninstall our app at any time through Shopify</li>
                    <li>We may suspend or terminate access for violation of these Terms</li>
                    <li>Upon termination, your data will be deleted as per our <a href="<?= url('data-deletion') ?>">Data Deletion Policy</a></li>
                </ul>

                <h2>9. Governing Law</h2>
                <p>These Terms are governed by the laws of India. Any disputes shall be resolved through arbitration in accordance with applicable Indian law.</p>

                <h2>10. Changes</h2>
                <p>We may update these Terms from time to time. Continued use of our services after changes constitutes acceptance.</p>

                <h2>11. Contact</h2>
                <p>For questions about these Terms, contact us at <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a>.</p>
            </div>
        </div>
    </div>
</section>

<?php
$pageContent = ob_get_clean();
include __DIR__ . '/../includes/components/layout.php';
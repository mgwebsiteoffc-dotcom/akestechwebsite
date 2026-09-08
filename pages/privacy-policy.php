<?php
/**
 * Privacy Policy Page
 * Includes WhatsApp API data collection, Shopify app compliance
 */
SEO::set('meta_title', 'Privacy Policy — ' . SITE_NAME);
SEO::set('meta_description', 'Learn how ' . SITE_NAME . ' collects, uses, and protects your data. Includes WhatsApp API and Shopify app data practices.');
SEO::set('robots', 'index, follow');

ob_start();
?>

<section class="bg-white py-12 lg:py-20">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="animate-on-scroll">
            <h1 class="text-3xl lg:text-4xl font-extrabold text-gray-900 mb-2">Privacy Policy</h1>
            <p class="text-sm text-gray-500 mb-8">Last updated: <?= date('F d, Y') ?></p>

            <div class="prose max-w-none">
                <p><?= SITE_NAME ?> ("we", "us", "our") operates the website <?= SITE_URL ?> and the <?= SITE_NAME ?> WhatsApp Automation app for Shopify. This Privacy Policy explains how we collect, use, disclose, and safeguard your information.</p>

                <h2>1. Information We Collect</h2>

                <h3>1.1 Personal Information</h3>
                <p>We may collect the following personal information:</p>
                <ul>
                    <li><strong>Name</strong> — provided via forms or Shopify store data</li>
                    <li><strong>Email address</strong> — for account communication</li>
                    <li><strong>Phone number</strong> — for WhatsApp messaging and contact</li>
                    <li><strong>Company/Brand name</strong> — for service personalization</li>
                    <li><strong>Website URL</strong> — for audit and analysis purposes</li>
                </ul>

                <h3>1.2 Shopify Store Data</h3>
                <p>When you install our Shopify app, we access the following data through Shopify's API:</p>
                <ul>
                    <li><strong>Order data</strong> — order details, status, and customer information</li>
                    <li><strong>Customer data</strong> — name, email, phone number, and shipping address</li>
                    <li><strong>Cart data</strong> — abandoned cart contents and checkout information</li>
                    <li><strong>Product data</strong> — product names, images, and pricing</li>
                    <li><strong>Store settings</strong> — store name, currency, and timezone</li>
                </ul>

                <h3>1.3 WhatsApp Data</h3>
                <p>Through our WhatsApp Business API integration, we process:</p>
                <ul>
                    <li>Customer phone numbers for message delivery</li>
                    <li>Message delivery and read status</li>
                    <li>Customer responses to automated messages</li>
                    <li>Opt-in and opt-out preferences</li>
                </ul>

                <h3>1.4 Automatically Collected Data</h3>
                <ul>
                    <li>IP address</li>
                    <li>Browser type and version</li>
                    <li>Pages visited and time spent</li>
                    <li>Referring website</li>
                    <li>Device information</li>
                </ul>

                <h2>2. How We Use Your Information</h2>
                <p>We use collected data for the following purposes:</p>
                <ul>
                    <li>To provide and maintain our services and app functionality</li>
                    <li>To send automated WhatsApp messages (cart recovery, order updates, COD verification)</li>
                    <li>To process and respond to your inquiries</li>
                    <li>To send service-related communications</li>
                    <li>To improve our products and services</li>
                    <li>To comply with legal obligations</li>
                </ul>

                <h2>3. WhatsApp Business API Usage</h2>
                <p>Our use of the WhatsApp Business API is governed by Meta's policies:</p>
                <ul>
                    <li>Messages are only sent to customers who have provided their phone number through your Shopify store</li>
                    <li>Customers can opt out of WhatsApp messages at any time by replying "STOP"</li>
                    <li>We do not sell or share WhatsApp conversation data with third parties</li>
                    <li>Message templates are pre-approved by WhatsApp/Meta</li>
                    <li>We comply with WhatsApp Commerce Policy and Business Messaging Policy</li>
                </ul>

                <h2>4. Data Sharing</h2>
                <p>We do not sell your personal data. We may share data with:</p>
                <ul>
                    <li><strong>WhatsApp/Meta</strong> — for message delivery through the Business API</li>
                    <li><strong>Shopify</strong> — as required by the Shopify Partner Agreement</li>
                    <li><strong>Cloud hosting providers</strong> — for data storage and processing</li>
                    <li><strong>Analytics tools</strong> — for service improvement (anonymized data)</li>
                    <li><strong>Legal authorities</strong> — when required by law</li>
                </ul>

                <h2>5. Data Retention</h2>
                <ul>
                    <li><strong>Active accounts:</strong> Data is retained as long as the app is installed</li>
                    <li><strong>Uninstalled apps:</strong> Store data is deleted within 7 days of uninstallation</li>
                    <li><strong>Lead form data:</strong> Retained for 2 years, then archived</li>
                    <li><strong>WhatsApp message logs:</strong> Retained for 90 days</li>
                </ul>

                <h2>6. Data Security</h2>
                <p>We implement industry-standard security measures including:</p>
                <ul>
                    <li>SSL/TLS encryption for all data in transit</li>
                    <li>Encrypted data storage at rest</li>
                    <li>Access controls and authentication</li>
                    <li>Regular security audits</li>
                </ul>

                <h2>7. Your Rights</h2>
                <p>You have the right to:</p>
                <ul>
                    <li>Access your personal data</li>
                    <li>Correct inaccurate data</li>
                    <li>Request deletion of your data</li>
                    <li>Opt out of marketing communications</li>
                    <li>Export your data</li>
                </ul>

                <h2>8. Cookies</h2>
                <p>We use essential cookies for website functionality and analytics cookies (with consent) to understand usage patterns. You can manage cookie preferences through your browser settings.</p>

                <h2>9. Children's Privacy</h2>
                <p>Our services are not directed to individuals under 18. We do not knowingly collect data from children.</p>

                <h2>10. Changes to This Policy</h2>
                <p>We may update this Privacy Policy from time to time. Significant changes will be notified via email or through our app.</p>

                <h2>11. Contact Us</h2>
                <p>For privacy-related questions or data requests:</p>
                <ul>
                    <li>Email: <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a></li>
                    <li>Data Deletion Requests: <a href="<?= url('data-deletion') ?>"><?= url('data-deletion') ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php
$pageContent = ob_get_clean();
include __DIR__ . '/../includes/components/layout.php';
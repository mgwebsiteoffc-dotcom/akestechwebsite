<?php
/**
 * Data Deletion Policy
 * Required for Shopify app compliance and WhatsApp Business API
 */
SEO::set('meta_title', 'Data Deletion Policy — ' . SITE_NAME);
SEO::set('meta_description', 'How to request data deletion from ' . SITE_NAME . '. Auto-deletion on app uninstall. Full compliance with data protection regulations.');

ob_start();
?>

<!-- ============================ PAGE HERO ============================ -->
<section class="ak-pagehero">
  <div class="ak-container">
    <div class="ak-pagehero__inner">
      <div class="ak-crumbs"><a href="<?= url('/') ?>">Home</a> <span>/</span> Data Deletion Policy</div>
      <div class="ak-eyebrow">Legal</div>
      <h1 class="ak-h1 ak-words" style="font-size:clamp(38px,4.8vw,68px)">Data Deletion Policy</h1>
      <p class="ak-lead">Last updated: <?= date('F d, Y') ?></p>
    </div>
  </div>
</section>

<section class="ak-section" style="padding-top:34px;border-top:0">
  <div class="ak-container">
    <div class="ak-narrow">
      <div class="ak-prose">

                <p><?= SITE_NAME ?> is committed to protecting your data and privacy. This policy explains how your data is deleted when you uninstall our app or request data removal.</p>

                <h2>1. Automatic Data Deletion on Uninstall</h2>
                <p>When you uninstall the <?= SITE_NAME ?> app from your Shopify store:</p>
                <ul>
                    <li><strong>Immediate:</strong> API access to your Shopify store is revoked</li>
                    <li><strong>Within 24 hours:</strong> Active automation workflows are stopped</li>
                    <li><strong>Within 7 days:</strong> All stored customer data, order data, and message logs are permanently deleted from our servers</li>
                </ul>

                <div class="ak-answer">
                    <b>Automatic process</b>
                    Data deletion on uninstall is fully automatic. No manual request is needed.
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

                <div class="ak-answer">
                    <b>How to request data deletion</b>
                    <ol class="ak-steps">
                        <li>
                            <span class="ak-stepn">1</span>
                            <span>Send an email to <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a> with the subject line "Data Deletion Request"</span>
                        </li>
                        <li>
                            <span class="ak-stepn">2</span>
                            <span>Include your Shopify store URL and registered email address</span>
                        </li>
                        <li>
                            <span class="ak-stepn">3</span>
                            <span>We will confirm receipt within 24 hours</span>
                        </li>
                        <li>
                            <span class="ak-stepn">4</span>
                            <span>Data deletion will be completed within <strong>7 business days</strong></span>
                        </li>
                        <li>
                            <span class="ak-stepn">5</span>
                            <span>You will receive a confirmation email once deletion is complete</span>
                        </li>
                    </ol>
                </div>

                <h2>5. Data Deletion Timeline</h2>
                <table>
                    <thead>
<tr>
                            <th>Data Type</th>
                            <th>Deletion Timeline</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>Customer data (names, phones, emails)</td><td>7 days</td></tr>
<tr><td>Order & cart data</td><td>7 days</td></tr>
                        <tr><td>WhatsApp message logs</td><td>7 days</td></tr>
<tr><td>Automation configurations</td><td>7 days</td></tr>
                        <tr><td>Billing records</td><td>Retained for legal compliance</td></tr>
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
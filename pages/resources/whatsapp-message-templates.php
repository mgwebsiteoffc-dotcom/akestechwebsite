<?php
/** Free resource: WhatsApp message templates for ecommerce. */
SEO::set('meta_title', '24 WhatsApp Message Templates for Ecommerce (Free) | ' . SITE_NAME);
SEO::set('meta_description', 'Copy 24 WhatsApp message templates for abandoned cart recovery, COD confirmation, order updates, reviews, win-back campaigns, and customer support.');
SEO::set('meta_keywords', 'WhatsApp message templates, WhatsApp ecommerce templates, abandoned cart WhatsApp message, COD confirmation message, Shopify WhatsApp templates');
SEO::set('canonical_url', url('resources/whatsapp-message-templates'));
SEO::set('og_title', '24 Free WhatsApp Message Templates for Ecommerce');
SEO::set('og_description', 'Ready-to-use WhatsApp templates for cart recovery, COD verification, order updates, engagement, and retention.');

$categories = [
    'cart' => ['Cart recovery', 'Bring high-intent shoppers back with a helpful reminder, direct checkout link, and clear reason to finish.', [
        ['Cart reminder', '15-30 minutes after abandonment', "Hi {{1}}, you left {{2}} in your cart at {{3}}. It is still saved for you. Complete your order here: {{4}}\n\nReply HELP if you have a question."],
        ['Benefit-led follow-up', '4-6 hours later', "Still thinking it over, {{1}}? {{2}} is designed to help you {{3}}. Your cart is ready whenever you are: {{4}}\n\nNeed help choosing? Reply to this message."],
        ['Low-stock reminder', 'Only when stock is genuinely low', "Quick update, {{1}}: {{2}} in your cart is almost sold out. We have kept your checkout link ready: {{3}}\n\nStock is not reserved until payment is complete."],
        ['Offer reminder', 'Only with a real, active offer', "A little nudge for your cart, {{1}}. Use code {{2}} to get {{3}} off your order at {{4}}. Complete checkout: {{5}}\n\nOffer ends {{6}}. Terms apply."],
        ['Objection-handling reminder', '18-24 hours later', "Hi {{1}}, have a question before ordering {{2}}? We offer {{3}} and {{4}} for a worry-free purchase. Return to your cart: {{5}}\n\nReply here and our team will help."],
    ]],
    'cod' => ['COD verification', 'Confirm intent before dispatch, correct address issues early, and offer prepaid payment without pressure.', [
        ['COD order confirmation', 'Immediately after a COD order', "Hi {{1}}, thank you for ordering from {{2}}. Please confirm your Cash on Delivery order {{3}} for {{4}} by tapping CONFIRM below.\n\nWe will dispatch it after confirmation."],
        ['Unconfirmed COD reminder', '2-4 hours after no response', "Hi {{1}}, we are waiting for confirmation of COD order {{2}} from {{3}}. Please confirm by {{4}} so we can dispatch it on time.\n\nIf you did not place this order, reply CANCEL."],
        ['Address verification', 'Before packing or dispatch', "Please check the delivery details for order {{1}}:\n{{2}}\n\nReply YES if the address is correct, or send the corrected address in your reply."],
        ['COD to prepaid option', 'After COD confirmation', "Your order {{1}} is confirmed, {{2}}. Prefer contactless delivery? You can securely pay {{3}} online here: {{4}}\n\nCOD remains available if you prefer."],
        ['High-value COD verification', 'Before dispatching high-value orders', "Hi {{1}}, your COD order {{2}} worth {{3}} needs a quick verification before dispatch. Please confirm the order and delivery address here: {{4}}.\n\nNeed assistance? Reply HELP."],
    ]],
    'order' => ['Order updates', 'Reduce “where is my order?” questions by proactively sharing useful information at every stage.', [
        ['Order confirmed', 'Immediately after confirmation', "Order confirmed! Hi {{1}}, we received order {{2}} at {{3}}. Total: {{4}}. We will message you when it ships.\n\nView order: {{5}}"],
        ['Order shipped', 'When the shipment is handed over', "Good news, {{1}}—order {{2}} has shipped via {{3}}. Track it here: {{4}}. Expected delivery: {{5}}."],
        ['Out for delivery', 'On the delivery day', "Your {{1}} order {{2}} is out for delivery today. Please keep {{3}} ready if this is a COD order. Track: {{4}}"],
        ['Delivery attempt failed', 'Soon after a failed attempt', "We could not deliver order {{1}} today, {{2}}. Please confirm a suitable time or update your address here: {{3}} so we can arrange the next attempt."],
        ['Delivered and support', 'Shortly after delivery', "Delivered! We hope you love order {{1}}, {{2}}. Need help with the product? Reply to this message or visit {{3}}."],
    ]],
    'engagement' => ['Engagement & retention', 'Stay useful after the sale with care tips, feedback requests, replenishment reminders, and relevant updates.', [
        ['Product care tip', '1-3 days after delivery', "Hi {{1}}, here is a quick tip to get the best from your {{2}}: {{3}}. Find the complete care guide here: {{4}}."],
        ['Review request', '3-7 days after delivery', "How is your {{1}}, {{2}}? Your feedback helps other customers choose confidently. Share a quick review here: {{3}}. Thank you for choosing {{4}}."],
        ['Replenishment reminder', 'Based on the real usage cycle', "Running low on {{1}}, {{2}}? Reorder in a few taps here: {{3}}. Need help changing the quantity or variant? Reply to us."],
        ['Back-in-stock alert', 'When a requested item returns', "It is back, {{1}}! {{2}} is available again at {{3}}. Shop here: {{4}}. Availability may be limited."],
        ['Win-back message', '45-90 days after last purchase', "We have missed you, {{1}}. See what is new at {{2}}, including {{3}}: {{4}}. Reply STOP if you would rather not receive updates."],
    ]],
    'support' => ['Customer support', 'Set expectations quickly and move each conversation toward a clear resolution.', [
        ['Welcome and routing', 'At the start of a conversation', "Hi {{1}}, welcome to {{2}} support. How can we help?\n\nReply 1 for order status\n2 for returns or exchanges\n3 for product help\n4 to speak with our team"],
        ['Support acknowledgement', 'As soon as a request arrives', "Thanks for contacting {{1}}, {{2}}. We received your request about {{3}}. A team member will respond within {{4}}. Your reference is {{5}}."],
        ['Return instructions', 'After checking return eligibility', "Your return request for order {{1}} is approved. Pack the item with its original tags and use this link to arrange pickup: {{2}}. Please complete this by {{3}}."],
        ['Refund processed', 'When the refund is initiated', "Your refund of {{1}} for order {{2}} was processed on {{3}}. It should appear in your original payment method within {{4}} business days."],
    ]],
];

$faqs = [
    ['question' => 'What is a WhatsApp message template?', 'answer' => 'A WhatsApp message template is a reusable message format a business uses through the WhatsApp Business Platform. Templates sent outside the customer service window generally need Meta approval and must follow WhatsApp policies.'],
    ['question' => 'How do I write a WhatsApp abandoned cart message?', 'answer' => 'Mention the cart context, remind the customer what they left behind, provide one direct checkout link, and offer help. Keep it brief, avoid false urgency, and send only to customers who opted in.'],
    ['question' => 'What should a COD confirmation message include?', 'answer' => 'Include the customer name, store name, order number, value, and a simple confirm or cancel action. Show the delivery address and provide a clear correction path when verifying an address.'],
    ['question' => 'Can I copy and use these templates as they are?', 'answer' => 'Yes, after replacing every variable and checking all prices, policies, dates, and links. Submit applicable business-initiated templates for Meta review before sending them through the WhatsApp Business Platform.'],
    ['question' => 'How many WhatsApp cart recovery messages should I send?', 'answer' => 'Start with two or three: a reminder after 15 to 30 minutes, a benefit or support message several hours later, and an optional final reminder the next day. Test frequency against conversions, opt-outs, and feedback.'],
    ['question' => 'How can I avoid making WhatsApp marketing feel like spam?', 'answer' => 'Get explicit opt-in, identify your brand, send relevant messages at reasonable times, cap frequency, avoid misleading urgency, and make opting out easy.'],
];

$schemas = [
    SEO::breadcrumbSchema([
        ['name' => 'Home', 'url' => url('/')], ['name' => 'Resources', 'url' => url('resources')],
        ['name' => 'WhatsApp Message Templates', 'url' => url('resources/whatsapp-message-templates')],
    ]),
    SEO::faqSchema($faqs),
    json_encode(['@context' => 'https://schema.org', '@type' => 'CollectionPage', 'name' => '24 WhatsApp Message Templates for Ecommerce', 'description' => 'A free collection of copy-and-paste WhatsApp templates for ecommerce.', 'url' => url('resources/whatsapp-message-templates'), 'isPartOf' => ['@type' => 'WebSite', 'name' => SITE_NAME, 'url' => url('/')], 'numberOfItems' => 24], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT),
];

ob_start();
?>
<!-- ============================ HERO ============================ -->
<section class="ak-pagehero ak-pagehero--dark">
  <div class="ak-container">
    <div class="ak-pagehero__inner">
      <div class="ak-crumbs">
        <a href="<?= url('/') ?>">Home</a> <span>/</span> <a href="<?= url('resources') ?>">Resources</a> <span>/</span> WhatsApp Templates
      </div>
      <div class="ak-eyebrow">Free ecommerce resource</div>
      <h1 class="ak-h1 ak-words" style="font-size:clamp(38px,5.2vw,74px)">24 WhatsApp Message Templates for Ecommerce</h1>
      <p class="ak-lead">
        Copy, customise and use practical messages for abandoned cart recovery,
        COD verification, order updates, retention and support.
      </p>
      <div class="ak-tags">
        <span class="ak-tag"><?= ak_icon('check', 15) ?> Copy and paste</span>
        <span class="ak-tag"><?= ak_icon('check', 15) ?> 5 categories</span>
        <span class="ak-tag"><?= ak_icon('check', 15) ?> Shopify friendly</span>
        <span class="ak-tag"><?= ak_icon('check', 15) ?> No signup</span>
      </div>
    </div>
  </div>
</section>

<!-- ============================ SHORT ANSWER ============================ -->
<section class="ak-section ak-section--tight">
  <div class="ak-container">
    <div class="ak-answer ak-reveal">
      <b>The short answer</b>
      The best ecommerce WhatsApp template is short, specific, useful and easy to act on.
      Identify your brand, include only necessary context, use one clear action, and offer an
      opt-out for promotions. Send only to opted-in customers and follow current WhatsApp Business rules.
    </div>
  </div>
</section>

<!-- ============================ CATEGORY NAV ============================ -->
<nav class="ak-chipnav" aria-label="Template categories">
  <div class="ak-container">
    <div class="ak-chipnav__row">
      <?php foreach ($categories as $id => $category): ?>
        <a href="#<?= $id ?>"><?= clean($category[0]) ?></a>
      <?php endforeach; ?>
      <a href="#how-to-use">How to use</a>
    </div>
  </div>
</nav>

<!-- ============================ TEMPLATES ============================ -->
<section class="ak-section ak-section--tight" style="border-top:0">
  <div class="ak-container">
    <?php $number = 1; foreach ($categories as $id => $category): ?>
      <div id="<?= $id ?>" class="ak-tplgroup ak-reveal">
        <div class="ak-tplgroup__head">
          <p class="ak-tplgroup__count"><?= count($category[2]) ?> ready-to-use messages</p>
          <h2 class="ak-h3"><?= clean($category[0]) ?> WhatsApp templates</h2>
          <p><?= clean($category[1]) ?></p>
        </div>

        <div class="ak-tplgrid">
          <?php foreach ($category[2] as $template): ?>
            <article class="ak-tpl ak-spot">
              <div class="ak-tpl__head">
                <div>
                  <p class="ak-tpl__no">Template <?= $number++ ?></p>
                  <h3><?= clean($template[0]) ?></h3>
                  <p class="ak-tpl__timing">Best timing: <?= clean($template[1]) ?></p>
                </div>
                <!-- class "copy-template" is required by the script below -->
                <button type="button" class="copy-template ak-copybtn">
                  <?= ak_icon('clipboard', 15) ?> <span>Copy template</span>
                </button>
              </div>
              <!-- class "template-text" is required by the script below -->
              <div class="template-text ak-tpl__text"><?= clean($template[2]) ?></div>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>

    <!-- HOW TO USE -->
    <div id="how-to-use" class="ak-tplgroup ak-reveal">
      <div class="ak-head" style="margin-bottom:32px">
        <div class="ak-kicker">Implementation guide</div>
        <div>
          <h2 class="ak-h2">How to use these WhatsApp templates</h2>
          <p class="ak-lead">A strong template still needs the right consent, context and timing.</p>
        </div>
      </div>
      <div class="ak-grid2">
        <?php foreach ([
          ['Choose one job', 'Decide whether the message should confirm, inform, recover, or support. Keep one main action.'],
          ['Replace every variable', 'Swap each placeholder for a customer name, order number, product, amount, date, or secure link.'],
          ['Match your brand voice', 'Keep the required details, but edit the tone so the message sounds like your store.'],
          ['Check consent and policy', 'Message customers with appropriate opt-in and submit templates for approval when required.'],
          ['Test every path', 'Check mobile formatting, variables, buttons, links, tracking, replies, and opt-out handling.'],
          ['Measure and improve', 'Track delivery, clicks, conversions, replies, blocks, and opt-outs before increasing frequency.'],
        ] as $i => $step): ?>
          <article class="ak-card ak-spot ak-reveal">
            <div class="ak-card__num"><?= $i + 1 ?></div>
            <div>
              <h3><?= clean($step[0]) ?></h3>
              <p><?= clean($step[1]) ?></p>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- CHEAT SHEET + CHECKLIST -->
    <div class="ak-grid2" style="margin-top:46px">
      <article class="ak-card ak-card--flat ak-reveal">
        <div class="ak-card__num"><?= ak_icon('key', 20) ?></div>
        <div>
          <h3>Variable cheat sheet</h3>
          <div class="ak-vars">
            <?php foreach ([['{{1}}', 'Customer name'], ['{{2}}', 'Product, order number, or store'], ['{{3}}', 'Benefit, amount, date, or address'], ['{{4}}', 'Secure checkout, tracking, or support link']] as $v): ?>
              <div><code><?= $v[0] ?></code><span><?= $v[1] ?></span></div>
            <?php endforeach; ?>
          </div>
        </div>
      </article>

      <article class="ak-card ak-card--flat ak-reveal">
        <div class="ak-card__num"><?= ak_icon('check', 20) ?></div>
        <div>
          <h3>Pre-send checklist</h3>
          <ul class="ak-list" style="margin-top:12px">
            <li>Recipient gave appropriate WhatsApp consent</li>
            <li>Every placeholder has a valid value</li>
            <li>Links use HTTPS and open correctly</li>
            <li>Offers, stock claims, and deadlines are accurate</li>
            <li>Promotional messages offer an easy opt-out</li>
          </ul>
        </div>
      </article>
    </div>

    <!-- FAQ -->
    <h2 class="ak-h2" style="margin-top:56px">WhatsApp template FAQs</h2>
    <div class="ak-rows ak-acc ak-reveal" style="margin-top:26px">
      <?php foreach ($faqs as $idx => $faq): ?>
        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <button class="ak-row" type="button" itemprop="name">
            <small><?= str_pad((string)($idx + 1), 2, '0', STR_PAD_LEFT) ?></small>
            <b><?= htmlspecialchars($faq['question']) ?></b>
            <span class="ak-plus">+</span>
          </button>
          <div class="ak-rowbody" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <div class="ak-rowbody__in"><p itemprop="text"><?= htmlspecialchars($faq['answer']) ?></p></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================ CTA ============================ -->
<section class="ak-section ak-section--tight">
  <div class="ak-container">
    <div class="ak-cta ak-reveal">
      <div>
        <h2 class="ak-h2" style="font-size:clamp(30px,4vw,52px)">Put these messages on autopilot</h2>
      </div>
      <div>
        <p>Recover carts, verify COD orders and update customers with WhatsApp automation built for commerce.</p>
        <div class="ak-btns" style="margin-top:0">
          <a href="<?= url('products/whatsapp-shopify') ?>" class="ak-btn ak-btn--onDark">Explore WhatsApp automation <?= ak_icon('arrow-up-right', 16) ?></a>
          <a href="<?= url('contact') ?>" class="ak-btn ak-btn--ghost">Talk to our team</a>
        </div>
      </div>
    </div>
  </div>
</section>

<script>document.addEventListener('DOMContentLoaded',function(){document.querySelectorAll('.copy-template').forEach(function(b){b.addEventListener('click',async function(){var t=b.closest('article').querySelector('.template-text').innerText.trim();try{await navigator.clipboard.writeText(t);var o=b.textContent;b.textContent='Copied!';setTimeout(function(){b.textContent=o},1800)}catch(e){var r=document.createRange();r.selectNode(b.closest('article').querySelector('.template-text'));window.getSelection().removeAllRanges();window.getSelection().addRange(r)}})})});</script>
<?php
$pageContent = ob_get_clean();
SEO::renderSchemas($schemas);
include __DIR__ . '/../../includes/components/layout.php';

<?php
/**
 * Contact Page — AKESTECH design system
 *
 * Rebuilt on the shared .ak-* layout. The /contact slug, the ?type=audit
 * switch and every form field name are unchanged, so includes/form-handler.php
 * and save-enquiry.php keep working exactly as before.
 */
SEO::load('contact');
$formType = clean($_GET['type'] ?? 'contact');
$schemas = [];
$schemas[] = SEO::breadcrumbSchema([
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'Contact', 'url' => url('contact')]
]);

$isAudit  = ($formType === 'audit');

$auditItems = [
    'Store speed & UX analysis',
    'Conversion rate breakdown',
    'Ad account review',
    'WhatsApp revenue potential',
    'Operations efficiency score',
    'Custom 90-day roadmap',
];

$revenueBands = [
    'Under ₹5L / month',
    '₹5L – ₹25L / month',
    '₹25L – ₹1Cr / month',
    '₹1Cr+ / month',
    'Not selling online yet',
];

ob_start();
?>

<!-- ============================ PAGE HERO ============================ -->
<section class="ak-pagehero">
  <div class="ak-container">
    <div class="ak-pagehero__inner">
      <div class="ak-crumbs">
        <a href="<?= url('/') ?>">Home</a> <span>/</span> Contact
      </div>
      <div class="ak-eyebrow">Contact</div>
      <h1 class="ak-h1 ak-words" style="font-size:clamp(44px,6vw,86px)">
        <?= $isAudit ? 'Get your free growth audit' : "Let's build what's next" ?>
      </h1>
      <p class="ak-lead">
        <?= $isAudit
          ? 'Tell us about your business and we will come back with a detailed growth audit — the biggest leaks, the fastest wins and a 90-day roadmap. Free, with no strings attached.'
          : 'Whether you need AI automation, a store or product build, performance marketing, marketplace operations or AI video — tell us where you are and we will map the route.' ?>
      </p>
    </div>
  </div>
</section>

<!-- ============================ FORM + INFO ============================ -->
<section class="ak-section" style="padding-top:20px">
  <div class="ak-container">
    <div class="ak-contact ak-reveal">

      <!-- ---------- FORM ---------- -->
      <div>
        <div class="ak-tabs">
          <a href="<?= url('contact') ?>" class="ak-tab <?= $isAudit ? '' : 'is-on' ?>">Contact us</a>
          <a href="<?= url('contact') ?>?type=audit" class="ak-tab <?= $isAudit ? 'is-on' : '' ?>">Free growth audit</a>
        </div>

        <!-- Posts to itself: handled by includes/form-handler.php via index.php.
             Field names are unchanged so lead capture is unaffected. -->
        <form method="POST" action="" class="ak-form">
          <input type="hidden" name="form_action" value="<?= $isAudit ? 'audit' : 'contact' ?>">
          <?= csrfField() ?>
          <input type="text" name="website_url_hp" class="hidden" tabindex="-1" autocomplete="off">

          <div class="ak-form__row">
            <div class="ak-field">
              <label for="name">Full name *</label>
              <input type="text" id="name" name="name" required placeholder="Rahul Sharma">
            </div>
            <div class="ak-field">
              <label for="email">Work email *</label>
              <input type="email" id="email" name="email" required placeholder="you@company.com">
            </div>
          </div>

          <div class="ak-form__row">
            <div class="ak-field">
              <label for="phone">Phone / WhatsApp *</label>
              <input type="tel" id="phone" name="phone" required placeholder="+91 98765 43210">
            </div>
            <div class="ak-field">
              <label for="company">Company</label>
              <input type="text" id="company" name="company" placeholder="Brand name">
            </div>
          </div>

          <?php if ($isAudit): ?>
          <div class="ak-form__row">
            <div class="ak-field">
              <label for="website">Website</label>
              <input type="url" id="website" name="website" placeholder="https://yourstore.com">
            </div>
            <div class="ak-field">
              <label for="monthly_revenue">Monthly revenue</label>
              <select id="monthly_revenue" name="monthly_revenue">
                <option value="">Select a range</option>
                <?php foreach ($revenueBands as $band): ?>
                  <option value="<?= htmlspecialchars($band) ?>"><?= htmlspecialchars($band) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <?php endif; ?>

          <div class="ak-field">
            <label for="message"><?= $isAudit ? 'What are your biggest growth challenges?' : 'How can we help?' ?></label>
            <textarea id="message" name="message" rows="4" placeholder="<?= $isAudit ? 'Tell us about your current challenges, goals and what you want to fix first...' : 'Tell us about your project or question...' ?>"></textarea>
          </div>

          <button type="submit" class="ak-btn ak-btn--dark" style="width:100%;justify-content:center">
            <?= $isAudit ? 'Get my free audit' : 'Send message' ?> <?= ak_icon('arrow-up-right', 16) ?>
          </button>

          <p class="ak-form__note">By submitting, you agree to our <a href="<?= url('privacy-policy') ?>">Privacy Policy</a>.</p>
        </form>
      </div>

      <!-- ---------- SIDEBAR ---------- -->
      <aside class="ak-contact__side">
        <div class="ak-card ak-card--flat">
          <h3 style="margin-bottom:18px">Get in touch</h3>
          <div class="ak-contact__list">
            <a href="mailto:<?= SITE_EMAIL ?>">
              <span class="ak-contact__ic"><?= ak_icon('mail', 18) ?></span>
              <?= SITE_EMAIL ?>
            </a>
            <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>" target="_blank" rel="noopener">
              <span class="ak-contact__ic"><?= ak_icon('message-circle', 18) ?></span>
              Chat on WhatsApp
            </a>
            <a href="tel:<?= SITE_PHONE ?>">
              <span class="ak-contact__ic"><?= ak_icon('phone', 18) ?></span>
              <?= SITE_PHONE ?>
            </a>
            <span>
              <span class="ak-contact__ic"><?= ak_icon('clock', 18) ?></span>
              Response within 24 hours
            </span>
          </div>
        </div>

        <?php if ($isAudit): ?>
          <div class="ak-card ak-card--flat" style="background:var(--dark);border-color:var(--dark);color:#fff">
            <h3 style="margin-bottom:18px;color:#fff">Your free audit includes</h3>
            <ul class="ak-list ak-list--onDark">
              <?php foreach ($auditItems as $item): ?>
                <li><?= htmlspecialchars($item) ?></li>
              <?php endforeach; ?>
            </ul>
            <p style="font-size:13px;color:#9a9a97;margin-top:18px">Delivered within 3 business days. Zero obligation.</p>
          </div>
        <?php else: ?>
          <div class="ak-card ak-card--flat">
            <h3 style="margin-bottom:18px">Good to know</h3>
            <div class="ak-contact__faqs">
              <div>
                <p class="ak-contact__q">What's your minimum engagement?</p>
                <p>Projects start at ₹50,000. Growth retainers typically start at ₹75,000 per month with a three-month commitment.</p>
              </div>
              <div>
                <p class="ak-contact__q">Do you lock into contracts?</p>
                <p>No. After the initial 90 days it runs month to month. Results keep you, not contracts.</p>
              </div>
              <div>
                <p class="ak-contact__q">How quickly can we start?</p>
                <p>Audit in 3 days, strategy in 2, live in 7. Most engagements begin within a week of signing.</p>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </aside>

    </div>
  </div>
</section>

<?php
$pageContent = ob_get_clean();
include __DIR__ . '/../includes/components/layout.php';

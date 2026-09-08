<?php
/**
 * About Page — AKESTECH design system
 *
 * Rebuilt on the shared .ak-* layout so it matches every other page.
 * Content, sections and the /about slug are unchanged; copy has been
 * updated to reflect the current AI + commerce + growth positioning.
 */
SEO::load('about');

$contactUrl   = url('contact');
$whatsappText = urlencode('Hi AKESTECH, I read your about page and would like to discuss a project.');

$aboutFaqs = [
    ['question' => 'What kind of company is AKESTECH?', 'answer' => 'AKESTECH is an AI, commerce and growth technology company. We combine a full-service growth agency with an in-house product and engineering team, so the same partner can run your acquisition, build your store or product, automate your operations and produce your creative.'],
    ['question' => 'Are you still a Shopify agency?', 'answer' => 'Shopify and commerce are still a big part of what we do, but they are no longer all we do. We now cover Shopify and commerce, AI automation, product development, performance marketing, marketplace management and AI video production. Every existing page and resource stays live at the same URL.'],
    ['question' => 'What makes you different from a typical agency?', 'answer' => 'Most agencies manage one channel and report vanity metrics. We own the whole picture: ads, store, operations, automation and retention, reported against ROAS, contribution margin and net profit. We also build our own technology instead of depending only on off-the-shelf tools.'],
    ['question' => 'Who actually works on my account?', 'answer' => 'A dedicated team of senior specialists — a growth strategist, a performance marketer, a developer and an automation specialist — not a single account manager juggling twenty brands.'],
    ['question' => 'What are your engagement terms?', 'answer' => 'Projects start at Rs 50,000. Growth retainers typically start at Rs 75,000 per month with a three-month commitment, then run month to month. Results keep you, not contracts.'],
];

$faqs = function_exists('ak_faqs') ? ak_faqs('about', $aboutFaqs) : $aboutFaqs;

$schemas = [];
if (!empty($faqs)) {
    $schemas[] = SEO::faqSchema($faqs);
}
$schemas[] = SEO::breadcrumbSchema([
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'About', 'url' => url('about')],
]);
$schemas[] = SEO::organizationSchema();

/* ---------------- page data ---------------- */

$metrics = [
    ['value' => '100+', 'label' => 'Commerce brands scaled'],
    ['value' => '₹50Cr+', 'label' => 'Ad spend managed'],
    ['value' => '3X+', 'label' => 'Average ROAS'],
    ['value' => '15M+', 'label' => 'WhatsApp messages sent'],
    ['value' => '30+', 'label' => 'Specialists in-house'],
];

$typical = [
    'Only manage ads — store, operations and retention are someone else\'s problem',
    'Junior account executives running your campaigns',
    'The same cookie-cutter strategy for every brand',
    'Report vanity metrics — impressions, clicks and reach',
    'Locked into long-term contracts',
    'No proprietary technology, only off-the-shelf tools',
    'Slow execution — weeks for a simple change',
];

$ours = [
    'Full stack: ads, store, operations, automation and technology, all connected',
    'Senior specialists on every account — strategist, ad expert, developer',
    'Custom strategy built on your data, margins and unit economics',
    'Report what matters — ROAS, contribution margin and net profit',
    'Month to month. Results keep you, not contracts',
    'Our own automation and AI tools give clients an unfair advantage',
    'Ship weekly. Audit in 3 days, strategy in 2, live in 7',
];

$agencyServices = [
    'Performance marketing across Meta and Google',
    'Store, marketplace and conversion optimisation',
    'Operations, fulfilment and RTO management',
    'Creative strategy and production',
    'AI automation and custom development',
    'Growth strategy and consulting',
];

$productFeatures = [
    'Abandoned cart recovery with strong average recovery rates',
    'COD order verification that cuts RTO significantly',
    'Automated order, shipping and delivery notifications',
    'Broadcast campaigns with audience segmentation',
    'AI-powered chatbot for support and sales',
    'Fast setup, no code required',
];

$values = [
    ['icon' => 'bar-chart',  'title' => 'Data Kills Debate',      'desc' => 'Every decision starts with data. We test, measure and let numbers guide strategy — not opinions, hunches or best practices from five years ago.'],
    ['icon' => 'wallet',     'title' => 'Profit Over Revenue',    'desc' => 'Top-line growth means nothing if the unit economics do not work. We optimise for contribution margin and net profit, always.'],
    ['icon' => 'zap',        'title' => 'Speed Is a Feature',     'desc' => 'The fast eat the slow. We audit in three days, strategise in two, ship in seven. No sixty-page decks, no six-week onboarding.'],
    ['icon' => 'shield',     'title' => 'Radical Transparency',   'desc' => 'No black boxes. You see every metric, every decision and every rupee, with live dashboards and full access to everything.'],
    ['icon' => 'layers',     'title' => 'Build, Don\'t Rent',     'desc' => 'We build our own tools, AI agents and automations instead of depending entirely on third-party software. That gives clients capabilities nobody else has.'],
    ['icon' => 'target',     'title' => 'Skin in the Game',       'desc' => 'We succeed when you succeed. The team cares about your brand as if it were our own, because your growth is our reputation.'],
];

$team = [
    ['icon' => 'target',      'role' => 'Growth Strategist',           'desc' => 'Owns your growth roadmap. Sets KPIs, allocates budget and makes sure every channel works together.'],
    ['icon' => 'trending-up', 'role' => 'Performance Marketer',        'desc' => 'Runs your Meta and Google campaigns. Builds audiences, tests creative and optimises for ROAS daily.'],
    ['icon' => 'monitor',     'role' => 'Engineer',                    'desc' => 'Handles store and product builds, custom development, speed, integrations and technical implementation.'],
    ['icon' => 'bot',         'role' => 'Ops & Automation Specialist', 'desc' => 'Streamlines operations, sets up AI agents and WhatsApp automation, and builds workflows that save 20+ hours a week.'],
];

$industries = [
    ['icon' => 'shirt',      'name' => 'Fashion & Apparel'],
    ['icon' => 'sparkle',    'name' => 'Beauty & Skincare'],
    ['icon' => 'dumbbell',   'name' => 'Health & Wellness'],
    ['icon' => 'smartphone', 'name' => 'Electronics'],
    ['icon' => 'home',       'name' => 'Home & Living'],
    ['icon' => 'utensils',   'name' => 'Food & Beverage'],
];

$milestones = [
    ['year' => '2021', 'title' => 'Founded',             'desc' => 'Started by running a D2C brand ourselves and discovering the gap between agencies, tools and actual growth.'],
    ['year' => '2022', 'title' => 'Agency Launch',       'desc' => 'Launched growth services for commerce brands. Crossed 50 clients in year one and hit ₹10Cr managed ad spend.'],
    ['year' => '2023', 'title' => 'Product Launch',      'desc' => 'Built and shipped our own WhatsApp automation product, reaching 1,000+ installs within six months.'],
    ['year' => '2024', 'title' => 'Scaling Up',          'desc' => '200+ active clients, ₹50Cr+ ad spend managed and a team of 30+ specialists across growth, engineering and creative.'],
    ['year' => 'Next', 'title' => 'AI-First',            'desc' => 'AI agents, growth intelligence, an expanded product suite and deeper ecosystem integrations. The best is ahead.'],
];

ob_start();
?>

<!-- ============================ PAGE HERO ============================ -->
<section class="ak-pagehero">
  <div class="ak-container">
    <div class="ak-pagehero__inner">
      <div class="ak-crumbs">
        <a href="<?= url('/') ?>">Home</a> <span>/</span> About
      </div>
      <div class="ak-eyebrow">About AKESTECH</div>
      <h1 class="ak-h1 ak-words" style="font-size:clamp(46px,6.4vw,92px)">The growth team your business deserves.</h1>
      <p class="ak-lead">
        AKESTECH is an AI, commerce and growth technology company. We combine a full-service
        growth agency with an in-house product and engineering team — so the same partner can
        win you demand, build your store or product, automate your operations and produce your creative.
      </p>
      <div class="ak-btns">
        <a href="<?= $contactUrl ?>" class="ak-btn ak-btn--dark">Work with us <?= ak_icon('arrow-up-right', 16) ?></a>
        <a href="#story" class="ak-btn ak-btn--light">Our story</a>
      </div>
    </div>
  </div>
</section>

<!-- ============================ TEAM IMAGE ============================ -->
<section class="ak-section ak-section--tight" style="padding-top:0">
  <div class="ak-container">
    <figure class="ak-figure ak-reveal">
      <img src="<?= asset('images/about-team.jpg') ?>" alt="The AKESTECH team collaborating at work" width="1408" height="768" loading="lazy">
      <figcaption>One team across strategy, media, engineering and automation — 30+ specialists in-house.</figcaption>
    </figure>
  </div>
</section>

<!-- ============================ METRICS ============================ -->
<section class="ak-section--flush">
  <div class="ak-container">
    <div class="ak-metrics ak-reveal">
      <?php foreach ($metrics as $m): ?>
        <div class="ak-metric">
          <b><?= htmlspecialchars($m['value']) ?></b>
          <span><?= htmlspecialchars($m['label']) ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================ STORY ============================ -->
<section class="ak-section" id="story">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">01 / Why we started</div>
      <div>
        <h2 class="ak-h2">Born from a simple frustration.</h2>
        <p class="ak-lead">We were the client who could not find anyone looking at the whole picture.</p>
      </div>
    </div>

    <div class="ak-split ak-reveal">
      <div class="ak-split__copy ak-prose">
        <p>
          In 2021 we were running a commerce brand ourselves. We hired three different partners —
          one for ads, one for the store, one for operations. None of them spoke to each other.
          Returns were high, margins were thin and every report told a different story.
        </p>
        <p>
          So we built what we wished existed: a single growth partner that handles everything —
          from paid acquisition to store optimisation, from operations to customer engagement.
          One team, one strategy, one goal: profitable growth.
        </p>
        <p>
          Along the way we noticed that email was not cutting it, while WhatsApp had open rates
          nobody else could match. So we built our own automation product. Today AKESTECH is two
          things at once: a full-service growth partner trusted by 200+ brands, and a product and
          engineering team building AI agents and automation used by thousands of stores.
        </p>
      </div>
      <div>
        <blockquote class="ak-quote">
          <p>The biggest problem was never a single channel. It was that nobody was looking at the whole picture — ads, store, operations and retention were all disconnected silos.</p>
          <cite>Founding Team, AKESTECH</cite>
        </blockquote>
      </div>
    </div>
  </div>
</section>

<!-- ============================ DIFFERENCE ============================ -->
<section class="ak-section" style="background:#efefec">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">02 / What makes us different</div>
      <div>
        <h2 class="ak-h2">Most partners offer one piece. We own the whole board.</h2>
      </div>
    </div>

    <div class="ak-grid2 ak-reveal">
      <article class="ak-card ak-card--flat">
        <div class="ak-card__num"><?= ak_icon('x', 20) ?></div>
        <div>
          <h3>Typical agencies</h3>
          <ul class="ak-list ak-list--no">
            <?php foreach ($typical as $item): ?>
              <li><?= htmlspecialchars($item) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </article>

      <article class="ak-card ak-spot">
        <div class="ak-card__num"><?= ak_icon('check', 20) ?></div>
        <div>
          <h3>AKESTECH</h3>
          <ul class="ak-list">
            <?php foreach ($ours as $item): ?>
              <li><?= htmlspecialchars($item) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ============================ TWO ENGINES ============================ -->
<section class="ak-section">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">03 / Our two engines</div>
      <div>
        <h2 class="ak-h2">Agency plus technology is an unfair advantage.</h2>
        <p class="ak-lead">We are not only an agency and not only a product company. We are both — and that changes what we can deliver.</p>
      </div>
    </div>

    <div class="ak-grid2 ak-reveal">
      <article class="ak-card ak-spot">
        <div class="ak-card__num">01</div>
        <div>
          <h3>Growth Agency</h3>
          <p style="margin-bottom:16px">A dedicated team of specialists managing your brand's entire growth engine — from acquisition to retention.</p>
          <ul class="ak-list">
            <?php foreach ($agencyServices as $s): ?><li><?= htmlspecialchars($s) ?></li><?php endforeach; ?>
          </ul>
          <p style="margin-top:22px"><a href="<?= url('services/automation') ?>" style="text-decoration:underline;color:var(--ink)">Explore our services <?= ak_icon('arrow-up-right', 16) ?></a></p>
        </div>
      </article>

      <article class="ak-card ak-spot ak-d4">
        <div class="ak-card__num">02</div>
        <div>
          <h3>Product &amp; AI</h3>
          <p style="margin-bottom:16px">Proprietary automation used by our agency clients and thousands of independent stores.</p>
          <ul class="ak-list">
            <?php foreach ($productFeatures as $f): ?><li><?= htmlspecialchars($f) ?></li><?php endforeach; ?>
          </ul>
          <p style="margin-top:22px"><a href="<?= url('products/whatsapp-shopify') ?>" style="text-decoration:underline;color:var(--ink)">Explore our product <?= ak_icon('arrow-up-right', 16) ?></a></p>
        </div>
      </article>
    </div>

    <div class="ak-statement ak-reveal" style="margin-top:30px">
      <p>The magic is in the combination. Our clients get AI automation and conversion tooling built into their growth strategy, while our campaigns keep feeding new demand — so acquisition, conversion and retention improve together instead of in isolation.</p>
    </div>
  </div>
</section>

<!-- ============================ VALUES ============================ -->
<section class="ak-section" style="background:#efefec">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">04 / Principles</div>
      <div>
        <h2 class="ak-h2">How we make decisions.</h2>
        <p class="ak-lead">Not values on a wall — the rules we actually run the company by.</p>
      </div>
    </div>
    <div class="ak-grid3">
      <?php $i = 0; foreach ($values as $v): $i++; ?>
        <article class="ak-card ak-spot ak-reveal ak-d<?= ($i % 5) + 1 ?>">
          <div class="ak-card__num"><?= ak_icon($v['icon'], 22) ?></div>
          <div>
            <h3><?= htmlspecialchars($v['title']) ?></h3>
            <p><?= htmlspecialchars($v['desc']) ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================ TEAM ============================ -->
<section class="ak-section">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">05 / Your team</div>
      <div>
        <h2 class="ak-h2">Specialists, not generalists.</h2>
        <p class="ak-lead">Every client gets senior people, not one account manager juggling twenty brands.</p>
      </div>
    </div>
    <div class="ak-grid4">
      <?php $i = 0; foreach ($team as $t): $i++; ?>
        <article class="ak-card ak-spot ak-reveal ak-d<?= $i ?>">
          <div class="ak-card__num"><?= ak_icon($t['icon'], 22) ?></div>
          <div>
            <h3><?= htmlspecialchars($t['role']) ?></h3>
            <p><?= htmlspecialchars($t['desc']) ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
    <p class="ak-reveal" style="margin-top:26px;color:#777;font-size:16px">30+ specialists across strategy, media, design, engineering and operations.</p>
  </div>
</section>

<!-- ============================ INDUSTRIES ============================ -->
<section class="ak-section ak-section--tight" style="background:#efefec">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">06 / Sectors</div>
      <div>
        <h2 class="ak-h2">Categories we have scaled.</h2>
      </div>
    </div>
    <div class="ak-tags ak-reveal">
      <?php foreach ($industries as $ind): ?>
        <span class="ak-tag ak-tag--lg"><?= ak_icon($ind['icon'], 18) ?> <?= htmlspecialchars($ind['name']) ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================ MILESTONES ============================ -->
<section class="ak-section">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">07 / Journey</div>
      <div>
        <h2 class="ak-h2">Key milestones.</h2>
      </div>
    </div>
    <div class="ak-process">
      <?php foreach ($milestones as $m): ?>
        <div class="ak-step ak-reveal">
          <div class="ak-step__num"><?= htmlspecialchars($m['year']) ?></div>
          <div>
            <h3><?= htmlspecialchars($m['title']) ?></h3>
            <p><?= htmlspecialchars($m['desc']) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================ FAQ ============================ -->
<section class="ak-section" style="background:#efefec">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">08 / FAQ</div>
      <div>
        <h2 class="ak-h2">Questions about working with us.</h2>
      </div>
    </div>
    <div class="ak-rows ak-reveal">
      <?php foreach ($faqs as $index => $faq):
        $q = is_array($faq) ? ($faq['question'] ?? '') : $faq;
        $a = is_array($faq) ? ($faq['answer'] ?? '') : '';
      ?>
      <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <button class="ak-row" type="button" itemprop="name">
          <small><?= str_pad((string)($index + 1), 2, '0', STR_PAD_LEFT) ?></small>
          <b><?= htmlspecialchars($q) ?></b>
          <span class="ak-plus">+</span>
        </button>
        <div class="ak-rowbody" itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
          <div class="ak-rowbody__in">
            <p itemprop="text"><?= nl2br(htmlspecialchars($a)) ?></p>
          </div>
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
        <h2 class="ak-h2" style="font-size:clamp(32px,4.4vw,60px)">Let's build something that compounds.</h2>
      </div>
      <div>
        <p>Tell us where you are today. We'll come back within one business day with the three biggest opportunities we can see.</p>
        <div class="ak-btns" style="margin-top:0">
          <a href="<?= $contactUrl ?>" class="ak-btn ak-btn--onDark">Start a conversation <?= ak_icon('arrow-up-right', 16) ?></a>
          <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=<?= $whatsappText ?>" target="_blank" rel="noopener" class="ak-btn ak-btn--ghost">WhatsApp us</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$pageContent = ob_get_clean();
include __DIR__ . '/../includes/components/layout.php';

<?php
/**
 * Meta Ads for D2C Brands — AKESTECH design system
 * Same slug, same content, same HowTo + FAQPage schemas.
 */
SEO::set('meta_title', 'Meta Ads for D2C Brands: Step-by-Step Guide | ' . SITE_NAME);
SEO::set('meta_description', 'Build profitable Meta ad campaigns for your Shopify D2C brand with this step-by-step guide to tracking, structure, creative, budgets, testing, and scaling.');
SEO::set('canonical_url', url('resources/meta-ads-d2c-guide'));
SEO::set('og_title', 'Meta Ads for D2C Brands: The Practical Setup Guide');
SEO::set('og_description', 'A clear framework for tracking, campaigns, creative testing, measurement, and profitable scaling.');

$steps = [
 ['01','Get the economics right','Calculate contribution margin, break-even ROAS, allowable customer acquisition cost, and a target that leaves room for overhead. Use net revenue after discounts, cancellations, and refunds—not dashboard revenue alone.',['Know AOV and product margin','Set break-even and target ROAS','Define first-order vs lifetime-value targets']],
 ['02','Build a trustworthy data foundation','Connect the Meta Pixel to Shopify, configure Conversions API where available, verify your domain, prioritize key web events, and test the full purchase journey. Use consistent UTMs so analytics and store orders can be reconciled.',['Test ViewContent, AddToCart, InitiateCheckout, and Purchase','Check value and currency parameters','Exclude test and duplicate purchases']],
 ['03','Prepare the offer and landing page','Ads amplify the buying experience; they do not repair it. Make the product promise, proof, price, shipping, returns, delivery estimate, and primary action obvious on mobile.',['Match ad promise to landing page','Place reviews and objections near the CTA','Check speed and checkout on a real phone']],
 ['04','Create ads around customer angles','Develop distinct reasons to buy, then express each angle through multiple formats. Product demos, founder stories, customer proof, comparisons, problem-solution videos, and statics give the system meaningful options.',['One main idea per ad','Show product or outcome early','Add captions and mobile-safe text']],
 ['05','Launch a simple campaign structure','For ecommerce sales, use a Sales campaign optimized for Purchase when you have reliable purchase tracking. Keep prospecting consolidated enough to learn and separate only when budget, geography, offer, or business logic truly differs.',['Choose the conversion location and Purchase event','Use broad or justified audience controls','Start with automatic placements unless evidence says otherwise']],
 ['06','Set a learning-friendly budget','Budget must generate enough opportunities to judge an ad without putting cash flow at risk. Base it on allowable CPA and testing volume—not an arbitrary daily number.',['Decide maximum loss per test','Avoid constant edits after launch','Record hypothesis, spend, and decision date']],
 ['07','Read the funnel, not one metric','ROAS is an outcome. Diagnose delivery, thumb-stop/attention, click quality, product-page conversion, checkout completion, CPA, refund rate, and contribution profit together.',['High CPM alone does not prove a problem','Clicks without purchases often signal message or site friction','Judge blended business impact alongside platform attribution']],
 ['08','Scale winners without starving discovery','Increase spend in controlled steps when performance remains above target and fulfillment can handle demand. Continue creative testing because fatigue, competition, and demand change over time.',['Scale budget progressively','Refresh losing hooks before rebuilding everything','Protect a recurring creative-test budget']],
];

$faqs = [
 ['question'=>'Which Meta campaign objective should a D2C brand use?','answer'=>'An ecommerce brand seeking online purchases should generally use the Sales objective with the website or appropriate shop as the conversion location, then optimize for Purchase when reliable purchase data is available.'],
 ['question'=>'How much should I spend on Meta ads initially?','answer'=>'Set a testing budget from your allowable CPA and the number of conversions needed to make a decision. A smaller brand should test fewer variables with enough budget per test rather than spreading money across many ad sets.'],
 ['question'=>'Should I use broad audiences or interests?','answer'=>'Broad targeting is a strong baseline when tracking, creative, and conversion volume are healthy. Interest or custom audiences can still be useful when they represent a clear hypothesis, market constraint, or retargeting group.'],
 ['question'=>'How many creatives should I test?','answer'=>'Test enough ads to represent genuinely different hooks, formats, and customer angles without fragmenting budget. Three to six purposeful ads in a test is often more useful than dozens of minor variations.'],
 ['question'=>'When should I scale a Meta campaign?','answer'=>'Scale after purchases show that CPA or contribution profit is consistently within target, tracking is credible, and operations can fulfill added demand. Increase budgets gradually and monitor marginal—not only average—returns.'],
];

$metricsTable = [
 ['CPM','Cost to reach people','Is the auction expensive, or is delivery constrained?'],
 ['Outbound CTR','Ability to earn a site visit','Does the hook and offer create qualified curiosity?'],
 ['Landing-page conversion','Store effectiveness','Does the page fulfil the ad promise and remove objections?'],
 ['CPA','Cost to acquire an order','Is acquisition within allowable unit economics?'],
 ['MER / blended ROAS','Total revenue efficiency','Is the overall business growing efficiently across channels?'],
 ['Contribution profit','Cash generated after variable costs','Are we making money, not merely reporting revenue?'],
];

$preLaunch = [
 'Purchase event fires once with correct value',
 'Product page matches the creative promise',
 'UTMs and naming are consistent',
 'Target and break-even CPA are documented',
 'Inventory, support, and fulfillment are ready',
];

$traps = [
 'Changing settings before data can accumulate',
 'Splitting a small budget across many ad sets',
 'Calling platform revenue “profit”',
 'Using fake urgency or unsupported claims',
 'Scaling while returns or fulfillment failures rise',
];

$schemas = [
    SEO::breadcrumbSchema([['name'=>'Home','url'=>url('/')],['name'=>'Resources','url'=>url('resources')],['name'=>'Meta Ads for D2C Brands','url'=>url('resources/meta-ads-d2c-guide')]]),
    SEO::faqSchema($faqs),
    json_encode(['@context'=>'https://schema.org','@type'=>'HowTo','name'=>'How to set up Meta ads for a D2C ecommerce brand','description'=>'An eight-step framework for profitable Meta advertising.','totalTime'=>'P14D','step'=>array_map(fn($s)=>['@type'=>'HowToStep','position'=>(int)$s[0],'name'=>$s[1],'text'=>$s[2]],$steps)], JSON_UNESCAPED_SLASHES)
];

ob_start();
?>

<!-- ============================ HERO ============================ -->
<section class="ak-pagehero ak-pagehero--dark">
  <div class="ak-container">
    <div class="ak-pagehero__inner">
      <div class="ak-crumbs">
        <a href="<?= url('/') ?>">Home</a> <span>/</span> <a href="<?= url('resources') ?>">Resources</a> <span>/</span> Meta Ads
      </div>
      <div class="ak-eyebrow">Free D2C growth guide</div>
      <h1 class="ak-h1 ak-words" style="font-size:clamp(38px,5.2vw,74px)">Meta Ads for D2C Brands</h1>
      <p class="ak-lead">
        A step-by-step system for setting up, testing, measuring and scaling
        campaigns profitably — built around unit economics, not vanity metrics.
      </p>
    </div>
  </div>
</section>

<!-- ============================ GUIDE ============================ -->
<section class="ak-section">
  <div class="ak-container">
    <div class="ak-guide">

      <!-- contents -->
      <aside class="ak-guide__nav">
        <p class="ak-guide__navtitle">In this guide</p>
        <nav>
          <?php foreach ($steps as $step): ?>
            <a href="#step-<?= $step[0] ?>"><?= $step[0] ?>. <?= clean($step[1]) ?></a>
          <?php endforeach; ?>
          <a href="#metrics">Metrics</a>
          <a href="#faq">FAQs</a>
        </nav>
      </aside>

      <!-- body -->
      <div class="ak-guide__body">
        <div class="ak-answer ak-reveal">
          <b>The profitable Meta ads framework</b>
          Profitable D2C advertising needs four systems working together: sound unit economics,
          accurate measurement, high-volume creative learning, and a store that converts.
          Start with margin, optimise toward purchases, and scale only while marginal contribution stays healthy.
        </div>

        <div class="ak-process">
          <?php foreach ($steps as $step): ?>
            <div class="ak-step ak-reveal" id="step-<?= $step[0] ?>">
              <div class="ak-step__num"><?= $step[0] ?></div>
              <div>
                <h2 class="ak-h3"><?= clean($step[1]) ?></h2>
                <p><?= clean($step[2]) ?></p>
                <ul class="ak-list" style="margin-top:18px">
                  <?php foreach ($step[3] as $item): ?><li><?= clean($item) ?></li><?php endforeach; ?>
                </ul>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <!-- metrics -->
        <h2 class="ak-h2" id="metrics" style="margin-top:56px">Metrics that make the diagnosis useful</h2>
        <div class="ak-tablewrap ak-reveal">
          <table>
            <thead>
              <tr><th>Metric</th><th>What it tells you</th><th>Use it to ask</th></tr>
            </thead>
            <tbody>
              <?php foreach ($metricsTable as $row): ?>
                <tr>
                  <td><strong><?= clean($row[0]) ?></strong></td>
                  <td><?= clean($row[1]) ?></td>
                  <td><?= clean($row[2]) ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

        <!-- checks -->
        <div class="ak-grid2" style="margin-top:36px">
          <article class="ak-card ak-card--flat ak-reveal">
            <div class="ak-card__num"><?= ak_icon('check', 20) ?></div>
            <div>
              <h3>Pre-launch check</h3>
              <ul class="ak-list" style="margin-top:12px">
                <?php foreach ($preLaunch as $item): ?><li><?= clean($item) ?></li><?php endforeach; ?>
              </ul>
            </div>
          </article>
          <article class="ak-card ak-card--flat ak-reveal">
            <div class="ak-card__num"><?= ak_icon('x', 20) ?></div>
            <div>
              <h3>Avoid these traps</h3>
              <ul class="ak-list ak-list--no" style="margin-top:12px">
                <?php foreach ($traps as $item): ?><li><?= clean($item) ?></li><?php endforeach; ?>
              </ul>
            </div>
          </article>
        </div>

        <!-- faq -->
        <h2 class="ak-h2" id="faq" style="margin-top:56px">Meta ads FAQs</h2>
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

        <p style="margin-top:26px;font-size:13px;color:#888">
          Platform interfaces and policies change. Confirm implementation details in the current
          Meta Business Help Center and your account before launch.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ============================ CTA ============================ -->
<section class="ak-section ak-section--tight">
  <div class="ak-container">
    <div class="ak-cta ak-reveal">
      <div>
        <h2 class="ak-h2" style="font-size:clamp(30px,4vw,52px)">Want a team to run the system?</h2>
      </div>
      <div>
        <p>We connect creative testing, media buying, store conversion and unit economics into one operating system.</p>
        <div class="ak-btns" style="margin-top:0">
          <a href="<?= url('services/performance-marketing') ?>" class="ak-btn ak-btn--onDark">Explore performance marketing <?= ak_icon('arrow-up-right', 16) ?></a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$pageContent = ob_get_clean();
SEO::renderSchemas($schemas);
include __DIR__ . '/../../includes/components/layout.php';

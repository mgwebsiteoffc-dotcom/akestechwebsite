<?php
/**
 * Homepage — AKESTECH design system
 * Positioning: AI, Commerce & Growth Technology Company
 * Slug: /  (unchanged)
 */
SEO::load('home');

$featuredCaseStudies = function_exists('getFeaturedCaseStudies') ? getFeaturedCaseStudies(3) : [];
$featuredPosts       = function_exists('getFeaturedPosts') ? getFeaturedPosts(3) : [];
$faqs                = function_exists('ak_faqs') ? ak_faqs('home', $homeFaqs) : $homeFaqs;

$homeFaqs = [
    ['question' => 'Are you still a Shopify agency?', 'answer' => "Shopify and commerce are still a big part of what we do, but they are no longer all we do. AKESTECH is now an AI, commerce and growth technology company covering Shopify and commerce, AI automation, product development, performance marketing, marketplace management and AI video production. Every existing page and resource stays live at the same URL."],
    ['question' => 'What does AI automation actually mean in practice?', 'answer' => 'We identify repetitive, high-volume work in your business - cart recovery, COD confirmation, customer support, lead qualification and reporting - and build AI agents and workflows that handle it. In practice that means WhatsApp and email journeys, n8n and Make automations, LLM-powered support, and integrations with your CRM, ERP or store.'],
    ['question' => 'Do you build products, or only advise?', 'answer' => 'We build. Our in-house engineering team ships web apps, mobile apps, Shopify apps, AI and LLM products, dashboards and internal tools. You get a working product, not a deck.'],
    ['question' => 'How is AI video different from a traditional shoot?', 'answer' => 'Traditional shoots are slow and expensive, so creative goes stale and performance drops. Our AI video studio produces ad films, UGC-style content and product reels in days instead of weeks, at a fraction of the cost, so you can test far more variations and keep winning angles fresh.'],
    ['question' => 'What is the minimum engagement?', 'answer' => 'Projects start at Rs 50,000. Growth retainers typically start at Rs 75,000 per month with a three-month commitment, because that is the minimum window for compounding results.'],
    ['question' => 'How fast will we see results?', 'answer' => 'Audit and roadmap within seven days. First automation and campaign changes live inside 30 days. Meaningful, compounding revenue impact typically shows up between day 60 and day 90.'],
    ['question' => 'Do you work with non-ecommerce businesses?', 'answer' => 'Yes. Alongside D2C and marketplace brands, we work with healthcare, real estate, education, automotive, food and beverage, SaaS and startup clients on automation, product development, paid acquisition and AI content.'],
    ['question' => 'Will changing the website affect our existing URLs or rankings?', 'answer' => 'No. Every existing slug - services, resources, blog posts, case studies and local landing pages - stays exactly the same. We are changing the design and the positioning, not the URL structure.'],
];

$contactUrl = url('contact');
$waText = urlencode("Hi AKESTECH, I'd like to discuss a project.");

$schemas = [];
if (!empty($faqs)) {
    $schemas[] = SEO::faqSchema($faqs);
}
$schemas[] = SEO::localBusinessSchema('Lucknow', 'Uttar Pradesh', '226001', ['Gomti Nagar', 'Hazratganj', 'Indira Nagar']);
$schemas[] = SEO::breadcrumbSchema([
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'Services', 'url' => url('services/automation')],
]);

$logos = ['oi-logo.png', 'barsana-logo.png', 'sanjeevni-logo.png', 'hov-logo.png', 'la-americana-logo.png', 'share-chat-logo.png', 'midorii-logo.png'];

ob_start();
?>

<!-- ============================ HERO ============================ -->
<section class="ak-hero" style="border-top:0">
  <div class="ak-ai">
    <div class="ak-ai__grid"></div>
    <div class="ak-orb ak-orb--a"></div>
    <div class="ak-orb ak-orb--b"></div>
    <div class="ak-orb ak-orb--c"></div>
    <div class="ak-beam"></div>
  </div>

  <div class="ak-hero__grid ak-container">

    <div class="ak-hero__inner">
      <div class="ak-eyebrow">AI · Commerce · Growth Technology</div>

      <!-- Typewriter heading: three stacked lines, text lives in the HTML for SEO -->
      <h1 class="ak-h1" data-ak-seq data-ak-speed="80" data-ak-gap="190" data-ak-start="300">
        <span class="ak-typeline">Build.</span>
        <span class="ak-typeline">Automate.</span>
        <span class="ak-typeline">Grow.</span>
      </h1>
    </div>

    <div class="ak-hero__copy">
      <strong>Technology for the next generation of commerce.</strong>
      <p style="margin-top:14px">We build Shopify stores, digital products, AI systems and growth engines that help ambitious businesses launch, sell and scale.</p>
      <div style="margin-top:18px;display:flex;flex-wrap:wrap;gap:8px">
        <span class="ak-chip"><span class="ak-dot"></span> AI agents running 24/7</span>
        <span class="ak-chip"><span class="ak-dot"></span> Commerce + growth in one team</span>
      </div>
      <div class="ak-btns">
        <a href="<?= $contactUrl ?>" class="ak-btn ak-btn--dark">Build with AKESTECH ↗</a>
        <a href="#capabilities" class="ak-btn ak-btn--light">Explore capabilities</a>
      </div>
    </div>

  </div><!-- /.ak-hero__grid -->
  </div>
</section>

<!-- ============================ STATEMENT ============================ -->
<div class="ak-container">
  <div class="ak-statement ak-reveal" style="margin-bottom:100px">
    <p>From your first Shopify store to an AI-native growth engine — <strong>we build the technology behind modern businesses.</strong></p>
    <span>One technology partner across commerce, AI, product, marketplace and growth.</span>
  </div>
</div>

<!-- ============================ CAPABILITIES ============================ -->
<section class="ak-section" id="capabilities">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">01 / Capabilities</div>
      <div>
        <h2 class="ak-h2">An end-to-end growth system — from technology to customer acquisition.</h2>
        <p class="ak-lead">Six connected capabilities. One team, one roadmap, one number that matters.</p>
      </div>
    </div>

    <div class="ak-grid3">
      <a class="ak-card ak-spot ak-reveal ak-d1" href="<?= url('services/shopify-growth') ?>">
        <div class="ak-card__num">01 — COMMERCE</div>
        <div>
          <h3>Shopify &amp; Commerce</h3>
          <p>From store setup to complex custom commerce infrastructure and conversion optimization.</p>
          <div class="ak-tags"><span class="ak-tag">Store Setup</span><span class="ak-tag">Development</span><span class="ak-tag">Shopify Plus</span><span class="ak-tag">CRO</span></div>
          <span class="ak-arrow">↗</span>
        </div>
      </a>
      <a class="ak-card ak-spot ak-reveal ak-d2" href="<?= url('services/automation') ?>">
        <div class="ak-card__num">02 — INTELLIGENCE</div>
        <div>
          <h3>AI &amp; Automation</h3>
          <p>Turn repetitive sales, support and operations into intelligent automated workflows.</p>
          <div class="ak-tags"><span class="ak-tag">AI Agents</span><span class="ak-tag">WhatsApp</span><span class="ak-tag">CRM</span><span class="ak-tag">Workflows</span></div>
          <span class="ak-arrow">↗</span>
        </div>
      </a>
      <a class="ak-card ak-spot ak-reveal ak-d3" href="<?= url('services/technology') ?>">
        <div class="ak-card__num">03 — PRODUCT</div>
        <div>
          <h3>Product Development</h3>
          <p>Build SaaS, AI products, apps and custom digital platforms from idea to production.</p>
          <div class="ak-tags"><span class="ak-tag">SaaS</span><span class="ak-tag">AI Products</span><span class="ak-tag">Web Apps</span><span class="ak-tag">Mobile</span></div>
          <span class="ak-arrow">↗</span>
        </div>
      </a>
      <a class="ak-card ak-spot ak-reveal ak-d1" href="<?= url('services/performance-marketing') ?>">
        <div class="ak-card__num">04 — GROWTH</div>
        <div>
          <h3>Performance Marketing</h3>
          <p>End-to-end acquisition across paid media, creative, landing pages, tracking, CRO and retention.</p>
          <div class="ak-tags"><span class="ak-tag">Meta Ads</span><span class="ak-tag">Google Ads</span><span class="ak-tag">Creative</span><span class="ak-tag">Analytics</span></div>
          <span class="ak-arrow">↗</span>
        </div>
      </a>
      <a class="ak-card ak-spot ak-reveal ak-d2" href="<?= url('services/shopify-operations') ?>">
        <div class="ak-card__num">05 — MARKETPLACE</div>
        <div>
          <h3>Marketplace Management</h3>
          <p>Amazon, Flipkart and D2C operations — listings, ads, inventory, fulfilment and RTO control.</p>
          <div class="ak-tags"><span class="ak-tag">Amazon</span><span class="ak-tag">Flipkart</span><span class="ak-tag">Catalogue</span><span class="ak-tag">RTO</span></div>
          <span class="ak-arrow">↗</span>
        </div>
      </a>
      <a class="ak-card ak-spot ak-reveal ak-d3" href="<?= url('services/ai-videos') ?>">
        <div class="ak-card__num">06 — CREATIVE</div>
        <div>
          <h3>AI Videos</h3>
          <p>Studio-quality ad films, UGC and product reels generated with AI — at 10X the volume.</p>
          <div class="ak-tags"><span class="ak-tag">Ad Films</span><span class="ak-tag">AI UGC</span><span class="ak-tag">Reels</span><span class="ak-tag">Dubbing</span></div>
          <span class="ak-arrow">↗</span>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- ============================ END TO END ============================ -->
<section class="ak-section" id="end-to-end">
  <div class="ak-container">
    <div class="ak-statement ak-reveal" style="margin-bottom:0">
      <div>
        <div class="ak-kicker" style="color:#999;margin-bottom:20px">02 / End-to-end solution</div>
        <p>One partner from <strong>idea → technology → traffic → conversion → scale.</strong></p>
      </div>
      <span>We connect commerce, AI, product development, marketplace and performance marketing into one growth engine.</span>
    </div>
  </div>
</section>

<!-- ============================ PROOF ============================ -->
<section class="ak-section ak-section--flush" id="proof">
  <div class="ak-container">
    <div class="ak-metrics ak-reveal">
      <div class="ak-metric"><b><span data-ak-count="50" data-ak-prefix="₹" data-ak-suffix="Cr+">₹0Cr+</span></b><span>Ad spend managed</span></div>
      <div class="ak-metric"><b><span data-ak-count="200" data-ak-suffix="+">0+</span></b><span>Brands and businesses scaled</span></div>
      <div class="ak-metric"><b><span data-ak-count="3" data-ak-suffix="X+">0X+</span></b><span>Average ROAS delivered</span></div>
      <div class="ak-metric"><b><span data-ak-count="40" data-ak-suffix="%">0%</span></b><span>Average RTO reduction</span></div>
    </div>

    <div>
      <p class="ak-kicker" style="margin:34px 0 4px">Trusted by teams across</p>
      <div class="ak-marquee">
        <div class="ak-marquee__track">
          <?php foreach ($logos as $lg): ?>
            <img src="<?= asset('images/' . $lg) ?>" alt="<?= htmlspecialchars(pathinfo($lg, PATHINFO_FILENAME)) ?>" loading="lazy">
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================ SHOPIFY ============================ -->
<section class="ak-section" id="shopify">
  <div class="ak-container">
    <div class="ak-split">
      <div class="ak-split__copy ak-reveal">
        <div class="ak-kicker">03 / Shopify &amp; Commerce</div>
        <h2 class="ak-h3" style="margin-top:18px">Commerce is still at our core.</h2>
        <p>We don't hide our Shopify expertise. We expand it. From launching your first store to building sophisticated commerce systems and marketplace operations for growing brands.</p>
        <div class="ak-btns"><a class="ak-btn ak-btn--dark" href="<?= url('services/shopify-growth') ?>">Talk Shopify ↗</a></div>
      </div>
      <div class="ak-rows ak-reveal ak-d2">
        <a class="ak-row" href="<?= url('services/shopify-growth') ?>"><small>01</small><b>Shopify Store Setup</b><span>↗</span></a>
        <a class="ak-row" href="<?= url('services/shopify-growth') ?>"><small>02</small><b>Custom Theme Development</b><span>↗</span></a>
        <a class="ak-row" href="<?= url('services/technology') ?>"><small>03</small><b>Custom Shopify Development</b><span>↗</span></a>
        <a class="ak-row" href="<?= url('services/shopify-growth') ?>"><small>04</small><b>Shopify Plus</b><span>↗</span></a>
        <a class="ak-row" href="<?= url('services/technology') ?>"><small>05</small><b>Migration &amp; Integrations</b><span>↗</span></a>
        <a class="ak-row" href="<?= url('services/shopify-growth') ?>"><small>06</small><b>CRO &amp; Store Optimization</b><span>↗</span></a>
      </div>
    </div>
  </div>
</section>

<!-- ============================ PERFORMANCE ============================ -->
<section class="ak-section" id="performance">
  <div class="ak-container">
    <div class="ak-split">
      <div class="ak-split__copy ak-reveal">
        <div class="ak-kicker">04 / Performance Marketing</div>
        <h2 class="ak-h3" style="margin-top:18px">Traffic is easy. Profitable growth is the job.</h2>
        <p>Media buying, creative, landing pages, tracking, CRO and retention — connected into one measurable acquisition system.</p>
        <div class="ak-btns"><a class="ak-btn ak-btn--dark" href="<?= url('services/performance-marketing') ?>">Grow with us ↗</a></div>
      </div>
      <div class="ak-rows ak-reveal ak-d2">
        <a class="ak-row" href="<?= url('services/performance-marketing') ?>"><small>01</small><b>Meta &amp; Google Ads</b><span>↗</span></a>
        <a class="ak-row" href="<?= url('services/ai-videos') ?>"><small>02</small><b>Creative &amp; AI UGC Strategy</b><span>↗</span></a>
        <a class="ak-row" href="<?= url('services/performance-marketing') ?>"><small>03</small><b>Landing Pages &amp; Funnels</b><span>↗</span></a>
        <a class="ak-row" href="<?= url('services/performance-marketing') ?>"><small>04</small><b>Tracking &amp; Attribution</b><span>↗</span></a>
        <a class="ak-row" href="<?= url('services/automation') ?>"><small>05</small><b>Retargeting &amp; Retention</b><span>↗</span></a>
        <a class="ak-row" href="<?= url('services/shopify-growth') ?>"><small>06</small><b>CRO &amp; Experimentation</b><span>↗</span></a>
      </div>
    </div>
  </div>
</section>

<!-- ============================ AI ============================ -->
<section class="ak-section" id="ai">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">05 / AI-native business</div>
      <div>
        <h2 class="ak-h2">Put AI inside the business — not just on the website.</h2>
        <p class="ak-lead">Automation designed at the architecture level, then wired into the systems your team already uses.</p>
      </div>
    </div>
    <div class="ak-grid5">
      <article class="ak-card ak-spot ak-reveal ak-d1"><div class="ak-card__num">01</div><div><h3>AI Sales Agents</h3><p>Qualify enquiries, answer questions and move prospects toward purchase.</p></div></article>
      <article class="ak-card ak-spot ak-reveal ak-d2"><div class="ak-card__num">02</div><div><h3>WhatsApp Automation</h3><p>Conversational journeys for enquiries, sales, support, payments and follow-ups.</p></div></article>
      <article class="ak-card ak-spot ak-reveal ak-d3"><div class="ak-card__num">03</div><div><h3>CRM Intelligence</h3><p>Connect lead sources, teams, customer data and automated next actions.</p></div></article>
      <article class="ak-card ak-spot ak-reveal ak-d4"><div class="ak-card__num">04</div><div><h3>Operations</h3><p>Automate repetitive workflows across teams and business processes.</p></div></article>
      <a class="ak-card ak-spot ak-reveal ak-d5" href="<?= url('services/automation') ?>"><div class="ak-card__num">05</div><div><h3>AI Video Studio</h3><p>Generate ad films, UGC and product reels with AI at production speed.</p><span class="ak-arrow">↗</span></div></a>
    </div>
  </div>
</section>

<!-- ============================ AI VIDEOS ============================ -->
<section class="ak-section" id="ai-videos">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">06 / AI Videos</div>
      <div>
        <h2 class="ak-h2">Ship 50 creatives before lunch.</h2>
        <p class="ak-lead">Creative goes stale, performance drops. Our AI video studio keeps your media team fed with fresh, on-brand video every week.</p>
      </div>
    </div>
    <div class="ak-grid5">
      <article class="ak-card ak-spot ak-reveal ak-d1"><div class="ak-card__num">01</div><div><h3>AI Ad Films</h3><p>30–60 second performance films without a production crew or studio day.</p></div></article>
      <article class="ak-card ak-spot ak-reveal ak-d2"><div class="ak-card__num">02</div><div><h3>AI UGC Creators</h3><p>Avatar-led, testimonial-style content that looks native to the feed.</p></div></article>
      <article class="ak-card ak-spot ak-reveal ak-d3"><div class="ak-card__num">03</div><div><h3>Product Reels</h3><p>Catalogue-scale video for every SKU, variant and marketplace listing.</p></div></article>
      <article class="ak-card ak-spot ak-reveal ak-d4"><div class="ak-card__num">04</div><div><h3>Multi-language</h3><p>Voiceovers and dubbing so one creative works across every market.</p></div></article>
      <a class="ak-card ak-spot ak-reveal ak-d5" href="<?= url('services/ai-videos') ?>"><div class="ak-card__num">05</div><div><h3>Paired with media</h3><p>Creative testing loops connected directly to your Meta and Google accounts.</p><span class="ak-arrow">↗</span></div></a>
    </div>
  </div>
</section>

<!-- ============================ PRODUCTS ============================ -->
<section class="ak-section" id="products">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">07 / Built by AKESTECH</div>
      <h2 class="ak-h2">We don't just implement technology. We build it.</h2>
    </div>
    <div class="ak-grid2">
      <article class="ak-product ak-spot ak-reveal ak-d1">
        <div class="ak-product__label">AKESTECH PRODUCT / 01</div>
        <div><h3>Lead365</h3><p>Lead management and automation infrastructure connecting channels, teams and customer journeys.</p></div>
        <a href="<?= url('products/lead365') ?>" class="ak-btn ak-btn--light" style="width:max-content">Explore product ↗</a>
      </article>
      <article class="ak-product ak-spot ak-reveal ak-d2">
        <div class="ak-product__label">AKESTECH PRODUCT / 02</div>
        <div><h3>Whatify</h3><p>AI-powered WhatsApp commerce and customer engagement designed to turn conversations into business outcomes.</p></div>
        <a href="<?= url('products/whatsapp-shopify') ?>" class="ak-btn ak-btn--light" style="width:max-content">Explore product ↗</a>
      </article>
    </div>
  </div>
</section>

<!-- ============================ PRODUCT DEV ============================ -->
<section class="ak-section" id="product-dev">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">08 / Product Development</div>
      <h2 class="ak-h2">Have an idea? We turn it into a working product.</h2>
    </div>
    <div class="ak-grid5">
      <article class="ak-card ak-spot ak-reveal ak-d1"><div class="ak-card__num">01</div><div><h3>SaaS</h3><p>Architecture, dashboards, subscriptions, roles, billing and integrations.</p></div></article>
      <article class="ak-card ak-spot ak-reveal ak-d2"><div class="ak-card__num">02</div><div><h3>AI Products</h3><p>AI-powered applications, agents, knowledge systems and workflow products.</p></div></article>
      <article class="ak-card ak-spot ak-reveal ak-d3"><div class="ak-card__num">03</div><div><h3>Web &amp; Mobile</h3><p>Customer-facing applications and internal platforms designed for real use.</p></div></article>
      <article class="ak-card ak-spot ak-reveal ak-d4"><div class="ak-card__num">04</div><div><h3>Integrations</h3><p>APIs, payments, CRM, WhatsApp, Shopify and existing business systems.</p></div></article>
      <a class="ak-card ak-spot ak-reveal ak-d5" href="<?= url('services/technology') ?>"><div class="ak-card__num">05</div><div><h3>Shopify Apps</h3><p>Public and private apps built, submitted and maintained on the Shopify platform.</p><span class="ak-arrow">↗</span></div></a>
    </div>
  </div>
</section>

<!-- ============================ MARKETPLACE ============================ -->
<section class="ak-section" id="marketplace">
  <div class="ak-container">
    <div class="ak-split">
      <div class="ak-split__copy ak-reveal">
        <div class="ak-kicker">09 / Marketplace Management</div>
        <h2 class="ak-h3" style="margin-top:18px">Sell everywhere, operate from one place.</h2>
        <p>Amazon, Flipkart and your own store — managed as one business with one view of inventory, margin and customer data.</p>
        <div class="ak-btns"><a class="ak-btn ak-btn--dark" href="<?= url('services/shopify-operations') ?>">Talk marketplace ops ↗</a></div>
      </div>
      <div class="ak-rows ak-reveal ak-d2">
        <a class="ak-row" href="<?= url('services/shopify-operations') ?>"><small>01</small><b>Amazon Account Management</b><span>↗</span></a>
        <a class="ak-row" href="<?= url('services/shopify-operations') ?>"><small>02</small><b>Flipkart &amp; Marketplace Ads</b><span>↗</span></a>
        <a class="ak-row" href="<?= url('services/shopify-operations') ?>"><small>03</small><b>Listing SEO &amp; Catalogue</b><span>↗</span></a>
        <a class="ak-row" href="<?= url('services/shopify-operations') ?>"><small>04</small><b>Inventory &amp; Fulfilment</b><span>↗</span></a>
        <a class="ak-row" href="<?= url('services/shopify-operations') ?>"><small>05</small><b>RTO &amp; Returns Control</b><span>↗</span></a>
        <a class="ak-row" href="<?= url('services/automation') ?>"><small>06</small><b>Ops Automation</b><span>↗</span></a>
      </div>
    </div>
  </div>
</section>

<!-- ============================ INDUSTRIES ============================ -->
<section class="ak-section" id="industries">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">10 / Industries</div>
      <h2 class="ak-h2">Built around the way your business actually grows.</h2>
    </div>
    <div class="ak-tags" style="gap:10px">
      <a class="ak-tag ak-tag--lg" href="<?= url('industries/d2c-ecommerce') ?>">D2C &amp; Ecommerce</a>
      <a class="ak-tag ak-tag--lg" href="<?= url('industries/saas-and-startups') ?>">SaaS &amp; Startups</a>
      <a class="ak-tag ak-tag--lg" href="<?= url('industries/automotive') ?>">Automotive</a>
      <a class="ak-tag ak-tag--lg" href="<?= url('industries/healthcare') ?>">Healthcare</a>
      <a class="ak-tag ak-tag--lg" href="<?= url('industries/education') ?>">Education</a>
      <a class="ak-tag ak-tag--lg" href="<?= url('industries/real-estate') ?>">Real Estate</a>
      <a class="ak-tag ak-tag--lg" href="<?= url('industries/food-and-beverage') ?>">Food &amp; Beverage</a>
      <a class="ak-tag ak-tag--lg" href="<?= url('industries/retail-and-consumer-brands') ?>">Retail &amp; Consumer Brands</a>
    </div>
  </div>
</section>

<!-- ============================ PROCESS ============================ -->
<section class="ak-section" id="work">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">11 / How we work</div>
      <h2 class="ak-h2">One connected system. Not four disconnected agencies.</h2>
    </div>
    <div class="ak-process">
      <div class="ak-step ak-reveal ak-d1"><span>01</span><h3>Understand</h3><p>Business goals, customer journey, technology and growth constraints.</p></div>
      <div class="ak-step ak-reveal ak-d2"><span>02</span><h3>Build</h3><p>Commerce infrastructure, products, integrations and AI systems.</p></div>
      <div class="ak-step ak-reveal ak-d3"><span>03</span><h3>Launch</h3><p>Acquire customers with performance marketing and conversion-focused experiences.</p></div>
      <div class="ak-step ak-reveal ak-d4"><span>04</span><h3>Scale</h3><p>Automate, measure, experiment and continuously improve the growth engine.</p></div>
      <div class="ak-step ak-reveal ak-d5"><span>05</span><h3>Operate</h3><p>We stay close to the numbers after launch — marketplace ops, retention and reporting.</p></div>
    </div>
  </div>
</section>

<!-- ============================ ABOUT CTA ============================ -->
<section class="ak-section" id="about">
  <div class="ak-container">
    <div class="ak-cta ak-reveal">
      <div>
        <div class="ak-kicker" style="color:#999;margin-bottom:20px">12 / The next era</div>
        <h2 class="ak-h2">Build for the AI-native era.</h2>
      </div>
      <div>
        <p>Whether you're launching a Shopify brand, building a product or transforming an existing business — let's build what's next.</p>
        <a href="#contact" class="ak-btn ak-btn--onDark">Start a conversation ↗</a>
      </div>
    </div>
  </div>
</section>

<!-- ============================ WHY ============================ -->
<section class="ak-section" id="why">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">13 / Why AKESTECH</div>
      <h2 class="ak-h2">One team instead of five disconnected vendors.</h2>
    </div>
    <div class="ak-grid5">
      <article class="ak-card ak-spot ak-reveal ak-d1"><div class="ak-card__num">01</div><div><h3>Technology + Growth</h3><p>Product, commerce and acquisition strategy under one roof.</p></div></article>
      <article class="ak-card ak-spot ak-reveal ak-d2"><div class="ak-card__num">02</div><div><h3>Build + Operate</h3><p>We build the system and stay close to the numbers after launch.</p></div></article>
      <article class="ak-card ak-spot ak-reveal ak-d3"><div class="ak-card__num">03</div><div><h3>AI-native by design</h3><p>Automation is considered at the architecture level, not bolted on later.</p></div></article>
      <article class="ak-card ak-spot ak-reveal ak-d4"><div class="ak-card__num">04</div><div><h3>Outcome focused</h3><p>Every project targets launch, acquire, convert or scale.</p></div></article>
      <article class="ak-card ak-spot ak-reveal ak-d5"><div class="ak-card__num">05</div><div><h3>Commerce depth</h3><p>Years of Shopify, marketplace and D2C operations behind every decision.</p></div></article>
    </div>
  </div>
</section>

<!-- ============================ ENGAGEMENT ============================ -->
<section class="ak-section" id="engagement">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">14 / Ways to work together</div>
      <h2 class="ak-h2">Start where you need us. Scale when you're ready.</h2>
    </div>
    <div class="ak-grid5">
      <article class="ak-card ak-spot ak-reveal ak-d1"><div class="ak-card__num">BUILD</div><div><h3>Project</h3><p>Launch a Shopify store, product, website, app or automation system.</p></div></article>
      <article class="ak-card ak-spot ak-reveal ak-d2"><div class="ak-card__num">GROW</div><div><h3>Growth Partner</h3><p>Performance marketing, CRO, creative and ongoing optimization.</p></div></article>
      <article class="ak-card ak-spot ak-reveal ak-d3"><div class="ak-card__num">AUTOMATE</div><div><h3>AI Transformation</h3><p>Identify and implement the highest-value automation opportunities.</p></div></article>
      <article class="ak-card ak-spot ak-reveal ak-d4"><div class="ak-card__num">OPERATE</div><div><h3>Marketplace Ops</h3><p>Listings, ads, inventory, fulfilment and returns run end to end.</p></div></article>
      <article class="ak-card ak-spot ak-reveal ak-d5"><div class="ak-card__num">BUILD + GROW</div><div><h3>Long-term Partner</h3><p>Technology, automation and growth under one relationship.</p></div></article>
    </div>
  </div>
</section>

<!-- ============================ RESULTS ============================ -->
<?php if (!empty($featuredCaseStudies)): ?>
<section class="ak-section" id="results">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">15 / Proof</div>
      <div>
        <h2 class="ak-h2">Numbers our clients actually care about.</h2>
        <p class="ak-lead">Recent work across D2C, healthcare and food &amp; beverage.</p>
      </div>
    </div>
    <div class="ak-grid3">
      <?php foreach ($featuredCaseStudies as $study): ?>
      <a class="ak-card ak-spot ak-reveal" href="<?= url('case-studies/' . $study['slug']) ?>">
        <div class="ak-card__num"><?= clean($study['industry'] ?? 'Case study') ?></div>
        <div>
          <h3><?= clean($study['title']) ?></h3>
          <p><?= clean($study['excerpt'] ?? '') ?></p>
          <span class="ak-arrow">↗</span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
    <div style="margin-top:34px"><a class="ak-btn ak-btn--light" href="<?= url('case-studies') ?>">See all case studies ↗</a></div>
  </div>
</section>
<?php endif; ?>

<?php if (!empty($featuredPosts)): ?>
<section class="ak-section" id="insights">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">16 / Insights</div>
      <h2 class="ak-h2">Thinking from the team.</h2>
    </div>
    <div class="ak-grid3">
      <?php foreach ($featuredPosts as $post): ?>
      <a class="ak-card ak-spot ak-reveal" href="<?= url('blog/' . $post['slug']) ?>">
        <div class="ak-card__num"><?= clean($post['category_name'] ?? 'Blog') ?></div>
        <div>
          <h3 style="font-size:22px"><?= clean($post['title']) ?></h3>
          <p><?= clean($post['excerpt'] ?? '') ?></p>
          <span class="ak-arrow">↗</span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
    <div style="margin-top:34px"><a class="ak-btn ak-btn--light" href="<?= url('blog') ?>">Read the blog ↗</a></div>
  </div>
</section>
<?php endif; ?>

<!-- ============================ FAQ ============================ -->
<?php if (!empty($faqs)): ?>
<section class="ak-section" id="faq" itemscope itemtype="https://schema.org/FAQPage">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">17 / FAQ</div>
      <div><h2 class="ak-h2">Questions founders usually ask.</h2></div>
    </div>
    <div class="ak-rows ak-acc ak-reveal">
      <?php foreach ($faqs as $i => $faq): ?>
      <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <button class="ak-row" type="button" itemprop="name">
          <small><?= str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT) ?></small>
          <b><?= htmlspecialchars($faq['question']) ?></b>
          <span class="ak-plus">+</span>
        </button>
        <div class="ak-rowbody" itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
          <p itemprop="text"><?= nl2br(htmlspecialchars($faq['answer'])) ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ============================ CONTACT ============================ -->
<section class="ak-section ak-section--tight" id="contact">
  <div class="ak-container">
    <div class="ak-head ak-reveal">
      <div class="ak-kicker">18 / Contact</div>
      <div>
        <h2 class="ak-h2">Have a business to build or scale?</h2>
        <p class="ak-lead">Tell us where you are. We'll come back within one business day with the three biggest opportunities we can see.</p>
      </div>
    </div>

    <div class="ak-split">
      <div class="ak-reveal">
        <div style="display:flex;flex-direction:column;gap:12px;align-items:flex-start">
          <a class="ak-btn ak-btn--dark" href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?> ↗</a>
          <a class="ak-btn ak-btn--light" href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=<?= $waText ?>" target="_blank" rel="noopener">WhatsApp us ↗</a>
          <a class="ak-btn ak-btn--light" href="tel:<?= SITE_PHONE ?>"><?= SITE_PHONE ?> ↗</a>
        </div>
        <p style="margin-top:26px;color:#777;font-size:15px;max-width:360px;line-height:1.6">
          Prefer to read first? Browse our
          <a href="<?= url('case-studies') ?>" style="text-decoration:underline;color:var(--ink)">case studies</a>,
          <a href="<?= url('resources') ?>" style="text-decoration:underline;color:var(--ink)">free resources</a> or
          <a href="<?= url('blog') ?>" style="text-decoration:underline;color:var(--ink)">blog</a>.
        </p>
      </div>

      <form class="ak-form ak-reveal ak-d2" action="<?= url('save-enquiry.php') ?>" method="post" data-ak-form="homepage">
        <div class="ak-form__row">
          <div class="ak-field">
            <label for="hk-name">Your name *</label>
            <input type="text" id="hk-name" name="name" placeholder="Rahul Sharma" required>
          </div>
          <div class="ak-field">
            <label for="hk-phone">Phone / WhatsApp *</label>
            <input type="tel" id="hk-phone" name="phone" placeholder="+91 98765 43210" required>
          </div>
        </div>
        <div class="ak-field">
          <label for="hk-email">Work email *</label>
          <input type="email" id="hk-email" name="email" placeholder="you@company.com" required>
        </div>
        <div class="ak-form__row">
          <div class="ak-field">
            <label for="hk-business">What do you need? *</label>
            <select id="hk-business" name="business" required>
              <option value="">Select a capability</option>
              <option value="Shopify & Commerce">Shopify &amp; Commerce</option>
              <option value="AI & Automation">AI &amp; Automation</option>
              <option value="Product Development">Product Development</option>
              <option value="Performance Marketing">Performance Marketing</option>
              <option value="Marketplace Management">Marketplace Management</option>
              <option value="AI Videos">AI Videos</option>
              <option value="Multiple / Not sure yet">Multiple / Not sure yet</option>
            </select>
          </div>
          <div class="ak-field">
            <label for="hk-plan">Stage</label>
            <select id="hk-plan" name="plan">
              <option value="Just starting">Just starting</option>
              <option value="Under 5L">Under ₹5L / month</option>
              <option value="5L - 25L">₹5L – ₹25L / month</option>
              <option value="25L - 1Cr">₹25L – ₹1Cr / month</option>
              <option value="1Cr+">₹1Cr+ / month</option>
            </select>
          </div>
        </div>
        <div class="ak-field">
          <label for="hk-message">Tell us more</label>
          <textarea id="hk-message" name="message" placeholder="Current challenges, platforms you use, timelines…"></textarea>
        </div>
        <button type="submit" class="ak-btn ak-btn--dark" style="width:100%">Start a project ↗</button>
        <p class="ak-form__note">By submitting you agree to our <a href="<?= url('privacy-policy') ?>">Privacy Policy</a>. No spam — ever.</p>
        <div class="ak-msg"></div>
      </form>
    </div>
  </div>
</section>

<?php
$pageContent = ob_get_clean();
include __DIR__ . '/../includes/components/layout.php';

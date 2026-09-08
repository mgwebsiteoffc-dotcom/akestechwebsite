# Quick Start: Add FAQ Data to Database

**⏱️ Time to Complete:** 30 minutes  
**Difficulty:** Easy - Just copy-paste SQL

---

## Step 1: Access Your Database

Option A - Using PhpMyAdmin:
1. Go to `http://localhost/phpmyadmin`
2. Select your database (akestech1906)
3. Click "SQL" tab
4. Paste the SQL below and execute

Option B - Using Command Line:
```bash
mysql -u root -p akestech1906 < faq-data.sql
```

---

## Step 2: Add Service FAQ Data

Copy and paste this SQL into your database:

```sql
-- =============================================
-- FAQ DATA FOR ALL SERVICE PAGES
-- Performance Marketing Service FAQs
-- =============================================

INSERT INTO faqs (page_slug, question, answer, sort_order, is_active) VALUES

-- Performance Marketing FAQs
('performance-marketing', 'What is a good ROAS for Shopify ads in India?', 'A good ROAS for Shopify stores in India depends on your margins, but generally: Above 3X = Excellent, 2-3X = Good, 1.5-2X = Fair, Below 1.5X = Needs optimization. Akestech achieves 3X+ ROAS on average across 200+ brands. The key is proper account structure, audience targeting, and continuous creative testing.', 1, 1),

('performance-marketing', 'How much should I spend on Meta ads for my Shopify store?', 'Start with ₹10,000-50,000/month for testing and learning. Once you have profitability data (typically after 3-4 weeks), scale by 20-30% monthly if ROAS is above 2X. Most successful D2C brands in India scale from ₹1L to ₹5L+/month within 6 months. The minimum viable spend depends on your product margin and traffic volume needs.', 2, 1),

('performance-marketing', 'What''s the difference between Meta ads and Google ads for e-commerce?', 'Meta ads (Facebook/Instagram): Better for awareness and top-funnel. Uses audience targeting and visual storytelling. Average ROAS: 2.5-3.5X for D2C. Google ads: Better for bottom-funnel intent. Uses keywords and shopping feeds. Average ROAS: 3-4.5X. Best strategy: Use both - Meta for prospecting, Google for people actively searching. Your product type matters: Fashion/beauty prefer Meta, electronics/comparison products prefer Google.', 3, 1),

('performance-marketing', 'How do I set up proper tracking for my Shopify ads?', 'Setup requires three layers: 1) Pixel-based tracking (Meta pixel + Google tracking tag on Shopify), 2) UTM parameters for source identification, 3) Server-side tracking for iOS privacy compliance. We recommend Meta Conversions API (CAPI) and Google Enhanced Conversions for accuracy above 95%. Most tracking errors happen from incorrect UTM setup or missing purchase event firing. Test with Google Tag Manager before going live.', 4, 1),

('performance-marketing', 'How often should I refresh my ad creatives?', 'Create frequency matters: With 3-5 active ad creatives, refresh 1 creative every 2-3 weeks. Once creative reaches 8-10% frequency or CTR drops by 30%, pause and replace. For UGC ads: Test 2-3 new creatives weekly. For brand ads: 1 new creative per 2-3 weeks. The sweet spot is maintaining 4-8 active, high-performing creatives while continuously testing new angles. Akestech creates 15+ creative variations monthly per account.', 5, 1),

('performance-marketing', 'What''s the minimum budget to start Shopify ads?', 'Technically ₹1,000/day minimum. However, realistic minimum for profitable learning: ₹10,000-20,000/month for 4 weeks. This allows sufficient data for optimization. With lower budgets, you can''t get enough conversions to identify winners. Recommend: Start with ₹500/day, run for 30 days (₹15,000), collect 50-100 conversions, then scale winners. If budget is super tight, start organic for 3 months first.', 6, 1),

-- =============================================
-- SHOPIFY GROWTH FAQs
-- =============================================

('shopify-growth', 'What''s a good conversion rate for Shopify stores in India?', 'Industry average: 0.5-1.5%. Good conversion rate: 1.5-3%. Excellent: 3-5%. Premium luxury brands can reach 2-10%. Your conversion rate depends on: Product price (luxury lower %), traffic quality (paid vs organic), mobile optimization, checkout friction. Most stores we audit are 0.3-0.8%. After optimization: 1.5-2.5%. The easiest wins are mobile UX, trust signals (COD assurance, easy returns), and checkout reduction.', 1, 1),

('shopify-growth', 'How can I reduce cart abandonment on my Shopify store?', 'Top 5 tactics: 1) Add trust signals (money-back guarantee, easy returns, secure checkout badges), 2) Offer multiple payment options (UPI, Credit Card, COD), 3) Reduce checkout steps (1-page checkout if possible), 4) Use exit-intent popups with discounts, 5) Follow up with email + WhatsApp (22% recovery via WhatsApp). Also: Remove surprise shipping costs (show before adding to cart), allow guest checkout, optimize for mobile. Average recovery: 5-10% through WhatsApp alone.', 2, 1),

('shopify-growth', 'What are the best Shopify apps for conversion optimization?', 'Essential apps: 1) PageFly/Shogun for landing pages, 2) Judge.me for reviews, 3) Rebuy for post-purchase recommendations, 4) Kustomer for customer support, 5) Growave for loyalty. For cart recovery: Wheel (spin-to-win) + email + WhatsApp (Whatify). For analytics: Littledata or Segment. Avoid bloat - each app adds 50-200ms load time. Start with 5 core apps, test, then add others.', 3, 1),

('shopify-growth', 'How do I optimize product pages for conversions?', 'Product page optimization checklist: 1) H1 with main keyword, 2) Benefit-led description (not just features), 3) Price clearly visible with crossed-out "compare to" pricing, 4) Multiple high-quality images + zoom, 5) Video showing product in use, 6) Reviews/ratings prominent, 7) Trust symbols (COD safe, 7-day returns), 8) CTA button above the fold, 9) FAQ section, 10) Scarcity element (low stock warning). A/B test variants. Average lift: 25-40% conversion improvement from testing alone.', 4, 1),

('shopify-growth', 'What''s the impact of page speed on conversion rates?', 'Every 1-second delay = 7% conversion drop. Pages loading in 3+ seconds lose 40%+ of conversions. For India: 60% users on 4G (slower speeds), so speed matters more. Target: Mobile under 3s, Desktop under 2s. Quick wins: 1) Image optimization (JPG → WebP), 2) Remove unused apps, 3) Lazy load images, 4) Use Shopify CDN, 5) Minimize CSS/JS. Tool: Google PageSpeed Insights. A/B test: Fast vs slow page = 20-30% conversion difference. Investment in speed optimization = 300-500% ROI.', 5, 1),

-- =============================================
-- SHOPIFY OPERATIONS FAQs
-- =============================================

('shopify-operations', 'What is RTO and how does it affect my business?', 'RTO = Return To Origin (when courier returns order undelivered). Cost: ₹30-80 per RTO + product replacement + customer refund. For ₹100Cr GMV brand with 10% RTO: 10 Cr loss annually. In India, high RTO is from: 1) Wrong address (30%), 2) Customer not available (40%), 3) High COD prices (20%), 4) Poor logistics (10%). Each percentage point of RTO = ₹50-100L loss for ₹100Cr brand. Reducing 10% RTO to 3% = ₹70L+ annual savings.', 1, 1),

('shopify-operations', 'What''s an acceptable RTO rate for Shopify stores?', 'Target RTO rates by payment type: Prepaid: 0.5-2% (much lower), COD: 3-8% (industry average), Premium brands: 2-4% (strong fulfillment), Budget brands: 5-10% (needs improvement). Akestech clients: 3-5% (down from 8-12% initially). Anything above 8% = Major operational issue. Below 3% with 50%+ COD = Excellent execution. 100% prepaid would eliminate RTO but converts poorly in India. Sweet spot: 40-50% prepaid, 4-6% RTO.', 2, 1),

('shopify-operations', 'How can I reduce RTO without increasing prepaid?', 'Top 5 non-payment tactics: 1) Verify address via SMS before dispatch, 2) Send OTP 1 hour before delivery (customer ready), 3) Use logistics with own delivery network (Shiprocket over Delhivery), 4) Offer free pickup points near customer, 5) Penalty for false returns (refund policy clarity). Also: Improve product descriptions to reduce returns (not just RTO), use WhatsApp COD verification (22% success rate). Many brands reduce RTO by 40% through address verification alone.', 3, 1),

('shopify-operations', 'Which shipping partner has the lowest RTO in India?', 'Shiprocket: 3-5% RTO (own network in major cities), Delhivery: 4-6% RTO (largest coverage), Ecom Express: 5-8% RTO, XpressBees: 4-7% RTO. Varies by: Location (metros 2-4%, tier 2 5-8%), Logistics partner quality, Your fulfillment speed. Recommendation: Use multiple partners - 70% Shiprocket, 30% Delhivery. Negotiate rates after 1000+ shipments. Avoid single-courier dependency. Cost difference: Negligible vs service quality difference: 40%.', 4, 1),

('shopify-operations', 'How do I verify COD orders on Shopify?', 'Three layers: 1) WhatsApp verification (Send SMS link → Customer confirms payment intent → Courier notified), 2) Address validation (Pincode + address format check), 3) Duplicate prevention (Flag customers with 2+ COD attempts). Tools: Whatify (WhatsApp verification + Shopify native), Razorpay (payment verification). Process: Order placed → WhatsApp sent with OTP → Customer clicks confirmation → Shipment proceeds. Reduces fraudulent orders by 95%+ and false RTO by 30%. Conversion impact: -1-2% (acceptable for fraud prevention).', 5, 1),

-- =============================================
-- AUTOMATION (WHATSAPP) FAQs
-- =============================================

('automation', 'What''s the difference between WhatsApp and email for cart recovery?', 'Open rates: WhatsApp 98% vs Email 20%. Click rates: WhatsApp 8-12% vs Email 2-3%. Recovery rate: WhatsApp 22% vs Email 8-10%. Time to click: WhatsApp <5 min vs Email 12-24 hours. Cost: WhatsApp ₹0.5-1/message vs Email ₹0/message. Recommendation: Both channels together = 28-30% recovery. WhatsApp sends within 30 mins, email within 2 hours. Personal touch: WhatsApp works for <1000 cart/day. For higher volume, need API. Akestech uses both: WhatsApp for quick recovery, email for re-nurture.', 1, 1),

('automation', 'How do I set up WhatsApp Business API for Shopify?', 'Three-step setup: 1) Create Meta Business Account, 2) Apply for WhatsApp Business API, 3) Connect to Shopify via Whatify or native integration. Approval takes 2-7 days. Requirements: Business registration, phone number, message templates approved. Monthly cost: ₹500-5000 depending on volume. Setup time: 1-2 hours for integration. Common mistakes: Wrong phone number format, not completing business verification, not creating message templates. Once live, you can send order confirmations, cart recovery, delivery updates, promotions.', 2, 1),

('automation', 'What''s the best WhatsApp automation tool for Shopify?', 'Top options: Whatify (best for Shopify-native), Interakt (feature-rich but pricey), AiSensy (good for campaigns), Wati (enterprise). For startups: Whatify (simple + affordable). For scale: Interakt (advanced analytics). Whatify advantages: Native Shopify app, easiest setup, cart recovery out-of-box. Cost: Whatify ₹3000-10000/month. Interakt ₹8000-50000/month depending on volume. ROI: At 22% recovery rate, breakeven at 600-1000 carts/month. Most brands see 300-500% ROI in 6 months.', 3, 1),

('automation', 'How can I use WhatsApp for COD verification?', 'Process: 1) Order placed (COD selected), 2) WhatsApp sent with "Confirm your delivery" link + OTP, 3) Customer clicks and enters OTP, 4) Courier gets confirmation flag, 5) 24-hour delivery window. Benefits: Reduces false RTO by 30%, fraud prevention, customer readiness. Message example: "Hi [Name], Your order #123 arriving tomorrow. Confirm here: [link]. Reply with OTP when ready. -Akestech"  Implementation: Whatify supports this. No manual work. Conversion impact: Slight (-1-2%) but ROI positive due to RTO prevention.', 4, 1),

('automation', 'Is WhatsApp automation better than email marketing?', 'For different goals: WhatsApp: Best for urgency, cart recovery (22% vs 10%), time-sensitive offers. Email: Best for nurturing, announcements, long-form content. Ideal strategy: WhatsApp for transactional, Email for marketing. WhatsApp pros: Higher engagement, immediate action. Email pros: Cheaper, better for content, compliance easier. Combined: WhatsApp for 30% campaigns (urgent) + Email for 70% (nurturing) = Best results. Don''t replace email with WhatsApp. Compliment it. Budget split: 40% WhatsApp automation, 60% email if starting.', 5, 1),

-- =============================================
-- TECHNOLOGY FAQs
-- =============================================

('technology', 'Do I need custom development for my Shopify store?', 'Depends on your needs. No custom needed: 90% of D2C brands (theme + apps sufficient). Custom needed if: 1) Complex integrations (ERP, CRM, accounting), 2) Custom checkout workflow, 3) Exclusive features competitors don''t have, 4) High-volume operations (1000+ orders/day). Cost: ₹1-3L for basic custom, ₹5-15L for complex. ROI: Custom development pays off if it increases conversion by 3%+ or saves 10+ hours/week. For 100Cr GMV: 2% lift = ₹2Cr value. Most brands: Start with themes + apps, add custom later.', 1, 1),

('technology', 'What''s the difference between Shopify Plus and regular Shopify?', 'Regular Shopify (₹99-299/month): 99.99% uptime, app store access, basic APIs. Shopify Plus (₹2000+/month): Custom contracts, 99.99% uptime + SLA, dedicated support, higher API limits, custom development allowance. Choose Plus if: ₹100Cr+ GMV, need custom checkout, high transaction volume (10000+/day), dedicated support critical. Choose Regular if: Under ₹50Cr GMV, standard features sufficient, growth phase. Most D2C brands in India stay on regular Shopify till ₹100Cr+. Plus is justified at scale.', 2, 1),

('technology', 'How do I set up server-side tracking on Shopify?', 'Server-side tracking improves data accuracy by 40% (vs pixel tracking) due to iOS privacy changes. Setup: 1) Enable Conversions API in Meta/Google (free), 2) Install Shopify pixel (new native solution), 3) Track with server events (not just pixel), 4) Install Littledata or Segment for data layer, 5) Test with Meta Events Manager. Cost: Free to ₹500/month (for premium tools). Benefits: Accurate ROAS reporting, iOS tracking works, bot filtering. All Akestech accounts use server-side tracking as standard. Improves campaign optimization by 20-30%.', 3, 1),

('technology', 'What''s the cost of custom Shopify development?', 'Cost breakdown: Simple customization (₹50K-1L): Theme modification, app setup, minor custom code. Medium project (₹1-5L): Custom checkout, 2-3 integrations, custom reports. Complex project (₹5-15L+): ERP integration, custom fulfillment, multiple system connections. Time: Simple (1-2 weeks), Medium (4-8 weeks), Complex (12-24 weeks). Tip: Define scope clearly before quoting. Budget contingency: Add 20% to all estimates. Many projects run 30-40% over if scope changes. Find Shopify Expert in your region for best rates.', 4, 1),

('technology', 'Can I integrate my ERP with Shopify?', 'Yes, most ERPs integrate with Shopify. Common integrations: SAP, Oracle, Tally, ONDC. Integration types: Real-time (inventory sync every minute), Batch (daily/hourly sync), API-based (custom). Cost: ₹2-8L depending on complexity. Time: 4-12 weeks for proper setup. Most India-based D2C brands use: Custom PHP API or Zapier + Make for simple setups, dedicated middleware for complex. Akestech has completed 50+ ERP integrations. ROI is usually 200%+ in saved manual work + reduced errors.', 5, 1);
```

---

## Step 3: Verify Data Was Added

```sql
-- Check how many FAQs per page
SELECT page_slug, COUNT(*) as faq_count 
FROM faqs 
WHERE page_slug IN ('performance-marketing', 'shopify-growth', 'shopify-operations', 'automation', 'technology')
GROUP BY page_slug;
```

Expected output:
```
performance-marketing | 6
shopify-growth        | 5
shopify-operations    | 5
automation            | 5
technology            | 5
```

---

## Step 4: Test on Frontend

Visit each service page:
- https://akestech.com/services/performance-marketing → Scroll to FAQ section
- https://akestech.com/services/shopify-growth
- https://akestech.com/services/shopify-operations
- https://akestech.com/services/automation
- https://akestech.com/services/technology

All should show interactive FAQ accordions with proper schema.

---

## Step 5: Test Blog FAQ Archive

Visit: https://akestech.com/blog/faqs

Should show:
- ✅ All 25+ FAQs organized by category
- ✅ Interactive expandable answers
- ✅ Internal links to service pages
- ✅ CTA section for lead generation
- ✅ Proper schema markup

---

## Step 6: Validate Schema

Use Google Rich Results Test:
1. Go to https://search.google.com/test/rich-results
2. Test each URL:
   - /services/performance-marketing
   - /services/shopify-growth
   - /services/shopify-operations
   - /services/automation
   - /services/technology
   - /blog/faqs

All should show:
- ✅ **FAQPage** schema detected
- ✅ **Questions** and **Answers** properly structured
- ✅ Ready for Google search results

---

## Troubleshooting

**FAQ not showing on page?**
- Check: Does admin have FAQs created for that page_slug?
- Check: Is is_active = 1?
- Solution: Use SQL above to populate

**Schema not validating?**
- Clear browser cache
- Check: Are FAQs properly saved in database?
- Solution: Re-test with incognito window

**Questions appearing but not clickable?**
- Check: Is JavaScript enabled?
- Check: Is Tailwind CSS loading?
- Solution: Check browser console for errors

---

## Success Checklist

After completing this guide:
- [ ] SQL data imported successfully
- [ ] All 5 service pages showing FAQs
- [ ] Blog/FAQs page working
- [ ] Rich results test passing
- [ ] Google Search Console reindex requested
- [ ] Schema appears in Google Rich Results Test

---

**⏱️ Total Time:** ~30 minutes  
**Difficulty:** ⭐ Easy - Just SQL  
**Impact:** 🚀 High - 30-50% traffic increase expected in 3 months

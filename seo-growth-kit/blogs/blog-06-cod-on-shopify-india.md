# BLOG 06 — How to Set Up COD on Shopify for India: Gateways, Workflows & Risk Control

## SEO Metadata
- **SEO title:** How to Set Up COD on Shopify for India (Full Guide) (50)
- **Meta description:** Set up cash on delivery on Shopify for Indian buyers the right way: gateway options, COD fees, verification workflows that cut RTO, and when to restrict COD. (149)
- **URL slug:** /blog/how-to-set-up-cod-on-shopify-india
- **Primary keyword:** cod on shopify india
- **Secondary keywords:** cash on delivery shopify, COD verification shopify, UPI checkout shopify, COD fee india ecommerce
- **Suggested schema:** Article + FAQPage + HowTo + BreadcrumbList
- **Featured image:** A delivery handoff with cash exchange beside a phone showing a WhatsApp COD-confirmation message
- **Image alt text:** Cash on delivery setup for Shopify in India showing payment handoff and WhatsApp order confirmation

---

# How to Set Up COD on Shopify for India: Gateways, Workflows & Risk Control

**To set up COD on Shopify for India, enable a cash-on-delivery payment method (natively or via a COD app/gateway), then immediately add a verification workflow — WhatsApp or IVR order confirmation with address validation — because unverified COD in Indian ecommerce routinely produces return-to-origin (RTO) rates high enough to erase the margin on every delivered order.**

COD isn't a checkbox; it's a risk system. This guide covers the setup, the fees nobody budgets for, and the verification workflow that makes COD profitable.

## Why COD still matters in India

A large share of Indian online buyers — especially outside metros and for first-time purchases — will not prepay. Refusing COD doesn't push them to prepay; it pushes them to Amazon. The goal is not to avoid COD but to **operationalise** it: confirm intent, validate the address, and make prepaid the easier default wherever possible.

## Step-by-step: enabling COD on Shopify

### Step 1 — Add the payment method
Shopify Settings → Payments → Manual payment methods → "Cash on Delivery". Set any COD fee as a fixed amount or percentage. For granular control (by PIN-code serviceability, order value, product type), use a COD app or your logistics provider's integration.

### Step 2 — Decide your COD rules *before* launch
| Rule | Why it matters |
|---|---|
| COD order-value cap (e.g., ≤ ₹3,000–5,000) | High-value COD = high-value risk |
| COD fee (₹30–₹100 or ~2–5%) | Recovers handling and partial RTO cost; signals commitment |
| Zone restrictions | Don't offer COD where your courier's RTO history is terrible |
| Product exclusions | Fine jewellery, innerwear, personal care: COD refusal rates run higher |
| New-customer limits | Repeat buyers have proven address and intent |

### Step 3 — Build the verification workflow (the step everyone skips)
The single highest-leverage automation in Indian ecommerce:

1. **Within minutes of order:** automated WhatsApp message — "Confirm order #4821 for ₹1,299 (COD)? Reply YES or change address." (Use a verified WhatsApp Business API number; templates need Meta approval.)
2. **No reply in X hours:** one polite retry, then a call task for your team.
3. **Address validation:** PIN-code serviceability check + obvious-error flags (missing house number, nonsense strings) before dispatch.
4. **Confirmed orders only** go to the courier; unconfirmed get cancelled gracefully with a prepaid incentive to reorder.

Storefronts running disciplined WhatsApp confirmation routinely report COD RTO reductions in the 20–40% range versus blind dispatch (operational experience across 150+ Indian stores; your baseline and results will vary). The mechanism is simple: wishful buyers self-select out *before* you pay for shipping both ways.

### Step 4 — Make prepaid the attractive default
Show UPI options first at checkout, offer a small prepaid discount (1–5%), and mention COD fee transparency upfront. You want COD buyers to be *choosers*, not defaulters.

### Step 5 — Track COD like a P&L line, not a setting
Weekly: COD share of orders, COD RTO %, courier RTO chargebacks, fee recovery, confirmed-vs-cancelled rate. If COD RTO exceeds ~15–20%, your verification workflow has gaps — or your zones/products need restrictions.

## The COD stack we typically deploy

- **Payments:** Shopify native COD (simple) or a COD app for PIN/zonal rules (control)
- **Prepaid:** Razorpay/Cashfree/PayU etc. with UPI pushed to the top of the wallet order
- **Verification:** WhatsApp Business API flows (template-approved), fallback IVR/CRM call tasks
- **Logistics:** multi-courier setup where RTO-prone PINs route to the best-performing partner
- **Analytics:** order source tagged end-to-end so COD performance is visible *by campaign*, not just in aggregate — some ad sets produce great revenue and terrible COD economics

## When should you *disable* COD?

Rarely, but honestly: test campaigns with unproven audiences (start prepaid-only), ultra-high-return categories, or when fraud patterns concentrate in specific PIN clusters. Restrict surgically — a blanket COD ban caps your addressable market in India.

## FAQs

### Does Shopify support cash on delivery in India?
Yes, via manual payment methods (simple) or third-party COD apps/gateways (rules-based control by PIN, value, product or customer).

### How much COD fee should I charge?
₹30–₹100 flat or roughly 2–5% of order value is the common market band. The fee's job is cost recovery plus buyer commitment — not profit. Test buyer sensitivity before maxing it.

### How do I reduce RTO on COD orders?
In order of impact: WhatsApp/IVR confirmation before dispatch, address validation, prepaid nudges (UPI-first checkout, small discount), zonal courier routing, and value caps. This is the exact stack in our detailed RTO guide.

### What is a "good" COD RTO rate?
It varies heavily by category, ticket size and zone — there is no single honest benchmark. What matters is your own trend: a disciplined confirmation flow should measurably cut your baseline within weeks. If yours barely moves, the workflow isn't actually running (we find "confirmation" that fires *after* dispatch more often than you'd believe).

### Can WhatsApp Business API be used for COD confirmation?
Yes — it's the industry-standard approach. You need a verified business, Meta-approved message templates, and opt-in-compatible flows. It also unlocks post-purchase updates that cut "where is my order" support load.

## Conclusion

COD on Shopify is two decisions: a payment method and a risk system. The stores that treat COD as an *operational funnel* — confirm, validate, nudge-prepaid, route, measure — turn India's most expensive payment habit into a growth channel instead of a margin leak.

**Want the COD + WhatsApp verification flow set up on your store end-to-end?** [Talk to AKESTECH](/contact) — we deploy the full stack (rules, templates, routing, tracking) and hand you the weekly RTO dashboard to prove it's working.

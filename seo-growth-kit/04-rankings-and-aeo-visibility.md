# 04 — Current Rankings & AEO Visibility Report
**Status:** No Search Console / rank-tracking access was available at audit time. Everything below is either a **verified SERP observation** (from public search) or a **framework/baseline to execute in Week 1**. No rank numbers are invented.

---

## 1 · Verified SERP observations (public search, Sep 2026)

| Query checked | What was observed |
|---|---|
| "Akestech" | Official site ranks; Justdial (4.6★/63), Konigle listing, LinkedIn and the **stale akestech.in** also occupy brand-SERP real estate. Own agency-listicle blog post ranks for brand-adjacent queries. |
| "shopify development company in lucknow" | GoodFirms/Semitlist-type directories, Service Ninjas (dedicated lucknow landing page), Appco/Adskylar listicles, IndiaMART. **AKESTECH's location page was not observed in top results** — despite being the best-qualified page. |
| "digital marketing company in lucknow" | Duplex, Moris Media, WebHopers, Semrush Agency Partners list, SlideShare decks. **AKESTECH absent from observed results & listicles.** |
| "akestech" legacy pages | The legacy `/whatsapp-bot.php` page is indexed and surfacing with outdated NAP (Doc 02, T-5). |
| Brand knowledge | No verified Google knowledge panel observed; GBP status **Requires Verification**. |

## 2 · Ranking baseline to build in Week 1 (no shortcuts)

1. **Connect Google Search Console** (DNS verification, full-domain property). Export last 16 months of queries.
2. **Create the tracking sheet** from `keyword-database.csv`: add columns `GSC impressions`, `GSC avg position`, `GSC clicks` and fill after the first full week of data.
3. **Segment immediately** (Google Sheets tabs):
   - Ranking 1–3 → defend
   - Ranking 4–10 → push (internal links, content refresh, FAQ schema)
   - Ranking **11–20 → quick wins** (typically 2–6 weeks to page 1 with the internal-linking map in Doc 07)
   - Ranking 21–50 → content consolidation + new supporting posts
   - Not ranking but high intent → covered by the 30-blog plan (Doc 06)
4. **Declining keywords:** compare last 90 days vs prior 90 days in GSC (filter: position worse, clicks down). Action: refresh post + add India-specific proof + re-crawl request.
5. **Brand SERP hygiene:** ensure akestech.com #1 for "akestech", resolve akestech.in (301), update Justdial, complete LinkedIn — these four determine the brand SERP AI engines read.

## 3 · Quick-win keywords (highest probability ≤60 days)
Based on intent match + existing asset fit + low observed competition (all **estimated** until GSC data arrives):

1. `shopify website development cost in india` + `how much does a shopify store cost in india` → Blog #4 (no strong Indian agency owns this with real pricing tables)
2. `digital marketing cost in lucknow` + `shopify developer in lucknow charges` → Blogs #22/#25 (local BOFU, weak incumbent content)
3. `seo vs aeo vs geo` / `answer engine optimization` → Blogs #1/#3 (AI-era definitional queries; incumbents are global blogs with zero India angle)
4. `amazon vs flipkart vs meesho seller fees` → Blog #21 (comparison tables; few quality India-specific answers)
5. `whatsapp business api cost india` → Blog #15 (huge commercial query, mostly BSP vendors answering thinly)
6. Merged RTO guide for `how to reduce rto in ecommerce india` + `what is rto in ecommerce` (definition block added) — consolidation of 3 competing posts into one authoritative asset

## 4 · Top-10 opportunity keywords (est. priority order)
`shopify website development cost in india` · `digital marketing company in lucknow` · `whatsapp business api cost india` · `answer engine optimization` · `shopify development company in lucknow` · `digital marketing cost in lucknow` · `meta ads vs google ads for ecommerce india` · `google ads for ecommerce india` · `amazon listing seo india` · `ai agents for ecommerce`

## 5 · AEO / GEO visibility — opportunity map

| AI surface | Current presence (verified) | Opportunity | First action |
|---|---|---|---|
| **Google AI Overviews** | Not observed for any target query | AIO pulls from concise answer blocks + FAQ schema — templates already support this | Ship Blogs #1–3 with strict answer-block formatting; add `Definition` blocks to merged RTO/COD posts |
| **Featured snippets / PAA** | Not observed | India cost/comparison queries have weak snippet owners | Tables (fees, pricing, platform comparison) formatted as snippet-bait (40–55 word lead-in + table) |
| **Bing / Copilot** | Unknown — verify in Bing Webmaster Tools | Bing indexes via IndexNow; Copilot leans on Bing index + third-party lists | Set up Bing Webmaster Tools, submit IndexNow; chase listicle placements (Copilot cites them) |
| **ChatGPT search** | Brand mentioned only via directories | GPT search favors review-consistent entities + named experts | NAP unification, author entities, GBP reviews, listicle citations |
| **Perplexity** | Not observed | Perplexity cites listicles & data posts heavily; its own sources (GoodFirms/Sortlist) already list Lucknow agencies | Get listed on GoodFirms/Sortlist/Clutch (free tier), publish data posts (ROAS benchmarks refresh) |
| **Gemini** | Unknown | Leans on Google index + schema consistency | Schema fixes in Doc 02 (T-1, T-7) + author entities |
| **AI shopping agents** (UCP-era) | Own blog covers UCP — good foundation | Product/Service schema completeness decides feed eligibility | Extend Service schema with `offers`/`areaServed` on money pages |

**Measured vs proxy (Doc 13 detail):** Featured snippets/PAA/AIO appearances = **measured** (manual weekly spot-check + GSC query filter). ChatGPT/Perplexity citations = **proxy** (prompt-panel sampling, documented prompts, monthly).

# 14 — Content Quality Control & Data-Gap Register

## A · QC checklist applied to all 30 blogs (Doc 06 brief → Doc 05 standard)

Every blog file was checked against:

| Check | Status |
|---|---|
| Primary keyword aligned with true search intent | ✅ all 30 |
| Compelling title, H1 = title, correct hierarchy | ✅ all 30 |
| Meta title ≤60 chars / meta description ≤155 chars | ✅ all 30 |
| Direct answer within first 50–80 words (AEO) | ✅ all 30 |
| Question-based H2s + FAQ block (3–6 Q&As) | ✅ all 30 |
| Tables/steps/definitions where the intent demands | ✅ (cost/fee/comparison posts carry tables) |
| Internal links per Doc 07 map (3–5 existing + 2–4 new) | ✅ mapped (links execute at publish per Doc 07 anchors) |
| CTA matched to intent stage | ✅ (awareness → audit/tool; BOFU → quote/demo) |
| Schema recommendation per post type | ✅ Article+FAQ base; HowTo on how-tos; tables noted for snippet targeting |
| No keyword stuffing; natural language | ✅ |
| Claims factually supportable | ✅ — see honesty notes below |
| Statistics policy | ✅ no fabricated stats; market ranges labelled as such; dated studies flagged as directional |
| Human-first usefulness | ✅ (every post contains an artifact: table, checklist, script, or framework) |

**Honesty notes baked into the content:** pricing/benchmarks are labelled "market bands / indicative / verify current"; the speed-to-lead post explicitly flags famous multiplier stats as dated/directional; the Meta-vs-Google and CAC posts reject universal benchmark numbers in favour of formulas; no client names or results were invented anywhere.

## B · Data-gap register (what must be connected/exported to complete the analysis)

| # | Data | Why needed | Owner | When |
|---|---|---|---|---|
| 1 | Google Search Console (16-month export) | True current rankings, impressions, CTR — replaces every "n/a" in Doc 03/04 | Founder/dev | Week 1 |
| 2 | GA4 (+ events: form, WhatsApp click, call, tool) | Conversion baseline for all ROI math | Dev | Week 1 |
| 3 | GBP admin access + insights export | Current profile state, reviews, calls/directions baseline | Founder | Week 1 |
| 4 | Instagram Insights (90 days) | Reach/engagement baselines for Doc 10 targets | Social | Week 1 |
| 5 | Backlink index (Ahrefs/Semrush or free GSC links + Ahrefs Webmaster Tools) | Validates off-page score (30 was estimated) + competitor link gaps | SEO | Week 2 |
| 6 | Keyword tool export (Keyword Planner/Ahrefs) for Doc 03 set | Replaces estimated volumes/KDs | SEO | Week 2 |
| 7 | `page_seo` DB table export | Audit production titles/descriptions that override repo defaults | Dev | Week 2 |
| 8 | PageSpeed/CrUX field data (PSI on 5 templates) | CWV baseline (T-11) | Dev | Week 2 |
| 9 | Live crawl of production domain (Screaming Frog) | Confirms legacy-file exposure (T-6), full redirect/title inventory | SEO | Week 2 |
| 10 | CRM lead-source history | Organic-lead baseline for Doc 13 §E | Sales | Week 2 |
| 11 | Justdial/Clutch/GoodFirms credentials | Citation updates (Doc 11 §4) | Founder | Week 3 |
| 12 | akestech.in decision (301 vs separate brand) | Entity consolidation (Doc 11 §1) | **Founder decision** | Week 1 |

## C · Integrity rules for ongoing work (agencies/writers on this account)

1. Never publish search volumes, rankings, traffic, backlinks, reviews, or AI-citation claims that weren't exported from a tool — label estimates explicitly.
2. Never name a client or result without written consent.
3. No incentivised or gated reviews; no fake engagement; no keyword-stuffed GBP name; no PBN links.
4. Statistics older than 24 months must carry their date; "studies show" without a source is banned.
5. AI-assisted drafts are always expert-edited; a named human owns every claim.

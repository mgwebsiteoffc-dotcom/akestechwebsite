# 13 — Monthly KPI Dashboard (Measured vs Proxy)

**Rule of the dashboard:** every number carries a tag — **[M]** measured from a platform export, **[P]** proxy/estimated (method documented), **[RV]** requires verification setup. Nothing enters the report without a source. Baselines are set in week 1 (GSC/GA4/GBP/IG exports); this file defines the dashboard, `kpi-dashboard-template.csv` is the fill-in sheet.

---

## A · SEO (source: Google Search Console + GA4) — all [M] once GSC connected [RV→M]

| KPI | Definition | Cadence | Baseline | Target (90d) |
|---|---|---|---|---|
| Organic clicks | GSC total clicks | Monthly | TBD wk1 | +60–100% vs baseline |
| Organic impressions | GSC impressions | Monthly | TBD | +80% |
| Avg CTR | Clicks/impressions | Monthly | TBD | +0.5pp |
| Avg position | GSC (query-weighted, top queries) | Monthly | TBD | Improving trend |
| Keywords in top 3 / 10 / 20 | Rank-tracked set (Doc 03) via GSC positions | Monthly | 0 baseline | 3 / 10 / 20 |
| New ranking keywords | Queries entering top 100 with ≥10 impressions | Monthly | — | +30/mo |
| Lost/declining keywords | 90-day position declines ≥5 | Monthly | — | Actioned ≤2 wks |
| Organic conversions | GA4 key events from organic (form submit, WhatsApp, call) [M] | Monthly | TBD | +50% |
| Organic leads (CRM-verified) | CRM entries source=organic [M] | Monthly | TBD | +50% |
| Landing-page entrances (top 20) | GSC pages report | Monthly | — | Money pages rising |

## B · AEO/GEO

| KPI | Tag | Method |
|---|---|---|
| Featured snippets owned | [M] | Weekly manual check of 50-question set (Doc 08) |
| PAA ownership | [M] | Same weekly set |
| Google AI Overview presence | [M→P] | Weekly log: query, date, whether cited; AIO render varies by user — treat as high-frequency sampling |
| ChatGPT / Perplexity / Gemini mentions | [P] | Fixed 15-prompt panel monthly; count brand mentions + competitor share |
| Question-query visibility | [M] | GSC filter queries containing question words, trended |
| Branded search volume | [M] | GSC brand-query impressions/clicks (citation halo indicator) |
| Share of AI voice vs competitors | [P] | Same panel; % of prompts mentioning us vs top 3 competitors |
| Third-party corroborations | [M] | New listicle/press placements count |

## C · Local SEO (source: GBP insights + rank tracking)

| KPI | Tag | Cadence |
|---|---|---|
| GBP views (search + maps split) | [M] | Monthly |
| GBP calls / direction requests / website clicks / messages | [M] | Monthly |
| Review count & avg rating (Google) | [M] | Monthly (target: +6–10/mo, ≥4.5★) |
| Map-pack rank (10 money terms, geo-grid) | [M] | Monthly |
| Local keyword rankings (Doc 03 local set) | [M] | Monthly |
| Citation consistency | [M] | Quarterly sweep (target: 100% canonical NAP) |

## D · Instagram (source: IG Insights / Meta Business Suite)

| KPI | Tag | Target (90d) |
|---|---|---|
| Reach & impressions | [M] | Baseline +100% |
| Engagement rate ((likes+comments+saves+shares)/reach) | [M] | ≥4–5% |
| Profile visits | [M] | Trending up |
| Website clicks | [M] | Baseline ×3 |
| Followers | [M] | Lagging KPI — report, don't optimise |
| Reel views (median per reel) | [M] | Trending up |
| Saves + shares | [M] | Weighted priority metric |
| IG-attributed leads (UTM + "how did you hear") | [M] | ≥10/mo by day 90 |

## E · Business outcomes (the rows leadership reads first)

| KPI | Tag | Source |
|---|---|---|
| Total organic leads | [M] | CRM |
| Cost per organic lead (blended vs agency cost) | [M] | Derived |
| Marketing-qualified leads by source (organic / local / IG / AI-referral) | [M] | CRM — add "how did you hear about us" incl. "AI/chatbot" option |
| Revenue influenced by organic | [M] | CRM/order data |
| Tool-lead conversions (ROAS calc, speed analyzer) | [M] | GA4 events |

## Reporting template (monthly one-pager)
1. Headline: leads + revenue vs target (3 bullets max)
2. Wins: rankings entered top 10, snippets won, placements, reviews
3. Losses/risks: declining keywords, technical regressions, actions
4. Content shipped / links earned / GBP+IG cadence compliance
5. Next month's 3 priorities

**Cadence:** weekly snapshot (Mon) → monthly full dashboard → quarterly strategy review (re-score Doc 12 with real data).

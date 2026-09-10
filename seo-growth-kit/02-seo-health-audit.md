# 02 — SEO Health Audit (akestech.com)
**Method:** code-level review of the production repository (router, templates, schema engine, robots.txt, sitemap generator), live fetches of /, /blog (3 pages), /contact, /about, /sitemap.xml, plus public SERP/directory research. PageSpeed/CWV field data, backlink counts, GSC/GBP/IG data: **Not Available — Requires Verification** (see Doc 14).

**Score: 51/100** — category scores and weighting in Doc 01.

---

## 1 · Technical SEO — 58/100

| # | Issue | Severity | Evidence (verified) | Why it matters | Recommended fix | Expected impact | Priority | Effort |
|---|---|---|---|---|---|---|---|---|
| T-1 | **Production sitemap.xml is invalid XML** | 🔴 Critical | Live fetch of akestech.com/sitemap.xml → *"error on line 1 at column 2: StartTag: invalid element name"* | Google can't process the sitemap; discovery of new blogs/local pages slows to crawl-dependence; Search Console sitemap report will error | Inspect raw first bytes of the response (`curl -s https://akestech.com/sitemap.xml | head -c 200`). Likely causes: a PHP notice/warning or stray whitespace/BOM in an included file (`config/database.php`, `includes/local-pages.php`, `includes/sub-services.php` are all included before output), or a `header()` warning from output-already-sent. Fix the file emitting output, ensure `header()` runs first, no whitespace before `<?php` | Restores fast discovery for all new content; unblocks everything else in this plan | 🔴 P0 | 1–2 h |
| T-2 | robots.txt references **sitemap-blog.xml, which does not exist** | 🟠 High | robots.txt lists `Sitemap: …/sitemap-blog.xml`; .htaccess only rewrites `sitemap.xml` | 404 sitemap declaration = sloppy trust signal; split sitemaps would actually help monitor blog indexing separately | Either add a `sitemap-blog.php` rewrite and generate a blog-only sitemap (preferred), or remove the line. Declare only `sitemap.xml` if unsplit | Cleaner Search Console reporting per content type | 🟠 P1 | 1 h |
| T-3 | robots.txt **Disallow: /uploads/** blocks blog featured images (`uploads/blog/*`) | 🟠 High | robots.txt line: `Disallow: /uploads/`; all blog OG/featured images live there | Googlebot-Image can't crawl blog images → invisible in Google Images (a real discovery channel for "shopify CRO checklist"-type queries); OG previews for some scrapers degrade | Change to `Allow: /uploads/blog/` before the disallow (or remove the /uploads block and disallow only `/admin/`, `/config/`) | Blog images become eligible for Image Search; better social previews | 🟠 P1 | 15 min |
| T-4 | Sitemap hardcodes `https://www.akestech.com` while the live site canonicalizes to **non-www** | 🟠 High | `sitemap.php`: `$baseUrl = "https://www.akestech.com"`; live redirects www→non-www; robots.txt declares www sitemaps | URLs in the sitemap redirect before Google even reaches content — wasted crawl budget and mixed canonical signals | Set sitemap base to `https://akestech.com` (same constant used by canonicals), verify 301 www→non-www + http→https single hop | Consistent host canonicalization; faster indexing | 🟠 P1 | 30 min |
| T-5 | Legacy page **/whatsapp-bot.php still live & indexed** with outdated brand, phone `+91 6391003751`, Nigeria/Noida addresses | 🔴 Critical (local) | Google-indexed (surfaced in SERP research) | Actively contradicts current site NAP; splits entity understanding; leaks old phone number into AI answers | 301 `/whatsapp-bot.php` → `/products/whatsapp-shopify` (or `/services/automation`); audit for other legacy `.php` files reachable on prod (`shopify-*.php` at repo root!) and 301 or noindex | Removes contradictory entity data from Google's index | 🔴 P0 | 1–2 h |
| T-6 | Root-level legacy files shipped in repo could be served directly (e.g. `shopify-development.php`, `shopify.php`, `shopify-operation.php`, `ake*` landing HTML files) | 🟡 Medium | Present at repo root; Apache serves real files before the router (`RewriteCond !-f`) | Duplicate-content + thin-page risk if reachable; indexable clutter | `curl -I` each on production; 301 to the routed equivalent or delete from the server | Removes duplicate-path risk | 🟡 P2 | 2 h |
| T-7 | **Schema publisher/organization logo 404** (`assets/images/logo.svg` referenced by Article & Organization schema; only PNGs exist) | 🟠 High | `includes/seo.php` → `url('assets/images/logo.svg')`; file absent from repo | Invalid image reference in structured data; weakens Organization entity & Article rich-result eligibility | Point schema to the real `akestech-transparent-logo.png` (≥112×112px, square crop ideally); add a proper square 512×512 logo | Valid, complete Organization entity for Google + AI knowledge panels | 🟠 P1 | 30 min |
| T-8 | Blog URL slugs contain HTML-entity artifacts | 🟡 Medium | `/blog/d2c-funding-amp-scaling-…` ("amp"), `/blog/the-future-of-shopping-how-google-039-s-universal-commerce-protocol-…` (`&#039;`) | Ugly URLs leak into SERPs/AI citations; slugs no longer match topic keywords | Slug sanitize fix in admin (strip entities before slugify). For the 2 live posts: 301 old slug → clean slug (keep changes minimal) | Cleaner URLs, better CTR, cleaner AI citations | 🟡 P2 | 1 h + 2 redirects |
| T-9 | `<meta name="keywords">` still emitted | 🟢 Low | `SEO::renderMeta()` | Harmless but signals 2009-era SEO; zero value | Remove the keywords meta line | Hygiene | 🟢 P3 | 10 min |
| T-10 | Indexability of admin/duplicate filters | 🟢 Low | `/blog?category=…` pagination/filter URLs are crawlable | Filter URLs can create near-duplicate crawl paths | Add `rel="canonical"` self for paginated blog and consider `noindex, follow` on filtered views only | Tidy crawl | 🟢 P3 | 1 h |
| T-11 | Core Web Vitals field data | ⚪ Unknown | Not measurable from sandbox (CrUX requires field data) | CWV is a ranking input & UX factor | Run PageSpeed Insights on /, a service page, one blog; record LCP/INP/CLS; fix anything red (biggest suspects: hero images, popup scripts, counters JS) | Baseline for Doc 13 KPIs | 🟡 P2 | 1 h + fixes |

**Passed checks (verified in code/live):** HTTPS with redirect to single host ✓ · clean single-parameter router ✓ · canonicals on every template ✓ · OG + Twitter cards ✓ · JSON-LD on all key templates (Org sitewide; LocalBusiness+FAQ+HowTo+Service on service/local pages; Article+FAQ+Breadcrumb on blogs; SoftwareApplication on Whatify) ✓ · robots allows site crawl except private dirs ✓ · 404 page exists with correct status ✓ · human-readable URL structure ✓.

## 2 · On-page SEO — 65/100

| # | Issue | Severity | Evidence | Why it matters | Fix | Impact | Priority | Effort |
|---|---|---|---|---|---|---|---|---|
| O-1 | **Keyword cannibalization — 3 clusters of duplicate-intent posts** | 🔴 Critical | RTO: *…ultimate-guide* + *…advanced-strategies-2026* + *how-to-reduce-cod-rto-using-whatsapp* · CRO: *cro-checklist* + *cro-mastery* · Scaling: *…2026-blueprint* + *…exact-playbook* | Multiple URLs compete for one query → Google alternates rankings, neither consolidates; AI engines cite the weaker one | Pick one canonical per cluster; fold unique sections of the others into it; 301 the losers; update internal links & category pages | Single stronger URL per topic; typical +20–40% to that cluster's clicks (est.) | 🔴 P0 | 1 day |
| O-2 | "2026" stuffed into 10+ titles/excerpts | 🟠 High | e.g. two *…2026* RTO titles, *…in 2026* CRO/speed/ROAS titles | Dates in titles age fast (post-Jan they scream stale), depress CTR, and create title-similarity that feeds cannibalization | Keep the date only where freshness is the pitch (annual benchmarks); strip elsewhere; rely on `dateModified` schema for freshness | Higher CTR; longer shelf life | 🟠 P1 | With C-1 refresh |
| O-3 | Author = Organization on every article; no `Person` entity, no author bios | 🟠 High | `articleSchema()` author type Organization; DB has `author_name` but generic | Google's E-E-A-T and AI engines weight named, credentialed authors for YMYL-adjacent commercial advice; anonymous content is being actively de-preferenced in AI answers | Create 2–4 author profiles (founders + lead strategists) with credentials, photo, LinkedIn; emit `Person` author in Article schema; author box on posts | Eligibility for expert-byline treatment; stronger AI citation rate | 🟠 P1 | 1 day |
| O-4 | Blog index lacks `CollectionPage`/`ItemList` schema; category pages thin | 🟡 Medium | `pages/blog.php` renders breadcrumb only | Missed rich-result & internal-linking scaffolding | Add ItemList of visible posts; write 2–3 sentence intros per category page | Modest crawl/rich-result gain | 🟡 P2 | 2 h |
| O-5 | Excerpts/summaries contain raw HTML entities in SERP snippets (`&quot;`, `&#039;` visible in live SERP descriptions) | 🟡 Medium | Live SERP for the agency-listicle post shows `&amp;` artifacts | Snippets with markup garbage lose CTR | Fix excerpt sanitization in admin (decode before truncate) | Small CTR gain | 🟡 P2 | 1 h |
| O-6 | Internal linking is template-driven, not topical | 🟡 Medium | Blog posts link to services via footer mostly; no in-body contextual links on older posts | Contextual in-body links are the strongest internal signal; footer links are nearly ignored for rankings | Execute Doc 07 map: every post gets 3–5 in-body contextual links (old posts edited retroactively, new posts ship with links) | Distributes authority to money pages; typical lift on cluster rankings | 🟠 P1 | 2–3 days |
| O-7 | Meta titles/descriptions for DB-managed pages unreviewed since override | ⚪ Requires Verification | Live homepage title differs from repo default → production `page_seo` rows exist that weren't auditable | DB overrides could contain dated/weak copy | Export `page_seo` table; review against Doc 03 keyword map | Alignment of money pages to primary keywords | 🟡 P2 | 2 h |

**Passed:** H1 uniqueness per template ✓ · logical H2/H3s in CMS blogs ✓ · meta descriptions present on all templates ✓ · clean slugs on money pages ✓ · mobile viewport ✓.

## 3 · Content — 55/100

**Inventory (verified live):** 26 published posts — D2C Strategy 6 · Real Estate Marketing 9 · E-commerce Tips 3 · Shopify Growth 3 · WhatsApp Marketing 2 · CRO 2 · Performance Marketing 1. Plus 6 resource/tool pages and 2 product pages.

| # | Issue | Severity | Why it matters | Fix | Priority |
|---|---|---|---|---|---|
| C-1 | Duplicate clusters (see O-1) | 🔴 Critical | Splits authority | Merge + 301 | 🔴 |
| C-2 | Coverage is globally generic; almost nothing on the queries AKESTECH can actually win (India costs, comparisons, Lucknow/Delhi NCR local, AEO/AI, Whatify/Lead365-adjacent topics) | 🔴 Critical | Competing with Shopify's own blog & global giants on generic terms with a low-authority domain = wasted effort | Publish the 30-blog plan (Doc 06) mapped to winnable demand | 🔴 |
| C-3 | Real-estate cluster (9 posts) orphaned from the rest: no pillar, no links into services/Lead365, mixed geography (Lucknow/Noida) | 🟠 High | The cluster with most posts converts worst structurally | Build RE pillar + cluster map (Doc 07 §5), add Lead365/automation CTAs | 🟠 |
| C-4 | No case-study-backed claims in most posts ("200+ stores", "22% cart recovery" uncited within posts) | 🟠 High | Unverifiable numbers erode trust with Google's quality raters and AI engines that prefer citable sources | Every stat gets an internal case-study link or "Akestech internal data, method noted" caption; publish 3 named case studies | 🟠 |
| C-5 | Categories misaligned to funnel; no visible content series or pillar hubs | 🟡 Medium | Weakens topical-authority signals | Adopt Doc 07 cluster architecture + hub pages | 🟡 |
| C-6 | No content refresh process (posts published Apr–Jun 2026 untouched while market shifted) | 🟡 Medium | Rankings decay; `dateModified` stays stale | Quarterly refresh calendar in Doc 12 | 🟡 |

**Strengths to keep:** genuinely expert, operationally specific writing (RTO mechanics, COD flows, UCP analysis); India-specific framing competitors lack; tools (ROAS calculator, speed analyzer) are linkable assets.

## 4 · Off-page SEO — 30/100 *(estimated — no backlink index available; Requires Verification)*

| Finding | Severity | Notes |
|---|---|---|
| Directory presence exists but stale: Justdial 4.6★ (63 ratings), Konigle listing | 🟡 Medium | One of the few verified third-party signals; inconsistent address on JD vs site |
| Absent from Lucknow "top digital marketing agencies" listicles that dominate the SERP (Duplex, WebHopers, Moris Media, Semrush Agency Partners lists) | 🔴 Critical | These roundups are both ranking competitors and citation sources for AI answers |
| No visible digital PR, guest posts, or industry-publication features | 🟠 High | Competitors like TechBullion-featured agencies actively publish |
| Social profiles exist (X, LinkedIn, Instagram) and are schema-linked ✓ | 🟢 Low | Keep consistent; LinkedIn is the highest-value for B2B |
| **Action:** 90-day link plan (Doc 12 §61-90 + Doc 08 §Digital PR): 8–10 listicle placements, 4–6 guest/PR features, tool-based links (ROAS calculator, speed analyzer outreach) | | Target: +15–25 referring domains of DR40+, all topical |

## 5 · Local SEO — 35/100

| # | Issue | Severity | Evidence | Fix |
|---|---|---|---|---|
| L-1 | **NAP chaos:** ≥4 phones (+91 7275013628 site WhatsApp · +91 6391003751 legacy page · +91 6307763733 ContactOut · +91 8953749734 akestech.in schema), ≥3 emails (contact@akestech.com / contact@akestech.in / hello@akestech.in), addresses (Parsvnath Office Plaza 226010 / Vinayak Tower 226028 / 1/109 Vikrant Khand 226010) | 🔴 Critical | Public pages & directory listings | Decide the ONE canonical set (recommend: +91 7275013628 · contact@akestech.com · Parsvnath Office Plaza, Vibhuti Khand, Lucknow 226010); update site, schema, GBP, Justdial, LinkedIn, all citations |
| L-2 | **No visible address/hours/phone anywhere on akestech.com** (footer & contact page carry zero NAP; no Maps embed) | 🔴 Critical | Verified crawl of /contact & footer | Add NAP block + Google Maps embed + hours to contact page and footer; mirror in LocalBusiness schema with `geo` coordinates | 
| L-3 | **akestech.in** — separate site with different branding ("DigiGrowth"), own schema with conflicting NAP, targeting schools/real estate/salons | 🔴 Critical | Public site | Decide: 301 akestech.in → akestech.com (recommended) or clearly differentiate the brand; either way eliminate conflicting entity data |
| L-4 | GBP status unverified (not confirmable from outside; no `Maps` link on site) | 🔴 Critical | Old audit claimed no GBP; current status **Requires Verification** | Verify/claim in Doc 09; add site link to GBP and GBP link to site footer |
| L-5 | 14 city×service pages are template-thin at the differentiation layer (same copy with {city} swapped) | 🟠 High | `local-service.php` template + `local-pages.php` data | Add per-city proof: local client examples, area names in body (already in data), city-specific FAQs, embedded map, local schema ✓ (partially present) |
| L-6 | Justdial listing has old photos, no website link confirmed, mixed service categories | 🟡 Medium | Public listing | Refresh listing; ensure URL → akestech.com; keep categories aligned with GBP |

## 6 · AEO/GEO — 45/100
Detailed strategy in Doc 08. Quick audit:
- ✅ FAQPage schema on service/local/blog templates; direct-answer paragraphs on local pages; clean heading structure; SoftwareApplication schema on Whatify.
- ❌ Anonymous authorship; ❌ Organization facts inconsistent across the web (T-5, L-1, L-3); ❌ schema logo 404 (T-7); ❌ broken sitemap slows AI crawler discovery (T-1); ❌ no `sameAs` for Justdial/Facebook; ❌ no third-party corroboration pages (listicles, press) for AI engines to triangulate the brand.

## 7 · UX / CRO — 60/100
- ✅ Strong: WhatsApp float + wa.me deep links, entry/exit popups, enquiry form with lead capture, free-audit offer, tools as lead magnets, cookie consent.
- ❌ Trust gaps: no address/phone on contact page; homepage/about stat inconsistencies (About: "100+ brands" and "200+ brands" on the same page; blog claims "200+ stores"); anonymous team ("Founding Team"); no client logos with case-study links on money pages; no visible pricing anchors.
- Fix set: Doc 12 days 61–90 CRO block + Doc 02 L-2 NAP block. Estimated impact: +10–20% enquiry conversion from existing traffic (est. — validate via GA4 events).

## 8 · E-E-A-T & trust signals — audit table

| Signal | Status | Fix |
|---|---|---|
| Named founders/team | ❌ Anonymous | Author profiles + about-page faces + `Person` schema |
| Experience proof | ⚠️ Claims without named clients | 3 named, verifiable case studies with metrics & client quotes |
| Credentials/registrations | ⚠️ Private Ltd (2015) never surfaced | Add registration, GST-invoice-ready legal name, Shopify Partner status to footer/about |
| Reviews | ⚠️ Only Justdial | Google reviews engine (Doc 09) + on-site review wall w/ schema |
| Contact transparency | ❌ | NAP everywhere (L-2) |
| Policies | ✅ Privacy/Terms/Data-deletion live | Keep updated |
| Security note | ⚠️ Repo history shows a removed obfuscated include with web-shell signature (commented in `index.php`) | Confirm incident response was completed: rotate all credentials (hosting, DB, admin, FTP), malware-scan `admin/` and `uploads/`, request a Security Issues review in Search Console if anything was found. A flagged site loses rankings regardless of SEO quality |

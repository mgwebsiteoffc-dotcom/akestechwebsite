-- ========================================
-- SEO METADATA & KEYWORDS FOR SERVICE PAGES
-- ========================================
-- Update or insert SEO data for all service pages and blog archive

-- Performance Marketing Service
INSERT INTO page_seo (page_slug, meta_title, meta_description, meta_keywords, og_title, og_description, og_image, robots, canonical_url) VALUES 
('performance-marketing', 
 'Meta & Google Ads for Shopify | Performance Marketing Agency India', 
 'Expert Shopify performance marketing agency in India. Proven 3X+ ROAS with Meta ads, Google ads, and full-funnel campaigns. ₹50Cr+ managed.',
 'Shopify performance marketing agency India, Meta ads for Shopify, Google ads Shopify India, performance marketing agency, D2C marketing, ecommerce ads, facebook ads Shopify, conversion optimization',
 'Meta & Google Ads for Shopify | India',
 'Expert performance marketing for Shopify stores. 3X+ ROAS, ₹50Cr+ managed for 200+ D2C brands.',
 '/assets/images/og-performance-marketing.jpg',
 'index, follow',
 'https://akestech.com/services/performance-marketing')
ON DUPLICATE KEY UPDATE
 meta_title = VALUES(meta_title),
 meta_description = VALUES(meta_description),
 meta_keywords = VALUES(meta_keywords),
 og_title = VALUES(og_title),
 og_description = VALUES(og_description);

-- Shopify Growth Service
INSERT INTO page_seo (page_slug, meta_title, meta_description, meta_keywords, og_title, og_description, og_image, robots, canonical_url) VALUES 
('shopify-growth',
 'Shopify CRO & Store Optimization | Growth Agency India',
 'Shopify conversion rate optimization and store growth services in India. Turn visitors into buyers with data-backed CRO. 2-4X conversion lift.',
 'Shopify CRO, conversion rate optimization, shopify growth, store optimization, increase conversions, AOV optimization, shopify store growth, ecommerce growth',
 'Shopify CRO & Conversion Optimization',
 'Expert Shopify store optimization. 2-4X conversion rate lift, 200+ stores optimized.',
 '/assets/images/og-shopify-growth.jpg',
 'index, follow',
 'https://akestech.com/services/shopify-growth')
ON DUPLICATE KEY UPDATE
 meta_title = VALUES(meta_title),
 meta_description = VALUES(meta_description),
 meta_keywords = VALUES(meta_keywords),
 og_title = VALUES(og_title),
 og_description = VALUES(og_description);

-- Shopify Operations Service
INSERT INTO page_seo (page_slug, meta_title, meta_description, meta_keywords, og_title, og_description, og_image, robots, canonical_url) VALUES 
('shopify-operations',
 'RTO Reduction & Shopify Operations | D2C Agency India',
 'Reduce RTO by 50%+ for Shopify stores in India. COD optimization, fulfillment automation, logistics integration. Real case studies included.',
 'reduce RTO Shopify, RTO reduction ecommerce, Shopify operations, COD optimization, fulfillment automation, logistics integration, prepaid conversion, shopify logistics',
 'RTO Reduction & Operations Optimization',
 'Reduce RTO by 50%+. Proven operational excellence for 200+ D2C brands on Shopify.',
 '/assets/images/og-shopify-operations.jpg',
 'index, follow',
 'https://akestech.com/services/shopify-operations')
ON DUPLICATE KEY UPDATE
 meta_title = VALUES(meta_title),
 meta_description = VALUES(meta_description),
 meta_keywords = VALUES(meta_keywords),
 og_title = VALUES(og_title),
 og_description = VALUES(og_description);

-- WhatsApp Automation Service
INSERT INTO page_seo (page_slug, meta_title, meta_description, meta_keywords, og_title, og_description, og_image, robots, canonical_url) VALUES 
('automation',
 'WhatsApp Automation for Shopify | Cart Recovery, COD Verification',
 'WhatsApp automation platform for Shopify stores in India. Cart recovery, COD verification, order notifications. 22% recovery rate. Free setup.',
 'WhatsApp automation Shopify, WhatsApp Business API, cart recovery WhatsApp, COD verification WhatsApp, Whatify, WhatsApp marketing, marketing automation',
 'WhatsApp Automation for Shopify India',
 'WhatsApp automation for Shopify. 22% cart recovery rate, COD verification, order automation.',
 '/assets/images/og-automation.jpg',
 'index, follow',
 'https://akestech.com/services/automation')
ON DUPLICATE KEY UPDATE
 meta_title = VALUES(meta_title),
 meta_description = VALUES(meta_description),
 meta_keywords = VALUES(meta_keywords),
 og_title = VALUES(og_title),
 og_description = VALUES(og_description);

-- Technology Service
INSERT INTO page_seo (page_slug, meta_title, meta_description, meta_keywords, og_title, og_description, og_image, robots, canonical_url) VALUES 
('technology',
 'Shopify Custom Development & Integration Services | India',
 'Expert Shopify custom development, theme optimization, and integrations. Server-side tracking, pixel setup, API integration for D2C brands.',
 'Shopify custom development, Shopify development India, theme customization, Shopify integration, API integration, server-side tracking, pixel setup',
 'Shopify Custom Development & Integration',
 'Expert Shopify development. Custom solutions, server-side tracking, integrations for high-growth D2C brands.',
 '/assets/images/og-technology.jpg',
 'index, follow',
 'https://akestech.com/services/technology')
ON DUPLICATE KEY UPDATE
 meta_title = VALUES(meta_title),
 meta_description = VALUES(meta_description),
 meta_keywords = VALUES(meta_keywords),
 og_title = VALUES(og_title),
 og_description = VALUES(og_description);

-- Blog FAQ Archive Page
INSERT INTO page_seo (page_slug, meta_title, meta_description, meta_keywords, og_title, og_description, og_image, robots, canonical_url) VALUES 
('blog-faqs',
 'Shopify Growth FAQ | Performance Marketing, Operations & Automation',
 'Complete FAQ archive for Shopify growth, performance marketing, WhatsApp automation, RTO reduction, and D2C strategy. Answers to 50+ questions.',
 'Shopify FAQ, shopify growth questions, performance marketing faq, WhatsApp automation guide, RTO reduction faq, ecommerce FAQ, d2c marketing questions',
 'Complete Shopify Growth FAQ',
 'Answers to all your Shopify questions. FAQs on growth, marketing, automation, operations.',
 '/assets/images/og-faq.jpg',
 'index, follow',
 'https://akestech.com/blog/faqs')
ON DUPLICATE KEY UPDATE
 meta_title = VALUES(meta_title),
 meta_description = VALUES(meta_description),
 meta_keywords = VALUES(meta_keywords),
 og_title = VALUES(og_title),
 og_description = VALUES(og_description);

-- Home/Index Page  
INSERT INTO page_seo (page_slug, meta_title, meta_description, meta_keywords, og_title, og_description, og_image, robots, canonical_url) VALUES 
('home',
 'Shopify Growth Agency India | Performance Marketing & WhatsApp Automation',
 'Akestech: Leading Shopify growth agency in India. ₹50Cr+ managed, 200+ stores, 3X+ ROAS. Meta ads, CRO, RTO reduction, WhatsApp automation.',
 'Shopify growth agency India, Shopify marketing agency, ecommerce growth agency, D2C agency, performance marketing, WhatsApp automation, Shopify expert India',
 'Shopify Growth Agency India',
 '₹50Cr+ managed. 200+ D2C brands scaled. 3X+ ROAS. Expert agency for Shopify growth.',
 '/assets/images/og-home.jpg',
 'index, follow',
 'https://akestech.com')
ON DUPLICATE KEY UPDATE
 meta_title = VALUES(meta_title),
 meta_description = VALUES(meta_description),
 meta_keywords = VALUES(meta_keywords),
 og_title = VALUES(og_title),
 og_description = VALUES(og_description);

-- About Page
INSERT INTO page_seo (page_slug, meta_title, meta_description, meta_keywords, og_title, og_description, og_image, robots, canonical_url) VALUES 
('about',
 'About Akestech | Shopify Growth Agency India',
 'Learn about Akestech, India''s trusted Shopify growth agency. Team, credentials, case studies, and why 200+ D2C brands trust us.',
 'about Akestech, Shopify agency about us, team credentials, why choose Akestech, D2C growth expert',
 'About Akestech - Shopify Growth Agency',
 'Expert team. ₹50Cr+ managed. 200+ satisfied brands. Your Shopify growth partner.',
 '/assets/images/og-about.jpg',
 'index, follow',
 'https://akestech.com/about')
ON DUPLICATE KEY UPDATE
 meta_title = VALUES(meta_title),
 meta_description = VALUES(meta_description),
 meta_keywords = VALUES(meta_keywords),
 og_title = VALUES(og_title),
 og_description = VALUES(og_description);

-- Blog Main Page
INSERT INTO page_seo (page_slug, meta_title, meta_description, meta_keywords, og_title, og_description, og_image, robots, canonical_url) VALUES 
('blog',
 'Shopify Growth Blog | Performance Marketing, Operations & D2C Strategy',
 'Read expert guides on Shopify performance marketing, store optimization, RTO reduction, WhatsApp automation, and D2C growth strategy.',
 'Shopify blog, ecommerce blog, performance marketing guide, D2C strategy, WhatsApp automation guide, shopify tips, marketing guide',
 'Shopify Growth Blog',
 'Expert articles on Shopify growth, performance marketing, and D2C strategy.',
 '/assets/images/og-blog.jpg',
 'index, follow',
 'https://akestech.com/blog')
ON DUPLICATE KEY UPDATE
 meta_title = VALUES(meta_title),
 meta_description = VALUES(meta_description),
 meta_keywords = VALUES(meta_keywords),
 og_title = VALUES(og_title),
 og_description = VALUES(og_description);

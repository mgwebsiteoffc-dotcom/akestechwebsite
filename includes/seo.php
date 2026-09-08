<?php
/**
 * SEO & AEO Helper
 * Generates meta tags, Open Graph, JSON-LD schemas
 */

class SEO {
    private static $data = [];

    /**
     * Load SEO data for a page.
     * If the DB has no row (or the query fails) we fall back to the built-in
     * defaults map so every page always ships a title, description and
     * canonical — never an empty <title>.
     */
    public static function load($pageSlug) {
        $seo = null;

        try {
            $stmt = db()->prepare("SELECT * FROM page_seo WHERE page_slug = ?");
            $stmt->execute([$pageSlug]);
            $seo = $stmt->fetch();
        } catch (Throwable $e) {
            $seo = null;
        }

        if (empty($seo)) {
            $seo = self::defaults($pageSlug);
        }

        if (!empty($seo)) {
            self::$data = $seo;
        }

        return $seo;
    }

    /**
     * Built-in SEO defaults.
     * Keys mirror the page_seo table so renderMeta() works unchanged.
     * DB rows always win — this is only a safety net.
     */
    public static function defaults($slug) {
        $map = [

            /* ---------- core ---------- */
            'home' => [
                'meta_title' => 'AKESTECH — AI, Commerce & Growth Technology Company',
                'meta_description' => 'AKESTECH builds Shopify stores, AI automation, digital products, performance marketing, marketplace operations and AI videos for ambitious businesses. Build. Automate. Grow.',
                'meta_keywords' => 'Akestech, AI automation company, Shopify development, product development, performance marketing, marketplace management, AI videos',
            ],
            'about' => [
                'meta_title' => 'About AKESTECH — AI, Commerce & Growth Technology Partner',
                'meta_description' => 'AKESTECH is an AI-first technology company combining commerce, product engineering, automation and performance marketing under one team.',
            ],
            'contact' => [
                'meta_title' => 'Contact AKESTECH — Build, Automate, Grow',
                'meta_description' => 'Talk to AKESTECH about Shopify, AI automation, product development, performance marketing, marketplace management or AI video production.',
            ],

            /* ---------- services ---------- */
            'services/automation' => [
                'meta_title' => 'AI Automation Services | AI Agents & Workflows | AKESTECH',
                'meta_description' => 'AI automation company building AI agents, WhatsApp automation, CRM intelligence and workflow automation that cut manual work and increase revenue.',
                'meta_keywords' => 'AI automation, AI agents, WhatsApp automation, n8n automation, CRM automation, business process automation',
            ],
            'services/technology' => [
                'meta_title' => 'Product Development Company | SaaS, AI & Mobile Apps | AKESTECH',
                'meta_description' => 'Product development company building SaaS platforms, AI products, web and mobile apps, Shopify apps and integrations from idea to production.',
                'meta_keywords' => 'product development company, SaaS development, AI product development, web app development, mobile app development',
            ],
            'services/performance-marketing' => [
                'meta_title' => 'Performance Marketing Agency | Meta & Google Ads | AKESTECH',
                'meta_description' => 'Performance marketing agency managing Meta Ads, Google Ads, creative, CRO, tracking and retention for profitable customer acquisition.',
                'meta_keywords' => 'performance marketing, Meta Ads management, Google Ads agency, ROAS, CRO, paid media',
            ],
            'services/shopify-growth' => [
                'meta_title' => 'Shopify Development & Ecommerce Consulting | AKESTECH',
                'meta_description' => 'Shopify development, CRO, theme customisation, store optimisation and ecommerce consulting for brands that want to sell more.',
                'meta_keywords' => 'Shopify development, Shopify agency India, ecommerce consulting, CRO, Shopify Plus',
            ],
            'services/shopify-operations' => [
                'meta_title' => 'Marketplace Management Services | Amazon & Flipkart | AKESTECH',
                'meta_description' => 'Marketplace management for Amazon, Flipkart and D2C: listings, ads, catalogue, inventory, fulfilment and RTO reduction.',
                'meta_keywords' => 'marketplace management, Amazon account management, Flipkart seller management, RTO reduction, catalogue management',
            ],
            'services/ai-videos' => [
                'meta_title' => 'AI Video Production Studio | AI Ad Films & UGC | AKESTECH',
                'meta_description' => 'AI video studio producing ad films, AI UGC creators, product reels and multi-language voiceovers at 10X the volume of a traditional shoot.',
                'meta_keywords' => 'AI video production, AI ad films, AI UGC, AI video ads, product reel maker, AI dubbing',
            ],
            'products/whatsapp-shopify' => [
                'meta_title' => 'Whatify — AI WhatsApp Commerce & Automation | AKESTECH',
                'meta_description' => 'Whatify is AKESTECH\'s AI-powered WhatsApp commerce platform for cart recovery, COD verification, order updates and customer engagement.',
            ],
            'products/lead365' => [
                'meta_title' => 'Lead365 — Lead Management & Automation Platform | AKESTECH',
                'meta_description' => 'Lead365 connects every lead source, team and customer journey into one automated lead management system with routing, follow-ups and reporting.',
                'meta_keywords' => 'lead management software, lead automation, CRM automation, lead routing',
            ],

            /* ---------- local: Lucknow ---------- */
            'digital-marketing-company-in-lucknow' => [
                'meta_title' => 'Digital Marketing Company in Lucknow | SEO, Ads & Leads | AKESTECH',
                'meta_description' => 'AKESTECH is a digital marketing company in Lucknow delivering SEO, AEO content, Meta Ads, Google Ads, landing pages, CRO and lead automation.',
            ],
            'shopify-development-company-in-lucknow' => [
                'meta_title' => 'Shopify Development Company in Lucknow | AKESTECH',
                'meta_description' => 'Shopify development company in Lucknow for store setup, theme customisation, speed optimisation, app integration, tracking and CRO.',
            ],
            'performance-marketing-company-in-lucknow' => [
                'meta_title' => 'Performance Marketing Company in Lucknow | AKESTECH',
                'meta_description' => 'Performance marketing company in Lucknow running Meta Ads, Google Ads, creative testing, CRO and retention for measurable ROAS.',
            ],
            'meta-ads-management-in-lucknow' => [
                'meta_title' => 'Meta Ads Management in Lucknow | Facebook & Instagram Ads | AKESTECH',
                'meta_description' => 'Meta Ads management in Lucknow for Facebook and Instagram campaigns, creative strategy, audience testing and conversion tracking.',
            ],
            'lead-generation-service-in-lucknow' => [
                'meta_title' => 'Lead Generation Services in Lucknow | AKESTECH',
                'meta_description' => 'Lead generation services in Lucknow combining local SEO, paid ads, landing pages, CRM routing and WhatsApp follow-up for qualified enquiries.',
            ],
            'ai-automation-company-in-lucknow' => [
                'meta_title' => 'AI Automation Company in Lucknow | AI Agents & Workflows | AKESTECH',
                'meta_description' => 'AI automation company in Lucknow building AI agents, WhatsApp automation, CRM intelligence and workflow automation for local businesses.',
            ],
            'ecommerce-consultant-in-lucknow' => [
                'meta_title' => 'Ecommerce Consultant in Lucknow | Shopify & D2C Advisory | AKESTECH',
                'meta_description' => 'Ecommerce consultant in Lucknow for store audits, CRO roadmaps, platform selection, unit economics and marketplace growth strategy.',
            ],

            /* ---------- local: Delhi NCR ---------- */
            'digital-marketing-company-in-delhi-ncr' => [
                'meta_title' => 'Digital Marketing Company in Delhi NCR | SEO, Ads & Leads | AKESTECH',
                'meta_description' => 'AKESTECH is a digital marketing company in Delhi NCR delivering SEO, AEO content, Meta Ads, Google Ads, landing pages, CRO and lead automation.',
            ],
            'shopify-development-company-in-delhi-ncr' => [
                'meta_title' => 'Shopify Development Company in Delhi NCR | AKESTECH',
                'meta_description' => 'Shopify development company in Delhi NCR for store setup, theme customisation, speed optimisation, app integration, tracking and CRO.',
            ],
            'performance-marketing-company-in-delhi-ncr' => [
                'meta_title' => 'Performance Marketing Company in Delhi NCR | AKESTECH',
                'meta_description' => 'Performance marketing company in Delhi NCR running Meta Ads, Google Ads, creative testing, CRO and retention for measurable ROAS.',
            ],
            'meta-ads-management-in-delhi-ncr' => [
                'meta_title' => 'Meta Ads Management in Delhi NCR | Facebook & Instagram Ads | AKESTECH',
                'meta_description' => 'Meta Ads management in Delhi NCR for Facebook and Instagram campaigns, creative strategy, audience testing and conversion tracking.',
            ],
            'lead-generation-service-in-delhi-ncr' => [
                'meta_title' => 'Lead Generation Services in Delhi NCR | AKESTECH',
                'meta_description' => 'Lead generation services in Delhi NCR combining local SEO, paid ads, landing pages, CRM routing and WhatsApp follow-up for qualified enquiries.',
            ],
            'ai-automation-company-in-delhi-ncr' => [
                'meta_title' => 'AI Automation Company in Delhi NCR | AI Agents & Workflows | AKESTECH',
                'meta_description' => 'AI automation company in Delhi NCR building AI agents, WhatsApp automation, CRM intelligence and workflow automation for growing businesses.',
            ],
            'ecommerce-consultant-in-delhi-ncr' => [
                'meta_title' => 'Ecommerce Consultant in Delhi NCR | Shopify & D2C Advisory | AKESTECH',
                'meta_description' => 'Ecommerce consultant in Delhi NCR for store audits, CRO roadmaps, platform selection, unit economics and marketplace growth strategy.',
            ],

            /* ---------- industries ---------- */
            'industries/d2c-ecommerce' => [
                'meta_title' => 'D2C & Ecommerce Growth Partner | Shopify, Marketplace & Ads | AKESTECH',
                'meta_description' => 'Growth partner for D2C and ecommerce brands: Shopify development, marketplace management, performance marketing, retention and AI automation.',
            ],
            'industries/healthcare' => [
                'meta_title' => 'Healthcare Digital Growth & Automation | AKESTECH',
                'meta_description' => 'Healthcare growth and automation: compliant funnels, patient enquiry automation, CRM, appointment journeys and performance marketing.',
            ],
            'industries/education' => [
                'meta_title' => 'Education Marketing & Admission Automation | AKESTECH',
                'meta_description' => 'Education growth systems: admission funnels, lead automation, counsellor CRM, WhatsApp follow-up and paid acquisition for institutes.',
            ],
            'industries/automotive' => [
                'meta_title' => 'Automotive Digital Marketing & Dealer Automation | AKESTECH',
                'meta_description' => 'Automotive growth: dealer lead management, test-drive funnels, WhatsApp automation, CRM integration and performance marketing.',
            ],
            'industries/food-and-beverage' => [
                'meta_title' => 'Food & Beverage Ecommerce Growth | AKESTECH',
                'meta_description' => 'Food and beverage growth: online ordering, marketplace management, retention automation, performance marketing and AI content.',
            ],
            'industries/saas-and-startups' => [
                'meta_title' => 'SaaS & Startup Product Development | AI Products & Growth | AKESTECH',
                'meta_description' => 'Product development and growth for SaaS and startups: MVP builds, AI features, integrations, analytics and performance marketing.',
            ],
            'industries/real-estate' => [
                'meta_title' => 'Real Estate Marketing & Lead Automation | AKESTECH',
                'meta_description' => 'Real estate growth: site-visit qualified leads, project funnels, WhatsApp automation, CRM routing and paid media management.',
            ],
            'industries/retail-and-consumer-brands' => [
                'meta_title' => 'Retail & Consumer Brand Growth | AKESTECH',
                'meta_description' => 'Retail and consumer brand growth: ecommerce, marketplace management, retail media, retention automation and AI creative.',
            ],
        ];

        /* Accept both 'automation' and 'services/automation' style keys */
        $candidates = [$slug, 'services/' . $slug, preg_replace('#^services/#', '', $slug)];
        $key = null;
        foreach ($candidates as $c) {
            if (isset($map[$c])) { $key = $c; break; }
        }
        if ($key === null) return [];

        $seo = $map[$key];
        $seo['canonical_url'] = url($slug === $key ? $slug : $slug);
        $seo['og_title'] = $seo['meta_title'];
        $seo['og_description'] = $seo['meta_description'];
        $seo['robots'] = 'index, follow';

        return $seo;
    }

    /**
     * Set custom SEO data
     */
    public static function set($key, $value) {
        self::$data[$key] = $value;
    }

    /**
     * Get SEO value
     */
    public static function get($key, $default = '') {
        return self::$data[$key] ?? $default;
    }

    /**
     * Render all meta tags
     */
    public static function renderMeta() {
        $title = self::get('meta_title', SITE_NAME);
        $desc = self::get('meta_description', '');
        $keywords = self::get('meta_keywords', '');
        $ogTitle = self::get('og_title', $title);
        $ogDesc = self::get('og_description', $desc);
        $ogImage = self::get('og_image', url('assets/images/og-akestech.jpg'));
        $canonical = self::get('canonical_url', self::currentUrl());
        $robots = self::get('robots', 'index, follow');

        $html = '';
        $html .= "<title>{$title}</title>\n";
        $html .= "<meta name=\"description\" content=\"{$desc}\">\n";
        if ($keywords) $html .= "<meta name=\"keywords\" content=\"{$keywords}\">\n";
        $html .= "<meta name=\"robots\" content=\"{$robots}\">\n";
        $html .= "<link rel=\"canonical\" href=\"{$canonical}\">\n";
        
        // Open Graph
        $html .= "<meta property=\"og:type\" content=\"website\">\n";
        $html .= "<meta property=\"og:title\" content=\"{$ogTitle}\">\n";
        $html .= "<meta property=\"og:description\" content=\"{$ogDesc}\">\n";
        $html .= "<meta property=\"og:image\" content=\"{$ogImage}\">\n";
        $html .= "<meta property=\"og:url\" content=\"{$canonical}\">\n";
        $html .= "<meta property=\"og:site_name\" content=\"" . SITE_NAME . "\">\n";
        
        // Twitter
        $html .= "<meta name=\"twitter:card\" content=\"summary_large_image\">\n";
        $html .= "<meta name=\"twitter:title\" content=\"{$ogTitle}\">\n";
        $html .= "<meta name=\"twitter:description\" content=\"{$ogDesc}\">\n";
        $html .= "<meta name=\"twitter:image\" content=\"{$ogImage}\">\n";
        
        return $html;
    }

    /**
     * Organization Schema
     */
    public static function organizationSchema() {
        return json_encode([
            "@context" => "https://schema.org",
            "@type" => "Organization",
            "name" => SITE_NAME,
            "alternateName" => "AKESTECH",
            "url" => SITE_URL,
            "logo" => url('assets/images/akestech-transparent-logo.png'),
            "slogan" => "Build. Automate. Grow.",
            "description" => "AKESTECH is an AI, commerce and growth technology company. We build Shopify stores, AI automation, digital products, performance marketing, marketplace operations and AI video production.",
            "email" => SITE_EMAIL,
            "telephone" => defined('SITE_PHONE') ? SITE_PHONE : '',
            "address" => [
                "@type" => "PostalAddress",
                "addressLocality" => "Lucknow",
                "addressRegion" => "Uttar Pradesh",
                "addressCountry" => "IN"
            ],
            "sameAs" => [
                "https://x.com/akestechinfotec",
                "https://www.linkedin.com/company/akestech",
                "https://www.instagram.com/akestechinfotech/"
            ],
            "contactPoint" => [
                "@type" => "ContactPoint",
                "contactType" => "sales",
                "email" => SITE_EMAIL,
                "telephone" => defined('SITE_PHONE') ? SITE_PHONE : '',
                "availableLanguage" => ["English", "Hindi"]
            ],
            "knowsAbout" => [
                "Shopify development",
                "AI automation",
                "AI agents",
                "WhatsApp automation",
                "Product development",
                "Performance marketing",
                "Marketplace management",
                "AI video production",
                "Ecommerce consulting"
            ],
            "makesOffer" => [
                ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Shopify & Commerce", "url" => url('services/shopify-growth')]],
                ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "AI & Automation", "url" => url('services/automation')]],
                ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Product Development", "url" => url('services/technology')]],
                ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Performance Marketing", "url" => url('services/performance-marketing')]],
                ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Marketplace Management", "url" => url('services/shopify-operations')]],
                ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "AI Videos", "url" => url('services/ai-videos')]]
            ]
        ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }

    /**
     * FAQ Schema
     */
    public static function faqSchema($faqs) {
        if (empty($faqs)) return '';
        
        $items = [];
        foreach ($faqs as $faq) {
            $items[] = [
                "@type" => "Question",
                "name" => $faq['question'],
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text" => $faq['answer']
                ]
            ];
        }

        return json_encode([
            "@context" => "https://schema.org",
            "@type" => "FAQPage",
            "mainEntity" => $items
        ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }

    /**
     * Article Schema for blog posts
     */
    public static function articleSchema($post) {
        return json_encode([
            "@context" => "https://schema.org",
            "@type" => "Article",
            "headline" => $post['title'],
            "description" => $post['excerpt'] ?? '',
            "image" => $post['featured_image'] ? url($post['featured_image']) : '',
            "author" => [
                "@type" => "Organization",
                "name" => SITE_NAME
            ],
            "publisher" => [
                "@type" => "Organization",
                "name" => SITE_NAME,
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => url('assets/images/logo.svg')
                ]
            ],
            "datePublished" => $post['published_at'] ?? $post['created_at'],
            "dateModified" => $post['updated_at']
        ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }

    /**
     * Software Application Schema (for product page)
     */
    public static function softwareSchema() {
        return json_encode([
            "@context" => "https://schema.org",
            "@type" => "SoftwareApplication",
            "name" => SITE_NAME . " WhatsApp Automation",
            "applicationCategory" => "BusinessApplication",
            "operatingSystem" => "Web",
            "description" => "WhatsApp automation app for Shopify stores. Cart recovery, COD verification, order notifications, and broadcast messaging.",
            "offers" => [
                "@type" => "Offer",
                "price" => "0",
                "priceCurrency" => "INR",
                "description" => "Free plan available"
            ],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => "4.8",
                "ratingCount" => "150"
            ]
        ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }

    /**
     * Breadcrumb Schema
     */
    public static function breadcrumbSchema($items) {
        $list = [];
        foreach ($items as $i => $item) {
            $list[] = [
                "@type" => "ListItem",
                "position" => $i + 1,
                "name" => $item['name'],
                "item" => $item['url']
            ];
        }

        return json_encode([
            "@context" => "https://schema.org",
            "@type" => "BreadcrumbList",
            "itemListElement" => $list
        ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }

    /**
     * LocalBusiness Schema (for GMB + local visibility)
     */
    /**
     * LocalBusiness Schema (for GMB + local visibility)
     * Optional args let local landing pages emit a city-specific entity.
     */
    public static function localBusinessSchema($city = 'Lucknow', $region = 'Uttar Pradesh', $postal = '226001', $areas = []) {
        $name = SITE_NAME . ($city ? ' — ' . $city : '');

        return json_encode([
            "@context" => "https://schema.org",
            "@type" => "ProfessionalService",
            "name" => $name,
            "image" => url('assets/images/akestech-transparent-logo.png'),
            "description" => "AKESTECH is an AI, commerce and growth technology company in {$city}: Shopify development, AI automation, product development, performance marketing, marketplace management and AI video production.",
            "address" => [
                "@type" => "PostalAddress",
                "streetAddress" => $city . ", " . $region,
                "addressLocality" => $city,
                "addressRegion" => $region,
                "postalCode" => $postal,
                "addressCountry" => "IN"
            ],
            "telephone" => defined('SITE_PHONE') ? SITE_PHONE : '',
            "email" => SITE_EMAIL,
            "url" => SITE_URL,
            "priceRange" => "₹₹",
            "areaServed" => array_merge(
                [["@type" => "City", "name" => $city], ["@type" => "Country", "name" => "India"]],
                array_map(function ($a) { return ["@type" => "Place", "name" => $a]; }, $areas)
            ),
            "sameAs" => [
                "https://x.com/akestechinfotec",
                "https://www.linkedin.com/company/akestech",
                "https://www.instagram.com/akestechinfotech/"
            ],
            "makesOffer" => [
                ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Shopify Development", "url" => url('services/shopify-growth')]],
                ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "AI Automation", "url" => url('services/automation')]],
                ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Product Development", "url" => url('services/technology')]],
                ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Performance Marketing", "url" => url('services/performance-marketing')]],
                ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Marketplace Management", "url" => url('services/shopify-operations')]]
            ]
        ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }

    /**
     * Service Schema (for individual services)
     */
    public static function serviceSchema($serviceName, $description, $priceMin = null, $priceMax = null) {
        $schema = [
            "@context" => "https://schema.org",
            "@type" => "Service",
            "name" => $serviceName,
            "description" => $description,
            "provider" => [
                "@type" => "LocalBusiness",
                "name" => SITE_NAME,
                "url" => SITE_URL
            ],
            "areaServed" => [
                "@type" => "Country",
                "name" => "India"
            ]
        ];

        if ($priceMin && $priceMax) {
            $schema["priceRange"] = "₹{$priceMin}-{$priceMax}";
        }

        return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }

    /**
     * Case Study / Case Study Schema
     */
    public static function caseStudySchema($study) {
        return json_encode([
            "@context" => "https://schema.org",
            "@type" => "Article",
            "headline" => $study['title'] ?? '',
            "description" => $study['summary'] ?? '',
            "image" => $study['featured_image'] ? url($study['featured_image']) : '',
            "author" => [
                "@type" => "Organization",
                "name" => SITE_NAME
            ],
            "publisher" => [
                "@type" => "Organization",
                "name" => SITE_NAME,
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => url('assets/images/logo.svg')
                ]
            ],
            "datePublished" => $study['created_at'] ?? date('Y-m-d'),
            "measuredValue" => [
                "@type" => "MeasuredValue",
                "name" => $study['metric_name'] ?? 'Results',
                "value" => $study['metric_value'] ?? '',
                "unitCode" => "X"
            ]
        ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }

    /**
     * Event/Webinar Schema
     */
    public static function eventSchema($eventName, $description, $startDate, $endDate = null, $image = '') {
        return json_encode([
            "@context" => "https://schema.org",
            "@type" => "Event",
            "name" => $eventName,
            "description" => $description,
            "image" => $image ?: url('assets/images/og-default.jpg'),
            "startDate" => $startDate,
            "endDate" => $endDate ?: $startDate,
            "eventStatus" => "https://schema.org/EventScheduled",
            "eventAttendanceMode" => "https://schema.org/OnlineEventAttendanceMode",
            "organizer" => [
                "@type" => "Organization",
                "name" => SITE_NAME,
                "url" => SITE_URL
            ],
            "location" => [
                "@type" => "VirtualLocation",
                "url" => SITE_URL
            ]
        ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }

    /**
     * AggregateRating Schema
     */
    public static function aggregateRatingSchema($ratingValue, $ratingCount, $reviewCount = 0) {
        return json_encode([
            "@context" => "https://schema.org",
            "@type" => "AggregateRating",
            "ratingValue" => $ratingValue,
            "ratingCount" => $ratingCount,
            "reviewCount" => $reviewCount ?: $ratingCount,
            "bestRating" => "5",
            "worstRating" => "1"
        ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }

    /**
     * Render all schemas as <script> tags
     */
    public static function renderSchemas($schemas = []) {
        $html = '';
        foreach ($schemas as $schema) {
            if (!empty($schema)) {
                $html .= '<script type="application/ld+json">' . "\n" . $schema . "\n" . '</script>' . "\n";
            }
        }
        return $html;
    }

    private static function currentUrl() {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        return $protocol . "://" . $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?');
    }
}
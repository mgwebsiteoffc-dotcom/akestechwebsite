<?php
/**
 * SEO & AEO Helper
 * Generates meta tags, Open Graph, JSON-LD schemas
 */

class SEO {
    private static $data = [];

    /**
     * Load SEO data for a page
     */
    public static function load($pageSlug) {
        $stmt = db()->prepare("SELECT * FROM page_seo WHERE page_slug = ?");
        $stmt->execute([$pageSlug]);
        $seo = $stmt->fetch();
        
        if ($seo) {
            self::$data = $seo;
        }
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
        $ogImage = self::get('og_image', url('assets/images/og-default.jpg'));
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
            "url" => SITE_URL,
            "logo" => url('assets/images/logo.svg'),
            "description" => "Shopify Growth Platform powered by WhatsApp Automation & Performance Marketing",
            "email" => SITE_EMAIL,
            "sameAs" => [],
            "contactPoint" => [
                "@type" => "ContactPoint",
                "contactType" => "sales",
                "email" => SITE_EMAIL,
                "availableLanguage" => ["English", "Hindi"]
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
    public static function localBusinessSchema() {
        return json_encode([
            "@context" => "https://schema.org",
            "@type" => "LocalBusiness",
            "name" => SITE_NAME,
            "image" => url('assets/images/logo.svg'),
            "description" => "Shopify Growth Agency - Performance Marketing, Store Optimization & WhatsApp Automation",
            "address" => [
                "@type" => "PostalAddress",
                "streetAddress" => "Lucknow, Uttar Pradesh",
                "addressLocality" => "Lucknow",
                "addressRegion" => "UP",
                "postalCode" => "226000",
                "addressCountry" => "IN"
            ],
            "telephone" => "+91-XXXXX-XXXXX",
            "email" => SITE_EMAIL,
            "url" => SITE_URL,
            "priceRange" => "₹",
            "areaServed" => [
                "@type" => "Country",
                "name" => "India"
            ],
            "sameAs" => [
                "https://www.facebook.com/akestech",
                "https://www.linkedin.com/company/akestech",
                "https://www.instagram.com/akestech"
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
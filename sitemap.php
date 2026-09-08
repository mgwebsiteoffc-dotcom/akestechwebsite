<?php
header("Content-Type: application/xml; charset=utf-8");

$baseUrl = "https://akestech.com"; // canonical apex host (www 301s here)

/* Static-route freshness: date of the last code deploy rather than "today",
   so <lastmod> is honest. Blog/case-study rows below keep their real dates. */
$staticLastmod = date("Y-m-d", max(
    @filemtime(__DIR__ . '/index.php') ?: time(),
    @filemtime(__FILE__) ?: time()
));

/* =========================
   LOAD SYSTEM (PDO BASED)
========================= */
require_once __DIR__ . '/config/database.php';

/* =========================
   ROUTES (AUTO FROM YOUR SYSTEM)
========================= */
$routes = [
    '',
    'products/whatsapp-shopify',
    'services/shopify-growth',
    'services/performance-marketing',
    'services/shopify-operations',
    'services/automation',
    'services/technology',
    'services/ai-videos',
    'products/lead365',
    'case-studies',
    'resources',
    'resources/whatsapp-message-templates',
    'resources/roas-calculator',
    'resources/meta-ads-d2c-guide',
    'resources/shopify-speed-analyzer',
    'resources/shopify-launch-checklist',
    'blog',
    'real-estate-marketing-agency',
    'digital-marketing-company-in-lucknow',
    'shopify-development-company-in-lucknow',
    'performance-marketing-company-in-lucknow',
    'meta-ads-management-in-lucknow',
    'lead-generation-service-in-lucknow',
    'ai-automation-company-in-lucknow',
    'ecommerce-consultant-in-lucknow',
    'digital-marketing-company-in-delhi-ncr',
    'shopify-development-company-in-delhi-ncr',
    'performance-marketing-company-in-delhi-ncr',
    'meta-ads-management-in-delhi-ncr',
    'lead-generation-service-in-delhi-ncr',
    'ai-automation-company-in-delhi-ncr',
    'ecommerce-consultant-in-delhi-ncr',
    'industries/d2c-ecommerce',
    'industries/healthcare',
    'industries/education',
    'industries/automotive',
    'industries/food-and-beverage',
    'industries/saas-and-startups',
    'industries/real-estate',
    'industries/retail-and-consumer-brands',
    'blog/faqs',
    'about',
    'contact',
    'privacy-policy',
    'terms',
    'data-deletion',
    'resources/download-shopify-growth-playbook'
];

/* =========================
   LOCAL PAGES CREATED IN THE ADMIN
   (/admin/?page=local-pages) — picked up automatically
   so new city/service pages are indexed without editing this file.
========================= */
require_once __DIR__ . '/includes/local-pages.php';
foreach (array_keys(lp_slugs()) as $localSlug) {
    if (!in_array($localSlug, $routes, true)) {
        $routes[] = $localSlug;
    }
}
// switched-off pages are removed from the sitemap
$routes = array_values(array_diff($routes, lp_disabled()));

/* =========================
   SUB-SERVICE PAGES
   (includes/sub-services.php) — picked up automatically
   so new capability pages are indexed without editing this file.
========================= */
require_once __DIR__ . '/includes/sub-services.php';
foreach (array_keys(ak_sub_services()) as $subRoute) {
    if (!in_array($subRoute, $routes, true)) {
        $routes[] = $subRoute;
    }
}

/* =========================
   START XML
========================= */
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

/* =========================
   STATIC ROUTES
========================= */
foreach ($routes as $route) {

    $url = $route === '' 
        ? $baseUrl . '/' 
        : $baseUrl . '/' . $route;

    echo "<url>";
    echo "<loc>$url</loc>";
    echo "<lastmod>$staticLastmod</lastmod>";
    echo "<changefreq>weekly</changefreq>";
    echo "<priority>" . ($route === '' ? '1.0' : '0.8') . "</priority>";
    echo "</url>";
}

/* =========================
   BLOG DYNAMIC (CORRECT TABLE + PDO)
========================= */
try {

    $stmt = db()->prepare("
        SELECT slug, updated_at, published_at 
        FROM blog_posts 
        WHERE status = 'published'
    ");

    $stmt->execute();
    $blogs = $stmt->fetchAll();

    foreach ($blogs as $row) {

        $slug = trim($row['slug']);
        if (!$slug) continue;

        $lastmod = $row['updated_at'] 
            ?? $row['published_at'] 
            ?? date("Y-m-d");

        $lastmod = date("Y-m-d", strtotime($lastmod));

        echo "<url>";
        echo "<loc>$baseUrl/blog/$slug</loc>";
        echo "<lastmod>$lastmod</lastmod>";
        echo "<changefreq>weekly</changefreq>";
        echo "<priority>0.9</priority>";
        echo "</url>";
    }

} catch (Exception $e) {
    // fail silently (important for SEO)
}

/* =========================
   CASE STUDIES (IF TABLE EXISTS)
========================= */
try {

    $stmt = db()->prepare("
        SELECT slug, updated_at 
        FROM case_studies 
        WHERE status = 'published'
    ");

    $stmt->execute();
    $cases = $stmt->fetchAll();

    foreach ($cases as $row) {

        $slug = trim($row['slug']);
        if (!$slug) continue;

        $lastmod = $row['updated_at'] ?? date("Y-m-d");

        echo "<url>";
        echo "<loc>$baseUrl/case-studies/$slug</loc>";
        echo "<lastmod>" . date("Y-m-d", strtotime($lastmod)) . "</lastmod>";
        echo "<changefreq>monthly</changefreq>";
        echo "<priority>0.8</priority>";
        echo "</url>";
    }

} catch (Exception $e) {
    // ignore if table doesn't exist
}

echo "</urlset>";
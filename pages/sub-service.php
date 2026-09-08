<?php
/**
 * Sub-service pages — the specific capabilities listed under each main service.
 *
 * One template serves every sub-service route; content comes from
 * includes/sub-services.php. Canonical slugs match their headings exactly;
 * three legacy slugs 301-redirect to their new canonicals (see $redirects301
 * in index.php) so no indexed URL or backlink breaks.
 *
 * Each page renders through the shared service renderer, so it inherits the
 * ak-* layout, the AEO direct-answer block, the process timeline, the related
 * links and the full JSON-LD graph:
 *   BreadcrumbList + Service + HowTo (process) + FAQPage
 */

if (!class_exists('SEO')) {
    require __DIR__ . '/../index.php';
    return;
}

require_once __DIR__ . '/../includes/sub-services.php';

// Route comes from index.php when included by the router; fall back to ?route=
// when this page is opened directly.
$route = (isset($route) && $route !== '') ? $route : (isset($_GET['route']) ? trim($_GET['route'], '/') : '');

$all = ak_sub_services();
$sp  = $all[$route] ?? null;

// Unknown sub-service slug -> real 404, never a blank page.
if (!$sp) {
    http_response_code(404);
    $pageTitle = 'Page Not Found';
    $metaDescription = 'The page you are looking for does not exist.';
    require_once __DIR__ . '/404.php';
    return;
}

/* ------------------------------------------------------------------
   Breadcrumb: Home > Services > Parent service > This sub-service
   Overrides the renderer's default two-level trail.
   ------------------------------------------------------------------ */
$sp['breadcrumbs'] = [
    ['name' => 'Home',     'url' => url('/')],
    ['name' => 'Services', 'url' => url('services/shopify-growth')],
    ['name' => $sp['parentName'],  'url' => url($sp['parentRoute'])],
    ['name' => $sp['eyebrow'],     'url' => url($route)],
];

require __DIR__ . '/../includes/components/service-page.php';

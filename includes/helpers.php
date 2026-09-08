<?php
/**
 * Helper Functions
 */

/**
 * Sanitize input
 */
function clean($input) {
    if (is_array($input)) {
        return array_map('clean', $input);
    }

    $value = trim((string) $input);
    $value = html_entity_decode($value, ENT_QUOTES | ENT_HTML5, 'UTF-8');

    return htmlspecialchars(strip_tags($value), ENT_QUOTES, 'UTF-8');
}

/**
 * Generate URL
 */
function url($path = '') {
    $base = rtrim(SITE_URL, '/');
    $path = ltrim($path, '/');
    return $path ? "{$base}/{$path}" : $base;
}

/**
 * Asset URL
 */
function asset($path) {
    return url("assets/{$path}");
}

/**
 * Upload URL
 */
function upload($path) {
    return url("uploads/{$path}");
}

/**
 * Active nav class
 */
function isActive($path) {
    $route = isset($_GET['route']) ? trim($_GET['route'], '/') : '';
    if ($path === '/' && $route === '') return 'text-indigo-600 font-semibold';
    if ($path !== '/' && strpos($route, ltrim($path, '/')) === 0) return 'text-indigo-600 font-semibold';
    return 'text-gray-700 hover:text-indigo-600';
}

/**
 * Truncate text
 */
function truncate($text, $length = 150) {
    if (strlen($text) <= $length) return $text;
    return substr($text, 0, $length) . '...';
}

/**
 * Format date
 */
function formatDate($date) {
    return date('M d, Y', strtotime($date));
}

/**
 * Generate slug
 */
function slugify($text) {
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    $text = preg_replace('~[^-\w]+~', '', $text);
    $text = trim($text, '-');
    $text = preg_replace('~-+~', '-', $text);
    return strtolower($text);
}

/**
 * CSRF Token
 */
function csrfToken() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function csrfField() {
    return '<input type="hidden" name="csrf_token" value="' . csrfToken() . '">';
}

function verifyCsrf() {
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die('Invalid CSRF token');
    }
}

/**
 * Flash messages
 */
function setFlash($type, $message) {
    $_SESSION['flash'] = ['type' => $type, 'message' => $message];
}

function getFlash() {
    if (isset($_SESSION['flash'])) {
        $flash = $_SESSION['flash'];
        unset($_SESSION['flash']);
        return $flash;
    }
    return null;
}

/**
 * Get FAQs for a page
 */
function getFaqs($pageSlug) {
    $stmt = db()->prepare("SELECT question, answer FROM faqs WHERE page_slug = ? AND is_active = 1 ORDER BY sort_order ASC");
    $stmt->execute([$pageSlug]);
    return $stmt->fetchAll();
}

/**
 * Get featured blog posts
 */
function getFeaturedPosts($limit = 3) {
    $stmt = db()->prepare("SELECT bp.*, bc.name as category_name, bc.slug as category_slug 
                           FROM blog_posts bp 
                           LEFT JOIN blog_categories bc ON bp.category_id = bc.id 
                           WHERE bp.status = 'published' 
                           ORDER BY bp.is_featured DESC, bp.published_at DESC 
                           LIMIT ?");
    $stmt->execute([$limit]);
    return $stmt->fetchAll();
}

/**
 * Get featured case studies
 */
function getFeaturedCaseStudies($limit = 3) {
    $stmt = db()->prepare("SELECT * FROM case_studies WHERE status = 'published' ORDER BY is_featured DESC, sort_order ASC LIMIT ?");
    $stmt->execute([$limit]);
    return $stmt->fetchAll();
}

/**
 * Render component
 */
function component($name, $data = []) {
    extract($data);
    include __DIR__ . "/components/{$name}.php";
}

/**
 * Safe FAQ lookup — never throws if the faqs table is unavailable.
 * Falls back to an optional array of static FAQs supplied by the page.
 */
function ak_faqs($pageSlug, $fallback = []) {
    try {
        $faqs = getFaqs($pageSlug);
        if (is_array($faqs) && !empty($faqs)) {
            $out = [];
            foreach ($faqs as $f) {
                if (!empty($f['question'])) {
                    $out[] = ['question' => $f['question'], 'answer' => $f['answer'] ?? ''];
                }
            }
            if (!empty($out)) return $out;
        }
    } catch (Throwable $e) {
        /* table missing or DB down — fall through to static FAQs */
    }
    return is_array($fallback) ? $fallback : [];
}


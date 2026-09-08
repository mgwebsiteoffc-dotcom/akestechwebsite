<?php
/**
 * Admin Panel Router
 */
session_start();

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../includes/helpers.php';
require_once __DIR__ . '/../includes/seo.php';
require_once __DIR__ . '/includes/auth.php';

$page = $_GET['page'] ?? 'dashboard';

// Handle logout
if ($page === 'logout') {
    logoutAdmin();
    header('Location: /admin/?page=login');
    exit;
}

// Login page (no auth required)
if ($page === 'login') {
    require_once __DIR__ . '/login.php';
    exit;
}

// All other pages require login
requireLogin();

// Route admin pages
switch ($page) {
    case 'dashboard':
    case '':
        require_once __DIR__ . '/dashboard.php';
        break;
    case 'blogs':
        require_once __DIR__ . '/blogs.php';
        break;
    case 'blog-edit':
        require_once __DIR__ . '/blog-edit.php';
        break;
    case 'case-studies':
        require_once __DIR__ . '/case-studies.php';
        break;
    case 'case-study-edit':
        require_once __DIR__ . '/case-study-edit.php';
        break;
    case 'faqs':
        require_once __DIR__ . '/faqs.php';
        break;
    case 'faq-edit':
        require_once __DIR__ . '/faq-edit.php';
        break;
    case 'leads':
        require_once __DIR__ . '/leads.php';
        break;
    case 'local-pages':
        require_once __DIR__ . '/local-pages.php';
        break;
    default:
        $pageTitle = '404';
        $adminContent = '<div class="text-center py-16"><svg class="w-10 h-10 mx-auto mb-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35"/></svg><h2 class="text-xl font-semibold text-gray-900">Page not found</h2><a href="/admin/" class="text-primary-600 text-sm mt-4 inline-block">Back to Dashboard</a></div>';
        include __DIR__ . '/includes/admin-layout.php';
        break;
}
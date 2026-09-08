<?php
/**
 * Admin Sidebar Navigation
 */
$currentPage = $_GET['page'] ?? 'dashboard';
function sidebarActive($page) {
    $current = $_GET['page'] ?? 'dashboard';
    return $current === $page ? 'active' : '';
}
?>

<!-- Overlay for mobile -->
<div id="sidebar-overlay" class="hidden fixed inset-0 bg-black/50 z-40 lg:hidden"></div>

<!-- Sidebar -->
<aside id="admin-sidebar" class="fixed left-0 top-0 bottom-0 w-64 bg-white border-r border-gray-200 z-50 transform -translate-x-full lg:translate-x-0 transition-transform duration-200">
    <div class="flex flex-col h-full">
        <!-- Logo -->
        <div class="px-6 py-5 border-b border-gray-100">
            <a href="/admin/" class="flex items-center space-x-2">
                <div class="w-8 h-8 bg-primary-600 rounded-lg flex items-center justify-center">
                    <span class="text-white font-bold text-sm">G</span>
                </div>
                <span class="text-lg font-bold text-gray-900">Growth<span class="text-primary-600">Scale</span></span>
            </a>
            <p class="text-xs text-gray-400 mt-1">Admin Panel</p>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 px-3 py-4 space-y-1 overflow-y-auto">
            <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Main</p>

            <a href="/admin/" class="sidebar-link <?= sidebarActive('dashboard') ?> flex items-center gap-3 px-3 py-2.5 text-sm rounded-lg transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                Dashboard
            </a>

            <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mt-6 mb-2">Content</p>

            <a href="/admin/?page=blogs" class="sidebar-link <?= sidebarActive('blogs') ?> <?= sidebarActive('blog-edit') ?> flex items-center gap-3 px-3 py-2.5 text-sm rounded-lg transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                Blog Posts
            </a>

            <a href="/admin/?page=case-studies" class="sidebar-link <?= sidebarActive('case-studies') ?> <?= sidebarActive('case-study-edit') ?> flex items-center gap-3 px-3 py-2.5 text-sm rounded-lg transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                Case Studies
            </a>

            <a href="/admin/?page=faqs" class="sidebar-link <?= sidebarActive('faqs') ?> <?= sidebarActive('faq-edit') ?> flex items-center gap-3 px-3 py-2.5 text-sm rounded-lg transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                FAQs
            </a>

            <a href="/admin/?page=local-pages" class="sidebar-link <?= sidebarActive('local-pages') ?> flex items-center gap-3 px-3 py-2.5 text-sm rounded-lg transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                Local Pages
            </a>

            <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mt-6 mb-2">CRM</p>

            <a href="/admin/?page=leads" class="sidebar-link <?= sidebarActive('leads') ?> flex items-center gap-3 px-3 py-2.5 text-sm rounded-lg transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                Leads
            </a>

            <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mt-6 mb-2">Account</p>

            <a href="/admin/?page=logout" class="sidebar-link flex items-center gap-3 px-3 py-2.5 text-sm rounded-lg transition-colors text-red-600 hover:bg-red-50">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                Logout
            </a>
        </nav>
    </div>
</aside>
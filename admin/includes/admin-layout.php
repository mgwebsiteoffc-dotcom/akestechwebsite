<?php
/**
 * Admin Layout Wrapper
 * $pageTitle — page title
 * $adminContent — main content HTML
 */
require_once __DIR__ . '/admin-icons.php';
$currentAdmin = adminUser();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'Admin' ?> — <?= SITE_NAME ?> Admin</title>
    <meta name="robots" content="noindex, nofollow">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: { 50:'#eef2ff',100:'#e0e7ff',200:'#c7d2fe',300:'#a5b4fc',400:'#818cf8',500:'#6366f1',600:'#4f46e5',700:'#4338ca',800:'#3730a3',900:'#312e81' }
                    },
                    fontFamily: { sans: ['Inter','system-ui','sans-serif'] }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .sidebar-link.active { background-color: #eef2ff; color: #4f46e5; font-weight: 600; }
        .sidebar-link:hover { background-color: #f9fafb; }
        /* icon replacement for emoji / unicode pictographs — inherits text colour */
        .ad-ico { display: inline-block; vertical-align: -0.14em; flex: none; }
        a .ad-ico, button .ad-ico { vertical-align: -0.12em; }
        a:hover .ad-ico { opacity: .75; }
        .ad-ico-block { display: block; margin: 0 auto 8px; }
    </style>
</head>
<body class="font-sans bg-gray-50 text-gray-900 antialiased">
    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <?php include __DIR__ . '/sidebar.php'; ?>

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col lg:ml-64">
            
            <!-- Top Bar -->
            <header class="bg-white border-b border-gray-200 px-4 lg:px-8 py-4 flex items-center justify-between sticky top-0 z-30">
                <!-- Mobile menu btn -->
                <button id="sidebar-toggle" class="lg:hidden p-2 rounded-lg hover:bg-gray-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>

                <h1 class="text-lg font-semibold text-gray-900"><?= $pageTitle ?? 'Dashboard' ?></h1>

                <div class="flex items-center gap-4">
                    <a href="<?= SITE_URL ?>" target="_blank" class="text-sm text-gray-500 hover:text-gray-700 hidden sm:block">View Site <?= ad_icon('external', 14) ?></a>
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center">
                            <span class="text-xs font-bold text-primary-600"><?= strtoupper(substr($currentAdmin['full_name'] ?? 'A', 0, 1)) ?></span>
                        </div>
                        <span class="text-sm font-medium text-gray-700 hidden sm:block"><?= clean($currentAdmin['full_name'] ?? 'Admin') ?></span>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 p-4 lg:p-8">
                <!-- Flash Messages -->
                <?php $flash = getFlash(); if ($flash): ?>
                <div class="mb-6 px-4 py-3 rounded-lg text-sm font-medium <?= $flash['type'] === 'success' ? 'bg-green-50 text-green-800 border border-green-200' : 'bg-red-50 text-red-800 border border-red-200' ?>">
                    <?= $flash['message'] ?>
                </div>
                <?php endif; ?>

                <?= $adminContent ?? '' ?>
            </main>

            <!-- Footer -->
            <footer class="border-t border-gray-200 px-4 lg:px-8 py-4">
                <p class="text-xs text-gray-400">&copy; <?= date('Y') ?> <?= SITE_NAME ?> Admin Panel</p>
            </footer>
        </div>
    </div>

    <script>
        // Mobile sidebar toggle
        const sidebarToggle = document.getElementById('sidebar-toggle');
        const sidebar = document.getElementById('admin-sidebar');
        const overlay = document.getElementById('sidebar-overlay');

        if (sidebarToggle && sidebar) {
            sidebarToggle.addEventListener('click', () => {
                sidebar.classList.toggle('-translate-x-full');
                overlay.classList.toggle('hidden');
            });
            if (overlay) {
                overlay.addEventListener('click', () => {
                    sidebar.classList.add('-translate-x-full');
                    overlay.classList.add('hidden');
                });
            }
        }

        // Delete confirmation
        document.querySelectorAll('[data-confirm]').forEach(el => {
            el.addEventListener('click', (e) => {
                if (!confirm(el.dataset.confirm || 'Are you sure?')) {
                    e.preventDefault();
                }
            });
        });
    </script>
</body>
</html>
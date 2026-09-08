<?php
/**
 * Admin Dashboard
 */
$pageTitle = 'Dashboard';

// Stats
$totalLeads = db()->query("SELECT COUNT(*) FROM leads")->fetchColumn();
$newLeads = db()->query("SELECT COUNT(*) FROM leads WHERE status = 'new'")->fetchColumn();
$totalPosts = db()->query("SELECT COUNT(*) FROM blog_posts")->fetchColumn();
$publishedPosts = db()->query("SELECT COUNT(*) FROM blog_posts WHERE status = 'published'")->fetchColumn();
$totalCaseStudies = db()->query("SELECT COUNT(*) FROM case_studies WHERE status = 'published'")->fetchColumn();
$totalFaqs = db()->query("SELECT COUNT(*) FROM faqs WHERE is_active = 1")->fetchColumn();

// Recent leads
$recentLeads = db()->query("SELECT * FROM leads ORDER BY created_at DESC LIMIT 5")->fetchAll();

// Recent posts
$recentPosts = db()->query("SELECT * FROM blog_posts ORDER BY created_at DESC LIMIT 5")->fetchAll();

ob_start();
?>

<!-- Stats Grid -->
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6 mb-8">
    <!-- Leads -->
    <div class="bg-white p-5 rounded-xl border border-gray-200">
        <div class="flex items-center justify-between mb-3">
            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            </div>
            <span class="text-xs font-medium text-blue-600 bg-blue-50 px-2 py-1 rounded-full"><?= $newLeads ?> new</span>
        </div>
        <p class="text-2xl font-bold text-gray-900"><?= $totalLeads ?></p>
        <p class="text-sm text-gray-500">Total Leads</p>
    </div>

    <!-- Blog Posts -->
    <div class="bg-white p-5 rounded-xl border border-gray-200">
        <div class="flex items-center justify-between mb-3">
            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
            </div>
        </div>
        <p class="text-2xl font-bold text-gray-900"><?= $publishedPosts ?></p>
        <p class="text-sm text-gray-500">Published Posts</p>
    </div>

    <!-- Case Studies -->
    <div class="bg-white p-5 rounded-xl border border-gray-200">
        <div class="flex items-center justify-between mb-3">
            <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            </div>
        </div>
        <p class="text-2xl font-bold text-gray-900"><?= $totalCaseStudies ?></p>
        <p class="text-sm text-gray-500">Case Studies</p>
    </div>

    <!-- FAQs -->
    <div class="bg-white p-5 rounded-xl border border-gray-200">
        <div class="flex items-center justify-between mb-3">
            <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center">
                <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
        </div>
        <p class="text-2xl font-bold text-gray-900"><?= $totalFaqs ?></p>
        <p class="text-sm text-gray-500">Active FAQs</p>
    </div>
</div>

<!-- Recent Data -->
<div class="grid lg:grid-cols-2 gap-6">
    <!-- Recent Leads -->
    <div class="bg-white rounded-xl border border-gray-200">
        <div class="px-5 py-4 border-b border-gray-100 flex items-center justify-between">
            <h2 class="text-sm font-semibold text-gray-900">Recent Leads</h2>
            <a href="/admin/?page=leads" class="text-xs text-primary-600 hover:text-primary-700 font-medium">View All →</a>
        </div>
        <div class="divide-y divide-gray-100">
            <?php if (empty($recentLeads)): ?>
                <p class="p-5 text-sm text-gray-500 text-center">No leads yet.</p>
            <?php else: ?>
                <?php foreach ($recentLeads as $lead): ?>
                <div class="px-5 py-3 flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-900"><?= clean($lead['name']) ?></p>
                        <p class="text-xs text-gray-500"><?= clean($lead['email']) ?></p>
                    </div>
                    <div class="text-right">
                        <span class="inline-block px-2 py-0.5 text-xs font-medium rounded-full
                            <?= $lead['status'] === 'new' ? 'bg-blue-100 text-blue-700' : 
                               ($lead['status'] === 'contacted' ? 'bg-yellow-100 text-yellow-700' : 
                               ($lead['status'] === 'converted' ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-600')) ?>">
                            <?= ucfirst($lead['status']) ?>
                        </span>
                        <p class="text-xs text-gray-400 mt-1"><?= formatDate($lead['created_at']) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>

    <!-- Recent Posts -->
    <div class="bg-white rounded-xl border border-gray-200">
        <div class="px-5 py-4 border-b border-gray-100 flex items-center justify-between">
            <h2 class="text-sm font-semibold text-gray-900">Recent Blog Posts</h2>
            <a href="/admin/?page=blogs" class="text-xs text-primary-600 hover:text-primary-700 font-medium">View All →</a>
        </div>
        <div class="divide-y divide-gray-100">
            <?php if (empty($recentPosts)): ?>
                <p class="p-5 text-sm text-gray-500 text-center">No posts yet.</p>
            <?php else: ?>
                <?php foreach ($recentPosts as $post): ?>
                <div class="px-5 py-3 flex items-center justify-between">
                    <div class="min-w-0 flex-1 mr-3">
                        <p class="text-sm font-medium text-gray-900 truncate"><?= clean($post['title']) ?></p>
                        <p class="text-xs text-gray-500"><?= formatDate($post['created_at']) ?></p>
                    </div>
                    <span class="inline-block px-2 py-0.5 text-xs font-medium rounded-full flex-shrink-0
                        <?= $post['status'] === 'published' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' ?>">
                        <?= ucfirst($post['status']) ?>
                    </span>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="mt-8">
    <h2 class="text-sm font-semibold text-gray-900 mb-4">Quick Actions</h2>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        <a href="/admin/?page=blog-edit" class="p-4 bg-white border border-gray-200 rounded-xl hover:border-primary-300 hover:shadow-sm transition-all text-center">
            <span class="text-2xl block mb-2">✍️</span>
            <p class="text-sm font-medium text-gray-900">New Blog Post</p>
        </a>
        <a href="/admin/?page=case-study-edit" class="p-4 bg-white border border-gray-200 rounded-xl hover:border-primary-300 hover:shadow-sm transition-all text-center">
            <span class="text-2xl block mb-2">📊</span>
            <p class="text-sm font-medium text-gray-900">New Case Study</p>
        </a>
        <a href="/admin/?page=faq-edit" class="p-4 bg-white border border-gray-200 rounded-xl hover:border-primary-300 hover:shadow-sm transition-all text-center">
            <span class="text-2xl block mb-2">❓</span>
            <p class="text-sm font-medium text-gray-900">New FAQ</p>
        </a>
        <a href="/admin/?page=leads" class="p-4 bg-white border border-gray-200 rounded-xl hover:border-primary-300 hover:shadow-sm transition-all text-center">
            <span class="text-2xl block mb-2">📥</span>
            <p class="text-sm font-medium text-gray-900">View Leads</p>
        </a>
    </div>
</div>

<?php
$adminContent = ob_get_clean();
include __DIR__ . '/includes/admin-layout.php';
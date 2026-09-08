<?php
/**
 * Admin: Blog Posts Listing
 */
$pageTitle = 'Blog Posts';

// Handle delete
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    verifyCsrf();
    $stmt = db()->prepare("DELETE FROM blog_posts WHERE id = ?");
    $stmt->execute([$_GET['delete']]);
    setFlash('success', 'Blog post deleted successfully.');
    header('Location: /admin/?page=blogs');
    exit;
}

// Fetch posts
$statusFilter = clean($_GET['status'] ?? '');
$where = '';
$params = [];
if ($statusFilter) {
    $where = "WHERE bp.status = ?";
    $params[] = $statusFilter;
}

$posts = db()->prepare("SELECT bp.*, bc.name as category_name 
                         FROM blog_posts bp 
                         LEFT JOIN blog_categories bc ON bp.category_id = bc.id 
                         {$where}
                         ORDER BY bp.created_at DESC");
$posts->execute($params);
$posts = $posts->fetchAll();

ob_start();
?>

<!-- Header -->
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
    <div class="flex items-center gap-3">
        <select onchange="window.location.href='/admin/?page=blogs&status='+this.value" class="text-sm border border-gray-200 rounded-lg px-3 py-2 bg-white">
            <option value="" <?= !$statusFilter ? 'selected' : '' ?>>All Status</option>
            <option value="published" <?= $statusFilter === 'published' ? 'selected' : '' ?>>Published</option>
            <option value="draft" <?= $statusFilter === 'draft' ? 'selected' : '' ?>>Draft</option>
        </select>
        <span class="text-sm text-gray-500"><?= count($posts) ?> posts</span>
    </div>
    <a href="/admin/?page=blog-edit" class="inline-flex items-center px-4 py-2.5 text-sm font-semibold text-white bg-primary-600 rounded-lg hover:bg-primary-700 transition-colors">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
        New Post
    </a>
</div>

<!-- Table -->
<div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead>
                <tr class="bg-gray-50 border-b border-gray-200">
                    <th class="text-left px-5 py-3 font-semibold text-gray-600">Title</th>
                    <th class="text-left px-5 py-3 font-semibold text-gray-600 hidden md:table-cell">Category</th>
                    <th class="text-left px-5 py-3 font-semibold text-gray-600">Status</th>
                    <th class="text-left px-5 py-3 font-semibold text-gray-600 hidden lg:table-cell">Date</th>
                    <th class="text-right px-5 py-3 font-semibold text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <?php if (empty($posts)): ?>
                <tr>
                    <td colspan="5" class="px-5 py-8 text-center text-gray-500">No blog posts found. <a href="/admin/?page=blog-edit" class="text-primary-600 font-medium">Create one →</a></td>
                </tr>
                <?php else: ?>
                    <?php foreach ($posts as $post): ?>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-5 py-3">
                            <div class="flex items-center gap-3">
                                <?php if ($post['featured_image']): ?>
                                    <img src="<?= SITE_URL . '/' . $post['featured_image'] ?>" alt="" class="w-10 h-10 rounded-lg object-cover flex-shrink-0">
                                <?php else: ?>
                                    <div class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center flex-shrink-0"><span class="text-sm">📝</span></div>
                                <?php endif; ?>
                                <div class="min-w-0">
                                    <p class="font-medium text-gray-900 truncate max-w-xs"><?= clean($post['title']) ?></p>
                                    <p class="text-xs text-gray-400 truncate">/blog/<?= $post['slug'] ?></p>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-3 hidden md:table-cell">
                            <span class="text-gray-600"><?= clean($post['category_name'] ?? '—') ?></span>
                        </td>
                        <td class="px-5 py-3">
                            <span class="inline-block px-2.5 py-1 text-xs font-medium rounded-full
                                <?= $post['status'] === 'published' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' ?>">
                                <?= ucfirst($post['status']) ?>
                            </span>
                        </td>
                        <td class="px-5 py-3 hidden lg:table-cell text-gray-500">
                            <?= formatDate($post['published_at'] ?? $post['created_at']) ?>
                        </td>
                        <td class="px-5 py-3 text-right">
                            <div class="flex items-center justify-end gap-2">
                                <a href="/admin/?page=blog-edit&id=<?= $post['id'] ?>" class="p-1.5 text-gray-400 hover:text-primary-600 rounded-lg hover:bg-gray-100 transition-colors" title="Edit">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                </a>
                                <?php if ($post['status'] === 'published'): ?>
                                <a href="<?= SITE_URL ?>/blog/<?= $post['slug'] ?>" target="_blank" class="p-1.5 text-gray-400 hover:text-green-600 rounded-lg hover:bg-gray-100 transition-colors" title="View">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                                </a>
                                <?php endif; ?>
                                <a href="/admin/?page=blogs&delete=<?= $post['id'] ?>&csrf_token=<?= csrfToken() ?>" data-confirm="Are you sure you want to delete this post?" class="p-1.5 text-gray-400 hover:text-red-600 rounded-lg hover:bg-gray-100 transition-colors" title="Delete">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php
$adminContent = ob_get_clean();
include __DIR__ . '/includes/admin-layout.php';
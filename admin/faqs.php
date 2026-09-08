<?php
/**
 * Admin: FAQs Listing
 */
$pageTitle = 'FAQs';

// Handle delete
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    verifyCsrf();
    db()->prepare("DELETE FROM faqs WHERE id = ?")->execute([$_GET['delete']]);
    setFlash('success', 'FAQ deleted.');
    header('Location: /admin/?page=faqs');
    exit;
}

// Filter by page
$pageFilter = clean($_GET['filter'] ?? '');
$where = '';
$params = [];
if ($pageFilter) {
    $where = "WHERE page_slug = ?";
    $params[] = $pageFilter;
}

$faqs = db()->prepare("SELECT * FROM faqs {$where} ORDER BY page_slug ASC, sort_order ASC");
$faqs->execute($params);
$faqs = $faqs->fetchAll();

// Get unique page slugs for filter
$pages = db()->query("SELECT DISTINCT page_slug FROM faqs ORDER BY page_slug ASC")->fetchAll(PDO::FETCH_COLUMN);

ob_start();
?>

<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
    <div class="flex items-center gap-3">
        <select onchange="window.location.href='/admin/?page=faqs&filter='+this.value" class="text-sm border border-gray-200 rounded-lg px-3 py-2 bg-white">
            <option value="">All Pages</option>
            <?php foreach ($pages as $p): ?>
            <option value="<?= $p ?>" <?= $pageFilter === $p ? 'selected' : '' ?>><?= $p ?></option>
            <?php endforeach; ?>
        </select>
        <span class="text-sm text-gray-500"><?= count($faqs) ?> FAQs</span>
    </div>
    <a href="/admin/?page=faq-edit" class="inline-flex items-center px-4 py-2.5 text-sm font-semibold text-white bg-primary-600 rounded-lg hover:bg-primary-700 transition-colors">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
        New FAQ
    </a>
</div>

<div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead>
                <tr class="bg-gray-50 border-b border-gray-200">
                    <th class="text-left px-5 py-3 font-semibold text-gray-600 w-8">#</th>
                    <th class="text-left px-5 py-3 font-semibold text-gray-600">Question</th>
                    <th class="text-left px-5 py-3 font-semibold text-gray-600 hidden md:table-cell">Page</th>
                    <th class="text-left px-5 py-3 font-semibold text-gray-600 hidden md:table-cell">Status</th>
                    <th class="text-right px-5 py-3 font-semibold text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <?php if (empty($faqs)): ?>
                <tr><td colspan="5" class="px-5 py-8 text-center text-gray-500">No FAQs found. <a href="/admin/?page=faq-edit" class="text-primary-600 font-medium">Add one <?= ad_icon('arrow-right', 14) ?></a></td></tr>
                <?php else: ?>
                    <?php foreach ($faqs as $faq): ?>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-5 py-3 text-gray-400"><?= $faq['sort_order'] ?></td>
                        <td class="px-5 py-3">
                            <p class="font-medium text-gray-900 truncate max-w-md"><?= clean($faq['question']) ?></p>
                        </td>
                        <td class="px-5 py-3 hidden md:table-cell">
                            <span class="px-2 py-0.5 text-xs bg-gray-100 text-gray-600 rounded-full"><?= clean($faq['page_slug']) ?></span>
                        </td>
                        <td class="px-5 py-3 hidden md:table-cell">
                            <span class="px-2 py-0.5 text-xs rounded-full <?= $faq['is_active'] ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' ?>">
                                <?= $faq['is_active'] ? 'Active' : 'Inactive' ?>
                            </span>
                        </td>
                        <td class="px-5 py-3 text-right">
                            <div class="flex items-center justify-end gap-2">
                                <a href="/admin/?page=faq-edit&id=<?= $faq['id'] ?>" class="p-1.5 text-gray-400 hover:text-primary-600 rounded-lg hover:bg-gray-100" title="Edit">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                </a>
                                <a href="/admin/?page=faqs&delete=<?= $faq['id'] ?>&csrf_token=<?= csrfToken() ?>" data-confirm="Delete this FAQ?" class="p-1.5 text-gray-400 hover:text-red-600 rounded-lg hover:bg-gray-100" title="Delete">
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
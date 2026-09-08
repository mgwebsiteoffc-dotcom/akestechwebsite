<?php
/**
 * Admin: Case Studies Listing
 */
$pageTitle = 'Case Studies';

// Handle delete
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    verifyCsrf();
    $stmt = db()->prepare("DELETE FROM case_studies WHERE id = ?");
    $stmt->execute([$_GET['delete']]);
    setFlash('success', 'Case study deleted.');
    header('Location: /admin/?page=case-studies');
    exit;
}

$studies = db()->query("SELECT * FROM case_studies ORDER BY sort_order ASC, created_at DESC")->fetchAll();

ob_start();
?>

<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
    <span class="text-sm text-gray-500"><?= count($studies) ?> case studies</span>
    <a href="/admin/?page=case-study-edit" class="inline-flex items-center px-4 py-2.5 text-sm font-semibold text-white bg-primary-600 rounded-lg hover:bg-primary-700 transition-colors">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
        New Case Study
    </a>
</div>

<div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead>
                <tr class="bg-gray-50 border-b border-gray-200">
                    <th class="text-left px-5 py-3 font-semibold text-gray-600">Title</th>
                    <th class="text-left px-5 py-3 font-semibold text-gray-600 hidden md:table-cell">Client</th>
                    <th class="text-left px-5 py-3 font-semibold text-gray-600 hidden md:table-cell">Industry</th>
                    <th class="text-left px-5 py-3 font-semibold text-gray-600">Status</th>
                    <th class="text-right px-5 py-3 font-semibold text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <?php if (empty($studies)): ?>
                <tr><td colspan="5" class="px-5 py-8 text-center text-gray-500">No case studies yet. <a href="/admin/?page=case-study-edit" class="text-primary-600 font-medium">Create one <?= ad_icon('arrow-right', 14) ?></a></td></tr>
                <?php else: ?>
                    <?php foreach ($studies as $s): ?>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-5 py-3">
                            <p class="font-medium text-gray-900 truncate max-w-xs"><?= clean($s['title']) ?></p>
                        </td>
                        <td class="px-5 py-3 hidden md:table-cell text-gray-600"><?= clean($s['client_name'] ?? '—') ?></td>
                        <td class="px-5 py-3 hidden md:table-cell text-gray-600"><?= clean($s['industry'] ?? '—') ?></td>
                        <td class="px-5 py-3">
                            <span class="px-2.5 py-1 text-xs font-medium rounded-full <?= $s['status'] === 'published' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' ?>"><?= ucfirst($s['status']) ?></span>
                        </td>
                        <td class="px-5 py-3 text-right">
                            <div class="flex items-center justify-end gap-2">
                                <a href="/admin/?page=case-study-edit&id=<?= $s['id'] ?>" class="p-1.5 text-gray-400 hover:text-primary-600 rounded-lg hover:bg-gray-100" title="Edit">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                </a>
                                <a href="/admin/?page=case-studies&delete=<?= $s['id'] ?>&csrf_token=<?= csrfToken() ?>" data-confirm="Delete this case study?" class="p-1.5 text-gray-400 hover:text-red-600 rounded-lg hover:bg-gray-100" title="Delete">
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
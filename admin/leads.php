<?php
/**
 * Admin: Leads CRM
 */
$pageTitle = 'Leads';

// Handle status update
if (isset($_GET['update_status']) && is_numeric($_GET['update_status'])) {
    $newStatus = clean($_GET['set_status'] ?? '');
    $validStatuses = ['new', 'contacted', 'qualified', 'converted', 'closed'];
    if (in_array($newStatus, $validStatuses)) {
        db()->prepare("UPDATE leads SET status = ? WHERE id = ?")->execute([$newStatus, $_GET['update_status']]);
        setFlash('success', 'Lead status updated.');
        header('Location: /admin/?page=leads');
        exit;
    }
}

// Handle delete
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    verifyCsrf();
    db()->prepare("DELETE FROM leads WHERE id = ?")->execute([$_GET['delete']]);
    setFlash('success', 'Lead deleted.');
    header('Location: /admin/?page=leads');
    exit;
}

// Filters
$statusFilter = clean($_GET['status'] ?? '');
$typeFilter = clean($_GET['type'] ?? '');
$where = "WHERE 1=1";
$params = [];

if ($statusFilter) {
    $where .= " AND status = ?";
    $params[] = $statusFilter;
}
if ($typeFilter) {
    $where .= " AND form_type = ?";
    $params[] = $typeFilter;
}

// Pagination
$page = max(1, intval($_GET['p'] ?? 1));
$perPage = 20;
$offset = ($page - 1) * $perPage;

$countStmt = db()->prepare("SELECT COUNT(*) FROM leads {$where}");
$countStmt->execute($params);
$total = $countStmt->fetchColumn();
$totalPages = ceil($total / $perPage);

$stmt = db()->prepare("SELECT * FROM leads {$where} ORDER BY created_at DESC LIMIT {$perPage} OFFSET {$offset}");
$stmt->execute($params);
$leads = $stmt->fetchAll();

// Stats
$stats = [
    'new' => db()->query("SELECT COUNT(*) FROM leads WHERE status='new'")->fetchColumn(),
    'contacted' => db()->query("SELECT COUNT(*) FROM leads WHERE status='contacted'")->fetchColumn(),
    'qualified' => db()->query("SELECT COUNT(*) FROM leads WHERE status='qualified'")->fetchColumn(),
    'converted' => db()->query("SELECT COUNT(*) FROM leads WHERE status='converted'")->fetchColumn(),
];

ob_start();
?>

<!-- Stats -->
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
    <a href="/admin/?page=leads&status=new" class="p-4 bg-white rounded-xl border border-gray-200 hover:border-blue-300 transition-colors <?= $statusFilter === 'new' ? 'ring-2 ring-blue-500' : '' ?>">
        <p class="text-2xl font-bold text-blue-600"><?= $stats['new'] ?></p>
        <p class="text-sm text-gray-500">New</p>
    </a>
    <a href="/admin/?page=leads&status=contacted" class="p-4 bg-white rounded-xl border border-gray-200 hover:border-yellow-300 transition-colors <?= $statusFilter === 'contacted' ? 'ring-2 ring-yellow-500' : '' ?>">
        <p class="text-2xl font-bold text-yellow-600"><?= $stats['contacted'] ?></p>
        <p class="text-sm text-gray-500">Contacted</p>
    </a>
    <a href="/admin/?page=leads&status=qualified" class="p-4 bg-white rounded-xl border border-gray-200 hover:border-purple-300 transition-colors <?= $statusFilter === 'qualified' ? 'ring-2 ring-purple-500' : '' ?>">
        <p class="text-2xl font-bold text-purple-600"><?= $stats['qualified'] ?></p>
        <p class="text-sm text-gray-500">Qualified</p>
    </a>
    <a href="/admin/?page=leads&status=converted" class="p-4 bg-white rounded-xl border border-gray-200 hover:border-green-300 transition-colors <?= $statusFilter === 'converted' ? 'ring-2 ring-green-500' : '' ?>">
        <p class="text-2xl font-bold text-green-600"><?= $stats['converted'] ?></p>
        <p class="text-sm text-gray-500">Converted</p>
    </a>
</div>

<!-- Filters -->
<div class="flex flex-wrap items-center gap-3 mb-6">
    <select onchange="window.location.href='/admin/?page=leads&status='+this.value+'&type=<?= $typeFilter ?>'" class="text-sm border border-gray-200 rounded-lg px-3 py-2 bg-white">
        <option value="">All Status</option>
        <option value="new" <?= $statusFilter === 'new' ? 'selected' : '' ?>>New</option>
        <option value="contacted" <?= $statusFilter === 'contacted' ? 'selected' : '' ?>>Contacted</option>
        <option value="qualified" <?= $statusFilter === 'qualified' ? 'selected' : '' ?>>Qualified</option>
        <option value="converted" <?= $statusFilter === 'converted' ? 'selected' : '' ?>>Converted</option>
        <option value="closed" <?= $statusFilter === 'closed' ? 'selected' : '' ?>>Closed</option>
    </select>
    <select onchange="window.location.href='/admin/?page=leads&type='+this.value+'&status=<?= $statusFilter ?>'" class="text-sm border border-gray-200 rounded-lg px-3 py-2 bg-white">
        <option value="">All Types</option>
        <option value="contact" <?= $typeFilter === 'contact' ? 'selected' : '' ?>>Contact</option>
        <option value="audit" <?= $typeFilter === 'audit' ? 'selected' : '' ?>>Audit</option>
        <option value="newsletter" <?= $typeFilter === 'newsletter' ? 'selected' : '' ?>>Newsletter</option>
        <option value="product_demo" <?= $typeFilter === 'product_demo' ? 'selected' : '' ?>>Product Demo</option>
    </select>
    <?php if ($statusFilter || $typeFilter): ?>
    <a href="/admin/?page=leads" class="text-sm text-gray-500 hover:text-gray-700">Clear filters <?= ad_icon('x', 14) ?></a>
    <?php endif; ?>
    <span class="text-sm text-gray-500 ml-auto"><?= $total ?> total leads</span>
</div>

<!-- Table -->
<div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead>
                <tr class="bg-gray-50 border-b border-gray-200">
                    <th class="text-left px-5 py-3 font-semibold text-gray-600">Name</th>
                    <th class="text-left px-5 py-3 font-semibold text-gray-600 hidden md:table-cell">Email</th>
                    <th class="text-left px-5 py-3 font-semibold text-gray-600 hidden lg:table-cell">Phone</th>
                    <th class="text-left px-5 py-3 font-semibold text-gray-600">Type</th>
                    <th class="text-left px-5 py-3 font-semibold text-gray-600">Status</th>
                    <th class="text-left px-5 py-3 font-semibold text-gray-600 hidden lg:table-cell">Date</th>
                    <th class="text-right px-5 py-3 font-semibold text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <?php if (empty($leads)): ?>
                <tr><td colspan="7" class="px-5 py-8 text-center text-gray-500">No leads found.</td></tr>
                <?php else: ?>
                    <?php foreach ($leads as $lead): ?>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-5 py-3">
                            <p class="font-medium text-gray-900"><?= clean($lead['name']) ?></p>
                            <?php if ($lead['company']): ?>
                            <p class="text-xs text-gray-400"><?= clean($lead['company']) ?></p>
                            <?php endif; ?>
                        </td>
                        <td class="px-5 py-3 hidden md:table-cell">
                            <a href="mailto:<?= clean($lead['email']) ?>" class="text-gray-600 hover:text-primary-600"><?= clean($lead['email']) ?></a>
                        </td>
                        <td class="px-5 py-3 hidden lg:table-cell">
                            <?php if ($lead['phone']): ?>
                            <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', $lead['phone']) ?>" target="_blank" class="text-gray-600 hover:text-green-600">
                                <?= clean($lead['phone']) ?>
                            </a>
                            <?php endif; ?>
                        </td>
                        <td class="px-5 py-3">
                            <span class="text-xs font-medium capitalize text-gray-600"><?= str_replace('_', ' ', $lead['form_type']) ?></span>
                        </td>
                        <td class="px-5 py-3">
                            <?php
                            $statusColors = [
                                'new' => 'bg-blue-100 text-blue-700',
                                'contacted' => 'bg-yellow-100 text-yellow-700',
                                'qualified' => 'bg-purple-100 text-purple-700',
                                'converted' => 'bg-green-100 text-green-700',
                                'closed' => 'bg-gray-100 text-gray-600',
                            ];
                            $sc = $statusColors[$lead['status']] ?? 'bg-gray-100 text-gray-600';
                            ?>
                            <div class="relative group inline-block">
                                <span class="px-2.5 py-1 text-xs font-medium rounded-full cursor-pointer <?= $sc ?>"><?= ucfirst($lead['status']) ?></span>
                                <!-- Status dropdown -->
                                <div class="absolute top-full left-0 mt-1 bg-white border border-gray-200 rounded-lg shadow-lg py-1 z-10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all min-w-[120px]">
                                    <?php foreach (['new','contacted','qualified','converted','closed'] as $s): ?>
                                    <a href="/admin/?page=leads&update_status=<?= $lead['id'] ?>&set_status=<?= $s ?>" class="block px-3 py-1.5 text-xs hover:bg-gray-50 capitalize <?= $lead['status'] === $s ? 'font-semibold text-primary-600' : 'text-gray-600' ?>"><?= $s ?></a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-3 hidden lg:table-cell text-gray-500 text-xs">
                            <?= formatDate($lead['created_at']) ?>
                        </td>
                        <td class="px-5 py-3 text-right">
                            <div class="flex items-center justify-end gap-1">
                                <!-- View Details (expand row) -->
                                <button onclick="toggleLeadDetail(<?= $lead['id'] ?>)" class="p-1.5 text-gray-400 hover:text-primary-600 rounded-lg hover:bg-gray-100" title="View Details">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                </button>
                                <a href="/admin/?page=leads&delete=<?= $lead['id'] ?>&csrf_token=<?= csrfToken() ?>" data-confirm="Delete this lead?" class="p-1.5 text-gray-400 hover:text-red-600 rounded-lg hover:bg-gray-100" title="Delete">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <!-- Expandable detail row -->
                    <tr id="lead-detail-<?= $lead['id'] ?>" class="hidden bg-gray-50">
                        <td colspan="7" class="px-5 py-4">
                            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 text-sm">
                                <div>
                                    <p class="text-xs font-semibold text-gray-500 mb-1">Email</p>
                                    <p class="text-gray-800"><?= clean($lead['email']) ?></p>
                                </div>
                                <div>
                                    <p class="text-xs font-semibold text-gray-500 mb-1">Phone</p>
                                    <p class="text-gray-800"><?= clean($lead['phone'] ?: '—') ?></p>
                                </div>
                                <div>
                                    <p class="text-xs font-semibold text-gray-500 mb-1">Company</p>
                                    <p class="text-gray-800"><?= clean($lead['company'] ?: '—') ?></p>
                                </div>
                                <div>
                                    <p class="text-xs font-semibold text-gray-500 mb-1">Website</p>
                                    <p class="text-gray-800"><?= $lead['website'] ? '<a href="'.clean($lead['website']).'" target="_blank" class="text-primary-600 hover:underline">'.clean($lead['website']).'</a>' : '—' ?></p>
                                </div>
                                <?php if ($lead['monthly_revenue']): ?>
                                <div>
                                    <p class="text-xs font-semibold text-gray-500 mb-1">Monthly Revenue</p>
                                    <p class="text-gray-800"><?= clean($lead['monthly_revenue']) ?></p>
                                </div>
                                <?php endif; ?>
                                <?php if ($lead['message']): ?>
                                <div class="sm:col-span-2 lg:col-span-3">
                                    <p class="text-xs font-semibold text-gray-500 mb-1">Message</p>
                                    <p class="text-gray-800"><?= nl2br(clean($lead['message'])) ?></p>
                                </div>
                                <?php endif; ?>
                                <?php if ($lead['utm_source']): ?>
                                <div>
                                    <p class="text-xs font-semibold text-gray-500 mb-1">UTM Source</p>
                                    <p class="text-gray-800"><?= clean($lead['utm_source']) ?> / <?= clean($lead['utm_medium'] ?? '') ?></p>
                                </div>
                                <?php endif; ?>
                                <div>
                                    <p class="text-xs font-semibold text-gray-500 mb-1">Source Page</p>
                                    <p class="text-gray-800 truncate text-xs"><?= clean($lead['source_page'] ?: '—') ?></p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Pagination -->
<?php if ($totalPages > 1): ?>
<div class="flex justify-center mt-6">
    <div class="flex items-center gap-2">
        <?php if ($page > 1): ?>
        <a href="/admin/?page=leads&p=<?= $page-1 ?>&status=<?= $statusFilter ?>&type=<?= $typeFilter ?>" class="px-3 py-1.5 text-sm border border-gray-200 rounded-lg hover:bg-gray-50 bg-white"><?= ad_icon('chev-left', 14) ?> Prev</a>
        <?php endif; ?>
        <span class="text-sm text-gray-500">Page <?= $page ?> of <?= $totalPages ?></span>
        <?php if ($page < $totalPages): ?>
        <a href="/admin/?page=leads&p=<?= $page+1 ?>&status=<?= $statusFilter ?>&type=<?= $typeFilter ?>" class="px-3 py-1.5 text-sm border border-gray-200 rounded-lg hover:bg-gray-50 bg-white">Next <?= ad_icon('chev-right', 14) ?></a>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>

<script>
function toggleLeadDetail(id) {
    const row = document.getElementById('lead-detail-' + id);
    if (row) row.classList.toggle('hidden');
}
</script>

<?php
$adminContent = ob_get_clean();
include __DIR__ . '/includes/admin-layout.php';
<?php
/**
 * Admin: Case Study Create/Edit
 */
$editId = intval($_GET['id'] ?? 0);
$isEdit = $editId > 0;
$study = null;

if ($isEdit) {
    $stmt = db()->prepare("SELECT * FROM case_studies WHERE id = ?");
    $stmt->execute([$editId]);
    $study = $stmt->fetch();
    if (!$study) {
        setFlash('error', 'Case study not found.');
        header('Location: /admin/?page=case-studies');
        exit;
    }
}

$pageTitle = $isEdit ? 'Edit Case Study' : 'New Case Study';

// Handle form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    verifyCsrf();

    $title       = clean($_POST['title'] ?? '');
    $slug        = clean($_POST['slug'] ?? '') ?: slugify($title);
    $client      = clean($_POST['client_name'] ?? '');
    $industry    = clean($_POST['industry'] ?? '');
    $excerpt     = clean($_POST['excerpt'] ?? '');
    $problem     = $_POST['problem'] ?? '';
    $strategy    = $_POST['strategy'] ?? '';
    $execution   = $_POST['execution'] ?? '';
    $results     = $_POST['results'] ?? '';
    $meta_title  = clean($_POST['meta_title'] ?? '');
    $meta_desc   = clean($_POST['meta_description'] ?? '');
    $status      = in_array($_POST['status'] ?? '', ['draft', 'published']) ? $_POST['status'] : 'draft';
    $is_featured = isset($_POST['is_featured']) ? 1 : 0;
    $sort_order  = intval($_POST['sort_order'] ?? 0);

    // Metrics as JSON
    $metricsKeys   = $_POST['metric_key'] ?? [];
    $metricsValues = $_POST['metric_value'] ?? [];
    $metrics = [];
    foreach ($metricsKeys as $i => $key) {
        $k = clean($key);
        $v = clean($metricsValues[$i] ?? '');
        if ($k && $v) $metrics[$k] = $v;
    }
    $metricsJson = json_encode($metrics);

    // Image upload
    $featured_image = $study['featured_image'] ?? '';
    if (!empty($_FILES['featured_image']['name'])) {
        $uploadDir = __DIR__ . '/../uploads/case-studies/';
        if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);
        $ext = strtolower(pathinfo($_FILES['featured_image']['name'], PATHINFO_EXTENSION));
        if (in_array($ext, ['jpg','jpeg','png','webp']) && $_FILES['featured_image']['size'] <= 5 * 1024 * 1024) {
            $filename = 'cs-' . time() . '-' . mt_rand(1000,9999) . '.' . $ext;
            if (move_uploaded_file($_FILES['featured_image']['tmp_name'], $uploadDir . $filename)) {
                $featured_image = 'uploads/case-studies/' . $filename;
            }
        }
    }

    $published_at = $status === 'published' ? ($study['published_at'] ?? date('Y-m-d H:i:s')) : null;

    if (empty($title)) {
        setFlash('error', 'Title is required.');
    } else {
        try {
            if ($isEdit) {
                $stmt = db()->prepare("UPDATE case_studies SET 
                    title=?, slug=?, client_name=?, industry=?, excerpt=?, problem=?, strategy=?, execution=?, results=?,
                    metrics=?, featured_image=?, meta_title=?, meta_description=?, status=?, is_featured=?, sort_order=?, published_at=?
                    WHERE id=?");
                $stmt->execute([$title,$slug,$client,$industry,$excerpt,$problem,$strategy,$execution,$results,
                    $metricsJson,$featured_image,$meta_title,$meta_desc,$status,$is_featured,$sort_order,$published_at,$editId]);
                setFlash('success', 'Case study updated.');
            } else {
                $stmt = db()->prepare("INSERT INTO case_studies 
                    (title,slug,client_name,industry,excerpt,problem,strategy,execution,results,metrics,featured_image,meta_title,meta_description,status,is_featured,sort_order,published_at)
                    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
                $stmt->execute([$title,$slug,$client,$industry,$excerpt,$problem,$strategy,$execution,$results,
                    $metricsJson,$featured_image,$meta_title,$meta_desc,$status,$is_featured,$sort_order,$published_at]);
                $editId = db()->lastInsertId();
                setFlash('success', 'Case study created.');
            }
            header('Location: /admin/?page=case-study-edit&id=' . $editId);
            exit;
        } catch (PDOException $e) {
            setFlash('error', strpos($e->getMessage(), 'Duplicate') !== false ? 'Slug already exists.' : $e->getMessage());
        }
    }
}

$existingMetrics = json_decode($study['metrics'] ?? '{}', true);

ob_start();
?>

<div class="mb-4">
    <a href="/admin/?page=case-studies" class="text-sm text-gray-500 hover:text-gray-700">← Back to Case Studies</a>
</div>

<form method="POST" enctype="multipart/form-data" class="grid lg:grid-cols-3 gap-6">
    <?= csrfField() ?>

    <div class="lg:col-span-2 space-y-6">
        <!-- Title / Slug -->
        <div class="bg-white p-5 rounded-xl border border-gray-200">
            <div class="grid sm:grid-cols-2 gap-4">
                <div class="sm:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Title *</label>
                    <input type="text" name="title" value="<?= clean($study['title'] ?? '') ?>" required
                           class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Client Name</label>
                    <input type="text" name="client_name" value="<?= clean($study['client_name'] ?? '') ?>"
                           class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Industry</label>
                    <input type="text" name="industry" value="<?= clean($study['industry'] ?? '') ?>"
                           placeholder="e.g. Fashion & Apparel"
                           class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600">
                </div>
                <div class="sm:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Slug</label>
                    <input type="text" name="slug" value="<?= clean($study['slug'] ?? '') ?>"
                           class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600">
                </div>
            </div>
        </div>

        <!-- Excerpt -->
        <div class="bg-white p-5 rounded-xl border border-gray-200">
            <label class="block text-sm font-medium text-gray-700 mb-1.5">Excerpt</label>
            <textarea name="excerpt" rows="2" class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600 resize-none"><?= clean($study['excerpt'] ?? '') ?></textarea>
        </div>

        <!-- Content Sections -->
        <?php
        $sections = [
            ['name' => 'problem', 'label' => 'The Challenge / Problem'],
            ['name' => 'strategy', 'label' => 'Our Strategy'],
            ['name' => 'execution', 'label' => 'Execution'],
            ['name' => 'results', 'label' => 'Results'],
        ];
        foreach ($sections as $sec): ?>
        <div class="bg-white p-5 rounded-xl border border-gray-200">
            <label class="block text-sm font-medium text-gray-700 mb-1.5"><?= $sec['label'] ?></label>
            <textarea name="<?= $sec['name'] ?>" rows="5" class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600 resize-none"><?= clean($study[$sec['name']] ?? '') ?></textarea>
        </div>
        <?php endforeach; ?>

        <!-- Metrics -->
        <div class="bg-white p-5 rounded-xl border border-gray-200">
            <h3 class="text-sm font-semibold text-gray-900 mb-4">Key Metrics</h3>
            <div id="metrics-container" class="space-y-3">
                <?php if (!empty($existingMetrics)): ?>
                    <?php foreach ($existingMetrics as $key => $val): ?>
                    <div class="flex gap-3 metric-row">
                        <input type="text" name="metric_key[]" value="<?= clean($key) ?>" placeholder="Metric name (e.g. roas)"
                               class="flex-1 px-3 py-2 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600">
                        <input type="text" name="metric_value[]" value="<?= clean($val) ?>" placeholder="Value (e.g. 3.5X)"
                               class="flex-1 px-3 py-2 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600">
                        <button type="button" onclick="this.parentElement.remove()" class="px-2 text-red-400 hover:text-red-600">✕</button>
                    </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="flex gap-3 metric-row">
                        <input type="text" name="metric_key[]" placeholder="Metric name" class="flex-1 px-3 py-2 text-sm border border-gray-200 rounded-lg">
                        <input type="text" name="metric_value[]" placeholder="Value" class="flex-1 px-3 py-2 text-sm border border-gray-200 rounded-lg">
                        <button type="button" onclick="this.parentElement.remove()" class="px-2 text-red-400 hover:text-red-600">✕</button>
                    </div>
                <?php endif; ?>
            </div>
            <button type="button" onclick="addMetricRow()" class="mt-3 text-sm text-primary-600 font-medium hover:text-primary-700">+ Add Metric</button>
        </div>

        <!-- SEO -->
        <div class="bg-white p-5 rounded-xl border border-gray-200">
            <h3 class="text-sm font-semibold text-gray-900 mb-4">SEO</h3>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Meta Title</label>
                    <input type="text" name="meta_title" value="<?= clean($study['meta_title'] ?? '') ?>" maxlength="70"
                           class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Meta Description</label>
                    <textarea name="meta_description" rows="2" maxlength="160"
                              class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600 resize-none"><?= clean($study['meta_description'] ?? '') ?></textarea>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="space-y-6">
        <div class="bg-white p-5 rounded-xl border border-gray-200">
            <h3 class="text-sm font-semibold text-gray-900 mb-4">Publish</h3>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Status</label>
                    <select name="status" class="w-full px-3 py-2.5 text-sm border border-gray-200 rounded-lg bg-white">
                        <option value="draft" <?= ($study['status'] ?? 'draft') === 'draft' ? 'selected' : '' ?>>Draft</option>
                        <option value="published" <?= ($study['status'] ?? '') === 'published' ? 'selected' : '' ?>>Published</option>
                    </select>
                </div>
                <div class="flex items-center gap-2">
                    <input type="checkbox" id="is_featured" name="is_featured" value="1" <?= ($study['is_featured'] ?? 0) ? 'checked' : '' ?> class="rounded border-gray-300">
                    <label for="is_featured" class="text-sm text-gray-700">Featured</label>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Sort Order</label>
                    <input type="number" name="sort_order" value="<?= $study['sort_order'] ?? 0 ?>"
                           class="w-full px-3 py-2.5 text-sm border border-gray-200 rounded-lg">
                </div>
            </div>
            <button type="submit" class="w-full mt-5 px-4 py-2.5 text-sm font-semibold text-white bg-primary-600 rounded-lg hover:bg-primary-700 transition-colors">
                <?= $isEdit ? 'Update' : 'Create' ?>
            </button>
        </div>

        <div class="bg-white p-5 rounded-xl border border-gray-200">
            <h3 class="text-sm font-semibold text-gray-900 mb-4">Featured Image</h3>
            <?php if (!empty($study['featured_image'])): ?>
            <img src="<?= SITE_URL . '/' . $study['featured_image'] ?>" alt="" class="w-full rounded-lg mb-3">
            <?php endif; ?>
            <input type="file" name="featured_image" accept="image/*"
                   class="w-full text-sm text-gray-500 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100">
        </div>
    </div>
</form>

<script>
function addMetricRow() {
    const container = document.getElementById('metrics-container');
    const row = document.createElement('div');
    row.className = 'flex gap-3 metric-row';
    row.innerHTML = `
        <input type="text" name="metric_key[]" placeholder="Metric name" class="flex-1 px-3 py-2 text-sm border border-gray-200 rounded-lg">
        <input type="text" name="metric_value[]" placeholder="Value" class="flex-1 px-3 py-2 text-sm border border-gray-200 rounded-lg">
        <button type="button" onclick="this.parentElement.remove()" class="px-2 text-red-400 hover:text-red-600">✕</button>
    `;
    container.appendChild(row);
}
</script>

<?php
$adminContent = ob_get_clean();
include __DIR__ . '/includes/admin-layout.php';
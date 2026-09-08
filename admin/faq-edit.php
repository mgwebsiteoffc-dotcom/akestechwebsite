<?php
/**
 * Admin: FAQ Create/Edit
 */
$editId = intval($_GET['id'] ?? 0);
$isEdit = $editId > 0;
$faq = null;

if ($isEdit) {
    $stmt = db()->prepare("SELECT * FROM faqs WHERE id = ?");
    $stmt->execute([$editId]);
    $faq = $stmt->fetch();
    if (!$faq) {
        setFlash('error', 'FAQ not found.');
        header('Location: /admin/?page=faqs');
        exit;
    }
}

$pageTitle = $isEdit ? 'Edit FAQ' : 'New FAQ';

// Common page slugs
$commonPages = [
    'home' => 'Homepage',
    'whatsapp-shopify' => 'WhatsApp Product Page',
    'shopify-growth' => 'Shopify Growth Service',
    'performance-marketing' => 'Performance Marketing',
    'shopify-operations' => 'Shopify Operations',
    'automation' => 'Automation Services',
    'technology' => 'Technology Development',
    'general' => 'General',
];

// Handle form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    verifyCsrf();

    $question   = clean($_POST['question'] ?? '');
    $answer     = clean($_POST['answer'] ?? '');
    $page_slug  = clean($_POST['page_slug'] ?? 'general');
    $sort_order = intval($_POST['sort_order'] ?? 0);
    $is_active  = isset($_POST['is_active']) ? 1 : 0;

    if (empty($question) || empty($answer)) {
        setFlash('error', 'Question and answer are required.');
    } else {
        try {
            if ($isEdit) {
                $stmt = db()->prepare("UPDATE faqs SET question=?, answer=?, page_slug=?, sort_order=?, is_active=? WHERE id=?");
                $stmt->execute([$question, $answer, $page_slug, $sort_order, $is_active, $editId]);
                setFlash('success', 'FAQ updated.');
            } else {
                $stmt = db()->prepare("INSERT INTO faqs (question, answer, page_slug, sort_order, is_active) VALUES (?,?,?,?,?)");
                $stmt->execute([$question, $answer, $page_slug, $sort_order, $is_active]);
                $editId = db()->lastInsertId();
                setFlash('success', 'FAQ created.');
            }
            header('Location: /admin/?page=faq-edit&id=' . $editId);
            exit;
        } catch (PDOException $e) {
            setFlash('error', 'Error: ' . $e->getMessage());
        }
    }
}

ob_start();
?>

<div class="mb-4">
    <a href="/admin/?page=faqs" class="text-sm text-gray-500 hover:text-gray-700"><?= ad_icon('arrow-left') ?> Back to FAQs</a>
</div>

<form method="POST" class="max-w-2xl">
    <?= csrfField() ?>

    <div class="space-y-6">
        <!-- Question -->
        <div class="bg-white p-5 rounded-xl border border-gray-200">
            <label class="block text-sm font-medium text-gray-700 mb-1.5">Question *</label>
            <input type="text" name="question" value="<?= clean($faq['question'] ?? '') ?>" required
                   placeholder="Enter the FAQ question"
                   class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600">
        </div>

        <!-- Answer -->
        <div class="bg-white p-5 rounded-xl border border-gray-200">
            <label class="block text-sm font-medium text-gray-700 mb-1.5">Answer *</label>
            <textarea name="answer" rows="6" required placeholder="Detailed answer to the question"
                      class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600 resize-none"><?= clean($faq['answer'] ?? '') ?></textarea>
            <p class="text-xs text-gray-400 mt-2">This answer will be used in FAQ schema markup for SEO/AEO.</p>
        </div>

        <!-- Settings -->
        <div class="bg-white p-5 rounded-xl border border-gray-200">
            <div class="grid sm:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Page</label>
                    <select name="page_slug" class="w-full px-3 py-2.5 text-sm border border-gray-200 rounded-lg bg-white">
                        <?php foreach ($commonPages as $slug => $name): ?>
                        <option value="<?= $slug ?>" <?= ($faq['page_slug'] ?? 'general') === $slug ? 'selected' : '' ?>>
                            <?= $name ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                    <p class="text-xs text-gray-400 mt-1">Or type a custom slug like "blog-your-post-slug"</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Sort Order</label>
                    <input type="number" name="sort_order" value="<?= $faq['sort_order'] ?? 0 ?>" min="0"
                           class="w-full px-3 py-2.5 text-sm border border-gray-200 rounded-lg">
                </div>
                <div class="flex items-end">
                    <div class="flex items-center gap-2 pb-1">
                        <input type="checkbox" id="is_active" name="is_active" value="1" <?= ($faq['is_active'] ?? 1) ? 'checked' : '' ?> class="rounded border-gray-300">
                        <label for="is_active" class="text-sm text-gray-700">Active</label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Submit -->
        <div class="flex gap-3">
            <button type="submit" class="px-6 py-2.5 text-sm font-semibold text-white bg-primary-600 rounded-lg hover:bg-primary-700 transition-colors">
                <?= $isEdit ? 'Update FAQ' : 'Create FAQ' ?>
            </button>
            <a href="/admin/?page=faqs" class="px-6 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                Cancel
            </a>
        </div>
    </div>
</form>

<?php
$adminContent = ob_get_clean();
include __DIR__ . '/includes/admin-layout.php';
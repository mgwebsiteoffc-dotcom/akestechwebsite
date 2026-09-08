<?php
/**
 * Admin: Blog Post Create/Edit
 */
$editId = intval($_GET['id'] ?? 0);
$isEdit = $editId > 0;
$post = null;

if ($isEdit) {
    $stmt = db()->prepare("SELECT * FROM blog_posts WHERE id = ?");
    $stmt->execute([$editId]);
    $post = $stmt->fetch();
    if (!$post) {
        setFlash('error', 'Post not found.');
        header('Location: /admin/?page=blogs');
        exit;
    }
}

$pageTitle = $isEdit ? 'Edit Post' : 'New Blog Post';

// Get categories
$categories = db()->query("SELECT * FROM blog_categories WHERE is_active = 1 ORDER BY name ASC")->fetchAll();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    verifyCsrf();

    $title          = clean($_POST['title'] ?? '');
    $slug           = clean($_POST['slug'] ?? '') ?: slugify($title);
    $excerpt        = clean($_POST['excerpt'] ?? '');
    $content        = $_POST['content'] ?? ''; // Allow HTML
    $category_id    = intval($_POST['category_id'] ?? 0) ?: null;
    $meta_title     = clean($_POST['meta_title'] ?? '');
    $meta_desc      = clean($_POST['meta_description'] ?? '');
    $meta_keywords  = clean($_POST['meta_keywords'] ?? '');
    $status         = in_array($_POST['status'] ?? '', ['draft', 'published']) ? $_POST['status'] : 'draft';
    $is_featured    = isset($_POST['is_featured']) ? 1 : 0;

    // Handle image upload
    $featured_image = $post['featured_image'] ?? '';
    if (!empty($_FILES['featured_image']['name'])) {
        $uploadDir = __DIR__ . '/../uploads/blog/';
        if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);

        $ext = strtolower(pathinfo($_FILES['featured_image']['name'], PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'webp', 'gif'];

        if (in_array($ext, $allowed) && $_FILES['featured_image']['size'] <= 5 * 1024 * 1024) {
            $filename = 'blog-' . time() . '-' . mt_rand(1000, 9999) . '.' . $ext;
            if (move_uploaded_file($_FILES['featured_image']['tmp_name'], $uploadDir . $filename)) {
                $featured_image = 'uploads/blog/' . $filename;
            }
        }
    }

    $published_at = $status === 'published' ? ($post['published_at'] ?? date('Y-m-d H:i:s')) : null;

    if (empty($title)) {
        setFlash('error', 'Title is required.');
    } else {
        try {
            if ($isEdit) {
                $stmt = db()->prepare("UPDATE blog_posts SET 
                    title=?, slug=?, excerpt=?, content=?, featured_image=?, category_id=?,
                    meta_title=?, meta_description=?, meta_keywords=?, status=?, is_featured=?, published_at=?,
                    author_id=?, updated_at=NOW()
                    WHERE id=?");
                $stmt->execute([
                    $title, $slug, $excerpt, $content, $featured_image, $category_id,
                    $meta_title, $meta_desc, $meta_keywords, $status, $is_featured, $published_at,
                    $_SESSION['admin_id'], $editId
                ]);
                setFlash('success', 'Post updated successfully.');
            } else {
                $stmt = db()->prepare("INSERT INTO blog_posts 
                    (title, slug, excerpt, content, featured_image, category_id, meta_title, meta_description, meta_keywords, status, is_featured, published_at, author_id)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->execute([
                    $title, $slug, $excerpt, $content, $featured_image, $category_id,
                    $meta_title, $meta_desc, $meta_keywords, $status, $is_featured, $published_at,
                    $_SESSION['admin_id']
                ]);
                $editId = db()->lastInsertId();
                setFlash('success', 'Post created successfully.');
            }
            header('Location: /admin/?page=blog-edit&id=' . $editId);
            exit;
        } catch (PDOException $e) {
            if (strpos($e->getMessage(), 'Duplicate entry') !== false) {
                setFlash('error', 'A post with this slug already exists. Please use a different slug.');
            } else {
                setFlash('error', 'Database error: ' . $e->getMessage());
            }
        }
    }
}

ob_start();
?>

<!-- TinyMCE CDN -->
<script src="https://cdn.tiny.cloud/1/4tv4sqdoznos8ugazclarbw8x0xbcf3hsoqdvjnbmmxwql4l/tinymce/6/tinymce.min.js"></script>

<div class="mb-4">
    <a href="/admin/?page=blogs" class="text-sm text-gray-500 hover:text-gray-700 transition-colors"><?= ad_icon('arrow-left') ?> Back to Posts</a>
</div>

<form method="POST" enctype="multipart/form-data" class="grid lg:grid-cols-3 gap-6">
    <?= csrfField() ?>

    <!-- Main Content -->
    <div class="lg:col-span-2 space-y-6">
        <!-- Title -->
        <div class="bg-white p-5 rounded-xl border border-gray-200">
            <label class="block text-sm font-medium text-gray-700 mb-1.5">Title <span class="text-red-500">*</span></label>
            <input type="text" name="title" value="<?= clean($post['title'] ?? $_POST['title'] ?? '') ?>" required
                   placeholder="Enter post title"
                   class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600 focus:border-transparent">

            <label class="block text-sm font-medium text-gray-700 mt-4 mb-1.5">Slug</label>
            <div class="flex items-center gap-2">
                <span class="text-sm text-gray-400">/blog/</span>
                <input type="text" name="slug" value="<?= clean($post['slug'] ?? '') ?>"
                       placeholder="auto-generated-from-title"
                       class="flex-1 px-3 py-2 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600 focus:border-transparent">
            </div>
        </div>

        <!-- Excerpt -->
        <div class="bg-white p-5 rounded-xl border border-gray-200">
            <label class="block text-sm font-medium text-gray-700 mb-1.5">Excerpt</label>
            <textarea name="excerpt" rows="3"
                      class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg"><?= clean($post['excerpt'] ?? '') ?></textarea>
        </div>

        <!-- Content -->
        <div class="bg-white p-5 rounded-xl border border-gray-200">
            <label class="block text-sm font-medium text-gray-700 mb-1.5">Content (HTML)</label>
            <textarea id="content_editor" name="content" rows="20"
                      class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg font-mono"><?= htmlspecialchars($post['content'] ?? '', ENT_QUOTES) ?></textarea>
        </div>

        <!-- SEO -->
        <div class="bg-white p-5 rounded-xl border border-gray-200">
            <input type="text" name="meta_title" value="<?= clean($post['meta_title'] ?? '') ?>" class="w-full border px-4 py-2.5 rounded-lg mb-3">
            <textarea name="meta_description" rows="2" class="w-full border px-4 py-2.5 rounded-lg"><?= clean($post['meta_description'] ?? '') ?></textarea>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="space-y-6">
        <!-- Publish -->
        <div class="bg-white p-5 rounded-xl border border-gray-200">
            <select name="status" class="w-full border px-3 py-2.5 rounded-lg">
                <option value="draft">Draft</option>
                <option value="published">Published</option>
            </select>

            <button type="submit" class="w-full mt-4 bg-primary-600 text-white py-2 rounded-lg">
                <?= $isEdit ? 'Update' : 'Create' ?> Post
            </button>
        </div>

        <!-- Category -->
        <div class="bg-white p-5 rounded-xl border border-gray-200">
            <select name="category_id" class="w-full border px-3 py-2.5 rounded-lg">
                <option value="">No Category</option>
                <?php foreach ($categories as $cat): ?>
                <option value="<?= $cat['id'] ?>" <?= ($post['category_id'] ?? '') == $cat['id'] ? 'selected' : '' ?>>
                    <?= clean($cat['name']) ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- Featured Image (UNCHANGED) -->
        <div class="bg-white p-5 rounded-xl border border-gray-200">
            <?php if (!empty($post['featured_image'])): ?>
            <img src="<?= SITE_URL . '/' . $post['featured_image'] ?>" class="mb-3 rounded-lg">
            <?php endif; ?>
            <input type="file" name="featured_image">
        </div>
    </div>
</form>

<!-- TinyMCE Init -->
<script>
tinymce.init({
    selector: '#content_editor',
    height: 500,
    plugins: 'advlist autolink lists link image code preview fullscreen table',
    toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist | link image | code preview fullscreen',
    branding: false,
    automatic_uploads: true,
    images_upload_url: '/admin/upload-image.php'
});

document.querySelector('form').addEventListener('submit', function () {
    tinymce.triggerSave();
});
</script>

<?php
$adminContent = ob_get_clean();
include __DIR__ . '/includes/admin-layout.php';
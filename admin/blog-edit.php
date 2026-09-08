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
    $blog_faqs      = $_POST['blog_faqs'] ?? '[]'; // Store FAQ items as JSON

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
                
                // Handle FAQ data separately
                if (!empty($_POST['blog_faqs']) && is_array($_POST['blog_faqs'])) {
                    $faqData = [];
                    foreach ($_POST['blog_faqs'] as $faq) {
                        if (!empty($faq['question']) && !empty($faq['answer'])) {
                            $faqData[] = [
                                'question' => clean($faq['question']),
                                'answer' => clean($faq['answer'])
                            ];
                        }
                    }
                    if (!empty($faqData)) {
                        $stmtFaq = db()->prepare("UPDATE blog_posts SET blog_faqs = ? WHERE id = ?");
                        $stmtFaq->execute([json_encode($faqData), $editId]);
                    }
                }
                
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

<!-- ✅ TinyMCE CDN -->
<script src="https://cdn.tiny.cloud/1/4tv4sqdoznos8ugazclarbw8x0xbcf3hsoqdvjnbmmxwql4l/tinymce/6/tinymce.min.js"></script>

<div class="mb-4">
    <a href="/admin/?page=blogs" class="text-sm text-gray-500 hover:text-gray-700 transition-colors">← Back to Posts</a>
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
            <textarea name="excerpt" rows="3" placeholder="Brief summary for listing pages and meta description"
                      class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600 focus:border-transparent resize-none"><?= clean($post['excerpt'] ?? '') ?></textarea>
        </div>

        <!-- Content -->
        <div class="bg-white p-5 rounded-xl border border-gray-200">
            <label class="block text-sm font-medium text-gray-700 mb-1.5">Content (HTML)</label>
            <textarea id="content_editor" name="content" rows="20"
                      class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg font-mono"><?= htmlspecialchars($post['content'] ?? '', ENT_QUOTES) ?></textarea>
        </div>

        <!-- Blog FAQs (AEO Schema) -->
        <div class="bg-white p-5 rounded-xl border border-gray-200">
            <h3 class="text-sm font-semibold text-gray-900 mb-4 flex items-center gap-2">
                <svg class="w-4 h-4 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                Blog FAQs (for AEO Schema)
            </h3>
            <p class="text-xs text-gray-500 mb-4">Add questions & answers that will appear at the end of your post and create FAQPage schema for search results.</p>
            
            <div id="faqs-container" class="space-y-3 mb-4">
                <?php 
                $existingFaqs = json_decode($post['blog_faqs'] ?? '[]', true);
                if (!empty($existingFaqs)):
                    foreach ($existingFaqs as $idx => $faq): ?>
                    <div class="faq-item bg-gray-50 p-4 rounded-lg border border-gray-200 relative">
                        <button type="button" onclick="removeFaq(this)" class="absolute top-2 right-2 text-red-500 hover:text-red-700 text-xl">×</button>
                        <input type="hidden" name="blog_faqs[<?= $idx ?>][question]" value="<?= htmlspecialchars($faq['question'] ?? '') ?>">
                        <input type="hidden" name="blog_faqs[<?= $idx ?>][answer]" value="<?= htmlspecialchars($faq['answer'] ?? '') ?>">
                        <div class="text-sm font-medium text-gray-900 mb-1">Q: <?= substr($faq['question'] ?? '', 0, 80) ?>...</div>
                        <div class="text-sm text-gray-600">A: <?= substr($faq['answer'] ?? '', 0, 80) ?>...</div>
                    </div>
                    <?php endforeach;
                endif; ?>
            </div>

            <button type="button" onclick="addFaqField()" class="text-sm font-medium text-primary-600 hover:text-primary-700 flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                Add FAQ
            </button>

            <!-- Hidden template for new FAQ -->
            <div id="faq-template" class="hidden">
                <div class="faq-item bg-gray-50 p-4 rounded-lg border border-gray-200 relative">
                    <button type="button" onclick="removeFaq(this)" class="absolute top-2 right-2 text-red-500 hover:text-red-700 text-xl">×</button>
                    <div class="space-y-2">
                        <input type="text" class="faq-question w-full text-sm px-3 py-2 border border-gray-200 rounded bg-white focus:outline-none focus:ring-2 focus:ring-primary-500" placeholder="Question" maxlength="200">
                        <textarea class="faq-answer w-full text-sm px-3 py-2 border border-gray-200 rounded bg-white focus:outline-none focus:ring-2 focus:ring-primary-500 resize-none" rows="3" placeholder="Answer (max 500 chars)" maxlength="500"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <!-- SEO -->
        <div class="bg-white p-5 rounded-xl border border-gray-200">
            <h3 class="text-sm font-semibold text-gray-900 mb-4 flex items-center gap-2">
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                SEO Settings
            </h3>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Meta Title</label>
                    <input type="text" name="meta_title" value="<?= clean($post['meta_title'] ?? '') ?>"
                           placeholder="Override page title for search engines" maxlength="70"
                           class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600 focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Meta Description</label>
                    <textarea name="meta_description" rows="2" maxlength="160" placeholder="Short description for search results"
                              class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600 focus:border-transparent resize-none"><?= clean($post['meta_description'] ?? '') ?></textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Keywords</label>
                    <input type="text" name="meta_keywords" value="<?= clean($post['meta_keywords'] ?? '') ?>"
                           placeholder="keyword1, keyword2, keyword3"
                           class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600 focus:border-transparent">
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="space-y-6">
        <!-- Publish -->
        <div class="bg-white p-5 rounded-xl border border-gray-200">
            <h3 class="text-sm font-semibold text-gray-900 mb-4">Publish</h3>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Status</label>
                    <select name="status" class="w-full px-3 py-2.5 text-sm border border-gray-200 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-primary-600">
                        <option value="draft" <?= ($post['status'] ?? 'draft') === 'draft' ? 'selected' : '' ?>>Draft</option>
                        <option value="published" <?= ($post['status'] ?? '') === 'published' ? 'selected' : '' ?>>Published</option>
                    </select>
                </div>
                <div class="flex items-center gap-2">
                    <input type="checkbox" id="is_featured" name="is_featured" value="1" <?= ($post['is_featured'] ?? 0) ? 'checked' : '' ?> class="rounded border-gray-300">
                    <label for="is_featured" class="text-sm text-gray-700">Featured Post</label>
                </div>
            </div>
            <div class="mt-5 flex gap-2">
                <button type="submit" class="flex-1 px-4 py-2.5 text-sm font-semibold text-white bg-primary-600 rounded-lg hover:bg-primary-700 transition-colors">
                    <?= $isEdit ? 'Update' : 'Create' ?> Post
                </button>
            </div>
        </div>

        <!-- Category -->
        <div class="bg-white p-5 rounded-xl border border-gray-200">
            <h3 class="text-sm font-semibold text-gray-900 mb-4">Category</h3>
            <select name="category_id" class="w-full px-3 py-2.5 text-sm border border-gray-200 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-primary-600">
                <option value="">No Category</option>
                <?php foreach ($categories as $cat): ?>
                <option value="<?= $cat['id'] ?>" <?= ($post['category_id'] ?? '') == $cat['id'] ? 'selected' : '' ?>>
                    <?= clean($cat['name']) ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- Featured Image -->
        <div class="bg-white p-5 rounded-xl border border-gray-200">
            <h3 class="text-sm font-semibold text-gray-900 mb-4">Featured Image</h3>
            <?php if (!empty($post['featured_image'])): ?>
            <div class="mb-3">
                <img src="<?= SITE_URL . '/' . $post['featured_image'] ?>" alt="" class="w-full rounded-lg object-cover">
            </div>
            <?php endif; ?>
            <input type="file" name="featured_image" accept="image/*"
                   class="w-full text-sm text-gray-500 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100">
            <p class="text-xs text-gray-400 mt-2">JPG, PNG, WebP. Max 5MB.</p>
        </div>

        <!-- Post Info (if editing) -->
        <?php if ($isEdit && $post): ?>
        <div class="bg-gray-50 p-5 rounded-xl border border-gray-100">
            <h3 class="text-sm font-semibold text-gray-500 mb-3">Post Info</h3>
            <div class="space-y-2 text-xs text-gray-500">
                <p>Created: <?= formatDate($post['created_at']) ?></p>
                <p>Updated: <?= formatDate($post['updated_at']) ?></p>
                <?php if ($post['published_at']): ?>
                <p>Published: <?= formatDate($post['published_at']) ?></p>
                <?php endif; ?>
                <p>ID: <?= $post['id'] ?></p>
            </div>
        </div>
        <?php endif; ?>
    </div>
</form>

<!-- ✅ TinyMCE Init & FAQ Management -->
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
    // Serialize FAQs to hidden inputs
    serializeFaqs();
});

let faqCounter = <?= !empty($post) ? count(json_decode($post['blog_faqs'] ?? '[]', true)) : 0 ?>;

function addFaqField() {
    const template = document.getElementById('faq-template').innerHTML;
    const container = document.getElementById('faqs-container');
    const newItem = document.createElement('div');
    newItem.innerHTML = template;
    container.appendChild(newItem);
}

function removeFaq(btn) {
    btn.closest('.faq-item').remove();
}

function serializeFaqs() {
    const container = document.getElementById('faqs-container');
    const faqItems = container.querySelectorAll('.faq-item');
    
    // Clear old inputs
    container.querySelectorAll('input[name^="blog_faqs"]').forEach(el => el.remove());
    
    // Add new serialized inputs
    faqItems.forEach((item, idx) => {
        const question = item.querySelector('.faq-question')?.value || item.querySelector('input[name*="question"]')?.value || '';
        const answer = item.querySelector('.faq-answer')?.value || item.querySelector('textarea[name*="answer"]')?.value || '';
        
        if (question && answer) {
            const qInput = document.createElement('input');
            qInput.type = 'hidden';
            qInput.name = `blog_faqs[${idx}][question]`;
            qInput.value = question;
            container.appendChild(qInput);
            
            const aInput = document.createElement('input');
            aInput.type = 'hidden';
            aInput.name = `blog_faqs[${idx}][answer]`;
            aInput.value = answer;
            container.appendChild(aInput);
        }
    });
}
</script>

<?php
$adminContent = ob_get_clean();
include __DIR__ . '/includes/admin-layout.php';
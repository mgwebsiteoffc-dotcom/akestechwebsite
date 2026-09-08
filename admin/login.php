<?php
/**
 * Admin Login Page
 */

// If already logged in, redirect
if (isLoggedIn()) {
    header('Location: /admin/');
    exit;
}

// Handle login form
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = clean($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($username) || empty($password)) {
        $error = 'Please enter both username and password.';
    } elseif (loginAdmin($username, $password)) {
        header('Location: /admin/');
        exit;
    } else {
        $error = 'Invalid credentials. Please try again.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — <?= SITE_NAME ?> Admin</title>
    <meta name="robots" content="noindex, nofollow">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: { extend: { colors: { primary: { 600:'#4f46e5', 700:'#4338ca' } }, fontFamily: { sans: ['Inter','sans-serif'] } } }
        }
    </script>
</head>
<body class="font-sans bg-gray-50 antialiased min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-sm">
        <!-- Logo -->
        <div class="text-center mb-8">
            <div class="w-12 h-12 bg-primary-600 rounded-xl flex items-center justify-center mx-auto mb-3">
                <span class="text-white font-bold text-lg">G</span>
            </div>
            <h1 class="text-xl font-bold text-gray-900">Admin Login</h1>
            <p class="text-sm text-gray-500 mt-1"><?= SITE_NAME ?> Dashboard</p>
        </div>

        <!-- Error -->
        <?php if ($error): ?>
        <div class="mb-4 px-4 py-3 bg-red-50 border border-red-200 rounded-lg text-sm text-red-700">
            <?= $error ?>
        </div>
        <?php endif; ?>

        <!-- Login Form -->
        <form method="POST" class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm space-y-4">
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700 mb-1.5">Username or Email</label>
                <input type="text" id="username" name="username" required autofocus
                       value="<?= clean($_POST['username'] ?? '') ?>"
                       class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-600 focus:border-transparent">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1.5">Password</label>
                <input type="password" id="password" name="password" required
                       class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-600 focus:border-transparent">
            </div>
            <button type="submit" class="w-full px-4 py-2.5 text-sm font-semibold text-white bg-primary-600 rounded-xl hover:bg-primary-700 transition-colors">
                Sign In
            </button>
        </form>

        <p class="text-center text-xs text-gray-400 mt-6">
            <a href="<?= SITE_URL ?>" class="hover:text-gray-600">← Back to website</a>
        </p>
    </div>
</body>
</html>
<?php
/**
 * Admin Authentication
 */

function requireLogin() {
    if (!isset($_SESSION['admin_id'])) {
        header('Location: /admin/?page=login');
        exit;
    }
}

function isLoggedIn() {
    return isset($_SESSION['admin_id']);
}

function adminUser() {
    if (!isset($_SESSION['admin_id'])) return null;
    $stmt = db()->prepare("SELECT id, username, email, full_name, role FROM admin_users WHERE id = ? AND is_active = 1");
    $stmt->execute([$_SESSION['admin_id']]);
    return $stmt->fetch();
}

function loginAdmin($username, $password) {
    $stmt = db()->prepare("SELECT * FROM admin_users WHERE (username = ? OR email = ?) AND is_active = 1");
    $stmt->execute([$username, $username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password_hash'])) {
        $_SESSION['admin_id'] = $user['id'];
        $_SESSION['admin_role'] = $user['role'];
        $_SESSION['admin_name'] = $user['full_name'];

        // Update last login
        $update = db()->prepare("UPDATE admin_users SET last_login = NOW() WHERE id = ?");
        $update->execute([$user['id']]);

        return true;
    }
    return false;
}

function logoutAdmin() {
    unset($_SESSION['admin_id'], $_SESSION['admin_role'], $_SESSION['admin_name']);
    session_destroy();
}
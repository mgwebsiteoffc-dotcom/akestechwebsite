<?php
/** One-time, form-gated Shopify Growth Playbook download. */
$authorizedAt = $_SESSION['playbook_download_authorized'] ?? 0;

if (!$authorizedAt || (time() - $authorizedAt) > 600) {
    unset($_SESSION['playbook_download_authorized']);
    header('Location: ' . url('resources'));
    exit;
}

$filename = 'Shopify_Growth_Playbook_2026_Akestech.pdf';
$filepath = __DIR__ . '/../../assets/resources/' . $filename;

if (!is_file($filepath)) {
    http_response_code(404);
    header('Content-Type: text/plain; charset=UTF-8');
    echo 'The Shopify Growth Playbook PDF is not available yet. Please contact ' . SITE_EMAIL . '.';
    exit;
}

unset($_SESSION['playbook_download_authorized']);
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Content-Length: ' . filesize($filepath));
header('Cache-Control: private, no-store, max-age=0');
header('X-Content-Type-Options: nosniff');
readfile($filepath);
exit;

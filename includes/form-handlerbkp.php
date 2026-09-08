<?php
/**
 * Form Submission Handler
 */

if ($_SERVER['REQUEST_METHOD'] !== 'POST') return;

$action = $_POST['form_action'] ?? '';

switch ($action) {
    case 'contact':
    case 'audit':
        handleLeadForm($action);
        break;
    case 'newsletter':
        handleNewsletter();
        break;
}

function handleLeadForm($type) {
    verifyCsrf();
    
    $name    = clean($_POST['name'] ?? '');
    $email   = clean($_POST['email'] ?? '');
    $phone   = clean($_POST['phone'] ?? '');
    $company = clean($_POST['company'] ?? '');
    $website = clean($_POST['website'] ?? '');
    $revenue = clean($_POST['monthly_revenue'] ?? '');
    $message = clean($_POST['message'] ?? '');
    
    // Validation
    $errors = [];
    if (empty($name)) $errors[] = 'Name is required';
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email is required';
    if (empty($phone)) $errors[] = 'Phone number is required';
    
    if (!empty($errors)) {
        setFlash('error', implode(', ', $errors));
        return;
    }
    
    // Honeypot check
    if (!empty($_POST['website_url_hp'])) {
        setFlash('success', 'Thank you! We will get back to you soon.');
        return;
    }
    
    try {
        $stmt = db()->prepare("INSERT INTO leads (name, email, phone, company, website, monthly_revenue, message, form_type, source_page, utm_source, utm_medium, utm_campaign, ip_address, user_agent) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
        $stmt->execute([
            $name, $email, $phone, $company, $website, $revenue, $message,
            $type,
            $_SERVER['HTTP_REFERER'] ?? '',
            $_GET['utm_source'] ?? '',
            $_GET['utm_medium'] ?? '',
            $_GET['utm_campaign'] ?? '',
            $_SERVER['REMOTE_ADDR'] ?? '',
            $_SERVER['HTTP_USER_AGENT'] ?? ''
        ]);
        
        // Send email notification
        sendLeadNotification($name, $email, $phone, $message, $type);
        
        setFlash('success', 'Thank you! We will get back to you within 24 hours.');
    } catch (Exception $e) {
        error_log("Lead submission error: " . $e->getMessage());
        setFlash('error', 'Something went wrong. Please try again.');
    }
}

function handleNewsletter() {
    verifyCsrf();
    $email = clean($_POST['email'] ?? '');
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        setFlash('error', 'Please enter a valid email address.');
        return;
    }
    
    try {
        $stmt = db()->prepare("INSERT INTO leads (name, email, form_type, source_page, ip_address) VALUES ('Subscriber', ?, 'newsletter', ?, ?)");
        $stmt->execute([$email, $_SERVER['HTTP_REFERER'] ?? '', $_SERVER['REMOTE_ADDR'] ?? '']);
        setFlash('success', 'You are subscribed! Check your inbox.');
    } catch (Exception $e) {
        setFlash('error', 'Something went wrong. Please try again.');
    }
}

function sendLeadNotification($name, $email, $phone, $message, $type) {
    $to = ADMIN_EMAIL;
    $subject = "New " . ucfirst($type) . " Lead: {$name}";
    $body = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nType: {$type}\nMessage: {$message}";
    $headers = "From: " . SITE_EMAIL . "\r\nReply-To: {$email}";
    
    @mail($to, $subject, $body, $headers);
}
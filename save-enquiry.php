<?php
// save-enquiry.php

// Set headers for JSON response
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// File path for storing enquiries
$enquiriesFile = 'enquiries.json';

// Get POST data
$input = file_get_contents('php://input');
$data = json_decode($input, true);

// Validate data
if (!$data || !isset($data['name']) || !isset($data['email']) || !isset($data['phone'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Invalid data provided'
    ]);
    exit;
}

// Sanitize data
$enquiry = [
    'id' => uniqid('ENQ-', true),
    'name' => htmlspecialchars(trim($data['name'])),
    'email' => filter_var(trim($data['email']), FILTER_SANITIZE_EMAIL),
    'phone' => htmlspecialchars(trim($data['phone'])),
    'plan' => htmlspecialchars(trim($data['plan'])),
    'business' => htmlspecialchars(trim($data['business'])),
    'timestamp' => $data['timestamp'],
    'date' => $data['date'],
    'time' => $data['time'],
    'source' => $data['source'],
    'ip_address' => $_SERVER['REMOTE_ADDR'] ?? 'Unknown',
    'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown'
];

// Read existing enquiries
$enquiries = [];
if (file_exists($enquiriesFile)) {
    $jsonContent = file_get_contents($enquiriesFile);
    $enquiries = json_decode($jsonContent, true) ?? [];
}

// Add new enquiry
$enquiries[] = $enquiry;

// Save to file
$result = file_put_contents(
    $enquiriesFile,
    json_encode($enquiries, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
);

if ($result !== false) {
    // Optional: Send email notification
    $to = 'your-email@example.com'; // Change this to your email
    $subject = 'New Shopify Store Enquiry - ' . $enquiry['plan'];
    $message = "New enquiry received:\n\n";
    $message .= "Name: " . $enquiry['name'] . "\n";
    $message .= "Email: " . $enquiry['email'] . "\n";
    $message .= "Phone: " . $enquiry['phone'] . "\n";
    $message .= "Plan: " . $enquiry['plan'] . "\n";
    $message .= "Business: " . $enquiry['business'] . "\n";
    $message .= "Date: " . $enquiry['date'] . " " . $enquiry['time'] . "\n";
    
    $headers = "From: noreply@yourdomain.com\r\n";
    $headers .= "Reply-To: " . $enquiry['email'] . "\r\n";
    
    // Uncomment to enable email notifications
    // mail($to, $subject, $message, $headers);
    
    echo json_encode([
        'success' => true,
        'message' => 'Enquiry saved successfully',
        'enquiry_id' => $enquiry['id']
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Failed to save enquiry'
    ]);
}
?>
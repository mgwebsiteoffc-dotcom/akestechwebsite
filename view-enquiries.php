<?php
// view-enquiries.php

// Simple password protection
$password = 'admin123'; // Change this password
session_start();

if (!isset($_SESSION['authenticated'])) {
    if (isset($_POST['password']) && $_POST['password'] === $password) {
        $_SESSION['authenticated'] = true;
    } else {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Login - View Enquiries</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                }
                .login-box {
                    background: white;
                    padding: 40px;
                    border-radius: 10px;
                    box-shadow: 0 10px 40px rgba(0,0,0,0.2);
                }
                input[type="password"] {
                    padding: 10px;
                    width: 250px;
                    border: 2px solid #ddd;
                    border-radius: 5px;
                    margin: 10px 0;
                }
                button {
                    padding: 10px 30px;
                    background: #667eea;
                    color: white;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                }
            </style>
        </head>
        <body>
            <div class="login-box">
                <h2>Admin Login</h2>
                <form method="POST">
                    <input type="password" name="password" placeholder="Enter password" required>
                    <br>
                    <button type="submit">Login</button>
                </form>
            </div>
        </body>
        </html>
        <?php
        exit;
    }
}

// Logout functionality
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: view-enquiries.php');
    exit;
}

// Read enquiries
$enquiriesFile = 'enquiries.json';
$enquiries = [];
if (file_exists($enquiriesFile)) {
    $jsonContent = file_get_contents($enquiriesFile);
    $enquiries = json_decode($jsonContent, true) ?? [];
}

// Reverse array to show latest first
$enquiries = array_reverse($enquiries);

// Export to CSV
if (isset($_GET['export'])) {
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="enquiries_' . date('Y-m-d') . '.csv"');
    
    $output = fopen('php://output', 'w');
    fputcsv($output, ['ID', 'Name', 'Email', 'Phone', 'Plan', 'Business', 'Date', 'Time', 'Source', 'IP Address']);
    
    foreach ($enquiries as $enquiry) {
        fputcsv($output, [
            $enquiry['id'],
            $enquiry['name'],
            $enquiry['email'],
            $enquiry['phone'],
            $enquiry['plan'],
            $enquiry['business'],
            $enquiry['date'],
            $enquiry['time'],
            $enquiry['source'],
            $enquiry['ip_address']
        ]);
    }
    
    fclose($output);
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Shopify Store Enquiries</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: #f5f5f5;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header h1 {
            font-size: 28px;
        }
        .header-actions {
            display: flex;
            gap: 10px;
        }
        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            font-weight: 600;
        }
        .btn-white {
            background: white;
            color: #667eea;
        }
        .btn-danger {
            background: #ff4444;
            color: white;
        }
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .stat-card h3 {
            color: #667eea;
            font-size: 32px;
            margin-bottom: 5px;
        }
        .stat-card p {
            color: #666;
        }
        .enquiries-container {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th {
            background: #667eea;
            color: white;
            padding: 15px;
            text-align: left;
            font-weight: 600;
        }
        td {
            padding: 15px;
            border-bottom: 1px solid #eee;
        }
        tr:hover {
            background: #f9f9f9;
        }
        .enquiry-card {
            background: white;
            border: 1px solid #eee;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        .enquiry-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 2px solid #667eea;
        }
        .enquiry-id {
            color: #667eea;
            font-weight: bold;
        }
        .enquiry-date {
            color: #666;
        }
        .enquiry-details {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
        }
        .detail-item {
            display: flex;
            flex-direction: column;
        }
        .detail-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
        }
        .detail-value {
            color: #666;
        }
        .plan-badge {
            background: #667eea;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            display: inline-block;
            font-size: 14px;
        }
        .no-enquiries {
            text-align: center;
            padding: 60px;
            color: #999;
        }
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                gap: 20px;
            }
            .enquiry-details {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>📊 Shopify Store Enquiries</h1>
        <div class="header-actions">
            <a href="?export=csv" class="btn btn-white">📥 Export CSV</a>
            <a href="?logout=1" class="btn btn-danger">Logout</a>
        </div>
    </div>

    <div class="stats">
        <div class="stat-card">
            <h3><?php echo count($enquiries); ?></h3>
            <p>Total Enquiries</p>
        </div>
        <div class="stat-card">
            <h3><?php echo count(array_filter($enquiries, fn($e) => $e['date'] === date('d/m/Y'))); ?></h3>
            <p>Today's Enquiries</p>
        </div>
        <div class="stat-card">
            <h3><?php 
                $planCounts = array_count_values(array_column($enquiries, 'plan'));
                echo !empty($planCounts) ? array_search(max($planCounts), $planCounts) : 'N/A';
            ?></h3>
            <p>Most Popular Plan</p>
        </div>
    </div>

    <div class="enquiries-container">
        <h2 style="margin-bottom: 30px;">All Enquiries</h2>
        
        <?php if (empty($enquiries)): ?>
            <div class="no-enquiries">
                <h3>No enquiries yet</h3>
                <p>Enquiries will appear here once customers submit the form.</p>
            </div>
        <?php else: ?>
            <?php foreach ($enquiries as $enquiry): ?>
                <div class="enquiry-card">
                    <div class="enquiry-header">
                        <span class="enquiry-id"><?php echo htmlspecialchars($enquiry['id']); ?></span>
                        <span class="enquiry-date"><?php echo htmlspecialchars($enquiry['date'] . ' ' . $enquiry['time']); ?></span>
                    </div>
                    
                    <div class="enquiry-details">
                        <div class="detail-item">
                            <span class="detail-label">👤 Name</span>
                            <span class="detail-value"><?php echo htmlspecialchars($enquiry['name']); ?></span>
                        </div>
                        
                        <div class="detail-item">
                            <span class="detail-label">📧 Email</span>
                            <span class="detail-value">
                                <a href="mailto:<?php echo htmlspecialchars($enquiry['email']); ?>">
                                    <?php echo htmlspecialchars($enquiry['email']); ?>
                                </a>
                            </span>
                        </div>
                        
                        <div class="detail-item">
                            <span class="detail-label">📱 Phone</span>
                            <span class="detail-value">
                                <a href="tel:<?php echo htmlspecialchars($enquiry['phone']); ?>">
                                    <?php echo htmlspecialchars($enquiry['phone']); ?>
                                </a>
                            </span>
                        </div>
                        
                        <div class="detail-item">
                            <span class="detail-label">💼 Plan</span>
                            <span class="plan-badge"><?php echo htmlspecialchars($enquiry['plan']); ?></span>
                        </div>
                        
                        <div class="detail-item" style="grid-column: 1 / -1;">
                            <span class="detail-label">📝 Business Details</span>
                            <span class="detail-value"><?php echo htmlspecialchars($enquiry['business'] ?: 'Not provided'); ?></span>
                        </div>
                        
                        <div class="detail-item">
                            <span class="detail-label">🌐 IP Address</span>
                            <span class="detail-value"><?php echo htmlspecialchars($enquiry['ip_address']); ?></span>
                        </div>
                        
                        <div class="detail-item">
                            <span class="detail-label">📍 Source</span>
                            <span class="detail-value"><?php echo htmlspecialchars($enquiry['source']); ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</body>
</html>
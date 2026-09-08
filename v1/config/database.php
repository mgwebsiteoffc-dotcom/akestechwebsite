<?php
/**
 * Database Configuration & Connection
 */

define('DB_HOST', 'localhost');
define('DB_NAME', 'excelrbx_akestech_db');
define('DB_USER', 'excelrbx_akestechdb');
define('DB_PASS', 'Akestech@2019');
define('DB_CHARSET', 'utf8mb4');

// Site configuration
define('SITE_NAME', 'Akestech Infotech');
define('SITE_URL', 'https://akestech.com');
define('SITE_EMAIL', 'contact@akestech.com');
define('WHATSAPP_NUMBER', '917275013628');
define('ADMIN_EMAIL', 'contact@akestech.com');

// Shopify App
define('SHOPIFY_APP_URL', 'https://apps.shopify.com/your-app');

class Database {
    private static $instance = null;
    private $pdo;

    private function __construct() {
        try {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"
            ];
            $this->pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        } catch (PDOException $e) {
            error_log("Database connection failed: " . $e->getMessage());
            die("Connection failed. Please try again later.");
        }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->pdo;
    }

    // Prevent cloning
    private function __clone() {}
}

function db() {
    return Database::getInstance()->getConnection();
}
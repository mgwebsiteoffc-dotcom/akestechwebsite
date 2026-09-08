<?php
/**
 * Database Configuration & Connection
 */

/**
 * Database credentials.
 *
 * IMPORTANT: these constants used to be declared twice, unconditionally.
 * PHP's define() cannot redefine a constant — the second block only emitted
 * "Constant DB_HOST already defined" warnings and was silently ignored, so the
 * local credentials never took effect and every page died with
 * "Connection failed." on localhost. Credentials are now picked once.
 */

// Local development when served from localhost / 127.0.0.1 / ::1 (or via CLI).
$__host = strtolower((string)($_SERVER['HTTP_HOST'] ?? ''));
$__isLocal = (PHP_SAPI === 'cli')
    || $__host === ''
    || strncmp($__host, 'localhost', 9) === 0
    || $__host === '127.0.0.1'
    || $__host === '[::1]'
    || strncmp($__host, '127.0.0.1:', 10) === 0;

if ($__isLocal) {
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'akestech');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_CHARSET', 'utf8mb4');
} else {
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'excelrbx_akestech_db');
    define('DB_USER', 'excelrbx_akestechdb');
    define('DB_PASS', 'Akestech@2019');
    define('DB_CHARSET', 'utf8mb4');
}
define('IS_LOCAL_ENV', $__isLocal);
unset($__host, $__isLocal);

// Site configuration
define('SITE_NAME', 'Akestech Infotech');
define('SITE_URL', 'https://akestech.com');
define('SITE_EMAIL', 'contact@akestech.com');
define('WHATSAPP_NUMBER', '917275013628');
define('SITE_PHONE', '+917275013628');
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
            // On localhost show the real error so credentials can be fixed;
            // production keeps the original generic message.
            if (defined('IS_LOCAL_ENV') && IS_LOCAL_ENV) {
                die('Database connection failed: ' . htmlspecialchars($e->getMessage())
                    . '<br><br>Expected database "<strong>' . htmlspecialchars(DB_NAME)
                    . '</strong>" on <strong>' . htmlspecialchars(DB_HOST)
                    . '</strong> as user "<strong>' . htmlspecialchars(DB_USER)
                    . '</strong>". Update these in <code>config/database.php</code>.');
            }
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
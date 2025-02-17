<?php
// Configuration settings for the e-health application

// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'e_health_db');
define('DB_USER', 'root');
define('DB_PASS', 'password');

// Application settings
define('APP_NAME', 'E-Health Application');
define('APP_URL', 'http://localhost/e-health-app');

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Session settings
session_start();
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_secure', 1);
ini_set('session.use_strict_mode', 1);

// Set default timezone
date_default_timezone_set('America/New_York');

// Define paths
define('BASE_PATH', dirname(__DIR__));
define('PUBLIC_PATH', BASE_PATH . '/public');
define('SRC_PATH', BASE_PATH . '/src');
define('CONFIG_PATH', BASE_PATH . '/config');

// Database connection
function db_connect() {
    $connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    return $connection;
}

// Security settings
define('HASH_ALGO', 'sha256');
define('SECRET_KEY', 'your_secret_key_here');

// Logging settings
define('LOG_FILE', BASE_PATH . '/logs/app.log');

// Utility functions
function log_message($message) {
    $logfile = fopen(LOG_FILE, 'a');
    if ($logfile) {
        fwrite($logfile, date('Y-m-d H:i:s') . " - " . $message . "\n");
        fclose($logfile);
    }
}

// Email configuration
define('EMAIL_HOST', 'smtp.example.com');
define('EMAIL_PORT', 587);
define('EMAIL_USER', 'your_email@example.com');
define('EMAIL_PASS', 'your_email_password');

// Environment detection
define('ENVIRONMENT', 'development'); // Change to 'production' in production

// CORS settings
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Other environment variables can be defined here

?>
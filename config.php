<?php
// Nikas Restaurant POS - Configuration
define("DB_HOST", "localhost");
define("DB_NAME", "nikas_restaurant");
define("DB_USER", "root");
define("DB_PASS", "");
define("APP_NAME", "Nikas Restaurant POS");
define("APP_VERSION", "2.0");
define("TAX_RATE", 12.00);
define("CURRENCY", "₱");
define("SITE_URL", "http://localhost/nikas_restaurant_pos/");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

error_reporting(E_ALL);
ini_set("display_errors", 1);
date_default_timezone_set("Asia/Manila");
?>
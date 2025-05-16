<?php
// Load configuration from environment variables or define defaults
$host = getenv('DB_HOST') ?: 'localhost';
$username = getenv('DB_USER') ?: 'root';
$password = getenv('DB_PASS') ?: '';
$database = getenv('DB_NAME') ?: 'trazor';
    
// Create a connection
$connection = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$connection) {
    error_log("Database connection failed: " . mysqli_connect_error());
    die("Database connection failed. Please check the configuration.");
}

// Set character set to UTF-8 for proper encoding
mysqli_set_charset($connection, "utf8");

?>
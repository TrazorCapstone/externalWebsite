<?php
$host = getenv('DB_HOST') ?: 'localhost';
$username = getenv('DB_USER') ?: 'root';
$password = getenv('DB_PASS') ?: '';
$database = getenv('DB_NAME') ?: 'trazor';
    
$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    error_log("Database connection failed: " . mysqli_connect_error());
    die("Database connection failed. Please check the configuration.");
}

mysqli_set_charset($connection, "utf8");

?>
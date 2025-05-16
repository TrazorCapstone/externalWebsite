<?php
$host = getenv('DB_HOST') ?: 'localhost';
$username = getenv('DB_USER') ?: 'u353862197_admin';
$password = getenv('DB_PASS') ?: 'Arsy1234@';
$database = getenv('DB_NAME') ?: 'u353862197_trazor';
    
$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    error_log("Database connection failed: " . mysqli_connect_error());
    die("Database connection failed. Please check the configuration.");
}

mysqli_set_charset($connection, "utf8");

?>

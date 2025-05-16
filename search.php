<?php
include 'includes/connection.php'; 
include 'config.php'; 

$search = isset($_GET['search']) ? trim($connection->real_escape_string($_GET['search'])) : '';
$result = null;
$error_message = '';

if (!empty($search)) {
    $sql = "SELECT * FROM product WHERE judul LIKE '%$search%' OR barang LIKE '%$search%' OR deskripsi LIKE '%$search%'";
    $result = $connection->query($sql);

    if ($result->num_rows === 0) {
        $error_message = "No products found for \"$search\"";
    }
}
?>
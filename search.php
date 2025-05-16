<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'includes/connection.php'; 
include 'config.php'; 

$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$result = null;
$error_message = '';

if (!empty($search)) {
    try {
        $sql = "SELECT * FROM product WHERE barang LIKE ?";
        $stmt = $connection->prepare($sql);
        
        if ($stmt) {
            $searchParam = "%{$search}%";
            
            $stmt->bind_param("s", $searchParam);

            $stmt->execute();

            $result = $stmt->get_result();
            
            if ($result->num_rows === 0) {
                $error_message = "No products found for \"" . htmlspecialchars($search) . "\"";
            }
        } else {
            $error_message = "Database query preparation failed";
        }
    } catch (Exception $e) {
        $error_message = "An error occurred while searching";
    }
}

?>
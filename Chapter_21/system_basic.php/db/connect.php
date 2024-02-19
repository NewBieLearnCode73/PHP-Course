<!-- Kết nối database -->
<?php
#Khai báo biến localhost
$localhost = 'localhost';

#Khai báo biến username
$username = 'root';

#Khai báo biến password
$password = '';

#Khai báo biến database
$database = 'php_basic';

// Khởi tạo kết nối
try {
    $conn = new PDO('mysql:host=' . $localhost . ';dbname=' . $database, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Kết nối thành công";
} catch (PDOException $e) {
    echo "Kết nối thất bại: " . $e->getMessage();
}

?>
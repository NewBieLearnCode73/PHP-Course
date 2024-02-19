<?php
$id = $_GET['id'];

// Xóa dữ liệu trong database
$sql = "DELETE FROM users WHERE id = $id";

try {
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo "Xóa dữ liệu thành công";
} catch (PDOException $e) {
    echo "Xóa dữ liệu thất bại: " . $e->getMessage();
}



// Chuyển hướng sau khi xóa
redirect("?mod=users&act=main");

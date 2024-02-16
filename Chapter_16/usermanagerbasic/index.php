<?php
require 'data/post.php'; // Chứa mảng dữ liệu bài viết
require 'lib/data.php';  // Chỉ chứa hàm xem mảng đó có in ra được dữ liệu hay không (Không có cũng được)
?>

<?php
$page = !empty($_GET['page']) ? $_GET['page'] : 'home';

$path = "pages/{$page}.php";

// Kiểm tra
if (file_exists($path)) {
    require($path);
} else {
    require('inc/404.php');
}
?>
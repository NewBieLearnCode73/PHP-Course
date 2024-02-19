<?php
require 'db/connect.php'; // Chứa kết nối database
require 'data/post.php'; // Chứa mảng dữ liệu bài viết
require 'lib/url.php'; // Chứa hàm chuyển đổi URL
require 'lib/data.php';  // Chỉ chứa hàm xem mảng đó có in ra được dữ liệu hay không (Không có cũng được)
require 'lib/template.php'; // Chứa header và footer
?>

<?php
$mod = !empty($_GET['mod']) ? $_GET['mod'] : 'home';
$act = !empty($_GET['act']) ? $_GET['act'] : 'main';

$path = "modules/{$mod}/{$act}.php";

// Kiểm tra
if (file_exists($path)) {
    require($path);
} else {
    require('inc/404.php');
}
?>
<?php
session_start();
ob_start();
require 'data/user.php'; // Chứa mảng dữ liệu tài khoản
require 'lib/data.php'; // Function
require 'lib/url.php';
require 'lib/user.php';
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
<?php
session_start();
ob_start();

// Dữ liệu
require 'data/page.php';
require 'data/product.php';

// Thư viện hàm
require 'lib/number.php';
require('lib/url.php');
require 'lib/data.php';  // Chỉ chứa hàm xem mảng đó có in ra được dữ liệu hay không (Không có cũng được)
require 'lib/template.php'; // Chứa header và footer
require 'lib/pages.php';
require 'lib/product.php';
require 'lib/cart.php';
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
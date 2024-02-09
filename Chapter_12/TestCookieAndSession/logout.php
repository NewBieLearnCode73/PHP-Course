<?php
session_start();
unset($_SESSION['user']);
setcookie('username', 'chieu987bl', time() - 3600, '/');
setcookie('password', 'Chieu0945046924', time() - 3600, '/');
header("Location: login.php");
exit; // Đảm bảo rằng không có mã HTML hoặc văn bản nào được xuất ra trước hàm header()

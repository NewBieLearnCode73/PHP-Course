<?php
session_start();
// NGười dùng login thành công
// $is_login = true;
$_SESSION['is_login'] = true;
$_SESSION['user_login'] = 'DinhChieu';


header("Location: index.php");

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HỆ THỐNG ĐIỀU HƯỚNG CƠ BẢN</title>
    <link rel="stylesheet" href="public/css/reset.css" />
    <link rel="stylesheet" href="public/css/style.css" />
</head>

<body>
    <div id="wrapper">
        <div id="header">
            <div id="user_login">
                <p>Xin chào <strong><?php if (is_login()) {
                                        echo info_user('username');
                                    } ?></strong> <a href="?page=logout">(Thoát)</a> </p>
            </div>
            <a href="" id="logo">DINHCHIEU</a>
            <ul id="main-menu">
                <li><a href="?page=home">Trang chủ</a></li>
                <li><a href="?page=about">Giới thiệu</a></li>
                <li><a href="?page=post">Tin tức</a></li>
                <li><a href="?page=product">Sản phẩm</a></li>
                <li><a href="?page=course">Khóa học</a></li>
                <li><a href="?page=contact">Liên hệ</a></li>
            </ul>
        </div>
        <!-- End Header -->
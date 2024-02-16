<?php
# Lưu trữ mảng dữ liệu user

/* THÔNG TIN USER:
Họ và tên: fullname
Tên đăng nhập: username
Mật khẩu: password
Email: email
id: id
*/

$list_user = array(
    1 => array(
        'id' => 1,
        'fullname' => 'Nguyễn Đình Chiêu',
        'username' => 'chieu987bl',
        'password' => md5('ChieuChieu123'),
        'email' => 'ndchieu73@gmail.com',
    ),
    2 => array(
        'id' => 2,
        'fullname' => 'Nguyễn Thị Hương',
        'username' => 'huong456vn',
        'password' => md5('HuongHuong456@'),
        'email' => 'nthuong456@gmail.com',
    ),
    3 => array(
        'id' => 3,
        'fullname' => 'Trần Anh Tuấn',
        'username' => 'tuan789us',
        'password' => md5('TuanTuan789@'),
        'email' => 'tuan789@gmail.com',
    ),
);

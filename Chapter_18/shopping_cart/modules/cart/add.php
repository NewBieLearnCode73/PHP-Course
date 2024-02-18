<?php

# Lấy được thông tin sản phẩm cần thêm vào giỏ hàng
$id = (int)$_GET['id'];
add_cart($id);

// Chuyển người dùng đến show giỏ hàng
redirect('?mod=cart&act=show');

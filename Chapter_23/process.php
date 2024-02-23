<?php
// Make sure to sanitize and validate input before using it in calculations
$price = (int)$_POST['price'];
$num_order = (int)$_POST['num_order'];

$total = $price * $num_order;

// Tất cả những gì mà bên js nhận thì sẽ bằng file bên server echo lên và được đưa vào đối số data bên trong function success
// Sử dụng json_encode() để mã hóa dữ liệu thành json

echo json_encode($total); // Corrected this line to json_encode

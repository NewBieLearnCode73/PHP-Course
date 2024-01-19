<!-- Sử dụng unset() để xóa mảng -->

<?php
$a = array(1,2,3,4,5,6,7,8,9,10);

unset( $a[0]);

echo $a[0]; // Thông báo lỗi

echo $a[1]; // In ra số 2

unset($a); // Xóa mảng





?>
<!-- Trong PHP biến được khai báo ngoài hàm không sử dụng được bên trong hàm -->

<?php
$a = 10;
$b = 20;


function sum(){


    return $GLOBALS['a'] + $GLOBALS['b'];
    // return $a + $b;  // Dòng này lỗi


    // Hoặc sử dụng từ khóa global
    /*
    global $a, $b;
    return $a + $b;
    */
}

echo sum();


?>
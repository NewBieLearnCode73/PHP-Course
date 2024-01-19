<!-- Là biến được PHP tạo ra 
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE


CHÚNG LÀ MẢNG ĐƯỢC TẠO RA VÀ LƯU TRỮ NHỮNG DỮ LIỆU
-->


<?php
$x = 10;

function myFunction() {
    echo $GLOBALS['x'];
}

myFunction();
?>
<!-- 
. : Nối 2 chuỗi
.= : Nối thêm chuỗi
 -->


 <?php
$str1 = "Dinh";
$str2 = " Chieu";

echo $str1 . $str2;

echo "<br>";

$str3 = "Nguyen "; 

$str3 .= $str1.$str2; // Nối 2 chuỗi và nối vào chuỗi 3

echo $str3;
?>
<!-- 
    Hằng số không thay đổi
- define("name","value");
- Các hằng được hệ thống cung cấp

Đặt tên hằng nên viết hoa toàn bộ 
-->


<?php
define("MINSIZE","50"); // Viết hoa toàn bộ

echo MINSIZE;
echo "<br>";
// Hệ thống cung cấp
echo __LINE__; // Số dòng hiện tại
echo "<br>";
echo __DIR__; // Đường dẫn đến folder chứa file hiện tại
echo "<br>";
echo __FILE__; // Đường dẫn đến file được gọi hằng
echo "<br>";
echo __CLASS__; // class trong OOP
echo "<br>";
echo __METHOD__; // method trong OOP
echo "<br>";
echo __NAMESPACE__; // Tên namespace trong OOP
?>
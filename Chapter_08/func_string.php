<?php
// Tìm độ dài của chuỗi
echo "<pre></pre>";
echo strlen("DinhChieu");
echo "<br>";

//In hoa kí tự đầu tiên
echo ucfirst("hello world!");
echo "<br>";

//In hoa kí tự đầu tiên trong 1 từ
echo ucwords("nguyen dinh chieu");
echo "<br>";

//Loại bỏ những khoảng trắng dư thừa
echo trim("Nguyen               Dinh       Chieu");
echo "<br>";

// Lặp lại từ bao nhiêu lần
echo str_repeat("Wow",13);
echo "<br>";

// Mã hóa 1 kí tự hoặc 1 chuỗi 1 chiều
echo md5("Nguyen Dinh Chieu");
echo "<br>";

// Chuyển mảng thành chuỗi và nối kí tự thêm vào
$a = array(1,2,3,4,5,6,7,8,9,10);
echo join(" - ", $a); // 1 - 2 - 3 - 4 - 5 - 6 - 7 - 8 - 9 - 10
echo "<br>";
echo implode(" - ", $a); // TƯƠNG TỰ HÀM JOIN
echo "<br>";

// Chuyển chuỗi thành mảng
$pizza = "piece1 piece2 piece3 piece4 piece5";
print_r(explode(" ", $pizza));
echo "<br>";


// htmlspecialchars giúp chuyển đổi những kí tự trùng với keyword của html thành dạng có thể đọc được
$str = "This is some <b>bold</b> text.";
echo htmlspecialchars($str);

?>
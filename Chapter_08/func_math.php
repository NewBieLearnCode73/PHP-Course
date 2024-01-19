<!-- CÁC HÀM TOÁN HỌC THƯỜNG ĐƯỢC DÙNG TRONG PHP
abs: Lấy trị tuyệt đối
ceil: Làm tròn thành số lớn hơn

 -->



 <?php
echo "<pre></pre>";
echo abs(-7); // Lấy trị tuyệt đối
echo "<br>";

// Làm tròn thành số lớn hơn
echo ceil(4.3); // Số 5
echo "<br>";

// Làm tròn dưới
echo floor(5.2);
echo "<br>";

// Tìm số lớn nhất trong dãy (Truyền hàm)
echo max(5,2,3,24); // 24
echo "<br>";

// TƯơng tự với min
echo min(-1,23,4,1,-5);
echo "<br>";

// Căn bậc 2
echo sqrt(4);
echo "<br>";

// random số
echo rand(0,10);
echo "<br>";

// làm tròn số thập phân theo nguyên tắc 
echo round(2.5);
echo "<br>";



?>
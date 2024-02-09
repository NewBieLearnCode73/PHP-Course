<?php
// Mảng 1 chiều
$list = array(1, 2, 3, 4, 5);
print_r($list);

echo "<br>";

// Thay đổi index
$info = array("name" => "Chieu", "age" => 20, "class" => "CT07");
print_r($info);

// Mảng nhiều chiều
$list_user = array(
    1 => array(
        "id" => 1,
        "fullname" => "John David",
        "age" => 30
    ),

    2 => array(
        "id" => 2,
        "fullname" => "Alaba",
        "age" => 27
    ),

    3 => array(
        "id" => 3,
        "fullname" => "Bellingham",
        "age" => 20
    )
);


echo "<br>";
print_r($list_user);



// Thêm phần tử vào array rỗng
$list = array();

$list[] = 1; // Thêm 1 
$list[] = 2; // Thêm 2
$list[] = 3; // Thêm 3

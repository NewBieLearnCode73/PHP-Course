<?php
    $list = array(1,2,3,4,5);

    // Kiểm tra 1 key có tồn tại hay không
    array_key_exists(7, $list); // key là 7 không tồn tại


    // Kiểm tra 1 giá trị có tồn tại hay không
    echo "<br>";
    echo in_array("1", $list);

    // Nối nhiều mảng với nhau
    $arr1 = array(1,2,3,4,5);
    $arr2 = array(6,7,8,9,10);

    $result = array_merge($arr1, $arr2);
    
    foreach ($result as $key => $value) {
        echo $value;
    }

    // Hàm đếm số phần tử của mảng
    echo "<br>";
    echo count($result); 

    // Kiểm tra 1 biến có phải mảng hay không
    echo "<br>";
    echo is_array($list);

    // Trả về các giá trị của mảng không bao gồm key 
    echo "<br>";
    $a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
    print_r(array_values($a)); // Không bao gồm key được đặt tên

    
?>
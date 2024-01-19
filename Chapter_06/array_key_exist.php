<?php
$info = array(
    'id' => 1,
    'name' =>'DinhChieu',
    'age'=> 20
);

// Kiểm tra xem key có tồn tại hay không
if(array_key_exists('id', $info)){
    echo "Tồn tại!";
}


?>
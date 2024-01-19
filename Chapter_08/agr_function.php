<?php

// func_get_arg(): 

//Lấy đối số truyền vào bên trong hàm
function myFunction1(){
    // Lấy từng số 
    $a = func_get_arg(0); // Tương đương số 2
    $b = func_get_arg(1); // Tương đương số 3

    // Lấy mảng chứa toàn bộ đối số truyền vào
    $list = func_get_args();

    echo "<pre></pre>";
    echo $a + $b;
    echo "<br>";
    echo $list[0];
}

echo myFunction1(2,3);



?>
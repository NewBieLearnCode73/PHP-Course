<?php


if(isset($_POST['btn_reg'])){
    $genders = array(
        'male' => 'Nam',
        'female'=> 'Nữ'
    ); 


    if(empty($_POST['gender'])){
        echo "Chưa chọn!";
        
    }
    else{
       echo $genders[$_POST['gender']];
    }

}
?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Đăng nhập</h1>
    
    <form action="" method="post">
        <input type="radio" name="gender" id="" value="male"> Nam <br>
        <input type="radio" name="gender" id="" value="female"> Nữ <br>
        <input type="submit" value="Register" name="btn_reg">
    </form>
</body>
</html>
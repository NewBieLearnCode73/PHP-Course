<?php
if(isset($_POST['btn-search'])){
    // Hiển thị thông tin

    if(empty($_POST['username'])){
        echo "Không được để trống tên đăng nhập";
    }

    else{
        $username = $_POST["username"];
        echo $username;
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
    <h1>ĐĂNG NHẬP</h1>

<form action="http://localhost:3000/Chapter_10/input_text.php" method="post">
    <div>
        <label for="user">Username</label>
        <input type="text" name="username" id="user">
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>

    <input type="submit" name='btn-search' value="Đăng nhập">

</form>


<style>
    div {
        margin: 5px;
    }
</style>
</body>
</html>
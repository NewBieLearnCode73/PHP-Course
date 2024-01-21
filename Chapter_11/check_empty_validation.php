<?php
if(isset($_POST['btn_login'])){
    $error = array(); // Mảng lưu lỗi, phất cờ

    if(empty($_POST['username'])){
        // Hạ cờ
        $error['username'] = 'Không được để trống tên đăng nhập';
    }
    else {
        $username = $_POST['username'];
    }

    if(empty($_POST['password'])){
        // Hạ cờ
        $error['password'] = 'Không được để trống mật khẩu';
    }
    else {
        $password = $_POST['password'];
    }

    // Kết luận
    if(empty($error)){
        // Xử lí không có lỗi
        echo "Username: {$username} <br> Password: {$password}";
    }
    

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuẩn hóa dữ liệu form đăng nhập</title>
</head>
<body>
    <form action="http://localhost:3000/Chapter_11/check_empty_validation.php" method="post" >
        <label for="username">Tên đăng nhập</label><br>
        <input type="text" name="username" id="username"><br>
        <p class="error">
        <?php 
            if(!empty($error['username'])){
                echo $error['username'];
            }
        ?>
        </p>

        <label for="password">Mật khẩu</label><br>
        <input type="password" name="password" id="password"><br>
        <p class="error">
        <?php 
            if(!empty($error['password'])){
                echo $error['password'];
            }
        ?>
        </p>

        <br>
        <input type="submit" value="Đăng nhập" name="btn_login">
    </form>


    <style>
        .error{
            font-size: small;
            margin: 0;
            padding: 0;
            color: red;
        }
    </style>

</body>
</html>
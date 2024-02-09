<?php
$error = array(); // Di chuyển đoạn code này ra ngoài để tránh lỗi undefined variable

if (isset($_POST['btn_login'])) {
    // Chứa thông tin trong server
    $info_user = array(
        'username' => 'admin',
        'password' => 'admin!@#'
    );

    // Kiểm tra dữ liệu nhập vào
    if (empty($_POST['username'])) {
        $error['username'] = "Không được để trống tên đăng nhập";
    } else {
        $username = $_POST["username"];
    }

    if (empty($_POST['password'])) {
        $error['password'] = 'Không được để trống mật khẩu';
    } else {
        $password = $_POST['password'];
    }

    // Kiểm tra login
    if (empty($error)) {
        if ($username == $info_user['username'] && $password == $info_user['password']) {
            $redirect_to = isset($_POST['redirect_to']) ? $_POST['redirect_to'] : 'index.php';

            // CHuyển hướng( Nếu như đúng tên đăng nhập và mật khẩu thì nó sẽ chuyển hướng đến địa chỉ trong biến $redirect_to)
            header("Location: $redirect_to");
            exit();
        } else {
            $error['login'] = 'Sai tên đăng nhập hoặc mật khẩu';
            echo $error['login'];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhận dữ liệu từ hidden field</title>
</head>

<body>

    <form action="http://localhost:3000/Chapter_10/hidden_field.php" method="post">
        <label for="username">Tên đăng nhập</label> <br>
        <input type="text" name="username" id="username"> <br>

        <?php
        if (isset($error['username'])) {
            echo $error['username'];
        }
        ?>

        <label for="password">Mật khẩu</label> <br>
        <input type="password" name="password" id="password"> <br>

        <?php
        if (isset($error['password'])) {
            echo $error['password'];
        }
        ?>

        <input type="hidden" name="redirect_to" value="https://www.facebook.com/profile.php?id=100032686231256&locale=vi_VN"> <br>
        <!-- redirect_to :  cart.php-->

        <input type="submit" value="Đăng nhập" name="btn_login">
    </form>

</body>

</html>
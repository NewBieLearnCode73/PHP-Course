<?php
require 'data/user.php';

$error = array();

function reUse($value)
{
    echo htmlspecialchars(isset($_POST[$value]) ? $_POST[$value] : '');
}

function check_username()
{
    if (isset($_POST['btn-login'])) {
        global $error;
        $partten_username = '/^[A-Za-z][A-Za-z0-9_]{7,29}$/';

        if (empty($_POST['username'])) {

            $error['username'] = 'Tên đăng nhập không được để trống';
            echo '<p class="show-error">Tên đăng nhập không được để trống</p>';
        } else if (!preg_match($partten_username, $_POST['username'])) {
            $error['username'] = 'Tên đăng nhập không đúng định dạng';
            echo '<p class="show-error">Tên đăng nhập không đúng định dạng</p>';
        }
    }
}


function check_password()
{
    if (isset($_POST['btn-login'])) {
        global $error;
        $partten_password = '/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/';

        if (empty($_POST['password'])) {
            $error['password'] = 'Mật khẩu không được để trống';
            echo '<p class="show-error">Mật khẩu không được để trống</p>';
        } else if (!preg_match($partten_password, $_POST['password'])) {
            $error['password'] = 'Mật khẩu không đúng định dạng';
            echo '<p class="show-error">Mật khẩu không đúng định dạng</p>';
        }
    }
}

function is_login_cpl()
{
    if (isset($_POST['btn-login'])) {
        global $error;

        // Login thành công
        if (check_login($_POST['username'], $_POST['password'])) {
            // Lưu trữ phiên đăng nhập
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = $_POST['username'];
            // SỬ dụng cookie để ghi nhớ đăng nhập
            if (!empty($_POST['remember_me'])) {
                setcookie('is_login', true,  time() + 86400, '/');
                setcookie('user_login', $_POST['username'],  time() + 86400, '/');
            }


            // Chuyển hướng vào bên trong hệ thống
            redirect('?pages=home');
        } else {
            if (!empty($_POST['password']) && empty($error['password'])) {
                $error['account'] = 'Tên đăng nhập hoặc mật khẩu không chính xác';
                echo '<p class="show-error">' . $error['account'] . '</p>';
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="public/css/reset.css" />
    <link rel="stylesheet" href="public/css/login.css" />
</head>

<body>
    <div id="wp-form-login">
        <h1>Đăng nhập</h1>

        <form id="form-login" action="" method="post">
            <input type="text" id="username" name="username" value="<?php reUse('username'); ?>" placeholder="Username">
            <?php check_username(); ?>

            <input type="password" id="password" name="password" value="" placeholder="Password">
            <?php check_password(); ?>

            <div class="option_login">
                <input type="checkbox" name="remember_me" id="remember_me">
                <label for="remember_me">Ghi nhớ đăng nhập</label>
                <a href="">Quên mật khẩu?</a>
            </div>

            <input type="submit" id="btn-login" name="btn-login" value="Đăng nhập">
            <?php is_login_cpl() ?>
        </form>


    </div>
</body>

</html>
<?php
session_start();
$error = array();
$info = array();

if (isset($_POST['btn'])) {
    $info = array(
        "username" => "chieu987bl",
        "password" => "Chieu0945046924"
    );
}

function reUse($value)
{
    if (isset($_POST[$value])) {
        echo htmlspecialchars($_POST[$value]);
    }
}

function check_username()
{
    $partten_username = '/^[A-Za-z][A-Za-z0-9_]{7,29}$/';

    // Username is empty?
    if (empty($_POST['username'])) {
        echo '<p class="show-error">Tên đăng nhập không được để trống</p>';
    }

    // Username is fit?
    else if (!preg_match($partten_username, $_POST['username'])) {
        echo '<p class="show-error">Tên đăng nhập không đúng định dạng</p>';
    }
}

function check_password()
{
    global $info; // Add this line

    $partten_pass = '/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/';

    if (empty($_POST['password'])) {
        echo '<p class="show-error">Mật khẩu không được để trống</p>';
    }

    // Is password fit? 
    else if (strlen($_POST['password']) < 8) {
        echo '<p class="show-error">Mật khẩu từ 8 kí tự trở lên</p>';
    } else if (!preg_match($partten_pass, $_POST['password'])) {
        echo '<p class="show-error">Mật khẩu không đúng định dạng</p>';
    } else if ($_POST['username'] === $info['username'] && $_POST['password'] === $info['password']) {
        $_SESSION['user'] = 'Dinh Chieu';
        setcookie('username', 'chieu987bl', time() + 3600, '/');
        setcookie('password', 'Chieu0945046924', time() + 3600, '/');
        header('Location: index.php');
        exit();
    } else {
        echo '<p class="show-error">Tên đăng nhập hoặc mật khẩu không chính xác</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>

<body>
    <h1>Đăng nhập</h1>
    <form action="" method="post">
        <label for="username">Tên đăng nhập</label> <br>
        <input type="text" name="username" id="username" value="<?php reUse("username") ?>"><br>
        <?php check_username(); ?>

        <label for="password">Mật khẩu</label><br>
        <input type="password" name="password" id="password">
        <?php check_password(); ?>

        <div class="wrap-submit"><input type="submit" name="btn" value="Đăng nhập"></div>
    </form>
</body>

<style>
    .wrap-submit {
        padding-top: 10px;
    }

    .show-error {
        font-size: smaller;
        color: red;
        box-sizing: border-box;
        margin: 0;
    }
</style>

</html>
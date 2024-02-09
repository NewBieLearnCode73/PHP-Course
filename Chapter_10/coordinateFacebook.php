<?php
$error = array();
$info = array();

if (isset($_POST['btn'])) {
    $info = array(
        "username" => "chieu987bl",
        "password" => "123456"
    );
}

function reUse($value)
{
    if (isset($_POST[$value])) {
        echo htmlspecialchars($_POST[$value]);
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
        <?php
        if (empty($_POST['username'])) {
            echo '<p class="show-error">Vui lòng nhập tên đăng nhập</p>';
            $error["username"] = "fullfill";
        }
        ?>

        <label for="password">Mật khẩu</label><br>
        <input type="password" name="password" id="password">
        <?php
        if (empty($_POST['password'])) {
            echo '<p class="show-error">Vui lòng nhập mật khẩu</p>';
            $error["password"] = "fullfill";
        } else if (!empty($_POST['username']) && !empty($_POST['password'])) {
            if ($_POST['username'] !== $info['username'] or $_POST['password'] !== $info['password']) {
                echo '<p class="show-error">Tên đăng nhập hoặc mật khẩu không chính xác</p>';
            } else {
                // Perform the redirection here
                header("Location: https://www.facebook.com/profile.php?id=100032686231256&locale=vi_VN");
                exit(); // Ensure that no further code is executed after the redirection
            }
        }
        ?>

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
<?php
$info = array(
    'username' => 'admin',
    'password' => '123456',
);

$redirect_to = "https://www.facebook.com/profile.php?id=100032686231256&locale=vi_VN";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="http://localhost:3000/Chapter_10/excercise.php" method="post" onsubmit="return validateForm()">
        <div class="altitude">
            <label for="username">Tên đăng nhập</label> <br>
            <input type="text" name="username" id="username" placeholder="Tên đăng nhập">
            <p class="errorUsername">Vui lòng nhập tên đăng nhập</p>
        </div>

        <div>
            <label for="password">Mật khẩu</label><br>
            <input type="password" name="password" id="password" placeholder="Mật khẩu">
            <p class="errorPassword">Vui lòng nhập mật khẩu</p>
        </div>

        <div>
            <input type="hidden" name="redirect_to" value="<?php echo $redirect_to; ?>">
            <input type="submit" name="btn" value="Đăng nhập">
        </div>
    </form>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .errorUsername,
        .errorPassword {
            margin: 4px 0 4px;
            font-size: small;
            color: red;
            display: none;
        }
    </style>

    <script>
        function validateForm() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            if (username === '') {
                document.querySelector('.errorUsername').style.display = 'block';
                return false;
            } else {
                document.querySelector('.errorUsername').style.display = 'none';
            }

            if (password === '') {
                document.querySelector('.errorPassword').style.display = 'block';
                return false;
            } else {
                document.querySelector('.errorPassword').style.display = 'none';
            }

            return true;
        }
    </script>
</body>

</html>
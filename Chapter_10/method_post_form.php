<!-- 
Phương thức POST
 - Khi chưa submit form thì method vẫn là get dù cho set là post đi chăng nữa

-->

<?php


function show_array($data)
{
    if (is_array($data)) {
        echo "<pre></pre>";
        print_r($data);
    }
}

// Nếu như form đã được submit thì sẽ được 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['user'];
    $password = $_POST['password'];

    echo "{$username} - {$password}";
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

    <form action="http://localhost:3000/Chapter_10/method_post_form.php" method="post">
        <div>
            <label for="user">Username</label>
            <input type="text" name="user" id="user">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>

        <input type="submit" value="Đăng nhập">

    </form>

    <style>
        div {
            margin: 5px;
        }
    </style>

</body>

</html>
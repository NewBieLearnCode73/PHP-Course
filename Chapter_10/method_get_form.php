<?php
function show_array(){
    print_r ($_GET);
}


if(isset($_GET['btn-search']) ){

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

<form action="http://localhost:3000/Chapter_10/method_get_form.php" method="get">
    <div>
        <label for="user">Username</label>
        <input type="text" name="user" id="user">
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
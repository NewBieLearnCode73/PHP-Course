<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error-message {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form action="http://localhost:3000/Chapter_10/select_option.php" method="post">
        <label for="province"><b>Chọn tỉnh thành</b></label>
        <select name="province" id="province">
            <option value="">--Chọn tỉnh thành--</option>
            <option value="HCM">Hồ Chí Minh</option>
            <option value="HN">Hà Nội</option>
            <option value="BL">Bạc Liêu</option>
        </select>
        <div><input type="submit" value="Xác nhận" name="btn"></div>
    </form>
    <?php
        if(isset($_POST['btn']) && empty($_POST['province'])) {
            echo '<div class="error-message">Vui lòng chọn tỉnh thành!</div>';
        }

            if(isset($_POST['btn'])){
        if(isset($_POST['province'])){
            echo $_POST['province'];
        } 
    }
    ?>
</body>
</html>

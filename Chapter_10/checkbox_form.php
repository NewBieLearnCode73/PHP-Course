<?php
if (isset($_POST['btn'])) {
    if (isset($_POST['colors'])) {
        // Lặp qua mảng chứa các giá trị của checkbox đã chọn
        foreach ($_POST['colors'] as $selectedColor) {
            echo $selectedColor . "<br>";
            // Thực hiện xử lý dữ liệu ở đây
        }
    } else {
        echo "Không có màu nào được chọn.";
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
    <h1>Đăng kí</h1>
    <form method="post" action="http://localhost:3000/Chapter_10/checkbox_form.php">
        <!-- TÊN ĐƯỢC LƯU TRỮ Ở DẠNG MẢNG -->
        <input type="checkbox" name="colors[]" value="red"> Red
        <input type="checkbox" name="colors[]" value="blue"> Blue
        <input type="checkbox" name="colors[]" value="green"> Green
        <input type="submit" name="btn" value="Submit">
    </form>

    <style>
        #quote {
            width: 350px;
            height: 200px;
            overflow: scroll;
        }

        button {
            margin: 5px;
        }
    </style>


</body>

</html>
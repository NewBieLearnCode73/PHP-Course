<?php
require 'lib/data.php'; // LẤy function 

if (isset($_FILES['file'])) {
    show_array($_FILES);
    $error = array();
    $upload_dir = 'uploads/';
    $upload_file = $upload_dir . $_FILES['file']['name'];

    # Xử lí upload đúng file ảnh
    $type_allow = array('png', 'gif', 'jpeg', 'jpg');

    // Lấy đuôi file
    $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION); // lẤY ĐUÔI MỞ RỘNG

    // Kiểm tra đuôi file có nằm trong mảng hay không
    if (!in_array(strtolower($type), $type_allow)) { // Chuyển đuôi về dạng không viết hoa
        $error['type'] = "Chỉ được upload các file có đuôi hợp lệ";
    } else {
        #Upload file có kích thước cho phép (<20MB ~ 21 triệu byte)
        $file_size = $_FILES['file']['size'];
        if ($file_size > 21000000) {
            $error['file_size'] = "Chỉ được upload file bé hơn 20MB";
        }

        #Kiểm tra file trùng tên trên hệ thống
        if (file_exists($upload_file)) {
            $error['file_exists'] = "File đã tồn tại trên hệ thống";
        }
    }


    if (empty($error)) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
            echo "<img src='{$upload_file}' alt=''>";
            echo 'Upload file thành công';
        } else {
            echo 'Upload file không thành công';
        }
    } else {
        show_array($error);
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UP LOAD FILE IMAGES TO SERVER WITH PHP</title>
</head>

<body>
    <h1>UPLOAD file</h1>

    <form action="" enctype="multipart/form-data" method="post">
        Send this file: </br> <input type="file" name="file"> </br> </br>
        <input type="submit" value="Upload file">
    </form>
</body>

</html>
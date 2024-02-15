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

        // Kiểm tra file trùng tên trên hệ thống và thay thế
        if (file_exists($upload_file)) {
            // Tên file phía trước dấu .
            $file_name = pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);
            // Tên đuôi file là $type đã thực hiện trước đó

            $count = 1;
            $new_file_name = $file_name;

            // Giới hạn số lần lặp để tránh vòng lặp vô hạn
            $max_attempts = 1000;

            while (file_exists($upload_dir . $new_file_name . '.' . $type) && $count < $max_attempts) {
                $new_file_name = $file_name . '_' . $count; // Cập nhật lại new_file_name
                $count++;
            }

            // Cập nhật đường dẫn mới sau khi thoát khỏi vòng lặp
            $_FILES['file']['name'] = $new_file_name . '.' . $type;

            $upload_file = $upload_dir . $_FILES['file']['name'];
        }
    }


    if (empty($error)) {
        // Hàm thực hiện di chuyển từ file tạm thời vào bên trong file thư mục
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
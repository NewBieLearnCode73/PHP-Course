<?php
require 'lib/data.php'; // LẤy function 

if (isset($_FILES['file'])) {
    show_array($_FILES);

    // Thư mục chứa file upload
    $upload_dir = 'uploads/';
    // Đường dẫn của file sau khi upload
    $upload_file = $upload_dir . $_FILES['file']['name'];

    if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
        echo 'Upload file thành công';
    } else {
        echo 'Upload file không thành công';
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UP LOAD FILE TO SERVER WITH PHP</title>
</head>

<body>
    <h1>UPLOAD file</h1>

    <form action="" enctype="multipart/form-data" method="post">
        Send this file: </br> <input type="file" name="file"> </br> </br>
        <input type="submit" value="Upload file">
    </form>
</body>

</html>
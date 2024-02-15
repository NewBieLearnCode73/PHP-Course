## Cấu trúc HTML của Form Upload

```php
<form enctype="multipart/form-data" action="upload_file.php" method="POST">
    Send this file: <input name="file" type="file" /> <br>
    <input type="submit" value="Send File" />
</form>
```

## THÔNG TIN FILE UPLOAD

Thông tin file upload được lưu trữ trong biển toàn cục $\_FILES
Bao gồm:

```php
$_FILES['file']['name'] => Tên file
$_FILES['file']['type'] => Loại file
$_FILES['file']['size'] => Kích thước file
$_FILES['file']['tmp_name'] => Đường dẫn tạm thời của file
$_FILES['file']['error'] => Thông báo lỗi
```

## XỬ LÝ UPLOAD

```php
$upload_dir = 'uploads/';
$upload_file = $uploaddir . $_FILES['file']['name']; // Tạo đường dẫn mới
if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)){ // Thay đổi đường dẫn của file để nó đi vào đường dẫn mới
echo "Đã upload file thành công";
} else {
echo "File upload không thành công";
}
```

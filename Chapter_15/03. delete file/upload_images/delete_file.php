<?php
#Xóa file ảnh
$file_url = 'uploads/dinhchieu.jpg';

if (@unlink($file_url)) {
    echo "Xóa file {$file} thành công";
} else {
    echo "File không tồn tại trên hệ thống";
}

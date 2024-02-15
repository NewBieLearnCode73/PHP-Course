# Upload file ảnh nâng cao với PHP

## Chuẩn hóa UPLOAD

-   Dung lượng file dưới 20mb
-   Hỗ trợ các đuôi file cụ thể
-   Trùng tên đã upload thì sẽ xử lí như thế nào

=> Sử dụng cờ hiệu

## Hàm hỗ trợ

Lấy tên file: `basename($_FILES['fileUpload']['name']);`
Lấy đuôi file: `pathinfo($_FILES['fileUpload']['name'], PATHINFO_EXTENSION);`

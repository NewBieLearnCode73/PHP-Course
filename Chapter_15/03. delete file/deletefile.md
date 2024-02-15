# Kỹ thuật xóa file trong PHP

**MỤC ĐÍCH:**

-   Loại bỏ những file không còn xử dụng trên hệ thống
-   Cập nhật lại file mới
-   Giảm tải hệ thống

## Câu lệnh xóa file

```php
unlink($file_url);
// $file_url là đường dẫn của file
```

## Ý tưởng

Xây dựng hệ thống quản lí file và lưu trữ Database, ở đó có thể chọn và xóa một hoặc nhiều file nếu không còn mục đích sử dụng

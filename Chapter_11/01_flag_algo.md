# Thuật toán đặt cờ hiệu

**Bước 1: Phất cờ**

-   Mặc định hệ thống không có lỗi
-   Thiết lập giá trị mặc định

```php
$error = 0;
$error = false;
$error = array();
```

**Bước 2: Hạ cờ**

-   Hạ cờ khi xảy ra các trường hợp phủ định với giải thuyết bài toán
-   Biến lưu lỗi được cập nhập giá trị 1, true
-   Cập nhật thêm giá trị cho mảng lưu lỗi

```php
$error = 1;
$error = true;
$error['username']= "Không được để trống trường hợp này";
```

**BƯớc 3: Kết luận**

-   Là bước kiểm tra và đưa ra kết luận về tình trạng lỗi thông qua giá trị của cờ
-   Giúp hệ thống xử lí theo các tình huống khác nhau
    -   Nếu cờ vẫn phất --> Hệ thống không có lỗi --> Xử lí
    -   Nếu cờ hạ ---> Hệ thống xảy ra lỗi ---> Thông báo người dùng

```php
if(empty($error)){
    // XỬ lí
}
else{
    // THông báo lỗi
}
```

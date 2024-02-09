-   Cookie cung cấp cho ứng dụng web một phương thức lưu trữ thông tin trên trình duyệt của người dùng và truy xuất khi người dùng gửi yêu cầu xem trang.
-   Cookie được lưu trữ theo cặp thông tin key/value
-   Cookie được lưu ở trình duyệt người dùng và có thể truy xuất từ server khi người dùng truy cập trang
-   Thời gian sống của server được quy định tối đa ba năm
-   Cookie có tầm ảnh hưởng đến các vùng trên sever cho chúng ta quy định

```php
setcookie($name, $value, $expire, $path, $domain);
```

Trong đó:

-   $name: Tên cookie
-   $value: Giá trị cookie (mặc định là chuỗi rỗng)
-   $expire: Thời gian sống của cookie. Nếu được thiết lập là 0, cookie sẽ tự mất sau khi tắt trình duyệt. Thời gian sống tối đa là 3 năm.
-   $path: Đường dẫn trên server mà cookie có hiệu lực. Nếu được thiết lập là "/", cookie sẽ có hiệu lực với tất cả các file trên server.
-   $domain: Tên miền mà cookie có hiệu lực.

**Chức năng:**

-   Ghi nhớ đăng nhập (Mật khẩu)

```php
<?php
$name = 'is_login';
$value = true;
$expire = time()+3600; // 3600 giây
$path = '/';
setcookie($name, $value, $expire, $path);
?>

// Hoặc

<?php setcookie('is_login', true, time()+ 3600, '/'); ?>
```

**Xóa Cookie:**

-   Để xóa ta cần cập nhật thời gian sống bằng 1 thời gian trong quá khứ

```php
setcookie('is_login',true, time()-3600,'/');
```

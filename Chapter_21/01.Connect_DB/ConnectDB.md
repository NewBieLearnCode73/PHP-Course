Hiện tại có 2 phương thức để kết nối tới cơ sở dữ liệu MySQL là **MySQLi** và **PDO**.

## MySQLi

Sau khi kết nối thành công, có thể thao tác trực tiếp với Mysql thông qua Php:
`$conn =mysqli_connect(server, username, password, database);`

Ví dụ:

```php
$conn = mysqli_connect('localhost', 'root', '', 'ChiuSS');
// Kiểm tra kết nối
if (!$conn) {
die("Kết nối thất bại" mysqli_connect_error()); }
else echo 'Kết nối thành công';
```

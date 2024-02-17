1. Đấy yêu cầu truy cập lên url

```php
<a href = "?mod=product&act=main&id=1">Máy tính</a>
<a href = "?mod=product&act=main&id=2">Điện thoại</a>
```

2. Lấy dữ liêu từ url

```php
$mod = $_GET[mod];
$act = $_GET[act];
```

3. Tao đường dẫn
   `$path = "modules/{$mod}/{$act}.php";`

4. Goi file xử lý hiện tại
   `require($path);`

---

Tùy biến giao diện

-   Tùy biến header
-   Tùy biến sidebar
-   Tùy biến foooter
-   Tùy biến khối giao diện

**WORDPRESS**
Xây dựng các hàm

-   get_header()
-   get_footer()
-   get_sidebar()
-   get_template_part()

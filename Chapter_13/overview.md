# Hệ thống điều hướng

-   Tối ưu trong xây dựng hệ thống
-   Dễ quản lí
-   Dễ chỉnh sửa
-   Rõ Ràng

## Công cụ

-   include file
-   Lấy thông tin URL
-   Hàm
-   Tư duy cắt ghép giao diện

### Tối ưu dữ liệu dùng chung

-   File giao diện dùng chung
-   Hàm dùng chung

### CheckList

1. Đấy yêu cầu truy cập lên url

```
<a href = "?page=contact">Liên hệ</a>
<a href = "?page=product">Sản phẩm</a>
```

2. Lấy dữ liệu page từ url

```
$page = $_GET['page'];
```

3. Tạo đường dẫn

```
$path = "pages/{$page}.php";
```

4. Gọi file xử lý hiện tại
   require($path);

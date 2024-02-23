# Ứng dụng Ajax

-   Giúp cập nhật thông tin của 1 widget hoặc 1 block nào đó mà không cần reload lại trang web
-   Cách hoạt động của Ajax:

![alt text](image.png)

## Phương thức AJAX

```js
$.ajax({
    url: "process.php", // Trang xử lí, mặc định là trang hiện tại
    method: "POST", // Post hoặc Get, mặc định GET
    data: { key1: value1, key2: value2 }, // Dữ liệu truyền lên server
    dataType: "json", // html, script, text
    success: function (data) {
        // Xử lí dữ liệu trả về
    },
});
```

Bên trong process.php sẽ nhận dữ liệu thông qua phương thức được gửi vào.
Ví dụ: `$_POST['key1']` sẽ là `value1`
Bên trong process.php echo ra gì thì đối số bên trong hàm success sẽ nhận được

## Dữ liệu trả về từ server

-   Bên server có thể trả về các kiểu dữ liệu khác nhau như JSON,Text, và nó được quy định bên dataType bên trong ajax

## Xuất dữ liệu Ajax lên giao diện

-   selector.text() // Chỉ trả về dạng text
-   selector.html() // Trả về cấu trúc dạng HTML

`$("$total").html(<strong>+data+</strong>)`

## Xử lí lỗi với AJAX

Một số lỗi thường gặp
**Lỗi thường gặp:**

-   Đường dẫn file không tồn tại
-   Lỗi cú pháp trong file xử lí

error: function (xhr,ajaxOPtion, throwError){
alert(xhr.status);
alert(throwError);
}

Kinh nghiệm:
Kiểm tra dữ liệu từng bước
Sử dụng hàm kiểm tra lỗi

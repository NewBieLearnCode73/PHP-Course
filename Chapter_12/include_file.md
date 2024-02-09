_Giống nhau_

-   Câu lệnh **include** (hoặc **require**) dùng để lấy tất cả nội dung bao gồm text, code, và các thẻ của một file (nếu tồn tại ) vào file người dùng sử dụng hàm include.
-   Gọi file nó rất hữu ích trong việc chúng ta cần gói nội dung Php từ nhiều file khác nhau trong hệ thống của chúng ta

_Khác nhau_: Trường hợp file được gọi không tồn tại

-   **Include** cảnh báo lỗi và chương trình vẫn chạy
-   **Require** báo lỗi và dừng ngay chương trình

_Ghi nhớ_:

-   Include, require gọi file cùng xử lý chương trình
-   Include_once, require_once chỉ gọi khi file chưa được gọi trước đó
-   Hàm file_exists() dùng kiểm tra sự tồn tại trước khi gọi file

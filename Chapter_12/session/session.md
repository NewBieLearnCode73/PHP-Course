# Lưu trữ và kết nối phiên làm việc với session

-   Phiên là một chu trình người dùng gửi yêu cầu lên server và được server hồi đáp.
    Sau khi server hồi đáp trả lại trang nó sẽ đóng kết nối.
-   Các phiên làm việc của web server không thể kết nối các phiên làm việc với nhau để phục vụ công việc nào đó.

--> Session sinh ra để kết nối các phiên làm việc với nhau

_Ví dụ_:

-   Nếu như login thành công thì là 1 phiên
-   Đọc tin bên trong fb là 1 phiên
    Nhưng chúng ta phải login thành công mới có thể đọc tin, tuy nhiên khi login chúng ta lại không đọc được tin, đó là lí do session ra đời với mục đính kết nối các phiên làm việc lại với nhau login thành công ==> Đọc tin

_Session_:

-   Cần sử dụng `session_start()` để khai báo sử dụng Session
-   Session dùng theo dõi và kết nối giữa các phiên làm việc của người dùng
-   Thông tin của session được lưu trữ trong mảng hệ thống `$_SESSION`
-   Session dùng để tạo các ứng dụng giỏ hàng, đăng nhập
-   Thông tin session được lưu trữ trên server

_Xóa session_:

-   `unset($_SESSION['is_login'])` là xóa 1 session
-   `session_destroy()` xóa toàn bộ

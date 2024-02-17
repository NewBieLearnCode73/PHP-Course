<?php
# Danh mục

/*
- id => id
- Tên danh mục => cat_title
*/

$list_product_cat = array(
    1 => array(
        'id' => 1,
        'cat_title' => "Điện thoại"
    ),
    2 => array(
        'id' => 2,
        'cat title' => "Macbook"
    ),
    3 => array(
        'id' => 3,
        'cal_title' => "Laptop"
    ),
);

# Dữ liệu sản phẩm
/*
id => id
Tên sản phẩm => product_title
Giá => price
Mã sản phẩm => code
Mô tả => product_desc
Ảnh đại diện => product_thumb dạng url
Id danh mục => cart_id

*/

$list_product = array(
    1 => array(
        'id' => 1,
        'product title' => 'Samsung Galaxy S21 FE 5G',
        'price' => 8490000,
        'code' => 'UN#1',
        'product_desc' => 'Samsung Galaxy S21 FE 5G (6GB/128GB) được Samsung ra mắt với dáng dấp thời thượng, cấu hình khỏe, chụp ảnh đẹp với bộ 3 camera chất lượng, thời lượng pin đủ dùng hằng ngày và còn gì nữa? Mời bạn khám phá qua nội dung sau ngay.',
        'product_thumb' => 'https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/Products/Images/42/267211/Samsung-Galaxy-S21-FE-vang-1-2-600x600.jpg',
        'product_content' => '<p>Màn hình điện thoại thông minh phủ kính cường lực Corning Gorilla Glass Victus sáng bóng, gần như an toàn khi rơi ở độ cao 2m xuống (thông tin từ hãng sản xuất công bố), hạn chế trầy xước hiệu quả. Ở cạnh hông máy, có các nút nguồn, âm lượng bấm êm ái, khe gắn sim ở cạnh dưới, nằm gần micro nên khi lắp sim bạn cần chú ý để tránh nhầm lẫn thao tác. Chuyển qua mặt sau của máy thì cách sắp xếp camera sau theo hàng dọc giống với phiên bản S21, cụm camera làm gồ lên, có thể bị xước nếu đặt nằm trên mặt bàn nhiều lần, nên để bảo vệ ống kính tốt hơn, bạn có thể dùng thêm ốp lưng, miếng dán.
</p><p><img src="https://cdn.tgdd.vn/Products/Images/42/267211/samsung-galaxy-s21-fe-6gb-200122-040740.jpg"></p>',
        'cart_id' => 1,
    ),
    2 => array(
        'id' => 2,
        'product title' => 'IPHONE 7 PLUS',
        'price' => 7000000,
        'code' => 'UNI#2',
        'product_desc' => 'iPhone 7 256 GB mang trên mình thiết kế quen thuộc từ thời iPhone 6, máy được trang bị bộ nhớ lưu trữ lớn, khả năng chống nước cao cấp, dàn loa stereo cho âm thanh hay và cấu hình cực mạnh.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/87838/iphone-7-256gb-vanghong-1-2-org.jpg',
        'product_content' => '<p>Một sự cải thiện đáng kể so với iPhone 6s trước đó, những tấm ảnh chụp selfie của bạn càng thêm độ chi tiết và sắc nét, bộ nhớ lớn 256 GB cũng giúp bạn thoải mái chụp và lưu trữ ảnh mà không lo hết dung lượng để lưu.</p><p><img src="https://cdn.tgdd.vn/Products/Images/42/87838/iphone-7-256gb6-1.jpg"></p>',
        'cart_id' => 1
    ),
    3 => array(
        'id' => 3,
        'product title' => 'Điện thoại iPhone 11 64GB',
        'price' => 10000000,
        'code' => 'UNI#3',
        'product_desc' => 'Apple đã chính thức trình làng bộ 3 siêu phẩm iPhone 11, trong đó phiên bản iPhone 11 64GB có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như iPhone Xr ra mắt trước đó.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/153856/iphone-11-tgdd42.jpg',
        'product_content' => '<p>Đây là một điều được xem là bước ngoặt bởi những chiếc smartphone Android có nhiều camera hiện nay sẽ thường bị sai lệch về màu sắc khi chuyển đổi qua lại giữa các ống kính gây cảm giác khá khó chịu cho người dùng.</p><img src="https://cdn.tgdd.vn/Products/Images/42/153856/iphone-114-1.jpg"><p></p>',
        'cart_id' => 1
    ),
    4 => array(
        'id' => 4,
        'product title' => 'Laptop Apple MacBook Air 13 inch M1 2020',
        'price' => 18450000,
        'code' => 'UNI#4',
        'product_desc' => 'Laptop Apple MacBook Air M1 2020 thuộc dòng laptop cao cấp sang trọng có cấu hình mạnh mẽ, chinh phục được các tính năng văn phòng lẫn đồ hoạ mà bạn mong muốn, thời lượng pin dài, thiết kế mỏng nhẹ sẽ đáp ứng tốt các nhu cầu làm việc của bạn.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/231244/macbook-air-m1-2020-gold-600x600.jpg',
        'product_content' => '<p>Chiếc MacBook này được trang bị con chip Apple M1 được sản xuất độc quyền bởi Nhà Táo trên tiến trình 5 nm, 8 lõi bao gồm 4 lõi tiết kiệm điện và 4 lõi hiệu suất cao, mang đến một hiệu năng kinh ngạc, xử lý mọi tác vụ văn phòng một cách mượt mà như Word, Excel, Powerpoint,... thực hiện tốt các nhiệm vụ chỉnh sửa hình ảnh, kết xuất 2D trên các phần mềm Photoshop, AI,... máy còn hỗ trợ tiết kiệm được điện năng cao.</p><p><img src="https://cdn.tgdd.vn/Products/Images/44/231244/apple-macbook-air-2020-mgn63saa-280323-125154.jpg"></p>',
        'cart_id' => 2
    ),
    5 => array(
        'id' => 5,
        'product title' => 'Laptop Apple MacBook Air 13 inch M2 2022',
        'price' => 26000000,
        'code' => 'UNI#5',
        'product_desc' => 'Sau 14 năm, ba lần sửa đổi và hai kiến trúc bộ vi xử lý khác nhau, kiểu dáng mỏng dần mang tính biểu tượng của MacBook Air đã đi vào lịch sử. Thay vào đó là một chiếc MacBook Air M2 với thiết kế hoàn toàn mới, độ dày không thay đổi tương tự như MacBook Pro, đánh bật mọi rào cản với con chip Apple M2 đầy mạnh mẽ.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/282827/apple-macbook-air-m2-2022-vang-600x600.jpg',
        'product_content' => '<p>Sự đẳng cấp đến từ ngoại hình của chiếc MacBook Air nhà Apple là điều không thể phủ nhận và khó có dòng sản phẩm cùng phân khúc nào có thể qua mặt được. Vẫn là lớp vỏ kim loại nguyên khối cứng cáp cùng các cạnh góc vuông vức, sang trọng nhưng chiếc MacBook Air 2022 năm nay đã thoát ra khỏi ngôn ngữ thiết kế nhẹ nhàng vốn có từ lâu và khoác lên diện mạo mới tương tự như “đàn anh” MacBook Pro.</p><p><img src="https://cdn.tgdd.vn/Products/Images/44/282827/apple-macbook-air-m2-2022-161122-112213.jpg"></p>',
        'cart_id' => 2
    ),
    6 => array(
        'id' => 6,
        'product title' => 'Laptop Apple MacBook Air 15 inch M2 2023',
        'price' => 30000000,
        'code' => 'UNI#6',
        'product_desc' => 'MacBook Air 15 inch M2 2023 đã có phiên bản cải tiến vừa được nhà Apple cho ra mắt, thêm không gian cho những điều bạn yêu với màn hình Liquid Retina 15 inch ấn tượng. Với người dùng yêu thích hiệu năng "nhanh như chớp" trong một thiết kế siêu gọn nhẹ của dòng Air thì đây chắc chắn là một sản phẩm bạn không nên bỏ qua.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/309016/apple-macbook-air-15-inch-m2-2023-gray-thumb-600x600.jpg',
        'product_content' => '<p>Với phiên bản 2023, Macbook Air được nâng cấp màn hình lên 15.3 inch, được trang bị tấm nền IPS cùng độ phân giải Liquid Retina (2880 x 1864) giúp những khung hình được tái hiện hoàn hảo, có độ sắc nét cao cùng không gian trải nghiệm nội dung rộng lớn. Độ phủ màu rộng P3 cùng mức hiển thị 1 tỷ màu hỗ trợ các tác vụ đồ họa với khả năng xuất hình ảnh chuẩn xác.</p><p><img src="https://cdn.tgdd.vn/Products/Images/44/309016/apple-macbook-air-m2-2023-six.jpg"></p>',
        'cart_id' => 2
    ),
    7 => array(
        'id' => 7,
        'product title' => 'Laptop Asus TUF Gaming F15 FX506HF',
        'price' => 16000000,
        'code' => 'UNI#7',
        'product_desc' => 'Với bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce RTX 2050 4 GB, laptop Asus TUF Gaming F15 FX506HF là một trong những lựa chọn tuyệt vời cho các game thủ và những người dùng làm việc đa tác vụ hoặc liên quan đến đồ họa, kỹ thuật.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/304867/TimerThumb/asus-tuf-gaming-f15-fx506hf-i5-hn014w.jpg',
        'product_content' => '<p></p><p><img src=""></p>',
        'cart_id' => 3
    ),
    8 => array(
        'id' => 8,
        'product title' => 'Laptop Acer Aspire 5 Gaming A515',
        'price' => 17000000,
        'code' => 'UNI#8',
        'product_desc' => 'Mẫu laptop gaming với mức giá tầm trung đến từ thương hiệu Acer vừa được lên kệ tại Thế Giới Di Động, sở hữu hiệu năng mạnh mẽ với con chip Intel Gen 13 dòng H hiệu năng cao, RAM 16 GB, card rời RTX cùng nhiều tính năng hiện đại. Laptop Acer Aspire 5 Gaming A515 58GM 51LB i5 13420H (NX.KQ4SV.002) chắc chắn sẽ mang đến cho bạn những trải nghiệm sử dụng và chiến game giải trí tuyệt vời.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/304867/TimerThumb/asus-tuf-gaming-f15-fx506hf-i5-hn014w.jpg',
        'product_content' => '<p>Laptop được trang bị bộ vi xử lý Intel Core i5 Raptor Lake - 13420H cùng card rời NVIDIA GeForce RTX 2050 4 GB đa nhiệm hiệu quả cho mình mọi công việc trên cơ quan, học tập hay giải trí thường ngày đến việc thực hiện các bản thiết kế trên nền tảng Premiere, Photoshop,... tuy nhiên với các ấn phẩm nghệ thuật, đồ hoạ động quá nhiều layer hay effect thì mình đánh giá máy chưa đáp ứng được nhanh chóng, nếu chỉ sử dụng cho công việc thông thường thôi thì vẫn rất ok nha.</p><p><img src="https://cdn.tgdd.vn/Products/Images/44/314630/acer-aspire-5-a515-58gm-51lb-i5-nxkq4sv002-asc-7.jpg"></p>',
        'cart_id' => 3
    ),
    9 => array(
        'id' => 9,
        'product title' => 'Laptop Lenovo Ideapad Gaming 3',
        'price' => 15490000,
        'code' => 'UNI#9',
        'product_desc' => 'Một mẫu laptop gaming hot mang mức giá tầm trung và sở hữu những thông số đủ mạnh cho các anh em chiến thoải mái với những con game thịnh hành, phục vụ giải trí hay công việc đầy đủ. Laptop Lenovo Ideapad Gaming 3 15ACH6 R5 5500H (82K2027PVN) chắc chắn sẽ không khiến bạn thất vọng với giá trị bỏ ra.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/313667/TimerThumb/lenovo-ideapad-gaming-3-15ach6-r5-82k2027pvn.jpg',
        'product_content' => '<p>• Laptop Lenovo Ideapad sở hữu con chip AMD Ryzen 5 5500H tích hợp cùng card rời NVIDIA GeForce RTX 2050 4 GB hỗ trợ mức hiệu suất mạnh mẽ cho phép bạn chiến thoả thích với những tựa game đang hot như: FO4, Call Of Duty, CS:GO,... Ngoài ra, mức cấu hình trên cũng rất hữu ích khi thực hiện chỉnh sửa hình ảnh và edit video cơ bản với Photoshop, AI, CapCut,... và vận hành nhanh chóng các công việc thường ngày.</p><p><img src="https://cdn.tgdd.vn/Products/Images/44/313667/lenovo-ideapad-gaming-3-15ach6-r5-82k2027pvn-glr-2.jpg"></p>',
        'cart_id' => 3
    ),
);

<?php
function add_cart($id)
{
    global $list_product;
    $item = get_product_by_id($id);

    // show_array($item);

    #Thêm thông tin vào giỏ hàng
    // Thêm mỗi lần 1 sản phẩm

    // Session này sẽ giúp lưu trữ thông tin người dùng thao tác trên trang này, dù cho có đi đâu thì thông tin vẫn đảm bảo không bị mất

    $qty = 1; // Truy cập lần đầu tiên
    // Kiểm tra giỏ hàng tồn tại chưa và id đã được mua chưa
    if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
        $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1;
    }


    $_SESSION['cart']['buy'][$id] =
        array(
            'id' => $item['id'],
            'product_title' => $item['product_title'],
            'url' => $item['url'],
            'price' => $item['price'],
            'product_thumb' => $item['product_thumb'], // Đường dẫn ảnh
            'code' => $item['code'],
            'qty' => $qty,
            'sub_total' => $item['price'] * $qty
        );

    update_info_cart(); // Cập nhật thông tin giỏ hàng
}

// Cập nhật lại thông tin giỏ hàng
function update_info_cart()
{
    $num_order = 0;
    $total = 0;
    foreach ($_SESSION['cart']['buy'] as $item) {
        $num_order += $item['qty'];
        $total += $item['sub_total'];
    }


    // Thông tin tổng kết toàn bộ đơn hàng
    $_SESSION['cart']['info'] = array(
        'num_order' => $num_order,
        'total' => $total
    );
}

function get_list_by_cart()
{
    if (isset($_SESSION['cart'])) {
        // Tạo cho các phần tử bên trong thêm 1 trường mới
        foreach ($_SESSION['cart']['buy'] as &$item) {
            $item['url_delete_cart'] = "?mod=cart&act=delete&id={$item['id']}"; // Đường dẫn xóa sản phẩm
        }
        return $_SESSION['cart']['buy'];
    }
    return false;
}

function get_total_cart()
{
    if (isset($_SESSION['cart']['info'])) {
        return curruncy_format($_SESSION['cart']['info']['total']);
    }
    return 0;
}

function delete_cart($id = "")
{
    if (isset($_SESSION['cart'])) {
        #Xóa sản phẩm có $id trong giỏ hàng
        if (!empty($_SESSION['cart']['buy'][$id])) {
            unset($_SESSION['cart']['buy'][$id]);
            update_info_cart();
        } else {
            unset($_SESSION['cart']);
        }
    }
}

function update_cart($qty)
{
    foreach ($qty as $id => $new_qty) {
        $_SESSION['cart']['buy'][$id]['qty'] = $new_qty;
        $_SESSION['cart']['buy'][$id]['sub_total'] = $_SESSION['cart']['buy'][$id]['price'] * $new_qty;
        update_info_cart();
    }
}

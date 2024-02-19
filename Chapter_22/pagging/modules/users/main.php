<?php
get_header();
?>

<?php
// Xuất dữ liệu
$sql = "SELECT * FROM users ORDER BY id ASC";

try {
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}



// Lấy số lượng bản ghi
$num_rows = $stmt->rowCount();


// Số lượng bản ghi mỗi trang
$numb_per_page = 5;
// Tổng số bản ghi
$total_row = $num_rows;

$num_page = ceil($total_row / $numb_per_page);

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $numb_per_page;

echo "Số bản ghi: " . $num_page . "<br>";
echo "Trang hiện tại: " . $page . "<br>";
echo "Xuất phát: " . $start . "<br>";

// Lấy danh sách bản ghi
$sql = "SELECT * FROM users ORDER BY id ASC LIMIT {$start}, {$numb_per_page}";
try {
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $list_user = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}

// Thêm URL cho thao tác
foreach ($list_user as &$user) {
    $user['url_update'] = "?mod=users&act=update&id=" . $user['id'];
    $user['url_delete'] = "?mod=users&act=delete&id=" . $user['id'];
}

?>


<div id="content">
    <a href="?mod=users&act=add">Thêm mới thành viên</a>
    <h1>Danh sách thành viên</h1>

    <style>
        .table_data thead {
            font-weight: bold;
        }

        .table_data tr td {
            border-bottom: 1px solid #000;
            padding: 8px 15px;
        }

        .numb_row {
            font-style: italic;
            font-size: 13px;
            color: grey;
        }
    </style>

    <table class="table_data">
        <thead>
            <tr>
                <td>STT</td>
                <td>Id</td>
                <td>Fullname</td>
                <td>Username</td>
                <td>Email</td>
                <td>Giới tính</td>
                <td>Thao tác</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $temp = $start + 1;
            foreach ($list_user as $user) {
            ?>
                <tr>
                    <td><?php echo $temp; ?></td>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['fullname']; ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['gender']; ?></td>
                    <td><a href="<?php echo $user['url_update']; ?>">Sửa</a> | <a href="<?php echo $user['url_delete']; ?>">Xóa</a></td>
                </tr>
            <?php
                $temp++;
            }
            ?>
        </tbody>

    </table>

    <p class="numb_row">Tổng số thành viên: <?php echo count($result); ?></p>

    <?php echo get_pagging($num_page, $page, "?mod=users&act=main") ?>
</div>
<?php
get_footer();
?>
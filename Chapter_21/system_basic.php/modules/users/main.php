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

show_array($result);


foreach ($result as &$user) {
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
            $temp = 0;
            foreach ($result as $user) {
                $temp++;
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
            }
            ?>
        </tbody>

    </table>

    <p class="numb_row">Tổng số thành viên: <?php echo count($result); ?></p>
</div>
<?php
get_footer();
?>
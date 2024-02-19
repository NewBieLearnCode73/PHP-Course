<?php
$id = (int)$_GET['id'];
$sql = "SELECT * FROM users WHERE id = $id";
try {
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $updated = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}

show_array($updated);

?>

<?php
if (isset($_POST['btn-submit'])) {
    $error = array();

    #Kiểm tra fullname
    if (empty($_POST['fullname'])) {
        $error['fullname'] = "<p class='show-error'>Bạn cần nhập họ và tên</p>";
    } else {
        $fullname = $_POST['fullname'];
    }


    #Kiểm tra giới tính
    if (empty($_POST['gender'])) {
        $error['gender'] = '<p class="show-error">Bạn cần chọn giới tính</p>';
    } else {
        $gender = $_POST['gender'];
    }


    // Không có lỗi xảy ra thì thêm dữ liệu
    if (empty($error)) {
        $sql = "UPDATE `users` SET `fullname`=:fullname,`gender`=:gender WHERE `id`=:id";
        try {
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':fullname', $fullname);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }

    redirect("?mod=users&act=update&id=" . $id);
}


// Kiểm tra fullname
function check_fullname()
{
    global $error;
    global $updated;



    if (!empty($error['fullname'])) {
        echo $error['fullname'];
        return true;
    }
    return false;
}


// Kiểm tra giới tính
function check_gender()
{
    global $error;
    if (isset($error['gender'])) {
        echo $error['gender'];
        return true;
    }
    return false;
}

function reUseGender($value)
{
    global $updated;
    if ($updated['gender'] == $value) {
        echo 'selected';
    }
}

?>





<?php
get_header();
?>


<style>
    h1 {
        font-size: 20px;
        font-weight: bold;
    }

    .show-error {
        color: red;
        font-size: small;
    }

    select {
        display: block;
    }
</style>

<div id="content">
    <h1>Sửa đổi thông tin</h1>


    <form action="" method="post">
        <label for="fullname">Họ và tên</label><br>
        <input type="text" name="fullname" id="fullname" value="<?php echo $updated['fullname'] ?>">
        <?php check_fullname(); ?>

        <select id="gender" name="gender">
            <option value="">--Giới tính--</option>
            <option value="male" <?php reUseGender('male') ?>>Nam</option>
            <option value="female" <?php reUseGender('female') ?>>Nữ</option>
        </select>
        <?php check_gender(); ?>


        <input type="submit" value="Cập nhật" name="btn-submit">

    </form>
</div>




<?php
get_footer();
?>
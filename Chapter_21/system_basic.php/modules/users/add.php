<?php
if (isset($_POST['btn-submit'])) {
    $error = array();
    $arlert = array();
    $partten_username = '/^[A-Za-z][A-Za-z0-9_]{7,29}$/';
    $partten_pass = '/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/';
    $partten_email = '/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+$/';

    #Kiểm tra fullname
    if (empty($_POST['fullname'])) {
        $error['fullname'] = "<p class='show-error'>Bạn cần nhập họ và tên</p>";
    } else {
        $fullname = $_POST['fullname'];
    }

    #Kiểm tra username
    if (empty($_POST['username'])) {
        $error['username'] = "<p class='show-error'>Bạn cần nhập tên đăng nhập</p>";
    } else if (!preg_match($partten_username, $_POST['username'])) {
        $error['username'] = '<p class="show-error">Tên đăng nhập không đúng định dạng</p>';
    } else {
        $username = $_POST['username'];
    }

    #Kiểm tra password
    if (empty($_POST['password'])) {
        $error['password'] = "<p class='show-error'>Bạn cần nhập mật khẩu</p>";
    } else if (strlen($_POST['password']) < 8) {
        $error['password'] = '<p class="show-error">Mật khẩu từ 8 kí tự trở lên</p>';
    } else if (!preg_match($partten_pass, $_POST['password'])) {
        $error['password'] = '<p class="show-error">Mật khẩu không đúng định dạng</p>';
    } else {
        $password = $_POST['password'];
    }

    #Kiểm tra email
    if (empty($_POST['email'])) {
        $error['email'] = "<p class='show-error'>Bạn cần nhập email</p>";
    } else if (!preg_match($partten_email, $_POST['email'])) {
        $error['email'] = '<p class="show-error">Email không đúng định dạng</p>';
    } else {
        $email = $_POST['email'];
    }

    #Kiểm tra giới tính
    if (empty($_POST['gender'])) {
        $error['gender'] = '<p class="show-error">Bạn cần chọn giới tính</p>';
    } else {
        $gender = $_POST['gender'];
    }

    // Không có lỗi xảy ra thì thêm dữ liệu
    if (empty($error)) {
        $sql = "INSERT INTO users (fullname, username, password, email, gender) VALUES ( '$fullname', '$username', '$password', '$email', '$gender' )";
        try {
            if ($conn->query($sql) == TRUE) {
                $arlert['success'] = "Thêm mới thành công";
            } else {
                throw new Exception("Thêm mới thất bại");
            }
        } catch (Exception $e) {
            $arlert['false'] = "Thêm mới thất bại";
        }
    }
}

function check_fullname()
{
    global $error;
    if (!empty($error['fullname'])) {
        echo $error['fullname'];
        return true;
    }
    return false;
}

function check_username()
{
    global $error;
    if (!empty($error['username'])) {
        echo $error['username'];
        return true;
    }
    return false;
}

function check_password()
{
    global $error;
    if (!empty($error['password'])) {
        echo $error['password'];
        return true;
    }
    return false;
}

function check_email()
{
    global $error;
    if (!empty($error['email'])) {
        echo $error['email'];
        return true;
    }
    return false;
}

function check_gender()
{
    global $error;
    if (isset($error['gender'])) {
        echo $error['gender'];
        return true;
    }
    return false;
}

function reUse($value)
{
    if (!empty($_POST["$value"])) {
        echo $_POST["$value"];
    }
}

function reUseGender($gender, $value)
{
    if (isset($_POST["$gender"]) && $_POST["$gender"] == $value) {
        echo 'selected';
    }
}

function check_success()
{
    global $arlert;
    if (!empty($arlert)) {
        if (isset($arlert['success'])) {
            echo '<p class="show-success">' . $arlert['success'] . '</p>';
            return true;
        } else {
            echo '<p class="show-error">' . $arlert['false'] . '</p>';
            return true;
        }
    }
    return false;
}

?>


<?php
get_header();
?>

<style>
    .show-error {
        color: red;
        font-size: small;
    }
</style>

<div id="content">
    <h1>Thêm mới</h1>


    <form action="" method="post">
        <label for="fullname">Họ và tên</label><br>
        <input type="text" name="fullname" id="fullname" value="<?php reUse("fullname"); ?>"><br>
        <?php check_fullname(); ?>


        <label for="username">Tên đăng nhập</label><br>
        <input type="text" name="username" id="username" value="<?php reUse("username"); ?>"><br>
        <?php check_username(); ?>

        <label for="password">Mật khẩu</label><br>
        <input type="password" name="password" id="password"><br>
        <?php check_password(); ?>

        <label for=" email">Email</label><br>
        <input type="email" name="email" id="email" value="<?php reUse("email"); ?>"><br>
        <?php check_email(); ?><br>


        <select id="gender" name="gender">
            <option value="">--Giới tính--</option>
            <option value="male" <?php reUseGender('gender', 'male') ?>>Nam</option>
            <option value="female" <?php reUseGender('gender', 'female') ?>>Nữ</option>
        </select><br>
        <?php check_gender(); ?><br>

        <input type="submit" value="Đăng kí" name="btn-submit">
        <?php check_success(); ?>
    </form>
</div>



<?php
get_footer();
?>
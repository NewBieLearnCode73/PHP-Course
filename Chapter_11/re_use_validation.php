<!-- 
Tránh người dùng nhập lại những trường đã nhập đúng mà chỉ nhập lại những trường nhập sai
Xử lí: Nếu như 1 ô đã nhập ok rồi thì cần gán giá trị cho biến liền
 -->

<?php
if (isset($_POST['btn'])) {
    $error = array();

    if (empty($_POST['username'])) {
        $error['username'] = 'Vui lòng nhập tên đăng nhập';
    } else {
        $username = $_POST['username'];
    }

    if (empty($_POST['password'])) {
        $error['password'] = 'Vui lòng nhập mật khẩu';
    } else {
        $password = $_POST['password'];
    }

    if (empty($_POST['city'])) {
        $error['city'] = 'Vui lòng nhập thành phố làm việc';
    } else {
        $city = $_POST['city'];
    }
}


function reUse($value)
{
    if (!empty($_POST["$value"])) {
        echo $_POST["$value"];
    }
}

function check_empty_validation($value)
{
    global $error;
    if (!empty($error["$value"])) {
        echo '<p class="error">' . $error["$value"] . '</p>';
    }
}

function checked_($value_1, $value_2)
{
    if (isset($_POST["{$value_1}"]) && $_POST["{$value_1}"] == $value_2) {
        echo 'checked';
    }
}

function selected_($value_1, $value_2)
{
    if (isset($_POST["{$value_1}"]) && $_POST["{$value_1}"] == $value_2) {
        echo 'selected';
    }
}


function checked_checkbox($value_1, $value_2)
{
    if (isset($_POST["$value_1"]) && is_array($_POST["$value_1"]) && in_array($value_2, $_POST["$value_1"])) {
        echo 'checked';
    }
}



print_r($_POST);

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        .error {
            font-size: smaller;
            color: red;
            font-style: italic;
        }
    </style>




    <h1>Novell Services Login</h1>

    <form action="http://localhost/PHP%20COURSE/PHP%20Master/Chapter_11/re_use_validation.php" method="post">
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username" value="<?php reUse('username') ?>"><br>
        <?php check_empty_validation('username') ?>

        <label for="password">Password</label><br>
        <input type="password" name="password" id="password"><br>
        <?php check_empty_validation('password') ?>

        <label for="city">City of Employment</label><br>
        <input type="text" name="city" id="city" value="<?php reUse('city') ?>"><br>
        <?php check_empty_validation('city') ?>

        <label for="server">Web server</label><br>
        <select name="server" id="server">
            <option value="">-- Choose a server --</option>
            <option value="GOOGLE" <?php selected_('server', 'GOOGLE'); ?>>Google</option>
            <option value="MS" <?php selected_('server', 'MS'); ?>>Microsoft</option>
            <option value="YH" <?php selected_('server', 'YH'); ?>>Yahoo</option>
        </select><br><br>

        <label for="">Please specify your role</label><br>
        <input type="radio" name="role" id="" value="Admin" <?php checked_('role', 'Admin'); ?>> Admin <br>
        <input type="radio" name="role" id="" value="Engineer" <?php checked_('role', 'Engineer'); ?>> Engineer <br>
        <input type="radio" name="role" id="" value="Manager" <?php checked_('role', 'Manager'); ?>> Manager <br>
        <input type="radio" name="role" id="" value="Guest" <?php checked_('role', 'Guest'); ?>> Guest <br><br>

        <label for="">Single Sign-on to the following</label><br>
        <input type="checkbox" name="sign[]" value="Mail" <?php checked_checkbox('sign', 'Mail'); ?>> Mail <br>
        <input type="checkbox" name="sign[]" value="Payroll" <?php checked_checkbox('sign', 'Payroll'); ?>> Payroll <br>
        <input type="checkbox" name="sign[]" value="Self-service" <?php checked_checkbox('sign', 'Self-service'); ?>> Self-service <br><br>

        <input type="submit" name="btn" value="Đăng nhập">
    </form>


</body>

</html>
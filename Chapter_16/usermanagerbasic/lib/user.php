<?php
function check_login($username, $password)
{
    global $list_user;

    foreach ($list_user as $user) {
        if ($username === $user['username'] &&   md5($password) === $user['password']) {
            return true;
        }
    }
    return false;
}

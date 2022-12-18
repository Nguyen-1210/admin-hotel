<?php

include_once("email.php");
$server = new mysqli("localhost", "root", "", "duan1_n_h");
function valid_email($email)
{
    global $server;
    $email = addslashes($email);
    $query = "select * from accounts where email = '$email' limit 1";
    $result = mysqli_query($server, $query);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            return true;
        }
    }
    return false;
}
function send_email($email)
{
    global $server;
    $expire = time() + (50 * 1);
    $code = rand(10000, 99999);
    $subject = 'Reset N-FURNITURE-H login password';
    $content = '<h2 style="text-align: center;
font-size: 10px"> Xin chào bạn, đây quyền thiết lập lại mật khẩu cho tài khoản người dùng. <br>
Mã để cập nhật lại mật khẩu của bạn <span style="color: red; font-size: 15px">' . $code . '</span>
Hãy nhập mã xác nhận để cập nhật lại mật khẩu.
</h2>';
    $email = addslashes($email);
    $query = "insert into codes (email,code,expire) value ('$email','$code','$expire')";
    mysqli_query($server, $query);
    //send email here
    send_mail($email, $subject, $content);
}
function is_code_correct($code)
{
    global $server;
    $code = addslashes($code);

    $expire = time();
    $email = addslashes($_SESSION['forgot']['email']);

    $query = "select * from codes where code = '$code' && email = '$email' order by id desc limit 1";
    $result = mysqli_query($server, $query);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if ($row['expire'] > $expire) {
                return "Mã đúng";
            } else {
                return "Mã đã hết hạn";
                include '../user/index.php?act=forgot_otp';
            }
        } else {
            return "Mã không chính xác";
            include '../user/index.php?act=forgot_otp';
        }
    }
    return "Mã không chính xác";
    include '../user/index.php?act=forgot_otp';
}

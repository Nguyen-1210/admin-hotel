<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N-FURNITURE-H</title>
    <link rel="shortcut icon" href="../admin/images/favicon.png" type="image/x-icon">


    <!-- Link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- link font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- link boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <?php
    ob_start();
    // session_start();
    // session_destroy();
    if (isset($_SESSION['username'])) {
        header("Location: index.php");
    }

    include '../model/pdo.php';
    include '../model/products.php';
    include '../model/support.php';
    include '../model/types.php';
    include '../model/users.php';
    include '../model/blog.php';
    include '../model/bills.php';
    include '../model/comments.php';
    include '../model/forgot.php';
    include_once './email.php';
    include './components/header.php';

    require './global.php';
    ?>
    <?php

    if (!isset($_SESSION['myCard'])) {
        $_SESSION['myCard'] = null;
    }
    // session_destroy();
    $list_blog = loadall_blog();
    $show_admin = loadall_admin();
    $show_types = show_types();
    $list_pro_top8 = loadall_product_top8();
    if (isset($_GET['act'])) {
        $act = ($_GET['act']);
        switch ($act) {
                // Trang chủ
            case 'service':
                include "./service.php";
                break;

            case 'contact-us':
                include "./contact-us.php";
                break;

            case 'about-us':
                include "./about-us.php";
                break;
                // list
            case '_product':
                $listproducts = loadall_product_home();
                include "./product.php";
                break;
            case 'product':
                if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                    $kyw = $_POST['kyw'];
                } else {
                    $kyw = "";
                }
                if (isset($_GET['idtypes']) && ($_GET['idtypes'] > 0)) {
                    $id_type = $_GET['idtypes'];
                } else {
                    $id_type = 0;
                }
                $list_product = loadall_products($kyw, $id_type);
                $name_types = load_ten_dm($id_type);
                include './product_types.php';
                break;

            case 'search':
                if (isset($_POST['kyw']) && ($_POST['kyw'] != "" >0)) {
                    $kyw = $_POST['kyw'];
                } else {
                    $kyw = "";
                }
                if (isset($_GET['idtypes']) && ($_GET['idtypes'] > 0)) {
                    $id_type = $_GET['idtypes'];
                } else {
                    $id_type = 0;
                }
                $list_search = load_search($kyw);
                include './search.php';
                break;

            case '_detalis':
                if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                    $id = $_GET['idsp'];
                    $id_product = $_GET['idsp'];
                    $onspd = loadone_product($id);
                    $listcomments = loadall_comments(0);
                    $listproducts = loadall_rand_home();
                    extract($onspd);
                    include './components/_detalis.php';
                    include './product_rand.php';
                }
                break;
            case 'addCard':
                if (isset($_POST['addCard']) && ($_POST['addCard'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $img = $_POST['img'];
                    $price = $_POST['price'];
                    $number = $_POST['number'];
                    $total_money = $number * $price;

                    $array = [
                        'id' => $id,
                        'name' => $name,
                        'img' => $img,
                        'price' => $price,
                        'number' => $number,
                        'total_money' => $total_money,
                    ];

                    $count = 0;
                    if ($_SESSION['myCard'] != null) {
                        foreach ($_SESSION['myCard'] as $key => $card) {
                            if ($card['id'] == $id) {
                                $_SESSION['myCard'][$key]['number'] += $number;
                                $count++;
                            }
                        }
                        if ($count == 0) {
                            $_SESSION['myCard'][] = $array;
                        }
                    } else {
                        $_SESSION['myCard'][] = $array;
                    }
                }
                include "./components/_card.php";
                break;
            case 'delete':
                if (isset($_GET['idcart'])) {
                    array_splice($_SESSION['myCard'], $_GET['idcart'], 1);
                } else {
                    $_SESSION['myCard'] = [];
                }
                header('Location: index.php?act=addCard');
                break;
            case 'addBill':
                if (!empty($_SESSION['username'])) {
                    include "./checkout.php";
                } else {
                    header('Location: index.php?act=addCard');
                }
                break;

            case 'comfirm_bill':
                if (isset($_POST['comfirm_bill']) && ($_POST['comfirm_bill'])) {
                    $name = $_POST['name'] ?? '';
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $tell = $_POST['tell'];
                    $pay = $_POST['checkout_payment_method'];
                    $day = date('Y-m-d');
                    $total = $_POST['total'];

                    $bill_id = insert_bill(
                        $_SESSION['username']['id'],
                        $name,
                        $email,
                        $address,
                        $tell,
                        $pay,
                        $day,
                        $total
                    );
                    if ($bill_id != 0) {
                        if (!empty($_SESSION['myCard'])) {
                            foreach ($_SESSION['myCard'] as $key => $card) {
                                insert_bill_detail(
                                    $bill_id,
                                    $_SESSION['myCard'][$key]['id'],
                                    $_SESSION['myCard'][$key]['number'],
                                    $_SESSION['myCard'][$key]['price']
                                );
                            }
                        }
                    }
                   
                }

                unset($_SESSION['myCard']);
                break;
            case 'his_bill':
                if (isset($_GET['id']) && $_GET['id']) {
                    $id_user = $_GET['id'];
                    $id = $_GET['id'];
                    $listbilluser =  loadall_bill1($id_user);
                }
                include './billuser.php';
                break;
            case 'billdetail';
                if (isset($_GET['id']) && $_GET['id']) {
                }
                break;

            case 'register':
                include './register.php';
                break;
            case 'comfirm_account':
                if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                    $email = $_POST['email'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $checku = strlen($username);
                    $checkp = strlen($password);

                    $regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";

                    if (!preg_match($regex, $email)) {
                        $thongbao = ' <p style=" font-size: 12px; color: #F23A3A " >Lỗi không đúng định dạng mail.</p>';
                    } else if ($checku < 5) {
                        $thongbao = ' <p style=" font-size: 12px; color: #F23A3A " >Lỗi! Username ít nhất 5 ký tự.</p>';
                    } else if ($checkp <= 5) {
                        $thongbao = ' <p style=" font-size: 12px; color: #F23A3A" >Lỗi! Mật khẩu ít nhất 6 ký tự.</p>';
                    } else {
                        insert_taikhoan($email, $username, $password);
                        $thongbao = ' <p style=" font-size: 12px; color: #44C662" >Đã đăng ký thành công. Đăng nhập để trải nghiệm chức năng</p>
<meta http-equiv="refresh" content="5;url = http://localhost/website-furniture/user/index.php?act=login">';
                    }
                    echo "mới";
                }
                include './register.php';
                break;
            case 'login':
                include './login.php';
                break;
            case 'comfirm_login':
                if (isset($_POST['comfirm_login']) && $_POST['comfirm_login']) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $checkuser = checkuser($username, $password);
                    if (is_array($checkuser)) {
                        $_SESSION['username'] = $checkuser;
                        $thongbao = ' <p style=" font-size: 12px; color: #44C662" >Đăng nhập thành công.</p>
<meta http-equiv="refresh" content="3;url = http://localhost/website-furniture/user/index.php">';
                    } else {
                        $thongbao = ' <p style=" font-size: 12px; color: #F23A3A " >Lỗi! Sai mật khẩu hoặc tên đăng nhập.</p>';
                    }
                }
                include './login.php';
                break;
            case 'logout':
                session_unset();
                header('Location: index.php');
                break;
            case 'edit_account':
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $edit_account = loadone_accounts($_GET['id']);
                }
                include './update_account.php';
                break;
            case 'update_account':
                if (isset($_POST['save']) && $_POST['save']) {
                    $id = $_POST['id'];
                    $email = $_POST['email'];
                    $name = $_POST['name'];
                    $tell = $_POST['tell'];
                    $address = $_POST['address'];
                    update_user($id, $email, $name, $tell, $address);
                }
                $edit_account = loadone_accounts($id);
                include './update_account.php';
                break;
            case 'support';
                if (isset($_POST['send']) && ($_POST['send'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $tell = $_POST['tell'];
                    $description = $_POST['description'];
                    insert_support($name, $email, $tell, $description);
                }
                include "./contact-us.php";
                break;
            case 'link_blog':
                if (isset($_GET['id']) && $_GET['id']) {
                    $loadone_blog = loadone_blog($_GET['id']);
                }
                $list_blog = loadall_rand_blog();
                include './blog.php';
                include './blog_rand.php';
                break;
            case 'forgot':
                include './forgot.php';
                break;
            case 'comfirm_forgot':
                if (isset($_POST['comfirm_forgot']) && ($_POST['comfirm_forgot'])) {
                    $email = $_POST['email'];
                    $regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";
                    if (!preg_match($regex, $email)) {
                        $thongbao = ' <p style=" font-size: 12px; color: #F23A3A " >Lỗi không đúng định dạng mail.</p>';
                        include './forgot.php';
                    } else if (!valid_email($email)) {
                        // không tìm thấy emial trên csdl
                        $thongbao = '<p style=" font-size: 12px; color: #F23A3A " >Không tìm thấy email.</p>';
                        include './forgot.php';
                    } else {
                        $thongbao = ' <p style=" font-size: 12px; color: #44C662" >Mã xác minh đã được gửi đến email " ' . $email . ' " Vui lòng xác minh kiểm tra lại.</p>';
                        send_email($email);
                        $_SESSION['forgot']['email'] = $email;
                        include './forgot_otp.php';
                       
                    }
                }
                break;
                case 'comfirm_pass':

                    if (isset($_POST['comfirm_pass']) && ($_POST['comfirm_pass'])) {
                        $code = $_POST['code'];
                      
                        $result = is_code_correct($code);
                        
                        if ($result == "Mã đúng") {
                            $_SESSION['forgot']['code'] = $code;
                            header("Location: index.php?act=update_pass");
                            
                        }
                        else{
                            $thongbao = $result;
                            include './forgot_otp.php';
                        }
                    }
                    break;
                    case 'forgot_otp':
                        include './forgot_otp.php';
                        break;
            case 'update_pass':
                if(isset($_POST['update_pass']) && ($_POST['update_pass'])){
                    $password = $_POST['password'];
				$password2 = $_POST['password2'];
				if($password !== $password2){
					$error[] = "Mã không khớp";
				}elseif(!isset($_SESSION['forgot']['email']) || !isset($_SESSION['forgot']['code'])){
					header("Location:forgot.php");
					die;
				}else{
					save_password($password);
					if(isset($_SESSION['forgot'])){
						unset($_SESSION['forgot']);
					}
					header("Location: login.php");
					die;
				}
                }
                include './forgot_pass.php';
                break;

            default:
                # code...
                break;
        }
    } else {
        // content
        include './components/content.php';
    }
    include './components/footer.php';
    ?>
</body>

</html>
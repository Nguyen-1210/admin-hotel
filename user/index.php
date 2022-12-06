<?php
// session_start();

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
    // session_destroy(0);
    ob_start();
    if (isset($_SESSION['username'])) {
        header("Location: index.php");
    }

    include '../model/pdo.php';
    include '../model/products.php';
    include '../model/types.php';
    include '../model/users.php';
    include '../model/bills.php';
    include './components/header.php';

    require './global.php';
    ?>
    <?php

    if (!isset($_SESSION['myCard'])) {
        $_SESSION['myCard'] = null;
    }
    // session_destroy();
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

            case '_detalis':
                if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                    $id = $_GET['idsp'];
                    $onspd = loadone_product($id);
                    extract($onspd);
                    include './components/_detalis.php';
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
                }break;

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
                        $address,
                        $email,
                        $tell,
                        $pay,
                        $day,
                        $total
                    );
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
                if (isset($_POST['edit_account'])) {
                    break;
                }

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
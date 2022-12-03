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
    session_start();
    include '../model/pdo.php';
    include './components/header.php';
    include '../model/products.php';
    include '../model/types.php';
    require './global.php';
    ?>
    <?php

    if (!isset($_SESSION['myCard'])) {
        $_SESSION['myCard'] = null;
    }
    // session_destroy();
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
                        'price' =>  $price,
                        'number' => $number,
                        'total_money' => $total_money,
                    ];
                    
                    $count  = 0;
                    if($_SESSION['myCard'] != null){
                        foreach($_SESSION['myCard'] as $key => $card){
                            if($card['id'] == $id){
                                $_SESSION['myCard'][$key]['number'] += $number;
                                $count ++;
                            }
                        }
                        if($count == 0){
                            $_SESSION['myCard'][] = $array;    
                        }
                    }else{
                        $_SESSION['myCard'][] = $array;
                    }
                    
                }
                include "./components/_card.php";
                // break;

            case 'addBill':
                include "./checkout-us.php";
                break;

            default:
                # code...
                break;
        }
    } else {
        // content
        include './components/content.php';
    }


    ?>
</body>

</html>
<?php
ob_start();
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ./login.php");
}
include '../model/pdo.php';
include "../model/products.php";
include "../model/types.php";
include "../model/users.php";
include "../model/chart.php";
include "../model/comments.php";
include "../model/bills.php";
include "../model/blog.php";
include "menu.php";

if (isset($_GET['act'])) {
    $act = ($_GET['act']);
    switch ($act) {
            // list
        case 'add_types':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];

                insert_types($tenloai);
                header("location: ./index.php?act=list_types");
            }
            include "./danhmuc/add.php";
            break;
        case 'list_types':
            $listdanhmuc = loadall_types();
            include "./danhmuc/list.php";
            break;

        case 'edit_types':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_types($_GET['id']);
            }
            include "./danhmuc/edit.php";
            break;
        case 'delete_types':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_types($_GET['id']);
            }
            $listdanhmuc = loadall_types();
            include "./danhmuc/list.php";

            break;
        case 'update_types':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $name = $_POST['tenloai'];
                $id = $_POST['id'];
                update_types($id, $name);
            }
            $listdanhmuc = loadall_types();
            include "./danhmuc/list.php";
            break;
        case 'add_products':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $id_type = $_POST['id_type'];
                $name = $_POST['name_product'];
                $price = $_POST['price_product'];
                $description = $_POST['des_product'];
                $discount = $_POST['dis_product'];
                $img = $_FILES['img']['name'];
                $extension = pathinfo($img, PATHINFO_ALL);
                $randomo = rand(0, 1000000);
                $rename = 'Upload' . date('Ymd') . $randomo;
                $img = $rename . '.' . $extension;
                $target_dir = "../upload/";
                move_uploaded_file($_FILES["img"]["tmp_name"], $target_dir . $img);
                insert_products($name, $price, $img, $description, $discount, $id_type);
                header("location: ./index.php?act=list_products");
            }
            $listdanhmuc = loadall_types();
            include "./sanpham/add.php";
            break;
        case 'list_products':
            $listproducts = loadall_products();
            include "./sanpham/list.php";
            break;

        case 'delete_products':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_products($_GET['id']);
            }
            $listproducts = loadall_products();
            include "./sanpham/list.php";
            break;

        case 'edit_products':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $products = loadone_product($_GET['id']);
            }
            $listdanhmuc = loadall_types();
            include "./sanpham/edit.php";
            break;

        case 'update_products':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $id_type = $_POST['id_type'];
                $name = $_POST['name_product'];
                $price = $_POST['price_product'];
                $description = $_POST['des_product'];
                $discount = $_POST['dis_product'];
                $img = $_FILES['img']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }

                update_product($id, $id_type, $name, $price, $description, $discount, $img);
                $thongbao = "Cập nhật Thành Công";
            }
            $listdanhmuc = loadall_types();
            $listproducts = loadall_products();
            include "./sanpham/list.php";
            break;
        case 'users_accounts':
            $listtaikhoan = loadall_accounts();
            include "./taikhoan/list.php";
            break;
        case 'edit_accounts':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                $tk = loadone_accounts($_GET['id']);
            }
            include "./taikhoan/edit.php";
            break;
        case 'update_accounts':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $name = $_POST['password'];
                $id = $_POST['id'];
                update_accounts($id, $name);
            }
            $listtaikhoan = loadall_accounts();
            include "./taikhoan/list.php";
            break;
        case 'delete_accounts':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_accounts($_GET['id']);
            }
            $listtaikhoan = loadall_accounts();
            include "./taikhoan/list.php";
            break;

        case 'list_comments':
            $listcomments = loadall_comments(0);
            include "./binhluan/list.php";
            break;

        case 'delete_comments':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_comments($_GET['id']);
            }
            $listcomments = loadall_comments(0);
            include "./binhluan/list.php";
            break;

        case 'list_bills':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }

            $listbills = loadall_bill($kyw, 0);
            include "./donhang/list.php";
            break;

        case 'delete_bills':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_bills($_GET['id']);
            }
            $listbills = loadall_bill($kyw, 0);
            include "./donhang/list.php";
            break;

        case 'edit_bills':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $listbills = loadone_bill($id);
                var_dump($listbills);
                $bill_detail = load_bill_detail_by_bill_id($id);
                var_dump($bill_detail);
            }
            include "./donhang/edit.php";
            break;

        case 'update_bills':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $araybill = [];
                $id = $_POST['id'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tell = $_POST['tell'];
                $status = $_POST['status'];
                update_bills($id, $name, $email, $address, $tell, $status);
            }
            $listbills = loadall_bill();
            include "./donhang/list.php";
            break;
            case 'list_blog':
                $listblog = loadall_blog();
                include './blog/list.php';
                break;
                case 'add_blog':
                    if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                        $name = $_POST['name_blog'];
                        $description = $_POST['content'];
                        $img = $_FILES['img']['name'];
                        $extension = pathinfo($img, PATHINFO_ALL);
                        $randomo = rand(0, 1000000);
                        $rename = 'Upload' .  date("Y-m-d") . $randomo;
                        $img = $rename . '.' . $extension;
                        $target_dir = "../upload/";
                        $date =  date('d-m-Y');     
                        move_uploaded_file($_FILES["img"]["tmp_name"], $target_dir . $img);
                        insert_blog($name, $img, $description,$date);
                        header("location: ./index.php?act=list_blog");
                    }
                    include './blog/add.php';
                    break;
                    case 'delete_blog':
                        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                            delete_blog($_GET['id']);
                        }
                        $listblog = loadall_blog();
                        include "./blog/list.php";
                        break;
                        case 'edit_blog':
                            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                                $blog = loadone_blog($_GET['id']);
                            }
                            $listblog = loadall_blog();
                            include "./blog/edit.php";
                            break;
                            case 'update_blog':
                                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                    $id = $_POST['id'];
                               
                                    $name = $_POST['name_blog'];
                                    
                                    $description = $_POST['des_blog'];
                                 
                                    $img = $_FILES['img']['name'];
                                    $date =  date('d-m-Y');
                                    $target_dir = "../upload/";
                                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
                                    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                                    } else {
                                        // echo "Sorry, there was an error uploading your file.";
                                    }
                    
                                    update_blog($id, $name, $img, $description, $date);
                                    $thongbao = "Cập nhật Thành Công";
                                }
                                $listblog = loadall_blog();
                         
                                include "./blog/list.php";
                                break;
        case 'chart':
            $listthongke = chart();
            include './thongke/chart.php';
            break;
            

        default:
            # code...
            break;
    }
} else {
    // content
    include "home.php";
}
include "footer.php";

<?php
ob_start();

include "../model/pdo.php";
include "../model/products.php";
include "../model/types.php";
include "../model/users.php";

include "main.php";
// include "home.php";


if (isset($_GET['act'])) {
    $act = ($_GET['act']);
    switch ($act) {
            // list
        case 'list_types':
            $listdanhmuc = loadall_types();
            include "./danhmuc/list.php";
            break;

        case 'add_types':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_types($tenloai);
                header("location: ./index.php?act=list_types");
            }
            include "./danhmuc/add.php";

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

        case 'list_products':
            $listproducts = loadall_products();
            include "./sanpham/list.php";
            break;

        case 'add_products':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $id_type = $_POST['id_type'];
                $name = $_POST['name_product'];
                $price = $_POST['price_product'];
                $description = $_POST['des_product'];
                $discount = $_POST['dis_product'];
                $img = $_FILES['img']['name'];
                var_dump($img);
                // die();
                $allowUpload   = true;

                $target_dir = "../upload/";
                var_dump($target_dir);
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                var_dump($target_file);
                if (file_exists($target_file)) {
                    $file_name = date("dmYHis") . str_replace(" ", "", $img);
                } else {
                    $file_name = basename($_FILES["img"]["name"]);
                }

                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_dir . $file_name)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }

                insert_products($name, $price, $img, $description, $discount, $id_type);
                $thongbao = "Thêm Thành Công";
            }
            $listdanhmuc = loadall_types();
            include "./sanpham/add.php";
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
                $rename = time();
                $target_file = $target_dir . $rename . basename($_FILES["img"]["name"]);
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



        default:
            # code...
            break;
    }
} else {
    // content
    include "home.php";
}
include "footer.php";

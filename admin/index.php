<?php
ob_start ();

include "../model/pdo.php";
include "../model/products.php";
include "../model/types.php";

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
                header ("location: ./index.php?act=list_types");
            }
            include "./danhmuc/add.php";

            break;

        case 'edit_types':
            //$listdanhmuc = loadall_types();
            include "./danhmuc/edit.php";
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
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
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

        case 'edit_products':
            //$listdanhmuc = loadall_types();
            include "./sanpham/edit.php";
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

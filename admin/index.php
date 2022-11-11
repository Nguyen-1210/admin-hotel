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
            //$listdanhmuc = loadall_types();
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

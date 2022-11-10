<?php
include "../model/pdo.php";
include "../model/products.php";

include "main.php";
// include "home.php";


if (isset($_GET['act'])) {
    $act = ($_GET['act']);
    switch ($act) {
        // list
        case 'list_types':
            //$listdanhmuc = loadall_types();
            include "./danhmuc/list.php";
            break;

        case 'add_types':
            //$listdanhmuc = loadall_types();
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

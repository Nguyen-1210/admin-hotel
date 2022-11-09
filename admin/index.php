<?php
// menu search
include "main.php";
// content

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
        default:
            # code...
            break;
    }

} else {
    // content
    include "home.php";
}
include "footer.php";

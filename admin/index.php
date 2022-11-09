<?php
include "../model/pdo.php";
include "header.php";
include "home.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'list_types':
            //$listdanhmuc = loadall_types();
            include "./danhmuc/list.php";
            break;
            break;
        
        default:
            # code...
            break;
    }

}

include "footer.php";


?>
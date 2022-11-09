<?php
include "../model/pdo.php";
include "view/header.php";

if((isset($_GET['act'])) && ($_GET['act'] !=""))
{
    $act = ($_GET['act']);
    switch ($act) {
        case 'types':
            include "../view/types.php";
            break;
        
        default:
            
            break;
    }
}
else
{
    include "../view/home.php";
}
include "view/footer.php"
?>
<?php

function chart(){
<<<<<<< HEAD
    $sql = "select types.id as madm, types.name as tendm, count(products.id) as countsp, min(products.price) as minprice, sum(products.price) as maxprice, avg(products.price) as avgprice";
=======
    $sql = "select types.name as tendm,  sum(products.price) as maxprice";
>>>>>>> chart
    $sql.=" from products left join types on types.id=products.id_type";
    $sql.=" group by types.id order by products.id desc";
    $listtk = pdo_query($sql);
    return $listtk;

}

?>
<?php

function chart(){
    $sql = "select types.name as tendm,  sum(products.price) as maxprice";
    $sql.=" from products left join types on types.id=products.id_type";
    $sql.=" group by types.id order by products.id desc";
    $listtk = pdo_query($sql);
    return $listtk;

}

?>
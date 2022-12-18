<?php

function insert_types($tenloai,$img)
{
    $sql = "insert into types(name,img) values ('$tenloai','$img')";
    pdo_execute($sql);
}

function delete_types($id)
{
    $sql = "delete from types where id=" . $id;
    pdo_execute($sql);
}

function loadall_types()
{
    $sql = "select * from types order by id asc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function loadone_types($id)
{
    $sql = "select * from types where id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_types($id, $name, $img)
{

    $sql = "update types set name='" . $name . "', img='".$img."' where id=" . $id;
    pdo_execute($sql);
}

function can_delete($id)
{
    $sql = "select products.id_type from products where id_type ='" . $id . "' ";
    $sql_qr = pdo_query($sql);
    if (empty($sql_qr)) {
        return true;
    } else {
        return false;
    }
}

function show_types()
{
    $sql = " SELECT *,types.img AS 'img_type', types.name AS 'namhh' ,types.id as 'id_type_of_product'  , COUNT(products.id) AS 'tonghh' FROM types LEFT JOIN products ON types.id = products.id_type GROUP BY types.id";

   return pdo_query($sql);
   
}

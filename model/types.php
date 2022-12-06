<?php

function insert_types($tenloai)
{
    $sql = "insert into types(name) values ('$tenloai')";
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

function update_types($id, $name)
{

    $sql = "update types set name='" . $name . "' where id=" . $id;
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
    $sql = " SELECT *,COUNT(products.id) AS 'tonghh', types.name AS 'namhh' FROM types LEFT JOIN products ON types.id = products.id_type GROUP BY products.id_type";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

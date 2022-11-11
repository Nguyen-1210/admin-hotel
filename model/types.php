<?php

function insert_types($tenloai){
    $sql = "insert into types(name) values ('$tenloai')";
    pdo_execute($sql);
}

function delete_types($id){
    $sql = "delete from types where id=".$id;
    pdo_execute($sql);
}

function loadall_types(){
    $sql = "select * from types order by id desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function loadone_types($id){
    $sql = "select * from types where id=".$id;
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_types($id, $name){
    $sql = "update types set name='".$name."' where id=".$id;
    pdo_execute($sql);
}

?>
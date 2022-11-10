<?php

function insert_products($name, $price, $img, $description, $id_type){
    $sql = "insert into products(name,price,img,description,id_type) values ('$name','$price','$img','$description','$id_type')";
    pdo_execute($sql);
}

function delete_products($id){
    $sql = "delete from products where id=".$id;
    pdo_execute($sql);
}

function loadall_sanpham_top10(){
    $sql = "select * from sanpham where 1 order by luotxem desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_sanpham_home(){
    $sql = "select * from sanpham where 1 order by id desc limit 0,12";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_products($kyw="", $id_type=0){
    $sql = "select * from products where 1";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($id_type > 0){
        $sql.=" and iddm='".$id_type."'";
    }
    $sql.=" order by id desc";
    $listproducts = pdo_query($sql);
    return $listproducts;
}

function loadone_sanpham($id){
    $sql = "select * from sanpham where id=".$id;
    $sp = pdo_query_one($sql);
    return $sp;
}

function load_ten_dm($iddm){
    if($iddm > 0){
    $sql = "select * from danhmuc where id=".$iddm;
    $dm = pdo_query_one($sql);
    extract($dm);
    return $name;
    }
    else
    {
        return "";
    }
}

function load_sanpham_cungloai($id, $iddm){
    $sql = "select * from sanpham where iddm=".$iddm." AND id <> ".$id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh){
    if($hinh!=""){
        $sql = "update sanpham set iddm='".$iddm."', name='".$tensp."', price='".$giasp."', mota='".$mota."',img='".$hinh."' where id=".$id;
    }
    else
    {
        $sql = "update sanpham set iddm='".$iddm."', name='".$tensp."', price='".$giasp."', mota='".$mota."' where id=".$id;
    }
    pdo_execute($sql);
}

?>
<?php

function insert_products($name, $price, $img, $description, $discount, $id_type){
    $sql = "insert into products(name,price,img,description,discount,id_type) values ('$name','$price','$img','$description', '$discount', '$id_type')";
    pdo_execute($sql);
}

function delete_products($id){
    $sql = "delete from products where id=".$id;
    pdo_execute($sql);
}

function loadall_product_top8(){
    $sql = "SELECT *,types.name AS 'namehh',products.id AS 'idpro', products.name AS 'namepro', products.img AS 'imgpro' FROM products INNER JOIN types ON products.id_type = types.id WHERE products.view>0 order by products.view desc LIMIT 0,04";
    $listproducts = pdo_query($sql);
    return $listproducts;
}

function loadall_product_home(){
    $sql = "SELECT *,types.name AS 'namehh',products.img AS 'img_pro', products.name AS 'namepro', products.id AS 'id_pro' FROM products INNER JOIN types ON products.id_type = types.id ";
    $listproducts = pdo_query($sql);
    return $listproducts;
}
function loadall_rand_home(){
    $sql = "SELECT *,types.name AS 'namehh',products.img AS 'img_pro', products.name AS 'namepro', products.id AS 'id_pro' FROM products INNER JOIN types ON products.id_type = types.id order by rand() limit 5";
    $listproducts = pdo_query($sql);
    return $listproducts;
}

function loadall_products($kyw="", $id_type=0){
    $sql = "select * from products where 1";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($id_type > 0){
        $sql.=" and id_type='".$id_type."'";
    }
    $sql.=" order by id asc";
    $listproducts = pdo_query($sql);
    return $listproducts;
}
function load_search($kyw=""){
    $sql = "select * from products where 1";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    $sql.=" order by id asc";
    $listsearch = pdo_query($sql);
    return $listsearch;
}

function loadone_product($id){
    $sql = "SELECT *,types.name AS 'namehh',products.img AS 'imgpro', products.name AS 'namepro', products.id AS 'id_pro' FROM products INNER JOIN types ON products.id_type = types.id WHERE products.id =".$id;
    $products = pdo_query_one($sql);
    return $products;
}

function load_ten_dm($id_type){
    if($id_type > 0){
    $sql = "select * from types where id=".$id_type;
    $dm = pdo_query_one($sql);
    extract($dm);
    return $name;
    }
    else
    {
        return "";
    }
}

function load_product_cungloai($id, $id_type){
    $sql = "select * from products where iddm=".$id_type." AND id <> ".$id;
    $listproducts = pdo_query($sql);
    return $listproducts;
}

function update_product($id,  $name, $price, $description, $discount, $img){
    if($img!=""){
        $sql = "update products set  name='".$name."', price='".$price."', description='".$description."', discount='".$discount."', img='".$img."' where id=".$id;
    }
    else
    {
        $sql = "update products set  name='".$name."', price='".$price."', description='".$description."', discount='".$discount."' where id=".$id;
    }
    pdo_execute($sql);
}

/**
 * @param $id
 * @return string
*/
function get_product_name_by_id($id){
    $sql  = "select name from products where id = ".$id;
    $data =pdo_query_one($sql); 
    return $data['name']??'';
}
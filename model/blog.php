<?php
function loadall_blog($kyw="", $id=0){
    $sql = "select * from blog where 1";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($id > 0){
        $sql.=" and id='".$id."'";
    }
    $sql.=" order by id asc";
    $listblog = pdo_query($sql);
    return $listblog;
}
function loadall_rand_blog(){
    $sql = "select * from blog order by rand() limit 3";
    $listblog = pdo_query($sql);
    return $listblog;
}

function insert_blog($name, $img, $description,$date){
    $sql = "insert into blog(name,img,description,date) values ('$name','$img','$description',  '$date')";
    pdo_execute($sql);
}

function delete_blog($id){
    $sql = "delete from blog where id=".$id;
    pdo_execute($sql);
}

function loadone_blog($id)
{
    $sql = "select * from blog where id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_blog($id, $name, $img, $description, $date){
    if($img!=""){
        $sql = "update blog set name='".$name."', img='".$img."', description='".$description."', date='".$date."' where id=".$id;
    }
    else
    {
        $sql = "update blog set name='".$name."', img='".$img."', description='".$description."', date='".$date."' where id=".$id;
    }
    pdo_execute($sql);
}

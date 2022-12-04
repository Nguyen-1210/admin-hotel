<?php

function loadone_bill($id){
    $sql = "select * from bills where id=".$id;
    $bills = pdo_query_one($sql);
    return $bills;
}
function insert_bill($iduser, $name, $email, $address, $tel, $pay, $day ,$total){
    $sql = "insert into billd(user_id,name, email, address, tell, pay, day, total) values ('$iduser', '$name', '$email', '$address', '$tel', '$pay', '$day' , '$total')";
    return pdo_execute_return_lastInsertId($sql); 
}

function loadall_bill($kyw="", $id_user=0){

    $sql = "select * from bills where 1";

    if($id_user > 0) $sql.=" AND iduser=".$id_user;
    if($kyw !="") $sql.=" AND id like '%".$kyw."%' ";
    $sql.=" order by id desc";
    $listbills = pdo_query($sql);
    return $listbills;
}

function loadall_bill1($id_user){
    $sql = "select * from bills where iduser=".$id_user;
    $listbills = pdo_query($sql);
    return $listbills;

}
function delete_bills($id){
    $sql = "delete from bills where id=".$id;
    pdo_execute($sql);
}

function get_ttdh($n){
    switch ($n) {
        case '0':
            $tt = " Đơn hàng mới";
            break;
        
        case '1':
            $tt = " Đang xử lí";
            break;
        
        case '2':
            $tt = " Đang giao hàng";
            break;
        
        case '3':
            $tt = " Đã giao hàng";
            break;
                    
        default:
            $tt = " Đơn hàng mới";
            break;
    }
    return $tt;
}

function update_bills($id, $name, $email, $address, $tell, $status){
    $sql = "update bills set name='".$name."', email='".$email."', address='".$address."', tell='".$tell."', status='".$status."' where id=".$id;
    pdo_execute($sql);
}


?>
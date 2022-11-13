<?php

function insert_taikhoanmoi($user, $pass, $name, $email, $address, $tel ,$role){
    $sql = "insert into taikhoan(user,pass, name, email,address,tel,role) values ('$user','$pass', '$name', '$email','$address','$tel','$role')";
    pdo_execute($sql);
}
function delete_taikhoan($id){
    $sql = "delete from taikhoan where id=".$id;
    pdo_execute($sql);
}

function loadall_accounts(){
    $sql = "select * from accounts order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

function loadone_taikhoan($id){
    $sql = "select * from taikhoan where id=".$id;
    $tk = pdo_query_one($sql);
    return $tk;
}

function insert_taikhoan($email, $user, $pass, $name){
    $sql = "insert into taikhoan(email,name,user,pass) values ('$email','$user','$pass','$name')";
    pdo_execute($sql);
}

function checkuser($user, $pass){
    $sql = "select * from taikhoan where user='".$user."'AND pass= '".$pass."'" ;
    $tk = pdo_query_one($sql);
    return $tk;
}

function checkemail($email){
    $sql = "select * from taikhoan where email='".$email."'" ;
    $tk = pdo_query_one($sql);
    return $tk;
}

function update_taikhoan($id, $user, $pass, $email, $name, $address, $tel, $role){
    $sql = "update taikhoan set user='".$user."', pass='".$pass."', email='".$email."', name='".$name."', address='".$address."', tel='".$tel."', role='".$role."' where id=".$id;
    pdo_execute($sql);
}

?>
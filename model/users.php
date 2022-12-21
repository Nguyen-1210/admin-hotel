<?php

function insert_taikhoanmoi($user, $pass, $name, $email, $address, $tel ,$role){
    $sql = "insert into taikhoan(user,pass, name, email,address,tel,role) values ('$user','$pass', '$name', '$email','$address','$tel','$role')";
    pdo_execute($sql);
}
function delete_accounts($id){
    $sql = "delete from accounts where id=".$id;
    pdo_execute($sql);
}

function loadall_accounts(){
    $sql = "select * from accounts order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function loadall_admin(){
    $sql = "select * from account_admin order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

function loadone_accounts($id){
    $sql = "select * from accounts where id=".$id;
    $tk = pdo_query_one($sql);
    return $tk;
}

function insert_taikhoan($email, $username, $password){
    $sql = "insert into accounts(email,username,password) values ('$email','$username','$password')";
    pdo_execute($sql);
}

function checkuser($username, $password){
    $sql = "select * from accounts where username='".$username."'AND password= '".$password."'" ;
    $tk = pdo_query_one($sql);
    return $tk;
}

function checkemail($email){
    $sql = "select * from taikhoan where email='".$email."'" ;
    $tk = pdo_query_one($sql);
    return $tk;
}

function update_accounts($id, $password){
    $sql = "update accounts set  password='".$password."' where id=".$id;
    pdo_execute($sql);
}

function update_user($id, $email,$name, $tell, $address){
    $sql = "update accounts set  email='".$email."', name='".$name."',tell='".$tell."', address='".$address."' where id=".$id;
    pdo_execute($sql);
}

function get_cart_data_by_user_id($id){
    $sql = "SELECT * from carts where user_id = ".$id;

    pdo_execute($sql);
}
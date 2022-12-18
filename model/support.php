<?php

function insert_support($name,$email,$tell,$description)
{
    $sql = "insert into support(name,email,tell,description) values ('$name','$email','$tell', '$description')";
    pdo_execute($sql);
}
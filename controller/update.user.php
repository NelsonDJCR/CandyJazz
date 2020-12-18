<?php
include "connection.php";
 
$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$address = $_POST['address'];
$email = $_POST['email'];

$e = $con->query("UPDATE users SET name = '$name', phone = '$phone', city = '$city', address = '$address', email = '$email' WHERE id_user = '$id' ");

if ($e) {
    echo 1;
}
else{
    echo 2;
}
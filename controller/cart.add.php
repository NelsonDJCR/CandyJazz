<?php
include "connection.php";
$id_products = $_POST['id_products'];
$id_user =  $_POST['id_user'];
$price =  $_POST['price'];

$exist = $con->query("SELECT * FROM cart WHERE id_products = '$id_products' AND id_user= '$id_user'");
$data = mysqli_num_rows($exist);

if ($data == 0) {
    $exe = $con->query("INSERT INTO cart (id_products, id_user, price) VALUES ('$id_products','$id_user','$price')");
    if ($exe) {
        echo 1;
    }
}else{
    echo 2;
}

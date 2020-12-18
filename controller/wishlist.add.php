<?php
include "connection.php";
$id_product = $_POST['id_products'];
$id_user = $_POST['id_user'];


$exist = $con->query("SELECT * FROM wishlist WHERE id_product = '$id_product' AND id_user= '$id_user'");
$data = mysqli_num_rows($exist);

if ($data == 0) {
    $r = $con->query("INSERT INTO wishlist (id_user, id_product) VALUES ('$id_user','$id_product')");
    if ($r) {
        echo 1;
    }
}else{
    echo 2;
}

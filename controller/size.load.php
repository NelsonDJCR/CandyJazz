<?php
include "connection.php";
$size = $_POST['size'];
$id_user = $_POST['id_user'];
$id_product = $_POST['id_product'];

if ($size == "") {
    echo 3;
}

$valide = $con->query("SELECT size FROM products WHERE size LIKE '%$size%' AND id_products = '$id_product'");

$datar = mysqli_num_rows($valide);

if ($datar == 0) {
    echo  2;
} else {

    $exe = $con->query("UPDATE cart SET size_select = '$size' WHERE id_products = '$id_product' AND id_user = '$id_user'");

    if ($exe) {
        echo 1;
    }
}

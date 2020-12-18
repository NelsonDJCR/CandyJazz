<?php
include 'connection.php';
$product = $_POST['cart_product'];
$user = $_POST['cart_user'];
$exe = $con->query("DELETE FROM cart WHERE id_products = $product AND id_user = $user" );
if ($exe) {
    echo 1;
}


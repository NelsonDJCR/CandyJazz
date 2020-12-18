<?php 
include "connection.php";
$id_product = $_POST['id_products'];
$id_user = $_POST['id_user'];
$r = $con->query("DELETE FROM wishlist WHERE id_user = '$id_user' AND id_product = '$id_product'");
if ($r) {
    echo 1;
}

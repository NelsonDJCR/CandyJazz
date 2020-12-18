<?php
session_start();
$session = $_SESSION['id_session'];
include "connection.php";
$exe=$con->query("SELECT * FROM cart WHERE id_user = '$session'");
echo  mysqli_num_rows($exe);

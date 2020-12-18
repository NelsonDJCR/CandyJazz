<?php
session_start();
$session = $_SESSION['id_session'];
include "connection.php";
$exe = $con->query("SELECT SUM(price) AS total FROM cart WHERE id_user = '$session' ");
$row = $exe->fetch_assoc();
echo "$ ". number_format($row['total']);

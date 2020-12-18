<?php

include "connection.php";

$id = $_POST['id'];
$last = $_POST['last'];
$new = $_POST['new'];

$correct = $con->query("SELECT * FROM users WHERE id_user = '$id' AND secret = '$last'");

$rows = mysqli_num_rows($correct);

if ($rows == 0) {
    echo 2;
} else if ($con->query("UPDATE users SET secret = '$new' WHERE id_user = '$id'  ")) {
    echo 1;
}

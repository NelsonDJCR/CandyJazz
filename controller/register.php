<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$email = $_POST['email'];
$pass = $_POST['secret'];
include 'connection.php';

$validarRegistro = $con->query("SELECT * FROM users WHERE email = '$email' or phone = '$phone'");
$validar = mysqli_num_rows($validarRegistro);

if ($validar == 0) {
    $sql = "INSERT INTO users (id_user, name, phone, city, email, secret) VALUES (NULL, '$name','$phone','$city','$email','$pass')";
    if ($con->query($sql)) {
        echo 1;
    }
} else if ($validar > 0) {
    echo 2;
}

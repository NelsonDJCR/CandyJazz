<?php 

    $sesion = $_SESSION['id_session'];
   
    include 'connection.php';

    $sql = "SELECT * FROM users WHERE id_user = '$sesion'";

    $exe = $con->query($sql);

    $data = $exe->fetch_assoc();

    $name = $data['name'];
    $phone = $data['phone'];
    $address = $data['address'];
    $city = $data['city'];
    $email = $data['email'];
    $secret = $data['secret'];


?>
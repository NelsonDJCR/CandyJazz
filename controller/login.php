<?php
include "connection.php";
$email  = $_POST['login_email'];
$secret  = $_POST['login_secret'];

if ($email == "admin@candyjazz.com" && $secret == "Colombia2020") {
    session_start();
    $_SESSION['admin'] = '1';
    echo "2";
} else {

    $sql = "SELECT * FROM users WHERE email = '$email' AND secret = '$secret'";
    $exe = $con->query($sql);

    // Capturar id
    $sql2 = "SELECT * FROM users WHERE email = '$email' AND secret = '$secret'";
    $exe2 = $con->query($sql);
    $rows = mysqli_num_rows($exe);
    $id = $exe2->fetch_assoc();
    $id = $id['id_user'];



    if ($rows > 0) {
        session_start();
        $_SESSION['id_session'] = $id;
        echo "1";
    }
}

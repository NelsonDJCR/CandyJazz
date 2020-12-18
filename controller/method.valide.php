<?php
include 'connection.php';
session_start();
$session = $_SESSION['id_session'];
$id_user = $_POST['id_user'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$address = $_POST['address'];
$products = $_POST['products'];
$sizes = $_POST['sizes'];
$method = $_POST['paymentmethod'];

$numPrice = $con->query("SELECT SUM(price) AS total FROM cart WHERE id_user = '$id_user' ");
$rowPrice = $numPrice->fetch_assoc();
$total = $rowPrice['total'];



$valideExist = $con->query("SELECT * FROM bill WHERE id_user = '$session' AND state = 1 ") ;


$valideExistRows = mysqli_num_rows($valideExist);

if ($method == "noData") {
    echo 9;
}else if ($valideExistRows >=  1) {
    echo 5;
} 
else {
    $insertAddress = $con->query("UPDATE users SET address = '$address' WHERE id_user = '$id_user'");
    $exe = $con->query(
        "INSERT INTO 
        bill 
        (id_user, name, phone, city, address,products, size_select, total, method, state) 
        VALUES 
        ('$id_user', '$name', '$phone', '$city', '$address', '$products', '$sizes', '$total', '$method', 1);
        "
    );
    if ($exe && $insertAddress) {
        if ($method == "bank") {
            echo 1;
        } else if ($method == "cash") {
            echo 2;
        } else if ($method == "nequi") {
            echo 3;
        } else if ($method == "whastApp") {
            echo 4;
        }
    }else {
        echo 10;
    }

}

// Banco     1
// Cash      2
// Nequi     3 
// WhatsApp  4


// $sql ="SELECT name FROM users";

// $result = $con->query($sql) or die("Error en la Consulta SQL".pg_last_error();
  
// while ($fila = mysqli_fetch_array($result)) {

//  echo $revisado= $fila['name'] . " ";

// }

<?php
include 'connection.php';
$id_Cat= $_POST['id_catalog'];
$name = $_POST['productName'];
$price = $_POST['productPrice'];
$size = $_POST['productSize'];
$img = addslashes(file_get_contents($_FILES['img']['tmp_name']));
// 
$sql = 
"INSERT INTO products (id_catalog, name, price, size, img ) VALUES ('$id_Cat','$name','$price','$size','$img')";

$exe = $con->query($sql);
if ($exe) {
    echo "
    <script>
    Swal.fire(
        '¡Perfecto!',
        'El producto ha sido guardado',
        'success'
    )
    </script>";
}else{
    echo error_reporting();
}


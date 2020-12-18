<!DOCTYPE html>
<html lang="es">
<?php session_start();
include 'controller/captureQuantity.php';
if (isset($_SESSION['admin'])) {

?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="shortcut icon" href="../assets/img/logo/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="assets/plugins/font/font.css">
        <link rel="stylesheet" href="../assets/plugins/animate/animate.min.css">

        <link rel="stylesheet" href="assets/css/styles.css">
    </head>

    <body>
        <div class="box_before animate__animated animate__backOutUp">
            <img src="../assets/img/logo/logo.png" alt="">
        </div>
        <div class="top">
            <p>Panel de administración <b>Candy Jazz</b></p>
        </div>

        <div class="work-area">

            <div class="box_menu">
                <div class="box_logo">
                    <img src="../assets/img/logo/logo.png" alt="">
                </div>
                <ul>
                    <h3><a target="iframe" href="view/home.php" style="color: black;" href="">Menú</a></h3>
                    <li><a target="iframe" href="view/save.newCatalog.php">Nuevo Catálogo</a></li><br>
                    <li><a target="iframe" href="view/save.newProducts.php">Agregar productos</a></li><br>
                    <li><a target="iframe" href="view/show.catalogs.php">Lista de Catálogos (<?php echo $catalogs ?>)</a></li><br>
                    <li><a target="iframe" href="view/show.productos.php">Todos los productos (<?php echo $products ?>)</a></li><br>
                    <li><a target="iframe" href="view/show.users.php">Lista de usuarios (<?php echo $users ?>)</a></li><br>
                    <li><a target="iframe" href="view/show.orders.php">Ordenes </a></li><br>
                    <li><a href="../controller/logout.php">Cerrar Sesión </a></li>
                </ul>
            </div>
            <div class="box-iframe">
                <iframe name="iframe" class="iframe" src="view/home.php" iframeBorder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        <footer>
            <p>Candy Jazz © 2020</p>
        </footer>
    </body>

</html>
<?php

} else {
    header("Location: ../index.php");
}
?>
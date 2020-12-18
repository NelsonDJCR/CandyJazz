<!DOCTYPE html>
<html lang="es">
<?php include '../controller/connection.php' ?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../assets/css/styles.form.css" />
    <link rel="stylesheet" href="../assets/plugins/font/font.css" />
    <link rel="stylesheet" href="../../assets/plugins/animate/animate.min.css">
    <link rel="stylesheet" href="../../assets/plugins/sweetAlert/sweetAlert.css">
    <script src="../../assets/plugins/sweetAlert/sweetAlert.js"></script>
    <title></title>
</head>
<style>
    .container__ {
        background-image: url("data:image/jpeg;base64,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");
    }
</style>

<body>

    <div class="container__">
        <div class="container">
            <form enctype="multipart/form-data" action="save.newProducts.php" method="POST" id="productForm" class="form" onsubmit="return valida();">
                <h1 class="title">Agregar nuevo producto</h1>
                <?php
                if (isset($_REQUEST['id'])) {

                    $id = $_REQUEST['id'];

                    $sql = "SELECT * FROM catalogs ORDER BY id_catalog DESC LIMIT 1 ";
                    $exe = $con->query($sql);
                    $row2xx = $exe->fetch_assoc();
                    $name = $row2xx['name'];
                    echo "<p>Catálogo: $name </p>";

                }

                ?>
                <br>

                <?php

                if (isset($_REQUEST['id'])) {
                    echo '<input name="id_catalog" id="id_catalog" style="display:none ;" type="text" value="' . $id . '">';
                } else {
                    echo '<label for="id_catalog">Catálogo</label>
                    <select name="id_catalog" id="id_catalog" class="input input-select border">';

                    $exe = $con->query("SELECT * FROM catalogs ORDER BY id_catalog DESC LIMIT 6 ");

                    while ($row = $exe->fetch_assoc()) {
                        echo '<option value="' . $row['id_catalog'] . '">' . $row['name'] . '</option>';
                    }
                    echo "</select>";
                }
                ?>


                <label for="productName" class="label">Nombre</label>
                <input name="productName" id="productName" type="text" class="input input-text border" placeholder="Nombre del producto">

                <label for="productPrice" class="label">Precio</label>
                <input name="productPrice" id="productPrice" type="text" class="input input-text border" placeholder="Valor del producto">

                <label for="productSize" class="label">Talla(s)</label>
                <input name="productSize" id="productSize" type="text" class="input input-text border" placeholder="Tallas disponibles">

                <!-- File -->
                <label for="img">Imagen</label>
                <div class="file-box border">
                    <img src="../assets/img/nube.png" alt="" class="file-img">
                    <p class="file-txt">Seleccione Archivo</p>
                    <input type="file" name="img" id="img" class="input-file">
                </div>

                <input type="submit" id="productBtn" name="productBtn" value="¡Guardar!" class="btn">
            </form>
            <?php
            if (isset($_POST['productBtn'])) {
                include "../controller/save.product.php";
            }
            ?>
        </div>
    </div>
</body>
<script src="../assets/plugins/Jquery/jquery.js"></script>
<script src="../assets/js/save.product.js"></script>


</html>
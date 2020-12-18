<!DOCTYPE html>
<html lang="es">

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
<!-- https://images.pexels.com/photos/3315286/pexels-photo-3315286.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940 -->

<style>
  .container__ {
    background-image: url("https://fondosmil.com/fondo/23379.jpg");
  }
</style>

<body>

  <div class="container__">
    <div class="container">

      <form action="" method="post" class="form" id="catalogSave_form">
        <h1 class="title">Agregar nuevo catálogo</h1>

        <br>

        <label for="catalogSave_name" class="label">Nombre</label>
        <input name="catalogSave_name" id="catalogSave_name"  type="text" class="input input-text border" placeholder="Nombre del catálogo">

        <label for="catalogSave_desctiption">Descripción</label>
        <textarea name="catalogSave_desctiption" id="catalogSave_desctiption" class="input textarea border" placeholder="Descripción del catálogo"></textarea>
        <br>
        <input type="submit" id="catalogSave_btn" value="¡Guardar!" class="btn">
      </form>
    </div>
  </div>

</body>
<script src="../assets/plugins/Jquery/jquery.js"></script>
<script src="../assets/js/save.catalog.js"></script>
<!-- <link rel="stylesheet" href="../controller/save.catalog.php"> -->
</html>
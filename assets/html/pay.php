<?php
if (isset($_REQUEST['id'])) {
  session_start();
  $method = $_REQUEST['id'];
  $session = $_SESSION['id_session'];
  include "../../controller/session_data.php";
?>
  <!DOCTYPE html>
  <html lang="es">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Procesar comprar</title>
    <link rel="stylesheet" href="../css/pay.css" />
    <link rel="stylesheet" href="../plugins/sweetAlert/sweetAlert.css" />
    <link rel="stylesheet" href="../plugins/font/font.css" />
  </head>

  <body>
    <?php
    // MÉTODO BANCO
    if ($method == 1) { ?>
      <div class="container">
        <img src="../img/payMethods/1_.jpg" alt="" />
        <div class="contaner-text">
          <p>
            Pronto te enviaremos un link de pago a tu correo y WhatsApp, para que
            continúes el proceso de pago de forma 100% segura
          </p>
        </div>
      </div>

    <?php } else if ($method == 2) { ?>
      <div class="container_btn">
          <button onclick="getScreen()" id="btn_dowload" class="btn_dowload">Descargar</button>
        </div>
      <div class="container">
        <img src="../img/payMethods/2_.jpg" alt="" />
        
        <div class="contaner-text">
          <p>
            Realiza tu giro a través de alguno de estor portales
            <br>
            <br>
            Datos de envío:
            <br>
            Nombre: Dayro Andrés Pinilla Cárdenas
            <br>
            C.C.: 1,000,614,612
            <br>

            <br>
            Envío:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Por definir
            <br>
            Sub Total:&nbsp;&nbsp;<span><b id="total"></b></span>
            <br>
            <br>
            <p style="font-size: 0.8em;">Nos comunicaremos con tigo para informarte el costo del envío</p>
            </table>
          </p>
        </div>
        <a href="" id="blank"></a>
      </div>
    <?php } else if ($method == 3) { ?>
      <div class="container_btn">
          <button onclick="getScreen()" id="btn_dowload" class="btn_dowload">Descargar</button>
        </div>
      <div class="container">
        <img src="../img/payMethods/3_.jpg" alt="" />
        <div class="contaner-text">
          <p>
            Realiza tu pago desde tu celular de forma segura
            <br>
            <br>
            Datos de envío:
            <br>
            <br>
            Móvil: 305 707 8275
            <br>
            <br>
            Envío:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Por definir
            <br>
            Sub Total:&nbsp;&nbsp;<span><b id="total"></b></span>
            <br>
            <br>
            <p style="font-size: 0.8em;">Nos comunicaremos con tigo para informarte el costo del envío</p>

            </table>

          </p>
        </div>
        <a href="" id="blank"></a>
      </div>

    <?php } else if ($method == 4) {
      $id_bill = $con->query("SELECT * FROM bill WHERE id_user = '$session' ORDER BY id_bill DESC");
      $row_id_bill = $id_bill->fetch_assoc();
      $id_bill = $row_id_bill['id_bill'];
      $name_user = $con->query("SELECT * FROM users WHERE id_user = '$session' ");
      $row_name_user = $name_user->fetch_assoc();
      $name = $row_name_user['name'];
      $products = $con->query("SELECT * FROM bill WHERE id_user = '$session' AND id_bill = '$id_bill' ");
      $rowproducts = $products->fetch_assoc();
      $products = $rowproducts['products'];
      $sizes = $rowproducts['size_select'];
      $exe = $con->query("SELECT SUM(price) AS total FROM cart WHERE id_user = '$session' ");
      $row = $exe->fetch_assoc();
      $total_ = $row['total'];
      $route = "https://wa.me/573017192558?text=%2ACandy+Jazz%2A+%0D%0A%0D%0A_Nuevo+pedido%21_+%0D%0A%2ADatos+del+de+facturaci%C3%B3n%2A+%0D%0A%0D%0A+++%F0%9F%93%8B+++%2AFactura+N%C2%BA%2A+++" . $id_bill . "%0D%0A+++%F0%9F%94%97+++%2AId%3A%2A+++++++++++++++++" . $session . "+%0D%0A++%F0%9F%91%A4+++%2AUsuario%3A%2A++++++++" . $name . "%0D%0A++%F0%9F%97%83+++%2AProductos%3A%2A++++" . $products . "++%0D%0A++%F0%9F%93%8F+++%2ATallas%3A%2A++++++++++++" . $sizes . "%0D%0A%0D%0A+++%F0%9F%92%B0++%2ATotal%3A%2A+++++++++++++%24+" . $total_ . "";
      header("Location: $route");
    }  ?>
    <link rel="stylesheet" href="">
    <script src="../plugins/Jquery/jquery.js"></script>
    <script src="../plugins/sweetAlert/sweetAlert.js"></script>
    <script src="../plugins/canvas/canvas.js"></script>
    <script>
      $("#total").load("../../controller/cart.total.php");
    </script>
    <script>
      function getScreen() {
        $("#btn_dowload").hide();
        html2canvas(document.body, {
            dpi: 192,
            onrendered: function(canvas) {
                $("#blank").attr('href', canvas.toDataURL("image/png"));
                $("#blank").attr('download', 'pago' + '.png');
                $("#blank")[0].click();
            }
        });
      }
    </script>
  <?php include 'footer.php' ?>
  </body>

  </html>
<?php
} else {
  header("Location: ../../");
}
?>
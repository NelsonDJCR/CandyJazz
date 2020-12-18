$(document).ready(function () {
  $("#dataCart_number").load("../../controller/cart.count.php");
  $("#items_cart").load("../../controller/cart.item.php");
  $("#totalCart").load("../../controller/cart.total.php");
  $(".abrirModal").click(function () {
    var src = $(this).attr("src");

    var name = $(this).attr("name");
    var size = $(this).attr("size");
    var price = $(this).attr("price");
    var description = $(this).attr("description");

    $("#nameModal").text(name);
    $("#sizeModal").text(size);
    $("#priceModal").text(price);
    $("#descriptionModal").text(description);
    $(".imgTop_modal").attr("src", src);
    $("#quick_view").modal("show");
  });

  $("#btn_filter").click(function () {
    // data = $("#form_size").serialize();

    var size = $("#size").val();
    var price = $("#price").val();
    if (size == "0") {
      Swal.fire({
        icon: "question",
        title: "Error",
        text: "Seleccione Talla y Precio para filtrar",
      });
      return false;
    } else if (price == "0") {
      Swal.fire({
        icon: "question",
        title: "Error",
        text: "Ingrese el filtro de precio",
      });
      return false;
    }
  });
});

function noSession() {
  Swal.fire({
    title: "¿No estás registrado?",
    text: "Registrate y podrás realizar compras y obtener muchos beneficios",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    // cancelButtonColor: '#d33',
    footer:
      '¿Ta tienes una cuenta &nbsp;<a href="login-register.php"> Inicia Sesión</a>?',
    cancelButtonText: "Cancelar",
    confirmButtonText: "Registrarme",
  }).then((result) => {
    if (result.value) {
      window.location.href = "login-register.php";
    }
  });
  return false;
}

function addCart(data) {
  $.ajax({
    type: "post",
    url: "../../controller/cart.add.php",
    data: data,
    success: function (r) {
      if (r == 1) {
        $("#dataCart_number").load("../../controller/cart.count.php");
        $("#items_cart").load("../../controller/cart.item.php");
        $("#totalCart").load("../../controller/cart.total.php");
        Swal.fire({
          icon: "success",
          title: "¡Añadido al carrito!",
          showConfirmButton: false,
          timer: 1500,
        });
      } else if (r == 2) {
        Swal.fire({
          icon: "info",
          title: "El producto ya está en el carrito",
          showConfirmButton: false,
          timer: 1500,
        });
      }
    },
  });
}
function removeCart(data) {
  $.ajax({
    type: "post",
    url: "../../controller/cart.item.remove.php",
    data: data,
    success: function (r) {
      if (r == 1) {
        $("#items_cart").load("../../controller/cart.item.php");
        $("#totalCart").load("../../controller/cart.total.php");
        Swal.fire({
          icon: "success",
          title: "¡Producto removido!",
          showConfirmButton: false,
          timer: 1500,
        });
      } else {
        Swal.fire(
          "Error del Servidor",
          "Sí persiste comuniquese con el Desarrollador ",
          "error"
        );
      }
    },
  });
}
function addWishlist(data) {
    $.ajax({
      type: "post",
      url: "../../controller/wishlist.add.php",
      data: data,
      success: function (r) {
        if (r == 1) {
          // $("#dataCart_number").load("controller/cart.count.php");
          // $("#items_cart").load("controller/cart.item.php");
          // $("#totalCart").load("controller/cart.total.php");
          Swal.fire({
            icon: "success",
            title: "¡Añadido al la lsita de deseos!",
            showConfirmButton: false,
            timer: 1500,
          });
        } else if (r == 2) {
          Swal.fire({
            icon: "info",
            title: "El producto ya está en la lista",
            showConfirmButton: false,
            timer: 1500,
          });
        }
      },
    });
  }

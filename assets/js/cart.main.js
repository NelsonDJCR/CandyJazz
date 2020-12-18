$("#totalCart_").load("../../controller/cart.total.php");
$("#items_cart_").load("../../controller/cart.item.show.php");

var id_user = $("#id_user").val();

$(document).ready(function () {
  $(document).ready(function () {
    $(".in").blur(function () {
      var size = $(this).val();
      var product = $(this).attr("product");
      var loadSize =
        "size=" + size + "&id_user=" + id_user + "&id_product=" + product;
      $.ajax({
        type: "post",
        url: "../../controller/size.load.php",
        data: loadSize,
        success: function (r) {
          if (r == 1) {
            Swal.fire({
              icon: "success",
              title: "¡Perfecto!",
              text: 'La talla ha sido actualizada: "' + size + '"',
            });
          } else if (r == 2) {
            Swal.fire({
              icon: "error",
              title: "Talla no dispobible",
              text: 'Lo sentimos esta talla no está disponible',
            });
          } 
          else {
            Swal.fire({
              icon: "error",
              title: "Ingrese una talla",
              text: 'Debe especificar la talla del producto',
            });
          }
        },
      });
    });
  });
});

function removeCart(data) {
  $.ajax({
    type: "post",
    url: "../../controller/cart.item.remove.php",
    data: data,
    success: function (r) {
      if (r == 1) {
        $("#totalCart_").load("../../controller/cart.total.php");
        $("#items_cart_").load("../../controller/cart.item.show.php");
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
  return false;
}

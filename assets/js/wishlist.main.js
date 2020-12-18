function addCart(data) {
  $.ajax({
    type: "post",
    url: "../../controller/cart.add.php",
    data: data,
    success: function (r) {
      if (r == 1) {
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
function removeWishlist(data) {
  $.ajax({
    type: "post",
    url: "../../controller/wishlist.remove.php",
    data: data,
    success: function (r) {
      if (r == 1) {
        $("#myTable").load("table.wishlist.php");
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

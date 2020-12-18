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

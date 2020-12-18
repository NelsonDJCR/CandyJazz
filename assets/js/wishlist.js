$(document).ready(function () {
  $("#myTable").load("table.wishlist.php");
});
function addWishlistIndex(data) {
  $.ajax({
    type: "post",
    url: "controller/wishlist.add.php",
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
// function addWishlist(data) {
//   $.ajax({
//     type: "post",
//     url: "../controller/wishlist.add.php",
//     data: data,
//     success: function (r) {
//       if (r == 1) {
//         // $("#dataCart_number").load("controller/cart.count.php");
//         // $("#items_cart").load("controller/cart.item.php");
//         // $("#totalCart").load("controller/cart.total.php");
//         Swal.fire({
//           icon: "success",
//           title: "¡Añadido al la lsita de deseos!",
//           showConfirmButton: false,
//           timer: 1500,
//         });
//       } else if (r == 2) {
//         Swal.fire({
//           icon: "info",
//           title: "El producto ya está en la lista",
//           showConfirmButton: false,
//           timer: 1500,
//         });
//       }
//     },
//   });
// }


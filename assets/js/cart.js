$("#dataCart_number").load("controller/cart.count.php");
$("#items_cart").load("controller/cart.item.php");
$("#totalCart").load("controller/cart.total.php");
function addCart(data) {
  $.ajax({
    type: "post",
    url: "controller/cart.add.php",
    data: data,
    success: function (r) {
      if(r==1){
        $("#dataCart_number").load("controller/cart.count.php");
        $("#items_cart").load("controller/cart.item.php");
        $("#totalCart").load("controller/cart.total.php");
        Swal.fire({
            icon: 'success',
            title: '¡Añadido al carrito!',
            showConfirmButton: false,
            timer: 1500
          })
      }else if(r==2){
        Swal.fire({
            icon: 'info',
            title: 'El producto ya está en el carrito',
            showConfirmButton: false,
            timer: 1500
          })
      }
    },
  });
}
function removeCart(data) {
  $.ajax({
    type: "post",
    url:  "controller/cart.item.remove.php",
    data: data,
    success:function (r) {
      if (r==1) {
        $("#items_cart").load("controller/cart.item.php");
        $("#totalCart").load("controller/cart.total.php");
        Swal.fire({
          icon: 'success',
          title: '¡Producto removido!',
          showConfirmButton: false,
          timer: 1500
        })
      }else{
        Swal.fire("Error del Servidor", "Sí persiste comuniquese con el Desarrollador ", "error");
      }
    }
  });
}
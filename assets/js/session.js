$(document).ready(function () {
  $(".imgTop").click(function () {
    
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
      '¿Ta tienes una cuenta &nbsp;<a href="assets/html/login-register.php"> Inicia Sesión</a>?',
    cancelButtonText: "Cancelar",
    confirmButtonText: "Registrarme",
  }).then((result) => {
    if (result.value) {
      window.location.href = "assets/html/login-register.php";
    }
  });
  return false;
}

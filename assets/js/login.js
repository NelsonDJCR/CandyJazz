$(document).ready(function () {
  $("#btn_login").click(function () {
    var email = $("#login_email").val();
    var secret = $("#login_secret").val();
    if (email == "" || secret == "") {
      Swal.fire("Campos vacios", "Completa todos los campos", "error");
      return false;
    } else {
      var data = $("#login_form").serialize();
      $.ajax({
        type: "POST",
        url: "../../controller/login.php",
        data: data,
        success: function (r) {
          if (r == 1) {
            $(location).attr('href','account.php');
          }else if (r == 2) {
            $(location).attr('href','../../dashboard/index.php');
          }
           else {
            Swal.fire("Datos incorrectos", "Usuario o contraseña incorrecta ", "error");
          }
        },
      });
      return false;
    }
  });
});

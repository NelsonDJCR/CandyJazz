// ../../controller/delete.user.php
function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test($email);
}
$(document).ready(function () {
  $("#btn_update").click(function () {
    var name = $("#name").val();
    var phone = $("#phone").val();
    var city = $("#city").val();
    var address = $("#address").val();
    var email = $("#email").val();
    var formData = $("#update_data").serialize();

    if (
      name == "" ||
      phone == "" ||
      email == "" ||
      address == "" ||
      email == ""
    ) {
      Swal.fire("Campos vacios", "Completa todos los campos", "error");
      return false;
    } else if (name.length > 30) {
      Swal.fire("Error", "El nombre es muy extenso", "error");
      return false;
    } else if (name.length <= 3) {
      Swal.fire("Error", "El nombre es muy corto", "error");
      return false;
    } else if (isNaN(phone)) {
      Swal.fire("Error", "No ha ingresado un número telefónico", "error");
      return false;
    } else if (phone.length <= 6) {
      Swal.fire("Error", "Debe ingresar un número fijo o celular", "error");
      return false;
    } else if (phone.length >= 11) {
      Swal.fire("Error", "Debe ingresar un número fijo o celular", "error");
      return false;
    } else if (city.length > 30) {
      Swal.fire("Error", "El nombre de la ciudad es muy extenso", "error");
      return false;
    } else if (city.length <= 4) {
      Swal.fire("Error", "El nombre de la ciudad es muy corto", "error");
      return false;
    } else if (!validateEmail(email)) {
      Swal.fire("Error", "Correo no valido", "error");
      return false;
    } else if (email.length > 80) {
      Swal.fire("Error", "El correo es muyu extenso", "error");
      return false;
    } else if (email.length <= 13) {
      Swal.fire("Error", "El correo es muy corto", "error");
      return false;
    } else {
      Swal.fire({
        title: "¿Actualizar datos?",
        text: "Desea actualizar los datos",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, actualizar",
        cancelButtonText: "Cancelar",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            type: "post",
            url: "../../controller/update.user.php",
            data: formData,
            success: function (r) {
              if (r == 1) {
                Swal.fire({
                  icon: "success",
                  title: "Perfecto",
                  text: "Los datos han sido actualizados",
                });
              } else {
                Swal.fire({
                  icon: "error",
                  title: "Error",
                  text: "Fallo en el servidor",
                });
              }
            },
          });
          return false;
        }
      });
      return false;
    }
  });

  $("#btnUpdateSecret").click(function () {
    var dataSecret = $("#update_password").serialize();

    var last = $("#last").val();
    var newS = $("#new").val();
    var confirm = $("#confirm").val();
    if (last == "" || newS == "" || confirm == "") {
      Swal.fire("Error", "Hay campos vacios", "error");
      return false;
    } else if (newS.length > 30) {
      Swal.fire("Error", "La contraseña es muy extensa", "error");
      return false;
    } else if (newS.length <= 9) {
      Swal.fire("Error", "la contraseña es muy corta", "error");
      return false;
    } else if (newS != confirm) {
      Swal.fire("Error", "Las contraseñas no coinciden", "error");
      return false;
    } else {
      Swal.fire({
        title: "¿Desea Actualizar la contraseña?",
        text: "Esta acción no tiene se puede deshacer",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Actualizar",
        cancelButtonText: "Cancelar",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            type: "post",
            url: "../../controller/update.user.secret.php",
            data: dataSecret,
            success: function (r) {
              if (r == 1) {
                Swal.fire({
                  icon: "success",
                  title: "¡Perfecto!",
                  text: "La contraseña ha sido actualizada",
                });
                $("#last").val("");
                $("#new").val("");
                $("#confirm").val("");
              } else {
                Swal.fire({
                  icon: "error",
                  title: "Error",
                  text: "Fallo en el servidor",
                });
              }
            },
          });
          return false;
        }
      });
      return false;
    }
  });
});

function validateEmail($email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test( $email );
}

$(document).ready(function () {
  $("#btn_register").click(function () {
    
    var name = $("#register_name").val();
    var phone = $("#register_phone").val();
    var city = $("#register_city").val();
    var email = $("#register_email").val();
    var secret = $("#register_secret").val();
    var secret2 = $("#register_secretComfirm").val();


    if (name == "" || phone == "" || email == "" || city == "" || secret == "" || secret2 == "") 
    {

      Swal.fire("Campos vacios", "Completa todos los campos", "error");
      return false;

    } 

    else if (name.length > 30) 
    {

        Swal.fire("Error", "El nombre es muy extenso", "error");   
        return false;

    }
    else if (name.length <= 2) 
    {

        Swal.fire("Error", "El nombre es muy corto", "error");   
        return false;

    }
    else if (isNaN(phone)) 
    {
        
        Swal.fire("Error", "No ha ingresado un número telefónico", "error");   
        return false;

    }
    else if (phone.length <= 6) {
      Swal.fire("Error", "Debe ingresar un número fijo o celular", "error");
      return false;
    } 
    else if (phone.length >= 11) {
      Swal.fire("Error", "Debe ingresar un número fijo o celular", "error");
      return false;
    } 

    else if (city.length > 30) 
    {

        Swal.fire("Error", "El nombre de la ciudad es muy extenso", "error");   
        return false;

    }
    else if (city.length <= 4) 
    {

        Swal.fire("Error", "El nombre de la ciudad es muy corto", "error");   
        return false;

    }



    else if (!validateEmail(email)) 
    {

        Swal.fire("Error", "Ingrese un correo valido", "error");
        return false;

    }
    else if (email.length > 80) 
    {

        Swal.fire("Error", "El correo es muyu extenso", "error");   
        return false;

    }
    else if (email.length <= 13) 
    {

        Swal.fire("Error", "El correo es muy corto", "error");   
        return false;

    }
    else if (secret.length > 30) 
    {

        Swal.fire("Error", "La contraseña es muy extensa", "error");   
        return false;

    }
    else if (secret.length <= 9) 
    {

        Swal.fire("Error", "la contraseña es muy corta", "error");   
        return false;

    }
    else if (secret != secret2) 
    {

        Swal.fire("Error", "Las contraseñas no coinciden", "error");   
        return false;
        
    }
    else {

      var data = $("#form_register").serialize();
      $.ajax({
        type: "POST",
        url: "../../controller/register.php",
        data: data,
        success: function (r) {
         

          if (r == 1) {
            $("#register_name").val("");
            $("#register_phone").val("");
            $("#register_email").val("");
            $("#register_secret").val("");
            $("#register_city").val("");
            $("#register_secretComfirm").val("");
            Swal.fire(
              "¡Registro exitoso!",
              "Inicia sesión para continuar",
              "success"
            );
          }else if (r == 2) {
            Swal.fire(
              "¡Error!",
              "El usuario y/o teléfono están ya registrados",
              "error"
            );
          } 
          else {
            alert("Error " + r);
          }


        },
      });
      return false;
    }
  });
});

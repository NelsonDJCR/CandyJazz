$("#totalCart").load("../../controller/cart.total.php");

$("#btn_checkout").click(function () {
  var name = $("#name_user").val();
  var phone = $("#phone_user").val();
  var address = $("#address").val();
  var city = $("#city_user").val();
  var id = $("#id_user").val();
  var form = $("#method_form").serialize();
  var products = $("#products").val();
  var sizes = $("#sizes").val();
  var products = products.slice(0, -2);
  var sizes = sizes.slice(0, -2);

  var data ="id_user=" +id +"&name=" +name +"&phone=" +phone +"&city=" +city +"&address=" +address +"&products=" +products+"&sizes=" +sizes +"&" +form;
 
  if (address == "") {
    Swal.fire(
      "Datos incompletos!",
      "No ha especificado una dirección",
      "question"
    );
    return false;
  } else if (address.length < 6) {
    Swal.fire(
      "Dirección muy corta!",
      "La dirección debe tener máximo 6 carácteres",
      "question"
    );
    return false;
  }
  // PREGUNTAR TOP

  Swal.fire({
    title: "¿Procesar Pago?",
    text: "Generaremos el pago con la información dada",
    icon: "question",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, continuar",
    cancelButtonText: "No, cancelar ",
  }).then((result) => {
    if (result.value) {
      //   TRUE TOP
      $.ajax({
        type: "post",
        url: "../../controller/method.valide.php",
        data: data,
        success: function (r) {  
          //   ========================= BANK > =========================
          // alert(r);
          // return false;
          if (r == 1) {
            let timerInterval;
            Swal.fire({
              title: "Procesando Pago",
              icon: "success",
              html: "Redireccionando en  <b></b> milisegundos.",
              timer: 5000,
              timerProgressBar: true,
              onBeforeOpen: () => {
                Swal.showLoading();
                timerInterval = setInterval(() => {
                  const content = Swal.getContent();
                  if (content) {
                    const b = content.querySelector("b");
                    if (b) {
                      b.textContent = Swal.getTimerLeft();
                    }
                  }
                }, 100);
              },
              onClose: () => {
                clearInterval(timerInterval);
              },
            }).then((result) => {
              if (result.dismiss === Swal.DismissReason.timer) {
                window.location = "pay.php?id="+r;
              }
            });
          }
          //   ========================= BANK < =========================

          //   ========================= CASH > =========================
          else if (r == 2) {
            let timerInterval;
            Swal.fire({
              title: "Procesando Pago",
              icon: "success",
              html: "Redireccionando en  <b></b> milisegundos.",
              timer: 5000,
              timerProgressBar: true,
              onBeforeOpen: () => {
                Swal.showLoading();
                timerInterval = setInterval(() => {
                  const content = Swal.getContent();
                  if (content) {
                    const b = content.querySelector("b");
                    if (b) {
                      b.textContent = Swal.getTimerLeft();
                    }
                  }
                }, 100);
              },
              onClose: () => {
                clearInterval(timerInterval);
              },
            }).then((result) => {
              if (result.dismiss === Swal.DismissReason.timer) {
                window.location = "pay.php?id="+r;
              }
            });
          }
          //   ========================= CASH < =========================

          //   ========================= NEQUI > =========================
          else if (r == 3) {
            let timerInterval;
            Swal.fire({
              title: "Procesando Pago",
              icon: "success",
              html: "Redireccionando en  <b></b> milisegundos.",
              timer: 5000,
              timerProgressBar: true,
              onBeforeOpen: () => {
                Swal.showLoading();
                timerInterval = setInterval(() => {
                  const content = Swal.getContent();
                  if (content) {
                    const b = content.querySelector("b");
                    if (b) {
                      b.textContent = Swal.getTimerLeft();
                    }
                  }
                }, 100);
              },
              onClose: () => {
                clearInterval(timerInterval);
              },
            }).then((result) => {
              if (result.dismiss === Swal.DismissReason.timer) {
                window.location = "pay.php?id="+r;
              }
            });
          }
          //   ========================= NEQUI < =========================

          //   ======================== WHATSAPP > =======================
          else if (r == 4) {
            let timerInterval;
            Swal.fire({
              title: "Procesando Pago",
              icon: "success",
              html: "Redireccionando en  <b></b> milisegundos.",
              timer: 5000,
              timerProgressBar: true,
              onBeforeOpen: () => {
                Swal.showLoading();
                timerInterval = setInterval(() => {
                  const content = Swal.getContent();
                  if (content) {
                    const b = content.querySelector("b");
                    if (b) {
                      b.textContent = Swal.getTimerLeft();
                    }
                  }
                }, 100);
              },
              onClose: () => {
                clearInterval(timerInterval);
              },
            }).then((result) => {
              if (result.dismiss === Swal.DismissReason.timer) {
                window.location = "pay.php?id="+r;
              }
            });
          }
          //   ======================== WHATSAPP < =======================
          else if (r == 9) {
            Swal.fire(
              "Datos incompletos!",
              "No ha seleccionado un método de pago",
              "question"
            );
          } 
          else if (r == 5) {
            Swal.fire({
              icon: 'error',
              title: 'No se puede completar',
              text: 'Anteriormente ya ha realizado un pedido',
              footer: 'Revisa tu panel de &nbsp;  <a href="account.php"> Mi Cuenta </a> &nbsp;  y mira tus pedidos pendientes'
            })
          }
          
          
          else {
            Swal.fire(
              "Error",
              "Ha ocurrido un error en el servidor code: "+r,
              "error"
            );
          }
        },
      });
      return false;
      //   TRUE END
    } else {
      Swal.fire("Cancelado!", "La operación ha sido cancelada", "error");
    }
  });
  return false;
  //   PREGUNTAR END
});

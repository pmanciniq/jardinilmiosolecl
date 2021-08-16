/* global $ */
$(document).ready(function () {
  $("#btnenviar").click(function (event) {
    event.preventDefault();
    $.ajax({
      dataType: "JSON",
      url: "enviar.php",
      type: "POST",
      data: $("#formContacto").serialize(),
      beforeSend: function (xhr) {
        $("#btnenviar").html("Enviando...");
      },
      success: function (response) {
        if (response) {
          console.log(response);
          if (response["isSuccess"]) {
            //$("#msg").html(
            //'<div class="alert alert-success">' + response["msg"] + "</div>"
            //);
            swal({
              title: "Mensaje Enviado",
              text: "Estaremos encantadas de conocerte ¡Ven a visitarnos!",
              icon: "success",
              button: "¡Yupii!",
            });
            $("input, textarea").val(function () {
              return this.defaultValue;
            });
          } else {
            swal({
              title: "Ha ocurrido un error",
              text:
                "Por favor, intenta nuevamente o escríbenos a contacto@jardinilmiosole.cl ¡Recuerda que todos los campos son obligatorios!",
              icon: "error",
              button: "¡Buuhh!",
            });
            //$("#msg").html(
            //'<div class="alert alert-danger">' + response["msg"] + "</div>"
            //);
          }
        }
      },
      error: function () {
        swal({
          title: "Ha ocurrido un error",
          text:
            "Por favor, intenta nuevamente o escríbenos a contacto@jardinilmiosole.cl",
          icon: "error",
          button: "¡Buuhh!",
        });
        //$("#msg").html(
        //'<div class="alert alert-danger">Ha ocurrido un error. Intenta nuevamente.</div>'
        //);
      },
      complete: function () {
        $("#btnenviar").html("Enviar");
      },
    });
  });
});

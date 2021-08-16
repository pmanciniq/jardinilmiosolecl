$(document).ready(function(){
  if (document.location.pathname == "/") {
    swal({
      title: "¡Atención!",
      text: "Descarga el Plan de Funcionamiento para este año 2021 y el Instructivo para el personal para que prevengamos juntos la pandemia de Covid-19 ",
      icon: "info",
      buttons: {
        cancel: "En otro momento",
        desc_plan: "Plan",
        desc_instructivo: "Instructivo"
      },
      }).then((value) => {
        switch (value) {
          case "desc_plan":
            window.open('desc/pfcv192021.pdf', '_blank');
            break;
          case "desc_instructivo":
            window.open('desc/indpcv192021.pdf', '_blank');
            break;
          default:
            swal("¡Bienvenido/a a Sala Cuna & Jardin Infantil Il Mio Sole!", "Recuerda descargar los documentos en otro momento", "success");
        }
      });
  }

});

function descargar_proyecto() {

  window.open('../desc/PEI_IL_MIO_SOLE_2021.pdf', '_blank');

}

$("a.prevent").click(function (e) {
  e.preventDefault();
});
<?php $page="proyecto_educativo.php"; ?>
<!DOCTYPE html>
<html lang="en" lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="El proyecto educativo de nuestra Sala Cuna y Jardín Infantil es inclusivo e integrador, y está destinado a niñas y niños entre los 6 meses y los 5 años de edad &#128102 &#128103" />
  <meta name="keywords" content="sala cuna proyecto educativo, sala cuna metro ñuble, proyecto educativo sala cuna, sala cuna santiago centro, sala cuna vicuña mackenna, il mio sole" />
  <link rel="icon" href="../favicon.ico" />
  <link rel="stylesheet" href="../fonts/icons/social/socialfont.css" />
  <link href="https://fonts.googleapis.com/css?family=Monoton|Pacifico|Roboto|Dosis:800" rel="stylesheet" />
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/estilos.css" />
  <title>Il Mio Sole | Proyecto Educativo &#128072</title>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-190071826-1">
  </script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-190071826-1');
  </script>
</head>

<body>
  <!--NAV-->
  <?php include('../include/nav.php') ?>

  <section class="container-fluid bg-info">
    <div class="row justify-content-center">
      <div class="col-12 text-center mt-5">
        <h1 class="dosis text-fucsia">
          Descarga el proyecto educativo
          <a class="aqui3 prevent" href="" onclick="descargar_proyecto();">aqui</a>
        </h1>
      </div>
    </div>
  </section>

  <section class="container-fluid bg-info">
    <div class="row justify-content-center">
      <div class="col-12 text-center my-5">
        <h1 class="text-fucsia pacifico">Niveles</h1>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
        <h3 class="text-fucsia dosis">Elige un nivel:</h3>
      </div>
    </div>
    <div class="row justify-content-center text-center">
      <div class="col-xs-12 col-sm-12 col-md-5 col-lg-2 custom-card my-5 mx-2">
        <a class="hover-none" href="#scmenor">
          <div class="text-center hover-effect3">
            <p class="roboto text-fucsia my-5" style="font-size: 34px">
              6 Meses - 1 año y 2 meses
            </p>
          </div>
        </a>
        <div class="row justify-content-center">
          <div class="col-12">
            <img class="img-fluid" src="../image/scmenor.png" alt="Medio_menor" />
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 mt-3 text-center">
            <h3 class="text-fucsia dosis">SALA CUNA MENOR</h3>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-5 col-lg-2 custom-card my-5 mx-2">
        <a class="hover-none" href="#scmayor">
          <div class="text-center hover-effect3">
            <p class="roboto text-fucsia my-5" style="font-size: 34px">
              1 año y 2 meses - 2 años
            </p>
          </div>
        </a>
        <div class="row justify-content-center">
          <div class="col-12">
            <img class="img-fluid" src="../image/scmayor.png" alt="Medio_menor" />
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 mt-3 text-center">
            <h3 class="text-fucsia dosis">SALA CUNA MAYOR</h3>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-5 col-lg-2 custom-card my-5 mx-2">
        <a class="hover-none" href="#mmenor">
          <div class="text-center hover-effect3">
            <p class="roboto text-fucsia" style="font-size: 34px; margin-top: 80px">
              2 años - 3 años
            </p>
          </div>
        </a>
        <div class="row justify-content-center">
          <div class="col-12">
            <img class="img-fluid" src="../image/m_menor.png" alt="Medio_menor" />
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 mt-3 text-center">
            <h3 class="text-fucsia dosis">MEDIO MENOR</h3>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-5 col-lg-2 custom-card my-5 mx-2">
        <a class="hover-none" href="#heterogeneo">
          <div class="text-center hover-effect3">
            <p class="roboto text-fucsia" style="font-size: 34px; margin-top: 80px">
              3 años - 5 años
            </p>
          </div>
        </a>
        <div class="row justify-content-center">
          <div class="col-12">
            <img class="img-fluid" src="../image/heterogeneo.png" alt="Medio_menor" />
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 mt-3 text-center">
            <h3 class="text-fucsia dosis">HETEROGÉNEO</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--descripcion niveles-->
  <section id="scmenor" class="container-fluid bg-info bg-logo-celeste">
    <div class="row justify-content-center">
      <div class="col-12 text-center mb-2">
        <h2 class="pacifico text-fucsia">Sala Cuna Menor</h2>
      </div>
      <div class="row text-center">
        <div class="col-12 mb-3">
          <h4 class="roboto">
            Edad de referencia: <br />6 meses a 1 año y 2 meses aprox.
          </h4>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 text-center">
          <img class="img-fluid" src="../image/galeria/12.jpg" alt="" />
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 text-justify">
          <p class="roboto text-azulmarino lead mx-2">
            En este nivel el rango de edad de las niñas y niños es de los 6
            meses hasta 1 año y medio. Su cuidado y educación es guiado por 2
            técnicas en educación parvularia y 1 educadora encargada de los
            niveles de Saña Cuna.
          </p>
          <p class="roboto text-azulmarino lead mx-2">
            Las tías se preocupan de desarrollar diversas actividades que
            permitan al niño y niña explorar el mundo. En esta edad comienzan
            a aparecer las primeras funciones cognitivas y desarrollan su
            inteligencia práctica con juegos que les enseñan a resolver
            problemas de relaciones entre objetos y acciones, elaborando así
            sus primeras representaciones del entorno cercano.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section id="scmayor" class="container-fluid bg-danger bg-logo-rojo zigzag-3">
    <div class="row justify-content-center">
      <div class="col-12 text-center mt-5 mb-2">
        <h2 class="pacifico custom-muted">Sala Cuna Mayor</h2>
      </div>
      <div class="row text-center">
        <div class="col-12 mb-3">
          <h4 class="roboto">
            Edad de referencia: <br />1 añor y 2 meses a 2 años aprox.
          </h4>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 text-center">
          <img class="img-fluid" src="../image/galeria/11.jpg" alt="" />
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 text-justify">
          <p class="roboto custom-muted lead mx-2">
            Este nivel se compone por niñas y niños de 1 a 2 años de edad. Su
            educación y cuidado está en manos de 2 técnicas en educación
            parvularia y 1 educadora encargada de los niveles de Sala Cuna.
          </p>
          <p class="roboto custom-muted lead mx-2">
            Las tías se encargan de dar la bienvenida y comenzar el día con
            las niñas y niños, además de desarrollar actividades escenciales
            de su día a día: jugar en el patio, muda, almuerzo, siesta, y los
            aprendizajes centrales de su edad.
          </p>
          <p class="roboto custom-muted lead mx-2"></p>
        </div>
      </div>
    </div>
  </section>

  <section id="mmenor" class="container-fluid bg-limon-pastel bg-logo-verde zigzag">
    <div class="row justify-content-center">
      <div class="col-12 text-center mt-5 mb-2">
        <h2 class="pacifico text-morado">Medio Menor</h2>
      </div>
      <div class="row text-center">
        <div class="col-12 mb-3">
          <h4 class="roboto">
            Edad de referencia: <br />2 años a 3 años aprox.
          </h4>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 text-center">
          <img class="img-fluid" src="../image/galeria/8.jpg" alt="" />
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 text-justify">
          <p class="roboto text-morado lead mx-2">
            Este nivel se compone por niñas y niños de 2 a 3 años de edad. Su
            educación y cuidado está en manos de 2 técnicas en educación
            parvularia y 1 educadora encargada de los niveles de Medio Menor y
            Heterogéneo.
          </p>
          <p class="roboto text-morado lead mx-2">
            La principal característica de este grupo es su gran inquietud por
            vivir nuevas experiencias y explorar el mundo. Les gusta jugar
            explorando, tocando y descubriendo lo que les rodea. Es por esto
            que las educadoras buscan estimular su curiosidad con juegos
            didácticos, enseñándoles el mundo y lo que lo compone, y
            resolviendo sus dudas fundamentales.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="heterogeneo" class="container-fluid bg-durazno bg-logo-naranjo zigzag-2">
    <div class="row justify-content-center">
      <div class="col-12 text-center mt-5 mb-2">
        <h2 class="pacifico texto-azul">Heterogéneo</h2>
      </div>
      <div class="row text-center">
        <div class="col-12 mb-3">
          <h4 class="roboto">
            Edad de referencia: <br />3 años a 5 años aprox.
          </h4>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 text-center">
          <img class="img-fluid" src="../image/galeria/10.jpg" alt="" />
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 text-justify">
          <p class="roboto texto-azul lead mx-2">
            Este nivel se compone por niñas y niños de 3 a 5 años de edad. Su
            educación y cuidado está en manos de 2 técnicas en educación
            parvularia y 1 educadora encargada de los niveles de Medio Menor y
            Heterogéneo.
          </p>
          <p class="roboto texto-azul lead mx-2">
            A esta edad las niñas y niños se empoderan día a día de su
            autonomía e independencia. Parte de su crecimiento en esta etapa
            es desarrollar el sentido de la responsabilidad y a ser
            conscientes de su capacidad de aprender.
          </p>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 text-center">
        <h1 class="dorso texto-azul my-5">
          Consulta por disponibilidad
          <a class="aqui3" href="../index.php#contacto">aquí</a>
        </h1>
      </div>
    </div>
  </section>

  <?php include('../include/footer.php') ?>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="../js/scripts.js?v=<?php echo time(); ?>"></script>
</body>

</html>
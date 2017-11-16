<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link href="css/dashboard.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
      <title>Hologa - DashBoard</title>
    </head>
    <body class="grey lighten-4">


<!-- Estructura del Nav -->
            <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a></div>
            <ul id="nav-mobile" class="side-nav fixed">
              <li class="logo"><a id="logo-container" href="#" class="brand-logo">
            <center><object id="front-page-logo" type="image/svg+xml" data="assets/img/hologa.png">Tu Navegador No Soporta SVG</object></a></li></center>
              </li>
              <li class="bold"><a href="dashboard.php" class="waves-effect waves-teal"><i class="material-icons">dashboard</i>Dashboard</a></li>
              <li class="bold"><a href="#" class="waves-effect waves-teal"><i class="material-icons">person</i>Admin</a></li>
              <li class="bold"><a href="#" class="waves-effect waves-teal"><i class="material-icons">cloud_upload</i>Upload</a></li>
              <li class="bold"><a href="graficas.php" class="waves-effect waves-teal"><i class="material-icons">graphic_eq</i>Graficos</a></li>
              <li class="bold"><a href="promesas.php" class="waves-effect waves-teal"><i class="material-icons">assignment</i>Promesas</a></li>
              <li class="bold"><a href="#" class="waves-effect waves-teal"><i class="material-icons">dialer_sip</i>Dialer SIP</a></li>
            </ul>
<!-- Fin de la Estructura del Nav -->

<main>      <div class="section no-pad-bot" id="index-banner">
        <div class="container">
          <h1 class="header right-on-small-only">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Actualizacion</h1>
          <div class='row center'>
            <h4 class ="header col s12 light center">Todas las actualizaciones son cada 3 horas</h4>
          </div>
          <div class="row center">
            <a id="download-button" class="btn-large waves-effect waves-orange darken-1">Iniciar</a>
          </div>
          <div class="row center"><a class="text text-orange darken-1">beta release v0.2</a></div>
          <br>



      <div class="container">
        <div class="section">

          <!--   Promo Section   -->
          <div class="row">
            <div class="col s12 m4">
              <div class="center promo">
                <i class="material-icons">flash_on</i>
                <p class="promo-caption">Rapidez de datos de informacion</p>
                <p class="light center">La idea es que el sistema de informacion sea eficaz, legible y rapido, Para el mejor tiempo posible de cualquier seguimiento.</p>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="center promo">
                <i class="material-icons">group</i>
                <p class="promo-caption">Mejor experiencia para el usuario</p>
                <p class="light center">Este es el sistema para el mejoramiento de grupo de Gerencia.</p>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="center promo">
                <i class="material-icons">settings</i>
                <p class="promo-caption">Facil para espacio de trabajo</p>
                <p class="light center">Este esta hecha para cada detalle y documentacion especifica para que el usuario pueda ver la operacion de cada seguimineto.</p>
              </div>
            </div>
          </div>



      <div class="footer-copyright">
        <div class="container center">
        © 2017 Hologa, All rights reserved.
        <a class="grey-text text-lighten-4 right" href="#">MIT License</a>
        </div>
      </div>
    </footer>

      <!--Import jQuery before materialize.js-->



  </body>
  </html>


  <script>
    $(".button-collapse").sideNav();
  </script>

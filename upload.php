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
      <link href="css/index.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
      <title>Hologa - DashBoard</title>
    </head>
    <body class="grey lighten-4">


<!-- Estructura del Nav -->
      <nav class="top-nav transparent"></nav>
            <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"></div>
            <ul id="nav-mobile" class="side-nav fixed">
              <li class="logo"><a id="logo-container" href="#" class="brand-logo">
            <center><object id="front-page-logo" type="image/svg+xml" data="assets/img/hologa.png">Tu Navegador No Soporta SVG</object></a></li></center>
              </li>
              <li class="bold"><a href="#" class="waves-effect waves-teal"><i class="material-icons">dashboard</i>Dashboard</a></li>
              <li class="bold"><a href="#" class="waves-effect waves-teal"><i class="material-icons">person</i>Admin</a></li>
              <li class="bold"><a href="#" class="waves-effect waves-teal"><i class="material-icons">cloud_upload</i>Upload</a></li>
              <li class="bold"><a href="#" class="waves-effect waves-teal"><i class="material-icons">graphic_eq</i>Graficos</a></li>
              <li class="bold"><a href="#" class="waves-effect waves-teal"><i class="material-icons">assignment</i>Promesas</a></li>
              <li class="bold"><a href="#" class="waves-effect waves-teal"><i class="material-icons">dialer_sip</i>Dialer SIP</a></li>
          </ul>

<!-- Fin de la Estructura del Nav -->

  <!--Tarjetas en cartas-->
  <div id="demo-ribbon">
     <div class="container">
         <div class="row">
             <div class="titulo">
                 <h3 class="white-text">CURSO DE CSS3 BASICO</h3>
                 <h5 class="white-text">Curso Online</h5>
                 <a  href="curso/css_basico" class="waves-effect waves-blue btn white-text deep-orange">Comenzar Curso</a>
                     <div id="imagen">
                         <img class="responsive-img" src="assets/img/ic_css.png">
                     </div>
             </div>
         </div>
     </div>
 </div>






  </body>
  </html>


  <script>
    $(".button-collapse").sideNav();
  </script>

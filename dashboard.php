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
      <!--  Android 5 Chrome Color-->
      <meta name="theme-color" content="#f57c00">
      <title>Hologa - DashBoard</title>
    </head>
    <body class="grey lighten-4">


<!-- Estructura del Nav -->
            <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a></div>
            <ul id="nav-mobile" class="side-nav fixed">
              <li class="logo"><a href="#"  class="brand-logo">
            <center><object id="front-page-logo"  data="assets/img/hologa.png">Tu Navegador No Soporta SVG</object></a></li></center>

              <li class="bold"><a href="dashboard.php" class="waves-effect waves-teal"><i class="material-icons">dashboard</i>Dashboard<span class="new badge deep-blue" data-badge-caption="Ready"></span></a></li>
              <li class="bold"><a href="#" class="waves-effect waves-teal"><i class="material-icons">person</i>Admin<span class="new badge deep-orange" data-badge-caption="Proximamente"></span></a></li>
              <li class="bold"><a href="#" class="waves-effect waves-teal"><i class="material-icons">cloud_upload</i>Upload<span class="new badge deep-orange" data-badge-caption="Proximamente"></span></a></li>
              <li class="bold"><a href="graficas.php" class="waves-effect waves-teal"><i class="material-icons">graphic_eq</i>Graficos<span class="new badge deep-blue" data-badge-caption="Ready"></span></a></li>
              <li class="bold"><a href="promesas.php" class="waves-effect waves-teal"><i class="material-icons">assignment</i>Promesas<span class="new badge deep-blue" data-badge-caption="Ready"></span></a></li>
              <li class="bold"><a href="#" class="waves-effect waves-teal"><i class="material-icons">headset_mic</i>Productividad<span class="new badge deep-orange" data-badge-caption="Proximamente"></span></a></li>
              <li class="bold"><a href="#" class="waves-effect waves-teal"><i class="material-icons">dialer_sip</i>Dialer SIP<span class="new badge deep-orange" data-badge-caption="Proximamente"></span></a></li>
              <li class="bold"><a href="blaster.php" class="waves-effect waves-teal"><i class="material-icons">send</i>Blaster<span class="new badge deep-orange" data-badge-caption="Proximamente"></span></a></li>
            </ul>
<!-- Fin de la Estructura del Nav   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  -->


      <main><div class="section no-pad-bot" id="index-banner">
              <div class="container">
                <h1 class="header center-on-small-only">Actualizacion</h1>
                <div class='row center'>
                  <h4 class ="header col s12 light center">Todas las actualizaciones son cada 3 horas</h4>
                  <div class="row center"><a class="red-text text-lighten-4">beta release v0.3</a></div>
                </div><br>

              </div>
              <div class="github-commit">
                <div class="container">
                  <div class="commit">
                    Latest Commit on Github:
                    &nbsp;&nbsp;
                    <a href="" class="sha"></a>
                    &nbsp;&nbsp;
                    <span class="date"></span>
                    <a id="github-button" href="https://github.com/horacioloredogarcia/Hologa" class="btn-flat right grey-text text-lighten-5 waves-effect waves-light hide-on-small-only">Github</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="container">   <!--   Promo Section   -->
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
                      <p class="light center">Este esta hecha con cada detalle y documentacion especifica para que el usuario pueda ver la operacion de cada seguimiento.</p>
                    </div>
                  </div>
                </div>


                    <div class="footer-copyright">
                      <div class="container center">
                      © 2017 Hologa, All rights reserved.
                      <a class="grey-text text-lighten-4 right" href="#">MIT License</a>
                      </div>
                    </div>




    <!--    </div>
              <div class="divider"></div>
              <div class="section">
                <div class="row center">
                  <h3 class="light header">Showcase</h3>
                  <p class="col s12 m8 offset-m2 caption">Checkout what people are creating with Materialize. Get inspired by these beautiful sites and you can even submit your own website to be showcased here.</p>
                  <a href="http://materializecss.com/showcase.html" class="btn-large waves-effect waves-light">Explore our Showcase</a>
                </div>
              </div>  -->

          </main>




  </body>
  </html>


  <script>
    $(".button-collapse").sideNav();
  </script>

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
      <link href="css/promesas.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
      <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
    	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
      <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">

    	<script src="librerias/jquery-3.2.1.min.js"></script>
      <script src="js/funciones.js"></script>
    	<script src="librerias/bootstrap/js/bootstrap.js"></script>
    	<script src="librerias/alertifyjs/alertify.js"></script>
      <script src="librerias/select2/js/select2.js"></script>
      <title>Hologa - Promesas</title>
    </head>
    <body class="grey lighten-4">


      <!-- Inicio de Banner  -->
      <nav>
        <div class="nav-wrapper white">
          <a href="dashboard.php" class="brand-logo">&nbsp;<img src="assets/img/hologa.png"></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
           <li class="bold"><a href="dashboard.php"><i class="material-icons left grey-text">dashboard</i>Dashboard</a></li>
            <li><a href="#"><i class="material-icons left grey-text">person</i>Admin</a></li>
            <li><a href="#"><i class="material-icons left grey-text">cloud_upload</i>Upload</a></li>
            <li><a href="graficas.php"><i class="material-icons left grey-text">graphic_eq</i>Graficos</a></li>
            <li><a href="promesas.php"><i class="material-icons left grey-text">assignment</i>Promesas</a></li>
            <li><a href="#"><i class="material-icons left grey-text">speaker_notes</i>Dialer SIP</a></li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
           <img class="navbar_logo" src="assets/img/ic_fireblue.png">
           <li><a href="dashboard.php"><i class="material-icons left">dashboard</i>Dashboard</a></li>
            <li><a href="#"><i class="material-icons left">person</i>Admin</a></li>
            <li><a href="#"><i class="material-icons left grey-text">cloud_upload</i>Upload</a></li>
            <li><a href="graficas.php"><i class="material-icons left">graphic_eq</i>Graficos</a></li>
            <li><a href="promesas.php"><i class="material-icons left">assignment</i>Promesas</a></li>
            <li><a href="#"><i class="material-icons left">speaker_notes</i>Dialer SIP</a></li>
          </ul>
        </div>
      </nav>



       <div id="demo-ribbon">
          <div class="container">
              <div class="row">
                  <div class="titulo">
                      <h3 class="black-text">Promesas de Pago</h3>
                      <h5 class="black-text">Hora de Actualizacion</h5>
                      <a  href="#" class="waves-effect waves-blue btn white-text deep-orange">10:36:36 A.M</a>
                  </div>
              </div>
          </div>
      </div>


         <div class="container">
          <div class="row">
             <div class="col s12 m12 l4"><a href="./assets/promesas/tamiga/index.php">
                 <div class="card-panel">
                     <div class="center">
                        <img src="assets/img/tamiga.png">
                     </div>
                 </div>
               </a>
             </div>

              <div class="col s12 m12 l4"><a href="./assets/promesas/famsa/index.php">
                  <div class="card-panel">
                      <div class="center">
                         <img src="assets/img/famsa.png">
                      </div>
                  </div>
                </a>
              </div>


              <div class="col s12 m12 l4"><a href="./assets/promesas/coppel/index.php">
                  <div class="card-panel">
                      <div class="center">
                         <img src="assets/img/coppel.png">
                      </div>
                  </div>
                </a>
              </div>
          </div>
      </div>

        <!-- Segunda Celdas Card -->

      <div class="container">
       <div class="row">
          <div class="col s12 m12 l4"><a href="./assets/promesas/metro/index.php">
              <div class="card-panel">
                  <div class="center">
                     <img src="assets/img/metro.png">
                  </div>
              </div>
            </a>
          </div>

           <div class="col s12 m12 l4"><a href="#">
               <div class="card-panel">
                   <div class="center">
                      <h3>Proximamente</h3>
                   </div>
               </div>
             </a>
           </div>


           <div class="col s12 m12 l4"><a href="#">
               <div class="card-panel">
                   <div class="center">
                      <h3>Proximamente</h3>
                   </div>
               </div>
             </a>
           </div>
       </div>
   </div>


  </body>
  </html>


  <script>
    $(".button-collapse").sideNav();
  </script>

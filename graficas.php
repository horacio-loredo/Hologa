<?php
  session_start();

  unset($_SESSION['consulta']);

 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Hologa - Graficas</title>
  <!--Import Google Icon Font-->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png" />

	<script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>

<!-- librerias de Graficas  -->
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
</head>
<body>

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

  <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


  <script type="text/javascript">
  Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Recuperacion Mensual Sedi'
    },
    subtitle: {
        text: 'made by: hologa.com'
    },
    xAxis: {
        categories: [
            'Enero',
            'Febrero',
            'Marzo',
            'Abril',
            'Mayo',
            'Junio',
            'Julio',
            'Agosto',
            'Septiembre',
            'Octubre',
            'Noviembre',
            'Diciembre'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Carteras 2017'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} pesos</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'T.A',
        data: [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 216.4, 194.1, 95.6, 54.4]

    }, {
        name: 'Famsa',
        data: [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 91.2, 83.5, 106.6, 92.3]

    }, {
        name: 'Coppel',
        data: [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 52.4, 65.2, 59.3, 51.2]

    }, {
        name: 'MF.A',
        data: [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 47.6, 39.1, 46.8, 51.1]

        }, {
        name: 'Metro',
        data: [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 47.6, 39.1, 46.8, 51.1]

        }, {
        name: 'P.S',
        data: [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 47.6, 39.1, 46.8, 51.1]

  }, {
        name: 'Dimex',
        data: [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.6, 0.1, 0.8, 0.1]
    }]
  });
  </script>


</body>
</html>

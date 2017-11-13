<?php
  session_start();

  unset($_SESSION['consulta']);

 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Hologa - Promesas de Pago</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
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
        <li><a href="#"><i class="material-icons left grey-text">graphic_eq</i>Graficos</a></li>
        <li><a href="promesas.php"><i class="material-icons left grey-text">assignment</i>Promesas</a></li>
        <li><a href="#"><i class="material-icons left grey-text">speaker_notes</i>Dialer SIP</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
       <img class="navbar_logo" src="assets/img/ic_fireblue.png">
       <li><a href="dashboard.php"><i class="material-icons left">dashboard</i>Dashboard</a></li>
        <li><a href="cursos"><i class="material-icons left">person</i>Admin</a></li>
        <li><a href="#"><i class="material-icons left grey-text">cloud_upload</i>Upload</a></li>
        <li><a href="articulos"><i class="material-icons left">graphic_eq</i>Graficos</a></li>
        <li><a href="promesas.php"><i class="material-icons left">assignment</i>Promesas</a></li>
        <li><a href="#"><i class="material-icons left">speaker_notes</i>Dialer SIP</a></li>
      </ul>
    </div>
  </nav>


	<div class="container">
    <div id="buscador"></div>
		<div id="tabla"></div>
	</div>

	<!-- Modal para registros nuevos -->


<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega Nueva Promesa</h4>
      </div>
      <div class="modal-body">
        	<label>Nombre</label>
        	<input type="text" name="" id="nombre" class="form-control input-sm">
        	<label>Cuenta</label>
        	<input type="text" name="" id="cuenta" class="form-control input-sm">
        	<label>Monto</label>
        	<input type="text" name="" id="monto" class="form-control input-sm">
        	<label>Fecha Promesa</label>
        	<input type="text" name="" id="fecha_promesa" class="form-control input-sm">
          <label>Fecha Pago</label>
          <input type="text" name="" id="fecha_pago" class="form-control input-sm">
          <label>Bucket</label>
          <input type="text" name="" id="bucket" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
        Agregar
        </button>

      </div>
    </div>
  </div>
</div>

<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
      		<input type="text" hidden="" id="idpersona" name="">
        	<label>Nombre</label>
        	<input type="text" name="" id="nombreu" class="form-control input-sm">
        	<label>Cuenta</label>
        	<input type="text" name="" id="cuentau" class="form-control input-sm">
        	<label>Monto</label>
        	<input type="text" name="" id="montou" class="form-control input-sm">
        	<label>Fecha Promesa</label>
        	<input type="text" name="" id="fecha_promesau" class="form-control input-sm">
          <label>Fecha Pago</label>
          <input type="text" name="" id="fecha_pagou" class="form-control input-sm">
          <label>Bucket</label>
          <input type="text" name="" id="bucketu" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>

      </div>
    </div>
  </div>
</div>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla.php');
    $('#buscador').load('componentes/buscador.php');
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          nombre=$('#nombre').val();
          cuenta=$('#cuenta').val();
          monto=$('#monto').val();
          fecha_promesa=$('#fecha_promesa').val();
          fecha_pago=$('#fecha_pago').val();
          bucket=$('#bucket').val();
            agregardatos(nombre,cuenta,monto,fecha_promesa,fecha_pago,bucket);
        });



        $('#actualizadatos').click(function(){
          actualizaDatos();
        });

    });
</script>

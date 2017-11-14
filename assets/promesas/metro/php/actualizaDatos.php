<?php
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$n=$_POST['nombre'];
	$n=$_POST['cuenta'];
	$n=$_POST['monto'];
	$a=$_POST['fecha_promesa'];
	$e=$_POST['fecha_pago'];
	$t=$_POST['bucket'];

	$sql="UPDATE t_metro set nombre='$n',
								cuenta='$a',
								monto='$e',
								fecha_promesa='$t'
								fecha_pago='$h'
								bucket='$l'

				where id='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>

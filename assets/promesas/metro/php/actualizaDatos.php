<?php
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$n=$_POST['nombre'];
	$a=$_POST['cuenta'];
	$e=$_POST['monto'];
	$t=$_POST['fecha_promesa'];
	$h=$_POST['fecha_pago'];
	$l=$_POST['bucket'];

	$sql="UPDATE t_metro set nombre='$n',
								cuenta='$a',
								monto='$e',
								fecha_promesa='$t'
								fecha_pago='$h'
								bucket='$l'

				where id='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>

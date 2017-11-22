<?php

	require_once "conexion.php";
	$conexion=conexion();
	$n=$_POST['fecha'];
	$a=$_POST['nombre_base'];
	$e=$_POST['n_telefonos'];
	$h=$_POST['v_enviados'];
	$l=$_POST['t_enviados'];

	$sql="INSERT into b_coppel (fecha,nombre_base,n_telefonos,v_enviados,t_enviados)
								values ('$n','$a','$e','$h','$l')";
	echo $result=mysqli_query($conexion,$sql);

 ?>

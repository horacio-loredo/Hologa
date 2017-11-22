<?php
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$n=$_POST['fecha'];
	$a=$_POST['nombre_base'];
	$e=$_POST['n_telefonos'];
	$h=$_POST['v_enviados'];
	$l=$_POST['t_enviados'];

	$sql="UPDATE b_metro set fecha='$n',
								nombre_base='$a',
								n_telefonos='$e',
								v_enviados='$h'
								t_enviados='$l'

				where id='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>

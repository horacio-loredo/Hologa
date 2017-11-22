

function agregardatos(fecha,nombre_base,n_telefonos,v_enviados,t_enviados){

	cadena="fecha=" + fecha +
			"&nombre_base=" + nombre_base +
			"&n_telefonos=" + n_telefonos +
			"&v_enviados=" + v_enviados +
			"&t_enviados=" + t_enviados;

	$.ajax({
		type:"POST",
		url:"php/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				 $('#buscador').load('componentes/buscador.php');
				alertify.success("agregado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function agregaform(datos){

	d=datos.split('||');

	$('#idpersona').val(d[0]);
	$('#fechau').val(d[1]);
	$('#nombre_baseu').val(d[2]);
	$('#n_telefonosu').val(d[3]);
	$('#v_enviadosu').val(d[4]);
	$('#t_enviadosu').val(d[5]);

}

function actualizaDatos(){


	id=$('#idb_metro').val();
	fecha=$('#fechau').val();
	nombre_base=$('#nombre_baseu').val();
	n_telefonos=$('#n_telefonosu').val();
	v_enviados=$('#v_enviadosu').val();
	t_enviados=$('#t_enviadosu').val();

	cadena= "id=" + id +
			"&fecha=" + fecha +
			"&nombre_base" + nombre_base +
			"&n_telefonos=" + n_telefonos +
			"&v_enviados=" + v_enviados +
			"&t_enviados=" + t_enviados;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos.php",
		data:cadena,
		success:function(r){

			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function preguntarSiNo(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
					function(){ eliminarDatos(id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}

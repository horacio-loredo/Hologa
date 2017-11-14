

function agregardatos(nombre,cuenta,monto,fecha_promesa,fecha_pago,bucket){

	cadena="nombre=" + nombre + 
			"&cuenta=" + cuenta +
			"&monto=" + monto +
			"&fecha_promesa=" + fecha_promesa +
			"&fecha_pago=" + fecha_pago +
			"&bucket=" + bucket;

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
	$('#nombreu').val(d[1]);
	$('#cuentau').val(d[2]);
	$('#montou').val(d[3]);
	$('#fecha_promesau').val(d[4]);
	$('#fecha_pagou').val(d[5]);
	$('#bucketu').val(d[6]);
	
}

function actualizaDatos(){


	id=$('#idpersona').val();
	nombre=$('#nombreu').val();
	cuenta=$('#cuentau').val();
	monto=$('#montou').val();
	fecha_promesa=$('#fecha_promesau').val();
	fecha_pago=$('#fecha_pagou').val();
	telefono=$('#bucketu').val();

	cadena= "id=" + id +
			"&nombre=" + nombre + 
			"&cuenta=" + cuenta +
			"&monto=" + monto +
			"&fecha_promesa=" + fecha_promesa +
			"&fecha_pago=" + fecha_pago +
			"&bucket=" + bucket;

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
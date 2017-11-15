

create database pruebas;
use pruebas;

create table t_persona(
			id int auto_increment,
			nombre varchar(50),
			apellido varchar(50),
			email varchar(50),
			telefono varchar(50),
			primary key(id)
					);

// Datos de prueba para promesas //
create database tamiga;
use tamiga;

create table t_promesas(
			id int auto_increment,
			nombre varchar(50),
			cuenta varchar(50),
			monto varchar(50),
			fecha_promesa varchar(50),
			fecha_pago varchar(50),
			bucket varchar(50),
			primary key(id)
						);

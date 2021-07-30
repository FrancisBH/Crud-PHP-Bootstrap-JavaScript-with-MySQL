

create database Crud_prueba;
use Crud_prueba;

create table t_usuario(
			id int auto_increment,
			nombre varchar(50),
			apellido varchar(50),
			email varchar(50),
			telefono varchar(50),
			primary key(id)
					);
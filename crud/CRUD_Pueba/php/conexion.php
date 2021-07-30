<?php 
		function conexion(){
			$servidor="localhost";
			$usuario="root";
			$password="";
			$bd="crud_prueba";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}

 ?>
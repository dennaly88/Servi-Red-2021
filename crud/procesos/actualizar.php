<?php 

	require_once "../conexion.php";
	require_once "../metodosCrud.php";

	$nombre=$_POST['nombres'];
	$apellido=$_POST['apellidos'];
	$cedula=$_POST['cedula'];
	$usuario=$_POST['usuario'];
	$contraseña=$_POST['contraseña'];
	$id=$_POST['id'];

	$datos=array(
			$nombre,
			$apellido,
			$cedula,
			$usuario,
			$contraseña,
			$id
				);
	$obj= new metodos();

	if($obj->actualizaDatosNombre($datos)==1){
		header("location:../index.php");
	}else{
		echo "fallo al agregar";
	}
 ?>



<?php
$servidor = "localhost";
$usuario = "danny";
$clave = "Danny16029567*";
$base = "servi-red-viejo";


$conexion = new mysqli($servidor, $usuario, $clave, $base);

if ($conexion->connect_error) {
    die("la conexion esta mala revisas: " . $conexion->connect_error);
}else {

   
}




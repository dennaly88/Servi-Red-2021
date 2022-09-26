<?php
$servidor = "localhost";
$usuario = "root";
$clave = "Julioc8*";
$base = "servi-red";


$conexion = new mysqli($servidor, $usuario, $clave, $base);

if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}
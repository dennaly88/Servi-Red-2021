<?php
$servidor = "localhost";
$usuario = "danny";
$clave = "Danny16029567*";
$base = "servi-red-viejo";

// Crear Conexion
$conexion = new mysqli($servidor, $usuario, $clave, $base);
// Check connection
if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}
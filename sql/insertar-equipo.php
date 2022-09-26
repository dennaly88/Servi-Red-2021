<?php

include('conexion-dos.php');



$id=$_POST['id'];
$equipo=$_POST['equipo'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$serial=$_POST['serial'];
$bien=$_POST['bien'];


if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
 

 
$sql = "INSERT INTO  equipo(nombre,marca,modelo,ser,bien) VALUES ('$equipo','$marca','$modelo','$serial','$bien')";
if (mysqli_query($conexion, $sql)) {
      
      
      header("location:../principal-equipos.php?usu=1");
    
  
 
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>
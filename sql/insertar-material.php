<?php

include('conexion-dos.php');



$id=$_POST['id'];
$material=$_POST['material'];
$unidad=$_POST['unidad'];
$cantidad=$_POST['cantidad'];



if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
 

 
$sql = "INSERT INTO  materiales(nombre,unidad,cantidad) VALUES ('$material','$unidad','$cantidad')";
if (mysqli_query($conexion, $sql)) {
      
      
      header("location:../principal-materiales.php?usu=1");
    
  
 
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>
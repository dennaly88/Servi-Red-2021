<?php

include('conexion-dos.php');



$id=$_POST['id'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$cedula=$_POST['cedula'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$perfil=$_POST['perfil'];

if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}


 
$sql = "INSERT INTO usuarios (usuario,contraseña,nombres,apellidos,cedula,perfil) VALUES ('$usuario','$contraseña','$nombres','$apellidos','$cedula','$perfil')";
if (mysqli_query($conexion, $sql)) {
      
      
      header("location:../principal-usuario.php?usu=1");
    
  
 
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>

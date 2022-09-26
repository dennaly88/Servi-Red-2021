<?php

include('conexion-dos.php');
$edit_id=$_POST['edit_id'];
$edit_nombres=$_POST['edit_nombres'];
$edit_apellidos=$_POST['edit_apellidos'];
$edit_cedula=$_POST['edit_cedula'];
$edit_usuario=$_POST['edit_usuario'];
$edit_contraseña=$_POST['edit_contraseña'];
$edit_perfil=$_POST['edit_perfil'];



if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
 
$sql = "UPDATE usuarios SET id='$edit_id', nombres='$edit_nombres', apellidos='$edit_apellidos',cedula='$edit_cedula', usuario='$edit_usuario' ,
 contraseña='$edit_contraseña' ,perfil='$edit_perfil'

                                      WHERE id='$edit_id'" ;
 

if (mysqli_query($conexion, $sql)) {
      
      
      header("location:../principal-usuario.php?usu=2");
    
  
 
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>


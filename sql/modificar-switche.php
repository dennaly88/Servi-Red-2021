<?php



include('conexion-dos.php');
$edit_id=$_POST['edit_id'];
$edit_ip=$_POST['edit_ip'];
$edit_usuario=$_POST['edit_usuario'];
$edit_contraseña=$_POST['edit_contraseña'];
$edit_ubicacion=$_POST['edit_ubicacion'];





if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
 
$sql = "UPDATE switches SET id='$edit_id', ip='$edit_ip',usuario='$edit_usuario',clave='$edit_contraseña',ubicacion='$edit_ubicacion'

                                      WHERE id='$edit_id'" ;
 

if (mysqli_query($conexion, $sql)) {
      
      
      header("location:../principal-switches.php?usu=2");
    
  
 
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>


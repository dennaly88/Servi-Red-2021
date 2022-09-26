<?php


 
include('conexion-dos.php');
$edit_id=$_POST['edit_id'];
$edit_ip=$_POST['edit_ip'];
$edit_clave_admin=$_POST['edit_clave_admin'];
$edit_ssid=$_POST['edit_ssid'];
$edit_clave=$_POST['edit_clave'];
$edit_ubicacion=$_POST['edit_ubicacion'];


 

if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
 
$sql = "UPDATE wifi SET id='$edit_id', ip='$edit_ip',clave_administrador='$edit_clave_admin',SSID='$edit_ssid',Clave='$edit_clave',ubicacion='$edit_ubicacion'

                                      WHERE id='$edit_id'" ;
 

if (mysqli_query($conexion, $sql)) {
      
      
      header("location:../principal-wifi.php?usu=2");
    
  
 
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>

    
    
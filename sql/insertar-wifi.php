<?php

include('conexion-dos.php');



$id=$_POST['id'];
$ip=$_POST['ip'];
$clave_adm=$_POST['clave_adm'];
$ssid=$_POST['ssid'];
$clave=$_POST['clave'];
$ubicacion=$_POST['ubicacion'];







if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
 

 
$sql = "INSERT INTO  wifi(ip,clave_administrador,SSID,Clave,ubicacion) VALUES ('$ip','$clave_adm','$ssid','$clave','$ubicacion')";
if (mysqli_query($conexion, $sql)) {
      
      
      header("location:../principal-wifi.php?usu=1");
    
  
 
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>




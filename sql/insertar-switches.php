<?php

include('conexion-dos.php');



$id=$_POST['id'];
$ip=$_POST['ip'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$ubicacion=$_POST['ubicacion'];



if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
 

 
$sql = "INSERT INTO  switches(ip,usuario,clave,ubicacion) VALUES ('$ip','$usuario','$clave','$ubicacion')";
if (mysqli_query($conexion, $sql)) {
      
      
      header("location:../principal-switches.php?usu=1");
    
  
 
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>



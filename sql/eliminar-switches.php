<?php
$id = $_GET['id'];
include('conexion-dos.php');



if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
 

 
$sql = "DELETE FROM switches WHERE id ='$id'";
if (mysqli_query($conexion, $sql)) {
      
      
      header("location:../principal-switches.php?usu=3");
    
  
 
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>
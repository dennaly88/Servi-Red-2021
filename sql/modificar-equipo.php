<?php



include('conexion-dos.php');
$edit_id=$_POST['edit_id'];
$edit_nombre=$_POST['edit_nombre'];
$edit_marca=$_POST['edit_marca'];
$edit_modelo=$_POST['edit_modelo'];
$edit_serial=$_POST['edit_serial'];
$edit_bien=$_POST['edit_bien'];




if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
 
$sql = "UPDATE equipo SET id='$edit_id', nombre='$edit_nombre', marca='$edit_marca',modelo='$edit_modelo', ser='$edit_serial' ,bien='$edit_bien' 

                                      WHERE id='$edit_id'" ;
 

if (mysqli_query($conexion, $sql)) {
      
      
      header("location:../principal-equipos.php?usu=2");
    
  
 
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>


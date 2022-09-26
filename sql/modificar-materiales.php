<?php



include('conexion-dos.php');
$edit_id=$_POST['edit_id'];
$edit_nombre=$_POST['edit_nombre'];
$edit_unidad=$_POST['edit_unidad'];
$edit_cantidad=$_POST['edit_cantidad'];





if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
 
$sql = "UPDATE materiales SET id='$edit_id', nombre='$edit_nombre',cantidad='$edit_cantidad',unidad='$edit_unidad'

                                      WHERE id='$edit_id'" ;
 

if (mysqli_query($conexion, $sql)) {
      
      
      header("location:../principal-materiales.php?usu=2");
    
  
 
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>


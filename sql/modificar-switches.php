<?php



include('conexion-dos.php');
$edit_id=$_POST['edit_id'];
$edit_ip=$_POST['edit_ip'];
$edit_usuario=$_POST['edit_usuario'];
$edit_clave=$_POST['edit_clave'];





if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
 
$sql = "UPDATE materiales SET id='$edit_id', nombre='$edit_nombre',cantidad='$edit_cantidad',unidad='$edit_unidad'

                                      WHERE id='$edit_id'" ;
 

if (mysqli_query($conexion, $sql)) {
      
      
      header("location:../principal-switches.php?usu=2");
    
  
 
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>




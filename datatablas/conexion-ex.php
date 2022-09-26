


<?php
$servidor ="localhost";
$nombreusuario="danny";
$password="Danny16029567*";
$db="servi-red-viejo";

$conexion =  new mysqli_connect($servidor,$nombreusuario,$password,$db);


     if($conexion->connect_error){
       
        die("CONEXION FALLIDA:   "  .  $conexion->connect_error);

     }
else{

    


}


?>





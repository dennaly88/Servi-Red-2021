<?php

$usu=$_GET["usu"];




switch ($usu) { 
    case 1:
       
require ("mensajes/crear-material.php"); 
        break;
    case 2:
        

require ("mensajes/editar-material.php"); 

        break;
    case 3:
    require ("mensajes/eliminar-material.php"); 
      
break;
       
}



   
?>
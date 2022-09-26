<?php

$usu=$_GET["usu"];




switch ($usu) { 
    case 1:
       
require ("mensajes/crear-sw.php"); 
        break;
    case 2:
        

require ("mensajes/editar-sw.php"); 

        break;
    case 3:
    require ("mensajes/eliminar-sw.php"); 
      
break;
       
}



   
?>
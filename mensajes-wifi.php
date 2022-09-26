<?php

$usu=$_GET["usu"];




switch ($usu) { 
    case 1:
       
require ("mensajes/crear-wifi.php"); 
        break;
    case 2:
        

require ("mensajes/editar-wifi.php"); 

        break;
    case 3:
    require ("mensajes/eliminar-wifi.php"); 
      
break;
       
}



   
?>
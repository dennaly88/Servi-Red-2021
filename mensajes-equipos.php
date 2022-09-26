<?php

$usu=$_GET["usu"];




switch ($usu) { 
    case 1:
       
require ("mensajes/crear-equipo.php"); 
        break;
    case 2:
        

require ("mensajes/editar-equipo.php"); 

        break;
    case 3:
    require ("mensajes/eliminar-equipo.php"); 
      
break;
       
}



   
?>
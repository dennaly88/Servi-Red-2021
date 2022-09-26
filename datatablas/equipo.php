<?php
    include "conexion.php";
    include "class.php";
    
    
?>
<?php



include('sql/conexion-dos.php');

		$sql="SELECT perfil from usuarios where '$variable'=usuario;";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		
			<?php  
            $tu=$mostrar['perfil']; 

            if ($tu == 'Administrador') {

              require("cuerpo-equipo.php");
          } else
          if ($tu == 'Basico') {
          
          
          
              require("cuerpo-equipo2.php");
          } 






           
            ?>	
	<?php 
	}
	 ?> 





    
    
    
  



</html>
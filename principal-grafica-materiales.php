<!DOCTYPE html>
<html lang="en">
  <head>
 
<title>Servi-Red </title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="librerias/css/bootstrap.min.css" />
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="librerias/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="librerias/css/style.css" />
    <link rel="shortcut icon" href="img/favi.png">

    <link rel="stylesheet" href="librerias/css/footer.css">
   
    
  </head>
  <body style="background-color:#aaa0a0;">
    <link rel="stylesheet" href="librerias/css/fondo.css">
   

    <?php include 'menu-horizontal.php'?>
    <?php 

session_start();
$usuario = $_SESSION['username'];
$variable=$_SESSION['usuario'];

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

              require("menu/menu-administrador.php");
          } else
          if ($tu == 'Basico') {
          
          
          
              require("menu/menu-basico.php");
          } 






           
            ?>	
	<?php 
	}
	 ?> <br>
    <?php include 'cuerpo-grafica-materiales.php'?>
    
    
    
    
    <script src="librerias//js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="librerias//js/jquery-3.5.1.js"></script>
    <script src="librerias//js/jquery.dataTables.min.js"></script>
    <script src="librerias//js/dataTables.bootstrap5.min.js"></script>
    <script src="librerias//js/script.js"></script>
  </body>
  
</html>

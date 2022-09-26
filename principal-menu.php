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






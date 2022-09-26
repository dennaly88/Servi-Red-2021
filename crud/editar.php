<?php 

	require_once "conexion.php";
	$obj= new conectar();
	$conexion=$obj->conexion();
	$id=$_GET['id'];
	$sql="SELECT nombres,apellidos,cedula,usuario,contraseña from usuarios where id='$id'";
	$result=mysqli_query($conexion,$sql);
	$ver=mysqli_fetch_row($result);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


		<form action="procesos/actualizar.php" method="post">
			<input type="text" hidden=""    value="<?php echo $id ?>" name="id">
			<label>Nombre</label>
			<p></p>
			<input type="text" name="nombres" value="<?php echo $ver['0'] ?>">
			<p></p>
			<label>Apellido</label>
			<p></p>
			<input type="text" name="apellidos" value="<?php echo $ver['1'] ?>">
			<p></p>
			<label>Cedula</label>
			<p></p>
			<input type="text" name="cedula" value="<?php echo $ver['2'] ?>">
			<p></p>
			<label>Usuario</label>
			<p></p>
			<input type="text" name="usuario" value="<?php echo $ver['3'] ?>">
			<p></p>
			<label>Contraseña</label>
			<p></p>
			<input type="text" name="contraseña" value="<?php echo $ver['4'] ?>">
			<p></p>
			<button>Agregar</button>
		</form>
</body>
</html>

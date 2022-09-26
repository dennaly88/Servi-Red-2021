<?php 
	require_once "conexion.php";
	require_once "metodosCrud.php";

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>crud</title>
</head>
<body>

<form action="procesos/insertar.php" method="post">
	<label>Nombre</label>
	<br>
	<input type="text" name="nombres">
	<br>
	<label>Apellido</label>
	<br>
	<input type="text" name="apellidos">
	<br>
	<label>Cedula</label>
	<br>
	<input type="text" name="cedula">
	<br>
	<label>Usuario</label>
	<br>
	<input type="text" name="usuario">
	<br>
	<label>Contraseña</label>
	<br>
	<input type="text" name="contraseña">
	<br><br>
	<button>Agregar</button>
</form>

<br><br>

<table style="border-collapse: collapse;" border="1">
	<tr>
		<td>ID</td>
		<td>Nombres</td>
		<td>Apellidos</td>
		<td>Cedula</td>
		<td>Usuario</td>
		<td>Contraseña</td>
		<td>Accion</td>
	</tr>
<?php 
	$obj= new metodos();
	$sql="SELECT id,nombres,apellidos,cedula,usuario,contraseña from usuarios";
	$datos=$obj->mostrarDatos($sql);

	foreach ($datos as $key ) {
 ?>
	<tr>
	    <td><?php echo $key['id']; ?></td>
		<td><?php echo $key['nombres']; ?></td>
		<td><?php echo $key['apellidos']; ?></td>
		<td><?php echo $key['cedula']; ?></td>
		<td><?php echo $key['usuario']; ?></td>
		<td><?php echo $key['contraseña']; ?></td>
		<td>
			<a href="editar.php?id=<?php echo $key['id'] ?>">
			Editar
			
		
		
			<a href="procesos/eliminar.php?id=<?php echo $key['id'] ?>">
			eliminar
			</a>
		</td>
	</tr>
<?php 
	}
 ?>
</table>
</body>
</html>
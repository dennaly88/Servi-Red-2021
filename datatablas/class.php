<?php 

	class metodos{
		public function mostrarDatos($sql){
			$c= new conectar();
			$conexion=$c->conexion();

			$result=mysqli_query($conexion,$sql);

			return mysqli_fetch_all($result,MYSQLI_ASSOC);
		}

		public function insertarDatosNombre($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="INSERT into usuarios (nombres,apellidos,cedula,usuario,contraseña)
							values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]')";

			return $result=mysqli_query($conexion,$sql);
		}
		
	}
 ?>
<?php 

	class conectar{
		private $servidor="localhost";
		private $usuario="danny";
		private $bd="servi-red-viejo";
		private $password="Danny16029567*";

		public function conexion(){
			$conexion=mysqli_connect($this->servidor,
									 $this->usuario,
									 $this->password,
									 $this->bd);
			return $conexion;
		}

	}




	
 ?>
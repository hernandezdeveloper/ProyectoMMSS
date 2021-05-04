<?php 

	class crud{
		public function agregar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="INSERT into requirente (apellidoynom,email,telefono,domicilio,dni)
									values ('$datos[0]',
											'$datos[1]',
											'$datos[2]',
											'$datos[3]',
											'$datos[4]')";
			return mysqli_query($conexion,$sql);
		}

	}


 ?>}

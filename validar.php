<?php
	
	$usuario=$_POST['usuario'];
	$password=$_POST['password'];

//conectar a la base de datos
$conexion= new mysqli("localhost", "root", "", "depositos");
$consulta="SELECT * FROM `usuarios`  WHERE usuario='$usuario' and password='$password'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
	header("location:requirente.php");
}
else{
	echo "<script>
					alert('USUARIO O CLAVE INCORRECTA!!');
					window.location='index.php' 
	</script>";
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>
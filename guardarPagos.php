<?php
	
	include ("conexion.php");
	$objeto = new Conexion();
$conexion = $objeto->Conectar();
     
    $id_legajo = $_POST['id_legajo']; 
	$fechaPago = $_POST['fechaPago'];
	$importe = $_POST['importe'];
	

	$sql = "INSERT INTO `pagos`(`id_legajo`, `fechaPago`, `importe`) VALUES ('$id_legajo','$fechaPago', '$importe')";
	$resultado = $conexion->query($sql);

if ($resultado){
		
		echo"<script type=\"text/javascript\">alert('GUARDADO CORRECTAMENTE'); window.location='legajo.php';</script>";
	}else
	{
		
		echo"<script type=\"text/javascript\">alert('NO SE PUDO GUARDAR'); window.location='requirente.php';</script>";  
	
		}



?>
	
		
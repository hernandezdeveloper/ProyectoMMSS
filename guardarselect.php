<?php
	
	include ("conexion.php");
	$objeto = new Conexion();
$conexion = $objeto->Conectar();

	$apellidoynom = $_POST['apellidoynom'];
	
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	
	
	$sql = "INSERT INTO requirente (`apellidoynom`,  `email`, `telefono`) VALUES ('$apellidoynom', '$email', '$telefono')";
	$resultado = $conexion->query($sql);

if ($resultado){
		
		echo"<script type=\"text/javascript\">alert('GUARDADO CORRECTAMENTE'); window.location='formularioselect.php';</script>";
	}else
	{
		
		echo"<script type=\"text/javascript\">alert('NO SE PUDO GUARDAR'); window.location='formularioselect.php';</script>";  
	
		}



?>
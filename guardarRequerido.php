<?php
	
	include ("conexion.php");
	$objeto = new Conexion();
$conexion = $objeto->Conectar();

	$apellidoynom = $_POST[utf8_decode('apellidoynom')];
	$edad = $_POST[utf8_decode('edad')];
	$email = $_POST[utf8_decode('email')];
	$telefono = $_POST[utf8_decode('telefono')];
	$Whatsapp = $_POST[utf8_decode('Whatsapp')];
	$domicilio = $_POST[utf8_decode('domicilio')];
	$referencia = $_POST[utf8_decode('referencia')];
	$dni = $_POST[utf8_decode('dni')];
	$ocupacion = $_POST[utf8_decode('ocupacion')];
	$ingresos = $_POST['ingresos'];
	$estadocivil = $_POST[utf8_decode('estadocivil')];
	$restriccion = $_POST[utf8_decode('restriccion')];
	
	$sql = "INSERT INTO requerido (`apellidoynom`, `edad`, `email`, `telefono`, `Whatsapp`,`domicilio`, `referencia`, `dni`, `ocupacion`, `ingresos`, `estadocivil`, `restriccion`) VALUES ('$apellidoynom','$edad', '$email', '$telefono','$Whatsapp', '$domicilio','$referencia','$dni','$ocupacion','$ingresos','$estadocivil','$restriccion')";
	$resultado = $conexion->query($sql);

if ($resultado){
		
		echo"<script type=\"text/javascript\">alert('GUARDADO CORRECTAMENTE'); window.location='requerido.php';</script>";
	}else
	{
		
		echo"<script type=\"text/javascript\">alert('NO SE PUDO GUARDAR'); window.location='requirente.php';</script>";  
	
		}



?>
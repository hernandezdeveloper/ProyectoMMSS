<?php
	
	include ("conexion.php");
	$objeto = new Conexion();
$conexion = $objeto->Conectar();

	$apellidoynomre = $_POST['apellidoynomre'];
	$edadre = $_POST['edadre'];
	$emailre = $_POST['emailre'];
	$telefonore = $_POST['telefonore'];
	$Whatsappre = $_POST['Whatsappre'];
	$domiciliore = $_POST['domiciliore'];
	$referenciare = $_POST['referenciare'];
	$dnire = $_POST['dnire'];
	$ocupacionre = $_POST['ocupacionre'];
	$ingresosre = $_POST['ingresosre'];
	$estadocivilre = $_POST['estadocivilre'];
	$restriccionre = $_POST['restriccionre'];
	
	$sql = "INSERT INTO requirente (`apellidoynomre`, `edadre`, `emailre`, `telefonore`, `Whatsappre`,`domiciliore`, `referenciare`, `dnire`, `ocupacionre`, `ingresosre`, `estadocivilre`, `restriccionre`) VALUES ('$apellidoynomre','$edadre', '$emailre', '$telefonore','$Whatsappre', '$domiciliore','$referenciare','$dnire','$ocupacionre','$ingresosre','$estadocivilre','$restriccionre')";
	$resultado = $conexion->query($sql);

if ($resultado){
		
		echo"<script type=\"text/javascript\">alert('GUARDADO CORRECTAMENTE'); window.location='requirente.php';</script>";
	}else
	{
		
		echo"<script type=\"text/javascript\">alert('NO SE PUDO GUARDAR'); window.location='requirente.php';</script>";  
	
		}



?>
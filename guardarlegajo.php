<?php
	
include ("conexion2.php");

	$fecha = $_POST['fecha'];
	$letra = $_POST['letra'];
	$anio = $_POST['anio'];
	$numero = $_POST['numero'];
	
	$abogado = $_POST['abogado'];
	$caratula = $_POST['caratula'];
    $id_requirente = $_POST['id_requirente'];
	$id_requerido = $_POST['id_requerido'];
	$id_colaborador= $_POST['id_colaborador'];

	$sql = "INSERT INTO legajo (`fecha`, `letra`, `anio`, `numero`, `abogado`, `caratula`,`id_requirente`, `id_requerido`,, `id_colaborador`) VALUES ('$fecha','$letra', '$anio', '$numero','$abogado', '$caratula', '$id_requirente','$id_requerido','$id_colaborador')";
	$resultado = $conexion->query($sql);

if ($resultado){
		
		echo"<script type=\"text/javascript\">alert('GUARDADO CORRECTAMENTE'); window.location='legajo.php';</script>";
	}else
	{
		
		echo"<script type=\"text/javascript\">alert('NO SE PUDO GUARDAR'); window.location='nuevolegajo.php';</script>";  
	
		}



?>
	
	
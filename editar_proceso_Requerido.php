
<?php
include ("conexion2.php");

	$id=$_REQUEST['id'];
	$apellidoynom = $_POST[utf8_encode('apellidoynom')];
	$dni = $_POST['dni'];
	$edad = $_POST['edad'];
	$telefono = $_POST['telefono'];
	$Whatsapp = $_POST['Whatsapp'];
	$domicilio = $_POST [utf8_encode('domicilio')];
	$referencia = $_POST[utf8_encode('referencia')];
	$email = $_POST[utf8_encode('email')];
	$ocupacion = $_POST[utf8_encode('ocupacion')];
	$ingresos = $_POST['ingresos'];
	$estadocivil = $_POST['estadocivil'];
	$restriccion = $_POST[utf8_encode('restriccion')];


$query="UPDATE `requerido` SET   id='$id',apellidoynom='$apellidoynom',  dni='$dni', edad='$edad',  telefono='$telefono', Whatsapp='$Whatsapp', domicilio='$domicilio', referencia='$referencia', email='$email', ocupacion='$ocupacion', ingresos='$ingresos', estadocivil='$estadocivil', restriccion='$restriccion'  WHERE id='$id'";

	$resultado=$conexion->query($query);

	if ($resultado){
	echo"<script type=\"text/javascript\">alert('EL REQUERIDO FUE EDITADO CORRECTAMENTE'); window.location='requerido.php';</script>";
	}else
	{
		echo "NO SE PUDO EDITAR";
	}
?>
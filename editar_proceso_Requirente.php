
<?php
include ("conexion2.php");

	$id=$_REQUEST['id'];
	$apellidoynomre = $_POST[utf8_encode('apellidoynomre')];
	$dnire = $_POST['dnire'];
	$edadre = $_POST['edadre'];
	$telefonore = $_POST['telefonore'];
	$Whatsappre = $_POST['Whatsappre'];
	$domiciliore = $_POST [utf8_encode('domiciliore')];
	$referenciare = $_POST[utf8_encode('referenciare')];
	$emailre = $_POST[utf8_encode('emailre')];
	$ocupacionre = $_POST[utf8_encode('ocupacionre')];
	$ingresosre = $_POST['ingresosre'];
	$estadocivilre = $_POST['estadocivilre'];
	$restriccionre = $_POST[utf8_encode('restriccionre')];


$query="UPDATE `requirente` SET   id='$id',apellidoynomre='$apellidoynomre',  dnire='$dnire', edadre='$edadre',  telefonore='$telefonore', Whatsappre='$Whatsappre', domiciliore='$domiciliore', referenciare='$referenciare', emailre='$emailre', ocupacionre='$ocupacionre', ingresosre='$ingresosre', estadocivilre='$estadocivilre', restriccionre='$restriccionre'  WHERE id='$id'";

	$resultado=$conexion->query($query);

	if ($resultado){
	echo"<script type=\"text/javascript\">alert('REQUIRENTE EDITADO CORRECTAMENTE'); window.location='requirente.php';</script>";
	}else
	{
		echo "NO SE PUDO EDITAR";
	}
?>
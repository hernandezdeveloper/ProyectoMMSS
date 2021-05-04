<?php
include 'plantillalicencia.php';
require 'conexion.php';

		$id=$_REQUEST['id'];

	     $query= "SELECT * FROM `licencias` where id='$id' ";
	     $resultado= $conexion->query($query);



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->Addpage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->Setx(15);
$pdf->Cell(30,6,'LEGAJO', 1,0,'C',1); 
$pdf->Cell(100,6,'APELLIDO', 1,0,'C',1);
$pdf->Cell(30,6,utf8_decode('AÑO'), 1,0,'C',1);
$pdf->Cell(20,6,utf8_decode('CIUDAD'), 1,0,'C',1);
$pdf->Ln();

$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(15);
		$pdf->Cell(30,6,utf8_decode($row['legajo']),1,0,'C');
		$pdf->Cell(100,6,$row['apeynom'],1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['anual']),1,0,'C');
		$pdf->Cell(20,6,utf8_decode($row['ciudad']),1,0,'C');

	}

$pdf->Ln(10);
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
	$pdf->SetX(15);
$pdf->Cell(30,6,utf8_decode('N°'), 1,0,'C',1); 
$pdf->Cell(100,6,utf8_decode('Articulos'), 1,0,'C',1);
$pdf->Cell(50,6,utf8_decode('Dias'), 1,0,'C',1);
$pdf->Ln();

$pdf->SetFont('Arial','',10);
	$pdf->SetX(15);
$pdf->Cell(30,6,utf8_decode('1'), 1,0,'C');
$pdf->Cell(100,6,utf8_decode('Art. 62 del E.P.P.J.- (Razones Particulares)'), 1,0,'l');
$query= "SELECT `particulares`, `salud`, `anual`, `ciudad`  FROM `licencias` where id='$id'";
	     $resultado= $conexion->query($query);
while($row = $resultado->fetch_assoc())
	{
		
		$pdf->Cell(50,6,utf8_decode($row['particulares']),1,0,'C');
		


		 }
$pdf->Ln();
$pdf->SetX(15);
$pdf->Cell(30,6,utf8_decode('2'), 1,0,'C');
$pdf->Cell(100,6,utf8_decode('Art. 63 del E.P.P.J.- (Razones de Salud)'), 1,0,'l');
 $query= "SELECT `salud`   FROM `licencias` where id='$id'";
	     $resultado= $conexion->query($query);
while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(50,6,utf8_decode($row['salud']),1,0,'C');
$pdf->Ln();
		 }
$pdf->SetX(15);
$pdf->Cell(30,6,utf8_decode('3'), 1,0,'C');
$pdf->Cell(100,6,utf8_decode('Art. 64 del E.P.P.J.- (Largo Tratamiento)'), 1,0,'l');
 $query= "SELECT `tratamiento`   FROM `licencias` where id='$id'";
	     $resultado= $conexion->query($query);
while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(50,6,utf8_decode($row['tratamiento']),1,0,'C');
$pdf->Ln();
		 }
$pdf->SetX(15);
$pdf->Cell(30,6,utf8_decode('4'), 1,0,'C');
$pdf->Cell(100,6,utf8_decode('Art. 68 del E.P.P.J.- (Maternidad)'), 1,0,'l');
 $query= "SELECT `maternidad`   FROM `licencias` where id='$id'";
	     $resultado= $conexion->query($query);
while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(50,6,utf8_decode($row['maternidad']),1,0,'C');
$pdf->Ln();
		 }
		 $pdf->SetX(15);
$pdf->Cell(30,6,utf8_decode('5'), 1,0,'C');
$pdf->Cell(100,6,utf8_decode('Art. 72 Inc. 1 del E.P.P.J.- (Matrimonio)'), 1,0,'l');
 $query= "SELECT `matrimonio`   FROM `licencias` where id='$id'";
	     $resultado= $conexion->query($query);
while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(50,6,utf8_decode($row['matrimonio']),1,0,'C');
$pdf->Ln();
		 }
		 $pdf->SetX(15);
$pdf->Cell(30,6,utf8_decode('6'), 1,0,'C');
$pdf->Cell(100,6,utf8_decode('Art. 72 Inc. 2 del E.P.P.J.- (Nacimiento)'), 1,0,'l');
 $query= "SELECT `nacimiento`   FROM `licencias` where id='$id'";
	     $resultado= $conexion->query($query);
while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(50,6,utf8_decode($row['nacimiento']),1,0,'C');
$pdf->Ln();
		 }
		 $pdf->SetX(15);
$pdf->Cell(30,6,utf8_decode('7'), 1,0,'C');
$pdf->Cell(100,6,utf8_decode('Art. 72 Inc. 3 del E.P.P.J.- (Fallecimiento de Familiar)'), 1,0,'l');
 $query= "SELECT `fallecimiento`   FROM `licencias` where id='$id'";
	     $resultado= $conexion->query($query);
while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(50,6,utf8_decode($row['fallecimiento']),1,0,'C');
$pdf->Ln();
		 }
		 $pdf->SetX(15);
$pdf->Cell(30,6,utf8_decode('8'), 1,0,'C');
$pdf->Cell(100,6,utf8_decode('Art. 72 Inc. 4 del E.P.P.J.- (Atencion de Familiar)'), 1,0,'l');
 $query= "SELECT `atencion`   FROM `licencias` where id='$id'";
	     $resultado= $conexion->query($query);
while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(50,6,utf8_decode($row['atencion']),1,0,'C');
$pdf->Ln();
		 }
		 $pdf->SetX(15);
$pdf->Cell(30,6,utf8_decode('9'), 1,0,'C');
$pdf->Cell(100,6,utf8_decode('Art. 75 del E.P.P.J.- (Lic. s/ Goce de Haberes)'), 1,0,'l');
 $query= "SELECT `sgoce`   FROM `licencias` where id='$id'";
	     $resultado= $conexion->query($query);
while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(50,6,utf8_decode($row['sgoce']),1,0,'C');
$pdf->Ln();
		 }
		 $pdf->SetX(15);
$pdf->Cell(30,6,utf8_decode('10'), 1,0,'C');
$pdf->Cell(100,6,utf8_decode('Art. 76 del E.P.P.J.- (Licencia por Estudio)'), 1,0,'l');
 $query= "SELECT `estudio`   FROM `licencias` where id='$id'";
	     $resultado= $conexion->query($query);
while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(50,6,utf8_decode($row['estudio']),1,0,'C');
$pdf->Ln();
		 }
		 $pdf->SetX(15);
$pdf->Cell(30,6,utf8_decode('11'), 1,0,'C');
$pdf->Cell(100,6,utf8_decode('Art. 76 bis del E.P.P.J.- (Licencia por Capacitacion)'), 1,0,'l');
 $query= "SELECT `capacitacion`   FROM `licencias` where id='$id'";
	     $resultado= $conexion->query($query);
while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(50,6,utf8_decode($row['capacitacion']),1,0,'C');
$pdf->Ln();
		 }
		 $pdf->SetX(15);
$pdf->Cell(30,6,utf8_decode('12'), 1,0,'C');
$pdf->Cell(100,6,utf8_decode('Ley Provincial N° 3.870 (Donacion de Sangre)'), 1,0,'l');
 $query= "SELECT `donacion`   FROM `licencias` where id='$id'";
	     $resultado= $conexion->query($query);
while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(50,6,utf8_decode($row['donacion']),1,0,'C');
$pdf->Ln();
		 }
		 $pdf->SetX(15);
$pdf->Cell(30,6,utf8_decode('13'), 1,0,'C');
$pdf->Cell(100,6,utf8_decode('Ley Nacional N° 20.596 (Lic. Especial Deportiva)'), 1,0,'l');
 $query= "SELECT `deportiva`   FROM `licencias` where id='$id'";
	     $resultado= $conexion->query($query);
while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(50,6,utf8_decode($row['deportiva']),1,0,'C');
$pdf->Ln();
		 }
		 $pdf->SetX(15);
		 $pdf->Cell(30,6,utf8_decode('14'), 1,0,'C');
$pdf->Cell(100,6,utf8_decode('Ley Provincial  N° 8.744 (Dia Femenino)'), 1,0,'l');
 $query= "SELECT `femenino`   FROM `licencias` where id='$id'";
	     $resultado= $conexion->query($query);
while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(50,6,utf8_decode($row['femenino']),1,0,'C');
$pdf->Ln();
		 }
		 $pdf->SetX(15);
		 $pdf->Cell(30,6,utf8_decode('15'), 1,0,'C');
$pdf->Cell(100,6,utf8_decode('Afectacion a Comicios'), 1,0,'l');
 $query= "SELECT `comicios`   FROM `licencias` where id='$id'";
	     $resultado= $conexion->query($query);
while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(50,6,utf8_decode($row['comicios']),1,0,'C');
$pdf->Ln();
		 }
		 $pdf->SetX(15);
		 $pdf->Cell(30,6,utf8_decode('16'), 1,0,'C');
$pdf->Cell(100,6,utf8_decode('Sin Justificar'), 1,0,'l');
 $query= "SELECT `sinjustificar`   FROM `licencias` where id='$id'";
	     $resultado= $conexion->query($query);
while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(50,6,utf8_decode($row['sinjustificar']),1,0,'C');
$pdf->Ln();
		 }
		 $pdf->SetX(15);
		 $pdf->Cell(30,6,utf8_decode('17'), 1,0,'C');
$pdf->Cell(100,6,utf8_decode('Injustificadas'), 1,0,'l');
 $query= "SELECT `injustificadas`   FROM `licencias` where id='$id'";
	     $resultado= $conexion->query($query);
while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(50,6,utf8_decode($row['injustificadas']),1,0,'C');
$pdf->Ln();
		 }
		 $pdf->SetFont('Arial','B',12);
		 $pdf->SetX(15);
		 $pdf->Cell(30,6,utf8_decode(''), 1,0,'C');
$pdf->Cell(100,6,utf8_decode('TOTAL DE DIAS'), 1,0,'l');
 $query= "SELECT `total`   FROM `licencias` where id='$id'";
	     $resultado= $conexion->query($query);
while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(50,6,utf8_decode($row['total']),1,0,'C',1);
$pdf->Ln();
		 }
$pdf->OutPut();
?>

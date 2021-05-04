<?php
include 'plantillalegajo.php';
require 'conexion.php';

$id=$_REQUEST['id'];
  $query= "SELECT * FROM `visitacarcel` where id='$id'";
  $resultado= $conexion->query($query);


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->Addpage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->Setx(15);
$pdf->Cell(70,6,'EXPEDIENTE:', 1,0,'L',1); 
$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['expte']),1,0,'L');
		
		$pdf->Ln();
	}

$pdf->OutPut();
?>

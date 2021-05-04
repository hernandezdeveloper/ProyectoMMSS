<?php
include 'plantillaRequirente.php';
require 'conexion.php';

			$id=$_REQUEST['id'];
   $query= "SELECT * FROM `requirente` WHERE id='$id' ";
   $resultado= $conexion->query($query);
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->Addpage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',10);
$pdf->SetX(25);
$pdf->Cell(60,6,'APELLIDO/S Y NOMBRE/S:', 1,0,'L'); 
$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(85);
		$pdf->Cell(110,6,utf8_decode($row['apellidoynomre']),1,0,'L');
		
		$pdf->Ln();
	}

	 $query= "SELECT * FROM `requirente` where id='$id' ";
     $resultado= $conexion->query($query);
 $pdf->SetFont('Arial','B',10);    
$pdf->SetX(25);
$pdf->Cell(60,6,utf8_decode('D.N.I. Nº :'), 1,0,'L'); 
$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(85);
		$pdf->Cell(110,6,utf8_decode($row['dnire']),1,0,'L');
		
		$pdf->Ln();
	}

	 $query= "SELECT * FROM `requirente` where id='$id' ";
     $resultado= $conexion->query($query);
 $pdf->SetFont('Arial','B',10);    
$pdf->SetX(25);
$pdf->Cell(60,6,'EDAD :', 1,0,'L'); 
$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(85);
		$pdf->Cell(110,6,utf8_decode($row['edadre']),1,0,'L');
		
		$pdf->Ln();
	}

	 $query= "SELECT * FROM `requirente` where id='$id' ";
     $resultado= $conexion->query($query);
 $pdf->SetFont('Arial','B',10);    
$pdf->SetX(25);
$pdf->Cell(60,6,utf8_decode('Nº de TELEFONO :'), 1,0,'L'); 
$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(85);
		$pdf->Cell(110,6,utf8_decode($row['telefonore']),1,0,'L');
		
		$pdf->Ln();
	}

	 $query= "SELECT * FROM `requirente` where id='$id' ";
     $resultado= $conexion->query($query);
 $pdf->SetFont('Arial','B',10);    
$pdf->SetX(25);
$pdf->Cell(60,6,utf8_decode('Nº de WhatsApp (Videollamada) :'), 1,0,'L'); 
$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(85);
		$pdf->Cell(110,6,utf8_decode($row['Whatsappre']),1,0,'L');
		
		$pdf->Ln();
	}
 $query= "SELECT * FROM `requirente` where id='$id' ";
     $resultado= $conexion->query($query);
 $pdf->SetFont('Arial','B',10);    
$pdf->SetX(25);
$pdf->Cell(60,6,utf8_decode('DOMICILIO:'), 1,0,'L'); 
$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(85);
		$pdf->Cell(110,6,utf8_decode($row['domiciliore']),1,0,'L');
		
		$pdf->Ln();
	}
	 $query= "SELECT * FROM `requirente` where id='$id' ";
     $resultado= $conexion->query($query);
 $pdf->SetFont('Arial','B',10);    
$pdf->SetX(25);
$pdf->Cell(60,6,utf8_decode('REFERENCIA DE DOMICILIO:'), 1,0,'L'); 
$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(85);
		$pdf->Cell(110,6,utf8_decode($row['referenciare']),1,0,'L');
		
		$pdf->Ln();
	}
 $query= "SELECT * FROM `requirente` where id='$id' ";
     $resultado= $conexion->query($query);
 $pdf->SetFont('Arial','B',10);    
$pdf->SetX(25);
$pdf->Cell(60,6,utf8_decode('EMAIL:'), 1,0,'L'); 
$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(85);
		$pdf->Cell(110,6,utf8_decode($row['emailre']),1,0,'L');
		
		$pdf->Ln();
	}
	 $query= "SELECT * FROM `requirente` where id='$id' ";
     $resultado= $conexion->query($query);
 $pdf->SetFont('Arial','B',10);    
$pdf->SetX(25);
$pdf->Cell(60,6,utf8_decode('OCUPACION:'), 1,0,'L'); 
$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(85);
		$pdf->Cell(110,6,utf8_decode($row['ocupacionre']),1,0,'L');
		
		$pdf->Ln();
	}
	 $query= "SELECT * FROM `requirente` where id='$id' ";
     $resultado= $conexion->query($query);
 $pdf->SetFont('Arial','B',10);    
$pdf->SetX(25);
$pdf->Cell(60,6,utf8_decode('INGRESOS:'), 1,0,'L'); 
$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(85);
		$pdf->Cell(110,6,utf8_decode($row['ingresosre']),1,0,'L');
		
		$pdf->Ln();
	}
	 $query= "SELECT * FROM `requirente` where id='$id' ";
     $resultado= $conexion->query($query);
 $pdf->SetFont('Arial','B',10);    
$pdf->SetX(25);
$pdf->Cell(60,6,utf8_decode('ESTADO CIVIL:'), 1,0,'L'); 
$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(85);
		$pdf->Cell(110,6,utf8_decode($row['estadocivilre']),1,0,'L');
		
		$pdf->Ln();
	}
	 $query= "SELECT * FROM `requirente` where id='$id' ";
     $resultado= $conexion->query($query);
 $pdf->SetFont('Arial','B',10);    
$pdf->SetX(25);
$pdf->Cell(60,6,utf8_decode('MEDIDA DE RESTRICCION:'), 1,0,'L'); 
$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(85);
		$pdf->Cell(110,6,utf8_decode($row['restriccionre']),1,0,'L');
		
		$pdf->Ln();
	}
$pdf->OutPut();
?>

<?php
include 'plantillaRequerido.php';
require 'conexion.php';

			$id=$_REQUEST['id'];
   $query= "SELECT * FROM `requerido` WHERE id='$id' ";
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
		$pdf->Cell(110,6,utf8_decode($row['apellidoynom']),1,0,'L');
		
		$pdf->Ln();
	}

	 $query= "SELECT * FROM `requerido` where id='$id' ";
     $resultado= $conexion->query($query);
 $pdf->SetFont('Arial','B',10);    
$pdf->SetX(25);
$pdf->Cell(60,6,utf8_decode('D.N.I. Nº :'), 1,0,'L'); 
$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(85);
		$pdf->Cell(110,6,utf8_decode($row['dni']),1,0,'L');
		
		$pdf->Ln();
	}

	 $query= "SELECT * FROM `requerido` where id='$id' ";
     $resultado= $conexion->query($query);
 $pdf->SetFont('Arial','B',10);    
$pdf->SetX(25);
$pdf->Cell(60,6,'EDAD :', 1,0,'L'); 
$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(85);
		$pdf->Cell(110,6,utf8_decode($row['edad']),1,0,'L');
		
		$pdf->Ln();
	}

	 $query= "SELECT * FROM `requerido` where id='$id' ";
     $resultado= $conexion->query($query);
 $pdf->SetFont('Arial','B',10);    
$pdf->SetX(25);
$pdf->Cell(60,6,utf8_decode('Nº de TELEFONO :'), 1,0,'L'); 
$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(85);
		$pdf->Cell(110,6,utf8_decode($row['telefono']),1,0,'L');
		
		$pdf->Ln();
	}

	 $query= "SELECT * FROM `requerido` where id='$id' ";
     $resultado= $conexion->query($query);
 $pdf->SetFont('Arial','B',10);    
$pdf->SetX(25);
$pdf->Cell(60,6,utf8_decode('Nº de WhatsApp (Videollamada) :'), 1,0,'L'); 
$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(85);
		$pdf->Cell(110,6,utf8_decode($row['Whatsapp']),1,0,'L');
		
		$pdf->Ln();
	}
 $query= "SELECT * FROM `requerido` where id='$id' ";
     $resultado= $conexion->query($query);
 $pdf->SetFont('Arial','B',10);    
$pdf->SetX(25);
$pdf->Cell(60,6,utf8_decode('DOMICILIO:'), 1,0,'L'); 
$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(85);
		$pdf->Cell(110,6,utf8_decode($row['domicilio']),1,0,'L');
		
		$pdf->Ln();
	}
	 $query= "SELECT * FROM `requerido` where id='$id' ";
     $resultado= $conexion->query($query);
 $pdf->SetFont('Arial','B',10);    
$pdf->SetX(25);
$pdf->Cell(60,6,utf8_decode('REFERENCIA DE DOMICILIO:'), 1,0,'L'); 
$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(85);
		$pdf->Cell(110,6,utf8_decode($row['referencia']),1,0,'L');
		
		$pdf->Ln();
	}
 $query= "SELECT * FROM `requerido` where id='$id' ";
     $resultado= $conexion->query($query);
 $pdf->SetFont('Arial','B',10);    
$pdf->SetX(25);
$pdf->Cell(60,6,utf8_decode('EMAIL:'), 1,0,'L'); 
$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(85);
		$pdf->Cell(110,6,utf8_decode($row['email']),1,0,'L');
		
		$pdf->Ln();
	}
	 $query= "SELECT * FROM `requerido` where id='$id' ";
     $resultado= $conexion->query($query);
 $pdf->SetFont('Arial','B',10);    
$pdf->SetX(25);
$pdf->Cell(60,6,utf8_decode('OCUPACION:'), 1,0,'L'); 
$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(85);
		$pdf->Cell(110,6,utf8_decode($row['ocupacion']),1,0,'L');
		
		$pdf->Ln();
	}
	 $query= "SELECT * FROM `requerido` where id='$id' ";
     $resultado= $conexion->query($query);
 $pdf->SetFont('Arial','B',10);    
$pdf->SetX(25);
$pdf->Cell(60,6,utf8_decode('INGRESOS:'), 1,0,'L'); 
$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(85);
		$pdf->Cell(110,6,utf8_decode($row['ingresos']),1,0,'L');
		
		$pdf->Ln();
	}
	 $query= "SELECT * FROM `requerido` where id='$id' ";
     $resultado= $conexion->query($query);
 $pdf->SetFont('Arial','B',10);    
$pdf->SetX(25);
$pdf->Cell(60,6,utf8_decode('ESTADO CIVIL:'), 1,0,'L'); 
$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(85);
		$pdf->Cell(110,6,utf8_decode($row['estadocivil']),1,0,'L');
		
		$pdf->Ln();
	}
	 $query= "SELECT * FROM `requerido` where id='$id' ";
     $resultado= $conexion->query($query);
 $pdf->SetFont('Arial','B',10);    
$pdf->SetX(25);
$pdf->Cell(60,6,utf8_decode('MEDIDA DE RESTRICCION:'), 1,0,'L'); 
$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(85);
		$pdf->Cell(110,6,utf8_decode($row['restriccion']),1,0,'L');
		
		$pdf->Ln();
	}
$pdf->OutPut();
?>

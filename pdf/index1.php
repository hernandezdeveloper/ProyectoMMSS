<?php
include 'plantillalegajo.php';
require 'conexion.php';

			$id=$_REQUEST['id'];

	     $query= "SELECT * FROM `empleado` WHERE id='$id' ";
	     $resultado= $conexion->query($query);



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->Addpage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->Setx(15);
$pdf->Cell(30,6,'LEGAJO', 1,0,'C',1); 
$pdf->Cell(90,6,'APELLIDO', 1,0,'C',1);
$pdf->Cell(40,6,utf8_decode('D.N.I.N°'), 1,0,'C',1);
$pdf->Cell(30,6,utf8_decode('CIUDAD'), 1,0,'C',1);
$pdf->Ln();

$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(15);
		$pdf->Cell(30,6,utf8_decode($row['legajo']),1,0,'C');
		$pdf->Cell(90,6,$row['apellido'],1,0,'C');
		$pdf->Cell(40,6,utf8_decode($row['dni']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['ciudad']),1,0,'C');
		$pdf->Ln(10);

	}

 $query= "SELECT * FROM `empleado` where id='42' ";
	     $resultado= $conexion->query($query);
	$pdf->SetX(15);
$pdf->Cell(70,6,'FECHA DE NACIMIENTO:', 1,0,'L',1); 
$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['nacimiento']),1,0,'L');
		
		$pdf->Ln();
	}

$query= "SELECT * FROM `empleado` where id='42' ";
$resultado= $conexion->query($query);
$pdf->SetX(15);
$pdf->Cell(70,6,'FECHA DE INGRESO:', 1,0,'L',1); 
$pdf->SetFont('Arial','',10);
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['ingreso']),1,0,'L');
		
		$pdf->Ln();
	}

$query= "SELECT * FROM `empleado` where id='42' ";
 $resultado= $conexion->query($query);
  $pdf->SetX(15);
   $pdf->Cell(70,6,'CARGO DE INGRESO:', 1,0,'L',1); 
    $pdf->SetFont('Arial','',10);

	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['cargo']),1,0,'L');
	    $pdf->Ln();
	}
$query= "SELECT * FROM `empleado` where id='42' ";
 $resultado= $conexion->query($query);
   $pdf->SetX(15);
     $pdf->Cell(70,6,utf8_decode('RESOLUCION N°:'), 1,0,'L',1); 
      $pdf->SetFont('Arial','',10);
	
	  while($row = $resultado->fetch_assoc())
	  {
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['resolucion']),1,0,'L');
		$pdf->Ln();
    	}
   $query= "SELECT * FROM `empleado` where id='42' ";
 $resultado= $conexion->query($query);
   $pdf->SetX(15);
     $pdf->Cell(70,6,utf8_decode('FECHA DE NOMBRAMIENTO:'), 1,0,'L',1); 
      $pdf->SetFont('Arial','',10);
	
	  while($row = $resultado->fetch_assoc())
	  {
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['nombramiento']),1,0,'L');
		$pdf->Ln();
    	}
  $query= "SELECT * FROM `empleado` where id='42' ";
 $resultado= $conexion->query($query);
   $pdf->SetX(15);
     $pdf->Cell(70,6,utf8_decode('CARGO ACTUAL:'), 1,0,'L',1); 
      $pdf->SetFont('Arial','',10);
	
	  while($row = $resultado->fetch_assoc())
	  {
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['cargoActual']),1,0,'L');
		$pdf->Ln();
    	}
$query= "SELECT * FROM `empleado` where id='42' ";
 $resultado= $conexion->query($query);
   $pdf->SetX(15);
     $pdf->Cell(70,6,utf8_decode('RESOLUCION N°:'), 1,0,'L',1); 
      $pdf->SetFont('Arial','',10);
	
	  while($row = $resultado->fetch_assoc())
	  {
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['resolucionActual']),1,0,'L');
		$pdf->Ln();
    	}
$query= "SELECT * FROM `empleado` where id='42' ";
 $resultado= $conexion->query($query);
   $pdf->SetX(15);
     $pdf->Cell(70,6,utf8_decode('TITULO SECUNDARIO:'), 1,0,'L',1); 
      $pdf->SetFont('Arial','',10);
	
	  while($row = $resultado->fetch_assoc())
	  {
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['secundario']),1,0,'L');
		$pdf->Ln();
    	}
$query= "SELECT * FROM `empleado` where id='42' ";
 $resultado= $conexion->query($query);
   $pdf->SetX(15);
     $pdf->Cell(70,6,utf8_decode('TITULO TERCIARIO:'), 1,0,'L',1); 
      $pdf->SetFont('Arial','',10);
	
	  while($row = $resultado->fetch_assoc())
	  {
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['terciario']),1,0,'L');
		$pdf->Ln();
    	}
$query= "SELECT * FROM `empleado` where id='42' ";
 $resultado= $conexion->query($query);
   $pdf->SetX(15);
     $pdf->Cell(70,6,utf8_decode('TITULO UNIVERSITARIO:'), 1,0,'L',1); 
      $pdf->SetFont('Arial','',10);
	
	  while($row = $resultado->fetch_assoc())
	  {
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['universitario']),1,0,'L');
		$pdf->Ln();
    	}
$query= "SELECT * FROM `empleado` where id='42' ";
 $resultado= $conexion->query($query);
   $pdf->SetX(15);
     $pdf->Cell(70,6,utf8_decode('DOMICILIO:'), 1,0,'L',1); 
      $pdf->SetFont('Arial','',10);
	
	  while($row = $resultado->fetch_assoc())
	  {
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['domicilio']),1,0,'L');
		$pdf->Ln();
    	}    
$query= "SELECT * FROM `empleado` where id='42' ";
 $resultado= $conexion->query($query);
   $pdf->SetX(15);
     $pdf->Cell(70,6,utf8_decode('CORREO ELECTRONICO:'), 1,0,'L'); 
      $pdf->SetFont('Arial','',10);
	
	  while($row = $resultado->fetch_assoc())
	  {
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['correo']),1,0,'L');
		$pdf->Ln();
    	}	
$query= "SELECT * FROM `empleado` where id='42' ";
 $resultado= $conexion->query($query);
   $pdf->SetX(15);
     $pdf->Cell(70,6,utf8_decode('N° DE TELEFONO:'), 1,0,'L',1); 
      $pdf->SetFont('Arial','',10);
	
	  while($row = $resultado->fetch_assoc())
	  {
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['telefono']),1,0,'L');
		$pdf->Ln();
    	}
$query= "SELECT * FROM `empleado` where id='42' ";
 $resultado= $conexion->query($query);
   $pdf->SetX(15);
     $pdf->Cell(70,6,utf8_decode('FECHA DE ULTIMO ASCENSO:'), 1,0,'L',1); 
      $pdf->SetFont('Arial','',10);
	
	  while($row = $resultado->fetch_assoc())
	  {
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['ascenso']),1,0,'L');
		$pdf->Ln();
    	}
$query= "SELECT * FROM `empleado` where id='42' ";
 $resultado= $conexion->query($query);
   $pdf->SetX(15);
     $pdf->Cell(70,6,utf8_decode('CARGO ACTUAL:'), 1,0,'L',1); 
      $pdf->SetFont('Arial','',10);
	
	  while($row = $resultado->fetch_assoc())
	  {
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['cargoActual']),1,0,'L');
		$pdf->Ln();
    	}
$query= "SELECT * FROM `empleado` where id='42' ";
 $resultado= $conexion->query($query);
   $pdf->SetX(15);
     $pdf->Cell(70,6,utf8_decode('AREA DE PRESTACION DE SERVICIO:'), 1,0,'L',1); 
      $pdf->SetFont('Arial','',10);
	
	  while($row = $resultado->fetch_assoc())
	  {
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['area']),1,0,'L');
		$pdf->Ln();
    	}
$query= "SELECT * FROM `empleado` where id='42' ";
 $resultado= $conexion->query($query);
   $pdf->SetX(15);
     $pdf->Cell(70,6,utf8_decode('SANCIONES DISCIPLINARIAS:'), 1,0,'L',1); 
      $pdf->SetFont('Arial','',10);
	
	  while($row = $resultado->fetch_assoc())
	  {
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['sanciones']),1,0,'L');
		$pdf->Ln();
    	}
$query= "SELECT * FROM `empleado` where id='42' ";
 $resultado= $conexion->query($query);
   $pdf->SetX(15);
     $pdf->Cell(70,6,utf8_decode('BAJA POR RETIRO O FALLECIMIENTO:'), 1,0,'L',1); 
      $pdf->SetFont('Arial','',10);
	
	  while($row = $resultado->fetch_assoc())
	  {
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['baja']),1,0,'L');
		$pdf->Ln();
    	}
$query= "SELECT * FROM `empleado` where id='42' ";
 $resultado= $conexion->query($query);
   $pdf->SetX(15);
     $pdf->Cell(70,6,utf8_decode('CONYUGE:'), 1,0,'L',1); 
      $pdf->SetFont('Arial','',10);
	
	  while($row = $resultado->fetch_assoc())
	  {
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['conyuge']),1,0,'L');
		$pdf->Ln();
    	}
$query= "SELECT * FROM `empleado` where id='42' ";
 $resultado= $conexion->query($query);
   $pdf->SetX(15);
     $pdf->Cell(70,6,utf8_decode('NUMERO DE HIJOS:'), 1,0,'L',1); 
      $pdf->SetFont('Arial','',10);
	
	  while($row = $resultado->fetch_assoc())
	  {
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['hijo']),1,0,'L');
		$pdf->Ln();
    	}
$query= "SELECT * FROM `empleado` where id='42' ";
 $resultado= $conexion->query($query);
   $pdf->SetX(15);
     $pdf->Cell(70,6,utf8_decode('HIJOS MENORES DE 4 AÑOS:'), 1,0,'L',1); 
      $pdf->SetFont('Arial','',10);
	
	  while($row = $resultado->fetch_assoc())
	  {
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['hijomenor']),1,0,'L');
		$pdf->Ln();
    	}
$query= "SELECT * FROM `empleado` where id='42' ";
 $resultado= $conexion->query($query);
   $pdf->SetX(15);
     $pdf->Cell(70,6,utf8_decode('PREESCOLARIDAD:'), 1,0,'L',1); 
      $pdf->SetFont('Arial','',10);
	
	  while($row = $resultado->fetch_assoc())
	  {
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['preescolaridad']),1,0,'L');
		$pdf->Ln();
    	}
$query= "SELECT * FROM `empleado` where id='42' ";
 $resultado= $conexion->query($query);
   $pdf->SetX(15);
     $pdf->Cell(70,6,utf8_decode('ESCOLARIDAD PRIMARIA:'), 1,0,'L',1); 
      $pdf->SetFont('Arial','',10);
	
	  while($row = $resultado->fetch_assoc())
	  {
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['escPrimaria']),1,0,'L');
		$pdf->Ln();
    	}
    	    	
$query= "SELECT * FROM `empleado` where id='42' ";
 $resultado= $conexion->query($query);
   $pdf->SetX(15);
     $pdf->Cell(70,6,utf8_decode('ESCOLARIDAD MEDIA Y SUPERIOR:'), 1,0,'L',1); 
      $pdf->SetFont('Arial','',10);
	
	  while($row = $resultado->fetch_assoc())
	  {
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['escMedia']),1,0,'L');
		$pdf->Ln();
    	}

    	$query= "SELECT * FROM `empleado` where id='42' ";
 $resultado= $conexion->query($query);
   $pdf->SetX(15);
     $pdf->Cell(70,6,utf8_decode('ESCOLARIDAD OTRAS CAPACIDADES:'), 1,0,'L',1); 
      $pdf->SetFont('Arial','',10);
	
	  while($row = $resultado->fetch_assoc())
	  {
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['escDisc']),1,0,'L');
		$pdf->Ln();
    	}
$query= "SELECT * FROM `empleado` where id='42' ";
 $resultado= $conexion->query($query);
   $pdf->SetX(15);
     $pdf->Cell(70,6,utf8_decode('FAMILIA NUMEROSA:'), 1,0,'L',1); 
      $pdf->SetFont('Arial','',10);
	
	  while($row = $resultado->fetch_assoc())
	  {
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['flianumerosa']),1,0,'L');
		$pdf->Ln();
    	}
 $query= "SELECT * FROM `empleado` where id='42' ";
 $resultado= $conexion->query($query);
   $pdf->SetX(15);
     $pdf->Cell(70,6,utf8_decode('PRENATAL:'), 1,0,'L',1); 
      $pdf->SetFont('Arial','',10);
	
	  while($row = $resultado->fetch_assoc())
	  {
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['prenatal']),1,0,'L');
		$pdf->Ln();
    	}
 $query= "SELECT * FROM `empleado` where id='42' ";
 $resultado= $conexion->query($query);
   $pdf->SetX(15);
     $pdf->Cell(70,6,utf8_decode('LICENCIA SIN GOCE DE SUELDO(Meses):'), 1,0,'L',1); 
      $pdf->SetFont('Arial','',10);
	
	  while($row = $resultado->fetch_assoc())
	  {
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['licSingose']),1,0,'L');
		$pdf->Ln();
    	}
 $query= "SELECT * FROM `empleado` where id='42' ";
 $resultado= $conexion->query($query);
   $pdf->SetX(15);
     $pdf->Cell(70,6,utf8_decode('BAJA DISTINTOS MOTIVOS:'), 1,0,'L',1); 
      $pdf->SetFont('Arial','',10);
	
	  while($row = $resultado->fetch_assoc())
	  {
		$pdf->SetX(85);
		$pdf->Cell(120,6,utf8_decode($row['renuncia']),1,0,'L');
		$pdf->Ln();
    	}
$pdf->OutPut();
?>

<?php
  require 'fpdf/fpdf.php';
  
  class PDF extends FPDF
  {
    function Header()
    {
      $this->Image('imagenes/logocircular.jpg', 5, 5, 20 );
      $this->SetFont('Arial','B',15);
      $this->Cell(10);
      $this->Cell(170,20, 'Ministerio Publico de la Defensa - Seccion Depositos',0,0,'C',0);
      $this->Ln(20);
  
      $this->Cell(190,20, 'Datos del Requirente',0,0,'C');
      $this->Ln(20);
    }
    
    function Footer()
    {
      $this->SetY(-15);
      $this->SetFont('Arial','I', 8);
      $this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
    }   
  }
?>
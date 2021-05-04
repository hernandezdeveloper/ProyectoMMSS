<?php
  require 'fpdf/fpdf.php';
  
  class PDF extends FPDF
  {
    function Header()
    {
      $this->Image('imagenes/logocircular.jpg', 5, 5, 20 );
      $this->SetFont('Arial','B',15);
      $this->Cell(10);
      $this->Cell(160,20, 'Departamento de Personal',0,0,'C',0);
      $this->Ln(10);
      $this->Cell(190,20, 'Licencia Anual',0,0,'C');
      $this->Ln(30);
    }
    
    function Footer()
    {
      $this->SetY(-15);
      $this->SetFont('Arial','I', 8);
      $this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
    }   
  }
?>
<?php
require('C:\xampp\htdocs\lastcodes\fpdf185\fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',20);
$pdf->cell(80,10,"VJTech Academy,Maharashtra");
$pdf->output();
?>
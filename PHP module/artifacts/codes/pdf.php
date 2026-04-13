<?php
 require('C:\xampp\htdocs\fpdf185');
 $pdf=new FPDF();
 $pdf->AddPage();
 $pdf->SetFont('Arial','B',20);
 $pdf->cell(80,10,"vjtech academy");
 $pdf->output("vjtech.pdf","I");
 ?>
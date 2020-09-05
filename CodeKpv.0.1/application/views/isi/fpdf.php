<?php

include ('../application/views/isi/fpdf/fpdf.php');

//setting awal
$pdf = new FPDF();
$pdf -> AddPage();
$pdf -> SetFont('Courier','B','16');
$pdf -> SetX(30);
// $pdf -> SetY(30);
$pdf ->Cell(0,0.3,'Hello Satriawan',0,1);
$pdf -> Output();

?>
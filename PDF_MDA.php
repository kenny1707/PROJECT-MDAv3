<?php

if (!empty($_POST['submit'])) {

//require 'D:\Proyectos\FSAv2\FPDF\fpdf.php';
require('C:\xampp\htdocs\FSAv3\tfpdf\tfpdf.php');

$pdf=new tFPDF();
//$pdf->SetFont("Arial","B","12");
$pdf->AddPage();
$width=210; // Width of Current Page
$height=297; // Height of Current Page
$edge=10; // Gap between line and border , change this value
$fecha=date('d/m/y');
$hora=date('h:i:s');
// Add a Unicode font (uses UTF-8) and styles
//$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
$pdf->AddFont('DejaVu','','Helvetica-Font/Helvetica.ttf',true);//
//$pdf->AddFont('DejaVu', 'B', 'DejaVuSans-Bold.ttf', true);
$pdf->AddFont('DejaVu', 'B', 'Helvetica-Font/Helvetica-Bold.ttf', true);
$pdf->SetFont('DejaVu','',12);



$pdf->Output();
}
?>
<?php

include_once('pdf/CreatePDF.php');
require_once 'dbconfig.php';

$pdf = new CreatePDF();

$pdf->AddPage();

//$pdf->simpleHeader();
$pdf->headerDetail();

$pdf->Output("Reporte.pdf", "D");
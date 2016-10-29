<?php
try{
    include_once('CreatePDF.php');

    $estilo = $_GET['estilo'];
    $datosRef = $_GET['refacciones'];
    $folio = $_GET['folio'];
    //$dataBody = explode(":", $datosRef);
    $dataH = $_GET['dAuto'];

    echo $datosRef . '|' . $folio . '|' . $dataH;
    //$dataHeader = explode(",", $dataH);
    /*$pdf = new CreatePDF();

    $pdf->AddPage();

    $pdf->addData($folio, $dataHeader, $dataBody, intval($estilo));

    $pdf->Output('reporte.pdf', "D");
    //$pdf->Output('reporte.pdf', "I");*/

}catch (Exception $e){
    echo $e->getMessage();
}
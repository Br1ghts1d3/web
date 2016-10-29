<?php

require_once 'fpdf.php';
require_once 'dbconfig.php';

try {

    $pdf=new FPDF();

    $idOrden = $_GET['id'];

    $sql = "select * from CIERRE_ORDEN where ID_ORDEN = :id_orden";
    $query = $db_con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $query->bindParam(':id_orden', $idOrden, PDO::PARAM_INT);
    $query->execute();
    while($fila = $query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)){
        $orden = $fila[1];
        $datos_auto = $fila[2];
        $datos_orden = $fila[3];
    }


    $dataOne = explode(",", $datos_auto);
    $pdfDescripcion = explode(",", $datos_orden);
    $pdf->AddPage();
    $pdf->SetFont('Arial', '', 10);
    $pdf->Image('../img/plantilla.jpg' , 5 ,5, 200 , 280,'JPG');
    $pdf->SetFont('Arial', 'B', 11);
    /* **************ORDEN**************** */
    $pdf->Cell(160);
    $pdf->Cell(50, 10, $orden , 0);
    $pdf->Ln(0);
    /* **************CLIENTE**************** */
    $pdf->Cell(25);
    $pdf->Cell(0, 85, $dataOne[0] , 0);
    $pdf->Ln(20);
    /* **************Responsable**************** */
    $pdf->Cell(113);
    $pdf->Cell(0, 45, $dataOne[1] , 0);
    $pdf->Ln(20);
    /* **************Marca Modelo Placas**************** */
    $pdf->Cell(19);
    $pdf->Cell(0, 30,  $dataOne[(sizeof($dataOne) - 3)] . ' / ' . $dataOne[(sizeof($dataOne) - 2)] . ' / ' . $dataOne[(sizeof($dataOne) - 1)] , 0);
    $pdf->Ln(0);
    /* **************KM**************** */
    $pdf->Cell(168);
    $pdf->Cell(20, 30,  $dataOne[(sizeof($dataOne) - 4)] , 0);
    $pdf->Ln(0);
    /* **************FECHA**************** */
    $pdf->Cell(163);
    $pdf->Cell(15, 5,  $dataOne[(sizeof($dataOne) - 5)] , 0);
    $pdf->Ln(0);

    $pdf->Cell(20);
    $pdf->Cell(30, 85, $pdfDescripcion[0]  , 0);
    $pdf->Ln(0);
    $pdf->Cell(20);
    $pdf->Cell(30, 95, $pdfDescripcion[2]  , 0);
    $pdf->Ln(0);
    $pdf->Cell(20);
    $pdf->Cell(28, 108, $pdfDescripcion[3]  , 0);
    $pdf->Ln(0);
    $pdf->Cell(20);
    $pdf->Cell(28, 121, $pdfDescripcion[4]  , 0);
    $pdf->Ln(0);
    $pdf->Cell(20);
    $pdf->Cell(28, 134, $pdfDescripcion[5]  , 0);
    $pdf->Ln(0);
    $pdf->Output();
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
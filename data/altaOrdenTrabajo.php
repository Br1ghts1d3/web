<?php

require_once 'dbconfig.php';

try {

    $trabajoReal = new SplFixedArray(10);
    $mecAsig = new SplFixedArray(10);
    $trabajoHrs = new SplFixedArray(10);
    $refac = new SplFixedArray(10);
    $precioRef = new SplFixedArray(10);

    for ($i = 0; $i < sizeof($trabajoReal); $i++){
        $trabajo = 'trabajo' . ((string)($i + 1));
        $mecanico = 'mecanico' . ((string)($i + 1));
        $tiempoHr = 'tiempo' . ((string)($i + 1));
        $refaccion = 'refac' . ((string)($i + 1));
        $precio = 'precio' . ((string)($i + 1));

        $trabajoReal[$i] = isset($_POST[$trabajo]) ? $_POST[$trabajo] : '';
        $mecAsig[$i] = isset($_POST[$mecanico]) ? $_POST[$mecanico] : '';
        $trabajoHrs[$i] = isset($_POST[$tiempoHr]) ? $_POST[$tiempoHr] : '';
        $refac[$i] = isset($_POST[$refaccion]) ? $_POST[$refaccion] : '';
        $precioRef[$i] = isset($_POST[$precio]) ? $_POST[$precio] : '';
    }

    $sql = "INSERT INTO ORDEN_TRABAJO 
(ID_ORDEN, PLACAS, FOLIO_ING, TRABAJO_REAL1, MEC_ASIG1, TRABAJO_HR1, TRABAJO_REAL2, MEC_ASIG2, TRABAJO_HR2, TRABAJO_REAL3, MEC_ASIG3, TRABAJO_HR3, TRABAJO_REAL4, MEC_ASIG4, TRABAJO_HR4, TRABAJO_REAL5, MEC_ASIG5, TRABAJO_HR5, TRABAJO_REAL6, MEC_ASIG6, TRABAJO_HR6, TRABAJO_REAL7, MEC_ASIG7, TRABAJO_HR7, TRABAJO_REAL8, MEC_ASIG8, TRABAJO_HR8, TRABAJO_REAL9, MEC_ASIG9, TRABAJO_HR9, TRABAJO_REAL10, MEC_ASIG10, TRABAJO_HR10, REF_REQ1, REF_PREC1, REF_REQ2, REF_PREC2, REF_REQ3, REF_PREC3, REF_REQ4, REF_PREC4, REF_REQ5, REF_PREC5, REF_REQ6, REF_PREC6, REF_REQ7, REF_PREC7, REF_REQ8, REF_PREC8, REF_REQ9, REF_PREC9, REF_REQ10, REF_PREC10, T_ENTREGA) 
VALUES (null,'" . $_POST['placa'] . "','" . $_POST['folioIngreso'] . "','"
        . $trabajoReal[0] ."', '" . $mecAsig[0] . "'," . intval($trabajoHrs[0]).",'"
        . $trabajoReal[1] ."', '" . $mecAsig[1] . "'," . intval($trabajoHrs[1]). ",'"
        . $trabajoReal[2] ."', '" . $mecAsig[2] . "'," . intval($trabajoHrs[2]).",'"
        . $trabajoReal[3] ."', '" . $mecAsig[3] . "'," . intval($trabajoHrs[3]). ",'"
        . $trabajoReal[4] ."', '" . $mecAsig[4] . "'," . intval($trabajoHrs[4]).",'"
        . $trabajoReal[5] ."', '" . $mecAsig[5] . "'," . intval($trabajoHrs[5]). ",'"
        . $trabajoReal[6] ."', '" . $mecAsig[6] . "'," . intval($trabajoHrs[6]).",'"
        . $trabajoReal[7] ."', '" . $mecAsig[7] . "'," . intval($trabajoHrs[7]). ",'"
        . $trabajoReal[8] ."', '" . $mecAsig[8] . "'," . intval($trabajoHrs[8]).",'"
        . $trabajoReal[9] ."', '" . $mecAsig[9] . "'," . intval($trabajoHrs[9]). ",'"
        . $refac[0] . "'," . floatval($precioRef[0]) .",'"
        . $refac[1] . "'," . floatval($precioRef[1]) .",'"
        . $refac[2] . "'," . floatval($precioRef[2]) .",'"
        . $refac[3] . "'," . floatval($precioRef[3]) .",'"
        . $refac[4] . "'," . floatval($precioRef[4]) .",'"
        . $refac[5] . "'," . floatval($precioRef[5]) .",'"
        . $refac[6] . "'," . floatval($precioRef[6]) .",'"
        . $refac[7] . "'," . floatval($precioRef[7]) .",'"
        . $refac[8] . "'," . floatval($precioRef[8]) .",'"
        . $refac[9] . "'," . floatval($precioRef[9]) .","
        . intval($_POST['tiempoEsti']).")";

    $db_con->exec($sql);
} catch(Exception $e) {
    echo "Error: " . $e->getMessage();
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
} finally{
    $db_con = null;
    header('Location: ../administrator.php');
}
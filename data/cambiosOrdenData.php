<?php
require_once 'dbconfig.php';
$folio = $_POST['folio'];
try {
    $sql = "SELECT PLACAS, TRABAJO_REAL1, TRABAJO_REAL2, TRABAJO_REAL3, TRABAJO_REAL4, TRABAJO_REAL5, TRABAJO_REAL6, 
TRABAJO_REAL7, TRABAJO_REAL8, TRABAJO_REAL9, TRABAJO_REAL10, 
MEC_ASIG1, MEC_ASIG2, MEC_ASIG3, MEC_ASIG4, MEC_ASIG5, MEC_ASIG6, MEC_ASIG7, MEC_ASIG8, MEC_ASIG9, MEC_ASIG10, 
TRABAJO_HR1, TRABAJO_HR2, TRABAJO_HR3, TRABAJO_HR4, TRABAJO_HR5, TRABAJO_HR6, TRABAJO_HR7, TRABAJO_HR8, TRABAJO_HR9, TRABAJO_HR10, 
REF_REQ1, REF_REQ2, REF_REQ3, REF_REQ4, REF_REQ5, REF_REQ6, REF_REQ7, REF_REQ8, REF_REQ9, REF_REQ10, 
REF_PREC1, REF_PREC2, REF_PREC3, REF_PREC4, REF_PREC5, REF_PREC6, REF_PREC7, REF_PREC8, REF_PREC9, REF_PREC10, 
T_ENTREGA FROM ORDEN_TRABAJO where FOLIO_ING=:folio";
    $query = $db_con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $query->bindParam(':folio', $folio, PDO::PARAM_INT);
    $query->execute();
    while($fila = $query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)){
        $resultado = $fila[0] . "|" .$fila[1] . "|" . $fila[2] . "|" . $fila[3] . "|" . $fila[4] . "|" . $fila[5] .
            "|" . $fila[6] . "|" . $fila[7] . "|" . $fila[8] . "|" . $fila[9] . "|" . $fila[10] .
            "|" .$fila[11] . "|" . $fila[12] . "|" . $fila[13] . "|" . $fila[14] . "|" . $fila[15] .
            "|" . $fila[16] . "|" . $fila[17] . "|" . $fila[18] . "|" . $fila[19] . "|" . $fila[20].
            "|" .$fila[21] . "|" . $fila[22] . "|" . $fila[23] . "|" . $fila[24] . "|" . $fila[25] .
            "|" . $fila[26] . "|" . $fila[27] . "|" . $fila[28] . "|" . $fila[29] . "|" . $fila[30].
            "|" .$fila[31] . "|" . $fila[32] . "|" . $fila[33] . "|" . $fila[34] . "|" . $fila[35] .
            "|" . $fila[36] . "|" . $fila[37] . "|" . $fila[38] . "|" . $fila[39] . "|" . $fila[40].
            "|" .$fila[41] . "|" . $fila[42] . "|" . $fila[43] . "|" . $fila[44] . "|" . $fila[45] .
            "|" . $fila[46] . "|" . $fila[47] . "|" . $fila[48] . "|" . $fila[49] . "|" . $fila[50] . "|" . $fila[51];
    }
    echo ($resultado);
} catch (PDOException $e) {
    echo 'PDOException : '.  $e->getMessage();
}
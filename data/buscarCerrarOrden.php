<?php
require_once 'dbconfig.php';
$idOrden = $_POST['idOrden'];
try {

    $sql = "select AUTO_INGR.CLIENTE, AUTO_INGR.RESPONSABLE, AUTO_INGR.FECHA_INGR, AUTO_INGR.KM,
AUTO_HIST.MARCA, AUTO_HIST.MODELO, AUTO_HIST.PLACAS, ORDEN_TRABAJO.FOLIO_ING,
ORDEN_TRABAJO.MEC_ASIG1, ORDEN_TRABAJO.MEC_ASIG2, ORDEN_TRABAJO.MEC_ASIG3, ORDEN_TRABAJO.MEC_ASIG4,
ORDEN_TRABAJO.MEC_ASIG5, ORDEN_TRABAJO.MEC_ASIG6, ORDEN_TRABAJO.MEC_ASIG7, ORDEN_TRABAJO.MEC_ASIG8,
ORDEN_TRABAJO.MEC_ASIG9, ORDEN_TRABAJO.MEC_ASIG10, ORDEN_TRABAJO.TRABAJO_REAL1, ORDEN_TRABAJO.TRABAJO_REAL2, 
ORDEN_TRABAJO.TRABAJO_REAL3, ORDEN_TRABAJO.TRABAJO_REAL4, ORDEN_TRABAJO.TRABAJO_REAL5, ORDEN_TRABAJO.TRABAJO_REAL6, 
ORDEN_TRABAJO.TRABAJO_REAL7, ORDEN_TRABAJO.TRABAJO_REAL8, ORDEN_TRABAJO.TRABAJO_REAL9, ORDEN_TRABAJO.TRABAJO_REAL10,
ORDEN_TRABAJO.TRABAJO_HR1, ORDEN_TRABAJO.TRABAJO_HR2, 
ORDEN_TRABAJO.TRABAJO_HR3, ORDEN_TRABAJO.TRABAJO_HR4, ORDEN_TRABAJO.TRABAJO_HR5, ORDEN_TRABAJO.TRABAJO_HR6, 
ORDEN_TRABAJO.TRABAJO_HR7, ORDEN_TRABAJO.TRABAJO_HR8, ORDEN_TRABAJO.TRABAJO_HR9, ORDEN_TRABAJO.TRABAJO_HR10,
ORDEN_TRABAJO.REF_REQ1, ORDEN_TRABAJO.REF_REQ2, 
ORDEN_TRABAJO.REF_REQ3, ORDEN_TRABAJO.REF_REQ4, ORDEN_TRABAJO.REF_REQ5, ORDEN_TRABAJO.REF_REQ6, 
ORDEN_TRABAJO.REF_REQ7, ORDEN_TRABAJO.REF_REQ8, ORDEN_TRABAJO.REF_REQ9, ORDEN_TRABAJO.REF_REQ10,
ORDEN_TRABAJO.REF_PREC1, ORDEN_TRABAJO.REF_PREC2, 
ORDEN_TRABAJO.REF_PREC3, ORDEN_TRABAJO.REF_PREC4, ORDEN_TRABAJO.REF_PREC5, ORDEN_TRABAJO.REF_PREC6, 
ORDEN_TRABAJO.REF_PREC7, ORDEN_TRABAJO.REF_PREC8, ORDEN_TRABAJO.REF_PREC9, ORDEN_TRABAJO.REF_PREC10
from AUTO_HIST, ORDEN_TRABAJO, AUTO_INGR where AUTO_HIST.PLACAS = ORDEN_TRABAJO.PLACAS and 
AUTO_HIST.PLACAS = AUTO_INGR.PLACAS AND
AUTO_HIST.PLACAS = ( select ORDEN_TRABAJO.PLACAS from ORDEN_TRABAJO where ID_ORDEN = :id_orden);";

    $query = $db_con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $query->bindParam(':id_orden', $idOrden, PDO::PARAM_INT);
    $query->execute();
    while($fila = $query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)){
        $resultado = $fila[0] . "," . $fila[1] . "," . $fila[2] . "," . $fila[3] . "," . $fila[4] . "," . $fila[5] . "," . $fila[6]
            . "|" ;
            $resultado = $resultado . $fila[7] . "|Mecanicos: ";
            for($i = 8; $i < 18; $i++){
                if (!empty($fila[$i])) {
                    $resultado = $resultado . $fila[$i] . ",";
                }
            }
            $resultado = substr($resultado, 0 , (strlen($resultado) - 1));
            $resultado = $resultado . "| Trabajos realizados: ";
            for($i = 18; $i < 28; $i++){
                if (!empty($fila[$i])) {
                    $resultado = $resultado . $fila[$i] . ",";
                }
            }
            $resultado = substr($resultado, 0 , (strlen($resultado) - 1));
            $resultado = $resultado . "|";
            for($i = 28; $i < 38; $i++){
                if ($fila[$i] != 0) {
                    $resultado = $resultado . $fila[$i] . ",";
                }
            }
            $resultado = substr($resultado, 0 , (strlen($resultado) - 1));
            $resultado = $resultado . "|";
            for($i = 38; $i < 48; $i++){
                if (!empty($fila[$i])) {
                    $resultado = $resultado . $fila[$i] . ",";
                }
            }
            $resultado = substr($resultado, 0 , (strlen($resultado) - 1));
            $resultado = $resultado . "|";
            for($i = 48; $i < 58; $i++){
                if (!empty($fila[$i])) {
                    $resultado = $resultado . $fila[$i] . ",";
                }
            }
            $resultado = substr($resultado, 0 , (strlen($resultado) - 1));
    }



    echo ($resultado);
} catch (PDOException $e) {
    echo 'PDOException : '.  $e->getMessage();
}
<?php
require_once 'dbconfig.php';
$folio = $_POST['folio'];
try {
    $sql = "select RESPONSABLE, FECHA_INGR, ESTATUS, TRABAJO_SOL, MEC_RESP, KM, CLIENTE FROM AUTO_INGR WHERE FOLIO_ING = :folio";
    $query = $db_con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $query->bindParam(':folio', $folio, PDO::PARAM_INT);
    $query->execute();
    while($fila = $query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)){
        $resultado = $fila[0] . "|" . $fila[1] . "|" . $fila[2] . "|" . $fila[3] . "|" . $fila[4] . "|" . $fila[5] . "|" . $fila[6];
    }
    echo ($resultado);
} catch (PDOException $e) {
    echo 'PDOException : '.  $e->getMessage();
}
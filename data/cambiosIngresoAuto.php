<?php
try {
require_once 'dbconfig.php';

$folio = $_POST['folio'];
$responsable = $_POST['responsable'];
$fechaIngreso = $_POST['fechaIngreso'];
$status = $_POST['status'];
$trabajoSol = $_POST['trabajoSol'];
$mecanico = $_POST['mecanico'];
$cliente = $_POST['cliente'];
$km = $_POST['km'];

    $sentencia = $db_con->prepare("update AUTO_INGR set RESPONSABLE=:responsable, FECHA_INGR=:fecha, ESTATUS=:status, TRABAJO_SOL=:trabajo, MEC_RESP=:mecanico, KM=:km, CLIENTE=:cliente where FOLIO_ING=:folio");
    $sentencia->bindParam(':folio', $folio);
    $sentencia->bindParam(':responsable', $responsable);
    $sentencia->bindParam(':fecha', $fechaIngreso);
    $sentencia->bindParam(':status', $status);
    $sentencia->bindParam(':trabajo', $trabajoSol);
    $sentencia->bindParam(':mecanico', $mecanico);
    $sentencia->bindParam(':km', $km);
    $sentencia->bindParam(':cliente', $cliente);

    $sentencia->execute();

    $sql = "select RESPONSABLE, FECHA_INGR, ESTATUS, TRABAJO_SOL, MEC_RESP, KM, CLIENTE FROM AUTO_INGR WHERE FOLIO_ING = :folio";
    $query = $db_con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $query->bindParam(':folio', $folio, PDO::PARAM_INT);
    $query->execute();
    while($fila = $query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)){
        $resultado = $fila[0] . "|" . $fila[1] . "|" . $fila[2] . "|" . $fila[3] . "|" . $fila[4] . "|" . $fila[5] . "|" . $fila[6];
    }
    echo ($resultado);
}
catch(PDOException $e){
    echo $e->getMessage();
}
<?php
require_once 'dbconfig.php';
$placa = $_POST['placa'];
try {
    $sql = "select * FROM AUTO_HIST WHERE PLACAS = :placa";
    $query = $db_con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $query->bindParam(':placa', $placa, PDO::PARAM_INT);
    $query->execute();
    while($fila = $query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)){
        $resultado = $fila[1] . "|" . $fila[2] . "|" . $fila[3] . "|" . $fila[4] . "|" . $fila[5] . "|" . $fila[6] . "|" . $fila[7] . "|" . $fila[8];
    }
    echo ($resultado);
} catch (PDOException $e) {
    echo 'PDOException : '.  $e->getMessage();
}
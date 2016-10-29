<?php
require_once 'dbconfig.php';
$placa = $_GET['placa'];
echo ($placa);
try {
    $sql = "DELETE FROM AUTO_HIST WHERE PLACAS = :placa";
    $query = $db_con->prepare($sql);
    $query->bindParam(':placa', $placa, PDO::PARAM_INT);
    $query->execute();
} catch (PDOException $e) {
    echo 'PDOException : '.  $e->getMessage();
}
header('Location: ../delete_action.php');
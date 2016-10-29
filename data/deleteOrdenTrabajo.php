<?php
require_once 'dbconfig.php';
$folio = $_GET['folio'];
echo ($placa);
try {
    $sql = "DELETE FROM ORDEN_TRABAJO WHERE FOLIO_ING = :folio";
    $query = $db_con->prepare($sql);
    $query->bindParam(':folio', $folio, PDO::PARAM_INT);
    $query->execute();
} catch (PDOException $e) {
    echo 'PDOException : '.  $e->getMessage();
}
header('Location: ../administrator.html');
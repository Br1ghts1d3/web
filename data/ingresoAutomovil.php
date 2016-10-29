<?php

require_once 'dbconfig.php';

try {
    $prep = array();
    foreach ($_POST['autoAlta'] as $k => $v) {
        $prep[$k] = $v;
        $k++;
    }
    $mecanico = $_POST['mecanico'];

    $sentencia = $db_con->prepare("insert into AUTO_INGR (PLACAS, RESPONSABLE, FECHA_INGR, ESTATUS, TRABAJO_SOL, FOLIO_ING, MEC_RESP, KM, CLIENTE) VALUES (:placas, :responsable, :fecha, :status, :trabajo, :folio, :mecanico, :km, :cliente)");

    $sentencia->bindParam(':placas', $placas);
    $sentencia->bindParam(':cliente', $cliente);
    $sentencia->bindParam(':km', $km);
    $sentencia->bindParam(':responsable', $resp);
    $sentencia->bindParam(':fecha', $fecha);
    $sentencia->bindParam(':status', $status);
    $sentencia->bindParam(':trabajo', $trabajo);
    $sentencia->bindParam(':folio', $folio);
    $sentencia->bindParam(':mecanico', $mecanico);
    
    
    

    $placas = $prep[0];
    $cliente = $prep[1];
    $km = $prep[2];
    $resp = $prep[3];
    $fecha = $prep[4];
    $status = $prep[5];
    $trabajo = $prep[6];
    $folio = $prep[7];
    
    

    $sentencia->execute();
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$db_con = null;
header('Location: ../administrator.php');
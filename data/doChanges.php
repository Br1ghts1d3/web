<?php

require_once 'dbconfig.php';

$placa2 = $_POST['placa'];
$chasis2 = $_POST['chasis'];
$motor2 = $_POST['motor'];
$marca2 = $_POST['marca'];
$modelo2 = $_POST['modelo'];
$year2 = $_POST['year'];
$color2 = $_POST['color'];
$gas2 = $_POST['gas'];
try {
$sentencia = $db_con->prepare("update AUTO_HIST set NS_CHASIS=:chasis, NS_MOTOR=:motor, MARCA=:marca, MODELO=:modelo, AGE=:age, COLOR=:color, COMBUSTIBLE=:combustible where PLACAS=:placa");
$sentencia->bindParam(':placa', $placa2);
$sentencia->bindParam(':chasis', $chasis2);
$sentencia->bindParam(':motor', $motor2);
$sentencia->bindParam(':marca', $marca2);
$sentencia->bindParam(':modelo', $modelo2);
$sentencia->bindParam(':age', $year2);
$sentencia->bindParam(':color', $color2);
$sentencia->bindParam(':combustible', $gas2);

$sentencia->execute();

$sql = "select * FROM AUTO_HIST WHERE PLACAS = :placa";
$query = $db_con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
$query->bindParam(':placa', $placa2, PDO::PARAM_INT);
$query->execute();
while($fila = $query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)){
    $resultado = $fila[1] . "|" . $fila[2] . "|" . $fila[3] . "|" . $fila[4] . "|" . $fila[5] . "|" . $fila[6] . "|" . $fila[7] . "|" . $fila[8];
}
echo ($resultado);
}
catch(PDOException $e){
    echo $e->getMessage();
}
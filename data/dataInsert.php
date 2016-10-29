<?php

require_once 'dbconfig.php';

try {
    $prep = array();
    foreach ($_POST['auto'] as $k => $v) {
        $prep[$k] = $v;
        $k++;
    }

    $sentencia = $db_con->prepare("insert into AUTO_HIST (PLACAS, NS_CHASIS, NS_MOTOR, MARCA, MODELO, AGE, COLOR, COMBUSTIBLE) 
                                        VALUES (:placas, :ns_chasis, :ns_motor, :marca, :modelo, :age, :color, :combustible)");

    $sentencia->bindParam(':placas', $placas);
    $sentencia->bindParam(':ns_chasis', $ns_chasis);
    $sentencia->bindParam(':ns_motor', $ns_motor);
    $sentencia->bindParam(':marca', $marca);
    $sentencia->bindParam(':modelo', $modelo);
    $sentencia->bindParam(':age', $age);
    $sentencia->bindParam(':color', $color);
    $sentencia->bindParam(':combustible', $combustible);

    $placas = $prep[0];
    $ns_chasis = $prep[1];
    $ns_motor = $prep[2];
    $marca = $prep[3];
    $modelo = $prep[4];
    $age = $prep[5];
    $color = $prep[6];
    $combustible = $prep[7];

    $sentencia->execute();
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $db_con = null;
    header('Location: ../administrator.php');
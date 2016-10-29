<?php

require_once 'data/dbconfig.php';
$statement = $db_con->prepare("SELECT ID_ORDEN, PLACAS, FOLIO_ING, CONCAT( TRABAJO_REAL1,'\n', TRABAJO_REAL2 ,'\n', TRABAJO_REAL3,'\n', TRABAJO_REAL4 ,'\n', TRABAJO_REAL5,'\n', TRABAJO_REAL6 ,'\n', TRABAJO_REAL7,'\n', TRABAJO_REAL8  ,'\n',TRABAJO_REAL9,'\n', TRABAJO_REAL10 )as TRABAJO_REAL , CONCAT( MEC_ASIG1,'\n', MEC_ASIG2 ,'\n', MEC_ASIG3,'\n', MEC_ASIG4 ,'\n',   MEC_ASIG5,'\n', MEC_ASIG6 ,'\n', MEC_ASIG7,'\n', MEC_ASIG8  ,'\n', MEC_ASIG9,'\n', MEC_ASIG10 )as MEC_ASIG, CONCAT( TRABAJO_HR1,'\n', TRABAJO_HR2 ,'\n', TRABAJO_HR3,'\n', TRABAJO_HR4 ,'\n', TRABAJO_HR5,'\n', TRABAJO_HR6 ,'\n', TRABAJO_HR7,'\n', TRABAJO_HR8  ,'\n',   TRABAJO_HR9,'\n', TRABAJO_HR10 )as TRABAJO_HR, CONCAT( REF_REQ1,'\n', REF_REQ2 ,'\n', REF_REQ3,'\n', REF_REQ4 ,'\n', REF_REQ5,'\n', REF_REQ6 ,'\n', REF_REQ7,'\n', REF_REQ8  ,'\n', REF_REQ9,'\n', REF_REQ10 )as REF_REQ,CONCAT( REF_PREC1,'\n', REF_PREC2 ,'\n', REF_PREC3,'\n', REF_PREC4 ,'\n', REF_PREC5,'\n', REF_PREC6 ,'\n', REF_PREC7,'\n', REF_PREC8  ,'\n', REF_PREC9,'\n', REF_PREC10 )as REF_PREC, T_ENTREGA FROM ORDEN_TRABAJO");
$statement->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signin Template for Bootstrap</title>

    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/jquery-3.1.0.min.map"></script>
</head>
<body>
<br><br><br>
<div class="container" style="width: 1000px">

    <div class="panel panel-primary">
        <div class="panel-heading">Ordenes de trabajo</div>
        <div class="panel-body">
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>FOLIO ORDEN</th>
                <th>PLACAS</th>
                <th>FOLIO INGRESO</th>
                <th>TRABAJO REALIZADO</th>
                <th>MECANICO ASIGNADO</th>
                <th>TRABAJO POR HORA</th>
                <th>REFACCION REQUERIDA</th>
                <th>PRECIO DE REFACCIONES</th>
                <th>TIEMPO ENTREGA</th>
            </tr>
            </thead>
            <tbody>
            <?php while( $row = $statement->fetch(PDO::FETCH_ASSOC) ) { ?>
                <tr>
                    <td><?php echo $row['ID_ORDEN']; ?></td>
                    <td><?php echo $row['PLACAS']; ?></td>
                    <td><?php echo $row['FOLIO_ING']; ?></td>
                    <td><?php echo $row['TRABAJO_REAL']; ?></td>
                    <td><?php echo $row['MEC_ASIG']; ?></td>
                    <td><?php echo $row['TRABAJO_HR']; ?></td>
                    <td><?php echo $row['REF_REQ']; ?></td>
                    <td><?php echo $row['REF_PREC']; ?></td>
                    <td><?php echo $row['T_ENTREGA']; ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
<br><br>
<span class="input-group-btn">
                        <button class="btn btn-success" type="button" onclick="regresar()">Regresar</button>
                    </span>
<br>
</div>
<script>
    function regresar() {
        location.href="administrator.php";
    }
</script>
</body>
</html>

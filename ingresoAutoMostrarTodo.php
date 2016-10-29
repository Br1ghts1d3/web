<?php

require_once 'data/dbconfig.php';
$statement = $db_con->prepare("select * from AUTO_INGR");
$statement->execute();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mostrar Autom&oacute;vil</title>

    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/jquery-3.1.0.min.map"></script>
</head>
<body>
<br><br><br>
<div class="container">
    <!--<div class="row">
        <div class="col-lg-6">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Ingresa la placa del auto a eliminar" id="placa">
                <span class="input-group-btn">
                        <button class="btn btn-default" type="button" onclick="delete_member()">Eliminar</button>
                    </span>

            </div><!-- /input-group -->



    <div class="panel panel-primary">
        <div class="panel-heading">Ingreso de Autos</div>
        <div class="panel-body">
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>PLACAS</th>
                <th>CLIENTE</th>
                <th>KILOMETROS</th>
                <th>RESPONSABLE</th>
                <th>FECHA INGRESO</th>
                <th>STATUS</th>
                <th>TRABAJO SOLICITADO</th>
                <th>FOLIO DE INGRESO</th>
                <th>MECANICO RESPONSABLE</th>
            </tr>
            </thead>
            <tbody>
            <?php while( $row = $statement->fetch(PDO::FETCH_ASSOC) ) { ?>
                <tr>
                    <td><?php echo $row['PLACAS']; ?></td>
                    <td><?php echo $row['CLIENTE']; ?></td>
                    <td><?php echo $row['KM']; ?></td>
                    <td><?php echo $row['RESPONSABLE']; ?></td>
                    <td><?php echo $row['FECHA_INGR']; ?></td>
                    <td><?php echo $row['ESTATUS']; ?></td>
                    <td><?php echo $row['TRABAJO_SOL']; ?></td>
                    <td><?php echo $row['FOLIO_ING']; ?></td>
                    <td><?php echo $row['MEC_RESP']; ?></td>                 
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

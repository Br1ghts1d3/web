<?php

require_once 'data/dbconfig.php';
$statement = $db_con->prepare("select * from AUTO_HIST");
$statement->execute();

?>

<!DOCTYPE html>
<html lang="ençs">
<head>
    <meta charset="UTF-8">
    <title>Autom&oacute;vil Mostrar</title>

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
        <div class="panel-heading">Automoviles</div>
        <div class="panel-body">
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>PLACAS</th>
                <th>CHASIS</th>
                <th>MOTOR</th>
                <th>MARCA</th>
                <th>MODELO</th>
                <th>A&Ntilde;O</th>
                <th>COLOR</th>
                <th>COMBUSTIBLE</th>
            </tr>
            </thead>
            <tbody>
            <?php while( $row = $statement->fetch(PDO::FETCH_ASSOC) ) { ?>
                <tr>
                    <td><?php echo $row['PLACAS']; ?></td>
                    <td><?php echo $row['NS_CHASIS']; ?></td>
                    <td><?php echo $row['NS_MOTOR']; ?></td>
                    <td><?php echo $row['MARCA']; ?></td>
                    <td><?php echo $row['MODELO']; ?></td>
                    <td><?php echo $row['AGE']; ?></td>
                    <td><?php echo $row['COLOR']; ?></td>
                    <td><?php echo $row['COMBUSTIBLE']; ?></td>
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
<?php

require_once 'data/dbconfig.php';
$sql = 'SELECT NOMBRE FROM MECANICOS';
$result = $db_con->query($sql);
$rows = $result->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta Autom&oacute;vil</title>
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker();
        } );
    </script>
</head>
<body>
<br><br><br>
<br><br><br>
<div class="container">
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">Ingreso de autom&oacute;vil</div>
            <div class="panel-body">
                <form accept-charset="UTF-8" action="data/ingresoAutomovil.php" class="simple_form new_user_basic" enctype="multipart/form-data" id="new_user_basic" method="post" novalidate="novalidate">
                    <div style="display:none">
                        <input name="utf8" type="hidden" value="&#x2713;" />
                        <input name="authenticity_token" type="hidden" value="oTQC34gMWrjaJsUoRXw1pr4b6jgqBhBw/1HgGTzlL64=" />
                    </div>                  
                    <div class="form-group email required user_basic_email">
                        <label class="email required control-label">Placa</label>
                        <input class="string email required form-control" name="autoAlta[]" placeholder="Placa del veh&iacute;culo" type="test" />
                    </div>
                    <div class="form-group email required user_basic_email">
                        <label class="email required control-label">Cliente</label>
                        <input class="string email required form-control" name="autoAlta[]" placeholder="Cliente" type="test" />
                    </div>
                    <div class="form-group email required user_basic_email">
                        <label class="email required control-label">Kilometros</label>
                        <input class="string email required form-control" name="autoAlta[]" placeholder="Kilometros" type="test" />
                    </div>
                    <div class="form-group email required user_basic_email">
                        <label class="email required control-label">Responsable</label>
                        <input class="string email required form-control" name="autoAlta[]" placeholder="Responsable" type="test" />
                    </div>
                    <div class="form-group email required user_basic_email">
                        <label class="email required control-label">Fecha de ingreso</label>
                        <input class="string email required form-control" name="autoAlta[]" placeholder="Fecha de ingreso" type="test " id="datepicker"/>
                    </div>
                    <div class="form-group email required user_basic_email">
                        <label class="email required control-label">Estatus</label>
                        <input class="string email required form-control" name="autoAlta[]" placeholder="Estatus" type="test" />
                    </div>
                    <div class="form-group email required user_basic_email">
                        <label class="email required control-label">Trabajo solicitado</label>
                        <input class="string email required form-control" name="autoAlta[]" placeholder="Trabajo solicitado" type="test" />
                    </div>
                    <div class="form-group email required user_basic_email">
                        <label class="email required control-label">Folio de ingreso</label>
                        <input class="string email required form-control" name="autoAlta[]" placeholder="Folio de ingreso" type="test" />
                    </div>
                    <div class="dropdown">
                        <label class="email required control-label">Mecanico responsable</label><br>
                        <select class="selectpicker" name="mecanico">
                            <?php
                            foreach ($rows as $row) {
                                echo '<option>'.$row['NOMBRE'].'</option>';
                            }
                            ?>
                        </select>

                    </div>
                    <br>
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit">Aceptar</button>
                    </span>
                    <span class="input-group-btn">
                        <button class="btn btn-success" type="button" onclick="regresar()">Regresar</button>
                    </span>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function regresar() {
        location.href="administrator.php";
    }
</script>
</body>
</html>
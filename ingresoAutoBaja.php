<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Baja Autom&oacute;vil</title>

    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/jquery-3.1.0.min.map"></script>
</head>
<body>
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Ingresa el folio del auto a eliminar" id="folio">
                <span class="input-group-btn">
                        <button class="btn btn-default" type="button" onclick="delete_member()">Eliminar</button>
                    </span>

            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->

    <br><br>
    <span class="input-group-btn">
                        <button class="btn btn-default" type="button" onclick="regresar()">Regresar</button>
                    </span>
    <br>
    </div>
<script>
    function delete_member() {
        folioSend = document.getElementById('folio').value;
        if (confirm('Borrar ingreso del automovil con el folio: ' + folioSend + '')) {
            location.href="data/deleteIngresoAuto.php?folio=" + folioSend;
        }
    }

    function regresar() {
        location.href="administrator.php";
    }
</script>
</body>
</html>


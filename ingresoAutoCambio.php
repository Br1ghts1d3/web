<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cambio Autom&oacute;vil</title>

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
                <input type="text" class="form-control" placeholder="Ingresa el folio de ingreso" id="folio">
                <span class="input-group-btn">
                        <button class="btn btn-default" type="button" id="boton">Buscar</button>
                    </span>

            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->

    <br><br>
    <br>
    <div style="width: 300px;">
        <label class="email required control-label">Cliente</label>
        <input class="form-control" type="test" id="cliente"/>
        <br>
        <label class="email required control-label">Kil&oacute;metros</label>
        <input class="form-control" type="test" id="km"/>
        <br>
        <label class="email required control-label">Responsable</label>
        <input class="form-control" type="test" id="responsable"/>
        <br>
        <label class="email required control-label">Fecha de ingreso</label>
        <input class="form-control" type="test" id="fechaIngreso" />
        <br>
        <label class="email required control-label">Status</label>
        <input class="form-control" type="test" id="status"/>
        <br>
        <label class="email required control-label">Trabajo solicitado</label>
        <input class="form-control" type="test" id="trabajoSol"/>
        <br>
        <label class="email required control-label">Mecanico responsable</label>
        <input class="form-control" type="test" id="mecanico"/>
        <br>
    </div>
    <span class="input-group-btn">
        <button class="btn btn-primary" type="button" id="aplicar">Aplicar cambios</button>
    </span>
    <span class="input-group-btn">
        <button class="btn btn-success" type="button" onclick="regresar()">Regresar</button>
    </span>
</div>
<script>
    $(document).ready(function(){
        $("#boton").click(function(){

            parametro = {"folio" : document.getElementById('folio').value}
            $.ajax({

                type : "POST",
                url : "data/cambioIngreso.php" ,
                traditional : true,
                data : parametro,
                success : function(arrayPHP){
                    carArray = arrayPHP.split("|");
                    document.getElementById('responsable').value = carArray[0];
                    document.getElementById('fechaIngreso').value = carArray[1];
                    document.getElementById('status').value = carArray[2];
                    document.getElementById('trabajoSol').value = carArray[3];
                    document.getElementById('mecanico').value = carArray[4];
                    document.getElementById('km').value = carArray[5];
                    document.getElementById('cliente').value = carArray[6];
                },

            });

        })

    })
</script>
<script>
    function regresar() {
        location.href="administrator.php";
    }
</script>
<script>
    $(document).ready(function(){
        $("#aplicar").click(function(){

            parametros = {
                "folio" : document.getElementById('folio').value,
                "responsable" : document.getElementById('responsable').value,
                "fechaIngreso" : document.getElementById('fechaIngreso').value,
                "status" : document.getElementById('status').value,
                "trabajoSol" : document.getElementById('trabajoSol').value,
                "mecanico" : document.getElementById('mecanico').value,
                "km" : document.getElementById('km').value,
                "cliente" : document.getElementById('cliente').value
            }
            $.ajax({

                type : "POST",
                url : "data/cambiosIngresoAuto.php" ,
                traditional : true,
                data : parametros,
                success : function(array2){
                    carArray2 = array2.split("|");
                    document.getElementById('responsable').value = carArray2[0];
                    document.getElementById('fechaIngreso').value = carArray2[1];
                    document.getElementById('status').value = carArray2[2];
                    document.getElementById('trabajoSol').value = carArray2[3];
                    document.getElementById('mecanico').value = carArray2[4];
                    document.getElementById('km').value = carArray[5];
                    document.getElementById('cliente').value = carArray[6];
                    alert("Los cambios se aplicarion exitosamente");
                },

            });

        })

    })
</script>
</body>
</html>
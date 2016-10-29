<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Autom&oacute;vil Cambios</title>

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
                <input type="text" class="form-control" placeholder="Ingresa la placa del auto a modificar" id="placa">
                <span class="input-group-btn">
                        <button class="btn btn-default" type="button" id="boton">Buscar</button>
                    </span>

            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->

    <br><br>
    <br>
    <div style="width: 300px;">
        <label class="email required control-label">No de chasis</label>
        <input class="form-control" type="test" id="chasis"/>
        <br>
        <label class="email required control-label">No de motor</label>
        <input class="form-control" type="test" id="motor"/>
        <br>
        <label class="email required control-label">Marca</label>
        <input class="form-control" type="test" id="marca"/>
        <br>
        <label class="email required control-label">Modelo</label>
        <input class="form-control" type="test" id="modelo"/>
        <br>
        <label class="email required control-label">A&ntilde;o</label>
        <input class="form-control" type="test" id="year"/>
        <br>
        <label class="email required control-label">Color</label>
        <input class="form-control" type="test" id="color"/>
        <br>
        <label class="email required control-label">Combustible</label>
        <input class="form-control" type="test" id="gas"/>
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

                parametro = {"placa" : document.getElementById('placa').value}
                $.ajax({

                    type : "POST",
                    url : "data/cambiosData.php" ,
                    traditional : true,
                    data : parametro,
                    success : function(arrayPHP){
                        carArray = arrayPHP.split("|");
                        document.getElementById('chasis').value = carArray[1];
                        document.getElementById('motor').value = carArray[2];
                        document.getElementById('marca').value = carArray[3];
                        document.getElementById('modelo').value = carArray[4];
                        document.getElementById('year').value = carArray[5];
                        document.getElementById('color').value = carArray[6];
                        document.getElementById('gas').value = carArray[7];
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
                    "placa" : document.getElementById('placa').value,
                    "chasis" : document.getElementById('chasis').value,
                    "motor" : document.getElementById('motor').value,
                    "marca" : document.getElementById('marca').value,
                    "modelo" : document.getElementById('modelo').value,
                    "year" : document.getElementById('year').value,
                    "color" : document.getElementById('color').value,
                    "gas" : document.getElementById('gas').value
                        }
            $.ajax({

                type : "POST",
                url : "data/doChanges.php" ,
                traditional : true,
                data : parametros,
                success : function(array2){
                    carArray2 = array2.split("|");
                    document.getElementById('chasis').value = carArray2[1];
                    document.getElementById('motor').value = carArray2[2];
                    document.getElementById('marca').value = carArray2[3];
                    document.getElementById('modelo').value = carArray2[4];
                    document.getElementById('year').value = carArray2[5];
                    document.getElementById('color').value = carArray2[6];
                    document.getElementById('gas').value = carArray2[7];
                    alert("Los cambios se aplicarion exitosamente");
                },

            });

        })

    })
</script>
</body>
</html>

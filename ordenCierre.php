<?php

require_once 'data/dbconfig.php';
$statement = $db_con->prepare("select * from CIERRE_ORDEN");
$statement->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signin Template for Bootstrap</title>

    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/radioButton.css" rel="stylesheet">
    <script src="js/jquery-3.1.0.min.js"></script>
    <style>
        div.rePrint{
            position: relative;
            height: 100px;
            width: 800px;
            display: inline-block;
        }
        #reprint{
            max-width: 200px;
        }
    </style>
</head>
<body>
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Ingresa el id de la orden" id="id_orden">
                <span class="input-group-btn">
                        <button class="btn btn-default" type="button" id="boton">Buscar</button>
                    </span>

            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
    <br><br>
    <div class="panel panel-primary">
        <div class="panel-heading">Automoviles</div>
        <div class="panel-body">
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>Datos Automovil</th>
                <th>Datos Orden</th>
                <th>Costo de refacciones</th>
                <th>% de utilidad</th>
                <th>Total de refacciones</th>
                <th>Mano de obra</th>
                <th>Horas trabajadas</th>
                <th>Total x Mano</th>
                <th>Costo Subtotal</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td id="dAuto"></td>
                    <td id="dOrder"></td>
                    <td id="costoRefac"></td>
                    <td id="utlRef"></td>
                    <td id="totalRef"></td>
                    <td id="manObra"></td>
                    <td id="horasTrabajo"></td>
                    <td id="txMano"></td>
                    <td id="costSub"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="input-group">
                    <span class="label label-success">Costo de refacciones</span>
                    <input type="text" class="form-control" placeholder="Costo de refacciones" id="costoRef">
                    <br><br>
                    <span class="label label-success">% de utilidad</span>
                    <input type="text" class="form-control" placeholder="% de utilidad" id="pUtilidad">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="label label-success">Mano obra</span>
                    <input type="text" class="form-control" placeholder="Mano obra" id="manoO">
                    <br><br>
                    <span class="label label-success">Horas trabajadas</span>
                    <input type="text" class="form-control" placeholder="Horas trabajadas" id="hTrabajadas">
                </div>
                <br>
                <br>
                <span class="input-group-btn">
                    <button class="btn btn-warning" type="button" onclick="calcularTotales()">Calcular</button>
                </span>
            </div>
        </div>
        <div class="seleccion" style="display: block; position: relative; height: 100px; width: 100px; bottom: 0px; left:5px; right: 0; top:20px; padding: 0;">
            <span class="label label-danger">Selecciona el estilo para generar el PDF</span>
            <input type="radio" name="estilo" value="1" checked> Simple<br>
            <input type="radio" name="estilo" value="2"> Detallado<br>
            <input type="radio" name="estilo" value="3"> Precio
        </div>
    </div>


    <br><br>
    <br>
    <span class="input-group-btn">

        <button class="btn btn-primary" id="cerraOrd">Cerrar Orden</button>
    </span>

    <span class="input-group-btn">
        <button class="btn btn-success" type="button" onclick="regresar()">Regresar</button>

    </span>
    <br><br>

    <div class="panel panel-primary">
        <div class="panel-heading">Orden de trabajo</div>
        <div class="panel-body">
        </div>
        <table class="table" id="tabla">
            <thead>
            <tr>
                <th>ID Orden</th>
                <th>Datos Auto</th>
                <th>Datos Orden</th>
                <th>Total refacciones</th>
                <th>Total mano de obra</th>
                <th>Totoal horas trabajo</th>
                <th>SubTotal</th>
            </tr>
            </thead>
            <tbody>
            <?php while( $row = $statement->fetch(PDO::FETCH_ASSOC) ) {?>
                <tr>
                    <td><?php echo $row['ID_ORDEN']; ?></td>
                    <td><?php echo $row['DATOS_AUTO']; ?></td>
                    <td><?php
                        $ordenCierre = $row['DATOS_ORDEN'];

                            echo $ordenCierre;
                        ?></td>
                    <td><?php echo $row['TOT_REF']; ?></td>
                    <td><?php echo $row['TOT_MANO_O']; ?></td>
                    <td><?php echo $row['TOT_HRS_TRAB']; ?></td>
                    <td><?php echo $row['COST_SUBT']; ?></td>
                </tr>
            <?php }?>
            </tbody>
        </table>
    </div>
    <br>
    <br>
    <div class="rePrint">
        <span class="label label-success">Reimpresi&oacute;n de orden</span>
        <input type="text" class="form-control" placeholder="Ingresa id de la orden" id="reprint">
        <br>
        <button class="btn btn-danger" type="button" onclick="reimpresion()">Reimpresi&oacute;n</button>
    </div>
</div>
<br>
<br>
<script>
    function reimpresion() {
        window.location.href = 'data/reprint.php?id=' + document.getElementById('reprint').value;
    }
</script>
<script>
    $(document).ready(function(){
        $("#boton").click(function(){
            parametro = {"idOrden" : document.getElementById('id_orden').value}
            $.ajax({

                type : "POST",
                url : "data/buscarCerrarOrden.php" ,
                traditional : true,
                data : parametro,
                success : function(arrayPHP){
                    var carrArray = new Array();
                    carArray = arrayPHP.split("|");
                    var horasT = getTotalHoras(carArray[4]);
                    var precrefac = getTotalHoras(carArray[6]);
                    document.getElementById('dAuto').innerHTML = carArray[0];
                    document.getElementById('dOrder').innerHTML = carArray[1] + "|" + carArray[2] + "|Refacciones: " + carArray[5] +
                    "|" + carArray[3] +"|Total de refacciones: " + (carArray[6].split(",")).length + "|Total costo refacciones: " + precrefac +
                        "|Horas trabajadas: " + carArray[4] + "|Total de horas trabajadas: " + horasT;
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
    function getTotalHoras(horas) {
        var total = 0;
        var totHoras = new Array();
        totHoras = horas.split(",");
        for (i = 0; i < (totHoras.length); i++){
            total = total + parseInt(totHoras[i]);
        }
        return total.toString();
    }
</script>
<script>
    function calcularTotales() {
        costRef = document.getElementById('costoRef').value;
        perRef = document.getElementById('pUtilidad').value;
        document.getElementById('costoRefac').innerHTML = costRef;
        document.getElementById('utlRef').innerHTML = perRef;
        totalRefacciones = parseFloat(costRef/((100-parseInt(perRef))/100));
        totalRefacciones = totalRefacciones.toFixed(2);
        document.getElementById('totalRef').innerHTML = totalRefacciones;
        manoObra = document.getElementById('manoO').value;
        horasT = document.getElementById('hTrabajadas').value;
        document.getElementById('manObra').innerHTML = manoObra;
        document.getElementById('horasTrabajo').innerHTML = horasT;
        totalManoObra = (parseInt(manoObra) * parseInt(horasT));
        document.getElementById('txMano').innerHTML = totalManoObra;
        document.getElementById('costSub').innerHTML = parseFloat(parseFloat(totalRefacciones) + totalManoObra).toFixed(2);
    }
</script>
<script src="js/sendData.js"></script>
</body>
</html>
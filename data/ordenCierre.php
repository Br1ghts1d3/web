<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signin Template for Bootstrap</title>

    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-3.1.0.min.js"></script>
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
                <th>Refacciones</th>
                <th>%</th>
                <th>Tot_Ref</th>
                <th>Mano Obra</th>
                <th>%</th>
                <th>Tot Mano</th>
                <th>Horas Trabajadas</th>
                <th>%</th>
                <th>Tot Horas</th>
                <th>Cost_Subt</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td id="dAuto"></td>
                    <td id="dOrder"></td>
                    <td id="refac"></td>
                    <td id="percRefac"></td>
                    <td id="totRef"></td>
                    <td id="manoObra"></td>
                    <td id="perManoObra"></td>
                    <td id="totMano"></td>
                    <td id="horasTrabajo"></td>
                    <td id="perHorasT"></td>
                    <td id="totHoras"></td>
                    <td id="costSub"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <br><br>
    <br>
    <span class="input-group-btn">
        <button class="btn btn-primary" type="button" onclick="crearpdf()">Cerrar Orden</button>
    </span>
    <span class="input-group-btn">
        <button class="btn btn-success" type="button" onclick="regresar()">Regresar</button>
    </span>
</div>
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
                    carArray = carArray.filter(Boolean);
                    var datosOrden;
                    var datosAuto;
                    for (i = 1; i < 9; i++){
                        datosAuto += (i != 8) ? carArray[i] + " , " : carArray[i];    
                    }
                    datosOrden += carArray[9] + " , ";
                    for (i = 10; i < (carArray.length); i++){
                        if(carArray[i] != "0")
                            datosOrden += (i != (carArray.length-1)) ? carArray[i] + " , " : carArray[i];
                    } 
                    document.getElementById('dAuto').innerHTML = datosAuto.substr(9, datosAuto.length);
                    document.getElementById('dOrder').innerHTML = datosOrden.substr(9, datosOrden.length);
                },

            });

        })

    })
</script>
<script>
    function crearpdf(){
        window.location.href = 'data/ordenCierrePDF.php?datos=' + document.getElementById('dOrder').innerText;
    }
    /*$(document).ready(function(){
        $("#aplicar").click(function(){
            //parametro = {"order" : document.getElementById('dOrder').value}
            parametro = {"order" : "momo"}
            $.ajax({
                type : "POST",
                url : "data/ordenCierrePDF.php" ,
                traditional : true,
                data : parametro,
                success: function(data) {
                    alert(data);
                },
                error: function(){
                    alert('Error!');
                }

            });

        })

    })*/
</script>
<script>
    function regresar() {
        location.href="../administrator.php";
    }
</script>
</body>
</html>

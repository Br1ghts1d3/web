<?php

require_once 'data/dbconfig.php';
$sql = 'SELECT NOMBRE FROM MECANICOS';
$result = $db_con->query($sql);
$rows = $result->fetchAll();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
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
<div style="padding-left: 200px; width: 1800px">
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">Cambio orden de trabajo</div>
            <div class="panel-body">


                <form accept-charset="UTF-8" action="data/cambioOrdenTrabajo.php" class="simple_form new_user_basic" enctype="multipart/form-data" id="new_user_basic" method="post" novalidate="novalidate">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Ingresa el folio de ingreso" id="folio" name="folio">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button" id="boton">Buscar</button>
                            </span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group email required user_basic_email">
                        <label class="email required control-label">Placa</label>
                        <input class="string email required form-control" name="ordenAlta[]" placeholder="Placa del veh&iacute;culo" type="test" id="placa"/>
                    </div>
                    <div class="dropdown">
                        <label class="email required control-label">Trabajo realizado</label>
                            <input name="ordenAlta[]" placeholder="Trabajo realizado" type="test" id="j1"/>
                        <label class="email required control-label">Mec&aacute;nico</label>
                            <input name="ordenAlta[]" placeholder="Mec&aacute;nico" type="test" id="m1"/>
                        <label class="email required control-label">Tiempo</label>
                            <input name="ordenAlta[]" placeholder="Tiempo" type="test" id="t1"/>
                    </div>
                    <br>
                    <div class="dropdown">
                        <label class="email required control-label">Trabajo realizado</label>
                            <input name="ordenAlta[]" placeholder="Trabajo realizado" type="test" id="j2"/>
                        <label class="email required control-label">Mec&aacute;nico</label>
                            <input name="ordenAlta[]" placeholder="Mec&aacute;nico" type="test" id="m2"/>
                        <label class="email required control-label">Tiempo</label>
                            <input name="ordenAlta[]" placeholder="Tiempo" type="test" id="t2"/>
                    </div>
                    <br>
                    <div class="dropdown">
                        <label class="email required control-label">Trabajo realizado</label>
                            <input name="ordenAlta[]" placeholder="Trabajo realizado" type="test" id="j3"/>
                        <label class="email required control-label">Mec&aacute;nico</label>
                            <input name="ordenAlta[]" placeholder="Mec&aacute;nico" type="test" id="m3"/>
                        <label class="email required control-label">Tiempo</label>
                            <input name="ordenAlta[]" placeholder="Tiempo" type="test" id="t3"/>
                    </div>
                    <br>
                    <div class="dropdown">
                        <label class="email required control-label">Trabajo realizado</label>
                            <input name="ordenAlta[]" placeholder="Trabajo realizado" type="test" id="j4"/>
                        <label class="email required control-label">Mec&aacute;nico</label>
                            <input name="ordenAlta[]" placeholder="Mec&aacute;nico" type="test" id="m4"/>
                        <label class="email required control-label">Tiempo</label>
                            <input name="ordenAlta[]" placeholder="Tiempo" type="test" id="t4"/>
                    </div>
                    <br>
                    <div class="dropdown">
                        <label class="email required control-label">Trabajo realizado</label>
                            <input name="ordenAlta[]" placeholder="Trabajo realizado" type="test" id="j5"/>
                        <label class="email required control-label">Mec&aacute;nico</label>
                            <input name="ordenAlta[]" placeholder="Mec&aacute;nico" type="test" id="m5"/>
                        <label class="email required control-label">Tiempo</label>
                            <input name="ordenAlta[]" placeholder="Tiempo" type="test" id="t5"/>
                    </div>
                    <br>
                    <div class="dropdown">
                        <label class="email required control-label">Trabajo realizado</label>
                            <input name="ordenAlta[]" placeholder="Trabajo realizado" type="test" id="j6"/>
                        <label class="email required control-label">Mec&aacute;nico</label>
                            <input name="ordenAlta[]" placeholder="Mec&aacute;nico" type="test" id="m6"/>
                        <label class="email required control-label">Tiempo</label>
                            <input name="ordenAlta[]" placeholder="Tiempo" type="test" id="t6"/>
                    </div>
                    <br>
                    <div class="dropdown">
                        <label class="email required control-label">Trabajo realizado</label>
                            <input name="ordenAlta[]" placeholder="Trabajo realizado" type="test" id="j7"/>
                        <label class="email required control-label">Mec&aacute;nico</label>
                            <input name="ordenAlta[]" placeholder="Mec&aacute;nico" type="test" id="m7"/>
                        <label class="email required control-label">Tiempo</label>
                            <input name="ordenAlta[]" placeholder="Tiempo" type="test" id="t7"/>
                    </div>
                    <br>
                    <div class="dropdown">
                        <label class="email required control-label">Trabajo realizado</label>
                            <input name="ordenAlta[]" placeholder="Trabajo realizado" type="test" id="j8"/>
                        <label class="email required control-label">Mec&aacute;nico</label>
                            <input name="ordenAlta[]" placeholder="Mec&aacute;nico" type="test" id="m8"/>
                        <label class="email required control-label">Tiempo</label>
                            <input name="ordenAlta[]" placeholder="Tiempo" type="test" id="t8"/>
                    </div>
                    <br>
                    <div class="dropdown">
                        <label class="email required control-label">Trabajo realizado</label>
                            <input name="ordenAlta[]" placeholder="Trabajo realizado" type="test" id="j9"/>
                        <label class="email required control-label">Mec&aacute;nico</label>
                            <input name="ordenAlta[]" placeholder="Mec&aacute;nico" type="test" id="m9"/>
                        <label class="email required control-label">Tiempo</label>
                            <input name="ordenAlta[]" placeholder="Tiempo" type="test" id="t9"/>
                    </div>
                    <br>
                    <div class="dropdown">
                        <label class="email required control-label">Trabajo realizado</label>
                            <input name="ordenAlta[]" placeholder="Trabajo realizado" type="test" id="j10"/>
                        <label class="email required control-label">Mec&aacute;nico</label>
                            <input name="ordenAlta[]" placeholder="Mec&aacute;nico" type="test" id="m10"/>
                        <label class="email required control-label">Tiempo</label>
                            <input name="ordenAlta[]" placeholder="Tiempo" type="test" id="t10"/>
                    </div>
                    <br>
                    <div class="dropdown">
                        <label class="email required control-label">Refacciones</label>
                            <input name="ordenAlta[]" placeholder="Refacciones" type="test" id="r1"/>
                        <label class="email required control-label">Precio</label>
                            <input name="ordenAlta[]" placeholder="Precio" type="test" id="p1"/>
                    </div>
                    <br>
                    <div class="dropdown">
                        <label class="email required control-label">Refacciones</label>
                            <input name="ordenAlta[]" placeholder="Refacciones" type="test" id="r2"/>
                        <label class="email required control-label">Precio</label>
                            <input name="ordenAlta[]" placeholder="Precio" type="test" id="p2"/>
                    </div>
                    <br>
                    <div class="dropdown">
                        <label class="email required control-label">Refacciones</label>
                            <input name="ordenAlta[]" placeholder="Refacciones" type="test" id="r3"/>
                        <label class="email required control-label">Precio</label>
                            <input name="ordenAlta[]" placeholder="Precio" type="test" id="p3"/>
                    </div>
                    <br>
                    <div class="dropdown">
                        <label class="email required control-label">Refacciones</label>
                            <input name="ordenAlta[]" placeholder="Refacciones" type="test" id="r4"/>
                        <label class="email required control-label">Precio</label>
                            <input name="ordenAlta[]" placeholder="Precio" type="test" id="p4"/>
                    </div>
                    <br>
                    <div class="dropdown">
                        <label class="email required control-label">Refacciones</label>
                            <input name="ordenAlta[]" placeholder="Refacciones" type="test" id="r5"/>
                        <label class="email required control-label">Precio</label>
                            <input name="ordenAlta[]" placeholder="Precio" type="test" id="p5"/>
                    </div>
                    <br>
                    <div class="dropdown">
                        <label class="email required control-label">Refacciones</label>
                            <input name="ordenAlta[]" placeholder="Refacciones" type="test" id="r6"/>
                        <label class="email required control-label">Precio</label>
                            <input name="ordenAlta[]" placeholder="Precio" type="test" id="p6"/>
                    </div>
                    <br>
                    <div class="dropdown">
                        <label class="email required control-label">Refacciones</label>
                            <input name="ordenAlta[]" placeholder="Refacciones" type="test" id="r7"/>
                        <label class="email required control-label">Precio</label>
                            <input name="ordenAlta[]" placeholder="Precio" type="test" id="p7"/>
                    </div>
                    <br>
                    <div class="dropdown">
                        <label class="email required control-label">Refacciones</label>
                            <input name="ordenAlta[]" placeholder="Refacciones" type="test" id="r8"/>
                        <label class="email required control-label">Precio</label>
                            <input name="ordenAlta[]" placeholder="Precio" type="test" id="p8"/>
                    </div>
                    <br>
                    <div class="dropdown">
                        <label class="email required control-label">Refacciones</label>
                            <input name="ordenAlta[]" placeholder="Refacciones" type="test" id="r9"/>
                        <label class="email required control-label">Precio</label>
                            <input name="ordenAlta[]" placeholder="Precio" type="test" id="p9"/>
                    </div>
                    <br>
                    <div class="dropdown">
                        <label class="email required control-label">Refacciones</label>
                            <input name="ordenAlta[]" placeholder="Refacciones" type="test" id="r10"/>
                        <label class="email required control-label">Precio</label>
                            <input name="ordenAlta[]" placeholder="Precio" type="test" id="p10"/>
                    </div>
                    <br>
                    <label class="email required control-label" >Tiempo estimado</label>
                    <input name="ordenAlta[]" placeholder="Tiempo estimado" type="test" id="te1"/>
                    <br><br>
                    <span class="input-group-te1n">
                        <button class="btn btn-primary" type="submit" id="aplicar">Realizar cambio</button>
                        <button class="btn btn-success" type="button" onclick="regresar()">Regresar</button>
                    </span>
                    <br>
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
<script>
    $(document).ready(function(){
        $("#boton").click(function(){

            parametro = {"folio" : document.getElementById('folio').value}
            $.ajax({

                type : "POST",
                url : "data/cambiosOrdenData.php" ,
                traditional : true,
                data : parametro,
                success : function(arrayPHP){
                    carArray = arrayPHP.split("|");
                    document.getElementById('placa').value = carArray[0];
                    document.getElementById('j1').value = carArray[1];
                    document.getElementById('j2').value = carArray[2];
                    document.getElementById('j3').value = carArray[3];
                    document.getElementById('j4').value = carArray[4];
                    document.getElementById('j5').value = carArray[5];
                    document.getElementById('j6').value = carArray[6];
                    document.getElementById('j7').value = carArray[7];
                    document.getElementById('j8').value = carArray[8];
                    document.getElementById('j9').value = carArray[9];
                    document.getElementById('j10').value = carArray[10];
                    document.getElementById('m1').value = carArray[11];
                    document.getElementById('m2').value = carArray[12];
                    document.getElementById('m3').value = carArray[13];
                    document.getElementById('m4').value = carArray[14];
                    document.getElementById('m5').value = carArray[15];
                    document.getElementById('m6').value = carArray[16];
                    document.getElementById('m7').value = carArray[17];
                    document.getElementById('m8').value = carArray[18];
                    document.getElementById('m9').value = carArray[19];
                    document.getElementById('m10').value = carArray[20];
                    document.getElementById('t1').value = carArray[21];
                    document.getElementById('t2').value = carArray[22];
                    document.getElementById('t3').value = carArray[23];
                    document.getElementById('t4').value = carArray[24];
                    document.getElementById('t5').value = carArray[25];
                    document.getElementById('t6').value = carArray[26];
                    document.getElementById('t7').value = carArray[27];
                    document.getElementById('t8').value = carArray[28];
                    document.getElementById('t9').value = carArray[29];
                    document.getElementById('t10').value = carArray[30];
                    document.getElementById('r1').value = carArray[31];
                    document.getElementById('r2').value = carArray[32];
                    document.getElementById('r3').value = carArray[33];
                    document.getElementById('r4').value = carArray[34];
                    document.getElementById('r5').value = carArray[35];
                    document.getElementById('r6').value = carArray[36];
                    document.getElementById('r7').value = carArray[37];
                    document.getElementById('r8').value = carArray[38];
                    document.getElementById('r9').value = carArray[39];
                    document.getElementById('r10').value = carArray[40];
                    document.getElementById('p1').value = carArray[41];
                    document.getElementById('p2').value = carArray[42];
                    document.getElementById('p3').value = carArray[43];
                    document.getElementById('p4').value = carArray[44];
                    document.getElementById('p5').value = carArray[45];
                    document.getElementById('p6').value = carArray[46];
                    document.getElementById('p7').value = carArray[47];
                    document.getElementById('p8').value = carArray[48];
                    document.getElementById('p9').value = carArray[49];
                    document.getElementById('p10').value = carArray[50];
                    document.getElementById('te1').value = carArray[51];
                    
                },

            });

        })

    })
</script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <title>&Oacute;rden Alta</title>
	<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="js/addComponents.js"></script>
</head>
<body>
<br><br><br>
<br><br><br>
    <div style="padding-left: 200px; width: 1800px">
	    <div class="col-md-6">
		    <div class="panel panel-primary">
			<div class="panel-heading">Orden trabajo alta</div>
			    <div class="panel-body">
                    <form id="dataForm" accept-charset="UTF-8" class="simple_form new_user_basic" action="data/altaOrdenTrabajo.php" method="POST">
                        <div class="form-group email required user_basic_email">
                            <label class="email required control-label">Placa</label>
                            <input class="string email required form-control" name="placa" placeholder="Placa del veh&iacute;culo" type="test" />
                        </div>
                        <div class="form-group email required user_basic_email">
                            <label class="email required control-label">Folio de ingreso</label>
                            <input class="string email required form-control" name="folioIngreso" placeholder="Folio de ingreso" type="test" />
                        </div>
                        <button class="btn btn-info" type="button" id="add" onclick="addJob()">Agregar Trabajo</button>
                        <button class="btn btn-info" type="button" id="add2" onclick="addRef()">Agregar Refacciones</button><br><br>

                        <div class="dropdown"></div>
                        <br>
                        <div class="dropdown2"></div>
                        <br>
                        <label class="email required control-label">Tiempo estimado</label>
                        <input name="tiempoEsti" placeholder="Tiempo estimado" type="test" />
                        <br><br>
                        <span class="input-group-btn">
                            <input class="btn btn-primary" id="altaOrden" type="submit" value="Alta orden de trabajo"/>
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
<script>
    $(document).ready(function() {
        $("#formulario").bind("submit",function(){

            $.ajax({
                type: $(this).attr("method"),
                url: $(this).attr("action"),
                data:$("dataForm").serialize(),

                success: function(data){

                    alert(data);

                },
                error: function(data){

                    alert("Problemas al tratar de enviar el formulario");
                }
            });
            return false;
        });
    });
</script>
</body>
</html>

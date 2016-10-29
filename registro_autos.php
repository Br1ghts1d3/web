<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ingreso de automóvil</title>
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
    <link href="css/login.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">Ingreso de autom&oacute;vil</div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" action="data/dataInsert.php" class="simple_form new_user_basic" enctype="multipart/form-data" id="new_user_basic" method="post" novalidate="novalidate">
                        <div style="display:none">
                            <input name="utf8" type="hidden" value="&#x2713;" />
                            <input name="authenticity_token" type="hidden" value="oTQC34gMWrjaJsUoRXw1pr4b6jgqBhBw/1HgGTzlL64=" />
                        </div>
                        <div class="form-group email required user_basic_email">
                            <label class="email required control-label">Placa</label>
                            <input class="string email required form-control" name="auto[]" placeholder="Placa del veh&iacute;culo" type="test" />
                            <p class="help-block">Ingresa las placa</p>
                        </div>
                        <div class="form-group email required user_basic_email">
                            <label class="email required control-label">N&uacute;mero de chasis</label>
                            <input class="string email required form-control" name="auto[]" placeholder="Chasis" type="test" />
                            <p class="help-block">Ingresa el n&uacute;mero del chasis</p>
                        </div>
                        <div class="form-group email required user_basic_email">
                            <label class="email required control-label">N&uacute;mero de motor</label>
                            <input class="string email required form-control" name="auto[]" placeholder="Motor" type="test" />
                            <p class="help-block">Ingresa el n&uacute;mero del motor</p>
                        </div>
                        <div class="form-group email required user_basic_email">
                            <label class="email required control-label">Marca</label>
                            <input class="string email required form-control" name="auto[]" placeholder="Marca" type="test" />
                            <p class="help-block">Marca del veh&iacute;culo</p>
                        </div>
                        <div class="form-group email required user_basic_email">
                            <label class="email required control-label">Modelo</label>
                            <input class="string email required form-control" name="auto[]" placeholder="Modelo" type="test" />
                            <p class="help-block">Modelo del veh&iacute;culo</p>
                        </div>
                        <div class="form-group email required user_basic_email">
                            <label class="email required control-label">A&ntilde;o</label>
                            <input class="string email required form-control" name="auto[]" placeholder="A&ntilde;o" type="test" />
                            <p class="help-block">A&ntilde;o del veh&iacute;culo</p>
                        </div>
                        <div class="form-group email required user_basic_email">
                            <label class="email required control-label">Color</label>
                            <input class="string email required form-control" name="auto[]" placeholder="Color" type="test" />
                            <p class="help-block">Color del veh&iacute;culo</p>
                        </div>
                        <div class="form-group email required user_basic_email">
                            <label class="email required control-label">Combustible</label>
                            <input class="string email required form-control" name="auto[]" placeholder="Combustible" type="test" />
                            <p class="help-block">Combustible que usa el veh&iacute;culo</p>
                        </div>
                        <input class="btn btn-primary" name="commit" type="submit" value="Registrar autom&oacute;vil" />
                        <input class="btn btn-success" name="commit" type="submit" value="Regresar" href="administrator.html"/>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>
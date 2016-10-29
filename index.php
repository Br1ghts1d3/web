<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido Administrador</title>

    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">

    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
        <form class="form-signin" action="data/login_process.php" method="post">
            <h2 class="form-signin-heading">Ingreso RyS Latina</h2>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="text" id="inputEmail" class="form-control" placeholder="Usuario" name="user" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Contrase&ntilde;a" name="pass" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="boton2">Entrar</button>
        </form>
    </div>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    </div>
</body>
</html>
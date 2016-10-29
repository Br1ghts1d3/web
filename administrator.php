<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Men&uacute; principal</title>
		<meta name="description" content="Blueprint: Horizontal Drop-Down Menu" />
		<meta name="keywords" content="horizontal menu, microsoft menu, drop-down menu, mega menu, javascript, jquery, simple menu" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<header class="clearfix">
				<img src="img/logo.jpg" alt="RyS Latina" style="padding-left: 200px; width: 500px; height: 200px;">
			</header>	
			<div class="main">
				<nav id="cbp-hrmenu" class="cbp-hrmenu">
					<ul>
						<li>
							<a href="#">Autom&oacute;viles</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner"> 
									<div>
										<!--<h4>Learning &amp; Games</h4>-->
										<ul>
											<li><a href="registro_autos.php">Alta</a></li>
											<li><a href="delete_action.php">Baja</a></li>
											<li><a href="altaCambios.php">Cambios</a></li>
											<li><a href="autoMostrar.php">Mostrar todas</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="#">Ingreso Autom&oacute;viles</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner">
									<div>
										<ul>
											<li><a href="ingresoAutoAlta.php">Alta</a></li>
											<li><a href="ingresoAutoBaja.php">Baja</a></li>
											<li><a href="ingresoAutoCambio.php">Cambios</a></li>
											<li><a href="ingresoAutoMostrarTodo.php">Mostrar todas</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="#">&Oacute;rden de trabajo</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner"> 
									<div>
										<ul>
											<li><a href="ordenTrabajoAlta.php">Alta</a></li>
											<li><a href="ordenTrabajoBaja.php">Baja</a></li>
											<li><a href="ordenTrabajoCambio.php">Cambios</a></li>
											<li><a href="mostrarOrdenTrabajo.php">Mostrar todas</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="">Cierre de trabajo</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner"> 
									<div>
										<ul>
											<li><a href="ordenCierre.php">Cerrar orden</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
                        <li>
							<a href="#" onclick="destroySession()">Salir</a>
						</li>
					</ul>
				</nav>
                
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/cbpHorizontalMenu.min.js"></script>
		<script>
			$(function() {
				cbpHorizontalMenu.init();
			});
		</script>
	<script>
		function destroySession(){
			window.location = 'logout.php?exit=1';
		}
	</script>
	</body>
</html>

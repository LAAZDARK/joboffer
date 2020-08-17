<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Joboffer</title>
	<link rel="stylesheet" href="<?php echo RUTA; ?>css/estilos.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	
</head>
<body>
	<header>
		<div class="contenedor">
			<div class="logo izquierda">
				<p><a href="<?php echo RUTA; ?>">Joboffer</a></p>
			</div>
			<div class="derecha">		
				<nav class="menu">
					<ul>
						<li>
							<a href="<?php echo RUTA; ?>views/loginCandidato.php">Sesion Candidato</a>
						</li>
						<!-- <li>
							<a href="<?php //echo RUTA; ?>views/loginEmpresa.php">Sesion Empresa</a>
						</li> -->
						<li>
							<a href="<?php echo RUTA; ?>login.php">Sesion Empresa</a>
						</li>
						<li><a href="<?php echo RUTA; ?>contacto/formulario.php">Contacto<i class="icono fa fa-envelope"></i></a></li>
					</ul>
				</nav>
			</div>
			
		</div>
	</header>
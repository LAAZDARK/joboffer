<?php 
require '../admin/config.php';
$errores = '';

if (isset($_POST['submit'])) {
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];

	# Si no esta vacio el nombre entonces comprobamos que sea una cadena de texto limpia.
	if (!empty($nombre)) {

		// $nombre = trim($nombre);
		// $nombre = htmlspecialchars($nombre);
		// $nombre = stripslashes($nombre);


		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
		//echo 'Tu nombre es: ' . $nombre . '<br>';
	} else {
		$errores .= 'Por favor ingresa un nombre <br />';
	}

	if (!empty($correo)) {
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

		if (!filter_var($correo, FILTER_VALIDATE_EMAIL)){
			$errores .= 'Por favor ingresa un correo valido <br />';
		} else {
			//echo 'Tu correo es: ' . $correo;
		}

	} else {
		$errores .= 'Por favor ingresa un correo <br />';
	}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Joboffer</title>
	<link rel="stylesheet" href="<?php echo RUTA; ?>/css/estilos.css">
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
							<a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
						</li>
						<li>
							<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
						</li>
						<li><a href="#">Contacto<i class="icono fa fa-envelope"></i></a></li>
					</ul>
				</nav>
			</div>
			
		</div>
	</header>
<body>
	<div class="contenedor">
		<div class="post">
			<article>
				<form action="recibe.php" method="post" class="formulario">
					<h2 class="titulo">Contacto</h2>
					<input type="text" name="nombre" placeholder="Nombre">
					<input type="text" name="correo" placeholder="Correo">
					<br>
					<textarea name="texto" placeholder="comentarios"></textarea>
					<br>
					<label for="terminos">Terminos y Condiciones</label>
					<input type="checkbox" name="terminos" value="ok" id="terminos">

					<?php if(!empty($errores)): ?>
						<div class="error"><?php echo $errores; ?></div>
					<?php endif; ?>

					<input type="submit" name="submit" value="Enviar">
				</form>
			</article>
		</div>
	</div>
</body>
</html>
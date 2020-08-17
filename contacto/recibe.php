<?php 
require '../admin/config.php';
require '../functions.php';
 
 //conexion con base de datos
$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: ../error.php');
}

//comprobacion de recepcion de datos enviados por el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nombre = limpiarDatos($_POST['nombre']);
	$correo = limpiarDatos($_POST['correo']);
	$texto = $_POST['texto'];

	$statement = $conexion->prepare(
		'INSERT INTO contactos (id_contacto, nombre, correo, texto)
		VALUES (null, :nombre, :correo, :texto)'
	);

	$statement->execute(array(
		':nombre' => $nombre,
		':correo' => $correo,
		':texto' => $texto,
	));
	header('Location: ' . RUTA . '/contacto/gracias.php');
}


?>
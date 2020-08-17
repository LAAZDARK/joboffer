<?php 
require '../admin/config.php';
require '../functions.php';

//conexion con la base de datos
$conexion = conexion($bd_config);
if (!$conexion){
	header('Location: ../error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$contacto=limpiarDatos($_POST['contacto']);
	$apellidos=limpiarDatos($_POST['apellidos']);
	$telefono=limpiarDatos($_POST['telefono']);
	$correo=limpiarDatos($_POST['correo']);
	$pass=limpiarDatos($_POST['pass']);
	$pass2=limpiarDatos($_POST['pass2']);
	$numero=limpiarDatos($_POST['numero']);
	$rfcEmpresa=limpiarDatos($_POST['rfcEmpresa']);
	$razonSocial=limpiarDatos($_POST['razonSocial']);

	$statement = $conexion->prepare(
		'INSERT INTO empresas (id_empresa, contacto, apellidos, telefono, correo, pass, pass2, numero, rfcEmpresa, razonSocial)
		VALUES (null, :contacto, :apellidos, :telefono, :correo, :pass, :pass2, :numero, :rfcEmpresa, :razonSocial)'
	);

	$statement->execute(array(
		':contacto' => $contacto, 
		':apellidos' => $apellidos,
		':telefono' => $telefono,
		':correo' => $correo,
		':pass' => $pass,
		':pass2' => $pass2,
		':numero' => $numero,
		':rfcEmpresa' => $rfcEmpresa,
		':razonSocial' => $razonSocial,
	));

	header('Location: ' . RUTA . 'views/guardado_personal.php');

}

require 'RegistroEmpresa.php';

?>
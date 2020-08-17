<?php
require '../admin/config.php';
require '../functions.php';

//conexion con la base de datos
$conexion = conexion($bd_config);
if (!$conexion){
	header('Location: ../error.php');
}

$checkEmail = "SELECT * FROM users WHERE Email = '$_POST[email]' ";

$result = $conexion->prepare($checkEmail);
$count = mysqli_num_rows($result);


if ($count == 1) {
	echo "<div class='alert alert-warning mt-4' role='alert'>
					<p>That email is already in our database.</p>
					<p><a href='login.html'>Please login here</a></p>
				</div>";
	} else {	
			
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$nombre=limpiarDatos($_POST['nombre']);
			$apellidos=limpiarDatos($_POST['apellidos']);
			$nacimiento=limpiarDatos($_POST['nacimiento']);
			$celular=limpiarDatos($_POST['celular']);
			$correo=limpiarDatos($_POST['correo']);
			$domicilio=limpiarDatos($_POST['domicilio']);
			$pass=limpiarDatos($_POST['pass']);
			$pass2=limpiarDatos($_POST['pass2']);
			$sexo=limpiarDatos($_POST['sexo']);
			$escuela=limpiarDatos($_POST['escuela']);
			$carrera=limpiarDatos($_POST['carrera']);
			$cedula=limpiarDatos($_POST['cedula']);
			$domicilioIns=limpiarDatos($_POST['domicilioIns']);


			$passHash = password_hash($pass, PASSWORD_DEFAULT);
			$passHash2 = password_hash($pass2, PASSWORD_DEFAULT);


			$statement = $conexion->prepare(
				'INSERT INTO candidatos (id_candidato, nombre, apellidos, nacimiento, celular, correo, domicilio, pass, pass2, sexo, escuela, carrera, cedula, domicilioIns)
				VALUES (null, :nombre, :apellidos, :nacimiento, :celular, :correo, :domicilio, :pass, :pass2, :sexo, :escuela, :carrera, :cedula, :domicilioIns)'

			);

			$statement->execute(array(
				':nombre' => $nombre,
				':apellidos' => $apellidos,
				':nacimiento' => $nacimiento,
				':celular' => $celular,
				':correo' => $correo,
				':domicilio' => $domicilio,
				':pass' => $passHash,
				':pass2' => $passHash2,
				':sexo' => $sexo, 
				':escuela' => $escuela,
				':carrera' => $carrera,
				':cedula' => $cedula,
				':domicilioIns' => $domicilioIns,
			));

			header('Location: ' . RUTA . 'views/guardado_personal.php');
		}
	}

		require 'RegistroCandidato.php';

?>
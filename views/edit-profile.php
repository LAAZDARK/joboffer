<?php

session_start();
require '../admin/config.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Perfil - Joboffer</title>
	
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  
  <body>      
    <?php
    if (isset($_SESSION['loggedin'])) {  
    }
    else {
        echo "<div class='alert alert-danger mt-4' role='alert'>
        <h4>You need to login to access this page.</h4>
        <p><a href='loginCandidato.php'>Volver a iniciar!</a></p></div>";
        exit;
    }
    // checking the time now when check-login.php page starts
    $now = time();           
    if ($now > $_SESSION['expire']) {
        session_destroy();
        echo "<div class='alert alert-danger mt-4' role='alert'>
        <h4>La sesion a caducado!</h4>
        <p><a href='loginCandidato.php'>Volver a iniciar!</a></p></div>";
        exit;
        }

    ?>
    <header>
        <div class="contenedor">
            <div class="logo izquierda">
                <p><a href="<?php echo "../" ?>">Joboffer</a></p>
            </div>
        </div>
    </header>

    <div class="contenedor">
        <div class="postregistro">
            <h2>Perfil</h2>
            <h3>Datos Personales</h3>
            <p>Nombre: <?php echo $_SESSION['nombre']; ?></p>
            <p>Apellidos: <?php echo $_SESSION['apellidos']; ?></p>
            <p>Fecha de nacimiento: <?php echo $_SESSION['nacimiento']; ?></p>
            <p>Telefono: <?php echo $_SESSION['celular']; ?></p>
            <p>Correo: <?php echo $_SESSION['correo']; ?></p>
            <p>Domicilio: <?php echo $_SESSION['domicilio']; ?></p>
            <p>Sexo: <?php echo $_SESSION['sexo']; ?></p>
        
        <p><a href="<?php echo RUTA; ?>">Salir</a></p>
        </div>
    </div>
     <div class="contenedor">
        <div class="postregistro">
            <h3>Educacion</h3>
            <p>Institución: <?php echo $_SESSION['escuela']; ?></p>
            <p>Titulo: <?php echo $_SESSION['carrera']; ?></p>
            <p>Cedula: <?php echo $_SESSION['cedula']; ?></p>
            <p>Domicilio Institucional: <?php echo $_SESSION['domicilioIns']; ?></p>
        
        <p><a href="<?php echo RUTA; ?>">Salir</a></p>
        </div>
    </div>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	</body>
</html>
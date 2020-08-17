<?php 
require '../admin/config.php';
require 'header.index.php';
?>
<div class="contenedorRegistro">
  <div class="postregistro">
    <form method="POST" name="dato" action="<?php echo RUTA; ?>views/guardar_personal.php" id="dato" class="formulario">

      <h2 class="titulo">Bienvenidos a joboffer</h2>
      <h3 class="titulo">Crear cuenta</h3> 
      <h3 class="titulo">Datos Personales:</h3>
      <input type="text" name="nombre" id="nombre" autocomplete="off" placeholder="Nombre">
      <input type="text" name="apellidos" id="apellidos" autocomplete="off" placeholder="Apellidos">
      <input type="text" name="celular" id="celular" placeholder="5547113677" autocomplete="off">
      <input type="email" name="correo" id="correo" placeholder="nombre@dominio.com" autocomplete="off">
      <input type="text" name="domicilio" id="domicilio" placeholder="calle..." autocomplete="off">
      <input type="password" name="pass" id="pass" placeholder="Contraseña">
      <input type="password" name="pass2" id="pass2" placeholder="Reingrese contraseña">
      <input type="date" name="nacimiento" id="nacimiento" min="1900-01-01" max="2012-01-01" step="1">
      <input type="radio" name="sexo" value="masculino">Masculino
      <input type="radio" name="sexo" value="femenino">Femenino<br><br>
      <h3 class="titulo">Educacion:</h3>
      <input type="text" name="escuela" id="escuela" autocomplete="off" placeholder="Nombre de la Institucion">
      <input type="text" name="carrera" id="carrera" autocomplete="off" placeholder="Titulo universitario">
      <input type="text" name="cedula" id="cedula" placeholder="Cedula profesional" autocomplete="off">
      <input type="text" name="domicilioIns" id="domicilioIns" placeholder="Domicilio de la Institucion" autocomplete="off">
      <input class="btnlogin" type="submit" name="Ingresar" value="Crear Cuenta">
    </form>
    </div>
</div>
  </body>
 <footer class="footerregistro">
  <p class="copyright">Copyright © 2019 - 2020 Joboffer</p>
</footer>
</html>

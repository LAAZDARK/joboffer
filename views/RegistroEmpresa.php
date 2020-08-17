<?php 
require '../admin/config.php';
require 'header.index.php';
?>
<div class="contenedorRegistro">
	<div class="postregistro">
	<form action="<?php echo RUTA; ?>views/GuardarEmpresa.php" method="POST" name="EmpresaDato" class="formulario">
				<h2 class="titulo">Crear Cuenta</h2>

				<h3 class="titulo"> Datos de aceso y contacto</h3>
				<input type="text" name="contacto" id="contacto" placeholder="Nombre" autocomplete="off">
				<input type="text" name="apellidos" id="Apellidos" placeholder="Apellidos" autocomplete="off">
				<input type="email" name="correo" id="correo" placeholder="nombre@empresa.com" autocomplete="off">
				<input type="tel" name="telefono" id="telefono" placeholder="5547113677" autocomplete="off">
				<input type="password" name="pass" id="pass" placeholder="Contraseña" autocomplete="off">
				<input type="password" name="pass2" id="pass2" placeholder="Confirmar contraseña" autocomplete="off">
				<input type="text" name="numero" id="numero" placeholder="Numero de trabajadores aprox." autocomplete="off">

				<h3 class="titulo">Datos de Facturacion</h3> 
				<td><input type="text" name="rfcEmpresa" id="rfcEmpresa" placeholder="RFC" autocomplete="off"></td>
				<td><input type="text" name="razonSocial" id="razonSocial" placeholder="Razon social" autocomplete="off">
				<input type="submit" name="crearCuenta" value="Crear Cuenta">
	</form>
	</div>
	
</div>
	

</body>
</html>
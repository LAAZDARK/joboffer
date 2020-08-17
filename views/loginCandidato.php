<?php 
require '../admin/config.php';
require 'header.index.php';

?>
<body>
	<div class="contenedor">
		<div class="contenedorbusqueda">
			<main class="content">
				<form action="<?php echo RUTA; ?>views/check-login.php" name="datos" method="POST">
					<table align="center" class="login">
						<tr>
							<td colspan="2" align="center">Ingreso candidatos</td>
						</tr>
						<tr>
                           <td><input type="text" name="email" id="user" placeholder="Usuario"></td>
                         </tr>
                         <tr>
                           <td><input type="password" name="password" id="pass" placeholder="Contraseña"></td>
                         </tr>   	
					</table>
					<input class="btnlogin" type="submit" name="Ingresar" value="Entrar"></br>
                    <a class="btnregistro" href="<?php echo RUTA; ?>views/RegistroCandidato.php">Crear Cuenta</a>
				</form>
			</main><!-- .content -->
		</div><!-- .container-->
	</div><!-- .middle-->

</div><!-- .wrapper -->

<footer class="footerlogin">
	<p class="copyright">Copyright © 2019 - 2020 Joboffer</p>
</footer>

</body>
</html>
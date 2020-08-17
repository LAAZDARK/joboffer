<?php 
require '../admin/config.php';
require 'header.index.php';

?>
<body>
	<div class="contenedor">
		<div class="contenedorbusqueda">
			<main class="content">
				<form>
					<table align="center" class="login">
						<tr>
							<td colspan="2" align="center">Ingreso empresas</td>
						</tr>
						<tr>
                           <td><input type="text" name="user" id="user" placeholder="Usuario"></td>
                         </tr>
                         <tr>
                           <td><input type="password" name="pass" id="pass" placeholder="Contraseña"></td>
                         </tr>   	
					</table>
					<input class="btnlogin" type="submit" name="ingresar" value="Entrar"></br>
                    <a class="btnregistro" href="<?php echo RUTA; ?>views/RegistroEmpresa.php">Crear Cuenta</a>
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
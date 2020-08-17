<?php require 'header.index.php' ?>

	<div class="contenedorbusqueda">
		<form action="<?php echo RUTA; ?>buscar.php" method="get" name="busqueda" class="buscar">
			<table>
				<tr>
					<td><input type="text" name="busqueda" placeholder="Titulo.. Ingenieria..." autocomplete="off"></td>
					<td><input type="text" name="lugar" placeholder="Lugar: delegacion o municipio" autocomplete="off"></td>
					<td><input type="submit" value="Buscar"></td>
				</tr>
			</table>
				</form>
	</div>

<?php require 'footer.index.php'; ?>
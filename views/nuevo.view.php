<?php require 'header.php' ?>

	<div class="contenedor">
		<div class="post">
			<article>
				<h2 class="titulo">Nuevo Articulo</h2>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" class="formulario" method="post">
					<input type="text" name="titulo" placeholder="Titulo del Articulo">
					<input type="text" name="extracto" placeholder="Extracto del Articulo">
					<textarea name="texto" placeholder="Texto del Articulo"></textarea>
					<input type="text" name="telefono" placeholder="55 47 11 36 77">
					<input type="email" name="correo" placeholder="usuario@empresa.com">
					<input type="text" name="etiqueta" placeholder="Palabras clave. ventas procesos desarrollador web etc...">
					<input type="file" name="thumb">

					<input type="submit" value="Crear Articulo">
				</form>
			</article>
		</div>
	</div>

<?php require 'footer.php'; ?>
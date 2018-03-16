<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<title>Galeria</title>
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	<link rel="stylesheet" href="css/estilos.css" media="all" />
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<body>
	<header>
		<div class="contenedor">
			<h1 class="titulo">Subir Foto</h1>
		</div>
	</header>
	
	<div class="contenedor">
		<form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<label for="foto">Selecciona tu foto</label>
			<input type="file" id="foto" name="foto" />
			
			<label for="titulo">Titulo de la Foto</label>
			<input type="text" id="titulo" name="titulo" />
			
			<label for="texto">Descripcion</label>
			<textarea name="texto" id="texto" placeholder="Ingresa una descripcion"></textarea>
			
			<?php if (isset($error)): ?>
				<p class="error"><?php echo $error; ?></p>
			<?php endif; ?>

			<input type="submit" class="submit" value="Subir Foto" />
		</form>
	</div>
	
	<footer>
		<p class="copyright">Galeria creada por Marco Lopez - Debugeando</p>
	</footer>
</body>
</html>
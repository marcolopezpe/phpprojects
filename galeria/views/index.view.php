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
			<h1 class="titulo">Mi Increible Galeria en PHP y MySQL</h1>
		</div>
	</header>
	
	<section class="fotos">
		<div class="contenedor">
			<?php foreach($fotos as $foto): ?>
    			<div class="thumb">
    				<a href="foto.php?id=<?php echo $foto['id']; ?>">
    					<img src="fotos/<?php echo $foto['imagen']; ?>" alt="" />
    				</a>
    			</div>
			<?php endforeach; ?>
			
		</div>
	
    	<div class="paginacion">
    		<?php if ($pagina_actual > 1): ?>
    			<a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"><i class="fas fa-long-arrow-alt-left"></i> Pagina Anterior</a>
    		<?php endif; ?>
    		
    		<?php if ($total_paginas != $pagina_actual): ?>
    			<a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha">Pagina Siguiente <i class="fas fa-long-arrow-alt-right"></i></a>
    		<?php endif; ?>
    	</div>
	</section>
	
	<footer>
		<p class="copyright">Galeria creada por Marco Lopez - Debugeando</p>
	</footer>
</body>
</html>
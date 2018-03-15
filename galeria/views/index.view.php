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
			<div class="thumb">
				<a href="#">
					<img src="imagenes/1.jpg" alt="" />
				</a>
			</div>
			<div class="thumb">
				<a href="#">
					<img src="imagenes/2.jpg" alt="" />
				</a>
			</div>
			<div class="thumb">
				<a href="#">
					<img src="imagenes/3.jpg" alt="" />
				</a>
			</div>
			<div class="thumb">
				<a href="#">
					<img src="imagenes/4.jpg" alt="" />
				</a>
			</div>
			<div class="thumb">
				<a href="#">
					<img src="imagenes/5.jpg" alt="" />
				</a>
			</div>
			<div class="thumb">
				<a href="#">
					<img src="imagenes/6.jpg" alt="" />
				</a>
			</div>
		</div>
	
    	<div class="paginacion">
    		<a href="#" class="izquierda"><i class="fas fa-long-arrow-alt-left"></i> Pagina Anterior</a>
    		<a href="#" class="derecha">Pagina Siguiente <i class="fas fa-long-arrow-alt-right"></i></a>
    	</div>
	</section>
	
	<footer>
		<p class="copyright">Galeria creada por Marco Lopez - Debugeando</p>
	</footer>
</body>
</html>
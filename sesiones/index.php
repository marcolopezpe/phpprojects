<?php
session_start();

$_SESSION['nombre'] = 'Carlos';

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>Pagina de Inicio</h1>
<p></p>
<a href="pagina2.php">Ir a pagina 2</a>
</body>
</html>
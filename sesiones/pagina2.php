<?php
session_start();

if ($_SESSION) {
//    $nombre = $_SESSION['nombre'];
//    echo "<h1>Hola, $nombre</h1>";
    print_r($_SESSION);
} else {
    echo "No has iniciado sesion";
}

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<a href="cerrar.php">Cerrar sesion</a>
</body>
</html>
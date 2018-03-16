<?php
require 'funciones.php';

$conexion = conexion('galeria', 'root', '');
if (! $conexion) {
    die();
}

$id = isset($_GET['id']) ? (int) $_GET['id'] : false;

if (! $id) {
    header('location: index.php');
}

$statement = $conexion->prepare('SELECT * FROM fotos WHERE id = :id');
$statement->execute(array(
    ':id' => $id
));

$foto = $statement->fetch();
if (! $foto) {
    header('location: index.php');
}

require 'views/foto.view.php';

?>
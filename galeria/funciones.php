<?php

function conexion($bd, $usuario, $contrasena)
{
    try {
        $conexion = new PDO("mysql:host=localhost;dbname=$bd", $usuario, $contrasena);
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}

?>
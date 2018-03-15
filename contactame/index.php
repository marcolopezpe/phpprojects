<?php

$errores = '';
$enviado = '';

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    # Comprobar nombre
    if (!empty($nombre)) {
        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Por favor ingresa un nombre <br/>';
    }

    # Comprobar correo
    if (!empty($correo)) {
        $correo = trim($correo);
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores .= 'Por favor ingresa un correo valido <br/>';
        }
    } else {
        $errores .= 'Por favor ingresa un correo <br/>';
    }

    # Comprobar mensaje
    if (!empty($mensaje)) {
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = stripslashes($mensaje);
    } else {
        $errores .= 'Por favor ingresa el mensaje <br/>';
    }

    if (!$errores) {
        $enviar_a = 'marcolopezpe@outlook.com';
        $asunto = 'Correo enviado desde Contactame!';
        $mensaje_preparado = "De: $nombre \n";
        $mensaje_preparado .= "Correo: $correo \n";
        $mensaje_preparado .= "Mensaje: " . $mensaje;

        # mail($enviar_a, $asunto, $mensaje_preparado);
        $enviado = true;
    }

}

require 'index.view.php';


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contactame</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="wrap">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

        <input id="nombre" type="text" name="nombre" value="<?php if(!$enviado && isset($nombre)) echo $nombre; ?>" class="form-control" placeholder="Nombre:">
        <input id="correo" type="text" name="correo" value="<?php if(!$enviado && isset($correo)) echo $correo; ?>" class="form-control" placeholder="Correo:">
        <textarea id="mensaje" name="mensaje" class="form-control" placeholder="Mensaje:"><?php if(!$enviado && isset($mensaje)) echo $mensaje; ?></textarea>

        <?php if (!empty($errores)): ?>
            <div class="alert error">
                <?php echo $errores; ?>
            </div>
        <?php elseif($enviado): ?>
            <div class="alert success">
                <p>Enviado correctamente</p>
            </div>
        <?php endif ?>

        <input type="submit" name="submit" value="Enviar Correo" class="btn btn-primary">

    </form>
</div>
</body>
</html>

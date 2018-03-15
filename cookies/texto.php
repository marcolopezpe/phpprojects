<?php
if (isset($_COOKIE['font-size'])) {
    $tamano = htmlspecialchars($_COOKIE['font-size']);
} else {
    $tamano = '15px';
}

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        p {
            font-size: <?php echo $tamano; ?>;
        }
    </style>
</head>
<body>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, asperiores debitis dignissimos ea facere
    maiores molestias officia perferendis quos ratione repellendus sed sint suscipit temporibus veritatis voluptatem
    voluptatum! Quidem.</p>
</body>
</html>
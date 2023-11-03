<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php
    echo "Direccion IP del servidor: " . $_SERVER['SERVER_ADDR'];
    echo "</br>";
    echo "Nombre host: " . $_SERVER['SERVER_NAME'];
    echo "</br>";
    echo "Software utilizado: " . $_SERVER['SERVER_SOFTWARE'];
    echo "</br>";
    echo "Informacion User Agent: " . $_SERVER['HTTP_USER_AGENT'];
    echo "</br>";
    echo "Direccion IP del cliente: " . $_SERVER['REMOTE_ADDR']
    ?>
</body>
</html>
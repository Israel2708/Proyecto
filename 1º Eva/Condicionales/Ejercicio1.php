<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
    echo "Numero aleatorio";
    $numeroAleatorio=rand(0,1);
    echo "</br>";
    echo "El numero es:$numeroAleatorio";
    if ($numeroAleatorio == 1)
    {echo "<img src='https://eltamiz.com/elcedazo/wp-content/uploads/2011/06/ES100.png'> cara";}
    else {echo "<img src='moneda.png'> cruz";}
    ?>
</body>
</html>
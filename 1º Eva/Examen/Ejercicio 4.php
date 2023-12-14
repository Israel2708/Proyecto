<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
    //Creo la variable frase
    $frase="No malgastes tu tiempo, pues de esa materia está formada la vida.";
    //Muestro la variable por pantalla
    echo $frase;
    echo "<br>";
    foreach(count_chars($frase,1) as $i => $valor)
    {
        echo "<br>";
        echo "Salio $valor veces \"", chr($i),"\" en la frase.\n";
        echo "<br>";
        echo $valor;
    }

    ?>
</body>
</html>
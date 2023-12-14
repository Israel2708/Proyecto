<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
    //Creo array
    $miArray=[];
    //Relleno el array con numero aleatorios
    for($i=0;$i<10;$i++){
        $miArray[]=rand(1,10);
    }
    //Recorro el array y muestro su valor
    for($i=0;$i<count($miArray);$i++){
        echo "<p>". $miArray[$i] ."</p>";
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
    //Creo array
    $miArray=[];
    //Relleno el array con numero aleatorios
    for($i=0;$i<10;$i++){
        $miArray[]=rand(1,30);
    }
    //Recorro el array y muestro su valor
    for($i=0;$i<count($miArray);$i++){
        echo "<p>". $miArray[$i] ."</p>";
    }
    echo "<br>";
    // Version comandos PHP
    echo "<p>Version comandos PHP</p>";
    //Calculo el valor medio
    //el comando array_sum permite sumar en el array
    $medio = array_sum($miArray) / count($miArray);
    //Muestro el valor medio
    echo "<br>Valor medio: $medio";
    //Calculo el valor maximo y minimo
    $maximo = max($miArray);
    $minimo = min($miArray);
    //Muestro el valor mamaximo y minimo
    echo "<br>";
    echo "<br>Valor maximo: $maximo";
    echo "<br>";
    echo "<br>Valor minimo: $minimo ";
    echo "<br>";
    echo "<br>";
    echo "<p>Version artesanal</p>";
    //Calculo el valor medio
    $sumaTotal = 0;
    for($i=0;$i<count($miArray);$i++){
    $sumaTotal = $sumaTotal + $miArray[$i];
    }
    $media = $sumaTotal / count($miArray);
    //Muestro el valor medio
    echo "<p> Valor medio echo artesanalmente:" .$media."</p>";
    //Calculo el valor mas alto 
    $alto = 0;
    for($i=0;$i<count($miArray);$i++){
        //Si es mas alto lo guardo
        if($alto <= $miArray[$i])
        {
            $alto =$miArray[$i];
        }
        }
    // Calculo el valor minimo
    $bajo = 99;
    for($i=0;$i<count($miArray);$i++){
        //Si es mas alto lo guardo
        if($bajo >= $miArray[$i])
        {
            $bajo =$miArray[$i];
        }
        }
    //Muestro el valor mas alto y el mas bajo
    echo "<br>Valor maximo echo artesanalmente: $alto";
    echo "<br>";
    echo "<br>Valor minimo echo artesanalmente: $bajo";
    ?>
</body>
</html>
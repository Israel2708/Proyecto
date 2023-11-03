<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <h1>Array</h1>
    <?php
    // Creo el array
    $alumnosClase = ['Ruben','Pablo','Gabriel','Roberto','Lucia','Alex','Santiago','Alejandro','Pablo','Miguel'];
    //Muestro el tamaño de array
    echo "Tamaño Array: ".count($alumnosClase)."";
    for ($i=0;$i<count($alumnosClase);$i++) { 
        echo "<p>".$alumnosClase[$i]."</p>";
    }
    //Recorro el array
    echo "<h2> Ejemplo con Foreach</h2>";
    foreach($alumnosClase as $clave=> $valor){
        echo "<p> Estas en la posicion $clave y el valor es $valor</p>";
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
    $miFrase= "La confianza en sí mismo es el primer secreto del éxito";
    
    //Mostrar frase tal y como esta
    echo $miFrase;
    // Muestra la frase letra por letra
        //strlen() devuelve la longitud
        echo "<br>";
    for($i=0; $i<strlen($miFrase);$i++){
        echo $miFrase[$i]." ";
    }
    //Debajo de la frase muestra la misma en orden inverso
    echo "<br>";
    for($i=strlen($miFrase)-1;$i>=0;$i--){
    echo $miFrase[$i];
    }
    //Muestro el tamaño de la frase
    echo "<br>";
    echo "Tamaño frase: ".strlen($miFrase);
    //Muestra la frase en mayusculas
    echo "<br>";
    echo "Mayusculas: ".strtoupper($miFrase);
    ?>
</body>
</html>
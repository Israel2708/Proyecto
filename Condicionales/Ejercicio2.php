<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
    echo "Nota Obtenida";
    $nota=rand(0,10);
    echo "</br>";
    echo "La nota es :$nota "  ;
    if ($nota<5) {echo"Suspendido";}
    elseif($nota<6){echo "Suficiente";}
    elseif($nota<7){echo "Bien";}
    elseif($nota<9){echo "Notable";}
    else{echo "Sobresaliente";}
    ?>
</body>
</html>
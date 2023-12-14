<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
    $numero=rand(1,7);
    echo "</br>";
    echo "El dia es :$numero "  ;
    if ($numero==1) {echo"Lunes";}
    elseif($numero==2){echo "Martes";}
    elseif($numero==3){echo "Miercoles";}
    elseif($numero==4){echo "Jueves";}
    elseif($numero==5){echo "Viernes";}
    elseif($numero==6){echo "Sabado";}
    else{echo "Domingo";}
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
 $numero=rand(1,6);
 echo "</br>";
 echo "Dado :$numero "  ;
 if ($numero==1) {echo "<img src='https://upload.wikimedia.org/wikipedia/commons/1/1b/Dice-1-b.svg'>";}
 elseif($numero==2){echo "<img src='https://upload.wikimedia.org/wikipedia/commons/5/5f/Dice-2-b.svg'>";}
 elseif($numero==3){echo "<img src='https://upload.wikimedia.org/wikipedia/commons/b/b1/Dice-3-b.svg'>";}
 elseif($numero==4){echo "<img src='https://upload.wikimedia.org/wikipedia/commons/f/fd/Dice-4-b.svg'>";}
 elseif($numero==5){echo "<img src='https://upload.wikimedia.org/wikipedia/commons/0/08/Dice-5-b.svg'>";}
    elseif($numero==6){echo "<img src='https://upload.wikimedia.org/wikipedia/commons/2/26/Dice-6-b.svg'>";}
    ?>
</body>
</html>
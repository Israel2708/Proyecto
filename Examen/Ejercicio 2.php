<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
    $altura= 5;
    for($i=1;$i<=$altura;$i++){
        for($j=1;$j<=$altura;$j++){
        if($i==1 || $i==$altura || $j==1 || $j==$altura) {
            echo "*";
        }else{
            echo "&nbsp;&nbsp;";
        }
        }
        echo "<br>";
        }
    ?>
</body>
</html>
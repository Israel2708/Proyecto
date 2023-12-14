<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Piramide</h1>
    <?php
    /*Decreciente*/ 
    $altura=10;
    for($i=$altura;$i>=0;$i--){
        for ($j=1;$j<=$i;$j++) { 
        echo "*";
        }
        echo "<br/>";
      }
      /*Creciente*/
      for($i=1;$i<=$altura;$i++){
        for ($j=1;$j<=$i;$j++) { 
        echo "*";
        }
        echo "<br/>";
      }
    ?>
</body>
</html>
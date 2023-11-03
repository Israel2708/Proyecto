<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
    //Creo la variable frase
    $frase="No malgastes tu tiempo, pues de esa materia está formada la vida.";
  // Muestra su contenido por pantalla
  echo "<p>$frase</p>";
  //Cuenta el nº de apariciones por cada 1 de las vocales
  $contador = [
    'a'=>0,
    'e'=>0,
    'i'=>0,
    'o'=>0,
    'u'=>0,
  ];
  
  
  for($i=0;$i<strlen($frase);$i++){
    if($frase[$i]=="a"){$contador['a'++];}
    elseif ($frase[$i]=="e") {$contador['e'++];}
    elseif ($frase[$i]=="i") {$contador['i'++];}
    elseif ($frase[$i]=="o") {$contador['o'++];}
    elseif ($frase[$i]=="u") {$contador['u'++];}
  }
 var_dump($contador);

    ?>
</body>
</html>
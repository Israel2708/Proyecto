<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Tabla de multiplicar</h1>
    <?php
    $numero=5;
    echo "<table border='1'>";
    echo "<tr>";
      for($base=0;$base<=10;$base++){
        for($multiplicado=$numero;$multiplicado==$numero;$multiplicado++){
            echo "<td>$multiplicado x $base = ";
            echo ($multiplicado*$base);
            echo"</td>";
        }
        echo "</tr>";
      }
      echo "</table>";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
    //Muestra el contenido que llega a esta pagina
    //var_dump($_REQUEST);
    $numero= $_REQUEST['numero'];
    
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
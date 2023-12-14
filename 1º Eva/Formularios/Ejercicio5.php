<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
    //Muestra el contenido que llega a esta pagina
    //var_dump($_REQUEST);
    if (isset($_REQUEST['num1']) && isset($_REQUEST['num2']) && isset($_REQUEST['operacion'])) {
      $num1 = $_REQUEST['num1'];
      $num2 = $_REQUEST['num2'];
      $operacion = $_REQUEST['operacion'];

      if ($operacion == "+") {
        $resultado = $num1 + $num2;
      } elseif ($operacion == "-") {
        $resultado = $num1 - $num2;
      } elseif ($operacion == "x") {
        $resultado = $num1 * $num2;
      } elseif ($operacion == "/") {
        if ($num2 != 0) {
          $resultado = $num1 / $num2;
        } else {
          echo "La división por 0 no está permitida.";
        }
      }

      echo "Resultado: $num1 $operacion $num2 = $resultado";
    }
    ?>
</body>
</html>


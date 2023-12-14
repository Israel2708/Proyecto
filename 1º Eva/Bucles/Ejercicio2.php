<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Tablero de ajedrez</h1>
    <?php
    $blanco='#FFFFFF';
    $negro="#000000";
    echo "<table border='1'>"; // Inicio de la tabla

    for ($a=1; $a <=4 ; $a++) { //Ciclo que dibuja nuestras filas impares
        echo "<tr>";
        for ($i=1; $i <=4 ; $i++) { //Ciclo que dibuja nuestra primera fila
        echo "<td bgcolor=$blanco></td>";	//Primera columna en blanco
        echo "<td bgcolor=$negro></td>";	//Segunda columna en negro
    }
        echo "<tr>";
        for ($i=1; $i <=4 ; $i++) { //Ciclo que dibuja nuestras filas pares
        echo "<td bgcolor=$negro></td>";	//Primera columna en negro
        echo "<td bgcolor=$blanco></td>";	//Segunda columna en blanco
        }
    }
    echo "</table>";  //Fin de la tabla
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
    // Recogo el parametro
    $opcionusuario = $_REQUEST['opcion'];
    //Muestro por pantalla lo que elige el usuario
    echo "El usuario a elegido $opcionusuario";
    echo"<br>";
    //Opcion de la maquina
    // Piedra 1 Papel 2 Tijera 3
    $opcionordenador=rand(1,3);
    // Muestro lo que genera el ordenador
    echo "El ordenador ha elegido $opcionordenador";
    // Calcular el resultado
    if ($opcionordenador == $opcionusuario) {
        echo "<p> Empate</p>";
    }elseif (($opcionordenador == 1 && $opcionusuario==3)|| 
            ($opcionordenador == 2 && $opcionusuario==1)||
            ($opcionordenador == 3 && $opcionusuario==2)){
    echo "<p>Gana el ordenador</p>";
    }else {
        echo"<p> Gana el usuario</p>";
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
<h1>FizzBuz</h1>
    <?php
       for ($i = 1; $i <=100; $i++){
        echo "<br>";
    if ($i%3==0 && $i%5==0){
    echo "FizzBuzz";
    }

    elseif ($i%3==0){
        echo "Fizz";
    }
   elseif ($i%5==0){
        echo "Buzz";
    }
    else {
        echo $i;
    }
    }
    ?>
</body>
</html>
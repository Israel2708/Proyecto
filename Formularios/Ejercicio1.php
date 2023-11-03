<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 1</title>
</head>
<body>
<?php
    /*El isset deternmina si una variable esta definida o no*/
    if(isset($_REQUEST['numero']) && !empty($_REQUEST['numero'])){
        $Romano = $_REQUEST['numero'];
        $resultado=0;

        if($Romano == 'I') {
            $resultado = 1;
        }
        elseif($Romano == 'V'){
            $resultado = 5;
        }
        elseif ($Romano == 'X'){
            $resultado = 10;
        }
        elseif ($Romano == 'L'){
            $resultado = 50;
        }
        elseif ($Romano == 'C'){
            $resultado = 100;
        }
        elseif ($Romano == 'D'){
            $resultado = 500;
        }
        elseif ($Romano == 'M'){
            $resultado = 1000;
        }
        else {
            echo "No has enviado nada";
        }
        
        echo  "El resultado del $Romano en decimal es $resultado";
        
    }
?>
</body>
</html>
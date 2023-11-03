<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
     //Creo el array
     $miArray=[];
     // Relleno el array con los numeros aleatorios
     for($i=0;$i<10;$i++){
        $numerorepetido= false;    
     // Genero numero aleatorio
     $numGenerado = rand(0,15);
     //Compruebo que no es repetido
     for($j=0; $j<count($miArray);$j++){
         if($miArray[$j]==$numGenerado){
             //este numero esta repetido
             $numerorepetido = true;
         } 
     }
     //Sino es repetido lo guardo
     if ($numerorepetido == false){
     $miArray[] =$numGenerado;
     echo $miArray[$j]. " "; 
    } else{
        $i--;
    }
     
 }
   
    ?>
</body>
</html>
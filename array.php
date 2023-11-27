<?php
$productos = array("Disco SSD", "Memoria RAM", "Monitor","PC");
$numero_de_elementos = count($productos);

for ($i = 0; $i < $numero_de_elementos; $i++ ) {
    echo $productos[$i];
    echo "<br>";
}

echo "<br>";
$edades = array("Juan" => "25", "María" => "28", "Paco" => "27");

foreach ($edades as $clave => $valor) {
    echo "Clave: " . $clave . " - Valor: " . $valor;
    echo "<br>";
}
echo "<br>";
$var = "123";
 
if(filter_var($var, FILTER_VALIDATE_INT)){
    echo "La variable " . $var . " es un numero ";
}else{
    echo "La variable " . $var . " no es un numero ";
}
echo "<br>";
echo "<br>";

if (filter_var("any@testdomain.com", FILTER_VALIDATE_EMAIL)) {
    echo 'Valid email';
}else{
    echo 'Invalid email';
}
echo "<br>";
echo "<br>";
$i = 10;
do {
    echo $i;
    echo "<br>";
    $i--;
} while ($i >= 1);
echo "<br>";
echo "<br>";
$i = 1;
do {
    echo $i;
    echo "<br>";
    $i++;
} while ($i <= 10);
echo "<br>";
echo "<br>";
//Condicional
$numero = 2;
switch ($numero) {
    case 1:
        echo "La variable es igual a 1";
        break;
    case 2:
        echo "La variable es igual a 2";
        break;
    default:
        echo "La variable es un número distinto a 1 y 2";
}
echo "<br>";
echo "<br>";
$a = 1;
$b = 2;
if ($a > $b) {
    echo "A es mayor que B";
} elseif ($a == $b) {
    echo "A es igual que B";
} else {
    echo "A es menor que B";
}
echo "<br>";
echo "<br>";
$lista = array("Pepe", "María", "Juan");
print_r($lista);
echo "<br>";
echo "<br>";
$nombre = "Pepe";
$edad = 30;
$nota = 7.5;
var_dump($nombre);
// string(4) "Pepe"
var_dump($edad);
// int(30)
var_dump($nota);
// float(7.5)
echo "<br>";
echo "<br>";
//Piramide
//Modo decreciente
$altura=10;
for ($i=$altura;$i>=0;$i--) { 
    for ($j=1; $j<=$i ; $j++) { 
        echo"*";
    }
    echo "<br>";
}
//Modo creciente
for ($i=1;$i<=$altura;$i++) { 
    for ($j=1; $j<=$i ; $j++) { 
        echo"*";
    }
    echo "<br>";
}
echo "<br>";
$zara = [
    123 => [
      'nombre' => 'Camisa a cuadros',
      'precio' => 29.95,
      'sexo' => 'Hombre'
    ],
    234 => [
      'nombre' => 'Falda manga',
      'precio' => 19.95,
      'sexo' => 'Mujer'
    ],
    345 => [
      'nombre' => 'Bolso minúsculo',
      'precio' => 50,
      'sexo' => 'Mujer'
    ]
];
    echo $zara[345]['nombre'];
    echo "<br>";
    echo $zara[345][ 'precio'];
    echo "<br>";
    echo $zara[345]['sexo'];
    echo "<br>";
    echo "<br>";

//Operaciones definidas por el usuario
$num1=rand(1,5);
$num2=rand(6,10);
function operaciones($num1,$num2,$operacion){
    $resultado=0;
    if ($operacion=='Sumar') {
        $resultado=$num1+$num2;
    }
    elseif ($operacion=='Resta') {
        $resultado=$num1-$num2;
    }
    elseif ($operacion=='Multiplicacion') {
        $resultado=$num1*$num2;
    } return $resultado;
    
}
$opera = operaciones($num1,$num2,"Sumar");
echo $opera . "<br>";
echo "<br>";

//Operaciones fijas
$numero1=rand(10,15);
$numero2=rand(16,20);
echo $numero1 + $numero2 ;
echo "<br>";
echo  $numero2 - $numero1;
echo "<br>";
echo $numero1 * $numero2;
echo "<br>";
echo $numero2 / $numero1;
echo "<br>";
echo "<br>";
//Comprobar validaciones
//Si no esta definida
var_dump( is_null($prue) );
echo "<br>";
echo "<br>";
//Si esta definida
$definida = NULL;
var_dump( is_null($definida) );
echo "<br>";
echo "<br>";
//Si esta definida pero sin valor
$sinvalor;
var_dump( is_null($sinvalor) );
echo "<br>";
echo "<br>";
//La destruimos con unset()
$destruida="Hola";
unset($destruida);
var_dump( is_null($destruida) );
echo "<br>";
echo "<br>";
//Comprobacion de variables
var_dump (isset($prue));
//Condicionales elseif else if
echo "<br>";
echo "<br>";
$condicion=2;
if ($condicion<=1){
    echo "la condicion es menor";
}
else if ($condicion==2) {
    echo "La condicion es correcta";
}
else {
    echo "La condicion es mayor";
}
echo "<br>";
echo "<br>";
//Condicional
?>
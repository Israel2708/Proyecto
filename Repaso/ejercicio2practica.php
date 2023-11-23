<?php

$nota=rand(1,10);
echo "Tu nota obetenida es $nota ";
if ($nota<5){
    echo "Insuficiente";}
elseif ($nota<6) {
    echo "Suficiente";
}
elseif ($nota<7) {
    echo "Bien";
}
elseif ($nota<9) {
    echo "Notable";
}
elseif ($nota<10) {
    echo "Sobresaliente";
}
?>
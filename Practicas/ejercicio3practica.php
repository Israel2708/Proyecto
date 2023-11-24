<?php
$numero=rand(1,7);
echo "El dia de hoy es $numero ";
if ($numero==1){
    echo "Lunes";}
elseif ($numero==2) {
    echo "Martes";
}
elseif ($numero==3) {
    echo "Miercoles";
}
elseif ($numero==4) {
    echo "Jueves";
}
elseif ($numero==5) {
    echo "Viernes";
}
elseif ($numero==6) {
    echo "Sabado";
}
elseif ($numero==7) {
    echo "Domingo";
}
?>
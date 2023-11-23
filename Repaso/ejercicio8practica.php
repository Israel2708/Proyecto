<?php
$arraynumeros=[];
for ($i=0; $i <10 ; $i++) { 
   $arraynumeros[]=rand(1,10);
}
for ($i=0; $i <count($arraynumeros) ; $i++) { 
   echo "<p>".$arraynumeros[$i]. "</p>"; 
 }
?>
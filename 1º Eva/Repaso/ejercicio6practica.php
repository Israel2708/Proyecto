<?php
$numero=2;
echo "<table border=1>";
echo "<tr>";
for ($base=0; $base<10 ; $base++) { 
    for ($multiplicado=$numero;$multiplicado==$numero;$multiplicado++){
        echo "<td>$multiplicado x $base = ";
        echo ($multiplicado*$base);
        echo"</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
?>
<?php
$blanco='#FFFFFF';
$negro="#000000";
echo "<table border='1'>";
for ($i=1; $i<4 ; $i++) { 
    echo "<tr>"; 
    for ($i=1; $i<4 ; $i++){
        echo "<td bgcolor=$blanco></td>";
        echo "<td bgcolor=$negro></td>";
    }
    echo "<tr>";
    for ($i=1; $i<4 ; $i++){
        echo "<td bgcolor=$negro></td>";
        echo "<td bgcolor=$blanco></td>";
    }
}

echo "</table>";
?>
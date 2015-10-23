<?php
echo "<table>";
for($i = 0; $i <=2; $i++){
    echo "<tr>";
    for($j = 0; $j <= 2; $j++){
        $p = $i*3 + $j;
        if(!isset($posiciones[$p])){
            echo "<td><input type='text' name='posiciones[$p]' /></td>";
        } else {
            echo "<td><input type='text' name='posiciones[$p]' value='$posiciones[$p]' /></td>";
        }
    }
    echo "</tr>";
}
echo "</table>";

<?php
    $operando = rand(1,9);            
    for ($i = 0; $i < 5; $i++){
        $n = rand(1,9);
        shuffle($operaciones);
        echo "<form name='FormSeries' action='ProcesaNumeros.php' method='POST'>";
        echo "<table>";
        echo "<tr>";
        
        for ($j = 0; $j < 4; $j++){
                echo "<td><input type='text' name='series[$i][$j]' value='$n' readonly></td>";
                if($operaciones[0] == "suma"){
                    $n = $n + $operando;
                } else {
                    $n = $n * $operando;
                }
        }
        
        echo "<td><input type='hidden' name='series[$i][$j]' value='$n'></td>";
        echo "<td><input type='text' name='series[$i][5]'></td>";       
    }    
    echo "</tr>";
    echo "</table>";
    echo "<input class='submit' type='submit' value='Enviar' name='botonenvio'/>";
    echo "</form>";
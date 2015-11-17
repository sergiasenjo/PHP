<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Solución:</h1>
        <?php        
            if($aciertos !== "No hay aciertos"){
                array_multisort(array_column($aciertos, 2),SORT_DESC,$aciertos);

                foreach($aciertos as $key => $serie){
                    echo "<h2>";
                    for($j = 0; $j < 5; $j++){                    
                        echo $aciertos[$key][$j];
                        echo " ";
                    }
                    echo "</h2>";
                    echo "<br>";
                }
            } else {
                echo "<h2>$aciertos</h2>";
            }
        ?>
    </body>
</html>
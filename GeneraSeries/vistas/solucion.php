<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Has acertado las siguientes series:</h1>
        <?php
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
        ?>
    </body>
</html>
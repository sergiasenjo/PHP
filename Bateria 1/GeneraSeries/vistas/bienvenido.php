<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Generador de series</title>
    </head>
    <body>
        
            <form name='FormSeries' action='ProcesaNumeros.php' method='POST'>
            <table>
        <?php    
            foreach($series as $serie => $numeros){
                echo "<tr>";
                foreach($numeros as $numero => $valor){
                    if($numero == 4){
                        echo "<input type='hidden' name='series[$serie][$numero]' value='$valor'>";
                    } else {
                        echo "<td><input type='text' name='series[$serie][$numero]' value='$valor' readonly></td>";
                    }                    
                }                
                echo "<td><input type='text' name='series[$serie][5]'></td>";
                echo "</tr>";
            }
        ?>
            </table>
            <input class='submit' type='submit' value='Enviar' name='botonenvio'/>
        </form>
    </body>
</html>
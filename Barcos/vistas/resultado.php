<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Resultado de barcos</title>
    </head>
    <body>
        <table>
        <?php
            foreach($jugada as $fila => $filas){
                echo "<tr>";
                foreach($filas as $columna => $valor){
                    if(isset($barcos[$fila][$columna])){
                        if($barcos[$fila][$columna] == $valor){
                            echo "<td><input type='text' value='X' size='1' readonly/></td>";
                        } else {
                            echo "<td><input type='text' value='*' size='1' readonly/></td>";
                        }
                    } else {
                        if($jugada[$fila][$columna] == "X"){
                            echo "<td><input type='text' value='O' size='1' readonly/></td>";
                        } else {
                            echo "<td><input type='text' value='' size='1' readonly/></td>";
                        }
                    }
                }
                echo "</tr>";
            }
        ?>
        </table>
        <br>
        <form name="FormVolver" action="../index.php" method="POST">
            <?php
                echo "<input type='submit' name='BotonVolver' value='Volver' />";
            ?>
        </form>
    </body>
</html>
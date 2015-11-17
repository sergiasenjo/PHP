<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bienvenido a barcos</title>
    </head>
    <body>
        <form name="FormTablero" action="ProcesaJugada.php" method="POST">
            <table>
                <?php
                    for($i = 0; $i < 10; $i++){
                        echo "<tr>";
                        for($j = 0; $j < 10; $j++){
                            echo "<td><input type='text' name='jugada[$i][$j]' size='1' maxlength='1' /></td>";
                        }
                        echo "</tr>";
                    }
                ?>
            </table>
            <br>
            <input type="submit" value="Enviar jugada" name="botonenvio" />
        </form>
    </body>
</html>
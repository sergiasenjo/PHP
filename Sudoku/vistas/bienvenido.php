<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bienvenido a Sudoku</title>
        <link rel="stylesheet" href="../css/style.css" />
    </head>
    <body>
        <form name="FormTablero" action="ProcesaJugada.php" method="POST">
        <?php
            include "vistas/tablero.php";
        ?>
            <input type="submit" name="botonenvio" value="Enviar" />
        </form>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
        <title>Tres en raya</title>
    </head>
    <body>
        <h1>Bienvenido, introduce una jugada</h1>
        <?php
            echo "<div class='tablacentrada'>";
            echo "<form name='FormJugada' action='ProcesaJugada.php' method='POST'>";
            include 'tablero.php';
            echo "<br>";
            echo "<input class='submit' type='submit' value='Enviar jugada' name='botonenvio' />";
            echo "</form>";
            echo "</div>";
        ?>
    </body>
</html>
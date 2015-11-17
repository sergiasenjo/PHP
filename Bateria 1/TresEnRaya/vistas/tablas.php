<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
        <title>Tres en raya</title>
    </head>
    <body>
        <h1>Tablas</h1>
        <?php
            echo "<div class='tablacentrada'>";
            echo "<form name='FormJugada' action='../index.php' method='POST'>";
            include 'tablero.php';
            echo "<br>";
            echo "<input class='submit' type='submit' value='Volver a jugar' name='botonenvio' />";
            echo "</form>";
            echo "</div>";
        ?>
    </body>
</html>
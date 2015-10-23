<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <title>Partido con más goles en casa</title>
    </head>
    <body>
        <?php       
            echo "<form name='FormEquipos' action='ProcesaEquipos.php' method='POST'>";               
            echo "<label>Equipos: </label><input type='text' name='equipos' size='90'></input>";                             
            echo "<br>";
            echo "<input class='submit' type='submit' value='Enviar' name='botonenvio' />";
            echo "</form>";
        ?>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <title>Temperaturas</title>
    </head>
    <body>
        <?php       
            echo "<form name='FormCiudades' action='ProcesaCiudades.php' method='POST'>";               
            echo "<label>Ciudades: </label><input type='text' name='ciudades' size='90'></input>";                             
            echo "<br>";
            echo "<input class='submit' type='submit' value='Enviar' name='botonenvio' />";
            echo "</form>";
        ?>
    </body>
</html>

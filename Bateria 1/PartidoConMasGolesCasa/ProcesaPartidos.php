<?php
// Código para evitar que puedan acceder a ProcesaForm directamente
if (!isset($_POST['botonenvio'])) {
    header('Location: http://localhost:8000');
}

// Variables
$resultados = $_POST['resultados'];

$GL = array_column($resultados, 'GL');

$GLMax = max($GL);

foreach($GL as $key => $goles){
    if($goles == $GLMax){
        $partidos[] = $resultados[$key];
    }
}

?>

<!DOCTYPE html>
<html>
    <head>   
        <title>Partido con más goles en casa</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <style>
            .data {
                color: brown;
                display: block;
            }
        </style>
    </head>
    <body>
        <h1>Partido/s con más goles en casa</h1>
        <div class="box">
            <?php
                echo "<table>";
                foreach($partidos as $partido){
                    echo "<tr>";
                    foreach($partido as $dato){
                        echo "<td>$dato</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            ?>
        </div>
        <form name="FormVolver" action="http://localhost:8000" method="POST">
            <input class="submit" type="submit" value="Volver" name="botonvolver">
        </form>
    </body>
</html>


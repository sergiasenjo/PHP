<?php
// Código para evitar que puedan acceder a ProcesaForm directamente
if (!isset($_POST['botonenvio'])) {
    header('Location: http://localhost:8000');
}

// Variables
$datos = $_POST['datos'];

foreach($datos as $key => $dato){
    $tMax[$key] = max(array_column($dato, 'TMax'));
    $tMin[$key] = min(array_column($dato, 'TMin'));
    $sumaTMax = array_sum(array_column($dato, 'TMax'));
    $sumaTMin = array_sum(array_column($dato, 'TMin'));
    $tMed[$key] = ($sumaTMax + $sumaTMin) / 24;
}

array_multisort($tMax, SORT_NUMERIC, SORT_ASC, 
                $tMed, SORT_NUMERIC, SORT_ASC,
                $tMin, SORT_NUMERIC, SORT_ASC,
                $datos);

?>

<!DOCTYPE html>
<html>
    <head>   
        <title>Resumen de temperaturas</title>
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
        <h1>Resumen de temperaturas</h1>
        <div class="box">
            <table>
                <tr>
                    <td>Ciudad</td><td>TMax</td><td>TMin</td><td>TMed</td>
                </tr>
                <?php
                foreach($datos as $key => $dato){
                    echo "<tr>";
                    echo "<td>$key</td>";
                    echo "<td>$tMax[$key]</td>";
                    echo "<td>$tMin[$key]</td>";
                    echo "<td>$tMed[$key]</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
        <form name="FormVolver" action="http://localhost:8000" method="POST">
            <input class="submit" type="submit" value="Volver" name="botonvolver">
        </form>
    </body>
</html>


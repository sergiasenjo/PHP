<?php

// Código para evitar que puedan acceder a ProcesaForm directamente
if (!isset($_POST['botonenvio'])) {
    header('Location: http://localhost:8000');
}

// Variables
$resultados = $_POST['resultados'];

$equipos = array_unique(array_column($resultados, 'EquipoLocal'));

foreach ($equipos as $equipo){
    $clasificacion[$equipo] = ["Ptos" => 0,"GF" => 0,"GC" => 0,"DG" => 0];
}

foreach($resultados as $resultado){
    $eqL = $resultado['EquipoLocal'];
    $eqV = $resultado['EquipoVisitante'];
    $GL = $resultado['GL'];
    $GV = $resultado['GV'];
    
    if($GL > $GV){
        $clasificacion[$eqL]["Ptos"] += 3; 
    } else {
        if($GL > $GV){
            $clasificacion[$eqV]["Ptos"] += 3;
        } else{
            $clasificacion[$eqL]["Ptos"] += 1;
            $clasificacion[$eqV]["Ptos"] += 1;
        }
    }
    
    $clasificacion[$eqL]["GF"] += $GL;
    $clasificacion[$eqV]["GF"] += $GV;
    $clasificacion[$eqL]["GC"] += $GV;
    $clasificacion[$eqV]["GC"] += $GL;
    
}

foreach($clasificacion as $equipo => $datosEquipo){
    $datosEquipo["DG"] = $datosEquipo["GF"] - $datosEquipo["GC"];
    $clasificacion[$equipo] = $datosEquipo;
    
}

$ptos = array_column($clasificacion, "Ptos");
$DG = array_column($clasificacion, "DG");

array_multisort($ptos,SORT_DESC,$DG,SORT_DESC,$equipos,SORT_ASC,$clasificacion);

?>

<!DOCTYPE html>
<html>
    <head>   
        <title>Clasificación</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <style>
            .data {
                color: brown;
                display: block;
            }
        </style>
    </head>
    <body>
        <h1>Clasificación de la Liga</h1>
        <div class="box">
            <?php
                echo "<table>";
                echo "<tr>";
                    echo "<td>Equipo</td>";
                    echo "<td>Ptos</td>";
                    echo "<td>GF</td>";
                    echo "<td>GC</td>";
                    echo "<td>DG</td>";
                    echo "</tr>";
                foreach($clasificacion as $equipos => $equipo){                    
                    echo "<tr>";
                    echo "<td>$equipos</td>";
                    foreach($equipo as $dato){                        
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
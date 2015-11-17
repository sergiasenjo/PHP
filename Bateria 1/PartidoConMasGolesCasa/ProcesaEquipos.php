<?php
    if (!isset($_POST['botonenvio'])) {
        header('Location: http://localhost:8000');
    }
    
    $equiposConComas = $_POST['equipos'];
    if(strpos(",", $equiposConComas) == false){
        header('Location: http://localhost:8000');
    } else{
        $equiposL = explode(",", $equiposConComas);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <title>Partido con más goles en casa</title>
    </head>
    <body>
        <?php
            $equiposV = $equiposL;
            $datos = ["GL","GV"];
        
            echo "<form name='FormPartidos' action='ProcesaPartidos.php' method='POST'>";
            echo "<table>";
            
            foreach ($equiposL as $key => $equipoL){
                foreach($equiposV as $key => $equipoV){
                    if($equipoL !== $equipoV){
                        $partidos[] = ["$equipoL","$equipoV"];
                    }
                }                
            }
            
            foreach($partidos as $p => $partido){                
                echo "<tr>";
                echo "<td>$partido[0]<input type='hidden' name='resultados[$p][EquipoLocal]' value='$partido[0]' ></input></td>";
                foreach($datos as $dato){
                    echo "<td><input type='number' name='resultados[$p][$dato]' size='5' value='0'></input></td>";
                }
                echo "<td>$partido[1]<input type='hidden' name='resultados[$p][EquipoVisitante]' value='$partido[1]' ></input></td>";
                echo "</tr>"; 
            }            
            echo "</table>";
            echo "<br>";
            echo "<input class='submit' type='submit' value='Enviar' name='botonenvio' />";
            echo "</form>";
        
        ?>
    </body>
</html>
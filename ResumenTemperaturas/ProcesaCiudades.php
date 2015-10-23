<?php
    if (!isset($_POST['botonenvio'])) {
        header('Location: http://localhost:8000');
    }
    
    $ciudadesConComas = $_POST['ciudades'];
    $ciudades = explode(",", $ciudadesConComas);
    $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
    "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    $datos = ["TMax", "TMin"];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <title>Temperaturas</title>
    </head>
    <body>
        <?php 
        $esLetra = true;
        $ciudadesSinComas = implode("", $ciudades);
        
        if(ctype_alpha($ciudadesSinComas)){
            echo "<form name='FormTemperaturas' action='ProcesaTemperaturas.php' method='POST'>";
            
            foreach($ciudades as $ciudad){                
                echo "<div class='box'>";
                echo "<h1>$ciudad</h1>";
                echo "<table>";
                echo "<tr>";
                    echo "<td><b>Mes</b></td><td><b>TMax</b></td><td><b>TMin</b></td>";
                echo "</tr>";
                foreach($meses as $mes){
                    echo "<tr>";
                    echo "<td>$mes</td>";
                    foreach($datos as $dato){
                        echo "<td><input type='text' name='datos[$ciudad][$mes][$dato]' size='5' value='0'></input></td>";                        
                    }
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";                
            }
            echo "<br>";
            echo "<input class='submit' type='submit' value='Enviar' name='botonenvio' />";
            echo "</form>";
        } else{
            header('Location: http://localhost:8000');
        }
        
        ?>
    </body>
</html>
<?php
// Código para evitar que puedan acceder a ProcesaForm directamente
if (!isset($_POST['botonenvio'])) {
    header('Location: http://localhost:8000');
}
// Variables
$anio = $_POST['anio'];

function Bisiesto($num)
{
    if($num%4 == 0){
        if($num%100 == 0){ 
           if($num%400 == 0){
              $bisiesto = true; 
           } else{
               $bisiesto = false; 
           }
        } else{
            $bisiesto = true;
        }
    } else{
        $bisiesto = false;
    }
    
    return $bisiesto;
}

function ProximoBisiesto($num)
{
    if($num%4 == 0){
       $a = $num + 4;
       if(($a%100 == 0) && ($a%400 != 0)){
           $a = $a + 4;
       } else{
           $a;
       }
    } else{
        if($num%4 == 3){
           $a = $num + 1;
       if(($a%100 == 0) && ($a%400 != 0)){
           $a = $a + 4;
       } else{
           $a;
       } 
        }else {
            if($num%4 == 2){
                $a = $num + 2;
                if(($a%100 == 0) && ($a%400 != 0)){
                    $a = $a + 4;
                } else{
                    $a;
                }
            } else{
                $a = $num + 3;
                if(($a%100 == 0) && ($a%400 != 0)){
                    $a = $a + 4;
                } else{
                    $a;
                }
            }
        }
    }
    
    return $a;
}

?>

<!DOCTYPE html>
<html>
    <head>   
        <title>Solución</title>
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
        <h1>
            <?php 
                $b = Bisiesto($anio);
                if($b == false){
                    $solucion = "NO es BISIESTO";
                } else{
                    $solucion = "es BISIESTO";
                }
        
                echo "$anio $solucion"; 
            ?>
        </h1>
        <h1>
            <?php 
                $proxBisiesto = ProximoBisiesto($anio);
                $aniosB = $proxBisiesto - $anio;
                echo "Quedan $aniosB años para el siguiente año bisiesto"; 
            ?>
        </h1>
        <form name="FormVolver" action="http://localhost:8000" method="POST">
            <input class="submit" type="submit" value="Volver" name="botonvolver">
        </form>
    </body>
</html>
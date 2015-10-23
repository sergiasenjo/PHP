<?php

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

// Código para evitar que puedan acceder a ProcesaForm directamente
if (!isset($_POST['botonenvio'])) {
    header('Location: http://localhost:8000');
}
// Variables
$fecha = $_POST['fecha'];

$aFecha = explode("-", $fecha);

$error = true;

foreach($aFecha as $valor){
    if(!is_numeric($valor)){
        $error = false;
    } else{
        if(count($aFecha) != 3){
            $error = false;
        } else{
            $dia = $aFecha[0];
            $mes = $aFecha[1];
            $anio = $aFecha[2];
        }        
    }
}

switch ($mes) {
    case 1: 
        if($dia > 31 || $dia < 1){
            $error = false;
        } else{
            $error = true;
        }
        break;    
    case 2:
        $bisiesto = Bisiesto($anio);
        if($bisiesto == true){
           if($dia > 29 || $dia < 1){
            $error = false;
            } else{
                $error = true;
            } 
        } else{
            if($dia > 28 || $dia < 1){
            $error = false;
            } else{
                $error = true;
            } 
        }
        break;    
    case 3:
        if($dia > 31 || $dia < 1){
            $error = false;
        } else{
            $error = true;
        }
        break;    
    case 4:
        if($dia > 30 || $dia < 1){
            $error = false;
        } else{
            $error = true;
        }
        break;    
    case 5:
        if($dia > 31 || $dia < 1){
            $error = false;
        } else{
            $error = true;
        }
        break;    
    case 6:
        if($dia > 30 || $dia < 1){
            $error = false;
        } else{
            $error = true;
        }
        break;    
    case 7:
        if($dia > 31 || $dia < 1){
            $error = false;
        } else{
            $error = true;
        }
        break;    
    case 8:
        if($dia > 31 || $dia < 1){
            $error = false;
        } else{
            $error = true;
        }
        break;    
    case 9:
        if($dia > 30 || $dia < 1){
            $error = false;
        } else{
            $error = true;
        }
        break;    
    case 10:
        if($dia > 31 || $dia < 1){
            $error = false;
        } else{
            $error = true;
        }
        break;    
    case 11:
        if($dia > 30 || $dia < 1){
            $error = false;
        } else{
            $error = true;
        }
        break;    
    case 12:
        if($dia > 31 || $dia < 1){
            $error = false;
        } else{
            $error = true;
        }
        break;    

    default:
        break;
}

if($error = false){
    $solucion = "La fecha NO es correcta";
} else{
    $solucion = "La fecha es correcta";
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
                echo "$solucion"; 
            ?>
        </h1>
        <form name="FormVolver" action="http://localhost:8000" method="POST">
            <input class="submit" type="submit" value="Volver" name="botonvolver">
        </form>
    </body>
</html>
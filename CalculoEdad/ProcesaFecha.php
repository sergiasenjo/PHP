<?php
// Código para evitar que puedan acceder a ProcesaForm directamente
if (!isset($_POST['botonenvio'])) {
    header('Location: http://localhost:8000');
}

// Funciones
function Bisiesto($num){
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

function ValidadorFecha($fecha){    
    $aFecha = explode("-", $fecha);
    $validacion = true;
    foreach($aFecha as $valor){
        if(!is_numeric($valor)){
            $validacion = false;
        } else{
            if(count($aFecha) == 3){ 
                $dia = $aFecha[0];
                $mes = $aFecha[1];
                $anio = $aFecha[2];
                $validacion = true;
                
            } else{
                $validacion = false;
            }        
        }
    }
    
    if($validacion != false){
        switch ($mes) {
            case 1: 
                if($dia > 31 || $dia < 1){
                    $validacion = false;
                } else{
                    $validacion = true;
                }
                break;    
            case 2:
                $bisiesto = Bisiesto($anio);
                if($bisiesto == true){
                   if($dia > 29 || $dia < 1){
                    $validacion = false;
                    } else{
                        $validacion = true;
                    } 
                } else{
                    if($dia > 28 || $dia < 1){
                    $validacion = false;
                    } else{
                        $validacion = true;
                    } 
                }
                break;    
            case 3:
                if($dia > 31 || $dia < 1){
                    $validacion = false;
                } else{
                    $validacion = true;
                }
                break;    
            case 4:
                if($dia > 30 || $dia < 1){
                    $validacion = false;
                } else{
                    $validacion = true;
                }
                break;    
            case 5:
                if($dia > 31 || $dia < 1){
                    $validacion = false;
                } else{
                    $validacion = true;
                }
                break;    
            case 6:
                if($dia > 30 || $dia < 1){
                    $validacion = false;
                } else{
                    $validacion = true;
                }
                break;    
            case 7:
                if($dia > 31 || $dia < 1){
                    $validacion = false;
                } else{
                    $validacion = true;
                }
                break;    
            case 8:
                if($dia > 31 || $dia < 1){
                    $validacion = false;
                } else{
                    $validacion = true;
                }
                break;    
            case 9:
                if($dia > 30 || $dia < 1){
                    $validacion = false;
                } else{
                    $validacion = true;
                }
                break;    
            case 10:
                if($dia > 31 || $dia < 1){
                    $validacion = false;
                } else{
                    $validacion = true;
                }
                break;    
            case 11:
                if($dia > 30 || $dia < 1){
                    $validacion = false;
                } else{
                    $validacion = true;
                }
                break;    
            case 12:
                if($dia > 31 || $dia < 1){
                    $validacion = false;
                } else{
                    $validacion = true;
                }
                break;    

            default:
                $validacion = false;
                break;
        }
    }
    return $validacion;
}

// Variables
$edad;
$fechaConGuiones = $_POST['fecha'];
$fechaValidada = ValidadorFecha($fechaConGuiones);
$mensaje = "No es una fecha válida";

if($fechaValidada == false){
    $mensaje;
} else{
    $aFecha = explode("-", $fechaConGuiones);
    $diaN = $aFecha[0];
    $mesN = $aFecha[1];
    $anioN = $aFecha[2];
    
    $Hoy = getdate();
    $dia = $Hoy['mday'];
    $mes = $Hoy['mon'];
    $anio = $Hoy['year'];
    
    if($anio < $anioN){
        $fechaValidada = false;
    } else{
        $edad = $anio - $anioN;

        if($mes < $mesN)
        {
            $edad--;
        }
        else
        {
            if($mes == $mesN && $dia < $diaN)
            {
                $edad--;
            }
        } 
    }
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
                if($fechaValidada == false){
                    echo $mensaje;
                } else{
            ?>
            Edad: <em class='data'>
                <?php
                echo $edad;
                ?></em>
            <?php
                }
            ?>
        </h1>
        <form name="FormVolver" action="http://localhost:8000" method="POST">
            <input class="submit" type="submit" value="Volver" name="botonvolver">
        </form>
    </body>
</html>
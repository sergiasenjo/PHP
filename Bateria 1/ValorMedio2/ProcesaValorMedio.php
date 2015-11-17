<?php
// Código para evitar que puedan acceder a ProcesaForm directamente
if (!isset($_POST['botonenvio'])) {
    header('Location: http://localhost:8000');
}

// Funciones
function Evalua($numerosEvalua){
    
    foreach($numerosEvalua as $key => $valor){
        $aNum[] = $numerosEvalua[$key];
    }
    
    if(in_array(false, $numerosEvalua)){
       $salida = false; 
    } else{
       $salida = true; 
    }
    
    return $salida;
    
}

// Variables
$numerosConComas = $_POST['numeros'];

$numeros = explode(",", $numerosConComas);

if(Evalua($numeros)){
    $numUnicos = array_unique($numeros);
    $num = count($numUnicos);

    if (($num < 3)){
        $error = "<h1>No es una cadena válida</h1>";
        echo $error;
    } else{ 
        foreach ($numUnicos as $key => $valor){        
            $numerosSinRepetir[] = $numUnicos[$key];
        }  

        sort($numerosSinRepetir);

        for($i = 1; $i < count($numerosSinRepetir) - 1; $i++){
            $vMedio[] = $numerosSinRepetir[$i];
        }

        $valorMedio = implode("-", $vMedio);
    }
} else{
    echo $error;
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
            Valores Medios: <em class='data'>
                <?php 
                echo "$valorMedio"; 
                ?></em>
        </h1>
        <form name="FormVolver" action="http://localhost:8000" method="POST">
            <input class="submit" type="submit" value="Volver" name="botonvolver">
        </form>
    </body>
</html>
<?php
if (!isset($_POST['botonenvio'])) {
    header('Location: http://localhost:8000');
}

function hayAciertos($series) {
    $salida = false;
    $salidaSinAciertos = false;
    $f = 0;
    while(!$salida && !$salidaSinAciertos){
        if($series[$f][4] == $series[$f][5]){
            $salida = true;
        } else {
            if($f == 4){
                $salidaSinAciertos = true;
            } else {
                $f++; 
            }           
        }
    }
    return $salida;
}

function arrayAciertos($series) {
    $seriesAcertadas[][] = 0;
    foreach($series as $i => $numeros){
        foreach($numeros as $j => $numero){
            if($series[$i][4] == $series[$i][5]){
                $seriesAcertadas[$i][$j] = $numero; 
            } 
        }
    }
    return $seriesAcertadas;
}

$series = $_POST['series'];

$hayAciertos = hayAciertos($series);

if($hayAciertos){
    $aciertos = arrayAciertos($series);   
} else {
    $aciertos = "No hay aciertos";
}

include "vistas/solucion.php";
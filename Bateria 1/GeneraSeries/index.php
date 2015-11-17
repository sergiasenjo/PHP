<?php
    $series = [];
    $operaciones = ["suma", "multiplicacion"];
    
    function generaSeries($operaciones){
        for ($i = 0; $i < 5; $i++){
            $operando = rand(1,9);
            $n = rand(1,9);
            shuffle($operaciones);
            for ($j = 0; $j < 5; $j++){
                $series[$i][$j] = $n;
                if($operaciones[0] == "suma"){
                    $n = $n + $operando;
                } else {
                    $n = $n * $operando;
                }
            }       
        }
        return $series;
    }
    
    $series = generaSeries($operaciones);
    include "vistas/bienvenido.php";
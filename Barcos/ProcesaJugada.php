<?php
    function compruebaPosicion($minas, $a, $b){
        $x = $a - 1;
        $posicionCorrecta = true;
        while($x <= $a + 1 || !$posicionCorrecta){
            $y = $b - 1;
            while($y <= $b + 1 || !$posicionCorrecta){
                if(!isset($minas[$x][$y]) || $minas[$x][$y] == $minas[$a][$b] || $minas[$x][$y] == ""){
                    $posicionCorrecta = true;
                } else {
                    $posicionCorrecta = false;
                }
                $y++;
            }
            $x++;
        }        
        return $posicionCorrecta;
    }

    function generaMinas($barcos){        
        
        return $barcos;
    }

    $jugada = $_POST['jugada'];   
    
    // Generación del primer barco
    $a = rand(0,9);
    $b = rand(0,9);        
    $barcos[$a][$b] = "X";
    
    $minas = generaBarcos($barcos);
    
    include "vistas/resultado.php";
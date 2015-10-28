<?php
    function compruebaPosicion($minas, $a, $b){
        $x = $a - 1;
        $posicionCorrecta = true;
        while($x <= $a + 1 || !$posicionCorrecta){
            $y = $b - 1;
            while($y <= $b + 1 || !$posicionCorrecta){
                if(!isset($minas[$x][$y]) || $minas[$x][$y] == $minas[$a][$b]){
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

    function generaMinas($minas){

        $posicionCorrecta = false;
        $contador = 1;
        while(!$posicionCorrecta){
            $a = rand(0,9);
            $b = rand(0,9);        
            $minas[$a][$b] = "X";     
            $posicionCorrecta = compruebaPosicion($minas,$a,$b);
            if($posicionCorrecta){
                $minas[$a][$b] = "X";
                $contador++;
                if($contador <= 10){
                    $posicionCorrecta = false;
                } else {
                    $posicionCorrecta = true;
                }
            } else {
                $minas[$a][$b] = "";
            }
        }
        
        return $minas;
    }

    $jugada = $_POST['jugada'];   
    
    // Generación de la primera mina
    $a = rand(0,9);
    $b = rand(0,9);        
    $minas[$a][$b] = "X";
    
    $minas = generaMinas($minas);
    
    include "vistas/resultado.php";
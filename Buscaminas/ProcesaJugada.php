<?php
    function compruebaPosicion($minas, $a, $b){
        $x = $a - 1;
        $posicionCorrecta = true;
        while($x <= $a + 1 && $posicionCorrecta){            
            $y = $b - 1;
            while($y <= $b + 1 && $posicionCorrecta){
                if(isset($minas[$x][$y])){
                    $posicionCorrecta = false;
                }
                $y++;
            }
            $x++;
        }        
        return $posicionCorrecta;
    }

    function generaMinas($minas){
        $posicionCorrecta = true;
        $contador = 1;
        while($contador < 10){
            $a = rand(0,9);
            $b = rand(0,9);
            $posicionCorrecta = compruebaPosicion($minas,$a,$b);
            if($posicionCorrecta){                
                $minas[$a][$b] = "X";
                $contador++;
            }
        }
        
        return $minas;
    }

    $jugada = $_POST['jugada'];
    
    // Contador de jugadas
    $contJugada = 0;
    foreach($jugada as $fila => $filas){
        foreach($filas as $columna => $valor){
            if($jugada[$fila][$columna] == "X"){
                $contJugada++;
            }
        }        
    }
    
    if (!isset($_POST['botonenvio'])) {
        header('Location: http://localhost:8000');
    }
    
    // Controlador de numero de jugadas permitidas
    if($contJugada <= 10){
        // Generación de la primera mina
        $a = rand(0,9);
        $b = rand(0,9);        
        $minas[$a][$b] = "X";

        $minas = generaMinas($minas);

        include "vistas/resultado.php";
        
    } else{
        header('Location: http://localhost:8000');
    }    
    
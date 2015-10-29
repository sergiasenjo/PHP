<?php
    function generaBarcos($size, $direccion, $barcos){        
        
        if($direccion){    // Si la dirección es hacia arriba             
            $a = rand(0,7);
            $b = rand(0,9);            
            for($i = 0; $i < $size; $i++){
                $barcos[$a + $i][$b] = "X";                   
            }            
        } else{            // Si la dirección es hacia la derecha
            $a = rand(0,9);
            $b = rand(0,7);
            for($i = 0; $i < $size; $i++){
                $barcos[$a][$b + $i] = "X";
            } 
        }
        
        return $barcos;
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
    
    if($contJugada <= 10){
        // Inicializamos barcos
        $barcos = [];
        // Generación de los barcos
            $barcos = generaBarcos(3, rand(0,1), $barcos);
            $barcos = generaBarcos(2, rand(0,1), $barcos);
            $barcos = generaBarcos(2, rand(0,1), $barcos);
            $barcos = generaBarcos(1, rand(0,1), $barcos);
            $barcos = generaBarcos(1, rand(0,1), $barcos);
            $barcos = generaBarcos(1, rand(0,1), $barcos);

        include "vistas/resultado.php";
    } else{
        header('Location: http://localhost:8000');
    }
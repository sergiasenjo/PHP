<?php
    function compruebaGanador($pos){
        if (($pos[0] == "X" && $pos[1] == "X" && $pos[2] == "X") ||
            ($pos[3] == "X" && $pos[4] == "X" && $pos[5] == "X") ||
            ($pos[6] == "X" && $pos[7] == "X" && $pos[8] == "X") ||
            ($pos[0] == "X" && $pos[3] == "X" && $pos[6] == "X") ||
            ($pos[1] == "X" && $pos[4] == "X" && $pos[7] == "X") ||
            ($pos[2] == "X" && $pos[5] == "X" && $pos[8] == "X") ||
            ($pos[0] == "X" && $pos[4] == "X" && $pos[8] == "X") ||
            ($pos[2] == "X" && $pos[4] == "X" && $pos[6] == "X")) {
            $res = 1;
        } else {
            if (($pos[0] == "O" && $pos[1] == "O" && $pos[2] == "O") ||
                ($pos[3] == "O" && $pos[4] == "O" && $pos[5] == "O") ||
                ($pos[6] == "O" && $pos[7] == "O" && $pos[8] == "O") ||
                ($pos[0] == "O" && $pos[3] == "O" && $pos[6] == "O") ||
                ($pos[1] == "O" && $pos[4] == "O" && $pos[7] == "O") ||
                ($pos[2] == "O" && $pos[5] == "O" && $pos[8] == "O") ||
                ($pos[0] == "O" && $pos[4] == "O" && $pos[8] == "O") ||
                ($pos[2] == "O" && $pos[4] == "O" && $pos[6] == "O")) {
                $res = 0;
            } else {
                $res = 2;
            }
        }
        return $res;
    }
    
    function elaboraJugada($pos) {
        $salida = false;
        $p = 0;
        while(isset($pos[$p]) && !$salida) {
            if($pos[$p] == ""){
                $pos[$p] = "O";
                $salida = true;
            } else {
                $p++;
            }
        }
        
        return $pos;
    }
    
    if(isset($_POST['posiciones'])){
        $posiciones = $_POST['posiciones'];
    
        $resultado = compruebaGanador($posiciones);

        if($resultado == 1){
            include 'vistas/ganajugador.php';
        } else {
            if($resultado == 0){
                include 'vistas/ganasistema.php';
            } else {
                $posiciones = elaboraJugada($posiciones);
                
                $resultado = compruebaGanador($posiciones);
                
                if($resultado == 1) {
                    include 'vistas/ganajugador.php';
                } else {
                    if($resultado == 0){
                    include 'vistas/ganasistema.php';                    
                    } else {
                        $salida = false;
                        $i = 0;
                        while(isset($posiciones[$i]) && !$salida){
                            if($posiciones[$i] == ""){
                                $salida = true;
                            } else {
                                $i++;
                            }
                        }                
                        if(!$salida){
                            include 'vistas/tablas.php';
                        } else {
                            include 'vistas/introducejugada.php'; 
                        }
                    }                        
                }                
            }
        }
    } else {
        header('Location: http://localhost:8000');
    }
<?php
    function casillaVacia($pos) {
        $salida = false;
        $i = 0;
        while(isset($pos[$i]) && !$salida){
            if($pos[$i] == ""){
                $salida = true;
            } else {
                $i++;
            }
        }
        
        return $salida;
    }

    function compruebaGanador($pos){        
        $salida = false;
        $p = 0;        
        while($p < 3 && !$salida){            
            if(($pos[3*$p] == "X" && $pos[3*$p + 1] == "X" && $pos[3*$p + 2] == "X")
                || ($pos[$p] == "X" && $pos[$p + 3] == "X" && $pos[$p + 6] == "X")
                || ($pos[0] == "X" && $pos[4] == "X" && $pos[8] == "X") 
                || ($pos[2] == "X" && $pos[4] == "X" && $pos[6] == "X")){
                $salida = true;
                $res = 1;
            } else {
                if(($pos[3*$p] == "O" && $pos[3*$p + 1] == "O" && $pos[3*$p + 2] == "O")
                    || ($pos[$p] == "O" && $pos[$p + 3] == "O" && $pos[$p + 6] == "O")
                    || ($pos[0] == "O" && $pos[4] == "O" && $pos[8] == "O") 
                    || ($pos[2] == "O" && $pos[4] == "O" && $pos[6] == "O")){
                    $salida = true;
                    $res = 0;
                } else {
                    $p++;
                    $res = 2;
                }                
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
                        $vacia = casillaVacia($posiciones);
                        
                        if(!$vacia){
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
<?php
    class partida {
        var $rand;
        var $intentos;
        function __construct() {
            $this->rand = "" . mt_rand(1, 10);
            $this->intentos = 0;
        }
        function comprobarNumero($numero) {
            return ($numero === $this->rand);
        }
        function sumaIntentos() {
            return $this->intentos++;
        }
        function getRand() {
            return $this->rand;
        }
        function getIntentos() {
            return $this->intentos;
        }
    }
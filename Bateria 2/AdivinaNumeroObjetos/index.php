<?php
    include "class/Partida.php";
    session_start();
    if(!isset($_SESSION["partida"])) {
        $_SESSION["partida"] = new Partida();
    } else {
        $_SESSION["partida"]->sumaIntentos();
    }
    include 'vistas/jugada.php';
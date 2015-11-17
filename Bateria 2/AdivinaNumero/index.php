<?php
    session_start();
    if(!isset($_SESSION["rand"])) {
        $_SESSION["rand"] = "" . mt_rand(1,10);
        $_SESSION["intentos"] = 0;
    } else {
        $_SESSION["intentos"] += 1;
    }
    include 'vistas/jugada.php';
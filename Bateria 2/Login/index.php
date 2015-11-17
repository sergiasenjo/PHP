<?php
    session_start();
    
    $userCred = ["user" => "pepe", "pass" => "pepe"];
    $credIncorrectas = false;
    
    if(isset($_SESSION['credenciales'])){
        if(isset($_POST['botonlogout'])) {
            session_unset();
            session_destroy();
            include "vistas/login.php";
        } else {
            include "vistas/content.php";
        }        
    } else {
        if(empty($_POST) && empty($_GET)){
            include "vistas/login.php";
        } else {
            if(!isset($_POST['botonlogin'])){            
                include "vistas/login.php";
            } else {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $_SESSION['credenciales'] = ["user" => $user, "pass" => $pass];
                $cred = $_SESSION['credenciales'];
                if($cred['user'] === $userCred['user'] && $cred['pass'] === $userCred['pass']){
                    include "vistas/content.php";
                } else {
                    $credIncorrectas = true;
                    session_unset();
                    include "vistas/login.php";
                }
            }            
        }
    }    
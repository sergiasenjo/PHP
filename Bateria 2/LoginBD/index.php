<?php
    require_once 'class/usuario.php';

    session_start();
    
    $credIncorrectas = false;
    
    if(isset($_SESSION['credenciales'])){
        $userObj = $_SESSION['credenciales'];
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
                $userObj = Usuario::getByCredential($user, $pass);
                
                if($userObj){
                    $_SESSION['credenciales'] = $userObj;
                    include "vistas/content.php";
                } else {        
                    $credIncorrectas = true;
                    session_unset();
                    include "vistas/login.php";
                }
            }            
        }
    }    
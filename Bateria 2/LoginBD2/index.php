<?php
    require_once 'class/usuario.php';

    session_start();
    
    $error = false;
    
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
        if(empty($_POST)){
            include "vistas/login.php";
        } else {
            if(isset($_POST['botonregistro'])){
                include "vistas/register.php";
            } else {
                if(!isset($_POST['botonlogin'])){
                    if(!isset($_POST['envioregistro'])){
                        include "vistas/login.php";
                    } else {
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        $email = $_POST['email'];
                        $pintor = $_POST['pintor'];
                        
                        $newUser = new Usuario($user, $pass);
                        $check = $newUser->persist();
                        
                        if($check) {
                            include "vistas/login.php";
                        } else {
                            $error = true;
                            include "vistas/register.php";
                        }
                    }                   
                } else {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];                                
                    $userObj = Usuario::getByCredential($user, $pass);

                    if($userObj){
                        $_SESSION['credenciales'] = $userObj;
                        include "vistas/content.php";
                    } else {        
                        $error = true;
                        include "vistas/login.php";
                    }
                }
            }                        
        }
    }    
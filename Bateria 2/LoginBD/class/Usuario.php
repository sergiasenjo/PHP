<?php
    require_once 'class/BD.php';

    class Usuario {
        var $user;
        var $pass;
        
        public static function getByCredential($user,$pass) {
            $bd = BD::getConexion();
            $sqlSelect = 'select * from usuarios where user=:user and pass=:pass';
            $sthSqlSelect = $bd->prepare($sqlSelect);
            $sthSqlSelect->execute([":user" => $user, ":pass" => $pass]);
            $sthSqlSelect->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Usuario');
            $userObj = $sthSqlSelect->fetch();
            
            return $userObj;
        }
        
        function __construct($user = null, $pass = null) {
            $this->user;
            $this->pass;
        }
        
        function getUser() {
            return $this->user;
        }
        
        function getPass() {
            return $this->pass;
        }
    }
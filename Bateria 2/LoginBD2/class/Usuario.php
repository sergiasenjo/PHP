<?php
    require_once 'class/BD.php';

    class Usuario {
        var $id;
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
        
        public function __construct($user = null, $pass = null, $id = null) {
            $this->id = $id;
            $this->user = $user;
            $this->pass = $pass;
        }
        
        public function persist() {
            $bd = BD::getConexion();
            if ($this->id) {
                $sql = "update usuarios set user = :user, pass = :pass";
                $sthSql = $bd->prepare($sql);
                $result = $sthSql->execute([":user" => $this->getUser(), ":pass" => $this->getPass()]);            
            } else {
                $sql = "insert into usuarios (user, pass) values (:user, :pass)";
                $sthSql = $bd->prepare($sql);
                $result = $sthSql->execute([":user" => $this->getUser(), ":pass" => $this->getPass()]); 
                if ($result) {
                    $this->id = $bd->lastInsertId();
                }
            }
            return ($result);
        }
        
        public function getId() {
            return $this->id;
        }
        
        public function getUser() {
            return $this->user;
        }
        
        public function getPass() {
            return $this->pass;
        }
    }
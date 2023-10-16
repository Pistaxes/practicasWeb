<?php
    class Conexion{
        private $DBType = 'mysqli';
        private $DBServer ='localhost';
        private $DBUser = 'poncho';
        private $DBPass = '123';
        private $DBName = 'carrito';
        private $conect;

        public function __construct(){
            $connectionString ="mysql:hos=".$this->DBServer.";dbname=".$this->DBName.";charset=utf8";
            try{
                $this->conect = new PDO($connectionString,$this->DBUser,$this->DBPass);
                $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Conexion exitosa";
            }catch(Exception $e){
                $this->conect = 'Error de conexion';
                echo "ERROR:".$e->getMessage();
            }
        }

        public function connect(){
            return $this->conect;
        }
    }
?>
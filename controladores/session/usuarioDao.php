<?php
    include 'conexion.php';

    class usuarioDao extends conexion{

        protected static $cnx;
        
        private static function getConexion(){
            self::$cnx = Conexion::conectar();
        }

        private static function desconectar(){
            self::$cnx = null;
        }


        /**
         * 
         * @param   object   $usuario
         * @return  boolean 
         * 
         */

        public static function login ($usuario)
            $query = "SELECT * FROM usuario WHERE email = :email AND password = :password";
    }

?>
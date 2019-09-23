<?php

    class LoginModel{

        private $conec;
        private $credenciales = array();

        public function __construct(){

            require_once('Conexion.php');
            $this->conec = Conexion::conectar();

        }

        public function getCredenciales( $correo, $pass ){

            $quer = $this->conec->query("select * from usuarios where correo = '$correo' and clave = '$pass'");

            while( $res = $quer->fetch( PDO::FETCH_ASSOC ) ){

                $this->credenciales[] = $res;
            }

            return $this->credenciales;
        }
    }

?>
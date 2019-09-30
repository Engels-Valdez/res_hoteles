<?php

    class UsuarioModel{

        private $conec;
        private $listUsuarios = array();

        public function __construct(){

            require_once('Conexion.php');
            $this->conec = Conexion::conectar();

        }

        public function getUsuarios(){

            $quer = $this->conec->query('select * from usuarios');

            while( $res = $quer->fetch( PDO::FETCH_ASSOC ) ){

                $this->listUsuarios[] = $res;

            }

            return $this->listUsuarios;

        }
        
    }

?>
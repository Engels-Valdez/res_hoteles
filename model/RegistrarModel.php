<?php

    class RegistrarModel{

        private $conec;
        private $listUsuario = array();

        public function __construct(){

            require_once('Conexion.php');
            $this->conec = Conexion::conectar();

        }

        public function addUser( $nombre, $apellido, $correo, $pass ){

            $statement = $this->conec->prepare("insert into usuarios(id,correo, clave, tipo, nombre, apellido)
                                            values('null','$correo','$pass','2','$nombre','$apellido')");
            $statement->execute();
            
        }

        public function getValidarUsuarios( $correo ){

            $quer = $this->conec->query("select correo from usuarios where correo = '$correo' ");

            while( $res = $quer->fetch( PDO::FETCH_ASSOC ) ){

                $this->listUsuario = $res;

            }

            return $this->listUsuario;
        }

    }
?>
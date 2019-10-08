<?php
    
    class TarjetaModel{

        private $conec;
        private $listaTarjeta = array();

        public function __construct(){

            require_once('Conexion.php');
            $this->conec = Conexion::conectar();

        }

        public function getTarjeta( $id_user ){

            $quer = $this->conec->query("select * from tarjeta_credito where id_usuario = $id_user");

            while( $res = $quer->fetch(PDO::FETCH_ASSOC) ){

                $this->listaTarjeta[] = $res;

            }

            return $this->listaTarjeta;
        }

        public function setTarjeta($id_user,$numero,$cvv,$nombre,$fecha){

            $statement = $this->conec->prepare("insert into tarjeta_credito(id,nombre,numero,expiracion,cvv,id_usuario) 
                                                    values('null','$nombre','$numero','$fecha','$cvv', '$id_user') ");
            $statement->execute();
        }

        public function editar($id_user,$numero,$cvv,$nombre,$fecha){

            $statement = $this->conec->prepare("update tarjeta_credito set nombre='$nombre',numero='$numero',expiracion='$fecha',cvv='$cvv' 
            where id_usuario = '$id_user' ");
            $statement->execute();

        }

        public function eliminar( $id_user ){

            $statement = $this->conec->prepare("delete from tarjeta_credito where id_usuario = $id_user");
            $statement->execute();
            
        }

    }
?>
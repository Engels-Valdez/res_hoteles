<?php

    class FotoHotelModel{

        private $conec;
        private $fotoHotel = array();

        public function __construct(){

            require_once('Conexion.php');
            $this->conec = Conexion::conectar();

        }

        public function setFotoHotel( $foto, $idHotel, $imagen_Princ ){

            $statement = $this->conec->prepare("insert into foto_hotel(id,foto,id_Hotel,imagen_principal) 
                                            values('null','../view/asset/$foto','$idHotel','$imagen_Princ')");
            $statement->execute();

        }

        public function getFotosHotel(){

            $quer  = $this->conec->query('select * from foto_hotel');

            while( $res = $quer->fetch( PDO::FETCH_ASSOC ) ){

                $this->fotoHotel[] = $res;

            }

            return $this->fotoHotel;
        }

        public function eliminarFooHotel( $id ){

            $statement = $this->conec->prepare("delete from foto_hotel where id = $id");
            $statement->execute();

        }
    }

?>
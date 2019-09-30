<?php

    class LugaresHotelModel{

        private $conec;
        private $listLugares = array();

        public function __construct(){

            require_once('Conexion.php');
            $this->conec = Conexion::conectar();

        }

        public function setLugares( $lugar, $idHotel ){

            $statement = $this->conec->prepare("insert into lugares_cercanos_hotel(id,lugar,id_hotel) values('null','$lugar','$idHotel')");
            $statement->execute();

        }

        public function getLugares(){

            $quer = $this->conec->query('select lugares_cercanos_hotel.id, lugares_cercanos_hotel.lugar, hoteles.nombre  from lugares_cercanos_hotel 
                                            inner join hoteles on lugares_cercanos_hotel.id_hotel = hoteles.id');

            while( $res = $quer->fetch( PDO::FETCH_ASSOC ) ){

                $this->listLugares[] = $res;
            }

            return $this->listLugares;
        }

        public function eliminarLugar( $id ){

            $statement = $this->conec->prepare("delete from lugares_cercanos_hotel where id = $id ");
            $statement->execute();
            
        }

    }

?>
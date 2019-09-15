<?php

class HotelModel{

        private $conec;

        private $hotelList = array();

        private $hotelFotoList = array();

        public function __construct(){
            require_once('Conexion.php');
            $this->conec = Conexion::conectar();

        }

        public function getHotelsSm($nombre, $cuidad){

            $quer= $this->conec->query("SELECT hoteles.id, hoteles.nombre, hoteles.provincia, hoteles.calle, hoteles.prestigio FROM hoteles
            WHERE nombre LIKE '%$nombre%' AND provincia = '$cuidad'");

            while( $resultado = $quer->fetch(PDO::FETCH_ASSOC) ){

                $this->hotelList [] = $resultado;

            }

            return $this->hotelList ;

         }

         public function getHotelsFotoSm($nombre, $cuidad){

            $quer= $this->conec->query("SELECT foto_hotel.foto, foto_hotel.imagen_principal FROM foto_hotel
            INNER JOIN hoteles ON
            foto_hotel.id_hotel = hoteles.id
            WHERE nombre LIKE '%$nombre%' AND provincia = '$cuidad'");

            while( $resultado = $quer->fetch(PDO::FETCH_ASSOC) ){

                $this->hotelFotoList [] = $resultado;

            }

            return $this->hotelFotoList;

         }
        
    }


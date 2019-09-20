<?php

    class ReservacionesModel{

        private $conec;
        private $idPrecio = array();

        public function __construct(){

            require_once('Conexion.php');
            $this->conec = Conexion::conectar();

        }

        public function getIdPrecioHabitaciones( $id ){

            $quer = $this->conec->query("select id, precio_oferta, cant_adulto, cant_niño from habitaciones where id = $id ");

            while( $res = $quer->fetch( PDO::FETCH_ASSOC ) ){

                $this->idPrecio[] = $res;

            }

            return  $this->idPrecio;
        }
    }

?>
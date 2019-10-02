<?php 

    class HabitacionesModel{

        private $conec;
        private $listadoHabitaciones = array();

        public function __construct(){

            require_once('Conexion.php');
            $this->conec = Conexion::conectar();

        }

        public function getHabitaciones(){

            $quer = $this->conec->query('select * from habitaciones');

            while( $res = $quer->fetch( PDO::FETCH_ASSOC ) ){

                $this->listadoHabitaciones[] = $res;

            }

            return $this->listadoHabitaciones;
        }

        public function setHabitacion( $precio, $precio_oferta, $tipo, $cant_cama, $cant_adulto, $cant_niño, $detalle, $disponibilidad, $id_hotel, $foto ){

            $statement = $this->conec->prepare("insert into habitaciones (id, precio, precio_oferta, tipo, cant_cama, cant_adulto, 
                                                cant_niño, detalle, disponibilidad, id_hotel, foto )
                                                    values('null', '$precio', '$precio_oferta', '$tipo', '$cant_cama', '$cant_adulto', 
                                                    '$cant_niño', '$detalle', '$disponibilidad', '$id_hotel', '$foto')");
            $statement->execute();

        }

        public function eliminarHabitacion( $id ){

            $statement = $this->conec->prepare("delete from habitaciones where id = $id");
            $statement->execute();

        }

        public function modificarHabitacion( $id, $precio, $precio_oferta, $tipo, $cant_cama, $cant_adulto, $cant_niño, $detalle, $disponibilidad, $id_hotel, $foto ){

            $statement = $this->conec->prepare("update habitaciones set precio = '$precio', precio_oferta = '$precio_oferta', 
                                                tipo = '$tipo', cant_cama = '$cant_cama', cant_adulto = '$cant_adulto', cant_niño = '$cant_niño', 
                                                detalle = '$detalle', disponibilidad = '$disponibilidad', id_hotel = '$id_hotel', 
                                                foto = '$foto') where id = $id ");
            $statement->execute();

        }


    }

?>
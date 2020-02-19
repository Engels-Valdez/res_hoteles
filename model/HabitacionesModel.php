<?php 

    class HabitacionesModel{

        private $conec;
        private $listadoHabitaciones = array();
        private $listadoHabitacionesId = array();

        public function __construct(){

            require_once('Conexion.php');
            $this->conec = Conexion::conectar();

        }

        public function getHabitaciones(){

            $quer = $this->conec->query('select habitaciones.*, hoteles.nombre from habitaciones
                                            inner join hoteles on habitaciones.id_hotel = hoteles.id');

            while( $res = $quer->fetch( PDO::FETCH_ASSOC ) ){

                $this->listadoHabitaciones[] = $res;

            }

            return $this->listadoHabitaciones;
        }

        public function getHabitacionesId( $id ){

            $quer = $this->conec->query("select * from habitaciones where id = $id");

            while( $res = $quer->fetch( PDO::FETCH_ASSOC ) ){

                $this->listadoHabitacionesId[] = $res;

            }

            return $this->listadoHabitacionesId;
        }

        public function setHabitacion( $precio, $precio_oferta, $tipo, $cant_cama, $tamaño, $cant_adulto, $cant_niño, $detalle, $disponibilidad, $id_hotel, $foto ){

            $statement = $this->conec->prepare("insert into habitaciones (id, precio, precio_oferta, tipo, cant_cama, cant_adulto, 
                                                cant_niño, detalle, disponibilidad, id_hotel, foto )
                                                    values('null', '$precio', '$precio_oferta', '$tipo', '$cant_cama', '$cant_adulto', 
                                                    '$cant_niño', '$detalle', '$disponibilidad', '$id_hotel', '../view/asset/$foto')");
            $statement->execute();

        }

        public function eliminarHabitacion( $id ){

            $statement = $this->conec->prepare("delete from habitaciones where id = $id");
            $statement->execute();

        }

        public function modificarHabitacion( $id, $precio, $precio_oferta, $tipo, $cant_cama, $cant_adulto, $cant_niño, $detalle, $disponibilidad, $id_hotel ){

            $statement = $this->conec->prepare("update habitaciones set precio = '$precio', precio_oferta = '$precio_oferta', 
                                                tipo = '$tipo', cant_cama = '$cant_cama', cant_adulto = '$cant_adulto', cant_niño = '$cant_niño', 
                                                detalle = '$detalle', disponibilidad = '$disponibilidad', id_hotel = '$id_hotel' 
                                                where id = $id ");
            $statement->execute();

        }


    }

?>
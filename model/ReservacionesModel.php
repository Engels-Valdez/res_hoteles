<?php

    class ReservacionesModel{

        private $conec;
        private $idPrecio = array();
        private $datosTarjeta = array();

        public function __construct(){

            require_once('Conexion.php');
            $this->conec = Conexion::conectar();

        }

        public function getIdPrecioHabitaciones( $id ){

            $quer = $this->conec->query("select habitaciones.*, hoteles.nombre from habitaciones
                                        inner join hoteles on habitaciones.id = hoteles.id where habitaciones.id = $id ");

            while( $res = $quer->fetch( PDO::FETCH_ASSOC ) ){

                $this->idPrecio[] = $res;

            }

            return  $this->idPrecio;
        }

        public function getTarjetaCredito( $id ){

            $quer = $this->conec->query("select * from tarjeta_credito where id = $id");
            
            while( $res = $quer->fetch( PDO::FETCH_ASSOC ) ){

                    $this->datosTarjeta[] = $res;
            }

            return $this->datosTarjeta;

        }

        public function setReservacion( $nombreP,$apellidoP,$correoP,$telefonoP,$fechaEntrada,$fechaSalida,$cantPers,$precioNoche,$total,$id_habitacion,$id_usuario)
        {
            $quer = $this->conec->prepare("insert into reservaciones(id,nombre,telefono,
                                                apellido,correo,check_in,check_out,cant_persona,
                                                precio_persona,total,id_habitacion,id_usuario)
                                                values('null','$nombreP','$telefonoP','$apellidoP','$correoP',
                                                        '$fechaEntrada','$fechaSalida','$cantPers','$precioNoche','$total','$id_habitacion','$id_usuario')");
            $quer->execute();
        }
    }

?>
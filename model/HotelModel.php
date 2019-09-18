
    <?php
    
        class HotelModel{

            private $conec;
            private $hotelList = array();
            private $hotelFotoList = array();
            private $lugaresCercanosHotel = array();
            private $comentarioHotel = array();
            private $habitacionesList = array();

            public function __construct(){

                require_once('conexion.php');

                $this->conec = Conexion::conectar();
                
            }

            public function getHotel( $id ){

                $quer = $this->conec->query("select * from hoteles where id = $id");

                while( $res = $quer->fetch( PDO::FETCH_ASSOC ) ){

                    $this->hotelList[] = $res;

                }

                return  $this->hotelList;
            }

            public function getFotoHotel( $id ){

                $quer = $this->conec->query("select * from foto_hotel where id_hotel = $id");

                while( $res = $quer->fetch( PDO::FETCH_ASSOC ) ){

                    $this->hotelFotoList[] = $res;

                }

                return  $this->hotelFotoList;
            }

            public function getLugaresHotel( $id ){

                $quer = $this->conec->query("select lugar from lugares_cercanos_hotel where id_hotel = $id");

                while( $res = $quer->fetch( PDO::FETCH_ASSOC ) ){

                    $this->lugaresCercanosHotel[] = $res;

                }

                return  $this->lugaresCercanosHotel;
            }

            public function getComentariosHotel( $id ){

                $quer = $this->conec->query("SELECT comentario_hotel.descripcion, comentario_hotel.fecha, usuarios.nombre, usuarios.apellido FROM comentario_hotel
                INNER JOIN usuarios ON comentario_hotel.id_usuario = usuarios.id
                WHERE comentario_hotel.id_hotel = $id");

                while( $res = $quer->fetch( PDO::FETCH_ASSOC ) ){

                    $this->comentarioHotel[] = $res;

                }

                return  $this->comentarioHotel;
            }

            public function getHabitacionesHotel( $id ){

                $quer = $this->conec->query("SELECT * FROM habitaciones WHERE id_hotel = $id");

                while( $res = $quer->fetch( PDO::FETCH_ASSOC ) ){

                    $this->habitacionesList[] = $res;

                }

                return  $this->habitacionesList;
            }


        }
    ?>
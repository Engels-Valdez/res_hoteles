
    <?php
    
        class HotelModel{

            private $conec;
            private $hotelList = array();
            private $hotelFotoList = array();
            private $lugaresCercanosHotel = array();
            private $comentarioHotel = array();
            private $habitacionesList = array();
            private $HotelesAll = array();

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

            public function getHotelesAll(){

                $quer = $this->conec->query('select * from hoteles');

                while( $res = $quer->fetch( PDO::FETCH_ASSOC ) ){

                    $this->HotelesAll[] = $res;
                }

                return $this->HotelesAll;

            }

            public function setHotel( $nombre, $provincia, $calle, $prestigio, $localizacion ){

                $statement = $this->conec->prepare("insert into hoteles(id,nombre,provincia,calle,prestigio,localizacion)
                                                    values('null','$nombre','$provincia','$calle','$prestigio','$localizacion' )");
                $statement->execute();

            }

            public function eliminarHotel( $id ){

                $statement = $this->conec->prepare("delete from hoteles where id = $id");
                $statement->execute();
                
            }

            public function actualizarHotel( $id, $nombre, $provincia, $calle, $prestigio, $localizacion ){

                $statement = $this->conec->prepare("update hoteles set nombre = '$nombre', provincia = '$provincia', calle = '$calle',
                                                    prestigio = '$prestigio', localizacion = '$localizacion' where id = '$id' ");
                $statement->execute();
                
            }

            public function comentarHotel( $descripcion, $fecha, $id_hotel, $id_usuario ){

                $statement = $this->conec->prepare("insert into comentario_hotel(id, descripcion, fecha, id_hotel, id_usuario)
                                                    values('null', '$descripcion', '$fecha', '$id_hotel', '$id_usuario' )");
                $statement->execute();
                
            }


        }
    ?>
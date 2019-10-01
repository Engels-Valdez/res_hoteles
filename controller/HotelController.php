<?php session_start();

    require_once('../model/HotelModel.php');
    date_default_timezone_set('UTC');

    $id = $_GET['id'];
    $entrada = $_GET['fecha-entrada'];
    $salida = $_GET['fecha-salida'];

    $inpComentario = $_POST['comentario'];
    $fechaActual = date("Y-m-d");
    $usuarioActual = $_SESSION['Seccion'][0]['id'];

    $frmComentario = $_POST['frmComentario'];

    if( $_SERVER['REQUEST_METHOD'] == 'GET' || !empty( $id ) ){

        $HotelModel = new HotelModel();
        $hotel = $HotelModel->getHotel( $id );
        $fotoHotel = $HotelModel->getFotoHotel( $id );
        $lugares = $HotelModel->getLugaresHotel( $id );
        $comentarios = $HotelModel->getComentariosHotel( $id );
        $habitaciones = $HotelModel->getHabitacionesHotel( $id );

    }

    if( $_SERVER['REQUEST_METHOD'] == 'POST' && !empty( $frmComentario ) ){

        $comentario = new HotelModel();
        $comentario->comentarHotel($inpComentario,$fechaActual,$id,$usuarioActual);
        //header('Location: home.php');

    }

    require_once('../view/page/HotelView.php');

?>
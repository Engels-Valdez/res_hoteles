<?php

    require_once('../model/HotelModel.php');

    $id = $_GET['id'];
    $entrada = $_GET['fecha-entrada'];
    $salida = $_GET['fecha-salida'];

    if( $_SERVER['REQUEST_METHOD'] == 'GET' ){

        $HotelModel = new HotelModel();
        $hotel = $HotelModel->getHotel( $id );
        $fotoHotel = $HotelModel->getFotoHotel( $id );
        $lugares = $HotelModel->getLugaresHotel( $id );
        $comentarios = $HotelModel->getComentariosHotel( $id );
        $habitaciones = $HotelModel->getHabitacionesHotel( $id );

    }

    require_once('../view/page/HotelView.php');

?>
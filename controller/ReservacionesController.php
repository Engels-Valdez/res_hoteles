<?php
    require_once('../model/ReservacionesModel.php');
    date_default_timezone_set('UTC');

    $id_habitacion = $_GET['id'];
    $entrada = $_GET['entrada'];
    $salida = $_GET['salida'];
    $en = new DateTime($entrada);
    $sa = new DateTime($salida);
    $noches = $en->diff($sa);



    if( $_SERVER['REQUEST_METHOD'] == 'GET' && !empty( $id_habitacion ) ){

        $resv = new ReservacionesModel();
        $idPrecio = $resv->getIdPrecioHabitaciones($id_habitacion);
        
        if( empty($idPrecio) ){

            header('Location: error.php');

        }
      
    }

    require_once('../view/page/ReservacionesView.php');
?>
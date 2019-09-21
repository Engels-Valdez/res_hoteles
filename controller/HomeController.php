<?php
    require_once('../model/HomeModel.php');
    date_default_timezone_set('UTC');

    $msj;
    $msjDate;

    $nombre = $_POST['hotel'];
    $ciudad = $_POST['ciudad'];
    $desde = $_POST['desde'];
    $hasta = $_POST['hasta'];
    $buscarHotel = $_POST['buscarHotel'];

    $desdeLimite = date("Y-m-d");

    if( empty($nombre) || empty($ciudad) || empty($hasta) || empty($desde) ){
        $msj=true;
    }elseif($desde < $desdeLimite ){
        $msjDate = 'Esta fecha no esta disponible';
    }elseif($desde > $hasta){
        $msjDate = 'La fecha de entrada no puede ser mayor que la de salida';
    }else{
        
    if( $_SERVER['REQUEST_METHOD'] == 'POST' && $buscarHotel == 'Buscar hoteles'){
        
        $a = new HotelModel();
        $hoteles = $a->getHotelsSm($nombre,$ciudad);
        $fotos = $a->getHotelsFotoSm($nombre,$ciudad);
        
    }
}

    

    @require_once('../view/page/HomeView.php');
    ?>
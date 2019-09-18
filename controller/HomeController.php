<?php
    require_once('../model/HomeModel.php');

    $msj = false;

    $nombre = $_POST['hotel'];
    $ciudad = $_POST['ciudad'];
    $desde = $_POST['desde'];
    $hasta = $_POST['hasta'];
    $buscarHotel = $_POST['buscarHotel'];

    if( empty($nombre) || empty($ciudad) || empty($hasta) || empty($desde) ){
        $msj=true;
    }else{
        
    if( $_SERVER['REQUEST_METHOD'] == 'POST' && $buscarHotel == 'Buscar hoteles'){
        
        $a = new HotelModel();
        $hoteles = $a->getHotelsSm($nombre,$ciudad);
        $fotos = $a->getHotelsFotoSm($nombre,$ciudad);
        
    }
}

    

    @require_once('../view/page/HomeView.php');
    ?>
<?php
    require_once('../model/HabitacionesModel.php');
    require_once('../model/HotelModel.php');
    require_once('../public/file.php');
    
    $habitaciones = new HabitacionesModel();
    $hoteles = new HotelModel();

    //////Listar habitaciones//////
    $listaHabitaciones = $habitaciones->getHabitaciones();

    //////lista de hoteles//////

    $lista_de_Hoteles = $hoteles->getHotelesAll();

    /////Insertar y actualizar habitaciones///////
    $tipo = $_POST['tipo'];
    $precio = $_POST['precio'];
    $precioOferta = $_POST['precioOferta'];
    $cant_cama = $_POST['cant_cama'];
    $cant_adulto = $_POST['cant_adulto'];
    $cant_nino = $_POST['cant_nino'];
    $tamano = $_POST['tamano'];
    $detalle = $_POST['detalle'];
    $disponibilidad = $_POST['disponibilidad'];
    $id_hotel = $_POST['id_hotel'];
    $foto_nombre = $_FILES['foto']['name'];
    $foto_tipo = $_FILES['foto']['type'];
    $frmHabitacionesAdd = $_POST['frmHabitacionesAdd'];

    if( $_SERVER['REQUEST_METHOD'] == 'POST' && !empty( $frmHabitacionesAdd ) ){
        
        if( $foto_tipo == 'image/jpg' || $foto_tipo == 'image/jpeg' || $foto_tipo == 'image/gif' || $foto_tipo == 'image/png' ){
            
            move_uploaded_file( $_FILES['foto']['tmp_name'],  RUTA.'/reshoteles/view/asset/'.$foto_nombre);

            $habitaciones->setHabitacion( $precio, $precioOferta, $tipo, $cant_cama, $tamano, $cant_adulto, $cant_nino, $detalle, $disponibilidad, $id_hotel, $foto_nombre );
            header('Location: habitaciones.php');

        }else{

            echo '<script language="javascript">alert("No se acepta el tipo de archivo");</script>';
            
        }


    }

    /////////Eliminar habitaciones/////////////

    $id_habitacion_eli = $_GET['eliminar-habitacion'];

    if( $_SERVER['REQUEST_METHOD'] == 'GET' && !empty( $id_habitacion_eli ) ){

        $habitaciones->eliminarHabitacion( $id_habitacion_eli );
        header('Location: habitaciones.php');

    }

    /////////Actualizar/////////////////////

    $visibilidadAdd = 'block';
    $visibilidadEdit = 'none';
    $frmHabitacionesEdit = $_POST['frmHabitacionesEdit'];
    $editar_habitacion = $_GET['editar-habitacion'];

    if( $_SERVER['REQUEST_METHOD'] == 'GET' && !empty( $editar_habitacion ) ){

        $habitacionesEditarList = $habitaciones->getHabitacionesId( $editar_habitacion );
        $visibilidadAdd = 'none';
        $visibilidadEdit = 'block';

    }

    if( $_SERVER['REQUEST_METHOD'] == 'POST' && !empty( $frmHabitacionesEdit ) ){

        $habitaciones->modificarHabitacion( $editar_habitacion, $precio, $precioOferta, $tipo, $cant_cama, $tamano, $cant_adulto, $cant_nino, $detalle, $disponibilidad, $id_hotel );
        header('Location: habitaciones.php');

    }

    

    require_once('../view/page/HabitacionesView.php');
?>
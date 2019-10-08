<?php session_start();
require_once('../model/TarjetaModel.php');

$id = $_SESSION['Seccion'][0]['id'];

$Tarjeta = new TarjetaModel();

$listaT = $Tarjeta->getTarjeta( $id );

/////AGREGAR TARJETA///////

$numero = $_POST['numero'];
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$clave = $_POST['clave'];
$btnAdd = $_POST['btnAgregar'];

if( $_SERVER['REQUEST_METHOD'] == 'POST' && !empty( $btnAdd ) ){

    $Tarjeta->setTarjeta($id,$numero,$clave,$nombre,$fecha);
    header('Location: tarjeta-pago.php');
    
}

//////EDITAR////////
$editar_tarjeta = $_GET['editar-tarjeta'];

$v1 = 'block';
$v2 = 'none';
$btnEditar = $_POST['btnEditar'];

if( $_SERVER['REQUEST_METHOD'] == 'GET' && !empty( $editar_tarjeta ) ){

    $v1 = 'none';
    $v2 = 'block';

}

if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty( $btnEditar ) ){

    $Tarjeta->editar($id,$numero,$clave,$nombre,$fecha);
    header('Location: tarjeta-pago.php');

}

//////Eliminar///////

$eliminar_tarjeta = $_GET['eliminar-tarjeta'];

if( $_SERVER['REQUEST_METHOD'] == 'GET' && !empty($eliminar_tarjeta) ){

    $Tarjeta->eliminar($id);
    header('Location: tarjeta-pago.php');

}

require_once('../view/page/TarjetaView.php');
?>
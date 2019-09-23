<?php session_start();
require_once('../model/LoginModel.php');

$correo = $_POST['correo'];
$pass = $_POST['pass'];
$frmInciarSeccion = $_POST['btnInciar'];

if( $_SERVER['REQUEST_METHOD'] == 'POST' and !empty( $frmInciarSeccion ) ){

    $access = new LoginModel();
    $credenciales = $access->getCredenciales($correo,$pass);

    if( !empty( $credenciales ) ){

            $_SESSION['Seccion'] = $credenciales; //= $cdc['nombre']. ' ' .  $cdc['apellido'];
            
        header('Location: ../rt/home.php');

    }else {

        header('Location: ../index.php');

    }


}


require_once('../view/page/LoginView.php');
?>
<?php session_start();
    require_once('../model/HotelModel.php');

    if( !isset( $_SESSION['Seccion'] ) ){

        header('Location: login.php');

    }else{


        


    }

    require_once('../view/page/DashotelView.php');
?>
<?php session_start();

    if( isset($_SESSION['seccion']) ){
        
        header('Location: rt/home.php');

    }else{

        header('Location: rt/login.php');
    }

?>
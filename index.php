<?php session_start();

    if( isset($_SESSION['Seccion']) ){
        
        header('Location: rt/home.php');

    }else{

        header('Location: rt/login.php');
    }

?>
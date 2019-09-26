<?php

    class Conexion{
        
    public static function conectar(){

        try {

            $conect = new PDO('mysql:host=localhost; dbname=res_hoteles;','root','pHe220728?');

        } catch (PDOException $e) {

            echo 'Error: '.$e->getMessage();
            
        }

        return $conect;
    }

}

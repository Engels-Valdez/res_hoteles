<?php

    class Conexion{
        
    public static function conectar(){

        try {

            $conect = new PDO('mysql:host=localhost; dbname=res_hoteles;','root','123456');

        } catch (PDOException $e) {

            echo 'Error: '.$e->getMessage();
            
        }

        return $conect;
    }

}

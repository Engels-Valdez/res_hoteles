<?php

    class Conexion{
        
        public static function conectar(){

            try {

                $conec = new PDO('mysql:host=localhot; dbname=res_hoteles','root','pHe220728?');

            } catch (PDOException $e) {

                echo 'Error: '.$e->getMessage();
                
            }

            return $conec;
        }

    }
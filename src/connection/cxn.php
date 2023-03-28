<?php
    class Conexion{

        public static function conexionDB() {

            $host = 'LAPTOP-193LCMSG';
            $database = 'digesza';
            $username = 'DiegoMirand';
            $password = 'Diego2812++';
            $puerto = 1433;

            try {
                $conn = new PDO ("sqlsrv:Server=$host;Database=$database",$username,$password);
            }catch (PDOException $exp){
                echo ("No se logro conectar:$database,error:$exp");
            }

            return $conn;
        }
        
    }
?>
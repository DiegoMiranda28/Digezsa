<?php
    class Conexion{
        public static $connection;

        public static function conexionDB() {
            $host = 'LAPTOP-193LCMSG';
            $database = 'pruebaDigezsa';
            $username = 'DiegoMirand';
            $password = 'Diego2812++';
    
            try {
                self::$connection = new PDO("sqlsrv:Server=$host;Database=$database", $username, $password);
                echo "Conexion segura";
                return self::$connection;
            } catch (PDOException $exp) {
                throw new Exception("No se logró conectar a la base de datos: " . $exp->getMessage());
            }
        }

       /* public static function insertarPrueba($nombre,$curp,$fecha){
            try{
            $conexion = self::conexionDB();
            $stmt = $conexion->prepare("INSERT INTO prueba (nombre,curp,fecha) VALUES (:nombre,:curp,:fecha)");

            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':curp', $curp);
            $stmt->bindParam(':fecha', $fecha);

            $stmt->execute();

            $conexion = null;

            echo "Datos insertados exitosamente.";
            } catch (PDOException $e) {
                throw new Exception("Error al insertar los datos: " . $e->getMessage());
            }
        }
    
        /*public static function conexionDB() {
            $host = 'LAPTOP-193LCMSG'; #Link
            $database = 'pruebaDigezsa'; #abacapital
            $username = 'DiegoMirand'; #Usuario wpp
            $password = 'Diego2812++'; #contraseña wpp

            try {
                self::$connection = new PDO ("sqlsrv:Server=$host;Database=$database",$username,$password);
                echo "Conexion segura";
            }catch (PDOException $exp){
                echo ("No se logro conectar:$database,error:$exp");
            }
            return self::$connection;
        }*/

/*    public static function insertPrueba(){
            try{
            
                $nombre = $_POST["nombre"];
                $curp = $_POST["curp"];
                $fecha =  $_POST["fecha"];

                $connection = self::conexionDB();

                $consulta = $connection->prepare("INSERT INTO prueba(nombre,curp,fecha) VALUES ($nombre,'$curp','$fecha')");
        
                $consulta->execute();

            }catch(PDOException $exp){
                echo "Error: " . $exp->getMessage();
            }

            return $connection;
        }

       /* public static function conexionDBA() {
            $host = 'abacapital.mssql.somee.com'; #Link
            $database = 'abacapital'; #abacapital
            $username = 'jaredrosas_SQLLogin_1'; #Usuario wpp
            $password = 'e4d7nl9d6d'; #contraseña wpp año-mes-dia Set Languaje Spanish para todo

            try {
                self::$connection = new PDO ("sqlsrv:Server=$host;Database=$database",$username,$password);
                echo "Conexion segura";
            }catch (PDOException $exp){
                echo ("No se logro conectar:$database,error:$exp");
            }
            return self::$connection;
        }

        public static function insertPersona(){
            try{
                $connection = self::conexionDBA();
                $consulta = $connection->prepare("INSERT INTO solicitud(rfc,solicitud) VALUES ('HECM9305157XX','000000000000')");
        
                $consulta->execute();
                
                // Obtener los datos insertados
                $consultaInsertada = $connection->query("SELECT TOP 1 * FROM solicitud ORDER BY rfc DESC");
                $datosInsertados = $consultaInsertada->fetch(PDO::FETCH_ASSOC);
                
                // Mostrar los datos insertados
                print_r($datosInsertados);
            }catch(PDOException $exp){
                echo "Error: " . $exp->getMessage();
            }
            return self::$connection;
        }*/
        
    }
?>
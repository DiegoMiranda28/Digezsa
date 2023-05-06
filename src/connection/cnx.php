<?php
    class Conexion{
        public static $connection;

        public static function conexionDB() {
            $host = 'LAPTOP-193LCMSG';
            $database = 'pruebaDigezsa';
            $username = 'DiegoMirand';
            $password = 'Diego2812++';

            try {
                self::$connection = new PDO ("sqlsrv:Server=$host;Database=$database",$username,$password);
                echo "Conexion segura";
            }catch (PDOException $exp){
                echo ("No se logro conectar:$database,error:$exp");
            }
            return self::$connection;
        }
        public static function insertarDH($fecha, $solicitud, $nombre, $paterno, $materno, $curp,
        $rfc, $nss, $estadoCivil, $genero, $email){
            try{
                $connection = self::conexionDB();
                $consulta = $connection->prepare("INSERT INTO datosPersonalesDH(fecha_registro
                ,numero_solicitud,nombre,apellido_paterno,apellido_materno,curp,rfc,nss,estado_civil,
                genero,email) VALUES ($fecha,$solicitud,$nombre,$paterno,$materno,$curp,$rfc,$nss,
                $estadoCivil,$genero,$email)");
                $consulta->execute();
            }catch(PDOException $exp){
                echo ("Error en:$exp");
            }
            return self::$connection;
        }
        public static function insertLaboralesDH($rfc, $dependencia, $organizacion_sindical, $nombramiento,
        $sueldo, $tipo_credito, $bimestres){
            try{
                $connection = self::conexionDB();
                $consulta = $connection->prepare("INSERT INTO datosLaboralesDH(rfc,dependencia,
                organizacion_sindical,nombramiento,sueldo,tipo_credito,bimestres) VALUES ($rfc,$dependencia,
                $organizacion_sindical,$nombramiento,$sueldo,$tipo_credito,$bimestres)");
                $consulta->execute();
            }catch(PDOException $exp){
                echo ("Error en:$exp");
            }
            return self::$connection;
        }        

        public static function insertDomicilio($solicitud, $curp, $calle, $colonia, $interior, $exterior,
        $codigoPostal, $municipio, $entidadFederativa, $telParticular, $celular, $familia){
            try{
                $connection = self::conexionDB();
                $consulta = $connection->prepare("INSERT INTO datosDomicilioDH(solicitud,curp,calle,colonia,
                numero_interior,numero_exterior,codigo_postal,municipio,entidad_federativa,
                telefono_particular,celular,integrantes_familia) VALUES ($solicitud, $curp, $calle, $colonia, 
                $interior, $exterior, $codigoPostal, $municipio, $entidadFederativa, $telParticular, $celular, 
                $familia)");
                $consulta->execute();
            }catch(PDOException $exp){
                echo ("Error en:$exp");
            }
            return self::$connection;
        }

        public static function insertVivienda($rfc, $curp, $adVivienda, $entFederativa, $espVivienda){
            try{
                $connection = self::conexionDB();
                $consulta = $connection->prepare("INSERT INTO datosDomicilioDH(rfc,curp,adquisicion_vivienda,
                entidad_federativa,especificacion_vivienda) VALUES ($rfc, $curp, $adVivienda,$entFederativa, $espVivienda)");
                $consulta->execute();
            }catch(PDOException $exp){
                echo ("Error en:$exp");
            }
            return self::$connection;
        }

        public static function insertDocumentosDH($solicitud, $curp, $credencial, $curpPdf, $pago, $domicilio){
            try{
                $connection = self::conexionDB();
                $consulta = $connection->prepare("INSERT INTO datosDocumentosDH(numero_solicitud,curp,
                identificacion_oficial,curp_pdf,talon_pago,comprobante_domicilio) VALUES ($solicitud, $curp, 
                $credencial, $curpPdf, $pago, $domicilio)");
                $consulta->execute();
            }catch(PDOException $exp){
                echo ("Error en:$exp");
            }
            return self::$connection;
        }

        public static function insertPersonalesConyuge($solicitud, $curp, $nombre, $paterno, $materno, $curpCony,
        $rfc, $nss, $genero, $infonavit){
            try{
                $connection = self::conexionDB();
                $consulta = $connection->prepare("INSERT INTO datosPersonalesConyuge(num_solicitud,curpDH,nombre,
                apellido_paterno,apellido_materno,curp,rfc,nss,genero,infonavit) VALUES ($solicitud, $curp, $nombre, 
                $paterno, $materno, $curpCony, $rfc, $nss, $genero, $infonavit)");
                $consulta->execute();
            }catch(PDOException $exp){
                echo ("Error en:$exp");
            }
            return self::$connection;
        }

        public static function insertLaboralesConyuge($rfcCon, $dependencia, $orgSindical, $nombramiento, $sueldo, 
        $bimestres){
            try{
                $connection = self::conexionDB();
                $consulta = $connection->prepare("INSERT INTO datosLaboralesConyuge(rfcConyuge,dependencia,
                organizacion_sindical,nombramiento,sueldo,bimestres) VALUES ($rfcCon, $dependencia, $orgSindical, 
                $nombramiento, $sueldo, $bimestres)");
                $consulta->execute();
            }catch(PDOException $exp){
                echo ("Error en:$exp");
            }
            return self::$connection;
        }

        public static function insertDocumentosConyuge($curp, $rfc, $credencial, $curpPdf, $pago, $domicilio){
            try{
                $connection = self::conexionDB();
                $consulta = $connection->prepare("INSERT INTO datosDocumentosConyuge(curp,rfc,identificacion_oficial,
                curp_pdf,talon_pago,comprobante_domicilio) VALUES ($curp, $rfc, $credencial, $curpPdf, $pago, $domicilio)");
                $consulta->execute();
            }catch(PDOException $exp){
                echo ("Error en:$exp");
            }
            return self::$connection;
        }

        
    }
?>
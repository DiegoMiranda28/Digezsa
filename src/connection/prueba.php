<?php
class ConexionSQLServer {
    private $host;
    private $database;
    private $username;
    private $password;
    private $connection;

    public function __construct($host, $database, $username, $password) {
        $this->host = $host;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;
    }

    public function conectar() {
        $dsn = "sqlsrv:Server=" . $this->host . ";Database=" . $this->database;
        try {
            $this->connection = new PDO($dsn, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión exitosa a SQL Server";
        } catch (PDOException $e) {
            echo "Error al conectar a SQL Server: " . $e->getMessage();
        }
    }

   
    public function insertDerechoHabiente($nombre,$apellido_paterno,$apellido_materno,$linea_credito,$fecha_nacimiento,$lugar_nacimiento,
    $curp,$estado_civil,$genero,$rfc,$nss,$email,$estatus,$fecha_actualizacion,$expediente){

        try{
            $this->connection->beginTransaction();

            $sql = "set language spanish INSERT INTO derechohabiente (nombres,apellido_paterno,apellido_materno,linea_credito,fecha_nacimiento,
            lugar_nacimiento,curp,estado_civil,genero,rfc,nss,email,estatus,fecha_actualizacion,expediente) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $nombre);
            $stmt->bindValue(2, $apellido_paterno);
            $stmt->bindValue(3, $apellido_materno);
            $stmt->bindValue(4, $linea_credito);
            $stmt->bindValue(5, $fecha_nacimiento);
            $stmt->bindValue(6, $lugar_nacimiento);
            $stmt->bindValue(7, $curp);
            $stmt->bindValue(8, $estado_civil);
            $stmt->bindValue(9, $genero);
            $stmt->bindValue(10, $rfc);
            $stmt->bindValue(11, $nss);
            $stmt->bindValue(12, $email);
            $stmt->bindValue(13, $estatus);
            $stmt->bindValue(14, $fecha_actualizacion);
            $stmt->bindValue(15, $expediente);

            $stmt->execute();
            $this->connection->commit();
            echo "Datos insertados correctamente en DH";    
             
        }catch(PDOException $er){
            $this->connection->rollBack();
            echo "Error al insertar datos: " . $er->getMessage();
           
        }

    }

    public function insertDHLaborales($rfc,$entidad_defedativa,$dependencia,$organizacion_sindical,$sueldo,$nombramiento,$bimestres){
        try{
            $this->connection->beginTransaction();
            $sql = "INSERT INTO datosLaborales (rfc,entidad_federativa,dependencia,organizacion_sindical,sueldo,
            nombramiento,bimestres) VALUES (?,?,?,?,?,?,?)";
            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $rfc);
            $stmt->bindValue(2, $entidad_defedativa);
            $stmt->bindValue(3, $dependencia);
            $stmt->bindValue(4, $organizacion_sindical);
            $stmt->bindValue(5, $sueldo);
            $stmt->bindValue(6, $nombramiento);
            $stmt->bindValue(7, $bimestres);

            $stmt->execute();
            $this->connection->commit();
            echo "Datos insertados correctamente Laborales";
        }catch(PDOException $er){
            $this->connection->rollBack();
            echo "Error al insertar datos: " . $er->getMessage();
        }
    }

    public function insertDHDomiciilio($rfc,$calle,$numero_interior,$numero_exterior,$colonia,$cp,$municipio,$entidad_defedativa,
    $integrantes_familia,$telefono_particular,$telefono_celular){
        try{
            $this->connection->beginTransaction();
            $sql = "INSERT INTO domicilio (rfc,calle,numero_interior,numero_exterior,colonia,cp,municipio,
            entidad_federativa,integrantes_familia,telefono_particular,telefono_celular) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $rfc);
            $stmt->bindValue(2, $calle);
            $stmt->bindValue(3, $numero_interior);
            $stmt->bindValue(4, $numero_exterior);
            $stmt->bindValue(5, $colonia);
            $stmt->bindValue(6, $cp);
            $stmt->bindValue(7, $municipio);
            $stmt->bindValue(8, $entidad_defedativa);
            $stmt->bindValue(9, $integrantes_familia);
            $stmt->bindValue(10, $telefono_particular);
            $stmt->bindValue(11, $telefono_celular);

            $stmt->execute();
            $this->connection->commit();
            echo "Datos insertados correctamente Domicilio";
        }catch(PDOException $er){
            $this->connection->rollBack();
            echo "Error al insertar datos: " . $er->getMessage();
        }
    }

    public function insertCreditoSolicitado($rfc,$tipo_credito,$modalidad,$entidad_federativa){
        try{
            $this->connection->beginTransaction();
            $sql = "INSERT INTO creditoSolicitado (rfc,tipo_credito,modalidad,entidad_federativa) VALUES (?,?,?,?)";
            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $rfc);
            $stmt->bindValue(2, $tipo_credito);
            $stmt->bindValue(3, $modalidad);
            $stmt->bindValue(4, $entidad_federativa);

            $stmt->execute();
            $this->connection->commit();
            echo "Datos insertados correctamente credito";
        }catch(PDOException $er){
            $this->connection->rollBack();
            echo "Error al insertar datos: " . $er->getMessage();
        }
    }

    public function insertCaracteristicasVivienda($rfc,$modalidad,$entidad_federativa,$municipio,$terreno_mts,$habitable_mts,$pisos,$cochera,$alberca,$especificaciones){
        try{
            $this->connection->beginTransaction();
            $sql = "INSERT INTO caracteristicasVivienda (rfc,modalidad,entidad_federativa,municipio,terreno_mts,
            habitable_mts,pisos,cochera,alberca,especificaciones) VALUES (?,?,?,?,?,?,?,?,?,?)";
            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $rfc);
            $stmt->bindValue(2, $modalidad);
            $stmt->bindValue(3, $entidad_federativa);
            $stmt->bindValue(4, $municipio);
            $stmt->bindValue(5, $terreno_mts);
            $stmt->bindValue(6, $habitable_mts);
            $stmt->bindValue(7, $pisos);
            $stmt->bindValue(8, $cochera);
            $stmt->bindValue(9, $alberca);
            $stmt->bindValue(10, $especificaciones);

            $stmt->execute();
            $this->connection->commit();
            echo "Datos insertados correctamente vivienda";
        }catch(PDOException $er){
            $this->connection->rollBack();
            echo "Error al insertar datos: " . $er->getMessage();
        }
    }

    public function insertDocumentos($rfc, $identificacion_oficial, $comprobante_domicilio, $rfc_documento, $curp, $acta_nacimiento, $talon_pago) {
        try {
            $this->connection->beginTransaction();
            $sql = "INSERT INTO documentos (rfc, ineName, identificacion_oficial, comprobanteName, comprobante_domicilio, rfcName, rfc_documento,
                curpName, curp, actaName, acta_nacimiento, talonName, talon_pago) VALUES (?, ?,  CONVERT(varbinary(max),?), ?,  CONVERT(varbinary(max),?), ?,  CONVERT(varbinary(max),?),
                 ?,  CONVERT(varbinary(max),?), ?,  CONVERT(varbinary(max),?), ?,  CONVERT(varbinary(max),?))";
            $stmt = $this->connection->prepare($sql);
    
            // Generar nombres de archivo únicos
            $ineName = $this->generateUniqueFilename($rfc, "ine.pdf");
            $comprobanteName = $this->generateUniqueFilename($rfc, "domicilio.pdf");
            $rfcName = $this->generateUniqueFilename($rfc, "rfc.pdf");
            $curpName = $this->generateUniqueFilename($rfc, "curp.pdf");
            $actaName = $this->generateUniqueFilename($rfc, "actaNacimiento.pdf");
            $talonName = $this->generateUniqueFilename($rfc, "talonPago.pdf");
    
            // Insertar las rutas de los archivos en la base de datos
            $stmt->bindValue(1, $rfc);
            $stmt->bindValue(2, $ineName);
            $stmt->bindValue(3, $identificacion_oficial);
            $stmt->bindValue(4, $comprobanteName);
            $stmt->bindValue(5, $comprobante_domicilio);
            $stmt->bindValue(6, $rfcName);
            $stmt->bindValue(7, $rfc_documento);
            $stmt->bindValue(8, $curpName);
            $stmt->bindValue(9, $curp);
            $stmt->bindValue(10, $actaName);
            $stmt->bindValue(11, $acta_nacimiento);
            $stmt->bindValue(12, $talonName);
            $stmt->bindValue(13, $talon_pago);
            
            $stmt->execute();
            $this->connection->commit();
            echo "Datos insertados correctamente documentos";
        }catch(PDOException $er){            
            $this->connection->rollBack();      
            echo "Error al insertar datos: " . $er->getMessage();
        }
    }

    private function generateUniqueFilename($rfc, $extension) {
        $uniqueName = $rfc;
        return $uniqueName . "." . $extension;
    }
     
    /*public function insertDocumentos($rfc,$identificacion_oficial,$comprobante_domicilio,$rfc_documento,$curp,$acta_nacimiento,$talon_pago){
        try{
            $sql = "INSERT INTO documentos (rfc,ineName,identificacion_oficial,comprobanteName,comprobante_domicilio,rfcName,rfc_documento,
            curpName,curp,actaName,acta_nacimiento,talonName,talon_pago) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $rfc);
            
            $stmt->bindValue(2, $rfc."ine.pdf");
            $stmt->bindValue(3, $identificacion_oficial);

            $stmt->bindValue(4, $rfc."domicilio.pdf");
            $stmt->bindValue(5, $comprobante_domicilio);


            $stmt->bindValue(6, $rfc."rfc.pdf");
            $stmt->bindValue(7, $rfc_documento);

            
            $stmt->bindValue(8, $rfc."curp.pdf");
            $stmt->bindValue(9, $curp);

            
            $stmt->bindValue(10, $rfc."actaNacimiento.pdf");
            $stmt->bindValue(11, $acta_nacimiento);

            
            $stmt->bindValue(12, $rfc."talonPago.pdf");
            $stmt->bindValue(13, $talon_pago);

            $stmt->execute();
            echo "Datos insertados correctamente documentos";
        }catch(PDOException $er){
            echo "Error al insertar datos: " . $er->getMessage();
        }
    }*/

    public function insertConyuge($rfcDH,$nombre,$apellido_paterno,$apellido_materno,$fecha_nacimiento,$lugar_nacimiento,$curp,$rfc,$nss,
    $email,$genero,$infonavit){
        try{
            $this->connection->beginTransaction();
            $sql = "set language spanish INSERT INTO conyuge (rfc_derechohabiente,nombres,apellido_paterno,apellido_materno,fecha_nacimiento,lugar_nacimiento,curp,rfc,nss,
            email,genero,infonavit) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $rfcDH);
            $stmt->bindValue(2, $nombre);
            $stmt->bindValue(3, $apellido_paterno);
            $stmt->bindValue(4, $apellido_materno);
            $stmt->bindValue(5, $fecha_nacimiento);
            $stmt->bindValue(6, $lugar_nacimiento);
            $stmt->bindValue(7, $curp);
            $stmt->bindValue(8, $rfc);
            $stmt->bindValue(9, $nss);
            $stmt->bindValue(10, $email);
            $stmt->bindValue(11, $genero);
            $stmt->bindValue(12, $infonavit);

            $stmt->execute();
            $this->connection->commit();
            echo "Datos insertados correctamente conyuge";
        }catch(PDOException $er){
            $this->connection->rollBack();
            echo "Error al insertar datos: " . $er->getMessage();
        }
    }

    public function insertLaboralesConyuge($rfcConyuge,$entidadFederativa,$dependencia,
    $orgSindical,$sueldo,$nombramiento,$bimestres){
        try{
            $this->connection->beginTransaction();
            $sql = "INSERT INTO datosLaboralesConyuge (rfc,entidad_federativa,
            dependencia,organizacion_sindical,sueldo,nombramiento,bimestres) VALUES (?,?,?,?,?,?,?)";
            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $rfcConyuge);
            $stmt->bindValue(2, $entidadFederativa);
            $stmt->bindValue(3, $dependencia);
            $stmt->bindValue(4, $orgSindical);
            $stmt->bindValue(5, $sueldo);
            $stmt->bindValue(6, $nombramiento);
            $stmt->bindValue(7, $bimestres);

            $stmt->execute();
            $this->connection->commit();
            echo "Datos insertados correctamente conyuge LAB";
        }catch(PDOException $er){
            $this->connection->rollBack();
            echo "Error al insertar datos: " . $er->getMessage();
        } 
    }

    public function insertDocumentosConyuge($rfcConyuge,$ineConyuge,$domicilioConyuge,
    $rfcPdf,$curpPdf,$actaConyuge,$talonConyuge){
        try {
            $this->connection->beginTransaction();
            $sql = "INSERT INTO documentosConyuge (rfc, ineName, identificacion_oficial, comprobanteName, comprobante_domicilio, rfcName, rfc_documento,
                curpName, curp, actaName, acta_nacimiento, talonName, talon_pago) VALUES (?, ?,  CONVERT(varbinary(max),?), ?,  CONVERT(varbinary(max),?), ?,  CONVERT(varbinary(max),?),
                 ?,  CONVERT(varbinary(max),?), ?,  CONVERT(varbinary(max),?), ?,  CONVERT(varbinary(max),?))";
            $stmt = $this->connection->prepare($sql);
    
            // Generar nombres de archivo únicos
            $ineName = $this->generateUniqueFilename($rfcConyuge, "ine.pdf");
            $comprobanteName = $this->generateUniqueFilename($rfcConyuge, "domicilio.pdf");
            $rfcName = $this->generateUniqueFilename($rfcConyuge, "rfc.pdf");
            $curpName = $this->generateUniqueFilename($rfcConyuge, "curp.pdf");
            $actaName = $this->generateUniqueFilename($rfcConyuge, "actaNacimiento.pdf");
            $talonName = $this->generateUniqueFilename($rfcConyuge, "talonPago.pdf");
    
            // Insertar las rutas de los archivos en la base de datos
            $stmt->bindValue(1, $rfcConyuge);
            $stmt->bindValue(2, $ineName);
            $stmt->bindValue(3, $ineConyuge);
            $stmt->bindValue(4, $comprobanteName);
            $stmt->bindValue(5, $domicilioConyuge);
            $stmt->bindValue(6, $rfcName);
            $stmt->bindValue(7, $rfcPdf);
            $stmt->bindValue(8, $curpName);
            $stmt->bindValue(9, $curpPdf);
            $stmt->bindValue(10, $actaName);
            $stmt->bindValue(11, $actaConyuge);
            $stmt->bindValue(12, $talonName);
            $stmt->bindValue(13, $talonConyuge);
            
            $stmt->execute();
            $this->connection->commit();
            echo "Datos insertados correctamente documentos";
        }catch(PDOException $er){            
            $this->connection->rollBack();      
            echo "Error al insertar datos: " . $er->getMessage();
        }
    }

}


?>
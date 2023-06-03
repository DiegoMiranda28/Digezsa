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

    /* ==========   FUNCIONES PARA BUSCAR, OBTENER Y ELIMINAR DERECHO HABIENTE  ========== */
    public function buscarRFC($rfc){
        $sql = "SELECT COUNT (*) AS obtenidos FROM derechohabiente where rfc = :rfc";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':rfc', $rfc);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $count = $result['obtenidos'];
        return $count > 0 ? true : false;
    }

    public function getDerechohabienteRfcFromConyuge($curp) {
        $sql = "SELECT rfc_derechohabiente FROM conyuge WHERE curp = :curp";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':curp', $curp);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['rfc_derechohabiente'] : null;
    }

    public function deleteDerechoHabiente($curp) {
        $derechohabienteRfc = $this->getDerechohabienteRfcFromConyuge($curp);
        if ($derechohabienteRfc) {
            $sql = "DELETE FROM derechohabiente WHERE rfc = :rfc";
            $stmt = $this->connection->prepare($sql);
            $stmt->bindParam(':rfc', $derechohabienteRfc);
            $stmt->execute();
            echo "eliminacion correcta $derechohabienteRfc";
            return $derechohabienteRfc;
        } else {
            echo "*rfc $derechohabienteRfc*";
            return null;
        }
    }

 
    /* ==========   FUNCIONES INSERTAR DATOS DEL DERECHO HABIENTE  ========== */
    public function insertDerechoHabiente($nombre,$apellido_paterno,$apellido_materno,$linea_credito,$fecha_nacimiento,$lugar_nacimiento,
    $curp,$estado_civil,$genero,$rfc,$nss,$email,$estatus,$fecha_actualizacion,$expediente){
        try{

            $this->connection->beginTransaction();

            if (empty($nombre) || empty($apellido_paterno) || empty($apellido_materno) || empty($linea_credito) || empty($fecha_nacimiento) ||
            empty($lugar_nacimiento) || empty($curp) || empty($estado_civil) || empty($genero) || empty($rfc) || empty($nss) ||
            empty($email)){
           # echo "== Error: Todos los campos deben ser completados en personales ==";
                return false;
            }

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
            return true;
        }catch(PDOException $er){
            $this->connection->rollBack();
            echo "Error al insertar datos: " . $er->getMessage();
           return false;
        }

    }

    public function insertDHLaborales($rfc,$entidad_federativa,$dependencia,$organizacion_sindical,$sueldo,$nombramiento,$bimestres){
        try{
            $this->connection->beginTransaction();

            if (empty($rfc) || empty($entidad_federativa) || empty($dependencia) || empty($sueldo) ||
            empty($nombramiento) || empty($bimestres)) {
            echo "== Error: Todos los campos deben ser completados en laborales ==";
            return false;
            }

            $sql = "INSERT INTO datosLaborales (rfc,entidad_federativa,dependencia,organizacion_sindical,sueldo,
            nombramiento,bimestres) VALUES (?,?,?,?,?,?,?)";
            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $rfc);
            $stmt->bindValue(2, $entidad_federativa);
            $stmt->bindValue(3, $dependencia);
            $stmt->bindValue(4, $organizacion_sindical);
            $stmt->bindValue(5, $sueldo);
            $stmt->bindValue(6, $nombramiento);
            $stmt->bindValue(7, $bimestres);

            $stmt->execute();
            $this->connection->commit();
            echo "Datos insertados correctamente Laborales";
            return true;
        }catch(PDOException $er){
            $this->connection->rollBack();
            echo "EL ERROR ES ESTE: " . $er->getMessage();
            return false;
        }
    }

    public function insertDHDomiciilio($rfc,$calle,$numero_interior,$numero_exterior,$colonia,$cp,$municipio,$entidad_defedativa,
    $integrantes_familia,$telefono_particular,$telefono_celular){
        try{
            $this->connection->beginTransaction();

            if (empty($rfc) || empty($calle) || empty($numero_exterior) || empty($colonia) ||
            empty($cp) || empty($municipio) || empty($entidad_defedativa) || empty($integrantes_familia) || empty($telefono_celular)) {
            echo "== Error: Todos los campos deben ser completados en domicilio ==.";
            return false;
            }

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
            return true;
        }catch(PDOException $er){
            $this->connection->rollBack();
            echo "Error al insertar datos: " . $er->getMessage();
            return false;
        }
    }

    public function insertCreditoSolicitado($rfc,$tipo_credito,$modalidad,$entidad_federativa){
        try{
            $this->connection->beginTransaction();

            if (empty($rfc) || empty($tipo_credito) || empty($modalidad) || empty($entidad_federativa)) {
            echo "== Error: Todos los campos deben ser completados en credito ==.";
            return false;
            }

            $sql = "INSERT INTO creditoSolicitado (rfc,tipo_credito,modalidad,entidad_federativa) VALUES (?,?,?,?)";
            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $rfc);
            $stmt->bindValue(2, $tipo_credito);
            $stmt->bindValue(3, $modalidad);
            $stmt->bindValue(4, $entidad_federativa);

            $stmt->execute();
            $this->connection->commit();
            echo "Datos insertados correctamente credito";
            return true;
        }catch(PDOException $er){
            $this->connection->rollBack();
            echo "ERRRO EN CREDITO SOLICITADO";
            echo "Error al insertar datos: " . $er->getMessage();
            return false;
        }
    }
    
    public function insertCaracteristicasVivienda($rfc,$modalidad,$entidad_federativa,$municipio,$terreno_mts,$habitable_mts,$pisos,$cochera,$alberca,$especificaciones){
        try{
            $this->connection->beginTransaction();

            if (empty($rfc) || empty($modalidad) || empty($entidad_federativa) || empty($municipio) || empty($terreno_mts) || empty($habitable_mts) || empty($pisos) 
            || empty($cochera) || empty($alberca)) {
                echo "== Error: Todos los campos deben ser completados en caracteristicas ==.";
                return false;
            }

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
            return true;
        }catch(PDOException $er){
            $this->connection->rollBack();
            echo "ERRRO EN VIVIENDA";
            echo "Error al insertar datos: " . $er->getMessage();
            return false;
        }
    }

   /* ==========   FUNCIONES INSERTAR DATOS DEL CONYUGE  ========== */
    public function insertConyuge($rfcDH,$nombre,$apellido_paterno,$apellido_materno,$fecha_nacimiento,$lugar_nacimiento,$curp,$rfc,$nss,
    $email,$genero,$infonavit){
        try{

            if (empty($rfcDH) || empty($nombre) || empty($apellido_paterno) || empty($apellido_materno) || empty($fecha_nacimiento) || empty($lugar_nacimiento) || empty($curp) 
                    || empty($rfc) || empty($nss) || empty($email) || empty($genero) || empty($infonavit)) {
                echo "== Error: Todos los campos deben ser completados en conyuge ==.";
                return false;
            }

            //En la tabla de abacapital es nombres
            $this->connection->beginTransaction();
            $sql = "set language spanish INSERT INTO conyuge (rfc_derechohabiente,nombres,apellido_paterno,apellido_materno,fecha_nacimiento,lugar_nacimiento,curp,rfc,nss,
            email,genero,infonavit) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
            //nombres con abacapital
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
            return true;
        }catch(PDOException $er){
            $this->connection->rollBack();
            echo "ERRRO EN CONYUGE";
            echo "Error al insertar datos: " . $er->getMessage();
            return false;
        }
    }
 
    public function validarConyuge($curp){
        $derechohabienteRfc = $this->getDerechohabienteRfcFromConyuge($curp);
        echo "RFC $derechohabienteRfc";
    }
 
    public function insertLaboralesConyuge($rfcConyuge,$entidadFederativa,$dependencia,
    $orgSindical,$sueldo,$nombramiento,$bimestres){
        try{
           
            $this->connection->beginTransaction();
            if (empty($rfcConyuge) || empty($entidadFederativa) || empty($dependencia) || empty($sueldo) || empty($nombramiento) || empty($bimestres)){
                echo "== Error: Todos los campos deben ser completados en caracteristicas ==.";
                return false;
            }

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
            return true;
        }catch(PDOException $er){
            $this->connection->rollBack();
            echo "ERRRO EN CONYUGE LB";
            echo "Error al insertar datos: " . $er->getMessage();
            return false;
        } 
    }

    
    /* ==========   FUNCIONES PARA GENERAR RUTA, NOMBRE DE ARCHIVOS E INSERTAR  ========== */
    public function generateUniqueFileName($file, $inputName, $rfc) {
        $fileName = $file["name"];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $uniqueName = $rfc . $inputName . "." . $fileExtension;
        return $uniqueName;
    }

    public function moverArchivosPDF($rfcDH,$ine_archivo,$curp_archivo,$talon_archivo,$domicilio_archivo,$rfc_archivo,$acta_archivo){
        $uploadDirectory = '../PDF/';
        try{   
                    if (!empty($_FILES)) {
                        $targetFileIne = $uploadDirectory . $this->generateUniqueFileName($ine_archivo,"INE", $rfcDH);
                        $targetFileCurp = $uploadDirectory . $this->generateUniqueFileName($curp_archivo,"CURP", $rfcDH);
                        $targetFileTalon = $uploadDirectory . $this->generateUniqueFileName($talon_archivo,"TALONPAGO", $rfcDH);
                        $targetFileDomicilio = $uploadDirectory . $this->generateUniqueFileName($domicilio_archivo,"DOMICILIO", $rfcDH);
                        $targetFileRfc = $uploadDirectory . $this->generateUniqueFileName($rfc_archivo,"RFC", $rfcDH);
                        $targetFileActa = $uploadDirectory . $this->generateUniqueFileName($acta_archivo,"ACTA", $rfcDH);

                        move_uploaded_file($ine_archivo['tmp_name'], $targetFileIne);
                        move_uploaded_file($curp_archivo['tmp_name'], $targetFileCurp);
                        move_uploaded_file($talon_archivo['tmp_name'], $targetFileTalon);
                        move_uploaded_file($domicilio_archivo['tmp_name'], $targetFileDomicilio );
                        move_uploaded_file($rfc_archivo['tmp_name'], $targetFileRfc);
                        move_uploaded_file($acta_archivo['tmp_name'], $targetFileActa);   

                        $nombreIne = $this->generateUniqueFileName($ine_archivo,"INE", $rfcDH);
                        $nombreCurp =  $this->generateUniqueFileName($curp_archivo,"CURP", $rfcDH);
                        $nombreTalon = $this->generateUniqueFileName($talon_archivo,"TALONPAGO", $rfcDH);
                        $nombreDomicilio = $this->generateUniqueFileName($domicilio_archivo,"DOMICILIO", $rfcDH);
                        $nombreRfc = $this->generateUniqueFileName($rfc_archivo,"RFC", $rfcDH);
                        $nombreActa = $this->generateUniqueFileName($acta_archivo,"ACTA", $rfcDH);
                        
                        $this->ingresarPDF($rfcDH,$nombreIne,$targetFileIne);
                        $this->ingresarPDF($rfcDH,$nombreCurp,$targetFileCurp);
                        $this->ingresarPDF($rfcDH,$nombreTalon,$targetFileTalon);
                        $this->ingresarPDF($rfcDH,$nombreDomicilio,$targetFileDomicilio);
                        $this->ingresarPDF($rfcDH,$nombreRfc,$targetFileRfc);
                        $this->ingresarPDF($rfcDH,$nombreActa,$targetFileActa);

                        return true;
                    }else{
                        return false;
                    }

        }catch(PDOException $er){
            echo "Error al insertar datos: " . $er->getMessage();
            return false;
        }
    }

    public function ingresarPDF($rfcDH,$name,$ruta){
        try{
            $this->connection->beginTransaction();
            $sql = "INSERT INTO pruebaB (rfc, nombre, ruta) VALUES (:rfc, :nombre, :ruta)";
            $stmt = $this->connection->prepare($sql);

            $stmt->bindParam(':rfc', $rfcDH);
            $stmt->bindParam(':nombre', $name);
            $stmt->bindParam(':ruta', $ruta);

            $stmt->execute();
            $this->connection->commit();
            return true;
        }catch(PDOException $er){
            $this->connection->rollBack();
            echo "Error al insertar datos: " . $er->getMessage();
            return false;
        }
    }

}


?>
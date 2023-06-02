<?php
include "prueba.php"; // Reemplaza con la ruta correcta al archivo de la clase de conexión

//if (isset($_POST['submit'])) {

    $nombreDH = isset($_POST['nombre']) ? $_POST['nombre'] : "";
    $ap_paternoDH = isset($_POST['apellido_paterno']) ? $_POST['apellido_paterno'] : "";
    $ap_maternoDH = isset($_POST['apellido_materno']) ? $_POST['apellido_materno'] : "";
    $linea_credito = isset($_POST['linea_credito']) ? $_POST['linea_credito'] : "";
    $fecha_nacimientoDH = isset($_POST['fecha_nacimiento']) ? $_POST['fecha_nacimiento'] : "";
    $lugar_nacimientoDH = isset($_POST['lugar_nacimiento']) ? $_POST['lugar_nacimiento'] : "";
    $curpDH = isset($_POST['curp']) ? $_POST['curp'] : "";
    $estado_civil = isset($_POST['estado_civil']) ? $_POST['estado_civil'] : "";
    $genero = isset($_POST['genero']) ? $_POST['genero'] : "";
    $rfcDH = isset($_POST['rfc']) ? $_POST['rfc'] : ""; #***
    $nssDH = isset($_POST['nss']) ? $_POST['nss'] : "";
    $emailDH = isset($_POST['email']) ? $_POST['email'] : "";
    $fecha_actualizacion = isset($_POST['fecha_actualizacion']) ? $_POST['fecha_actualizacion'] : "";
    $comprobacion = isset($_POST['comprobacion']) ? $_POST['comprobacion'] : "";

    $conexion = new ConexionSQLServer('LAPTOP-193LCMSG','ejemplo','DiegoMirand','Diego2812++');
    $conexion->conectar();

    if($comprobacion){

        $success = true;
   
      $conexion->insertDerechoHabiente($nombreDH, $ap_paternoDH, $ap_maternoDH, $linea_credito, $fecha_nacimientoDH, $lugar_nacimientoDH, $curpDH, $estado_civil, $genero, $rfcDH, $nssDH, $emailDH,'PROTEGIDO', $fecha_actualizacion,'');

      
if (isset($_FILES['INE']) && isset($_FILES['CURP']) && isset($_FILES['TALONPAGO']) && isset($_FILES['DOMICILIO']) && isset($_FILES['RFC']) && isset($_FILES['ACTANACIMIENTO'])) {
    $uploadOk = 1;
// Array con los nombres de los inputs de archivos
$fileInputs = ["INE", "CURP", "TALONPAGO", "DOMICILIO", "RFC", "ACTANACIMIENTO"];

// Directorio de destino para los archivos
$targetDir = "../PDF/";

// Recorrer cada input de archivo
foreach ($fileInputs as $inputName) {
if (isset($_FILES[$inputName])) {
$file = $_FILES[$inputName];
$targetFile = $targetDir . generateUniqueFileName($file, $inputName, $rfcDH);
$targetName = generateUniqueFileName($file, $inputName, $rfcDH);
$imageFileType = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));

// Verificar si el archivo es un PDF
if ($imageFileType != "pdf") {
    echo "Formato de archivo no válido. Solo se permiten archivos PDF.";
    $uploadOk = 0;
}

// Verificar si hubo algún error en la subida del archivo
if ($file["error"] !== UPLOAD_ERR_OK) {
    echo "Error al cargar el archivo.";
    $uploadOk = 0;
} else {
    if (move_uploaded_file($file["tmp_name"], $targetFile)) {
        #$this->pruebaB($rfcDH, $targetName, $targetFile);
    } else {
        echo "Error al cargar el archivo.";
        $uploadOk = 0;
    }
}
}
}

if ($uploadOk == 0) {
echo "Error al cargar uno o más archivos.";

}
}

     
            

        echo $success ? "Inserción correcta" : "Error en la inserción de algún método";

    }else{
        echo "False";
    }

   // }
        
        function generateUniqueFileName($file, $inputName, $rfc) {
            $fileName = $file["name"];
            $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            $uniqueName = $rfc . $inputName . "." . $fileExtension;
            return $uniqueName;
        }





/*include "prueba.php"; // Reemplaza con la ruta correcta al archivo de la clase de conexión
#$conexion = new ConexionSQLServer('LAPTOP-193LCMSG','pruebaDigezsa','DiegoMirand','Diego2812++');
#$conexion = new ConexionSQLServer('abacapital.mssql.somee.com','abacapital','jaredrosas_SQLLogin_1','e4d7nl9d6d');

$conexion = new ConexionSQLServer('LAPTOP-193LCMSG','ejemplo','DiegoMirand','Diego2812++');
$conexion->conectar();

ini_set('upload_max_filesize', '50M');
ini_set('post_max_size', '50M');

$comprobacion = $_POST['comprobacion'];

// ========== DERECHO HABIENTE ==========
$nombreDH = $_POST['nombre'];
$ap_paternoDH = $_POST['apellido_paterno'];
$ap_maternoDH = $_POST['apellido_materno'];
$linea_credito = $_POST['linea_credito'];
$fecha_nacimientoDH = $_POST['fecha_nacimiento'];
$lugar_nacimientoDH = $_POST['lugar_nacimiento'];
$curpDH = $_POST['curp'];
$estado_civil = $_POST['estado_civil'];
$genero = $_POST['genero'];
$rfcDH = $_POST['rfc']; #***
$nssDH = $_POST['nss'];
$emailDH = $_POST['email'];
$estatus = $_POST['estatus'];
$fecha_actualizacion = $_POST['fecha_actualizacion'];
$expendiente = $_POST['expediente'];

// ========== DERECHO HABIENTE LABORALES ==========
$entidad_federativaLB = $_POST['entidad_federativa'];
$dependencia = $_POST['dependencia'];
$organizacion_sindical = $_POST['organizacion_sindical'];
$sueldo = $_POST['sueldo'];
$nombramiento = $_POST['nombramiento'];
$bimestres = $_POST['bimestres'];

// ========== DERECHO HABIENTE DOMICILIO ==========
$calle = $_POST['calle'];
$numero_interior = $_POST['numero_interior'];
$numero_exterior = $_POST['numero_exterior'];
$colonia = $_POST['colonia'];
$codigo_postal = $_POST['cp'];
$municipio = $_POST['municipio'];
$entidad_federativaDOM = $_POST['entidad_federativa'];
$integrantes_familia = $_POST['integrantes_familia'];
$telefono_particular = $_POST['telefono_particular'];
$telefono_celular = $_POST['telefono_celular'];

// ========== DERECHO HABIENTE CARACTERISTICAS DE CREDITO ==========
$tipo_credito = $_POST['tipo_credito'];
$modalidad = $_POST['modalidad'];
$entidad_federativoCRD = $_POST['entidad_federativaCRD'];

// ========== DERECHO HABIENTE ESPECIFICACION DE VIVIENDA ==========
$modalidad_ESP = $_POST['modalidadV'];
$entidad_federativaVIVD = $_POST['entidad_federativaV'];
$municipioVIVD = $_POST['municipioV'];
$terreno = $_POST['terreno_mts'];
$habitable = $_POST['habitable_mts'];
$pisos = $_POST['pisos'];
$cochera = $_POST['cochera'];
$alberca = $_POST['alberca'];
$especificaciones = $_POST['especificaciones'];

// ========== CONYUGE ==========
$nombreConyuge = $_POST['nombreCy'];
$ap_paternoConyuge = $_POST['apellido_paternoCy'];
$ap_maternoConyuge = $_POST['apellido_maternoCy'];
$fecha_nacimientoConyuge = $_POST['fecha_nacimientoCy'];
$lugar_nacimientoConyuge = $_POST['lugar_nacimientoCy'];
$curp_conyuge = $_POST['curpCy'];
$rfc_conyuge = $_POST['rfcCy'];
$nss_conyuge = $_POST['nssCy'];
$email_conyuge = $_POST['emailCy'];
$genero_conyuge = $_POST['generoCy'];
$infonavit = $_POST['infonavitCy'];

// ========== CONYUGE LABORALES ==========
$entidad_federativaCY = $_POST['entidad_federativaCY'];
$dependenciaCY = $_POST['dependenciaCY'];
$organizacion_sindicalCY = $_POST['organizacion_sindicalC'];
$sueldoCY = $_POST['sueldoCY'];
$nombramientoCY = $_POST['nombramientoCY'];
$bimestresCY = $_POST['bimestresCY'];

if ($comprobacion) {
    $success = true;

    $conexion->insertDerechoHabiente($nombreDH, $ap_paternoDH, $ap_maternoDH, $linea_credito, $fecha_nacimientoDH, $lugar_nacimientoDH, $curpDH, $estado_civil, $genero, $rfcDH, $nssDH, $emailDH, $estatus, $fecha_actualizacion, $expendiente);

    
    // Verificar si hubo algún error en la inserción de datos laborales
    /*if(!$conexion->insertDHLaborales($rfcDH, $entidad_federativaLB, $dependencia, $organizacion_sindical, $sueldo, $nombramiento, $bimestres)) {
         $success = false;
    }

    // Verificar si hubo algún error en la inserción de datos domiciliarios
    if(!$conexion->insertDHDomiciilio($rfcDH, $calle, $numero_interior, $numero_exterior, $colonia, $codigo_postal, $municipio, $entidad_federativaDOM, $integrantes_familia, $telefono_particular, $telefono_celular)) {
       $success = false;
    }

    // Verificar si hubo algún error en la inserción de CreditoSolicitado
    if(!$conexion->insertCreditoSolicitado($rfcDH, $tipo_credito, $modalidad, $entidad_federativoCRD)) {
        $success = false;
    }

    // Verificar si hubo algún error en la inserción de CaracteristicasVivienda
    if(!$conexion->insertCaracteristicasVivienda($rfcDH, $modalidad, $entidad_federativaVIVD, $municipioVIVD, $terreno, $habitable, $pisos, $cochera, $alberca, $especificaciones)) {
         $success = false;
    }
   
    // Verificar si hubo algún error en la inserción de Documentos
    #if (!$conexion->insertDocumentos2($pdfIne)) {
     #   $success = false;
    #}*/

    /*if($estado_civil == "Casada(o)" && $rfcDH != $rfc_conyuge){
            // Verificar si hubo algún error en la inserción de Conyuge
            if (!$conexion->insertConyuge($rfcDH, $nombreConyuge, $ap_paternoConyuge, $ap_maternoConyuge, $fecha_nacimientoConyuge, $lugar_nacimientoConyuge, $curp_conyuge, $rfc_conyuge, $nss_conyuge, $email_conyuge, $genero_conyuge, $infonavit)) {
                $success = false;
            }

            if($conexion->buscarRFC($rfc_conyuge)){ 
                $conexion->validarConyuge($curp_conyuge);
                $conexion->deleteDerechoHabiente($curp_conyuge);
                $success = false;
            }

            // Verificar si hubo algún error en la inserción de LaboralesConyuge
            if(!$conexion->insertLaboralesConyuge($rfc_conyuge, $entidad_federativaCY, $dependenciaCY, $organizacion_sindicalCY, $sueldoCY, $nombramientoCY, $bimestresCY)){
                $conexion->deleteDerechoHabiente($curp_conyuge);
                $success = false;
            }

            if($linea_credito == "Mancomunado"){
                echo "MANCOMUNADO";
                //Verificar si hubo algún error en la inserción de DocumentosConyuge
                #if (!$conexion->insertDocumentosConyuge($rfc_conyuge,$identificacion_oficial_documentoCY,$comprobante_domicilioCY,$rfc_documentoCY,$curp_documentoCY,$acta_nacimiento_documentoCY,$talon_pago_documentoCY)){
                #echo "<script>document.getElementById('modalError').classList.remove('hidden');</script>";
                    #   $success = false;
                # }
            }
    }
    


    echo $success ? "Inserción correcta" : "Error en la inserción de algún método";

}else{
    echo "False";
}*/


?>

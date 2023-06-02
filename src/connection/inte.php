<?php 
require_once "prueba.php";

$conexion = new ConexionSQLServer('LAPTOP-193LCMSG','ejemplo','DiegoMirand','Diego2812++');
#$conexion = new ConexionSQLServer('abacapital.mssql.somee.com','abacapital','jaredrosas_SQLLogin_1','e4d7nl9d6d');
$conexion->conectar();

    #   DATOS DEL DERECHO HABIENTE
    $comprobacion = $_POST['comprobacion'];
    $nombreDH = $_POST['nombre'];
    $ap_paternoDH = $_POST['apellido_paterno'];
    $ap_maternoDH = $_POST['apellido_materno'];
    $linea_credito = $_POST['linea_credito'];
    $fecha_nacimientoDH = $_POST['fecha_nacimiento'];
    $lugar_nacimientoDH =  $_POST['lugar_nacimiento'];
    $curpDH = $_POST['curp'];
    $estado_civil =  $_POST['estado_civil'];
    $genero = $_POST['genero'];
    $rfcDH = $_POST['rfc']; #=========
    $nssDH = $_POST['nss'];
    $emailDH = $_POST['correo'];
    $fecha_actualizacion = $_POST['fecha_actualizacion'];

    #   DATOS DEL DERECHO HABIENTE LABORALES
    $dependencia = $_POST['dependencia'];
    $organizacion_sindical = $_POST['organizacion'];
    $sueldo = $_POST['sueldoBase'];
    $nombramiento = $_POST['nombramiento'];
    $bimestres = $_POST['bimestres'];
    $entidad_federativaLB = $_POST['entFederativa_LB'];

    #   DATOS DEL DERECHO HABIENTE DOMICILIO
    $calle = $_POST['calle'];
    $colonia = $_POST['colonia'];
    $interior = $_POST['num_interior'];
    $exterior = $_POST['num_exterior'];
    $codigo_postal = $_POST['codigo_postal'];
    $municipio = $_POST['municipio'];
    $entidad_federativaDOM = $_POST['entFederativa_DOM'];
    $integrantes = $_POST['numero_integrantes'];
    $telefono = $_POST['telefono_particular'];
    $celular = $_POST['celular'];
    
    #   DATOS DEL DERECHO HABIENTE CRÉDITO
    $tipo_credito = $_POST['tipo_credito'];
    $modalidad_credito = $_POST['modalidad_credito'];
    $entidad_credito = $_POST['entidad_credito'];

    #   DATOS DEL DERECHO HABIENTE VIVIENDA
    $adquisicion = $_POST['adquisicion_vivienda'];
    $entidad_vivienda = $_POST['entidad_vivienda'];
    $caracteristicas = $_POST['caracteristicas'];
    $municipio_vivienda = $_POST['municipio_vivienda'];
    $terreno = $_POST['terrenoMts'];
    $habitable = $_POST['habitableMts'];
    $pisos = $_POST['pisos'];
    $cochera = $_POST['cochera'];
    $alberca = $_POST['alberca'];

    #   DATOS DEL DERECHO HABIENTE DOCUMENTOS
    $ine_archivo = $_FILES['ine_file'];
    $curp_archivo = $_FILES['curp_file'];
    $talon_archivo = $_FILES['talonPago_file'];
    $domicilio_archivo = $_FILES['domicilio_file'];
    $rfc_archivo = $_FILES['rfc_file'];
    $acta_archivo = $_FILES['actaNacimiento_file'];

    #   DATOS DEL CONYUGE
    $nombre_conyuge = $_POST['nombre_conyuge'];
    $paterno_conyuge= $_POST['paterno_conyuge'];
    $materno_conyuge= $_POST['materno_conyuge'];
    $curp_conyuge= $_POST['curp_conyuge'];
    $rfc_conyuge = $_POST['rfc_conyuge'];
    $nss_conyuge= $_POST['nss_conyuge'];
    $genero_conyuge= $_POST['genero_conyuge'];
    $infonavit_conyuge= $_POST['infonavit'];
    $correo_conyuge = $_POST['correo_conyuge'];
    $fechaNac_conyuge = $_POST['fechaNac_conyuge'];
    $lugarNac_conyuge = $_POST['lugarNac_conyuge'];

    #   DATOS DEL CONYUGE LABORALES
    $dependencia_conyuge = $_POST['dependencia_conyuge'];
    $organizacion_conyuge = $_POST['organizacion_conyuge'];
    $sueldo_conyuge = $_POST['sueldo_conyuge'];
    $nombramiento_conyuge = $_POST['nombramiento_conyuge'];
    $bimestres_conyuge = $_POST['bimestres_conyuge'];
    $entidad_federativa_conyuge = $_POST['entidad_conyuge'];

    #   DATOS DEL CONYUGE DOCUMENTOS
    /*$ine_archivo_conyuge = $_FILES['ine_file_conyuge'];
    $curp_archivo_conyuge = $_FILES['curp_file_conyuge'];
    $talon_archivo_conyuge = $_FILES['talonPago_file_conyuge'];
    $domicilio_archivo_conyuge = $_FILES['domicilio_file_conyuge'];
    $rfc_archivo_conyuge = $_FILES['rfc_file_conyuge'];
    $acta_archivo_conyuge = $_FILES['actaNacimiento_file_conyuge'];*/


    if ($comprobacion) {
        $success = true;

        $conexion->insertDerechoHabiente($nombreDH, $ap_paternoDH, $ap_maternoDH, $linea_credito, $fecha_nacimientoDH, $lugar_nacimientoDH, $curpDH, $estado_civil, $genero, 
        $rfcDH, $nssDH, $emailDH,"PROTEGIDO", $fecha_actualizacion,"");

       /* if(!$conexion->insertDHLaborales($rfcDH, $entidad_federativaLB, $dependencia, $organizacion_sindical, $sueldo, $nombramiento, $bimestres)) {
            $success = false;
        }

        if(!$conexion->insertDHDomiciilio($rfcDH, $calle, $interior, $exterior, $colonia, $codigo_postal, $municipio, $entidad_federativaDOM, $integrantes,$telefono, $celular)) {
            $success = false;
        }

        if(!$conexion->insertCreditoSolicitado($rfcDH, $tipo_credito, $modalidad_credito, $entidad_credito)) {
            $success = false;
        }
    
        if(!$conexion->insertCaracteristicasVivienda($rfcDH, $adquisicion, $entidad_vivienda, $municipio_vivienda, $terreno, $habitable, $pisos, $cochera, $alberca, $caracteristicas)) {
             $success = false;
        }*/
        
        if(!$conexion->moverArchivosPDF($rfcDH,$ine_archivo,$curp_archivo,$talon_archivo,$domicilio_archivo,$rfc_archivo,$acta_archivo)) {
            $success = false;
        }

        if($estado_civil == "Casada(o)" && $rfcDH != $rfc_conyuge){

            if (!$conexion->insertConyuge($rfcDH, $nombre_conyuge, $paterno_conyuge, $materno_conyuge, $fechaNac_conyuge, $lugarNac_conyuge, $curp_conyuge, $rfc_conyuge, 
            $nss_conyuge, $correo_conyuge, $genero_conyuge, $infonavit_conyuge)) {
                $success = false;
            }

            if($conexion->buscarRFC($rfc_conyuge)){ 
                $conexion->validarConyuge($curp_conyuge);
                $conexion->deleteDerechoHabiente($curp_conyuge);
                $success = false;
            }else{

         /*   if(!$conexion->insertLaboralesConyuge($rfc_conyuge, $entidad_federativa_conyuge, $dependencia_conyuge, $organizacion_conyuge, $sueldo_conyuge, $nombramiento_conyuge, $bimestres_conyuge)){
                $conexion->deleteDerechoHabiente($curp_conyuge);
                $success = false;
            }*/

            $ine_archivo_conyuge = isset($_FILES['ine_file_conyuge']) ? $_FILES['ine_file_conyuge'] : null;
            $curp_archivo_conyuge = isset($_FILES['curp_file_conyuge']) ? $_FILES['curp_file_conyuge'] : null;
            $talon_archivo_conyuge = isset($_FILES['talonPago_file_conyuge']) ? $_FILES['talonPago_file_conyuge'] : null;
            $domicilio_archivo_conyuge = isset($_FILES['domicilio_file_conyuge']) ? $_FILES['domicilio_file_conyuge'] : null;
            $rfc_archivo_conyuge = isset($_FILES['rfc_file_conyuge']) ? $_FILES['rfc_file_conyuge'] : null;
            $acta_archivo_conyuge = isset($_FILES['actaNacimiento_file_conyuge']) ? $_FILES['actaNacimiento_file_conyuge'] : null;

            if(!$conexion->moverArchivosPDF($rfc_conyuge,$ine_archivo_conyuge,$curp_archivo_conyuge,$talon_archivo_conyuge,$domicilio_archivo_conyuge,$rfc_archivo_conyuge,$acta_archivo_conyuge)) {
                $success = false;
            }
        }
        
        }

        echo $success ? "Inserción correcta" : "Error en la inserción de algún método";

    }else{
        echo "False";
    }


?>
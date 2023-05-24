<?php
include "prueba.php"; // Reemplaza con la ruta correcta al archivo de la clase de conexión
#$conexion = new ConexionSQLServer('LAPTOP-193LCMSG','pruebaDigezsa','DiegoMirand','Diego2812++');
$conexion = new ConexionSQLServer('abacapital.mssql.somee.com','abacapital','jaredrosas_SQLLogin_1','e4d7nl9d6d');

#$conexion = new ConexionSQLServer('LAPTOP-193LCMSG','ejemplo','DiegoMirand','Diego2812++');
$conexion->conectar();


$comprobacion = $_POST['comprobacion'];

//Datos personales del Derecho Habiente
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

//Datos laborales del Derecho Habiente
$entidad_federativaLB = $_POST['entidad_federativa'];
$dependencia = $_POST['dependencia'];
$organizacion_sindical = $_POST['organizacion_sindical'];
$sueldo = $_POST['sueldo'];
$nombramiento = $_POST['nombramiento'];
$bimestres = $_POST['bimestres'];

//Datos del domicilio del Derecho Habiente
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

//Datos del credito solicitado
$tipo_credito = $_POST['tipo_credito'];
$modalidad = $_POST['modalidad'];
$entidad_federativoCRD = $_POST['entidad_federativaCRD'];

//Datos de la especificacion de vivienda
$modalidad = $_POST['modalidadV'];
$entidad_federativaVIVD = $_POST['entidad_federativaV'];
$municipioVIVD = $_POST['municipioV'];
$terreno = $_POST['terreno_mts'];
$habitable = $_POST['habitable_mts'];
$pisos = $_POST['pisos'];
$cochera = $_POST['cochera'];
$alberca = $_POST['alberca'];
$especificaciones = $_POST['especificaciones'];

/*Datos de documentos del Derecho Habiente
$identificacion_oficial_documento = $_POST['identificacion_oficial'] guvc011115htsrlra4;
$comprobante_domicilio = $_POST['comprobante_domicilio'];
$rfc_documento = $_POST['rfc_documento'];
$curp_documento = $_POST['curp_documento'];
$acta_nacimiento_documento = $_POST['acta_nacimiento'];
$talon_pago_documento = $_POST['talon_pago'];*/

/*$identificacion_oficial_documento = $_POST['credencial'];
$comprobante_domicilio = $_POST['domicilio'];
$rfc_documento = $_POST['rfcDocumento'];
$curp_documento = $_POST['curpPdf'];
$acta_nacimiento_documento = $_POST['actaDocumento'];
$talon_pago_documento = $_POST['talonPago'];*/

//Datos personales del Conyuge
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

//Datos laborales del Conyuge
$entidad_federativaCY = $_POST['entidad_federativaCY'];
$dependenciaCY = $_POST['dependenciaCY'];
$organizacion_sindicalCY = $_POST['organizacion_sindicalC'];
$sueldoCY = $_POST['sueldoCY'];
$nombramientoCY = $_POST['nombramientoCY'];
$bimestresCY = $_POST['bimestresCY'];

/*Datos de documentos del Conyuge
$identificacion_oficial_documentoCY = $_POST['identificacion_oficialCY'];
$comprobante_domicilioCY = $_POST['comprobante_domicilioCY'];
$rfc_documentoCY = $_POST['rfc_documentoCY'];

$curp_documentoCY = $_POST['curp_documentoCY'];
$acta_nacimiento_documentoCY = $_POST['acta_nacimientoCY'];
$talon_pago_documentoCY = $_POST['talon_pagoCY'];
*/

if($comprobacion){

    $success = true;

    $conexion->insertDerechoHabiente($nombreDH, $ap_paternoDH, $ap_maternoDH, $linea_credito, $fecha_nacimientoDH, $lugar_nacimientoDH, $curpDH, $estado_civil, $genero,
    $rfcDH, $nssDH, $emailDH, $estatus, $fecha_actualizacion, $expendiente);

    // Verificar si hubo algún error en la inserción de datos laborales
    if (!$conexion->insertDHLaborales($rfcDH, $entidad_federativaLB, $dependencia, $organizacion_sindical, $sueldo, $nombramiento, $bimestres)) {
         $success = false;
    }

    // Verificar si hubo algún error en la inserción de datos domiciliarios
    if (!$conexion->insertDHDomiciilio($rfcDH, $calle, $numero_interior, $numero_exterior, $colonia, $codigo_postal, $municipio, $entidad_federativaDOM, $integrantes_familia, $telefono_particular, $telefono_celular)) {
       $success = false;
    }

    // Verificar si hubo algún error en la inserción de CreditoSolicitado
    if (!$conexion->insertCreditoSolicitado($rfcDH, $tipo_credito, $modalidad, $entidad_federativoCRD)) {
        $success = false;
    }

    // Verificar si hubo algún error en la inserción de CaracteristicasVivienda
    if (!$conexion->insertCaracteristicasVivienda($rfcDH, $modalidad, $entidad_federativaVIVD, $municipioVIVD, $terreno, $habitable, $pisos, $cochera, $alberca, $especificaciones)) {
         $success = false;
    }

    // Verificar si hubo algún error en la inserción de Documentos
    #if (!$conexion->insertDocumentos($rfcDH, $identificacion_oficial_documento, $comprobante_domicilio, $rfc_documento, $curp_documento, $acta_nacimiento_documento, $talon_pago_documento)) {
       # $success = false;
    #}

    if($estado_civil == "Casada(o)"){
        echo "ES CIERTO";

        if($rfcDH != $rfc_conyuge){
            // Verificar si hubo algún error en la inserción de Conyuge
            if (!$conexion->insertConyuge($rfcDH, $nombreConyuge, $ap_paternoConyuge, $ap_maternoConyuge, $fecha_nacimientoConyuge, $lugar_nacimientoConyuge, $curp_conyuge, $rfc_conyuge, $nss_conyuge, $email_conyuge, $genero_conyuge, $infonavit)) {
                $success = false;
            }

            // Verificar si hubo algún error en la inserción de LaboralesConyuge
            if (!$conexion->insertLaboralesConyuge($rfc_conyuge, $entidad_federativaCY, $dependenciaCY, $organizacion_sindicalCY, $sueldoCY, $nombramientoCY, $bimestresCY)) {
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
        }else{
            $success = false;
           
        }
    }

        if ($success) {
            echo "Inserción correcta";
        } else {
            echo "Error en la inserción de algún método";
        }
}else{
    echo "False";
}

?>

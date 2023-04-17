var config = require('./config');
const sql = require('mssql');

sql.connect(config, function (err) {
    if (err) console.log(err);
    console.log("Conexión establecida.");
});

async function getTabla(){
    try{
        let pool = await sql.connect(config);
        let salida = await pool.request().query("SELECT * FROM datosPersonalesDH");
        console.log(salida.recordsets);
    }catch(err){
        console.log(err);
    }
}

async function insert_personalesDH(fechaRegistro, numeroSolicitud, nombre, apellidoPaterno,
    apellidoMaterno, curp, rfc, nss, estadoCivil, genero, correo){
    try{
        let pool = await sql.connect(config);   
        let consulta = pool.request();
            consulta.input('fecha_registro',sql.DateTime,fechaRegistro)
                    .input('numero_solicitud',sql.VarChar(6),numeroSolicitud)
                    .input('nombre',sql.VarChar(50),nombre)
                    .input('apellido_paterno',sql.VarChar(50),apellidoPaterno)
                    .input('apellido_materno',sql.VarChar(50),apellidoMaterno)
                    .input('curp',sql.VarChar(18),curp)
                    .input('rfc',sql.VarChar(13),rfc)
                    .input('nss',sql.VarChar(11),nss)
                    .input('estado_civil',sql.VarChar(30),estadoCivil)
                    .input('genero',sql.Char,genero)
                    .input('email',sql.VarChar(60),correo).input('msg','');

        consulta.execute('ins_personalesDH');
        console.log("personalesDH CORRECTO");
    }catch(err){
        console.log(err);
    }
}

async function insert_laboralesDH(rfc, dependencia, organizacionSindical, nombramiento,sueldo,
    tipoCredito, bimestres){
    try{
        let pool = await sql.connect(config);
        let proceso = pool.request();
            proceso.input('rfc',sql.VarChar(13),rfc)
            .input('dependencia',sql.VarChar(50),dependencia)
                    .input('organizacion_sindical',sql.VarChar(70),organizacionSindical)
                    .input('nombramiento',sql.VarChar(15),nombramiento)
                    .input('sueldo',sql.Decimal(15,2),sueldo)
                    .input('tipo_credito',sql.VarChar(20),tipoCredito)
                    .input('bimestres',sql.Numeric,bimestres).input('msg','');

        proceso.execute('ins_laboralesDH');
        console.log("laboralesDH CORRECTO");
    }catch(err){
        console.log(err);
    }
}

async function insert_domicilioDH(solicitud, curp, calle, colonia, numeroInterior, numeroExterior,
    codigoPostal, municipio, entidadFederativa, telefonoParticular, celular, integrantesFamilia){
    try{
        let pool = await sql.connect(config);
        let proceso = pool.request();
             proceso.input('solicitud',sql.VarChar(6),solicitud)
                    .input('curp',sql.VarChar(18),curp)
                    .input('calle',sql.VarChar(100),calle)
                    .input('colonia',sql.VarChar(100),colonia)
                    .input('numero_interior',sql.Numeric,numeroInterior)
                    .input('numero_exterior',sql.Numeric,numeroExterior)
                    .input('codigo_postal',sql.Numeric,codigoPostal)
                    .input('municipio',sql.VarChar(50),municipio)
                    .input('entidad_federativa',sql.VarChar(100),entidadFederativa)
                    .input('telefono_particular',sql.VarChar(10),telefonoParticular)
                    .input('celular',sql.VarChar(10),celular)
                    .input('integrantes_familia',sql.Numeric,integrantesFamilia).input('msg','');

        proceso.execute('ins_domicilioDH');    
        console.log("domicilioDH CORRECTO");
    }catch(err){
        console.log(err);
    }
}

async function insert_viviendaDH(rfc, curp, adquisicionVivienda, entidadFederativa, especificacionVivienda){
    try{
        let pool = await sql.connect(config);
        let proceso = pool.request();
         proceso.input('rfc',sql.VarChar(13),rfc)
                .input('curp',sql.VarChar(18),curp)
                .input('adquisicion_vivienda',sql.VarChar(100),adquisicionVivienda)
                .input('entidad_federativa',sql.VarChar(100),entidadFederativa)
                .input('especificacion_vivienda',sql.VarChar(500),especificacionVivienda).input('msg','');

        proceso.execute('ins_viviendaDH');
        console.log("viviendaDH CORRECTO");
    }catch(err){
        console.log(err);
    }
}

async function insert_documentosDH(numeroSolicitud, curp, credencialPdf, curpPdf, talonPagoPdf, domicilioPdf){
    try{
        let pool = await sql.connect(config);
        let proceso = pool.request();
             proceso.input('numero_solicitud',sql.VarChar(6),numeroSolicitud)
                    .input('curp',sql.VarChar(18),curp)
                    .input('identificacion_oficial',sql.VarBinary(sql.MAX),credencialPdf)
                    .input('curp_pdf',sql.VarBinary(sql.MAX),curpPdf)
                    .input('talon_pago',sql.VarBinary(sql.MAX),talonPagoPdf)
                    .input('comprobante_domicilio',sql.VarBinary(sql.MAX),domicilioPdf).input('msg','');

        proceso.execute('ins_documentosDH');
        console.log("documentosDH CORRECTO");
    }catch(err){
        console.log(err);
    }
}

async function insert_personalesConyuge(numeroSolicitud, curpDH, nombre, apellidoPaterno, apellidoMaterno,
    curp, rfc, nss, genero, infonavit){
    try{
        let pool = await sql.connect(config);
        let proceso = pool.request();

         proceso.input('num_solicitud',sql.VarChar(6),numeroSolicitud)
                .input('curpDH',sql.VarChar(18),curpDH)
                .input('nombre',sql.VarChar(50),nombre).input('apellido_paterno',sql.VarChar(50),apellidoPaterno)
                .input('apellido_materno',sql.VarChar(50),apellidoMaterno).input('curp',sql.VarChar(18),curp)
                .input('rfc',sql.VarChar(13),rfc)
                .input('nss',sql.VarChar(10),nss)
                .input('genero',sql.Char,genero)
                .input('infonavit',sql.VarChar(2),infonavit).input('msg','');

        proceso.execute('ins_personalesConyuge');
        console.log("personalesConyuge CORRECTO");
    }catch(err){
        console.log(err);
    }
}

async function insert_laboralesConyuge(rfcConyuge, dependencia, organizacionSindical, nombramiento, sueldo, bimestres){
    try{
        let pool = await sql.connect(config);
        let proceso = pool.request();
             proceso.input('rfcConyuge',sql.VarChar(13),rfcConyuge)
                    .input('dependencia',sql.VarChar(50),dependencia)
                    .input('organizacion_sindical',sql.VarChar(70),organizacionSindical)
                    .input('nombramiento',sql.VarChar(15),nombramiento)
                    .input('sueldo',sql.Decimal(15,2),sueldo)
                    .input('bimestres',sql.Numeric,bimestres).input('msg','');

        proceso.execute('ins_laboralesConyuge');
        console.log("laboralesConyuge CORRECTO");
    }catch(err){
        console.log(err);
    }
}

async function insert_documentosConyuge(curpConyuge, rfcConyuge, credencialPdf, curpPdf, talonPagoPdf, domicilioPdf){
    try{
        let pool = await sql.connect(config);
        let proceso = pool.request();
             proceso.input('curp',sql.VarChar(18),curpConyuge)
             .input('rfc',sql.VarChar(13),rfcConyuge)
             .input('identificacion_oficial',sql.VarBinary(sql.MAX),credencialPdf)
             .input('curp_pdf',sql.VarBinary(sql.MAX),curpPdf)
             .input('talon_pago',sql.VarBinary(sql.MAX),talonPagoPdf)
             .input('comprobante_domicilio',sql.VarBinary(sql.MAX),domicilioPdf).input('msg','');

        proceso.execute('ins_documentosConyuge');
        console.log("documentosConyuge CORRECTO");
    }catch(err){
        console.log(err);
    }
}

getTabla();

module.exports = {
    insert_personalesDH,
    insert_laboralesDH,
    insert_domicilioDH,
    insert_viviendaDH,
    insert_documentosDH,
    insert_personalesConyuge,
    insert_laboralesConyuge,
    insert_documentosConyuge
}
//'2023-04-13'


















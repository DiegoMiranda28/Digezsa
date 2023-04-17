/* Objeto del usuario con todos los datos recabados */
function ObjetoDerechoHabiente(objetoPersona,objetoLaboral,objetoDomicilio,objetoVivienda,objetoDocumentos,objetoDatosConyuge,objetoLaboralesConyuge,objetoDocumentosConyuge){
    this.datosPersonales = objetoPersona;
    this.datosLaborales = objetoLaboral;
    this.datosDomicilio = objetoDomicilio;
    this.datosVivienda = objetoVivienda;
    this.datosDocumentos = objetoDocumentos;
    this.datosConyuge = objetoDatosConyuge; //conyuge datos
    this.laboralesConyuge = objetoLaboralesConyuge;
    this.documentosConyuge = objetoDocumentosConyuge;
}
/* ========== Objetos de diversos datos ========== */
function DatosPersonales(nombre,apellidoPaterno,apellidoMaterno,curp,rfc,nss,estadoCivil,genero,correo){
    this.clave = `DH${index}`;
    this.nombre = nombre;
    this.apellidoPaterno = apellidoPaterno;
    this.apellidoMaterno = apellidoMaterno;
    this.curp = curp;
    this.rfc = rfc;
    this.nss = nss;
    this.estadoCivil = estadoCivil;
    this.genero = genero; 
    this.correo = correo;
    this.fechaRegistro = new Date();
}
function DatosLaborales(dependencia,organizacion,sueldoBase,nombramiento,numeroBimestres,credito){
    this.dependencia = dependencia;
    this.organizacion = organizacion;
    this.sueldoBase = sueldoBase;
    this.nombramiento = nombramiento;
    this.numeroBimestres = numeroBimestres;
    this.credito = credito;
}
function DatosDomicilio(calle,colonia,interior,exterior,codigoPostal,municipio,entidadFederativa,numeroIntegrantes,telefonoParticular,celular){
    this.calle = calle;
    this.colonia = colonia;
    this.numeroInterior = interior;
    this.numeroExterior = exterior;
    this.codigoPostal = codigoPostal;
    this.municipio = municipio;
    this.entidadFederativa = entidadFederativa;
    this.numeroIntegrantes = numeroIntegrantes;
    this.telefonoParticular = telefonoParticular;
    this.celular = celular;
}
function DatosVivienda(adquisicion,entidadFederativa,caracteristicas){
    this.adquisicionVivienda = adquisicion;
    this.entidadFederativa = entidadFederativa;
    this.caracteristicas = caracteristicas;
}
function DatosPersonalesConyuge(nombreConyuge,paternoConyuge,maternoConyuge,curpConyuge,rfcConyuge,nssConyuge,generoConyuge,infonavit){
    this.nombre_conyuge = nombreConyuge;
    this.apellidoPaterno_conyuge = paternoConyuge;
    this.apellidoMaterno_conyuge = maternoConyuge;
    this.curp_conyuge = curpConyuge;
    this.rfc_conyuge = rfcConyuge;
    this.nss_conyuge = nssConyuge;
    this.genero_conyuge = generoConyuge;
    this.infonavit = infonavit;
}
function DatosLaboralesConyuge(dependenciaConyuge,organizacioConyuge,sueldoConyuge,nombramientoConyuge,bimestresConyuge){
    this.dependencia_conyuge = dependenciaConyuge;
    this.organizacio_conyuge = organizacioConyuge;
    this.sueldo_conyuge = sueldoConyuge;
    this.nombramiento_conyuge = nombramientoConyuge;
    this.bimestres_conyuge = bimestresConyuge;
}
function DatosDocumentos(credencial,curp,talonPago,domicilio){
    this.credencialDocumento = credencial;
    this.curpDocumento = curp;
    this.talonPagoDocumento = talonPago;
    this.docimicilioDocumento = domicilio;
}
function DatosDocumentosConyuge(credencial,curp,talonPago,domicilio){
    this.conyugeCredencial = credencial;
    this.conyugeCurp = curp;
    this.conyugeTalonPago = talonPago;
    this.conyugeDomicilio = domicilio;
}

/* ========== Variables y botones ========== */
var index = 1;
let btn_pre_envio = document.getElementById('input-restriccion');

/* ========== Variable de los campos de entrada ========== */
var nombre,apellidoPaterno,apellidoMaterno,curp,rfc,numeroSeguro,correo,estadoCivil,genero,nss;
var dependencia,organizacio,sueldoBase,nombramiento,bimestres,tipoCredito;
var calle,colonia,numInterior,numExterior,codigoPostal,municipio,entidadFederativa,numeroIntegrantes,telefonoParticular,celular;
var adquisicionVivienda,caracteristicasVivienda,entidadVivienda;
var credencial,curpPdf,talonPago,domicilio;

var nombreConyuge,paternoConyuge,maternoConyuge,curpConyuge,rfcConyuge,nssConyuge,generoConyuge,infonavit;
var dependenciaConyuge,organizacioConyuge,sueldoConyuge,nombramientoConyuge,bimestresConyuge;
var credencialConyuge,curpConyugePdf,talonPagoConyuge,domicilioConyuge;

/* ========== Arreglo que guardara los objetos ========== */
var derechoHabientes = [];

let conyugeHTML = ['label-conyuge','contenedor-conyuge-personal','linea-conyuge','contenedor-laborales-conyuge','label-conyuge2','linea-conyuge2'];

/* ========== Funciones que extraen el valor  ========== MIMJ090117HTSRRLA5*/
function getDatosPersonales(){
    nombre = document.getElementById('input-nombre').value;
    apellidoPaterno = document.getElementById('input-apellidoPaterno').value;
    apellidoMaterno = document.getElementById('input-apellidoMaterno').value;
    curp = document.getElementById('input-curp').value.toUpperCase();
    rfc = document.getElementById('input-rfc').value.toUpperCase();
    numeroSeguro = document.getElementById('input-nss').value;
    correo = document.getElementById('input-correo').value;
    estadoCivil = () => {
        let selectEstado = document.getElementById('input-estadoCivil').value;
        return selectEstado;
    }
    genero = () => {
        let selectGenero = document.getElementById('input-genero').value;
        return selectGenero;
    }
}
function getDatosLaborales(){
    dependencia = document.getElementById('input-dependencia').value;
    organizacionSindical = document.getElementById('input-organizacion').value;
    sueldoBase = document.getElementById('input-sueldoBase').value;
    nombramiento = () => {
        let selectNombramiento = document.getElementById('input-nombramiento').value;
        return selectNombramiento;
    }
    bimestres = document.getElementById('input-bimestres').value;
    tipoCredito = () => {
        let selectCredito = document.getElementById('input-credito').value;
        console.log(selectCredito);
        return selectCredito;
    }
}
function getDatosDomicilio(){
    calle = document.getElementById('input-calle').value;
    colonia = document.getElementById('input-colonia').value;
    numInterior = document.getElementById('input-interior').value;
    numExterior = document.getElementById('input-exterior').value;
    codigoPostal = document.getElementById('input-codigoPostal').value;
    municipio = document.getElementById('input-municipio').value;
    entidadFederativa = () => {
        let selectVivienda = document.getElementById('input-entidad').value;
        return selectVivienda;
    }
    numeroIntegrantes = document.getElementById('input-integrantes').value;
    telefonoParticular = document.getElementById('input-telefono').value;
    celular = document.getElementById('input-celular').value;
}
function getDatosVivienda(){
    adquisicionVivienda = () => {
        let selectVivienda = document.getElementById('input-vivienda').value;
        return selectVivienda;
    }
    entidadVivienda = () => {
        let selectViviendaEntidad = document.getElementById('input-entidad-vivienda').value;
        return selectViviendaEntidad;
    }
    caracteristicasVivienda = document.getElementById('input-caracteristicas').value;
}
function getDocumentos(){
    credencial = document.getElementById("input-credencial-pdf").value;
    curpPdf = document.getElementById("input-curp-pdf").value;
    talonPago = document.getElementById("input-pago-pdf").value;
    domicilio = document.getElementById("input-comprobante-pdf").value;
}
function getDatosConyuge(){
    nombreConyuge = document.getElementById('input-nombre-conyuge').value;
    paternoConyuge = document.getElementById('input-ap-paterno').value;
    maternoConyuge = document.getElementById('input-ap-materno').value;
    curpConyuge = document.getElementById('input-curp-conyuge').value.toUpperCase();
    rfcConyuge = document.getElementById('input-rfc-conyuge').value.toUpperCase();
    nssConyuge = document.getElementById('input-nss-conyuge').value;
    generoConyuge = () => {
        let selectGeneroConyuge = document.getElementById('input-genero-conyuge').value;
        return selectGeneroConyuge;
    }
    infonavit = () => {
        let selectInfonavit = document.getElementById('input-infonavit').value;
        return selectInfonavit;
    }
}
function getLaboralesConyuge(){
    dependenciaConyuge = document.getElementById('input-dependencia-conyuge').value;
    organizacioConyuge = document.getElementById('input-organizacion-conyuge').value;
    sueldoConyuge = document.getElementById('input-sueldo-conyuge').value;
    nombramientoConyuge = () =>{ 
        let selectNombramientoConyuge = document.getElementById('input-nombramiento-conyuge').value;
        return selectNombramientoConyuge;
    }
    bimestresConyuge = document.getElementById('input-bimestres-conyuge').value;
}
function getDocumentosConyuge(){
    credencialConyuge  = document.getElementById('credencial-conyuge').value;
    curpConyugePdf = document.getElementById('curp-conyuge').value;
    talonPagoConyuge = document.getElementById('talonPago-conyuge').value;
    domicilioConyuge = document.getElementById('domicilio-conyuge').value;
}

/*   Función que obtiene el valor de todos los campos    */
function getDatos(){
    getDatosPersonales();
    getDatosLaborales();
    getDatosDomicilio();
    getDatosVivienda();
    getDocumentos();
    getDatosConyuge();
    getLaboralesConyuge();
    getDocumentosConyuge();
}

/* ========== Funcion principal para el ingreso de datos ========== */
/*var enviarBTN = document.getElementById("btn-enviar-sb");
enviarBTN.addEventListener("submit",function(event){
    event.preventDefault();
    enviar();
})*/

let forms = document.getElementById('form_digezsa');
forms.addEventListener('submit', async (event) => {
    event.preventDefault();
    enviar();
})

function enviar(){
    getDatos();

    if(btn_pre_envio.checked){
        if(verificarDatos()){
        console.log("Formulario enviado");
        var datos_personales = new DatosPersonales(nombre,apellidoPaterno,apellidoMaterno,curp,rfc,numeroSeguro,estadoCivil(),genero(),correo);  
        var datos_laborales = new DatosLaborales(dependencia,organizacionSindical,sueldoBase,nombramiento(),bimestres,tipoCredito());
        var datos_domicilio = new DatosDomicilio(calle,colonia,numInterior,numExterior,codigoPostal,municipio,entidadFederativa(),numeroIntegrantes,telefonoParticular,celular);
        var datos_vivienda = new DatosVivienda(adquisicionVivienda(),entidadVivienda(),caracteristicasVivienda);
        var datos_conyuge = new DatosPersonalesConyuge(nombreConyuge,paternoConyuge,maternoConyuge,curpConyuge,rfcConyuge,nssConyuge,generoConyuge(),infonavit());
        var datos_laborales_conyuge = new DatosLaboralesConyuge(dependenciaConyuge,organizacioConyuge,sueldoConyuge,nombramientoConyuge(),bimestresConyuge);
        var datos_pdf = new DatosDocumentos(credencial,curpPdf,talonPago,domicilio);
        var datos_pdf_conyuge = new DatosDocumentosConyuge(credencialConyuge,curpConyugePdf,talonPagoConyuge,domicilioConyuge);

        var objetoPersonaInformacion = new ObjetoDerechoHabiente(datos_personales,datos_laborales,datos_domicilio,datos_vivienda,datos_pdf,datos_conyuge,datos_laborales_conyuge,datos_pdf_conyuge);
        derechoHabientes.push(objetoPersonaInformacion);

        
        limpiarDatosPersonales();
        index++;
        }else{
            console.log("ERROR");
        }
    }else{
        console.log("ERROR")
    }
    console.log("object",derechoHabientes);
}

/* ========== Función para mostrar las entidades ========== */
let entidades = ["Aguascalientes","Baja California","Baja California Sur","Campeche","Coahuila",
"Colima","Chiapas","Chihuahua","Ciudad de México","Durango","Guanajuato","Guerrero","Hidalgo","Jalisco",
"Edo. de México","Michoacán","Morelos","Nayarit","Nuevo León","Oaxaca","Puebla","Querétaro","Quintana Roo",
"San Luis Potosí","Sinolao","Sonora","Tabasco","Tamaulipas","Tlaxcala","Veracruz","Yucatán","Zacatecas",
"Nacional","Extranjera"];
let input_entidad = document.getElementById("input-entidad");
let input_entidad_vivienda = document.getElementById("input-entidad-vivienda");

function createEntidadFederativa(){

    entidades.forEach(element => {
        let textNode = document.createTextNode(element);
        let options = document.createElement("option");
        options.setAttribute("value",element);
        options.appendChild(textNode);
        input_entidad.appendChild(options);
    });

    entidades.forEach(element => {
        let textNode = document.createTextNode(element);
        let options = document.createElement("option");
        options.setAttribute("value",element);
        options.appendChild(textNode);
        input_entidad_vivienda.appendChild(options);
    });
}

createEntidadFederativa();

/* ========== Funcion para obtener los datos en tiempo real ========== */
function selectEstadoCivil(){
    let selectEstado = document.getElementById('input-estadoCivil').value;
    let creditoSele = document.getElementById('input-credito');

    console.log("Estado",selectEstado);
    
    if(selectEstado === "Casado(a)"){
            creditoSele[1].disabled = false;
            creditoSele[2].disabled = false;
            creditoSele[3].disabled = false; 
            conyugeHTML.forEach(iden => {
            var element = document.getElementById(`${iden}`);
            element.style.display = "block";
            element.style.display = "flex";
            });
    }else{    
            if(selectEstado === "Soltero(a)"){
                creditoSele[2].disabled = true;
                creditoSele[3].disabled = true;          
            }
                conyugeHTML.forEach(iden => {
                var element = document.getElementById(`${iden}`);
                element.style.display = "none";
                });
    }
        return selectEstado;
}

function selectCredito(){
    let creditoSele = document.getElementById('input-credito').value;
    console.log("credito",creditoSele);
    if(creditoSele === "Conyugal" || creditoSele == "Mancomunado"){
        document.getElementById('input-estadoCivil').value = "Casado(a)";
       if(creditoSele === "Mancomunado"){
            document.getElementById("lineC3").style.display = "block";
            document.getElementById("doc-pdf-html").style.display = "inline-flex";
            document.getElementById("cnt-pdf-cy").style.display = "flex";
       }
    }else{
        document.getElementById("lineC3").style.display = "none";
        document.getElementById("doc-pdf-html").style.display = "none";
        document.getElementById("cnt-pdf-cy").style.display = "none";
    }
        return creditoSele;
}

function selectEntidad(input){
    console.log("entidad",input.value);
    return input.value;
}

/* ========== Funciones para validar todos los datos ========== */
function verificarDatos(){
    var validar = true;
//MIMJ090117HTSRRLA5
    if(nombre === ""){
        validar = false;
    }else{
            if(!validarApellido(nombre,apellidoPaterno,apellidoMaterno)) validar = false;
            if(!validarCurpRfcNss(curp,rfc,numeroSeguro)) validar = false;
            if(!validarCorreo()) validar = false;
            if(!validarEstado()) validar = false;
            if(!validarDomicilio()) validar = false;
            if(!validarDatosLaborales(dependencia,organizacio,sueldoBase,nombramiento,bimestres)) validar = false;
            if(!validarTipoCredito()) validar = false;
            if(!validarDatosVivienda()) validar = false;
            if(!validarDocumentos(credencial,curpPdf,talonPago,domicilio)) validar = false;
                if(selectEstadoCivil() === "Casado(a)"){
                    console.log("Casado");
                    if(!validarApellido(nombreConyuge,paternoConyuge,maternoConyuge)) validar = false; //cónyuge
                    if(!validarCurpRfcNss(curpConyuge,rfcConyuge,nssConyuge)) validar = false;
                    if(!validarGenero(generoConyuge(),infonavit())) validar = false;
                    if(!validarDatosLaborales(dependenciaConyuge,sueldoConyuge,nombramientoConyuge(),bimestresConyuge)) validar = false;
                        if(selectCredito() === "Mancomunado"){
                            if(!validarDocumentos(credencialConyuge,curpConyugePdf,talonPagoConyuge,domicilioConyuge)) validar = false;
                        }
                }else{
                    console.log(false);
                }
    }
    return validar;
}

function validarApellido(nombre,paterno,materno){
    var aux;
    if(nombre === "" && paterno === "" && materno === ""){
        console.log("Error apellido");
        aux = false;
    }else if(nombre === "" || paterno === "" || materno === ""){
        console.log("Error apellido");
        aux = false;
    }else{
        aux = true;
    }
    return aux;
}

function validarCurpRfcNss(inCurp,inRfc,inNss){
    var aux;
    if(inCurp === "" && inRfc === "" && inNss === ""){
        console.log("ERROR Curp | RFC | NSS");
        aux = false;
    }else if(inCurp === "" || inRfc === "" || inNss === ""){
        console.log("ERROR Curp | RFC | NSS");
        aux = false;
    }else if(!validarCurp(inCurp) && !validarRFC(inRfc)){
        aux = false;
    }else if(!validarCurp(inCurp) || !validarRFC(inRfc)){
        aux = false;
    }
    else{aux = true;}

    return aux;
}

function validarCorreo(){
    var aux;
    var regex = /^\b[\w\.-]+@(yahoo|outlook|hotmail|live|gmail)+\.(com)\b$/;

    if(regex.test(correo)){
        aux = true;
    }else if(correo === ""){
        aux = false;
        console.log("ERROR Correo vacio");
    }else{
        console.log("ERROR de extension");
        aux = false;
    }
    return aux;
}

function validarGenero(inGenero,inInfonavit){
    var aux;
    if(inGenero === "Elige una opción" && inInfonavit === "Elige una opción"){
        aux = false;
    }else if(inGenero === "Elige una opción" || inInfonavit === "Elige una opción"){
        aux = false;
    }else{
        aux = true;
    }
    return aux;
}

function validarTipoCredito(){
    var aux;

    if(tipoCredito === "Elige una opción"){
        aux = false;
    }else{
        aux = true;
    }
    
    return aux;
}

function validarEstado(){
    var aux;
    if(estadoCivil() === "Elige una opción" && genero() === "Elige una opción"){
        aux = false;
    }else if(estadoCivil() === "Elige una opción" || genero() === "Elige una opción"){
        aux = false;
    }else{
        aux = true;
    }

    return aux;
}

function validarCurp(inCurp) {
    var aux;
    var re = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/,
        validado = inCurp.match(re);
	
    if (!validado){ //Coincide con el formato general?
    	aux =  false;
    }

    //Validar que coincida el dígito verificador
    function digitoVerificador(curp17) {
        var diccionario  = "0123456789ABCDEFGHIJKLMNÑOPQRSTUVWXYZ",
            lngSuma      = 0.0,
            lngDigito    = 0.0;
        for(var i=0; i<17; i++)
            lngSuma = lngSuma + diccionario.indexOf(curp17.charAt(i)) * (18 - i);
        lngDigito = 10 - lngSuma % 10;
        if (lngDigito == 10) return 0;
        return lngDigito;
    }
  
    if (validado[2] != digitoVerificador(validado[1])){
    	aux = false;
    }else{ aux = true}
        
    return aux; //Validado
}

function validarRFC(inRfc){
    var aux;
    const reg = /^([a-z]{3,4})(\d{2})(\d{2})(\d{2})([0-9a-z]{3})$/i;

    if(inRfc.match(reg)){
        aux = true;
    }else{
        aux = false;
    }
    return aux;
}

function validarDomicilio(){
    var aux;

    if(calle === "" && colonia === "" && numExterior === "" && codigoPostal === "" 
        && municipio === "" && entidadFederativa === "Elige una opción" && numeroIntegrantes === "" && celular === ""){
        console.log("ERROR domicilio");
        aux = false;
    }else if(calle === "" || colonia === "" || numExterior === "" || codigoPostal === "" 
        || municipio === "" || entidadFederativa === "Elige una opción" || numeroIntegrantes === "" || celular === ""){
        console.log("ERROR domicilio");
        aux = false;
    }else{
        aux = true;
    }
    return aux;
}

function validarDatosLaborales(inDependencia,inSueldo,inNombramiento,inBimestres){
    var aux;

    if(inDependencia === "" && inSueldo === "" && inNombramiento === "Elige una opción" && inBimestres === ""){
        console.log("ERROR datos laborales");
        aux = false;
    }else if(inDependencia === "" || inSueldo === "" || inNombramiento === "Elige una opción" || inBimestres === ""){
        console.log("ERROR datos laborales");
        aux = false;
    }else{
        aux = true;
    }
    return aux;
}

function validarDatosVivienda(){
    var aux;

    if(adquisicionVivienda() === "Elige una opción" && entidadVivienda === "Elige una opción"){
        console.log("ERROR datos vivienda");
        aux = false;
    }else if(adquisicionVivienda() === "Elige una opción" || entidadVivienda === "Elige una opción"){
        console.log("ERROR datos vivienda");
        aux = false;
    }else{
        aux = true;
    }

    return aux;
}

function validarDocumentos(credencial,curpPdf,talonPago,domicilio){
    var aux;
    if(credencial === "" && curpPdf === "" && talonPago === "" && domicilio === ""){
        console.log("ERROR documentos");
        aux = false;
    }else if(credencial === "" || curpPdf === "" || talonPago === "" || domicilio === ""){
        console.log("ERROR documentos");
        aux = false;
    }else{
        aux = true;
    }
    return aux;
}

/* ========== Limpiar campos ========== */
function limpiarDatosPersonales(){
    document.getElementById('input-nombre').value = "";
    document.getElementById('input-apellidoPaterno').value = "";
    document.getElementById('input-apellidoMaterno').value = "";
    document.getElementById('input-curp').value = "";
    document.getElementById('input-rfc').value = "";
    document.getElementById('input-nss').value = "";
    document.getElementById('input-estadoCivil').value = "Elige una opción";
    document.getElementById('input-genero').value = "Elige una opción";
    document.getElementById('input-correo').value = "";

    document.getElementById('input-dependencia').value = "";
    document.getElementById('input-organizacion').value = "";
    document.getElementById('input-sueldoBase').value = "";
    document.getElementById('input-bimestres').value = "";
    document.getElementById('input-nombramiento').value = "Elige una opción";

    document.getElementById('input-calle').value = "";
    document.getElementById('input-colonia').value = "";
    document.getElementById('input-interior').value = "";
    document.getElementById('input-exterior').value = "";
    document.getElementById('input-codigoPostal').value = "";
    document.getElementById('input-municipio').value = "";
    document.getElementById("input-entidad").value = "Elige una opción";
    document.getElementById('input-integrantes').value = "";
    document.getElementById('input-telefono').value = "";
    document.getElementById('input-celular').value = "";

    document.getElementById('input-vivienda').value = "Elige una opción";
    document.getElementById('input-caracteristicas').value = "";
    document.getElementById("input-entidad-vivienda").value = "Elige una opción";

    document.getElementById('input-nombre-conyuge').value = "";
    document.getElementById('input-ap-paterno').value = "";
    document.getElementById('input-ap-materno').value = "";
    document.getElementById('input-curp-conyuge').value = "";
    document.getElementById('input-rfc-conyuge').value = "";
    document.getElementById('input-nss-conyuge').value = "";
    document.getElementById('input-genero-conyuge').value = "Elige una opción";
    document.getElementById('input-infonavit').value = "Elige una opción";

    document.getElementById('input-dependencia-conyuge').value;
    document.getElementById('input-organizacion-conyuge').value;
    document.getElementById('input-sueldo-conyuge').value;
    document.getElementById('input-nombramiento-conyuge').value;
    document.getElementById('input-bimestres-conyuge').value;

    document.getElementById("input-credencial-pdf").value;
    document.getElementById("input-curp-pdf").value;
    document.getElementById("input-pago-pdf").value;
    document.getElementById("input-comprobante-pdf").value;
}


























/* Botones para cerrar el modal e ingresar al registro */
let btn_si = document.getElementById('btn-reg-fov');
let modal = document.getElementById('modal');
let btn_cer = document.getElementById('btn-closed');
let modalDocu = document.getElementById('modalDoc');

btn_si.addEventListener("click",() => {
    modal.style.display = "none";
    console.log("Registo fovissste");
});

btn_cer.addEventListener("click",() => {
    modalDocu.style.display = "none";
    console.log("Registo fovissste");
});

let btnAviso = document.getElementById('btn-aviso');
btnAviso.addEventListener("click",() => {
    modalDocu.style.display = "block";
});




//https://www.tailwindawesome.com/resources/landwind/demo
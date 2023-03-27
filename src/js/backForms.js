/* Objeto del usuario con todos los datos recabados */
function ObjetoDerechoHabiente(objetoPersona,objetoLaboral,objetoDomicilio,objetoVivienda,objetoDatosConyuge,objetoLaboralesConyuge){
    this.objetoPersona = objetoPersona;
    this.objetoLaboral = objetoLaboral;
    this.objetoDomicilio = objetoDomicilio;
    this.objetoVivienda = objetoVivienda;
    this.objetoDatosConyuge = objetoDatosConyuge;
    this.DatosLaboralesConyuge = objetoLaboralesConyuge;
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

function DatosLaborales(dependencia,organizacion,sueldoBase,nombramiento,numeroBimestres){
    this.dependencia = dependencia;
    this.organizacion = organizacion;
    this.sueldoBase = sueldoBase;
    this.nombramiento = nombramiento;
    this.numeroBimestres = numeroBimestres;
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

/* ========== Variables y botones ========== */
var index = 1;
let btn_pre_envio = document.getElementById('input-restriccion');

/* ========== Variable de los campos de entrada ========== */
let nombre,apellidoPaterno,apellidoMaterno,curp,rfc,numeroSeguro,correo,estadoCivil,genero,nss;
let dependencia,organizacio,sueldoBase,nombramiento,bimestres;
let calle,colonia,numInterior,numExterior,codigoPostal,municipio,entidadFederativa,numeroIntegrantes,telefonoParticular,celular;
let adquisicionVivienda,caracteristicasVivienda,entidadVivienda;

let nombreConyuge,paternoConyuge,maternoConyuge,curpConyuge,rfcConyuge,nssConyuge,generoConyuge,infonavit;
let dependenciaConyuge,organizacioConyuge,sueldoConyuge,nombramientoConyuge,bimestresConyuge;

let credencial,curpPdf,talonPago,domicilio;

/* ========== Arreglo que guardara los objetos ========== */
var derechoHabientes = [];

let conyugeHTML = ['label-conyuge','contenedor-conyuge-personal','linea-conyuge','contenedor-laborales-conyuge','label-conyuge2','linea-conyuge2'];

/* ========== Funcion que extrae el valor de todos los datos ========== */
function getDatos(){
    /*  valor de datos personales  */
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
   
     /*  valor de datos laborales  */
    dependencia = document.getElementById('input-dependencia').value;
    organizacionSindical = document.getElementById('input-organizacion').value;
    sueldoBase = document.getElementById('input-sueldoBase').value;
    nombramiento = () => {
        let selectNombramiento = document.getElementById('input-nombramiento').value;
        return selectNombramiento;
    }
    bimestres = document.getElementById('input-bimestres').value;

    /*  valor de datos de domicilio  */
    calle = document.getElementById('input-calle').value;
    colonia = document.getElementById('input-colonia').value;
    numInterior = document.getElementById('input-interior').value;
    numExterior = document.getElementById('input-exterior').value;
    codigoPostal = document.getElementById('input-codigoPostal').value;
    municipio = document.getElementById('input-municipio').value;
    entidadFederativa = document.getElementById('input-entidadFederativa').value;
    numeroIntegrantes = document.getElementById('input-integrantes').value;
    telefonoParticular = document.getElementById('input-telefono').value;
    celular = document.getElementById('input-celular').value;

    /*  valor de datos de la vivienda */
    adquisicionVivienda = () => {
        let selectVivienda = document.getElementById('input-vivienda').value;
        return selectVivienda;
    }
    entidadVivienda = document.getElementById('input-entidadVivienda').value;
    caracteristicasVivienda = document.getElementById('input-caracteristicas').value;

    /*  valor de datos personales del conyuge */
    nombreConyuge = document.getElementById('input-nombre-conyuge').value;
    paternoConyuge = document.getElementById('input-ap-paterno').value;
    maternoConyuge = document.getElementById('input-ap-materno').value;
    curpConyuge = document.getElementById('input-curp-conyuge').value;
    rfcConyuge = document.getElementById('input-rfc-conyuge').value;
    nssConyuge = document.getElementById('input-nss-conyuge').value;
    generoConyuge = () => {
        let selectGeneroConyuge = document.getElementById('input-genero-conyuge').value;
        return selectGeneroConyuge;
    }
    infonavit = () => {
        let selectInfonavit = document.getElementById('input-infonavit').value;
        return selectInfonavit;
    }
    
    /*  valor de datos laborales del conyuge */
    dependenciaConyuge = document.getElementById('input-dependencia-conyuge').value;
    organizacioConyuge = document.getElementById('input-organizacion-conyuge').value;
    sueldoConyuge = document.getElementById('input-sueldo-conyuge').value;
    nombramientoConyuge = () =>{ 
        let selectNombramientoConyuge = document.getElementById('input-nombramiento-conyuge').value;
        return selectNombramientoConyuge;
    }
    bimestresConyuge = document.getElementById('input-bimestres-conyuge').value;

    /*  valor de los documentos */
    credencial = document.getElementById("input-credencial-pdf").value;
    curpPdf = document.getElementById("input-curp-pdf").value;
    talonPago = document.getElementById("input-pago-pdf").value;
    domicilio = document.getElementById("input-comprobante-pdf").value;
}

/* ========== Funcion principal para el ingreso de datos ========== */
function enviar(){
    getDatos();

    //if(btn_pre_envio.checked){
        if(verificarDatos()){
        console.log("Formulario enviado");
        var datos_personales = new DatosPersonales(nombre,apellidoPaterno,apellidoMaterno,curp,rfc,numeroSeguro,estadoCivil(),genero(),correo);  
        var datos_laborales = new DatosLaborales(dependencia,organizacionSindical,sueldoBase,nombramiento());
        var datos_domicilio = new DatosDomicilio(calle,colonia,numInterior,numExterior,codigoPostal,municipio,entidadFederativa,numeroIntegrantes,telefonoParticular,celular);
        var datos_vivienda = new DatosVivienda(adquisicionVivienda(),entidadVivienda,caracteristicasVivienda);
        var datos_conyuge = new DatosPersonalesConyuge(nombreConyuge,paternoConyuge,maternoConyuge,curpConyuge,rfcConyuge,nssConyuge,generoConyuge(),infonavit());
        var datos_laborales_conyuge = new DatosLaboralesConyuge(dependenciaConyuge,organizacioConyuge,sueldoConyuge,nombramientoConyuge(),bimestresConyuge);

            if(!selectEstadoCivil() === "Casado(a)"){
                var objetoPersonaInformacion = new ObjetoDerechoHabiente(datos_personales,datos_laborales,datos_domicilio,datos_vivienda);
                derechoHabientes.push(objetoPersonaInformacion);
            }else{
                var objetoPersonaInformacion = new ObjetoDerechoHabiente(datos_personales,datos_laborales,datos_domicilio,datos_vivienda,datos_conyuge,datos_laborales_conyuge);
                derechoHabientes.push(objetoPersonaInformacion);
            }

        limpiarDatosPersonales();
        index++;
        }else{
            console.log("ERROR");
        }
    //}else{
      //  console.log("ERROR")
    //}

    console.log("object",derechoHabientes);
}

/* ========== Funcion para obtener los datos en tiempo real y saber si habilitar los datos del conyuge ========== */
function selectEstadoCivil(){
    let selectEstado = document.getElementById('input-estadoCivil').value;
    
    if(selectEstado === "Casado(a)"){
        conyugeHTML.forEach(iden => {
            var element = document.getElementById(`${iden}`);
            element.style.display = "block";
            element.style.display = "flex";
        })

    }else{
        conyugeHTML.forEach(iden => {
            var element = document.getElementById(`${iden}`);
            element.style.display = "none";
        })
    }

    return selectEstado;
}

/* ========== Funciones para validar todos los datos ========== */
function verificarDatos(){
    var validar = true;
    console.log(estadoCivil())
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
            if(!validarDatosVivienda()) validar = false;
            if(!validarDocumentos()) validar = false;
                if(selectEstadoCivil() === "Casado(a)"){
                    console.log(true);
                    if(!validarApellido(nombreConyuge,paternoConyuge,maternoConyuge)) validar = false; //cónyuge
                    if(!validarCurpRfcNss(curpConyuge,rfcConyuge,nssConyuge)) validar = false;
                    if(!validarGenero(generoConyuge(),infonavit())) validar = false;
                    if(!validarDatosLaborales(dependenciaConyuge,sueldoConyuge,nombramientoConyuge(),bimestresConyuge)) validar = false;
                }else{
                    console.log(false);
                }
        
    }
    return validar;
}

/* ========== Funciones de validación de datos ========== */
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
        && municipio === "" && entidadFederativa === "" && numeroIntegrantes === "" && celular === ""){
        console.log("ERROR domicilio");
        aux = false;
    }else if(calle === "" || colonia === "" || numExterior === "" || codigoPostal === "" 
        || municipio === "" || entidadFederativa === "" || numeroIntegrantes === "" || celular === ""){
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

    if(adquisicionVivienda() === "Elige una opción" && entidadVivienda === ""){
        console.log("ERROR datos vivienda");
        aux = false;
    }else if(adquisicionVivienda() === "Elige una opción" || entidadVivienda === ""){
        console.log("ERROR datos vivienda");
        aux = false;
    }else{
        aux = true;
    }

    return aux;
}

function validarDocumentos(){
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
    document.getElementById('input-entidadFederativa').value = "";
    document.getElementById('input-integrantes').value = "";
    document.getElementById('input-telefono').value = "";
    document.getElementById('input-celular').value = "";

    document.getElementById('input-vivienda').value = "Elige una opción";
    document.getElementById('input-entidadVivienda').value = "";
    document.getElementById('input-caracteristicas').value = "";

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
let btn_cerrar = document.getElementById('btn-close-modal');
let modal = document.getElementById('modal');

btn_si.addEventListener("click",() => {
    modal.style.display = "none";
    console.log("Registo fovissste");
});

btn_cerrar.addEventListener("click",() => {
    modal.style.display = "none";
    console.log("Modal cerrado");
});

/* Función para el boton de aviso */
let btnAviso = document.getElementById('btn-aviso');
btnAviso.addEventListener("click",() => {
    alert("Este formato y/o material adjunto es para uso exclusivo de la(s) persona(s) o entidade(s) " +
    "a la que expresamente se le ha enviado, y puede contener información confidencial o material privilegiado.");
});

/* Función para el boton de aviso de documentos*/
let btnDocumentos = document.getElementById('btn-aviso-pdf');
btnDocumentos.addEventListener("click", () =>{
    alert("- Identificación oficial por ambos lados al 200% a color" + 
    "\n- Curp actualizado" + "\n- Ultimo talón de pago" + "\n- Comprobante de domicilio no mayor a 3 meses");
})


//https://www.tailwindawesome.com/resources/landwind/demo
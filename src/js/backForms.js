/* Objeto del usuario con todos los datos recabados */
function ObjetoDerechoHabiente(objetoPersona,objetoLaboral,objetoDomicilio,objetoVivienda,objetoDocumentos,objetoDatosConyuge,objetoLaboralesConyuge,objetoDocumentosConyuge,objetoCredito){
    this.datosPersonales = objetoPersona; //Variable iguala a los objetos
    this.datosLaborales = objetoLaboral;
    this.datosDomicilio = objetoDomicilio;
    this.datosCredito = objetoCredito;
    this.datosVivienda = objetoVivienda;
    this.datosDocumentos = objetoDocumentos;
    this.datosConyuge = objetoDatosConyuge; //conyuge datos
    this.laboralesConyuge = objetoLaboralesConyuge;
    this.documentosConyuge = objetoDocumentosConyuge;
}

let fecha = new Date();
let fechaActualizada = fecha.toLocaleDateString();
    fechaSQL = fechaActualizada.replaceAll("/","-"); //Fecha que recibe el dato en SQL 

/* ========== Objeto de datos personales del Derecho Habiente de acuerdo a la base de datos ========== */
function DatosPersonales(nombre,apellidoPaterno,apellidoMaterno,curp,rfc,nss,estadoCivil,genero,correo,lineaCredito,fechaNacimiento,lugarNacimiento){
    this.nombre = nombre;
    this.apellidoPaterno = apellidoPaterno;
    this.apellidoMaterno = apellidoMaterno;
    this.curp = curp;
    this.rfc = rfc;
    this.nss = nss;
    this.estadoCivil = estadoCivil;
    this.genero = genero; 
    this.correo = correo;
    this.lineaCredito = lineaCredito
    this.fechaNacimiento = fechaNacimiento;
    this.lugarNacimiento = lugarNacimiento;
    this.fechaActualizada = fechaSQL;
    this.estatus = "PROTEGIDO";
    this.expediente = "";
}

function DatosLaborales(dependencia,organizacion,sueldoBase,nombramiento,numeroBimestres,entidadFederativa){
    this.dependencia = dependencia;
    this.organizacion = organizacion;
    this.sueldoBase = sueldoBase;
    this.nombramiento = nombramiento;
    this.numeroBimestres = numeroBimestres;
    this.entidadFederativa = entidadFederativa;
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

function DatosCreditoSolicitado(tipoCredito,modalidadCredito,entidadFederativaCredito){
    this.tipoCredito = tipoCredito;
    this.modalidadCredito = modalidadCredito;
    this.entidadFederativaCredito = entidadFederativaCredito;
}

function DatosVivienda(adquisicion,entidadFederativa,caracteristicas,
    municipio,terrenoMts,habitanMts,pisos,cochera,alberca){
    this.adquisicionVivienda = adquisicion;
    this.entidadFederativa = entidadFederativa;
    this.caracteristicas = caracteristicas;
    this.municipio = municipio;
    this.terrenoMts = terrenoMts;
    this.habitanMts = habitanMts;
    this.pisos = pisos;
    this.cochera = cochera;
    this.alberca = alberca;
}

function DatosDocumentos(credencial,curp,talonPago,domicilio,rfc,actaNacimiento){
    this.credencialDocumento = credencial;
    this.curpDocumento = curp;
    this.talonPagoDocumento = talonPago;
    this.docimicilioDocumento = domicilio;
    this.rfcDocumento = rfc;
    this.actaNacimiento = actaNacimiento
}

/* ========== Objetos de datos del Conyuge  ========== */
function DatosPersonalesConyuge(nombreConyuge,paternoConyuge,maternoConyuge,curpConyuge,rfcConyuge,nssConyuge,generoConyuge,infonavit,email,nacimientoConyuge,lugarConyuge){
    this.nombre_conyuge = nombreConyuge;
    this.apellidoPaterno_conyuge = paternoConyuge;
    this.apellidoMaterno_conyuge = maternoConyuge;
    this.curp_conyuge = curpConyuge;
    this.rfc_conyuge = rfcConyuge;
    this.nss_conyuge = nssConyuge;
    this.genero_conyuge = generoConyuge;
    this.infonavit = infonavit;
    this.email = email;
    this.fecha_nacimiento = nacimientoConyuge;
    this.lugar_nacimiento = lugarConyuge;
}

function DatosLaboralesConyuge(dependenciaConyuge,organizacioConyuge,sueldoConyuge,nombramientoConyuge,bimestresConyuge){
    this.dependencia_conyuge = dependenciaConyuge;
    this.organizacio_conyuge = organizacioConyuge;
    this.sueldo_conyuge = sueldoConyuge;
    this.nombramiento_conyuge = nombramientoConyuge;
    this.bimestres_conyuge = bimestresConyuge;
}

function DatosDocumentosConyuge(credencial,curp,talonPago,domicilio){
    this.conyugeCredencial = credencial;
    this.conyugeCurp = curp;
    this.conyugeTalonPago = talonPago;
    this.conyugeDomicilio = domicilio;
}

/* ========== Variables y botones ========== */
let btn_pre_envio = document.getElementById('input-restriccion');

/* ========== Variable de los campos de entrada Derecho Habiente ========== */
var nombre,apellidoPaterno,apellidoMaterno,curp,rfc,numeroSeguro,correo,estadoCivil,genero,nss,lineaCredito,fechaNacimiento,lugarNacimiento; //Tabla personales
var dependencia,organizacio,sueldoBase,nombramiento,bimestres,entidadFederativaLaboral; //Tabla laborales
var calle,colonia,numInterior,numExterior,codigoPostal,municipio,entidadFederativa,numeroIntegrantes,telefonoParticular,celular; //Tabla domicilio
var tipoCredito,modalidadCredito,entidadCredito; //Tabla de Crédito solicitado
var adquisicionVivienda,caracteristicasVivienda,entidadVivienda,municipioVivienda,terrenoMts,habitableMts,pisos,cochera,alberca; //Tabla vivienda
var credencial,curpPdf,talonPago,domicilio,rfcDocumento,actaDocumento; //Tabla documentos


/* ========== Variable de los campos de entrada Conyuge ========== */
var nombreConyuge,paternoConyuge,maternoConyuge,curpConyuge,rfcConyuge,nssConyuge,generoConyuge,infonavit,emailConyuge,fecha_nacimientoConyuge,lugar_nacimientoConyuge;

var dependenciaConyuge,organizacioConyuge,sueldoConyuge,nombramientoConyuge,bimestresConyuge;
var credencialConyuge,curpConyugePdf,talonPagoConyuge,domicilioConyuge;

/* ========== Arreglo que guardara los objetos ========== */
var derechoHabientes = []; //Arreglo que guardara los objetos de Derecho Habiente
let conyugeHTML = ['label-conyuge','contenedor-conyuge-personal','linea-conyuge',
'contenedor-laborales-conyuge','label-conyuge2','linea-conyuge2']; //Etiquetas de elementos del HTML que sirven para modificar su estilo de acuerdo a un evento
/* ========== Funciones que extraen el valor  ========== MIMJ090117HTSRRLA5*/
function getDatosPersonales(){
    nombre = document.getElementById('input-nombre').value; //Toda variable que tenga *.value* es para obtener los datos a la hora que se envíen
    apellidoPaterno = document.getElementById('input-apellidoPaterno').value; 
    apellidoMaterno = document.getElementById('input-apellidoMaterno').value;
    curp = document.getElementById('input-curp').value.toUpperCase();
    rfc = document.getElementById('input-rfc').value.toUpperCase();
    numeroSeguro = document.getElementById('input-nss').value;
    correo = document.getElementById('input-correo').value;
    estadoCivil = () => { //variable que guarda una función y obtiene el valor en tiempo real
        let selectEstado = document.getElementById('input-estadoCivil').value;
        return selectEstado; // retorna el valor obtenido del evento onChange en tiempo real 
    }
    genero = () => {
        let selectGenero = document.getElementById('input-genero').value;
        return selectGenero;
    }
    lineaCredito = () => {
        let selectCredito = document.getElementById('input-credito').value;
        return selectCredito;
    }
    fechaNacimiento = document.getElementById("input-fechaNacimiento").value;
    lugarNacimiento = document.getElementById("input-lugarNacimiento").value;
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
    entidadFederativaLaboral = () => {
        let selectVivienda = document.getElementById('input-entidad-laboral').value;
        return selectVivienda;
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

function getDatosCredito(){
    tipoCredito = () => {
        return document.getElementById("input-credito-vivienda").value;
    }

    modalidadCredito = () => {
        console.log(document.getElementById("input-credito-tipo").value);
        return document.getElementById("input-credito-tipo").value;
    }

    entidadCredito = () => {
        console.log(document.getElementById("input-credito-entidad").value);
        return document.getElementById("input-credito-entidad").value;
    }
}

function getDatosVivienda(){
    adquisicionVivienda = () => {  //MODALIDA VIVIENDA
        let selectVivienda = document.getElementById('input-vivienda').value;
        return selectVivienda;
    }
    entidadVivienda = () => {
        let selectViviendaEntidad = document.getElementById('input-entidad-vivienda').value;
        return selectViviendaEntidad;
    }
    caracteristicasVivienda = document.getElementById('input-caracteristicas').value;

    municipioVivienda = document.getElementById("input-vivienda-municipio").value;
    terrenoMts = document.getElementById("input-vivienda-terreno").value;
    habitableMts = document.getElementById("input-vivienda-habitable").value;
    pisos = document.getElementById("input-vivienda-pisos").value;
    cochera = () => {
        return document.getElementById("input-vivienda-cochera").value; 
    }
    alberca = () => {
        return document.getElementById("input-vivienda-alberca").value;
    }
}

function getDocumentos(){
    credencial = document.getElementById("input-credencial-pdf").value;
    curpPdf = document.getElementById("input-curp-pdf").value;
    talonPago = document.getElementById("input-pago-pdf").value;
    domicilio = document.getElementById("input-comprobante-pdf").value;
    rfcDocumento = document.getElementById("input-rfc-pdf").value;
    actaDocumento = document.getElementById("input-acta-pdf").value;
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
    emailConyuge = document.getElementById("input-correo-conyuge").value;
    fecha_nacimientoConyuge = document.getElementById("input-fechaNacimiento-conyuge").value;
    lugar_nacimientoConyuge = document.getElementById("input-lugarNacimiento-conyuge").value;
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
    getDatosCredito();
    getDatosVivienda();
    getDocumentos();
    getDatosConyuge();
    getLaboralesConyuge();
    getDocumentosConyuge();
}

let forms = document.getElementById('form_digezsa'); //variable que obtiene el id de la etiqueta forms
forms.addEventListener('submit', async (event) => { //Función del metodo Event de tipo submit, la cual es un método async (asíncrono)
    event.preventDefault(); //Llamado a un método que previene el recargar la página automaticamente
    enviar(); //Invocación de la función enviar
})

function enviar(){
    getDatos(); //Función donde se encuentran todos los datos obtenidos
    if(btn_pre_envio.checked){ //COndición para que debe ser true para que se envien los datos
        if(verificarDatos()){ //Funcion que al cumplir que los datos no esten incompletos o vacios
        console.log("Formulario enviado");
        var datos_personales = new DatosPersonales(nombre,apellidoPaterno,apellidoMaterno,curp,rfc,numeroSeguro,estadoCivil(),genero(),correo,lineaCredito(),fechaNacimiento,lugarNacimiento);  
        var datos_laborales = new DatosLaborales(dependencia,organizacionSindical,sueldoBase,nombramiento(),bimestres,entidadFederativaLaboral());
        var datos_domicilio = new DatosDomicilio(calle,colonia,numInterior,numExterior,codigoPostal,municipio,entidadFederativa(),numeroIntegrantes,telefonoParticular,celular);
        var datos_credito = new DatosCreditoSolicitado(tipoCredito(),modalidadCredito(),entidadCredito());
        var datos_vivienda = new DatosVivienda(adquisicionVivienda(),entidadVivienda(),caracteristicasVivienda,municipioVivienda,terrenoMts,habitableMts,pisos,cochera(),alberca());
        var datos_pdf = new DatosDocumentos(credencial,curpPdf,talonPago,domicilio,rfcDocumento,actaDocumento);


        var datos_conyuge = new DatosPersonalesConyuge(nombreConyuge,paternoConyuge,maternoConyuge,curpConyuge,rfcConyuge,nssConyuge,generoConyuge(),infonavit(),emailConyuge,fecha_nacimientoConyuge,lugar_nacimientoConyuge);
        var datos_laborales_conyuge = new DatosLaboralesConyuge(dependenciaConyuge,organizacioConyuge,sueldoConyuge,nombramientoConyuge(),bimestresConyuge);
        var datos_pdf_conyuge = new DatosDocumentosConyuge(credencialConyuge,curpConyugePdf,talonPagoConyuge,domicilioConyuge);

        var objetoPersonaInformacion = new ObjetoDerechoHabiente(datos_personales,datos_laborales,datos_domicilio,datos_vivienda,datos_pdf,datos_conyuge,
            datos_laborales_conyuge,datos_pdf_conyuge,datos_credito);
        derechoHabientes.push(objetoPersonaInformacion); //Introducción el objeto al arreglo
            limpiarDatosPersonales(); //Limpia los datos de los campos del formulario
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
let input_entidad_laboral = document.getElementById("input-entidad-laboral");
let input_entidad_vivienda = document.getElementById("input-entidad-vivienda");
let input_entidad_credito = document.getElementById("input-credito-entidad");

function createEntidadFederativa(){
    entidades.forEach(element => { //Un ciclo que recorre un arreglo con los datos de las entidades por un objeto "Element"
        let textNode = document.createTextNode(element); //Crear un nodo para la creación de tipo select
        let options = document.createElement("option"); // Crea la opcion "option" para el select
        options.setAttribute("value",element); //El valor de option es el elemento que recorre en el arreglo
        options.appendChild(textNode); //El elemento option agrega el nodo 
        input_entidad.appendChild(options); //El elemento del select agrega el valor de option y se muestra en el formulario
    });

    entidades.forEach(element => {
        let textNode = document.createTextNode(element);
        let options = document.createElement("option");
        options.setAttribute("value",element);
        options.appendChild(textNode);
        input_entidad_vivienda.appendChild(options);
    });

    entidades.forEach(element => {
        let textNode = document.createTextNode(element);
        let options = document.createElement("option");
        options.setAttribute("value",element);
        options.appendChild(textNode);
        input_entidad_laboral.appendChild(options);
    });

    entidades.forEach(element => {
        let textNode = document.createTextNode(element);
        let options = document.createElement("option");
        options.setAttribute("value",element);
        options.appendChild(textNode);
        input_entidad_credito.appendChild(options);
    });
}

createEntidadFederativa(); //Se manda a invocar para que este lista al empezar el programa
/* ========== Funcion para obtener los datos en tiempo real ========== */
function selectEstadoCivil(){
    let selectEstado = document.getElementById('input-estadoCivil').value;
    let creditoSele = document.getElementById('input-credito');
    if(selectEstado === "Casada(o)"){
            creditoSele[1].disabled = false; //bloque las opciones de los creditos
            creditoSele[2].disabled = false;
            creditoSele[3].disabled = false; 
            conyugeHTML.forEach(iden => { //Recorre el arreglo de elementos HTML
            var element = document.getElementById(`${iden}`); //Ingresa mediante el id
            element.style.display = "block"; //Muestra los elementos 
            element.style.display = "flex"; //Con una estructura tipo flex
            });
    }else{    
            if(selectEstado === "Soltera(o)"){
                creditoSele[2].disabled = true; //Muestra las opciones que puede tener 
                creditoSele[3].disabled = true;          
            }
                conyugeHTML.forEach(iden => {
                var element = document.getElementById(`${iden}`);
                element.style.display = "none"; //Desaparece los elementos visibles de acuerdo a la respuesta anterior
                });
    }

    console.log("Estado civil",selectEstado);
        return selectEstado;
}

function selectCredito(){
    let creditoSele = document.getElementById('input-credito').value; //Obtiene el valor que se introdujo en el formulario
    if(creditoSele === "CONYUGAL" || creditoSele == "MANCOMUNADO"){ //Entra a una condicion
        document.getElementById('input-estadoCivil').value = "Casada(o)";
       if(creditoSele === "MANCOMUNADO"){
            document.getElementById("lineC3").style.display = "block"; //El elemento con el id correspondiente es el que se habilita
            document.getElementById("doc-pdf-html").style.display = "inline-flex"; //Se crea una estructura lineal y ajustable
            document.getElementById("cnt-pdf-cy").style.display = "flex"; //Se ajusta a la estructura
            document.getElementById('linea-doc-conyuge').style.display = "block";
       }
    }else{
        document.getElementById("lineC3").style.display = "none"; //Se bloquean y desaparecen del formulario
        document.getElementById("doc-pdf-html").style.display = "none";
        document.getElementById("cnt-pdf-cy").style.display = "none";
        document.getElementById('linea-doc-conyuge').style.display = "none";
    }

        console.log("Linea de crédito",creditoSele);
        return creditoSele; //Retorna el credito seleccionado en tiempo real
}

function selectTipoCredito(){
let tipoDeCredito = document.getElementById("input-credito-tipo").value;

console.log("Tipo de credito",tipoDeCredito);

return tipoDeCredito;
}

function selectEntidad(input){
    console.log("entidad",input.value);
    return input.value; //Obtiene el valor y lo retorna la entidad en tiempo real 
}

/* ========== Funciones para validar todos los datos ========== */
function verificarDatos(){
    var validar = true; //Variable que será ocupada para las verificaciones
//MIMJ090117HTSRRLA5
    if(nombre === ""){ //Verifica si el nombre es vacio
        validar = false; //Retorna falso cuando no cumple con la concidición
    }else{
            if(!validarApellido(nombre,apellidoPaterno,apellidoMaterno)) validar = false; //Checa la validación si es diferente de true, se hace false y no procede a obtener los datos
            if(!validarCurpRfcNss(curp,rfc,numeroSeguro)) validar = false;
            if(!validarCorreo()) validar = false; //Si son diferentes a true, se hace false y ninguna se ejecuta para el envio de datos
            if(!validarEstado()) validar = false;
            if(!validarDomicilio()) validar = false;
            if(!validarDatosLaborales(dependencia,organizacio,sueldoBase,nombramiento,bimestres)) validar = false;
            if(!validarLineaCredito()) validar = false;
            if(!validarDatosVivienda()) validar = false;
            if(!validarDocumentos(credencial,curpPdf,talonPago,domicilio)) validar = false;
                if(selectEstadoCivil() === "Casada(o)"){ //Verificacion para el ingreso de datos del conyuge 
                    console.log("Casado");
                    if(!validarApellido(nombreConyuge,paternoConyuge,maternoConyuge)) validar = false; //cónyuge
                    if(!validarCurpRfcNss(curpConyuge,rfcConyuge,nssConyuge)) validar = false;
                    if(!validarGenero(generoConyuge(),infonavit())) validar = false;
                    if(!validarDatosLaborales(dependenciaConyuge,sueldoConyuge,nombramientoConyuge(),bimestresConyuge)) validar = false;
                        if(selectCredito() === "Mancomunado"){
                            if(!validarDocumentos(credencialConyuge,curpConyugePdf,talonPagoConyuge,domicilioConyuge)) validar = false; //Condición para checar el apartado de datos
                        }
                }else{
                    console.log(false);
                }
    }
    return validar; //Retonar el valor para las condiciones anteriores
}

function validarApellido(nombre,paterno,materno){
    var aux;
    if(nombre === "" && paterno === "" && materno === ""){ //Se checan si los datos no son vacios y si lo son, la variable se hace falsa y no se envian los datos
        console.log("Error apellido");
        aux = false;
    }else if(nombre === "" || paterno === "" || materno === ""){  //Checa que ningun dato quede incompleto
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
    var regex = /^\b[\w\.-]+@(yahoo|outlook|hotmail|live|gmail)+\.(com)\b$/; //Se crea una cadena para identificar que la extension sea la correcta

    if(regex.test(correo)){ //Si cumple con la funcion ofrecida por el regex se hace correcto y se envian los datos
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
function validarLineaCredito(){
    var aux;

    if(lineaCredito === "Elige una opción"){
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
        validado = inCurp.match(re); //Se crea una variable que permite checar letra por letra del campo con el re para verificar si existe o es inventado
                                    //La función checa si es compatible con el regex de cadena
	
    if (!validado){ //Coincide con el formato general?
    	aux =  false;
    }

    //Validar que coincida el dígito verificador
    function digitoVerificador(curp17) {
        var diccionario  = "0123456789ABCDEFGHIJKLMNÑOPQRSTUVWXYZ",
            lngSuma      = 0.0,
            lngDigito    = 0.0;
        for(var i=0; i<17; i++) //Recorre la cadena y verifica que cada letra se encuentre de manera oficial en su posición
            lngSuma = lngSuma + diccionario.indexOf(curp17.charAt(i)) * (18 - i); //Checa caracter por caracter y verifica que sea el mismo tamaño de letra 
        lngDigito = 10 - lngSuma % 10;
        if (lngDigito == 10) return 0; 
        return lngDigito; //Retorna el ultimo digito para checarlo de nuevo y se encuentre correcto
    }
  
    if (validado[2] != digitoVerificador(validado[1])){ //Se verifica el ultimo digito sea diferente para que sea ingresado de manera oficial
    	aux = false;
    }else{ aux = true}
        
    return aux; //Validado
}

function validarRFC(inRfc){
    var aux;
    const reg = /^([a-z]{3,4})(\d{2})(\d{2})(\d{2})([0-9a-z]{3})$/i; //Se crea el regex que verificará que sea escrito de manera oficial

    if(inRfc.match(reg)){ //Si coincide se hace verdadera y los datos son enviados
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
    //Campos de datos personales Derecho Habiente
    document.getElementById('input-nombre').value = "";                                                      
    document.getElementById('input-apellidoPaterno').value = "";
    document.getElementById('input-apellidoMaterno').value = "";
    document.getElementById('input-curp').value = "";
    document.getElementById('input-rfc').value = "";
    document.getElementById('input-nss').value = "";
    document.getElementById('input-estadoCivil').value = "Elige una opción";
    document.getElementById('input-genero').value = "Elige una opción";
    document.getElementById('input-correo').value = "";
    document.getElementById('input-fechaNacimiento').value = "";
    document.getElementById('input-lugarNacimiento').value = "";
    document.getElementById('input-credito').value = "Elige una opción";

    //Campos laborales Derecho Habiente
    document.getElementById('input-dependencia').value = "";
    document.getElementById('input-organizacion').value = "";
    document.getElementById('input-sueldoBase').value = "";
    document.getElementById('input-bimestres').value = "";
    document.getElementById('input-nombramiento').value = "Elige una opción";
    document.getElementById('input-entidad-laboral').value = "Elige una opción";

    //Campos del domicilio Derecho Habiente
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

    //Campos del Crédito solicitante
    document.getElementById("input-credito-vivienda").value = "Elige una opción";
    document.getElementById("input-credito-tipo").value = "Elige una opción";
    document.getElementById("input-credito-entidad").value = "Elige una opción"; 

    //Campos de la Vivienda
    document.getElementById('input-vivienda').value = "Elige una opción";
    document.getElementById('input-entidad-vivienda').value = "Elige una opción";
    document.getElementById("input-vivienda-municipio").value = "";
    document.getElementById("input-vivienda-terreno").value = "";
    document.getElementById("input-vivienda-habitable").value = "";
    document.getElementById("input-vivienda-pisos").value = "";
    document.getElementById("input-vivienda-cochera").value = "Elige una opción"; 
    document.getElementById("input-vivienda-alberca").value = "Elige una opción";
    document.getElementById('input-caracteristicas').value = "";

    //Campos datos personales del Conyuge
    document.getElementById('input-nombre-conyuge').value = "";
    document.getElementById('input-ap-paterno').value = "";
    document.getElementById('input-ap-materno').value = "";
    document.getElementById('input-curp-conyuge').value = "";
    document.getElementById('input-rfc-conyuge').value = "";
    document.getElementById('input-nss-conyuge').value = "";
    document.getElementById('input-genero-conyuge').value = "Elige una opción";
    document.getElementById('input-infonavit').value = "Elige una opción";
    document.getElementById('input-correo-conyuge').value = "";
    document.getElementById('input-fechaNacimiento-conyuge').value = "";
    document.getElementById('input-lugarNacimiento-conyuge').value = "";

    
    document.getElementById('input-dependencia-conyuge').value;
    document.getElementById('input-organizacion-conyuge').value;
    document.getElementById('input-sueldo-conyuge').value;
    document.getElementById('input-nombramiento-conyuge').value;
    document.getElementById('input-bimestres-conyuge').value;

    document.getElementById("input-credencial-pdf").value;
    document.getElementById("input-curp-pdf").value;
    document.getElementById("input-pago-pdf").value;
    document.getElementById("input-comprobante-pdf").value;
    document.getElementById("input-rfc-pdf").value;
    document.getElementById("input-acta-pdf").value;
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
/* ========== Funcion principal para el ingreso de datos ========== */
/*var enviarBTN = document.getElementById("btn-enviar-sb");
enviarBTN.addEventListener("submit",function(event){
    event.preventDefault();
    enviar();
})*/

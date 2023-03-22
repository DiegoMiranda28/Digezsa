/* ========== Objetos de datos personales DERECHO HABIENTE ========== */
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
}

function DatosLaborales(dependencia,organizacion,sueldoBase){
    this.dependencia = dependencia;
    this.organizacion = organizacion;
    this.sueldoBase = sueldoBase;
    //this.nombramiento = nombramiento; pendiente - parametro
    this.numeroBimestres = 0;
}

function DatosDomicilio(calle,colonia,codigoPostal,municipio,entidadFederativa,numeroIntegrantes,telefonoParticular,celular){
    this.calle = calle;
    this.colonia = colonia;
    this.codigoPostal = codigoPostal;
    this.municipio = municipio;
    this.entidadFederativa = entidadFederativa;
    this.numeroIntegrantes = numeroIntegrantes;
    this.telefonoParticular = telefonoParticular;
    this.celular = celular;
}

function DatosVivienda(entidadFederativa,caracteristicas){
    //this.adquisicionVivienda = adquisicion;
    this.entidadFederativa = entidadFederativa;
    this.caracteristicas = caracteristicas;
}

function ObjetoDerechoHabiente(objetoPersona,objetoLaboral,objetoDomicilio,objetoVivienda){
    this.objetoPersona = objetoPersona;
    this.objetoLaboral = objetoLaboral;
    this.objetoDomicilio = objetoDomicilio;
    this.objetoVivienda = objetoVivienda;
}


/* ========== Variables y botones ========== */
var index = 1;
let btn_pre_envio = document.getElementById('input-restriccion');

/* ========== Variable de los campos ========== */
let nombre,apellidoPaterno,apellidoMaterno,curp,rfc,numeroSeguro,correo,estadoCivil,genero;
let dependencia,organizacio,sueldoBase;
let calle,colonia,codigoPostal,municipio,entidadFederativa,numeroIntegrantes,telefonoParticular,celular;

/* ========== Arreglo que guardara los objetos ========== */
var derechoHabientes = [];

/* ========== Funcion que extrae el valor de todos los datos ========== */
function valorDatos(){
    nombre = document.getElementById('input-nombre').value;
    apellidoPaterno = document.getElementById('input-apellidoPaterno').value;
    apellidoMaterno = document.getElementById('input-apellidoMaterno').value;
    curp = document.getElementById('input-curp').value.toUpperCase();
    rfc = document.getElementById('input-rfc').value.toUpperCase();
    numeroSeguro = document.getElementById('input-nss').value.toUpperCase();
    correo = document.getElementById('input-correo').value;
    estadoCivil = () => {
        let selectEstado = document.getElementById('input-estadoCivil').value;
        return selectEstado;
    }
    genero = () => {
        let selectGenero = document.getElementById('input-genero').value;
        return selectGenero;
    }
    
    dependencia = document.getElementById('input-dependencia').value;
    organizacionSindical = document.getElementById('input-organizacion').value;
    sueldoBase = document.getElementById('input-sueldoBase').value;

    calle = document.getElementById('input-calle').value;
    colonia = document.getElementById('input-colonia').value;
    codigoPostal = document.getElementById('input-codigoPostal').value;
    municipio = document.getElementById('input-municipio').value;
    entidadFederativa = document.getElementById('input-entidadFederativa').value;
    numeroIntegrantes = document.getElementById('input-integrantes').value;
    telefonoParticular = document.getElementById('input-telefono').value;
    celular = document.getElementById('input-celular').value;

    entidadVivienda = document.getElementById('input-entidadVivienda').value;
    caracteristicasVivienda = document.getElementById('input-caracteristicas').value;
}

function enviar(){
    valorDatos();

    //if(btn_pre_envio.checked){
        if(verificarDatos()){
        console.log("Formulario enviado");
        datos_personales = new DatosPersonales(nombre,apellidoPaterno,apellidoMaterno,curp,rfc,numeroSeguro,estadoCivil(),genero(),correo);
        datos_laborales = new DatosLaborales(dependencia,organizacionSindical,sueldoBase);
        datos_domicilio = new DatosDomicilio(calle,colonia,codigoPostal,municipio,entidadFederativa,numeroIntegrantes,telefonoParticular,celular);
        datos_vivienda = new DatosVivienda(entidadVivienda,caracteristicasVivienda);

        objetoPersonaInformacion = new ObjetoDerechoHabiente(datos_personales,datos_laborales,datos_domicilio,datos_vivienda);
        derechoHabientes.push(objetoPersonaInformacion);
        index++;
        limpiarDatosPersonales();
        }else{
            console.log("ERROR")
        }
    //}else{
      //  console.log("ERROR")
    //}

    console.log("object",derechoHabientes);
}


/* ========== Funciones para verificar los datos de la persona ========== */
function verificarDatos(){
    var validar;

    if(nombre === "" && apellidoPaterno === "" && apellidoPaterno === "" && curp === "" && rfc === "" && correo === ""){
        validar = false;
        console.log("Any dato vacio");
    }else{validar = true;}

    if(nombre === ""){
        validar = false;
    }else{
        if(!validarApellido()) validar = false;
        if(!validarCurpRfc()) validar = false;
        //if(!validarCorreo()) validar = false;
    }

    return validar;
}

function validarApellido(){
    var aux;
    if(apellidoPaterno === "" && apellidoMaterno === ""){
        console.log("Error apellido");
        aux = false;
    }else if(apellidoPaterno === "" || apellidoMaterno === ""){
        console.log("Error apellido");
        aux = false;
    }else{
        aux = true;
    }
    return aux;
}

function validarCurpRfc(){
    var aux;
    if(curp === "" && rfc === ""){
        console.log("ERROR Curp | RFC");
        aux = false;
    }else if(curp === "" || rfc === ""){
        console.log("ERROR Curp | RFC")
    }else{aux = true;}

    return aux;
}

function validarCorreo(){
    var aux;
    var regex = /^\b[\w\.-]+@(yahoo|outlook|hotmail|live|gmail)+\.(com)\b$/;

    if(regex.test(correo)){
        aux = true;
    }else if(correo === ""){
        aux = false;
        console.log("ERROR Correo");
    }else{
        console.log("ERROR Correo");
        aux = false;
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
    document.getElementById('input-correo').value = "";

    document.getElementById('input-dependencia').value = "";
    document.getElementById('input-organizacion').value = "";
    document.getElementById('input-sueldoBase').value = "";

    document.getElementById('input-calle').value = "";
    document.getElementById('input-colonia').value = "";
    document.getElementById('input-codigoPostal').value = "";
    document.getElementById('input-municipio').value = "";
    document.getElementById('input-entidadFederativa').value = "";
    document.getElementById('input-integrantes').value = "";
    document.getElementById('input-telefono').value = "";
    document.getElementById('input-celular').value = "";

    document.getElementById('input-entidadVivienda').value = "";
    document.getElementById('input-caracteristicas').value = "";
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
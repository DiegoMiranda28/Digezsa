function objetoPersona(nombre,apellidoPaterno,apellidoMaterno,curp,rfc,nss,correo){
    this.clave = `DH${index}`;
    this.nombre = nombre;
    this.apellidoPaterno = apellidoPaterno;
    this.apellidoMaterno = apellidoMaterno;
    this.curp = curp;
    this.rfc = rfc;
    this.nss = nss;
    //this.estadoCivil = estadoCivil;
    //this.genero = genero; pendiente - parametro
    this.correo = correo;
}

function objetoPersonaLaboral(dependencia,sueldoBase){
    this.dependencia = dependencia;
    this.sueldoBase = sueldoBase;
    //this.nombramiento = nombramiento; pendiente - parametro
}

function ObjetoDerechoHabiente(objetoPersona,objetoLaboral){
    this.objetoPersona = objetoPersona;
    this.objetoLaboral = objetoLaboral;
}



/* ========== Index ascedente para numero de solicitud ========== */
var index = 1;

/* ========== Variable de los campos ========== */
let nombre,apellidoPaterno,apellidoMaterno,curp,rfc,numeroSeguro,correo;

/* ========== Arreglo que guardara los objetos ========== */
var derechoHabientes = [];

function enviar(){
    nombre = document.getElementById('input-nombre').value;
    apellidoPaterno = document.getElementById('input-apellidoPaterno').value;
    apellidoMaterno = document.getElementById('input-apellidoMaterno').value;
    curp = document.getElementById('input-curp').value.toUpperCase();
    rfc = document.getElementById('input-rfc').value.toUpperCase();
    numeroSeguro = document.getElementById('input-nss').value.toUpperCase();
    correo = document.getElementById('input-correo').value;
    
    console.log("Formulario enviado");

    personaObjeto = new objetoPersona(nombre,apellidoPaterno,apellidoMaterno,curp,rfc,numeroSeguro,correo);
    laboralObjeto = new objetoPersonaLaboral("Maestro",124000);

    objetoPersonaInformacion = new ObjetoDerechoHabiente(personaObjeto,laboralObjeto);
    derechoHabientes.push(objetoPersonaInformacion);
    //derechoHabiente.push(personaObjeto);
    index++;
    
    
    limpiarDatosPersonales();

    console.log("object",derechoHabientes);
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
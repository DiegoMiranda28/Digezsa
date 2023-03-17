/* BOTONES PARA CERRAR EL MODAL E INGRESAR AL REGISTRO */
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

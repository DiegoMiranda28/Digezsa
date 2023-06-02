<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/output.css" rel="stylesheet">
    <link href="../css/design.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/DIGESZA.png">
    <title>Inscripción - Digesza</title>
</head>

<body>

                                    <!--    Menú principal PENDIENTE EN DIMENSION LAPTOP  -->
<header class="w-full">
        <nav class="px-2 bg-blue-900 flex">
            <div class="container flex flex-wrap items-center justify-between mx-auto ctn-tablet">
            
                <a href="../index.html" class="xl:ml-4 lg:ml-4 flex items-center hover:bg-slate-400 rounded"> 
                    <img src="../img/DIGESZA.png" class="mr-3 sm:h-12"/>
                    <span class="titulo self-center text-xl font-bold whitespace-nowrap dark:text-white 
                    hover:text-white hover:font-bold md:text-xl lg:text-xl">Digesza S.A. de C.V.</span>
                </a>

                <!--    Lista de menu 
             C:\Users\diego\OneDrive\Escritorio\Digezsa\Digezsa_develop\src\pages\inscripcionCredito.php -->
                <div class="hidden w-full md:block md:w-auto ctn-menu-tablet md:ml-9">
                    <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-base font-medium 
                    md:border-0 md:bg-white md:pr-8
                    xl:pr-8 xl:space-x-12 xl:text-base 
                     dark:bg-blue-900 md:dark:bg-blue-800">   
                        <li>
                            <a href="../index.html" class="block py-2 pl-3 pr-4 md:bg-transparent md:text-blue-700
                            md:p-0 md:dark:text-white dark:bg-blue-600 md:dark:bg-transparent xl:ml-3
                            hover:bg-slate-100 hover:text-slate-900 rounded hover:underline decoration-sky-500 font-bold">Inicio
                            </a>
                        </li>
            
                        <li>
                            <a href="inscripcionCredito.php" class="block py-2 pl-3 pr-4 md:bg-transparent md:text-blue-700
                            md:p-0 md:dark:text-white dark:bg-blue-600 md:dark:bg-transparent 
                            hover:bg-slate-100 hover:text-slate-900 rounded underline decoration-sky-500 font-bold">Inscripción de crédito
                            </a>
                        </li>
                    </ul>
            </div>
        </nav>
</header>    

<!--    Modal error  -->
<div class="fixed top-0 left-0 right-0 z-50 p-4 modal hidden" id="modalError">
  <div class="relative w-full h-full max-w-md md:h-auto">
      <div class="relative bg-white rounded-lg shadow dark:bg-blue-700">
          <div class="p-2 text-center">
              <svg fill="none" class="mx-auto mb-2 text-red-600 w-14 h-14 dark:text-red-600" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
              <span class="mb-3 text-lg font-normal dark:text-white bold" id="modal-txt">
                Verifique los datos, puede que tenga datos vacios, algunos datos sean incorrectos
                o algunos datos duplicados. Recuerda que si tienes cónyuge no tiene que llevar el mismo
                RFC que el Derecho Habiente.
              </span> 
              <div>
                <button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 
                focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-base inline-flex items-center
                px-5 py-2.5 text-center mr-5 mt-6" id="btn-err">Ok!</button>
              </div>
          </div>
      </div>
  </div>
</div>

                                    <!--    Modal aviso  -->
<div class="fixed top-0 left-0 right-0 z-50 p-4 modal" id="modal">
  <div class="relative w-full h-full max-w-md md:h-auto">
      <div class="relative bg-white rounded-lg shadow dark:bg-blue-700">
          <div class="p-2 text-center">
              <svg aria-hidden="true" class="mx-auto mb-2 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" 
              stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M10.5 1.875a1.125 1.125 0 012.25 0v8.219c.517.162 1.02.382 1.5.659V3.375a1.125 1.125 0 012.25 0v10.937a4.505 4.505 0 00-3.25 2.373 8.963 8.963 0 014-.935A.75.75 0 0018 15v-2.266a3.368 3.368 0 01.988-2.37 1.125 1.125 0 011.591 1.59 1.118 1.118 0 00-.329.79v3.006h-.005a6 6 0 01-1.752 4.007l-1.736 1.736a6 6 0 01-4.242 1.757H10.5a7.5 7.5 0 01-7.5-7.5V6.375a1.125 1.125 0 012.25 0v5.519c.46-.452.965-.832 1.5-1.141V3.375a1.125 1.125 0 012.25 0v6.526c.495-.1.997-.151 1.5-.151V1.875z" />
              </svg>
              <span class="mb-3 text-lg font-normal dark:text-white bold" id="modal-txt">
                Este formato y/o material adjunto es para uso exclusivo de la(s) persona(s) o entidade(s)
                a la que expresamente se le ha enviado, y puede contener información confidencial o 
                material privilegiado.
              </span> 
              <button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 
              focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-base inline-flex items-center
              px-5 py-2.5 text-center mr-5 mt-6" id="btn-reg-fov">Ok!</button>
          </div>
      </div>
  </div>
</div>

<div class="fixed top-0 left-0 right-0 z-50 p-4 modal hidden" id="modal-error-servidor">
  <div class="relative w-full h-full max-w-md md:h-auto">
      <div class="relative bg-white rounded-lg shadow dark:bg-blue-700">
          <div class="p-2 text-center">
              <svg aria-hidden="true" class="mx-auto mb-2 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" 
              stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M10.5 1.875a1.125 1.125 0 012.25 0v8.219c.517.162 1.02.382 1.5.659V3.375a1.125 1.125 0 012.25 0v10.937a4.505 4.505 0 00-3.25 2.373 8.963 8.963 0 014-.935A.75.75 0 0018 15v-2.266a3.368 3.368 0 01.988-2.37 1.125 1.125 0 011.591 1.59 1.118 1.118 0 00-.329.79v3.006h-.005a6 6 0 01-1.752 4.007l-1.736 1.736a6 6 0 01-4.242 1.757H10.5a7.5 7.5 0 01-7.5-7.5V6.375a1.125 1.125 0 012.25 0v5.519c.46-.452.965-.832 1.5-1.141V3.375a1.125 1.125 0 012.25 0v6.526c.495-.1.997-.151 1.5-.151V1.875z" />
              </svg>
              <span class="mb-3 text-lg font-normal dark:text-white bold" id="modal-txt">
                Tienes algún error en los datos, o puede que tengas campos repetidos, favor de revisarlos.
              </span> 
              <div>
              <button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 
              focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-base inline-flex items-center
              px-5 py-2.5 text-center mr-5 mt-6" id="btn-reg-fov">Ok!</button>
              </div>
          </div>
      </div>
  </div>
</div>

                                    <!--    Modal aviso documentos  -->
<div class="fixed top-10 left-0 right-0 z-50 p-4 modalDoc" id="modalDoc">
    <div class="relative w-full h-full max-w-md md:h-auto">
        <div class="relative bg-slate-50 rounded-lg shadow dark:bg-blue-700">
            <div class="p-2 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" 
                stroke="currentColor" class="w-14 h-14 mx-auto mb-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                </svg>
                <ul class="text-lg mb-3">
                    <li>Identificación oficial por ambos lados al 200% a color.</li>
                    <li>Curp actualizado.</li>
                    <li>Último talón de pago.</li>
                    <li>Comprobante de domicilio no mayor a 3 meses.</li>
                    <li>RFC actualizado.</li>
                    <li>Acta de nacimiento en formato PDF.</li>
                </ul>
                <button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 
                focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-base inline-flex items-center
                px-5 py-2.5 text-center mr-5" id="btn-closed">Ok!</button>
            </div>
        </div>
    </div>
</div>

                                    <!--    Sección de formulario   -17,18,19 2.2 2.3(4UNIDAD)  -->
<section class="bg-blue-500 py-1">
        
        <div class="w-full lg:w-10/12 px-4 mx-auto mt-6">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-400 border-0">         
            
                                        <!--    Caja del titulo  -->
                <div class="rounded-t bg-white mb-0 px-6 py-3">           
                <!--    Titulo del formulario (hijo) -->
                <div class="text-center flex justify-between">
                    <h6 class="text-blueGray-700 text-xl font-bold">
                        Formato para inscripción de crédito 2023
                    </h6>
                    <button class="bg-blue-500 text-white active:bg-teal-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md 
                    outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button" id="btn-aviso">
                        Aviso documentos PDF
                    </button>
                </div>
                </div>
                                        <!--    Caja del formulario  -->
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">

                    <form id="form_digezsa" method="post" enctype="multipart/form-data" >

                        <!-- ==================== DATOS PERSONALES ==================== -->
                        <h6 class="text-gray-700 text-lg mt-1 mb-6 font-bold uppercase">Datos personales del acréditado</h6>
                        <div class="flex flex-wrap">                       
                            <!--    contenedor nombre  -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">Nombre(s)</label>
                                    <input type="text" id="input-nombre" name="nombre" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Nombre..."
                                    oninput="validarCampoNoNumerico(this)">
                                </div>
                            </div>

                            <!--    contenedor apellido paterno  -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">Apellido paterno</label>
                                    <input type="text" id="input-apellidoPaterno" name="apellido_paterno" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Apellido paterno..."
                                    oninput="validarCampoNoNumerico(this)">
                                </div>
                            </div>

                            <!--    contenedor apellido materno  -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">Apellido materno</label>
                                    <input type="text" id="input-apellidoMaterno" name="apellido_materno" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Apellido materno..."
                                    oninput="validarCampoNoNumerico(this)">
                                </div>
                            </div>

                            <!--    contenedor curp  -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-1">CURP</label>
                                    <input type="text" id="input-curp" name="curp" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    minlength="18" maxlength="18" placeholder="CURP..." name="rfc">
                                </div>
                            </div>
                            <!--    contenedor rfc  -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-1" htmlfor="grid-password">RFC</label>
                                    <input type="text" id="input-rfc" name="rfc" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" 
                                    minlength="13" maxlength="13" placeholder="RFC...">
                                </div>
                            </div>
                            <!--    contenedor nss  -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-1" htmlfor="grid-password">NSS</label>
                                    <input type="tel" id="input-nss" name="nss" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" 
                                    minlength="11" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="NSS...">
                                </div>
                            </div>
                            <!--    contenedor estado civil  -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-2" htmlfor="grid-password">Estado civil</label>
                                    <select id="input-estadoCivil" name="estado_civil" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg 
                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 
                                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    onchange="selectEstadoCivil()">
                                        <option selected disabled hidden>Elige una opción</option>    
                                        <option value="Soltera(o)">Soltera(o)</option>
                                        <option value="Casada(o)">Casada(o)</option>
                                        <option value="Jefa(e) de familia">Jefa(e) de familia</option>
                                    </select>
                                </div>
                            </div>
                            <!--    contenedor genero  -->
                            <div class="w-full lg:w-3/12 px-4 mt-[-0.5em] md:w-3/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-2" htmlfor="grid-password">Género</label>
                                    <select id="input-genero" name="genero" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg 
                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 
                                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected disabled hidden>Elige una opción</option>
                                        <option value="MASCULINO">Masculino</option>
                                        <option value="FEMENINO">Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <!--    contenedor correo  -->
                            <div class="w-full lg:w-5/12 px-4 mt-[-0.5em] md:w-5/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-2" htmlfor="grid-password">Correo electrónico</label>
                                    <input type="email" id="input-correo" name="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 lg:mt-[0.1em]" placeholder="Correo...">
                                </div>
                            </div>

                             <!--    contenedor fecha de nacimiento  -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">Fecha de nacimiento</label>
                                    <input type="text" id="input-fechaNacimiento" name="fecha_nacimiento" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="DD-MM-AA"  minlength="10" maxlength="10">
                                </div>
                            </div>

                             <!--    contenedor lugar de nacimiento  -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">Lugar de nacimiento</label>
                                    <input type="text" id="input-lugarNacimiento" name="lugar_nacimiento" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Lugar nacimiento..."
                                    oninput="validarCampoNoNumerico(this)">
                                </div>
                            </div>

                             <!--    contenedor tipo de crédito pendiente en BASE DE DATOS -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-1" htmlfor="grid-password">Linea de crédito</label>
                                <select id="input-credito" name="linea_credito" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg 
                                focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 
                                dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                onchange="selectCredito()">
                                    <option selected disabled hidden>Elige una opción</option>
                                    <option value="INDIVIDUAL">Crédito individual</option>
                                    <option value="CONYUGAL">Crédito conyugal</option>
                                    <option value="MANCOMUNADO">Crédito mancomunado</option>
                                </select>
                            </div>
                            </div>

                        </div>
                        
                        <hr class="mt-6 border-b-1 border-gray-600">

                        <!-- ==================== DATOS LABORALES ==================== -->
                        <h6 class="text-gray-700 text-lg mt-1 mb-6 font-bold uppercase">Datos laborales del acréditado</h6>
                        <div class="flex flex-wrap">
                            <!--    contenedor dependencia  -->
                            <div class="w-full lg:w-6/12 px-4 mt-[-0.5em] md:w-6/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">
                                        Dependencia/entidad afiliada denominación oficial
                                    </label>
                                    <input type="text" id="input-dependencia" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Dependencia..."
                                    oninput="validarCampoNoNumerico(this)">
                                </div>
                            </div>
                            <!--    contenedor organizacion  -->
                            <div class="w-full lg:w-6/12 px-4 mt-[-0.5em] md:w-6/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">
                                        Organización sindical a la que pertenece (en su caso)
                                    </label>
                                    <input type="text" id="input-organizacion" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Organización..."
                                    oninput="validarCampoNoNumerico(this)">
                                </div>
                            </div>
                            <!--    contenedor nombramiento  -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-3/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-1" htmlfor="grid-password">Nombramiento</label>
                                    <select id="input-nombramiento" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg 
                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 
                                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected disabled hidden>Elige una opción</option>
                                        <option value="BASE">Base</option>
                                        <option value="CONFIANZA">Confianza</option>
                                    </select>
                                </div>
                            </div>
                            <!--    contenedor sueldo  -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-6/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-1" htmlfor="grid-password">
                                        Sueldo base de cotización quincenal
                                    </label>
                                    <input type="number" step="0.01" id="input-sueldoBase" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="$ ..."
                                    onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                </div>
                            </div>
                           
                            <!--    contenedor bimestres  -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-5/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-1" htmlfor="grid-password">numero de bimestres cotizados</label>
                                    <input type="number" id="input-bimestres" class="border-0 px-5 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="...."
                                    onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                </div>
                            </div>
                        
                            <!--    contenedor entidad federativa  -->
                            <div class="w-full xl:w-4/12 lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-1" htmlfor="grid-password">Entidad federativa</label>
                                    <select id="input-entidad-laboral" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg 
                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 
                                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    onchange="selectEntidad(this)">
                                        <option selected disabled hidden>Elige una opción</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <hr class="mt-6 border-b-1 border-gray-600">

                        <!-- ==================== DATOS DOMICILIO ==================== -->
                        <h6 class="text-gray-700 text-lg mt-1 mb-6 font-bold uppercase">Domicilio particular</h6>
                        <div class="flex flex-wrap">
                            <!--    contenedor calle  -->
                            <div class="w-full xl:w-4/12 lg:w-6/12 px-4 mt-[-0.5em] md:w-6/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">Calle</label>
                                    <input type="text" id="input-calle" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 xl:mt-[0.1em]" placeholder="Calle...">
                                </div>
                            </div>
                            <!--    contenedor colonia  -->
                            <div class="w-full xl:w-4/12 lg:w-6/12 px-4 mt-[-0.5em] md:w-6/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">Colonia</label>
                                    <input type="text" id="input-colonia" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 xl:mt-[0.1em]" placeholder="Colonia...">
                                </div>
                            </div>
                            <!--    contenedor numero interior y exterior  -->
                            <div class="w-full xl:w-4/12 lg:w-5/12 px-4 mt-[-0.5em] md:w-5/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-1" htmlfor="grid-password">Número</label>
                                    <ul class="items-center w-full text-sm font-medium text-gray-90 border border-gray-200 rounded-lg 
                                    sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white xl:mt-[0.4em] bg-white">   
                                        <li class="w-full border-b border-gray-200 sm:border-b-0 dark:border-gray-600 ">
                                            <div class="flex items-center">
                                                <label class="py-3 ml-1 text-xs font-medium text-gray-900 dark:text-gray-300 w-[4em]">Interior:</label>
                                                <input type="number" id="input-interior" class="border-4 px-1 py-0 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                                text-sm shadow focus:outline-none focus:ring ease-linear transition-all duration-150 mt-[-0.2em] w-[4.5em] ml-2" minlength="5" maxlength="5">
                                            </div>
                                        </li>

                                        <li class="w-full border-b border-gray-200 sm:border-b-0 dark:border-gray-600 ">
                                            <div class="flex items-center">
                                                <label class="py-3 ml-1 text-xs font-medium text-gray-900 dark:text-gray-300 w-[4em]">Exterior:</label>
                                                <input type="number" id="input-exterior" class="border-4 px-1 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                                text-sm shadow focus:outline-none focus:ring ease-linear transition-all duration-150 mt-[-0.2em] w-[4.5em] ml-2" minlength="5" maxlength="5">
                                            </div>
                                        </li> 

                                    </ul>
                                </div>
                            </div>
                            <!--    contenedor codigo postal  -->
                            <div class="w-full xl:w-4/12 lg:w-3/12 px-4 mt-[-0.5em] md:w-3/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-1" htmlfor="grid-password">Código postal</label>
                                    <input type="tel" id="input-codigoPostal" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150  xl:mt-[0.1em]" 
                                    minlength="5" maxlength="5" placeholder=" ..." onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                </div>
                            </div>
                            <!--    contenedor municipio  -->
                            <div class="w-full xl:w-4/12 lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-1" htmlfor="grid-password">Municipio o Delegación</label>
                                    <input type="text" id="input-municipio" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150  xl:mt-[0.1em]" placeholder="Municipio...">
                                </div>
                            </div>
                            <!--    contenedor entidad federativa  -->
                            <div class="w-full xl:w-3/12 lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-1" htmlfor="grid-password">Entidad federativa</label>
                                    <select id="input-entidad" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg 
                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 
                                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    onchange="selectEntidad(this)">
                                        <option selected disabled hidden>Elige una opción</option>
                                    </select>
                                </div>
                            </div>
                            <!--    contenedor numero de telefono  -->
                            <div class="w-full xl:w-3/12 lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-1" htmlfor="grid-password">Teléfono particular </label>
                                    <input type="tel" id="input-telefono" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    w-full text-base shadow focus:outline-none focus:ring ease-linear transition-all duration-150 xl:mt-[0.1em]" 
                                    minlength="10" maxlength="10" placeholder="8331234567 ..." onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                </div>
                            </div>
                            <!--    contenedor numero de celular  -->
                            <div class="w-full xl:w-3/12 lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-1" htmlfor="grid-password">Teléfono celular </label>
                                    <input type="tel" id="input-celular" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    w-full text-base shadow focus:outline-none focus:ring ease-linear transition-all duration-150 xl:mt-[0.1em]" 
                                    minlength="10" maxlength="10" placeholder="8331234567 ..." onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                </div>
                            </div>
                            <!--    contenedor numero de integrantes de familia  -->
                            <div class="w-full xl:w-4/12 lg:w-5/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-1" htmlfor="grid-password">Número de integrantes de familia</label>
                                    <input type="tel" id="input-integrantes" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    w-full text-base shadow focus:outline-none focus:ring ease-linear transition-all duration-150  xl:mt-[0.1em]" 
                                    onkeypress='return event.charCode >= 48 && event.charCode <= 57' oninput="limitarValores(this,11)" placeholder="# ...">
                                </div>
                            </div>
                        </div>
                        <hr class="mt-6 border-b-1 border-gray-600">

                        <!-- ==================== DATOS PERSONALES CONYUGE ==================== -->
                        <h6 class="text-orange-800 text-lg mt-1 mb-6 font-bold uppercase hidden" id="label-conyuge">Datos personales del cónyuge</h6>   
                        <div class="flex-wrap hidden" id="contenedor-conyuge-personal">   
                            <!--    contenedor nombre conyuge  -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">Nombre(s)</label>
                                    <input type="text" id="input-nombre-conyuge" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 " placeholder="Nombre..."
                                    oninput="validarCampoNoNumerico(this)">
                                </div>
                            </div>
                            <!--    contenedor apellido paterno conyuge  -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">Apellido paterno</label>
                                    <input type="text" id="input-ap-paterno" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Apellido paterno..."
                                    oninput="validarCampoNoNumerico(this)">
                                </div>
                            </div>
                            <!--    contenedor apellido materno conyuge  -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">Apellido materno</label>
                                    <input type="text" id="input-ap-materno" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Apellido materno..."
                                    oninput="validarCampoNoNumerico(this)">
                                </div>
                            </div>
                            <!--    contenedor curp conyuge  -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-1" htmlfor="grid-password">CURP</label>
                                    <input type="text" id="input-curp-conyuge" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" 
                                    minlength="18" maxlength="18" placeholder="CURP...">
                                </div>
                            </div>
                            <!--    contenedor rfc conyuge  -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-1" htmlfor="grid-password">RFC</label>
                                    <input type="text" id="input-rfc-conyuge" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    minlength="13" maxlength="13" placeholder="RFC...">
                                </div>
                            </div>
                            <!--    contenedor nss conyuge  -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3 mt-1">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-1" htmlfor="grid-password">NSS</label>
                                    <input type="tel" id="input-nss-conyuge" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    minlength="11" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="NSS...">
                                </div>
                            </div> 
                            <!--    contenedor genero conyuge  -->
                            <div class="w-full lg:w-3/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-1 xl:mt-1" htmlfor="grid-password">Género</label>
                                    <select id="input-genero-conyuge" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 
                                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="" selected disabled hidden>Elige una opción</option>
                                        <option value="MASCULINO">Masculino</option>
                                        <option value="FEMENINO">Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <!--    contenedor cotiza con infonavit  -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-1 xl:mt-1" htmlfor="grid-password">¿Cotiza con Infonavit?</label>
                                    <select id="input-infonavit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 
                                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="" selected disabled hidden>Elige una opción</option>
                                        <option value="SI">Si</option>
                                        <option value="NO">No</option>
                                    </select>
                                </div>
                            </div>

                            <!--    contenedor correo  -->
                            <div class="w-full lg:w-5/12 px-4 mt-[-0.5em] md:w-5/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-1" htmlfor="grid-password">Correo electrónico</label>
                                    <input type="email" id="input-correo-conyuge" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 lg:mt-[0.1em]" placeholder="Correo...">
                                </div>
                            </div>

                             <!--    contenedor fecha de nacimiento  -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">Fecha de nacimiento</label>
                                    <input type="text" id="input-fechaNacimiento-conyuge" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="DD-MM-AA" minlength="10" maxlength="10">
                                </div>
                            </div>

                             <!--    contenedor lugar de nacimiento  -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">Lugar de nacimiento</label>
                                    <input type="text" id="input-lugarNacimiento-conyuge" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Lugar nacimiento...">
                                </div>
                            </div>

                        </div>       
                        <hr class="mt-6 border-b-1 border-gray-600 hidden" id="linea-conyuge">

                        <!-- ==================== DATOS LABORALES CONYUGE ==================== -->
                        <h6 class="text-orange-800 text-lg mt-1 mb-6 font-bold uppercase hidden" id="label-conyuge2">Datos laborales del cónyuge</h6>
                        <div class="flex-wrap none hidden" id="contenedor-laborales-conyuge">
                            <!--    contenedor dependencia conyuge  -->
                            <div class="w-full lg:w-6/12 px-4 mt-[-0.5em] md:w-6/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">
                                        Dependencia o entidad afiliada denominación oficial
                                    </label>
                                    <input type="text" id="input-dependencia-conyuge" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 " placeholder="Dependencia..."
                                    oninput="validarCampoNoNumerico(this)">
                                </div>
                            </div>

                            <!--    contenedor organizacion conyuge  -->
                            <div class="w-full lg:w-6/12 px-4 mt-[-0.5em] md:w-6/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">
                                        Organización sindical a la que pertenece (en su caso)
                                    </label>
                                    <input type="text" id="input-organizacion-conyuge" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 " placeholder="Organización...">
                                </div>
                            </div>

                            <!--    contenedor nombramiento conyuge  -->
                            <div class="w-full lg:w-3/12 px-4 mt-[-0.5em] md:w-3/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-1" htmlfor="grid-password">Nombramiento</label>
                                    <select id="input-nombramiento-conyuge" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg 
                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 
                                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="" selected disabled hidden>Elige una opción</option>
                                        <option value="BASE">Base</option>
                                        <option value="CONFIANZA">Confianza</option>
                                    </select>
                                </div>
                            </div>

                            <!--    contenedor sueldo conyuge  -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-6/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-1" htmlfor="grid-password">
                                        Sueldo base de cotización quincenal
                                    </label>
                                    <input type="tel" step="0.01" id="input-sueldo-conyuge" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" 
                                    onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="$...">
                                </div>
                            </div>

                            <!--    contenedor bimestres conyuge  -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-5/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-1" htmlfor="grid-password">Número de bimestres cotizados</label>
                                    <input type="number" id="input-bimestres-conyuge" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder=" ...">
                                </div>
                            </div>

                            <!--    contenedor entidad federativa  -->
                            <div class="w-full xl:w-3/12 lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-1" htmlfor="grid-password">Entidad federativa</label>
                                    <select id="entidad-laboral-conyuge" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg 
                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 
                                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    onchange="selectEntidad(this)">
                                        <option selected disabled hidden>Elige una opción</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <hr class="mt-6 border-b-1 border-gray-600 hidden" id="linea-conyuge2">

                        <!-- ==================== DOCUMENTOS PDF CONYUGE ==================== -->
                        <div class="justify-between w-full hidden" id="doc-pdf-html">    
                            <h6 class="text-orange-800 text-lg mt-1 mb-6 font-bold uppercase">Adjuntar documentos actualizados cónyuge</h6>
                        </div>

                        <div class="flex-wrap hidden" id="cnt-pdf-cy">
                            <!--    contenedor de la credencial  -->
                            <div class="w-full lg:w-6/12 px-4 mt-[-0.5em] xl:w-6/12 md:w-6/12">
                                <div class="relative w-full mb-3">
                                    <label class="xl:w-6/12 lg:w-6/12 md:w-8/12 block mb-2 text-lg font-medium text-gray-900 dark:text-white w-2/12 sm:w-4/12" for="user_avatar">Identificación oficial</label>
                                    <input id="credencial-conyuge" accept=".pdf" name="INE" class="block w-10/12 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">        
                                </div>
                            </div>

                            <!--    contenedor del curp  -->
                            <div class="w-full lg:w-6/12 px-4 mt-[-0.5em] xl:w-6/12 md:w-6/12">
                                <div class="relative w-full mb-3">
                                    <label class="xl:w-6/12 lg:w-6/12 md:w-6/12 block mb-2 text-lg font-medium text-gray-900 dark:text-white w-2/12 mt-1 sm:w-4/12" for="user_avatar">CURP formato PDF</label>
                                    <input id="curp-conyuge" accept=".pdf" name="CURP" class="block w-10/12 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">        
                                </div>
                            </div>

                            <!--    contenedor de talon de pago  -->
                            <div class="w-full lg:w-6/12 px-4 mt-[-0.5em] xl:w-6/12 md:w-6/12">
                                <div class="relative w-full mb-3">
                                    <label class="xl:w-8/12 lg:w-8/12 md:w-8/12 block mb-2 text-lg font-medium text-gray-900 dark:text-white w-2/12 mt-1 sm:w-4/12" for="user_avatar">Ultimo talón de pago</label>
                                    <input id="talonPago-conyuge" accept=".pdf" name="TALONPAGO" class="block w-10/12 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">        
                                </div>
                            </div>

                            <!--    contenedor de comprobante de domicilio  -->
                            <div class="w-full lg:w-6/12 px-4 mt-[-0.5em] xl:w-6/12 md:w-6/12">
                                <div class="relative w-full mb-3">
                                    <label class="xl:w-8/12 lg:w-8/12 md:w-9/12 block mb-2 text-lg font-medium text-gray-900 dark:text-white w-4/12 mt-1 sm:w-5/12" for="user_avatar">Comprobante de domicilio</label>
                                    <input id="domicilio-conyuge" accept=".pdf" name="DOMICILIO" class="block w-10/12 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">        
                                </div>
                            </div>

                             <!--    contenedor de rfc  -->
                             <div class="w-full lg:w-6/12 px-4 mt-[-0.5em] xl:w-6/12 md:w-6/12">
                                <div class="relative w-full mb-3">
                                    <label class="xl:w-8/12 lg:w-8/12 md:w-9/12 block mb-2 text-lg font-medium text-gray-900 dark:text-white w-4/12 mt-1 sm:w-5/12" for="user_avatar">RFC formato PDF</label>
                                    <input id="input-rfc-conyuge-intento" accept=".pdf" name="RFC" class="block w-10/12 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">        
                                </div>
                            </div>
                            <!--    contenedor de acta de nacimiento  -->
                            <div class="w-full lg:w-6/12 px-4 mt-[-0.5em] xl:w-6/12 md:w-6/12">
                                <div class="relative w-full mb-3">
                                    <label class="xl:w-8/12 lg:w-8/12 md:w-9/12 block mb-2 text-lg font-medium text-gray-900 dark:text-white w-4/12 mt-1 sm:w-5/12" for="user_avatar">Acta de nacimiento</label>
                                    <input id="input-acta-conyuge" accept=".pdf" name="ACTANACIMIENTO" class="block w-10/12 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">        
                                </div>
                            </div>
                            
                        </div>

                        <hr class="mt-6 border-b-1 border-gray-600 hidden" id="linea-doc-conyuge">
                                    
                        <!-- ==================== DATOS DEL CRÉDITO  ==================== -->
                        <h6 class="text-gray-700 text-lg mt-1 mb-6 font-bold uppercase">Datos del crédito solicitado</h6>
                        <div class="flex flex-wrap">               
                            
                            <!--    contenedor adquisicion de vivienda  -->
                            <div class="w-full xl:w-4/12 lg:w-4/12 px-4 mt-[-0.5em] md:w-6/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">Modalidad</label>
                                    <select id="input-credito-vivienda" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg 
                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 
                                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    onchange="selectModalidadVivienda()">
                                        <option selected disabled hidden>Elige una opción</option>
                                        <option value="VIVIENDA NUEVA">Nueva</option>
                                        <option value="VIVIENDA USADA">Usada</option>
                                    </select>
                                </div>
                            </div>
                            
                             <!--    contenedor tipo de crédito  -->
                             <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 " htmlfor="grid-password">Tipo de crédito</label>
                                    <select id="input-credito-tipo" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg 
                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 
                                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    onchange="selectTipoCredito()">
                                        <option selected disabled hidden>Elige una opción</option>    
                                        <option value="ADQUISICION">Adquisición</option>
                                        <option value="CONSTRUCCION">Construcción</option>
                                        <option value="REDENCION DE PASIVOS">Redención de pasivos</option>
                                    </select>
                                </div>
                             </div>
                             
                             <!--    contenedor entidad federativa  -->
                             <div class="w-full xl:w-4/12 lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">Entidad federativa</label>
                                    <select id="input-credito-entidad" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg 
                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 
                                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    onchange="selectE_F_Credito(this)">
                                        <option selected disabled hidden>Elige una opción</option>
                                    </select>
                                </div>
                            </div>

                           
                            

                        </div>
                        
                        <hr class="mt-6 border-b-1 border-gray-600">
                            
                        <!-- ==================== DATOS VIVIENDA ==================== -->
                        <h6 class="text-gray-700 text-lg mt-1 mb-6 font-bold uppercase">Especificaciones de vivienda</h6>
                        <div class="flex flex-wrap">
                            <!--    contenedor adquisicion de vivienda  -->
                            <div class="w-full xl:w-4/12 lg:w-4/12 px-4 mt-[-0.5em] md:w-6/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">Modalidad</label>
                                    <select id="input-vivienda" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg 
                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 
                                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                    onchange="selectViviendaModalidad()">
                                        <option selected disabled hidden>Elige una opción</option>
                                        <option value="VIVIENDA NUEVA">Nueva</option>
                                        <option value="VIVIENDA USADA">Usada</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="w-full xl:w-2/12 lg:w-2/12 px-4 mt-[-0.5em] md:hidden"></div>
                            <!--    contenedor entidad de la vivienda  -->
                            <div class="w-full xl:w-4/12 lg:w-6/12 px-4 mt-[-0.5em] md:w-6/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">
                                        Entidad federativa a ejercer
                                    </label>
                                    <select id="input-entidad-vivienda" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg 
                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 
                                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    onchange="selectE_F_Vivienda(this)">
                                        <option selected disabled hidden>Elige una opción</option>
                                    </select>
                                </div>
                            </div>
                           
                            <!--    contenedor municipio de la vivienda  pendiente-->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-6/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">Municipio</label>
                                    <input type="text" id="input-vivienda-municipio" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 " placeholder="Municipio...">
                                </div>
                            </div>

                            <!--    contenedor terreno mts  -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-6/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">Terreno mts<sup>2</sup></label>
                                    <input type="text" id="input-vivienda-terreno" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 "
                                    onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="...">
                                </div>
                            </div>

                            <!--    contenedor habitable mts  -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-6/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">Habitable mts<sup>2</sup></label>
                                    <input type="text" id="input-vivienda-habitable" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="...">
                                </div>
                            </div>


                            <!--    contenedor pisos   -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-6/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">Pisos</label>
                                    <input type="text" id="input-vivienda-pisos" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                    text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="..." oninput="limitarValores(this,4)">
                                </div>
                            </div>

                            <!--    contenedor cochera  -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-1 xl:mt-1" htmlfor="grid-password">¿Cochera?</label>
                                    <select id="input-vivienda-cochera" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 
                                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="" selected disabled hidden>Elige una opción</option>
                                        <option value="SI">Si</option>
                                        <option value="NO">No</option>
                                    </select>
                                </div>
                            </div>

                            <!--    contenedor alberca  -->
                            <div class="w-full lg:w-4/12 px-4 mt-[-0.5em] md:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-1 xl:mt-1" htmlfor="grid-password">¿Alberca?</label>
                                    <select id="input-vivienda-alberca" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 
                                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="" selected disabled hidden>Elige una opción</option>
                                        <option value="SI">Si</option>
                                        <option value="NO">No</option>
                                    </select>
                                </div>
                            </div>
                           
                            <!--    contenedor caracteristicas de la vivienda  -->
                            <div class="w-full xl:w-8/12 lg:w-12/12 px-4 mt-[-0.5em]">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2 mt-1" htmlfor="grid-password">Especificaciones de vivienda</label>
                                    <textarea rows="4" id="input-caracteristicas" class="block p-2.5 w-full text-base text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                                    focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                                    dark:focus:ring-blue-500 dark:focus:border-blue-500 resize-none" placeholder="Escribe tus especificaciones..."></textarea>
                                </div>
                            </div>

                        </div>
                        <hr class="mt-6 border-b-1 border-gray-600">


                        <!-- ==================== DOCUMENTOS PDF ==================== -->
                        <div class="inline-flex justify-between w-full">    
                            <h6 class="text-gray-700 text-lg mt-1 mb-6 font-bold uppercase">Adjuntar documentos actualizados</h6>
                        </div>

                        <div class="flex flex-wrap">
                            <!--    contenedor de la credencial  -->
                            <div class="w-full lg:w-6/12 px-4 mt-[-0.5em] xl:w-6/12 md:w-6/12">
                                <div class="relative w-full mb-3">
                                    <label class="xl:w-6/12 lg:w-6/12 md:w-8/12 block mb-2 text-lg font-medium text-gray-900 dark:text-white w-2/12 sm:w-4/12" for="user_avatar">Identificación oficial</label>
                                    <input id="input-credencial-pdf" name="INE" accept=".pdf" class="block w-10/12 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">        
                                </div>
                            </div>
                            <!--    contenedor del curp  -->
                            <div class="w-full lg:w-6/12 px-4 mt-[-0.5em] xl:w-6/12 md:w-6/12">
                                <div class="relative w-full mb-3">
                                    <label class="xl:w-6/12 lg:w-6/12 md:w-6/12 block mb-2 text-lg font-medium text-gray-900 dark:text-white w-2/12 mt-1 sm:w-4/12" for="user_avatar">CURP formato PDF</label>
                                    <input id="input-curp-pdf" name="CURP" accept=".pdf" class="block w-10/12 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">        
                                </div>
                            </div>
                            <!--    contenedor de talon de pago  -->
                            <div class="w-full lg:w-6/12 px-4 mt-[-0.5em] xl:w-6/12 md:w-6/12">
                                <div class="relative w-full mb-3">
                                    <label class="xl:w-8/12 lg:w-8/12 md:w-8/12 block mb-2 text-lg font-medium text-gray-900 dark:text-white w-2/12 mt-1 sm:w-4/12" for="user_avatar">Ultimo talón de pago</label>
                                    <input id="input-pago-pdf" name="TALONPAGO" accept=".pdf" class="block w-10/12 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">        
                                </div>
                            </div>
                            <!--    contenedor de comprobante de domicilio  -->
                            <div class="w-full lg:w-6/12 px-4 mt-[-0.5em] xl:w-6/12 md:w-6/12">
                                <div class="relative w-full mb-3">
                                    <label class="xl:w-8/12 lg:w-8/12 md:w-9/12 block mb-2 text-lg font-medium text-gray-900 dark:text-white w-4/12 mt-1 sm:w-5/12" for="user_avatar">Comprobante de domicilio</label>
                                    <input id="input-comprobante-pdf" name="DOMICILIO" accept=".pdf" class="block w-10/12 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">        
                                </div>
                            </div>
                            <!--    contenedor de rfc  -->
                            <div class="w-full lg:w-6/12 px-4 mt-[-0.5em] xl:w-6/12 md:w-6/12">
                                <div class="relative w-full mb-3">
                                    <label class="xl:w-8/12 lg:w-8/12 md:w-9/12 block mb-2 text-lg font-medium text-gray-900 dark:text-white w-4/12 mt-1 sm:w-5/12" for="user_avatar">RFC formato PDF</label>
                                    <input id="input-rfc-pdf" name="RFC" accept=".pdf" class="block w-10/12 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">        
                                </div>
                            </div>
                            <!--    contenedor de acta de nacimiento  -->
                            <div class="w-full lg:w-6/12 px-4 mt-[-0.5em] xl:w-6/12 md:w-6/12">
                                <div class="relative w-full mb-3">
                                    <label class="xl:w-8/12 lg:w-8/12 md:w-9/12 block mb-2 text-lg font-medium text-gray-900 dark:text-white w-4/12 mt-1 sm:w-5/12" for="user_avatar">Acta de nacimiento</label>
                                    <input id="input-acta-pdf" name="ACTANACIMIENTO" accept=".pdf" class="block w-10/12 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">        
                                </div>
                            </div>
                        </div>
                        <hr class="mt-6 border-b-1 border-gray-600">       

                        <!-- ===== BOTONES DE ENVIO Y ACEPTACIÓN ===== -->
                        <div class="flex flex-wrap h-4">

                            <div class="w-full lg:w-2/12 px-4 mt-2">
                                <input type="submit" name="submit" value="Cargar" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 
                                hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 
                                shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 
                                py-2.5 text-center mr-2 mb-2" id="btn-enviar-sb"></input>
                            </div>

                            <div class="w-full lg:w-6/12 px-4 md:-mt-10 md:ml-28 lg:mt-4 lg:ml-3 sm:-mt-10 sm:ml-24">
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" id="input-restriccion" class="sr-only peer" onchange="checado(this)">
                                    <div class="w-11 h-6 bg-red-600 rounded-full peer-focus:ring-4 peer-focus:ring-blue-300
                                    dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full 
                                    peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px]
                                    after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 
                                    after:transition-all dark:border-gray-600 peer-checked:bg-blue-600" id="btn-check" onchange="checado(this)"></div>
                                    <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Se aceptan términos y condiciones</span>
                                </label>
                            </div>
                                                    
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
   
<?php
    #include_once("../connection/pruebaDos.php");
    #Conexion::conexionDB();
    #Conexion::insertarPrueba('Ismael','ismael123456789098','2000-12-12'); Aquí si ingresa datos
   
    #Conexion::conexionDBA();
    #Conexion::insertPersona();
?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/backForms.js"></script>
    
</body>
</html>
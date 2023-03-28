<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/output.css" rel="stylesheet">
    <link href="css/design.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/DIGESZA.png">
    <title>Homepage - Digesza</title>
</head>
<body class="bg-blue-500">

  <?php
      include_once("connection/cxn.php");
      Conexion::conexionDB();
  ?>

                <!--    MENU RESPONSIVE   -->
  <header class="w-full">
    <nav class="px-2 bg-blue-900 flex">
      <div class="container flex flex-wrap items-center justify-between mx-auto ctn-tablet">

        <!--    LOGO Y TITULO   -->
        <a href="index.html" class="xl:ml-4 lg:ml-4 flex items-center hover:bg-slate-400 rounded"> 
            <img src="img/DIGESZA.png" class="mr-3 sm:h-12"/>
            <span class="titulo self-center text-xl font-bold whitespace-nowrap dark:text-white 
            hover:text-white hover:font-bold">Digesza S.A. de C.V.</span>
        </a>

        <!--    Lista de menu   -->
        <div class="hidden w-full md:block md:w-auto ctn-menu-tablet">

          <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium 
          md:border-0 md:bg-white dark:bg-blue-900 md:dark:bg-blue-800 ">   

              <li>
                <a href="index.html" class="block py-2 pl-3 pr-4 md:bg-transparent md:text-blue-700
                md:p-0 md:dark:text-white dark:bg-blue-600 md:dark:bg-transparent underline 
                hover:bg-slate-100 hover:text-slate-900 rounded decoration-sky-500 font-bold">Inicio
                </a>
              </li>

              <li>
                  <a href="pages/inscripcionCredito.html" class="block py-2 pl-3 pr-4 md:bg-transparent md:text-blue-700
                  md:p-0 md:dark:text-white dark:bg-blue-600 md:dark:bg-transparent 
                  hover:bg-slate-100 hover:text-slate-900 rounded hover:underline decoration-sky-500 font-bold">Inscripción de crédito
                  </a>
              </li>

              <li>
                <a href="pages/solicitudCredito.html" class="block py-2 pl-3 pr-4 md:bg-transparent md:text-blue-700
                md:p-0 md:dark:text-white dark:bg-blue-600 md:dark:bg-transparent 
                hover:bg-slate-100 hover:text-slate-900 rounded hover:underline decoration-sky-500 font-bold">Solicitud de crédito
                </a>
              </li>

              <li>
                <a href="pages/servicios.html" class="block py-2 pl-3 pr-4 md:bg-transparent md:text-blue-700
                md:p-0 md:dark:text-white dark:bg-blue-600 md:dark:bg-transparent 
                hover:bg-slate-100 hover:text-slate-900 rounded hover:underline decoration-sky-500 font-bold">Servicios
                </a>
              </li>

          </ul>

        </div>
    </nav>
  </header>

  <div class="flex-auto w-full mt-0.3">

    <div class="flex flex-wrap">
    
        <div class="xl:w-5/12 lg:w-6/12 mt-14 py-2 rounded-lg bg-black ml-3 mr-4">
          <h4 class="text-2xl font-mono mx-2 uppercase text-white">
            Somos una <b>SOFOM</b> mandataria de <b><em>FOVISSSTE</em></b> autorizada
            para la formalización de créditos hipotecarios, con presencia en 5 
            Estados de la República:
          </h4>
        </div>

        <div class="bg-yellow-400 xl:w-6/12 lg:w-6/12">
          imagen de alusión
        </div>

    </div>

  </div>

</body>
</html>
<?php

require 'pruebaCnx.php';

$conexion = new Conexion('LAPTOP-193LCMSG', 'DiegoMirand', 'Diego2812++', 'pruebaDigezsa');

$conexion->conectar();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['input-nombre'];
    $curp = $_POST['input-curp'];
    $conexion->insertarDatos($nombre, $curp);
}

?>
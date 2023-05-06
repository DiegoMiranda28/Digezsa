<?php

$serverName = "LAPTOP-193LCMSG";
$connectionOptions = array ("Database" => "pruebaDigezsa","UID" => "DiegoMirand","PWD" => "Diego2812++");

$conn = sqlsrv_connect($serverName,$connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}


?>
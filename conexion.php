<?php

$host = "localhost";
$basededatos = "pasantia";
$usuariodb = "misa";
$clavedb = "12345";

$tabla_db1 = "propietarios";


error_reporting(0);

$conexion = new mysqlo($host,$usuariodb,$clavedb,$basededatos);

if($conexion->connect_errno) {

echo "nuetro sitio experimenta fallos....";
exit();

}




?>
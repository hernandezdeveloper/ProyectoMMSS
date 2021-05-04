<?php
////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////

$host="localhost";
$usuario="root";
$contraseña="";
$db="depositos";


$conexion= mysql_connect($host, $usuario, $contraseña) or die("Fallo la conexion:(");
?>

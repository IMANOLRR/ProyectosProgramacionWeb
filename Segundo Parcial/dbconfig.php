<?php

$hots = "localhost";
$user = "root";
$pass = "admin";
$db = "visitas_db";

$conexion = new mysqli($hots, $user, $pass, $db);
if ($conexion->connect_errno){
    die("Error de conexion: ". $conexion->connect_error);
}else{
    echo "Conexion extosa";
}
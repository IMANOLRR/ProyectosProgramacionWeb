<?php

$host = "localhost";
$user = "root";
$pass = "admin";
$db = "visitas_db";

$conexion = new mysqli($host, $user, $pass, $db);
if ($conexion->connect_error) {
    die("Error de conexion: " . $conexion->connect_error);
}else{
    echo "Conexion exitosa";
}
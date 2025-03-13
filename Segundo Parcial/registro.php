<!-- Nombre: Imanol Rodriguez
Mat: 2024-0256 -->
<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

$conexion = new mysqli('localhost', 'root', 'admin', 'visitas_db');
if ($conexion->connect_errno){
    die("Error de conexion: ". $conexion->connect_error);
}

$stmt_registro = $conexion->prepare("INSERT INTO visitas (nombre, apellido, telefono, correo)
VALUES(?,?,?,?)");
$stmt_registro-> bind_param("ssss", $nombre, $apellido, $telefono, $correo);

if($stmt_registro->execute()){
    $mesanje = "Visitante registrado con exito";
}else{
    $mesanje = "Error al registrar el visitante" . $conexion-> error;
}


$stmt_registro->close();
$conexion->close();
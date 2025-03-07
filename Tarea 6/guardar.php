<?php
require('Libreria/motor.php');

$nombre = $_POST['nombre'];
$color = $_POST['color'];
$tipo = $_POST['tipo'];
$nivel = $_POST['nivel'];
$foto = $_FILES['foto']['tmp_name'];
$foto_tmp = $_FILES['foto']['tmp_name'];
$nombre_archivo = basename($_FILES['foto']['name']);
$ruta_foto = $nombre_archivo;

$conexion = new mysqli('localhost', 'root', 'admin', 'serie_db');
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}



if (!move_uploaded_file($foto_tmp, $ruta_foto)) {
    echo "Error al subir la foto.";
    exit();
}

$stmt_personaje = $conexion->prepare("INSERT INTO personajes (nombre, color, tipo, nivel, foto, id) VALUES (?, ?, ?, ?, ?, ?)");
$stmt_personaje->bind_param("sssssi", $nombre, $color, $tipo, $nivel, $ruta_foto, $id);
$stmt_personaje->execute();

$conexion->close();

echo "¡Personaje registrado exitosamente con su profesión!";
?>
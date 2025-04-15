<?php
require('Libreria/motor.php');

$nombre = $_POST['nombre'];
$color = $_POST['color'];
$tipo = $_POST['tipo'];
$nivel = $_POST['nivel'];

$foto = $_FILES['foto'];
$nombre_archivo = basename($foto['name']);
$ruta_destino = 'Libreria/fotos/' . $nombre_archivo;

if (move_uploaded_file($foto['tmp_name'], $ruta_destino)) {
    $conexion = new mysqli('localhost', 'root', 'admin', 'serie_db');
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    $stmt_personaje = $conexion->prepare("INSERT INTO personajes (nombre, color, tipo, nivel, foto) VALUES (?, ?, ?, ?, ?)");
    $stmt_personaje->bind_param("sssss", $nombre, $color, $tipo, $nivel, $nombre_archivo);

    if ($stmt_personaje->execute()) {
        $mensaje = "¡Personaje agregado exitosamente!";
    } else {
        $mensaje = "Error al agregar el personaje: " . $conexion->error;
    }

    $stmt_personaje->close();
    $conexion->close();

    header("Location: index.php?mensaje=" . urlencode($mensaje));
    exit();
} else {
    $mensaje = "Error al guardar la foto en el servidor.";
    header("Location: index.php?mensaje=" . urlencode($mensaje));
    exit();
}
?>

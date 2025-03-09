<?php

require 'Libreria/motor.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $color = $_POST['color'];
    $tipo = $_POST['tipo'];
    $nivel = $_POST['nivel'];

    $conexion = new mysqli('localhost', 'root', 'admin', 'serie_db');
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    $foto = $_FILES['foto'];
    $nueva_foto = null;
    if (!empty($foto['tmp_name'])) {
        $nombre_archivo = basename($foto['name']);
        $ruta_destino = 'Libreria/fotos/' . $nombre_archivo;

        if (move_uploaded_file($foto['tmp_name'], $ruta_destino)) {
            $nueva_foto = $nombre_archivo;
        }
    }

    if ($nueva_foto) {
        $consulta = $conexion->prepare("UPDATE personajes SET nombre = ?, color = ?, tipo = ?, nivel = ?, foto = ? WHERE id = ?");
        $consulta->bind_param("sssssi", $nombre, $color, $tipo, $nivel, $nueva_foto, $id);
    } else {
        $consulta = $conexion->prepare("UPDATE personajes SET nombre = ?, color = ?, tipo = ?, nivel = ? WHERE id = ?");
        $consulta->bind_param("ssssi", $nombre, $color, $tipo, $nivel, $id);
    }

    if ($consulta->execute()) {
        $mensaje = "¡Personaje actualizado exitosamente!";
    } else {
        $mensaje = "Error al actualizar el personaje: " . $conexion->error;
    }

    $conexion->close();

     header("Location: index.php?mensaje=" . urlencode($mensaje));
     exit();
}
?>

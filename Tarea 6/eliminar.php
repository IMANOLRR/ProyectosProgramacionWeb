<?php
require 'Libreria/motor.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    $conexion = new mysqli('localhost', 'root', 'admin', 'serie_db');
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    $consulta_foto = $conexion->prepare("SELECT foto FROM personajes WHERE id = ?");
    $consulta_foto->bind_param("i", $id);
    $consulta_foto->execute();
    $resultado_foto = $consulta_foto->get_result();

    if ($resultado_foto->num_rows > 0) {
        $row = $resultado_foto->fetch_assoc();
        $ruta_foto = 'Libreria/fotos/' . $row['foto'];

        if (file_exists($ruta_foto)) {
            unlink($ruta_foto);
        }
    }

    $consulta = $conexion->prepare("DELETE FROM personajes WHERE id = ?");
    $consulta->bind_param("i", $id);

    if ($consulta->execute()) {
        $mensaje = "¡Personaje eliminado exitosamente!";
    } else {
        $mensaje = "Error al eliminar el personaje: " . $conexion->error;
    }

    $conexion->close();
    
    header("Location: index.php?mensaje=" . urlencode($mensaje));
     exit();
}
?>

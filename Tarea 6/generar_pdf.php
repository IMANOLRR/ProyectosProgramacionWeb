<?php
require('Libreria/fpdf/fpdf.php');

// Conexión a la base de datos
$conexion = new mysqli('localhost', 'root', 'admin', 'serie_db');
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Obtener el ID del personaje
$id = intval($_GET['id']);
$consulta = "SELECT nombre, color, tipo, nivel, foto FROM personajes WHERE id = $id";
$resultado = $conexion->query($consulta);

if ($resultado->num_rows > 0) {
    $personaje = $resultado->fetch_assoc();

    // Crear PDF
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);

    // Título
    $pdf->Cell(0, 10, 'Perfil del Personaje', 0, 1, 'C');
    $pdf->Ln(10);

    // Foto
    $foto_path = 'Libreria/fotos/' . $personaje['foto'];
    if (file_exists($foto_path)) {
        $pdf->Image($foto_path, 80, 30, 50, 50); // Centrar imagen
    }
    $pdf->Ln(60);

    // Datos del personaje
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, 'Nombre: ' . $personaje['nombre'], 0, 1);
    $pdf->Cell(0, 10, 'Color Representativo: ' . $personaje['color'], 0, 1);
    $pdf->Cell(0, 10, 'Tipo: ' . $personaje['tipo'], 0, 1);
    $pdf->Cell(0, 10, 'Nivel: ' . $personaje['nivel'], 0, 1);

    // Salida
    $pdf->Output('D', $personaje['nombre'] . '_perfil.pdf');
} else {
    echo "Personaje no encontrado.";
}

$conexion->close();
?>

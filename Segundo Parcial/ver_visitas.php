<?php
$conexion = new mysqli('localhost', 'root', 'admin', 'visitas_db');
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$consulta = "SELECT nombre, apellido, telefono, correo FROM visitas";
$resultado = $conexion->query($consulta);

if ($resultado->num_rows > 0) {
    $resultado = $resultado->fetch_assoc();
} else {
    echo "No hay visitas registradas";
}

$conexion->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visitas registradas</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div>
        <h1 style="text-align: center;">Visitas registradas</h1>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $resultado['nombre']; ?></td>
                    <td><?php echo $resultado['apellido']; ?></td>
                    <td><?php echo $resultado['telefono']; ?></td>
                    <td><?php echo $resultado['correo']; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
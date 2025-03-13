<?php

$conexion = new mysqli('localhost', 'root', 'admin', 'visitas_db');
if ($conexion->connect_errno){
    die("Error de conexion: ". $conexion->connect_error);
}

$consulta = "SELECT nombre, apellido, telefono, correo FROM visitas";

$resultado = $conexion->query($consulta);

if($resultado->num_rows > 0){
    $resultado = $resultado->fetch_assoc();
}else{
    echo "No hay visitas registradas";
}

$conexion->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sistema de gestion de visitas</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>
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
            <?php
                        $conexion = new mysqli('localhost', 'root', 'admin', 'visitas_db');
                        if ($conexion->connect_error) {
                            die("Conexión fallida: " . $conexion->connect_error);
                        }

                        $consulta = "SELECT nombre, apellido, telefono, correo FROM visitas";
                        $resultado = $conexion->query($consulta);

                        if ($resultado->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                echo "<tr>
                                        <td>{$row['nombre']}</td>
                                        <td>{$row['apellido']}</td>
                                        <td>{$row['telefono']}</td>
                                        <td>{$row['correo']}</td>
                                    </tr>";
                            }
                        } 
                        $conexion->close();
                        ?>
            </tbody>
        </table>
        <button> <a href="index.php">Inicio</a></button>
    </body>
</html>
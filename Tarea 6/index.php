<?php
require 'Libreria/plantilla.php';
plantilla::aplicar();
?>

<body>
    <div class="container">
        <h1 class="text-center">Gestion de personajes</h1>
        <div class="row">
            <div class="col-9">
                <h2>Personajes</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Identificación</th>
                            <th>Nombre</th>
                            <th>Color</th>
                            <th>Tipo</th>
                            <th>Nivel</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $conexion = new mysqli('localhost', 'root', 'admin', 'serie_db');
                        if ($conexion->connect_error) {
                            die("Conexión fallida: " . $conexion->connect_error);
                        }

                        $consulta = "SELECT id, nombre, color, tipo, nivel, foto FROM personajes";
                        $resultado = $conexion->query($consulta);

                        if ($resultado->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                
                                echo "<tr>
                                        <td>{$row['id']}</td>
                                        <td>{$row['nombre']}</td>
                                        <td>{$row['color']}</td>
                                        <td>{$row['tipo']}</td>
                                        <td>{$row['nivel']}</td>
                                        <td><img src='fotos/" . $row['foto'] . "' alt='Foto del Participante' width='100'></td>
                                    </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6'>No hay personajes registrados</td></tr>";
                        }

                        $conexion->close();
                        ?>
                    </tbody>

                </table>
            </div>

</body>
</html>
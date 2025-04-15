<?php
require 'Libreria/plantilla.php';
plantilla::aplicar();

$mensaje = isset($_GET['mensaje']) ? $_GET['mensaje'] : '';

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
                                        <td><img src='/Libreria/fotos/{$row['foto']}' alt='Foto del Participante' width='100'></td>
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

        <?php if (!empty($mensaje)): ?>
            <div class="modal fade" id="mensajeModal" tabindex="-1" aria-labelledby="mensajeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mensajeModalLabel">Información</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php echo htmlspecialchars($mensaje); ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Aceptar</button>
                            </div>
                        </div>
                    </div>
                </div>
        <?php endif; ?>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            <script>
                <?php if (!empty($mensaje)): ?>
                var modal = new bootstrap.Modal(document.getElementById('mensajeModal'));
                modal.show();
                <?php endif; ?>
            </script>
        </div>
</body>
</html>
<?php
require 'Libreria/plantilla.php';
plantilla::aplicar();
?>

<body>
<div class="container">
    <div class="col-6">
        <h1>Buscar personaje</h1>
        <form action="" method="get">
            <div class="form-group">
                <label for="buscar_nombre">Nombre del personaje</label>
                <input type="text" name="buscar_nombre" id="buscar_nombre" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
    </div>
</div>

<?php
if (isset($_GET['buscar_nombre']) && !empty($_GET['buscar_nombre'])) {
    $nombre_buscado = $_GET['buscar_nombre'];

    $conexion = new mysqli('localhost', 'root', 'admin', 'serie_db');
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    $consulta = $conexion->prepare("SELECT * FROM personajes WHERE nombre LIKE ?");
    $nombre_like = "%" . $nombre_buscado . "%";
    $consulta->bind_param("s", $nombre_like);
    $consulta->execute();
    $resultado = $consulta->get_result();

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            ?>

            <div class="container">
                <div class="col-6">
                    <h1>Eliminar personaje</h1>
                    <form action="" method="get" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $row['nombre']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="color">Color</label>
                            <input type="text" name="color" id="color" class="form-control" value="<?php echo $row['color']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="tipo">Tipo</label>
                            <input type="text" name="tipo" id="tipo" class="form-control" value="<?php echo $row['tipo']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="nivel">Nivel</label>
                            <input type="number" name="nivel" id="nivel" class="form-control" value="<?php echo $row['nivel']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" name="foto" id="foto" class="form-control">
                            <img src="/Libreria/fotos/<?php echo $row['foto']; ?>" alt="Foto actual" width="100">
                        </div>
                    </form>
                    <form action="eliminar.php" method="post" style="margin-top: 10px;">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>

            <?php
        }
    } else {
        echo "<div class='alert alert-danger'>No se encontraron personajes con ese nombre.</div>";
    }

    $conexion->close();
}
?>


<img src="/Libreria/fotos/kaido.png" alt="Zoro" width="100" height="100">
</body>
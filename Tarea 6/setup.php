<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $host = $_POST['host'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $database = $_POST['database'];

    // Intentar conexión a la base de datos
    $conexion = new mysqli($host, $username, $password);

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Crear la base de datos si no existe
    $sql = "CREATE DATABASE IF NOT EXISTS $database";
    if ($conexion->query($sql) === TRUE) {
        $conexion->select_db($database);

        // Crear la tabla `personajes` si no existe
        $tablaSQL = "CREATE TABLE IF NOT EXISTS personajes (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nombre VARCHAR(100) NOT NULL,
            color VARCHAR(50) NOT NULL,
            tipo VARCHAR(50) NOT NULL,
            nivel VARCHAR(50) NOT NULL,
            foto VARCHAR(255)
        )";
        if ($conexion->query($tablaSQL) === TRUE) {
            // Guardar la configuración en el archivo `config.php`
            $configContent = "<?php\nreturn [\n    'host' => '$host',\n    'username' => '$username',\n    'password' => '$password',\n    'database' => '$database'\n];\n?>";
            file_put_contents('config.php', $configContent);

            echo "Configuración guardada correctamente. La base de datos y la tabla fueron creadas.";
            echo "<a href='index.php'>Ir a la aplicación</a>";
            exit;
        } else {
            echo "Error al crear la tabla: " . $conexion->error;
        }
    } else {
        echo "Error al crear la base de datos: " . $conexion->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Asistente de Configuración</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Asistente de Configuración</h1>
        <form method="POST" class="border p-4 bg-light rounded">
            <div class="mb-3">
                <label for="host" class="form-label">Servidor</label>
                <input type="text" class="form-control" id="host" name="host" required>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="database" class="form-label">Nombre de la Base de Datos</label>
                <input type="text" class="form-control" id="database" name="database" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Configuración</button>
        </form>
    </div>
</body>
</html>

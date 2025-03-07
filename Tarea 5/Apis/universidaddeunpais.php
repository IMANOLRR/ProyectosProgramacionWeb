<?php
require 'menu.php';
plantilla::aplicar();
?>

<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["pais"])) {
    $pais = htmlspecialchars($_POST["pais"]);
    $url = "http://universities.hipolabs.com/search?country=" . urlencode($pais);

    // Usar cURL para hacer la petición
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($ch);

    if (curl_errno($ch)) {
        $resultado = "Error en la conexión: " . curl_error($ch);
    } else {
        // Decodificar JSON
        $universidades = json_decode($respuesta, true);

        if ($universidades === null) {
            $resultado = "Error decodificando JSON: " . json_last_error_msg();
        } elseif (count($universidades) > 0) {
            $resultado = "<h3>Universidades en <strong>" . htmlspecialchars($pais) . "</strong>:</h3><ul>";
            foreach ($universidades as $universidad) {
                $nombre = htmlspecialchars($universidad["name"]);
                $dominio = htmlspecialchars($universidad["domains"][0]);
                $web = htmlspecialchars($universidad["web_pages"][0]);

                $resultado .= "<li>
                    <strong>Nombre:</strong> $nombre<br>
                    <strong>Dominio:</strong> $dominio<br>
                    <strong>Website:</strong> <a href='$web' target='_blank'>$web</a>
                </li><hr>";
            }
            $resultado .= "</ul>";
        } else {
            $resultado = "No se encontraron universidades para el país especificado.";
        }
    }
    curl_close($ch);
}
?>

<div class="container mt-4">
    <h1 class="text-center">Universidades por País</h1>

    <form method="POST" action="">
        <h2>Buscar universidades de un país</h2>
        <label for="pais">Introduce el nombre de un país en inglés:</label>
        <input type="text" id="pais" name="pais" class="form-control" required>
        <button type="submit" class="btn btn-primary mt-2">Buscar universidades</button>
    </form>

    <?php if (!empty($resultado)): ?>
        <div class="mt-4 p-3" style="background-color: white; border-radius: 10px;">
            <?php echo $resultado; ?>
        </div>
    <?php endif; ?>

    <a href="../index.php" class="btn btn-secondary mt-3">Volver al Inicio</a>
</div>

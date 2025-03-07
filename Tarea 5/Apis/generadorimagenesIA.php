<?php
require 'menu.php';
plantilla::aplicar();
?>

<?php
$resultado = "";
$imagenURL = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["palabra_clave"])) {
    $palabraClave = htmlspecialchars($_POST["palabra_clave"]);
    $apiKey = "wKg8K_5o_gAqUxvhhCV28idOYI-tr4XyqU1zB4cci8A"; // Reemplaza con tu API Key de Unsplash
    $url = "https://api.unsplash.com/search/photos?query=" . urlencode($palabraClave) . "&client_id=" . $apiKey;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($ch);

    if (curl_errno($ch)) {
        $resultado = "Error en la conexión: " . curl_error($ch);
    } else {
        $datos = json_decode($respuesta, true);

        if ($datos && isset($datos["results"]) && count($datos["results"]) > 0) {

            $imagenURL = $datos["results"][0]["urls"]["regular"];
            $resultado = "Imagen generada para: '$palabraClave'.";
        } else {
            $resultado = "No se encontraron imágenes para '$palabraClave'.";
        }
    }
    curl_close($ch);
}
?>

</body> 

    <div class="container mt-4">
        <!-- Aquí va el contenido de cada página -->
        <h1 class="text-center">Generador de imagenes con IA</h1>
        <h2>Genera imagenes con IA</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="palabra_clave" class="form-label">Introduce una palabra clave:</label>
                <input type="text" id="palabra_clave" name="palabra_clave" class="form-control" placeholder="Ejemplo: Paisaje, Gato, Montaña" required>
            </div>
            <button type="submit" class="btn btn-primary">Generar Imagen</button>
        </form>

        <?php if ($resultado): ?>
            <div class="mt-4">
                <h3><?php echo $resultado; ?></h3>
                <?php if ($imagenURL): ?>
                    <div class="text-center mt-3">
                        <img src="<?php echo $imagenURL; ?>" alt="Imagen generada" class="img-fluid rounded">
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>

</body>

</html>
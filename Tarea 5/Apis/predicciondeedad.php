<?php
require 'menu.php';
plantilla::aplicar();
?>

<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["nombre"])) {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $url = "https://api.agify.io/?name=" . urlencode($nombre);

    // Usar cURL para hacer la petición
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($ch);

    if (curl_errno($ch)) {
        $resultado = "Error en la conexión: " . curl_error($ch);
    } else {
        // Decodificar JSON
        $datos = json_decode($respuesta, true);

        if ($datos === null) {
            $resultado = "Error decodificando JSON: " . json_last_error_msg();
        } elseif (isset($datos["age"])) {
            $edad = $datos["age"];

            // Clasificar por rango de edad
            if ($edad < 18) {
                $categoria = "👶 Joven";
                $imagen = "/Css/joven.jpg";
            } elseif ($edad <= 60) {
                $categoria = "🧑 Adulto";
                $imagen = "/Css.png/"; 
            } else {
                $categoria = "👴 Anciano";
                $imagen = "/Css/anciano.png";
            }

            $resultado = "<strong>Edad estimada:</strong> {$edad} años<br><strong>Categoría:</strong> {$categoria}";
            $resultado .= "<div><img src='{$imagen}' alt='{$categoria}' style='width: 100px; margin-top: 10px;'></div>";
        } else {
            $resultado = "Error al procesar la respuesta de la API.";
        }
    }
    curl_close($ch);
}
?>

<div class="container mt-4">
    <h1 class="text-center">Predicción de Edad</h1>

    <form method="POST" action="">
        <h2>Predecir edad</h2>
        <label for="nombre">Introduce un nombre:</label>
        <input type="text" id="nombre" name="nombre" class="form-control" required>
        <button type="submit" class="btn btn-primary mt-2">Predecir edad</button>
    </form>

    <?php if (!empty($resultado)): ?>
        <div class="mt-4 p-3" style="background-color: white; border-radius: 10px;">
            <?php echo $resultado; ?>
        </div>
    <?php endif; ?>

    <a href="../index.php" class="btn btn-secondary mt-3">Volver al Inicio</a>
</div>

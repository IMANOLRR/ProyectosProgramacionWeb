<?php
require 'menu.php';
plantilla::aplicar();
?>

<?php
$temperatura°C = "";
$temperatura = "";
$condicion = "";
$descripcion = "";
$icono = "";
$estilo = "";
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["ciudad"])) {
    $ciudad = htmlspecialchars($_POST["ciudad"], ENT_QUOTES, 'UTF-8');
    $apiKey = "65a86efdedc4edc28a6e0837c0fabee7"; // Tu API key
    $url = "https://api.openweathermap.org/data/2.5/weather?q=" . rawurlencode($ciudad) . ",DO&appid=" . $apiKey . "&units=metric";

    // Petición con cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($ch);

    if ($respuesta) {
        $datos = json_decode($respuesta, true);

        if (isset($datos["main"]["temp"]) && isset($datos["weather"][0]["main"])) {
            $temperatura = $datos["main"]["temp"];
            $condicion = $datos["weather"][0]["main"]; // Condición climática (Clear, Rain, Clouds, etc.)
            $descripcion = $datos["weather"][0]["description"]; // Descripción más detallada
            $icono = ""; // Variable para el ícono
            $estilo = ""; // Variable para el estilo

            // Asignar íconos y estilos según la condición
            switch (strtolower($condicion)) {
                case "clear":
                    $icono = "☀️";
                    $estilo = "background-color: #FFD700; color: #000;";
                    break;
                case "rain":
                    $icono = "🌧️";
                    $estilo = "background-color: #87CEEB; color: #fff;";
                    break;
                case "clouds":
                    $icono = "☁️";
                    $estilo = "background-color: #B0C4DE; color: #000;";
                    break;
                default:
                    $icono = "🌈"; // Por si la condición no es reconocida
                    $estilo = "background-color: #ADD8E6; color: #000;";
                    break;
            }

            // Mensaje de resultado
            $resultado = "
                <div style='padding: 20px; border-radius: 10px; $estilo'>
                    <h2>$icono Clima en $ciudad</h2>
                    <p><strong>Temperatura:</strong> $temperatura°C</p>
                    <p><strong>Condiciones:</strong> $descripcion</p>
                </div>
            ";
        } else {
            $resultado = "No se encontró información para la ciudad.";
        }
    } else {
        $resultado = "Error al conectar con la API.";
    }
    curl_close($ch);
}
?>

<div class="container mt-4">
    <h1 class="text-center">Clima en República Dominicana</h1>

    <form method="POST" action="">
        <h2>Buscar clima</h2>
        <label for="ciudad">Introduce el nombre de una ciudad:</label>
        <input type="text" id="ciudad" name="ciudad" class="form-control" required>
        <button type="submit" class="btn btn-primary mt-2">Buscar clima</button>
    </form>

    <?php if (!empty($resultado)): ?>
        <div class="mt-4">
            <?php echo $resultado; ?>
        </div>
    <?php endif; ?>

    <a href="../index.php" class="btn btn-secondary mt-3">Volver al Inicio</a>
</div>

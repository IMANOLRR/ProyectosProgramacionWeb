<?php
require 'menu.php';
plantilla::aplicar();
?>

<?php
// Procesar el formulario y llamar a la API si se ha enviado
$resultado = "";
$color = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["nombre"])) {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $url = "https://api.genderize.io/?name=" . urlencode($nombre);

    // Usar cURL para hacer la petición
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($ch);

    if (curl_errno($ch)) {
        $resultado = "Error en la conexión: " . curl_error($ch);
    } else {
        $datos = json_decode($respuesta, true);

        // Verificar si la API respondió correctamente
        if ($datos && isset($datos["gender"])) {
            $genero = $datos["gender"];
            $probabilidad = $datos["probability"] * 100;

            if ($genero == "male") {
                $color = "blue";
                $resultado = "Género: Masculino 💙 (Confianza: $probabilidad%)";
            } elseif ($genero == "female") {
                $color = "pink";
                $resultado = "Género: Femenino 💖 (Confianza: $probabilidad%)";
            } else {
                $resultado = "No se pudo determinar el género.";
            }
        } else {
            $resultado = "Error al procesar la respuesta de la API.";
        }
    }
    curl_close($ch);
}
?>

</body> 

<div class="container mt-4">
        <!-- Aquí va el contenido de cada página -->
        <h1 class="text-center">Prediccion de género</h1>

            <body>
                    <div class="container mt-5">
                        <h2>Predicir Género</h2>
                        <form method="POST" action="">
                            <label for="nombre">Introduce un nombre:</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" required>
                            <button type="submit" class="btn btn-primary mt-2">Predecir Género</button>
                        </form>

                        <?php if ($resultado): ?>
                            <div class="mt-4 p-3" style="background-color: <?php echo $color; ?>; color: white; border-radius: 10px;">
                                <?php echo $resultado; ?>
                            </div>
                        <?php endif; ?>

                        <a href="../index.php" class="btn btn-secondary mt-3">Volver al Inicio</a>
                    </div>
            </body>
    </div>

</body>

</html>

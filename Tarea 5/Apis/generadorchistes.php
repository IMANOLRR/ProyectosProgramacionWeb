<?php
require 'menu.php';
plantilla::aplicar();
?>

<?php
// Inicializar variables
$chiste = "";
$setup = "";
$punchline = "";

// URL de la API
$url = "https://official-joke-api.appspot.com/random_joke";

// Usar cURL para hacer la petición
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$respuesta = curl_exec($ch);

if (curl_errno($ch)) {
    $chiste = "Error en la conexión: " . curl_error($ch);
} else {
    $datos = json_decode($respuesta, true);

    // Verificar si la API respondió correctamente
    if ($datos && isset($datos["setup"], $datos["punchline"])) {
        $setup = htmlspecialchars($datos["setup"]);
        $punchline = htmlspecialchars($datos["punchline"]);
        $chiste = "$setup<br><strong>$punchline</strong>";
    } else {
        $chiste = "No se pudo obtener un chiste en este momento.";
    }
}
curl_close($ch);
?>

</body> 

    <div class="container mt-4">
        <!-- Aquí va el contenido de cada página -->
        <h1 class="text-center">Generador de chistes</h1>
        <h2>Obtener un chiste aleatorio 😂</h2>
        <div class="alert alert-primary mt-4 text-center" role="alert">
            <?php echo $chiste; ?>
        </div>
        <div class="text-center mt-3">
            <a href="" class="btn btn-success">¡Otro chiste!</a>
        </div>
    </div>

</body>

</html>
<?php
require 'menu.php';
plantilla::aplicar();
?>

<?php
$resultado = "";
$pokemonImagen = "";
$experienciaBase = "";
$habilidades = [];

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["nombre"])) {
    $nombrePokemon = htmlspecialchars($_POST["nombre"]);
    $url = "https://pokeapi.co/api/v2/pokemon/" . strtolower(urlencode($nombrePokemon));

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
        if ($datos && isset($datos["name"])) {
            // Extraer datos del Pokémon
            $pokemonImagen = $datos["sprites"]["front_default"] ?? "";
            $experienciaBase = $datos["base_experience"] ?? "N/A";

            // Obtener habilidades
            if (isset($datos["abilities"])) {
                foreach ($datos["abilities"] as $habilidad) {
                    $habilidades[] = $habilidad["ability"]["name"];
                }
            }

            $resultado = "Información obtenida para: " . ucfirst($nombrePokemon);
        } else {
            $resultado = "Pokémon no encontrado. Verifica el nombre ingresado.";
        }
    }
    curl_close($ch);
}// Almacena $resultado, $pokemonImagen, $experienciaBase y $habilidades para mostrarlos en tu HTML.
?>

</body> 

    <div class="container mt-4">
        <!-- Aquí va el contenido de cada página -->
        <h1 class="text-center">Informacion de un Pokémon</h1>
        <form method="POST" action="">
            <h2>Buscar Pokémon</h2>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Pokémon:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ejemplo: Pikachu" required>
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
        <a href="../index.php" class="btn btn-secondary mt-3">Volver al Inicio</a>
        <?php if ($resultado): ?>
            <div class="mt-4">
                <h3><?php echo $resultado; ?></h3>
                <?php if ($pokemonImagen): ?>
                    <img src="<?php echo $pokemonImagen; ?>" alt="Imagen de Pokémon" class="img-fluid">
                <?php endif; ?>
                <?php if ($experienciaBase): ?>
                    <p><strong>Experiencia Base:</strong> <?php echo $experienciaBase; ?></p>
                <?php endif; ?>
                <?php if (!empty($habilidades)): ?>
                    <p><strong>Habilidades:</strong> <?php echo implode(", ", $habilidades); ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
    </div>

</body>

</html>
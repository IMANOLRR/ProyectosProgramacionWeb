<?php
require 'menu.php';
plantilla::aplicar();
?>

<?php
// Procesar el formulario y llamar a la API si se ha enviado
$datosPais = "";
$bandera = "";
$capital = "";
$poblacion = "";
$moneda = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["nombre_pais"])) {
    $nombrePais = htmlspecialchars($_POST["nombre_pais"]);
    $url = "https://restcountries.com/v3.1/name/" . urlencode($nombrePais);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($ch);

    if (curl_errno($ch)) {
        $datosPais = "Error en la conexión: " . curl_error($ch);
    } else {
        $datos = json_decode($respuesta, true);

        if ($datos && isset($datos[0])) {
            $pais = $datos[0];
            $bandera = $pais["flags"]["png"] ?? "No disponible";
            $capital = $pais["capital"][0] ?? "No disponible";
            $poblacion = number_format($pais["population"] ?? 0);
            $moneda = implode(", ", array_keys($pais["currencies"] ?? ["No disponible" => ""])) ?? "No disponible";
            $datosPais = "Información de $nombrePais obtenida con éxito.";
        } else {
            $datosPais = "No se encontró información para '$nombrePais'.";
        }
    }
    curl_close($ch);
}
?>

</body> 

    <div class="container mt-4">
        <!-- Aquí va el contenido de cada página -->
        <h1 class="text-center">Datos de un país</h1>
        <h2>Obtener información de un país 🌍</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="nombre_pais" class="form-label">Introduce el nombre del país:</label>
                <input type="text" id="nombre_pais" name="nombre_pais" class="form-control" placeholder="Ejemplo: Dominican Republic" required>
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>

        <?php if ($datosPais): ?>
            <div class="mt-4">
                <h3><?php echo $datosPais; ?></h3>
                <?php if ($bandera): ?>
                    <div class="text-center">
                        <img src="<?php echo $bandera; ?>" alt="Bandera" class="img-fluid" style="max-width: 200px;">
                    </div>
                <?php endif; ?>
                <p><strong>Capital:</strong> <?php echo $capital; ?></p>
                <p><strong>Población:</strong> <?php echo $poblacion; ?></p>
                <p><strong>Moneda:</strong> <?php echo $moneda; ?></p>
            </div>
        <?php endif; ?>
    </div>

</body>

</html>
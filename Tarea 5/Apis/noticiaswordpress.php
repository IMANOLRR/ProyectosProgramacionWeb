<?php
require 'menu.php';
plantilla::aplicar();
?>

<?php
$resultado = "";
$noticias = [];
$logoSitio = "";
$urlBase = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["pagina"])) {
    $paginaSeleccionada = htmlspecialchars($_POST["pagina"]);

    $urlBase = rtrim($paginaSeleccionada, '/') . "/wp-json/wp/v2/posts?per_page=3";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $urlBase);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($ch);

    if (curl_errno($ch)) {
        $resultado = "Error en la conexión: " . curl_error($ch);
    } else {
        $datos = json_decode($respuesta, true);

        if (is_array($datos)) {
            $noticias = array_map(function ($noticia) {
                return [
                    "titulo" => $noticia["title"]["rendered"],
                    "resumen" => strip_tags($noticia["excerpt"]["rendered"]),
                    "enlace" => $noticia["link"],
                ];
            }, $datos);

            $infoSitio = json_decode(file_get_contents(rtrim($paginaSeleccionada, '/') . "/wp-json"), true);
            if (isset($infoSitio["name"])) {
                $logoSitio = $infoSitio["name"];
            }

            $resultado = "Últimas noticias obtenidas de: $paginaSeleccionada";
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
        <h1 class="text-center">Noticias desde WordPress</h1>
        <h2>Obtener Noticias desde WordPress</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="pagina" class="form-label">Selecciona la página de noticias:</label>
                <select id="pagina" name="pagina" class="form-select" required>
                    <option value="https://example1.com">Página 1</option>
                    <option value="https://example2.com">Página 2</option>
                    <option value="https://example3.com">Página 3</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Obtener Noticias</button>
        </form>

        <?php if ($resultado): ?>
            <div class="mt-4">
                <h3><?php echo $resultado; ?></h3>
                <?php if ($logoSitio): ?>
                    <p><strong>Logo del sitio:</strong> <?php echo $logoSitio; ?></p>
                <?php endif; ?>

                <?php if (!empty($noticias)): ?>
                    <div class="mt-3">
                        <?php foreach ($noticias as $noticia): ?>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $noticia["titulo"]; ?></h5>
                                    <p class="card-text"><?php echo $noticia["resumen"]; ?></p>
                                    <a href="<?php echo $noticia["enlace"]; ?>" target="_blank" class="btn btn-primary">Leer más</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
    </div>

</body>

</html>
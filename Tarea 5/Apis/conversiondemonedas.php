<?php
require 'menu.php';
plantilla::aplicar();
?>

<?php
$resultado = "";
$conversiones = [];
$usdCantidad = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["cantidad"])) {
    $usdCantidad = floatval($_POST["cantidad"]);

    $url = "https://api.exchangerate-api.com/v4/latest/USD";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($ch);

    if (curl_errno($ch)) {
        $resultado = "Error en la conexión: " . curl_error($ch);
    } else {
        $datos = json_decode($respuesta, true);

        if ($datos && isset($datos["rates"])) {
            $tasas = $datos["rates"];

            $monedas = [
                "DOP" => "Pesos Dominicanos 🇩🇴",
                "EUR" => "Euros 🇪🇺",
                "MXN" => "Pesos Mexicanos 🇲🇽",
                "JPY" => "Yen Japonés 🇯🇵"
            ];

            foreach ($monedas as $codigo => $nombre) {
                if (isset($tasas[$codigo])) {
                    $conversiones[] = [
                        "nombre" => $nombre,
                        "codigo" => $codigo,
                        "valor" => round($usdCantidad * $tasas[$codigo], 2)
                    ];
                }
            }

            $resultado = "Conversión realizada correctamente.";
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
        <h1 class="text-center">Conversion de monedas</h1>
        <h2>Convierte de Monedas 💰</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad en USD:</label>
                <input type="number" step="0.01" id="cantidad" name="cantidad" class="form-control" placeholder="Ejemplo: 100" required>
            </div>
            <button type="submit" class="btn btn-primary">Convertir</button>
        </form>

        <?php if ($resultado): ?>
            <div class="mt-4">
                <h3><?php echo $resultado; ?></h3>
                <?php if (!empty($conversiones)): ?>
                    <div class="mt-3">
                        <ul class="list-group">
                            <?php foreach ($conversiones as $conversion): ?>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <?php echo $conversion["nombre"]; ?>
                                    <span><?php echo $conversion["valor"] . " " . $conversion["codigo"]; ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>

</body>

</html>
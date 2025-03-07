

<!DOCTYPE html>
        <html lang = "en">
        <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>Portal Web</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            p {
                color: #333;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 20px;
                position: relative;
                padding: 5px;
                margin: 10px;
            }

            img {
                position: relative;
                padding: 5px;
                margin: 10px;
            }
        </style>
        </head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Portal Web</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="acercade.php">Acerca de</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="apiDropdown" role="button" data-bs-toggle="dropdown">
                            APIs
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Apis\Prediccion de genero\predicciondegenero.php">Prediccion de genero</a></li>
                            <li><a class="dropdown-item" href="Apis\Prediccion de edad\predicciondeedad.php">Prediccion de edad</a></li>
                            <li><a class="dropdown-item" href="Apis\Universidad de un pais\universidaddeunpais.php">Universidad de un pais</a></li>
                            <li><a class="dropdown-item" href="Apis\Clima en RD\climard.php">Clima en RD</a></li>
                            <li><a class="dropdown-item" href="Apis\Informacion de un Pokemon\infopokemon.php">Informaciond de un Pokemon</a></li>
                            <li><a class="dropdown-item" href="Apis\Noticias desde WordPress\noticiaswordpress.php">Noticias desde WordPress</a></li>
                            <li><a class="dropdown-item" href="Apis\Conversion de monedas\conversionmonedas.php">Conversion de monedas</a></li>
                            <li><a class="dropdown-item" href="Apis\Generador de imagenes con IA\generadordeimagenesIA.php">Generador de imagenes con IA</a></li>
                            <li><a class="dropdown-item" href="Apis\Datos de un pais\datospais.php">Datos de un pais</a></li>
                            <li><a class="dropdown-item" href="Apis\Generador de chistes\generadorchistes.php">Prediccion de edad</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        </body> 

    <div class="container mt-4">
        <!-- Aquí va el contenido de cada página -->
        <h1 class="text-center">Bienvenido al Portal Web</h1>
    </div>

    <!-- JS de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <p>Imanol Rodriguez Rodriguez</p>
    <img src="Imgs/foto2x2.jpg" alt="Foto de Imanol Rodriguez Rodriguez" width="400" height="400">


</body>

</html>

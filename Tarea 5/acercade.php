<!DOCTYPE html>
        <html lang = "en">
        <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>Portal Web</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            
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
                    <li class="nav-item"><a class="nav-link" href="/index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="/acercade.php">Acerca de</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="apiDropdown" role="button" data-bs-toggle="dropdown">
                            APIs
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/Apis/predicciondegenero.php">Prediccion de genero</a></li>
                            <li><a class="dropdown-item" href="/Apis/predicciondeedad.php">Prediccion de edad</a></li>
                            <li><a class="dropdown-item" href="/Apis/universidaddeunpais.php">Universidad de un pais</a></li>
                            <li><a class="dropdown-item" href="/Apis/climard.php">Clima en RD</a></li>
                            <li><a class="dropdown-item" href="/Apis/infopokemon.php">Informaciond de un Pokemon</a></li>
                            <li><a class="dropdown-item" href="/Apis/noticiaswordpress.php">Noticias desde WordPress</a></li>
                            <li><a class="dropdown-item" href="/Apis/conversiondemonedas.php">Conversion de monedas</a></li>
                            <li><a class="dropdown-item" href="/Apis/generadorimagenesIA.php">Generador de imagenes con IA</a></li>
                            <li><a class="dropdown-item" href="/Apis/datospais.php">Datos de un pais</a></li>
                            <li><a class="dropdown-item" href="/Apis/generadorchistes.php">Generador de chistes</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        </body> 

    <div class="container mt-4">
        <!-- Aquí va el contenido de cada página -->
        <h1 class="text-center">Acerca de!!!</h1>
        <h2>Framework que utilicé</h2>
        <p>Para este portal web utilicé el Framework de Bootstrap por la sencilla razón de que:
            <ul>
                <li>Es fácil de usar</li>
                <li>Es muy completo</li>
                <li>Es muy personalizable</li>
                <li>Es diferente al que usó el profesor en la explicacion</li>
            </ul>
        </p>
        <p>Para más información sobre Bootstrap, puedes visitar su página oficial: <a href="https://getbootstrap.com/">https://getbootstrap.com/</a></p>
    </div>

    <!-- JS de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
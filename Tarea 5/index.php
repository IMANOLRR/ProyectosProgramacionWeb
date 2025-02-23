<?php
require 'Libreria/motor.php';
plantilla::aplicar();
?>

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
                            <li><a class="dropdown-item" href="apis/genero/index.php">Predicción de Género</a></li>
                            <li><a class="dropdown-item" href="apis/edad/index.php">Predicción de Edad</a></li>
                            <li><a class="dropdown-item" href="apis/universidades/index.php">Universidades por País</a></li>
                            <li><a class="dropdown-item" href="apis/clima/index.php">Clima en RD</a></li>
                            <li><a class="dropdown-item" href="apis/pokemon/index.php">Información de Pokémon</a></li>
                            <li><a class="dropdown-item" href="apis/noticias/index.php">Noticias desde WordPress</a></li>
                            <li><a class="dropdown-item" href="apis/monedas/index.php">Conversión de Monedas</a></li>
                            <li><a class="dropdown-item" href="apis/imagenes/index.php">Generador de Imágenes</a></li>
                            <li><a class="dropdown-item" href="apis/paises/index.php">Datos de un País</a></li>
                            <li><a class="dropdown-item" href="apis/chistes/index.php">Generador de Chistes</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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

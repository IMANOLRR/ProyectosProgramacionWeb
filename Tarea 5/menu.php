<?php 

class plantilla{

    static $instancia = null;
    public static function aplicar(){
        if(self::$instancia == null){
            self::$instancia = new plantilla();
        }       
    }

    public function __construct(){
        ?>
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
        <?php
    }
}
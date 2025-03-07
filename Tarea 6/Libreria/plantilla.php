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
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Gestion de personajes</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <link href="styles.css" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Pirata+One&display=swap" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Pirata+One&display=swap" rel="stylesheet">

            <style>

                @font-face{
                font-family: "Caslon Antique";
                src: url ('Libreria/fonts/CaslonAntique.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
                }

                body{
                    background-color: #FBEAC9;
                }

                .container{
                    margin-top: 20px;
                    h1, h2 {
                        color: #2E2E2E;
                        font-family: "Caslon Antique", serif;
                    }

                    table th{
                        color: #2E2E2E;
                    }
                }

                input[type="text"], 
                input[type="number"], 
                input[type="file"] {	
                    background-color: #8B5A2B !important;
                    color: #FFF;
                    border: 2px solid #D4AF37; 
                    border-radius: 8px; 
                    padding: 10px;
                    font-family: "Pirata One", system-ui;
                    font-size: 16px;
                    margin-bottom: 10px;
                    width: 100%;
                }

                label[for="nombre"],
                label[for="color"],
                label[for="tipo"],
                label[for="nivel"],
                label[for="foto"] {
                    color: #2E2E2E;
                    font-family: "Pirata One", system-ui;
                    font-size: 18px;
                    margin-bottom: 5px;
                    display: block;
                }

                .btn-primary {
                background-color: #003366;
                border-color: #003366;
                color: #FFF;
                font-family: "Pirata One", system-ui;
                font-size: 16px;
                padding: 10px 20px; 
                border-radius: 8px; 
                transition: all 0.3s ease;
                margin-top: 15px;
                }

                .btn-primary:hover {
                    background-color: #00509E;
                    border-color: #00509E;
                    color: #FFF;
                    transform: scale(1.05);
                }

                form {
                    border-radius: 10px;
                    margin: 10px 0;
                    padding: 20px;
                    background-color: #F8F4E3;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                }

                form input[type="text"], 
                form input[type="number"], 
                form input[type="file"] {
                    max-width: 100%; 
                }

                .navbar {
                    background-color: #D4AF37;
                    font-family: "Pirata One", system-ui;
                    font-size: 18px;
                }

                .navbar-brand {
                    color: #00509E;
                    font-size: 24px;
                    font-family: "Caslon Antique", serif;
                }

                .navbar-nav .nav-link {
                    color: #00509E;
                    font-family: "Pirata One", system-ui;
                    font-size: 18px;
                }

                .navbar-nav .nav-link:hover {
                    color: #FFF;
                    background-color: #00509E;
                    border-radius: 8px;
                }

                img {
                position: absolute;
                left: 1010px; /* Ajusta horizontalmente */
                top: 140px; /* Ajusta verticalmente */
                width: 500px;
                height: 550px;
                border-radius: 10px; /* Opcional: Bordes redondeados */
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Opcional: Sombra */
                }


                .image-container {
                display: flex;
                justify-content: flex-end; /* Imagen alineada a la derecha */
                align-items: flex-start; /* Imagen alineada al principio del contenedor */
                padding: 10px; /* Espaciado interno */
                }

                .image-container img {
                    max-width: 500px;
                    max-height: 550px;
                    width: 100%;
                    height: auto;
                    border-radius: 10px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                }

                .table img {
                    position: static;
                    max-width: 100px; /* Limita el ancho */
                    max-height: 100px; /* Limita el alto */
                    width: auto;
                    height: auto;
                    border-radius: 5px; /* Bordes ligeramente redondeados */
                    box-shadow: none; /* Sin sombra para evitar conflictos visuales */
                }

            </style>

            <nav class="navbar navbar-expand-lg" style="background-color: #D4AF37;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/index.php">Gestion de personajes</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="/index.php">Inicio</a></li>
                            <li class="nav-item"><a class="nav-link" href="/agregar_personaje.php">Agregar personaje</a></li>
                            <li class="nav-item"><a class="nav-link" href="/editar_personaje.php">Editar personaje</a></li>
                            <li class="nav-item"><a class="nav-link" href="/eliminar_personaje.php">Eliminar personaje</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        </div>
                </head>
        <?php
    }
}
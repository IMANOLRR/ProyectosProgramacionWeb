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
                body {
                    background-color: #FBEAC9;
                    font-family: "Caslon Antique", serif;
                }

                .container {
                    margin-top: 20px;
                }

                h1, h2 {
                    color: #2E2E2E;
                    font-family: "Caslon Antique", serif;
                }

                table {
                    width: 100%;
                    border-collapse: collapse;
                    margin-top: 20px;
                    background-color: #F8F4E3;
                    border-radius: 10px;
                    overflow: hidden;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                }

                table th, table td {
                    text-align: center;
                    padding: 10px;
                    border: 1px solid #D4AF37;
                }

                table th {
                    background-color: #D4AF37;
                    color: #FFF;
                    font-family: "Pirata One", system-ui;
                    font-size: 18px;
                }

                table tbody tr:nth-child(even) {
                    background-color: #FFF8E1;
                }

                table tbody tr:nth-child(odd) {
                    background-color: #FDF5E6;
                }

                table tbody tr:hover {
                    background-color: #FCE3A1;
                    cursor: pointer;
                }

                .btn {
                    font-family: "Pirata One", system-ui;
                    font-size: 14px;
                    padding: 5px 10px;
                    border-radius: 5px;
                    transition: all 0.3s ease;
                }

                .btn-edit {
                    background-color: #00509E;
                    color: #FFF;
                    border: none;
                }

                .btn-edit:hover {
                    background-color: #003366;
                }

                .btn-delete {
                    background-color: #C70039;
                    color: #FFF;
                    border: none;
                }

                .btn-delete:hover {
                    background-color: #900C3F;
                }

                .popup-message {
                    position: fixed;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    background-color: #FFF;
                    border: 2px solid #D4AF37;
                    border-radius: 10px;
                    padding: 20px;
                    text-align: center;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
                    z-index: 1000;
                    font-family: "Pirata One", system-ui;
                    font-size: 18px;
                }

                .popup-message.success {
                    border-color: #28a745;
                }

                .popup-message.error {
                    border-color: #dc3545;
                }

                .popup-message button {
                    background-color: #00509E;
                    color: #FFF;
                    border: none;
                    padding: 10px 20px;
                    border-radius: 5px;
                    margin-top: 10px;
                    cursor: pointer;
                }

                .popup-message button:hover {
                    background-color: #003366;
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
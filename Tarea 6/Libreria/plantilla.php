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
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/estilos.css">

            <style>
                body{
                    background-color: #FBEAC9;
                }

                
                .container{
                    color: #2E2E2E;
                }
            </style>
        </head>
        <?php
    }
}
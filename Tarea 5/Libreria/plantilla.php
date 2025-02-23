<?php

class plantilla{

    static $instancia = null;
    public static function aplicar(){
        if(self::$instancia == null){
            self::$instancia = new plantilla();
        }       
    }

    public function __construct() {
        ?>
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
        <?php
    }   
}

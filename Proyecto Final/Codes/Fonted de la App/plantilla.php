<?php

class plantilla {
    static $instancia = null;
    public static function aplicar() {
        if (self::$instancia == null) {
            self::$instancia = new plantilla();
        }
    }

    public function __construct()
    {
        ?>
        <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        header {
            background-color: #004080;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }
        nav {
            display: flex;
            justify-content: center;
            gap: 20px;
            background-color: #00264d;
            padding: 10px;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
        }
        nav a:hover {
            background-color: #004080;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        label {
            font-weight: bold;
            margin: 3px;
        }
        input, button {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 10px;
        }
        button {
            background-color: #004080;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #0059b3;
        }
        a {
            color:rgb(255, 255, 255);
            text-decoration: none;
        }
    </style>

        <?php
    }
}

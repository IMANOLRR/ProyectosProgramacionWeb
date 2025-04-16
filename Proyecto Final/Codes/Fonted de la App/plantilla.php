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
            padding: 20px 20px;
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
        
      .menu-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #333;
      padding: 10px 20px;
      color: #fff;
      }

        .menu-logo {
        font-size: 1.5em;
        font-weight: bold;
        }

        .menu-bars {
        cursor: pointer;
        display: block;
        }

        .menu-bars div {
        width: 25px;
        height: 3px;
        background-color: #fff;
        margin: 5px 0;
        transition: 0.3s;
        }

        .menu-items {
        position: absolute;
        top: 60px;
        right: 20px;
        background-color: #333;
        border-radius: 8px;
        display: none;
        flex-direction: column;
        padding: 10px 0;
        z-index: 1000;
        }

        .menu-items a {
        text-decoration: none;
        color: #fff;
        padding: 10px 20px;
        display: block;
        transition: 0.3s;
        }

        .menu-items a:hover {
        background-color: #444;
        }

        .menu-items.active {
        display: flex;
        }
        </style>

        <body>
        <script>
            const links = document.querySelectorAll('nav a');
            const sections = document.querySelectorAll('.container');

            links.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    const targetId = link.getAttribute('href').replace('#', '');
                    sections.forEach(section => {
                        section.style.display = section.id === targetId ? 'block' : 'none';
                    });
                });
            });
        </script>
        </body>
            <?php
        }
    
}
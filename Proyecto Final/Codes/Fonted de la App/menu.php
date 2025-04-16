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
  <div class="menu-container">
    <div class="menu-logo">Capiatal Compass</div>
    <div class="menu-bars" onclick="toggleMenu()">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>

  <div class="menu-items" id="menuItems">
        <a href="/Panel de Usuario/recomendaciones.php">Recomendaciones de Inversiones</a>
        <a href="/Panel de Usuario/analisis.php">Análisis de Mercado</a>
        <a href="/Panel de Usuario/noticias.php">Noticias Financieras</a>
        <a href="/Panel de Usuario/alertas.php">Alertas de Inversiones</a>
        <a href="/Panel de Usuario/historial.php">Historial de Inversiones</a>
        <a href="/Panel de Usuario/perfil.php">Perfil de Usuario</a>
        <a href="/Panel de Usuario/acercade.php">Acerca de</a>
        <a href="/Panel de Usuario/../panel_usuario.php">Panel de Usuario</a>
  </div>

  <script>
    function toggleMenu() {
      const menu = document.getElementById('menuItems');
      menu.classList.toggle('active');
    }
  </script>
</body>
        <?php
    }
}    
<?php
require 'plantilla.php';
plantilla::aplicar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prototipo App de Recomendaciones de Inversiones</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Registrarse</h1>
        <form action="#">Registrarse</form>
        <input type="text" placeholder="Nombre" required>
        <br>
        <input type="text" placeholder="Apellido" required>
        <br>
        <input type="text" placeholder="Usuario" required>
        <br>
        <input type="password" placeholder="Contraseña" required>
        <br>
        <input type="email" placeholder="Correo Electronico" required>
        <br>
        <input type="button" value="Registrarse">
        <p>Ya tienes cuenta? <a href="login.php">Iniciar Sesion aquí</a></p>
        <p><a href="index.php">Volver al Inicio</a></p>
    </header>

</body>
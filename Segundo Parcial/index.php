<!DOCTYPE html>
<html>
<head>
    <title>Sistema de gestion de visitas</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div>
        <button><a href="ver_visitas.php">Ver visitas</a></button>
    </div>

    <div>
        <h1 style="text-align: center;">Sistema de gestion de visitas</h1>
        <h2>Registrarse aquí</h2>
        <form action="registro.php" method="post">
            <label>Nombre:</label>
            <input type="text" name="nombre" required>
            <br>
            <label>Apellido:</label>
            <input type="text" name="apellido" required>
            <br>
            <label>Telefono:</label>
            <input type="text" name="telefono" required>
            <br>
            <label>Correo:</label>
            <input type="email" name="correo" required>
            <br>
            <button type="submit">Registrarse</button>
        </form>
    </div>
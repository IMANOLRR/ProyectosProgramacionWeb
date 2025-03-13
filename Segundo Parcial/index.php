<!-- Nombre: Imanol Rodriguez
Mat: 2024-0256 -->

<!DOCTYPE html>
<html>
    <head>
        <title>Sistema de gestion de visitas</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>
        <h1 style="text-align: center;">Sitema de gestion de visitas</h1>
        <button> <a href="ver_visitas.php">Ver visitas </a></button>
        <form action="registro.php" method="post">
            <label>Nombre</label>
            <input type="text" name="nombre" require>
            <br>
            <label>Apellido</label>
            <input type="text" name="apellido" require>
            <br>
            <label>Telefono</label>
            <input type="text" name="telefono" require>
            <br>
            <label>Correo</label>
            <input type="email" name="correo" require>
            <br>
            <button type="submit">Registrar</button>
        </form>
    </body>
</html>
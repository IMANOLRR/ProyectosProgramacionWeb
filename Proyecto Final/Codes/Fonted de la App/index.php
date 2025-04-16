
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prototipo App de Recomendaciones de Inversiones</title>
    <link rel="stylesheet" href="style.css">

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
            padding: 20px 10px;
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
        img {
            height: 450px;
            margin: 100px auto;
            display: block;
            position: absolute;
            left: 5%;
            background-color: aquamarine;
            padding: 5px;
        }
        p {
            position: fixed;
            left : 35%;
            top: 40%;
            width: 60%;
            font-size: 20px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            margin-top: 60px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Prototipo App de Recomendaciones de Inversiones</h1>
        <nav>
            <a href="login.php">Iniciar Sesion</a>
            <a href="singin.php">Registrarse</a>
            <a href="panel_usuario.php">Panel de Usuario</a>
        </nav>
    </header>
    <img src="Logo/Capital Compass.png" alt="Logo de la App">
    <p>Bienvenido a Capital Compass, una plataforma de recomendacion de activos para inversionistas y asesores. 
    Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el 
    texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que 
    se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer 
    un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno 
    en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la 
    creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con 
    software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
    </p>
</body>
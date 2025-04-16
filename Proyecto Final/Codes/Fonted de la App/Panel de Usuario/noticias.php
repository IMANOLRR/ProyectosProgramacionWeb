<?php
require '../menu.php';
plantilla::aplicar();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
</head>
<body>
    <header>
        <h1>Noticias del Mercado</h1>
    </header>

    <main>
        <section id="noticias">
            <h2>Últimas Noticias</h2>
            <article>
                <h3>Título de la Noticia 1</h3>
                <p>Descripción breve de la noticia 1.</p>
            </article>
            <article>
                <h3>Título de la Noticia 2</h3>
                <p>Descripción breve de la noticia 2.</p>
            </article>
            <!-- Agregar más noticias según sea necesario -->
        </section>
</body>
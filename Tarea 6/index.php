<?php
require 'Libreria/plantilla.php';
plantilla::aplicar();
?>

<body>
    <div class="container">
        <h1 class="text-center">Gestion de personajes</h1>
        <div class="row">
            <div class="col-6">
                <h2>Personajes</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Clase</th>
                            <th>Nivel</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
            <div class="col-6">
                <h2>Crear personaje</h2>
                <form action="crear.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="clase">Clase</label>
                        <input type="text" name="clase" id="clase" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nivel">Nivel</label>
                        <input type="number" name="nivel" id="nivel" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Crear</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
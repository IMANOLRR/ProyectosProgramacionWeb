<?php
require 'Libreria/plantilla.php';
plantilla::aplicar();
?>

<body>
<div class="container">
    <div class="col-6">
                <h1>Editar personaje</h1>
                <form action="guardar.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="color">Color</label>
                        <input type="text" name="color" id="color" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <input type="text" name="tipo" id="tipo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nivel">Nivel</label>
                        <input type="number" name="nivel" id="nivel" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" id="foto" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<img src="/Libreria/fotos/zoro.png" alt="Zoro" width="100" height="100">
</body>
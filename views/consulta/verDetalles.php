<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Película 🤭</title>
    <?php require 'views/header.php' ?>
</head>

<body>
    <main>
        <h1>Actualizar Película 🤭</h1>

        <?php if ($this->error == true) { ?>

            <h4 class="error"><?php echo $this->mensaje; ?></h4>

        <?php } else { ?>

            <h4 class="success"><?php echo $this->mensaje; ?></h4>

        <?php } ?>

        <form action="<?php echo constant('URL'); ?>consulta/actualizarPelicula" method="post">
            <div>
                <label for="nombre">Nombre:</label><br>
                <input type="text" name="nombre" id="nombre" value="<?php echo $this->pelicula->nombre; ?>">
            </div>
            <div>
                <label for="genero">Genero:</label><br>
                <input type="text" name="genero" id="genero" value="<?php echo $this->pelicula->genero; ?>">
            </div>
            <div>
                <label for="calidad">Calidad:</label><br>
                <input type="text" name="calidad" id="calidad" value="<?php echo $this->pelicula->calidad; ?>">
            </div>

            <div>
                <input type="submit" value="Actualizar Película">
            </div>
        </form>
    </main>

    <?php require 'views/footer.php' ?>
</body>

</html>
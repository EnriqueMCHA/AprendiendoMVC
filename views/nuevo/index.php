<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Película 🤡</title>
    <?php require 'views/header.php' ?>
</head>

<body>
    <main>
        <h1>Registrar Película 🤡</h1>

        <form action="<?php echo constant('URL'); ?>nuevo/registrarPelicula" method="post">
            <div>
                <label for="nombre">Nombre:</label><br>
                <input type="text" name="nombre" id="nombre">
            </div>
            <div>
                <label for="genero">Genero:</label><br>
                <input type="text" name="genero" id="genero">
            </div>
            <div>
                <label for="calidad">Calidad:</label><br>
                <input type="text" name="calidad" id="calidad">
            </div>

            <div>
                <input type="submit" value="Registrar Película">
            </div>
        </form>
    </main>

    <?php require 'views/footer.php' ?>
</body>

</html>
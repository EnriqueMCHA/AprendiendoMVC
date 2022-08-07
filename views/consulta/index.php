<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esta vista será para las consultas 👀</title>
    <?php require 'views/header.php' ?>
</head>

<body>
    <main>
        <h1>Consultar Películas 👀</h1>

        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Género</th>
                    <th>Calidad</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once 'models/pelicula.php';

                foreach ($this->peliculas as $columnas) {
                    $pelicula = new Pelicula();
                    $pelicula = $columnas;
                ?>

                    <tr>
                        <td><?php echo $pelicula->nombre; ?></td>
                        <td><?php echo $pelicula->genero; ?></td>
                        <td><?php echo $pelicula->calidad; ?></td>
                        <td><a href="#" class="accion">Editar</a></td>
                        <td><a href="#" class="accion">Eliminar</a></td>
                    </tr>

                <?php } ?>

            </tbody>
        </table>


    </main>

    <?php require 'views/footer.php' ?>
</body>

</html>
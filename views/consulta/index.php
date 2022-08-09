<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Películas 👀</title>
    <?php require 'views/header.php' ?>
    <script src="<?php echo constant('URL'); ?>public/js/consulta.js"></script>
</head>

<body>
    <main>
        <h1>Consultar Películas 👀</h1>

        <h4 id="mensaje"></h4>

        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Género</th>
                    <th>Calidad</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody id="tbody-peliculas">
                <?php
                include_once 'models/pelicula.php';

                foreach ($this->peliculas as $columnas) {
                    $pelicula = new Pelicula();
                    $pelicula = $columnas;
                ?>

                    <tr id="fila-<?php echo $pelicula->id; ?>">
                        <td><?php echo $pelicula->nombre; ?></td>
                        <td><?php echo $pelicula->genero; ?></td>
                        <td><?php echo $pelicula->calidad; ?></td>
                        <td><a href="<?php echo constant('URL') . 'consulta/verPelicula/' . $pelicula->id ?>" class="accion">Editar</a></td>
                        <td><button class="btnEliminar" data-pelicula="<?php echo $pelicula->id ?>">Eliminar</button></td>
                        <!-- <td><a href="<?php echo constant('URL') . 'consulta/eliminarPelicula/' . $pelicula->id ?>" class="accion">Eliminar</a></td> -->
                    </tr>

                <?php } ?>

            </tbody>
        </table>
    </main>

    <?php require 'views/footer.php' ?>

    <script src="<?php echo constant('URL'); ?>public/js/consulta.js"></script>

</body>

</html>
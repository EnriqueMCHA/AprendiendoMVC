<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esta es la vista de Error Asie 😢</title>
    <?php require 'views/header.php' ?>
</head>

<body>
    <main>
        <h1 class="error"><?php echo $this->mensaje; ?></h1>
    </main>
    <?php require 'views/footer.php' ?>
</body>

</html>
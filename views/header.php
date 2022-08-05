<!DOCTYPE html>
<html lang="es">
<head>
    <!-- 
    para que el header pueda funcionar en todas lados, se puede solicitar el link desde la ruta  
    <link rel="stylesheet" href="http://localhost/aprendiendomvc/public/css/default.css"> 

    o

    podemos utilizar como está actualmente
    -->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/default.css">

</head>
<body>
    <header>
        <ul>
            <li><a href="<?php echo constant('URL'); ?>main">Inicio</a></li>
            <li><a href="<?php echo constant('URL'); ?>nuevo">Nuevo</a></li>
            <li><a href="<?php echo constant('URL'); ?>consulta">Consulta</a></li>
            <li><a href="<?php echo constant('URL'); ?>ayuda">Ayuda</a></li>
        </ul>
    </header>
</body>
</html>
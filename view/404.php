<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio | Modulo...</title>
    <link href="<?php echo $url.'/src/css/main.css?v='.filemtime($raiz.'/src/css/main.css'); ?>" rel="stylesheet">
</head>
<body>
    <nav>   
        <div class="navbar">
            <strong class="title-nav">Desarrolla aplicaciones web con conexion a base de datos</strong>
        </div>
    </nav>

    <!--Botones principales para elegir-->
    <div id="home-options">
        <h1>ERROR 404:</h1>
        <strong>Pagina no encontrada</strong>
    </div>
    <?php
    include_once($raiz."/view/templates/footer.php");
    ?>
</body>
</html>
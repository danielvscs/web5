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
        <a href="<?php echo $url; ?>/cobadaapweb/" >
            <div class="jumbo button home">
                <button role="link" >Contruye base de datos para aplicaciones web</button>
            </div>
        </a><a href="<?php echo $url; ?>/deawebcobad/">
            <div class="jumbo button home">
                <button role="link">Desarrolla aplicaciones web con conexion a base de datos</button>
            </div>
        </a>
        
    </div>
</body>
</html>
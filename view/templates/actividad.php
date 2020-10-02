

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title ?></title>
    <!-------------------Forza a cargar los estilos css mientras está en estado de desarrollo ------------------------>
    <link href="<?php echo $url.'/src/css/main.css?v='.filemtime($raiz.'/src/css/main.css'); ?>" rel="stylesheet">
</head>
<body>
    <nav class="inv">   
        <div class="navbar">
            <strong class="title-nav"><a href="/web5/" class="a-white">Desarrolla aplicaciones web con conexion a base de datos</a></strong>
        </div>
    </nav>

    <div class="d-act">
        <h1><?php echo $title; ?></h1>

        <div class="act-contenido">
        <?php
            for($i = 0; $i < count($content); $i++){
                if($content[$i][0]=="text"){
                    echo "          <p>".$content[$i][1]."</p><br>\n";
                }else if($content[$i][0]=="image"){
                    echo "          <img class='img-act' src='".$content[$i][1]."' /><br>\n";
                }
            }        

        ?>
        </div>

    </div>
</body>
</html>
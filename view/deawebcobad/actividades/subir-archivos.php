
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Subir imagenes</title>
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
        <h1>Subir imagenes</h1>

        <form name="demo" method="post" action="carga.php" enctype="multipart/form-data" class="form-s">
            
            <label>CURP: </label>
            <br>
            <input type="text" name="curp" size="20" maxlength="18">
            <br>
            <input type="file" name="documento" size="50" accept=".jpg">
            <br>
            <input name="forma" type="hidden" value="no-orde">
            <input type="submit" name="procesos" value="Enviar">

        </form>
        
    </div>
</body>
</html>
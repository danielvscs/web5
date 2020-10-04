
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <!-------------------Forza a cargar los estilos css mientras está en estado de desarrollo ------------------------>
    
    <link href="<?php echo $url.'/src/css/gestorescuela.css?v='.filemtime($raiz.'/src/css/gestorescuela.css'); ?>" rel="stylesheet">
    <link href="<?php echo $url.'/src/css/main.css?v='.filemtime($raiz.'/src/css/main.css'); ?>" rel="stylesheet">
</head>
<body>
    <nav class="inv">   
        <div class="navbar">
            <strong class="title-nav"><a href="<?php echo $url ?>" class="a-white">Desarrolla aplicaciones web con conexion a base de datos</a></strong>
        </div>
    </nav>

    <div class="d-act center form">

        <div class="d-content">
            <div  class="radius-sup" >
                <h1>Registro de alumnos</h1>
            </div>
            <div class="radius-inf">
                <form name="add-grupos" method="post" action="control/agregar">
                    <label>Nombre</label>
                    <input type="text" name="nombre" maxlength="50">
                    <br>
                    <label>CURP</label>
                    <input type="text" name="curp" maxlength="18">
                    <br>
                    <label>Correo</label>
                    <input type="text" name="correo" maxlength="60">
                    <br>
                    <label>Celular</label>
                    <input type="text" name="celular" maxlength="10">
                    <br>
                    <label>Domicilio</label>
                    <input type="text" name="domicilio" maxlength="80">
                    <br>
                    <label>Ciudad</label>
                    <input type="text" name="ciudad" maxlength="30">
                    <br>
                <input name="forma" type="hidden" value="si-orde">
                <input type="submit" name="procesos" value="Enviar">
    
            </form>
            
            </div>
        </div>

        
    </div>
</body>
</html>
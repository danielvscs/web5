
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Subir imagenes</title>
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
                <h1>Registro de maestros</h1>
            </div>
            <div class="radius-inf">
                <form name="add-grupos" method="post" action="">
                    <label><strong>Nombre:</strong></label><br>
                    <input name="appat" maxlength="15" size="15" placeholder="Apellido paterno">
                    <input name="apmat" maxlength="15" size="15" placeholder="Apellido materno">
                    <input name="nombre" maxlength="15" size="15" placeholder="nombre">
                    <br>
                    <label>RFC: </label>
                    <input name="rfc" maxlength="13" size="15" placeholder="RFC" style="text-transform:uppercase;" >
                    <label>CURP:</label>
                    <input name="curp" maxlength="18" size="20" placeholder="CURP" style="text-transform:uppercase;" >
                    
                    <input name="idstatus" type="hidden" value="1">
                <br>
                <input name="forma" type="hidden" value="si-orde">
                <input type="submit" name="procesos" value="Enviar">
    
            </form>
            
            </div>
        </div>

        
    </div>
</body>
</html>
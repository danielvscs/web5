

<?php

include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/especialidades.php");
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/model/bd_especialidad.php");



$datos = new especialidades($_POST);

$bd = new bd_especialidad();

$lista = $bd->busca($datos->getidespecialidad());


?>

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
            <strong class="title-nav"><a href="/web5/" class="a-white">Desarrolla aplicaciones web con conexion a base de datos</a></strong>
        </div>
    </nav>

    <div class="d-act center form">

        <div class="d-content">
            <div  class="radius-sup" >
                <h1>Registro de especialidad</h1>
            </div>
            <div class="radius-inf">
                <form name="add-grupos" method="post" action="actualizarp">
                    <label>Nombre: </label>
                    <input name="especialidad" type="text" maxlength="40" value="<?php echo $lista[0]->getespecialidad() ?>">
                    <br>
                    <br>
                
                <input name="idespecialidad" type="hidden" value="<?php echo $lista[0]->getidespecialidad() ?>">
                <input type="submit" name="procesos" value="Enviar">
                
    
            </form>
            
            </div>
        </div>

        
    </div>
</body>
</html>
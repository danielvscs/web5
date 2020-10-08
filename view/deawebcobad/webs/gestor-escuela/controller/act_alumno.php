

<?php

include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/alumnos.php");
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/model/bd_alumno.php");


$datos = new alumnos($_POST);

$bd = new bd_alumno();

$lista = $bd->busca($datos->getidalumno());


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualiza alumnos</title>
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
                <h1>Actualizar</h1>
            </div>
            <div class="radius-inf">
                <form name="add-grupos" method="post" action="actualizarp">
                <label>Nombre</label>
                <input type="text" value="<?php echo $lista[0]->getnombre(); ?>" name="nombre" maxlength="50">
                <br>
                <label>CURP</label>
                <input type="text" value="<?php echo $lista[0]->getcurp(); ?>" name="curp" maxlength="18">
                <br>
                <label>Correo</label>
                <input type="text" value="<?php echo $lista[0]->getcorreo(); ?>" name="correo" maxlength="60">
                <br>
                <label>Celular</label>
                <input type="text" value="<?php echo $lista[0]->getcelular(); ?>" name="celular" maxlength="10">
                <br>
                <label>Domicilio</label>
                <input type="text" value="<?php echo $lista[0]->getdomicilio(); ?>" name="domicilio" maxlength="80">
                <br>
                <label>Ciudad</label>
                <input type="text" value="<?php echo $lista[0]->getciudad(); ?>" name="ciudad" maxlength="30">
                <br>
                
                <input name="idalumno" type="hidden" value="<?php echo $lista[0]->getidalumno(); ?>">
                <input type="submit" name="procesos" value="Enviar">
    
            </form>
            
            </div>
        </div>

        
    </div>
    <?php
    include_once($raiz."/view/templates/footer.php");
    ?>
</body>
</html>
<?php

include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/materias.php");
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/model/bd_materia.php");


$datos = new materias($_POST);

$bd = new bd_materia();

$lista = $bd->busca($datos->getidmateria());


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar</title>
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
                <h1>Actualiza materias</h1>
            </div>
            <div class="radius-inf">
                <form name="add-grupos" method="post" action="actualizarp">
                    <label>Nombre: </label>
                    <input name="materia" type="text" maxlength="40"  value="<?php echo $lista[0]->getmateria(); ?>">
                    <br>
                    <label>Area: </label>
                    <select name='area'>
                        <option value="0" <?php if($lista[0]->getarea()==0){echo "selected";} ?>> </option>
                        <option value="1" <?php if($lista[0]->getarea()==1){echo "selected";} ?>>Componente básico</option>
                        <option value="2" <?php if($lista[0]->getarea()==2){echo "selected";} ?>>Componente profecional</option>
                    </select>
                    <br>

                
                <input name="idmateria" type="hidden" value="<?php echo $lista[0]->getidmateria(); ?>">
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
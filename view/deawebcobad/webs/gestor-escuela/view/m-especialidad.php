

<?php

include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/especialidades.php");
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/model/bd_especialidad.php");


$bd = new bd_especialidad();

$lista = $bd->lista();


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualiza especialidades</title>
    <!-------------------Forza a cargar los estilos css mientras está en estado de desarrollo ------------------------>
    
    <link href="<?php echo $url.'/src/css/gestorescuela.css?v='.filemtime($raiz.'/src/css/gestorescuela.css'); ?>" rel="stylesheet">
    <link href="<?php echo $url.'/src/css/main.css?v='.filemtime($raiz.'/src/css/main.css'); ?>" rel="stylesheet">
</head>
<body>
    <nav class="inv">   
        <div class="navbar">
            <strong class="title-nav"><a href='<?php echo $url?>' class="a-white">Desarrolla aplicaciones web con conexion a base de datos</a></strong>
        </div>
    </nav>

    <div class="d-act center form">

        <div class="d-content">
            <div  class="radius-sup" >
                <h1>Especialidades registradas</h1>
            </div>
            <div class="radius-inf">
                <form action="control/actualizar" method="POST">
                        <?php
                        for ($i=0; $i < count($lista); $i++) {
                            echo "  <input type='radio' name='idespecialidad' value='".$lista[$i]->getidespecialidad()."' >".$lista[$i]->getespecialidad()."<br>\n";

                        }
                        ?>
                        <button type="submit" class="btn">actualizar</button>
                </form>
            
            </div>
        </div>

        
    </div>
    <?php
    include_once($raiz."/view/templates/footer.php");
    ?>
</body>
</html>
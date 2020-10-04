

<?php

include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/materias.php");
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/model/bd_materia.php");

include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/grupos.php");
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/model/bd_grupo.php");

include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/maestros.php");
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/model/bd_maestro.php");

include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/carga.php");
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/model/bd_carga.php");


$bde = new bd_materia();
$bdg= new bd_grupo();
$bdm = new bd_maestro(1);

$bdc = new bd_carga();


$lista = $bdc->lista();
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consulta de cargas</title>
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
                <h1>Cargas registradas</h1>
            </div>
            <div class="radius-inf">
                <form action="control/eliminar" method="POST">
                        <?php
                        for ($i=0; $i < count($lista); $i++) {
                            
                            $grupo =$bdg->busca($lista[$i]->getidgrupo())[0];
                            $maestro =$bdm->busca($lista[$i]->getidmaestro())[0];
                            echo "  <input type='radio' name='idgrupo' value='".$lista[$i]->getidcarga()."' >".$maestro->getappat()." ".$maestro->getapmat()." ".$maestro->getnombre()." | ".$grupo->getsemestre().$gupo->getgrupo().$grupo->getturno()."<br>\n";

                        }
                        ?>
                        <button type="submit" class="btn">Eliminar</button>
                </form>
            
            </div>
        </div>

        
    </div>
</body>
</html>
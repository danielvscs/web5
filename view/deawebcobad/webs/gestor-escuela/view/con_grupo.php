<?php

include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/grupos.php");
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/model/bd_grupo.php");

$bd = new bd_grupo();
$lista = $bd->lista();

include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/especialidades.php");
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/model/bd_especialidad.php");


$bde = new bd_especialidad();

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consulta de especialidades</title>
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
                <table>
                    <tbody>
                        <?php
                        for ($i=0; $i < count($lista); $i++) { 
                            echo "<tr>\n";
                            echo "  <td>".$lista[$i]->getsemestre()."</td>\n";
                            echo "  <td>".$lista[$i]->getgrupo()."</td>\n";
                            echo "  <td>".$lista[$i]->getturno()."</td>\n";
                            echo "  <td>".$bde->busca($lista[$i]->getidespecialidad())[0]->getespecialidad()."</td>\n";
                            echo "</tr>\n";
                        }
                        ?>
                    </tbody>
                </table>
            
            </div>
        </div>

        
    </div>
</body>
</html>
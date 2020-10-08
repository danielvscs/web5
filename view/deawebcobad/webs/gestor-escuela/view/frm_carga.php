<?php

include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/materias.php");
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/model/bd_materia.php");

include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/grupos.php");
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/model/bd_grupo.php");

include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/maestros.php");
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/model/bd_maestro.php");


$bde = new bd_materia();
$bdg= new bd_grupo();
$bdm = new bd_maestro();

$listaec = $bde->lista();
$listagc = $bdg->lista();
$listamc = $bdm->lista(1);

$datae = array("idmateria", "", array(),array());

$datae[2][0]=0;
$datae[3][0]="";
for ($i=1; $i <=count($listaec) ; $i++) { 
    $datae[2][$i]=$listaec[$i-1]->getidmateria();
    $datae[3][$i]=$listaec[$i-1]->getmateria();
}


$datag = array("idgrupo", "", array(),array());

$datag[2][0]=0;
$datag[3][0]="";
for ($i=1; $i <=count($listagc) ; $i++) { 
    $datag[2][$i]=$listagc[$i-1]->getidgrupo();
    $datag[3][$i]=$listagc[$i-1]->getsemestre().$listagc[$i-1]->getgrupo()." ".$listagc[$i-1]->getturno();
}


$datam = array("idmaestro", "",array(),array());

$datam[2][0]=0;
$datam[3][0]="";
for ($i=1; $i <=count($listamc) ; $i++) { 
    $datam[2][$i]=$listamc[$i-1]->getidmaestro();
    $datam[3][$i]=$listamc[$i-1]->getnombre()." ".$listamc[$i-1]->getappat()." ".$listamc[$i-1]->getapmat();
}

?>


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
            <strong class="title-nav"><a href="/web5/" class="a-white">Desarrolla aplicaciones web con conexion a base de datos</a></strong>
        </div>
    </nav>

    <div class="d-act center form">

        <div class="d-content">
            <div  class="radius-sup" >
                <h1>Registro de carga</h1>
            </div>
            <div class="radius-inf">
                <form name="add-grupos" method="post" action="control/agregar">
                    
                <label>Maestro</label>
                <?php echo $bde->showselect($datam); ?>
                <label>Grupo</label>
                <?php echo $bde->showselect($datag); ?>
                <br>
                <label>Materia: </label>
                <?php echo $bde->showselect($datae); ?>


                
                <input name="forma" type="hidden" value="si-orde">
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
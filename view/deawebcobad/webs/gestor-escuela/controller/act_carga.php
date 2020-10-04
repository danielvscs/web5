<?php

include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/materias.php");
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/model/bd_materia.php");

include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/grupos.php");
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/model/bd_grupo.php");

include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/maestros.php");
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/model/bd_maestro.php");

$id = $_POST['idcarga'];

$bde = new bd_materia();
$bdg= new bd_grupo();
$bdm = new bd_maestro();

$listae = $bde->lista();
$listag = $bdg->lista();
$listam = $bdm->lista(1);

$datae = array("idmateria", array(),array());

$datae[1][0]=0;
$datae[2][0]="";
for ($i=1; $i <=count($listae) ; $i++) { 
    $datae[1][$i]=$listae[$i-1]->getidmateria();
    $datae[2][$i]=$listae[$i-1]->getmateria();
}


$datag = array("idgrupo", array(),array());

$datag[1][0]=0;
$datag[2][0]="";
for ($i=1; $i <=count($listag) ; $i++) { 
    $datag[1][$i]=$listag[$i-1]->getidgrupo();
    $datag[2][$i]=$listag[$i-1]->getsemestre().$listag[$i-1]->getgrupo()." ".$listag[$i-1]->getturno();
}


$datam = array("idmaestro", array(),array());

$datam[1][0]=0;
$datam[2][0]="";
for ($i=1; $i <=count($listam) ; $i++) { 
    $datam[1][$i]=$listam[$i-1]->getidmaestro();
    $datam[2][$i]=$listam[$i-1]->getnombre()." ".$listam[$i-1]->getappat()." ".$listam[$i-1]->getapmat();
}

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
                <h1>Actualiza carga</h1>
            </div>
            <div class="radius-inf">
                <form name="add-grupos" method="post" action="actualizarp">
                    
                <label>Maestro</label>
                <?php echo $bdm->showselect($datam); ?>
                <label>Grupo</label>
                <?php echo $bdm->showselect($datag); ?>
                <br>
                <label>Especialidad: </label>
                <?php echo $bdm->showselect($datae); ?>


                
                <input name="idcarga" type="hidden" value="<?php echo $id ?>">
                <input type="submit" name="procesos" value="Enviar">
    
            </form>
            
            </div>
        </div>

        
    </div>
</body>
</html>
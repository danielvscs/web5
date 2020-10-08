<?php

include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/especialidades.php");
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/model/bd_especialidad.php");


$bd = new bd_especialidad();

$lista = $bd->lista();

$data = array("idespecialidad", "", array(),array());

$data[2][0]=0;
$data[3][0]="";
for ($i=1; $i <=count($lista) ; $i++) { 
    $data[2][$i]=$lista[$i-1]->getidespecialidad();
    $data[3][$i]=$lista[$i-1]->getespecialidad();
}


$data_sem = array(
    "semestre",
    "",
    array(0,1,2,3,4,5,6),
    array("","1°","2°","3°","4°","5°","6°")
);


$data_grp=array(
    "grupo",
    "",
    array("","A","B","C","D"),
    array("","A","B","C","D")
);


$data_trn = array(
    "turno",
    "-1",
    array("-1","M","V"),
    array("","Matutino","Vespertino"),

);
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
                <h1>Registro de grupos</h1>
            </div>
            <div class="radius-inf">
                <form name="add-grupos" method="post" action="control/agregar">
                    
                <label>Semestre</label>
                <?php echo $bd->showselect($data_sem); ?>
                <label>Grupo</label>
                <?php echo $bd->showselect($data_grp); ?>
                <br>
                <label>Turno: </label>
                <?php echo $bd->showselect($data_trn); ?>
                <label>Especialidad: </label>
                <?php echo $bd->showselect($data); ?>


                
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
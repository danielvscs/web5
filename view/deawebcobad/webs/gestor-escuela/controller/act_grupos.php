<?php

include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/especialidades.php");
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/model/bd_especialidad.php");


$bd = new bd_especialidad();

$lista = $bd->lista();

$data = array("idespecialidad", array(),array());

$data[1][0]=0;
$data[2][0]="";
for ($i=1; $i <=count($lista) ; $i++) { 
    $data[1][$i]=$lista[$i-1]->getidespecialidad();
    $data[2][$i]=$lista[$i-1]->getespecialidad();
}

include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/grupos.php");
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/model/bd_grupo.php");


$datos = new grupos($_POST);

$bd = new bd_grupo();

$lista = $bd->busca($datos->getidgrupo());



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
                <h1>Actualiza grupos</h1>
            </div>
            <div class="radius-inf">
                <form name="add-grupos" method="post" action="actualizarp">
                    
                <label>Semestre</label>
                <select name="semestre">
                    <option value="0" <?php if($lista[0]->getsemestre()==0){echo "selected";} ?>> </option>
                    <option value="1" <?php if($lista[0]->getsemestre()==1){echo "selected";} ?>>1°</option>
                    <option value="2" <?php if($lista[0]->getsemestre()==2){echo "selected";} ?>>2°</option>
                    <option value="3" <?php if($lista[0]->getsemestre()==3){echo "selected";} ?>>3°</option>
                    <option value="4" <?php if($lista[0]->getsemestre()==4){echo "selected";} ?>>4°</option>
                    <option value="5" <?php if($lista[0]->getsemestre()==5){echo "selected";} ?>>5°</option>
                    <option value="6" <?php if($lista[0]->getsemestre()==6){echo "selected";} ?>>6°</option>
                </select>
                <label>Grupo</label>
                <select name="grupo">
                    <option value="0" <?php if($lista[0]->getgrupo()=="0"){echo "selected";} ?>> </option>
                    <option value="A" <?php if($lista[0]->getgrupo()=="A"){echo "selected";} ?>>A</option>
                    <option value="B" <?php if($lista[0]->getgrupo()=="B"){echo "selected";} ?>>B</option>
                    <option value="C" <?php if($lista[0]->getgrupo()=="C"){echo "selected";} ?>>C</option>
                    <option value="D" <?php if($lista[0]->getgrupo()=="B"){echo "selected";} ?>>D</option>
                </select>
                <br>
                <label>Turno: </label>
                <select name="turno">
                    <option value="-1"  <?php if($lista[0]->getturno()=="-1"){echo "selected";} ?>> </option>
                    <option value="M" <?php if($lista[0]->getturno()=="M"){echo "selected";} ?>>Matutino</option>
                    <option value="V" <?php if($lista[0]->getturno()=="V"){echo "selected";} ?>>Vespertino</option>
                </select>
                <label>Especialidad: </label>
                <?php echo $bd->showselect($data); ?>


                
                <input name="idgrupo" type="hidden" value="<?php echo $lista[0]->getidgrupo(); ?>">
                <input type="submit" name="procesos" value="Enviar">
    
            </form>
            
            </div>
        </div>

        
    </div>
</body>
</html>
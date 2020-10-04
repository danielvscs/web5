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
                <select name="semestre">
                    <option value="0"> </option>
                    <option value="1">1°</option>
                    <option value="2">2°</option>
                    <option value="3">3°</option>
                    <option value="4">4°</option>
                    <option value="5">5°</option>
                    <option value="6">6°</option>
                </select>
                <label>Grupo</label>
                <select name="grupo">
                    <option value="0"> </option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
                <br>
                <label>Turno: </label>
                <select name="turno">
                    <option value="-1"> </option>
                    <option value="M">Matutino</option>
                    <option value="V">Vespertino</option>
                </select>
                <label>Especialidad: </label>
                <?php echo $bd->showselect($data); ?>


                
                <input name="forma" type="hidden" value="si-orde">
                <input type="submit" name="procesos" value="Enviar">
    
            </form>
            
            </div>
        </div>

        
    </div>
</body>
</html>
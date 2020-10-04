<?php

include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/materias.php");
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/model/bd_materia.php");


$datos = new materias($_POST);
$bd = new bd_materia();

$bd->agrega($datos);


#header a especialidad
<?php

include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/grupos.php");
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/model/bd_grupo.php");


$datos = new grupos($_POST);
$bd = new bd_grupo();

$bd->agrega($datos);


#header a especialidad
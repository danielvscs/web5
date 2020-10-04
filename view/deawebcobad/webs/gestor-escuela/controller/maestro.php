<?php

include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/maestros.php");
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/model/bd_maestro.php");


$datos = new maestros($_POST);
$bd = new bd_maestro();

$bd->agrega($datos);


#header a especialidad
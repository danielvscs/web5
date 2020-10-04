<?php

include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/carga.php");


$datos = new cargar($_POST);


include_once($raiz."/view/deawebcobad/webs/gestor-escuela/model/bd_carga.php");

$bd = new bd_cargar();

$bd->agrega($datos);


#header a especialidad
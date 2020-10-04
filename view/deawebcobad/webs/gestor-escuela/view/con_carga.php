<?php

include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/carga.php");


$datos = new cargar($_REQUEST);


include_once($raiz."/view/deawebcobad/webs/gestor-escuela/model/carga.php");

$bd = new cargar();

$bd->agregar($datos);


#header a especialidad
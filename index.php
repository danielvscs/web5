<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$local = false;
$dev = false;


$lh = "";

$url = "https://danvscs47.000webhostapp.com";

$componentes_url = parse_url($_SERVER['REQUEST_URI']);
$ruta = $componentes_url['path'];
if($local){
    $ruta = str_replace("/web5", "", $ruta);
    $lh="/web5";
    $url="http://localhost/web5";
}

$raiz= $_SERVER['DOCUMENT_ROOT'].$lh;



$partes_ruta = explode("/", $ruta);
$partes_ruta = array_filter($partes_ruta);
$partes_ruta = array_slice($partes_ruta, 0);


$ruta_elegida = 'view/404.php';

if($partes_ruta == null){
    $ruta_elegida= "view/home.php";
}
/*
if(count($partes_ruta>0) && $partes_ruta[0]="recursos"){
    for($i = 1; $i<count($pa))
}
*/
if(count($partes_ruta)==1){
    switch($partes_ruta[0]){
        case 'home':
            $ruta_elegida= "view/home.php";
        break;
        case 'cobadaapweb':
            $ruta_elegida = 'view/cobadaapweb/menu.php';
        break;
        case 'deawebcobad':
            $ruta_elegida = 'view/deawebcobad/menu.php';
        break;
       
        
    }
}

if(count($partes_ruta)>=3){
    if($partes_ruta[0]=="cobadaapweb" && $partes_ruta[1]=="actividad"){
        $ruta_elegida="view/cobadaapweb/actividades/".$partes_ruta[2];
    }else if($partes_ruta[0]=="deawebcobad" && $partes_ruta[1]=="actividad"){
        $ruta_elegida="view/deawebcobad/actividades/".$partes_ruta[2];
    }else  if($partes_ruta[0]=="cobadaapweb" && $partes_ruta[1]=="web"){
        //$ruta_elegida="view/cobadaapweb/webs/redirect.php";
    }else if($partes_ruta[0]=="deawebcobad" && $partes_ruta[1]=="web"){
        $ruta_elegida="view/deawebcobad/webs/redirect.php";
    }
}


if(count($partes_ruta)==5){

    if($partes_ruta[3]=="testlocalhost" && $partes_ruta[1]=="a"){
        $ruta_elegida="view/templates/test/".$partes_ruta[4];
    }
}


include_once $ruta_elegida;
?>